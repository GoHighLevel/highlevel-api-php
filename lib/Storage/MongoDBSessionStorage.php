<?php

namespace HighLevel\Storage;

use HighLevel\Logging\Logger;
use MongoDB\Client;
use MongoDB\Database;
use MongoDB\Collection;
use MongoDB\BSON\UTCDateTime;

/**
 * MongoDB implementation of SessionStorage
 * Provides MongoDB-based storage for sessions, tokens, and related data
 * 
 * @package HighLevel\Storage
 */
class MongoDBSessionStorage extends SessionStorage
{
    /**
     * MongoDB client instance
     * @var Client|null
     */
    private ?Client $client = null;

    /**
     * MongoDB database instance
     * @var Database|null
     */
    private ?Database $db = null;

    /**
     * MongoDB connection URI
     * @var string
     */
    private string $dbUrl;

    /**
     * Database name
     * @var string
     */
    private string $dbName;

    /**
     * Collection name for sessions
     * @var string
     */
    private string $collectionName;

    /**
     * OAuth client ID
     * @var string
     */
    private string $clientId = '';

    /**
     * Connection status
     * @var bool
     */
    private bool $isConnected = false;

    /**
     * Create a new MongoDBSessionStorage instance
     * 
     * @param string $dbUrl MongoDB connection URI
     * @param string $dbName Database name
     * @param string $collectionName Collection name (default: 'application_sessions')
     * @param Logger|null $logger Logger instance
     */
    public function __construct(
        string $dbUrl,
        string $dbName,
        string $collectionName = 'application_sessions',
        ?Logger $logger = null
    ) {
        if (!class_exists(Client::class)) {
            throw new \RuntimeException(
                'MongoDBSessionStorage requires the mongodb/mongodb package. '
                . 'Install it with: '
                . 'composer require mongodb/mongodb:^1.17 (PHP 7.4 / 8.0) '
                . 'or composer require mongodb/mongodb:^2.0 (PHP 8.1+). '
                . 'The PECL ext-mongodb extension is also required.'
            );
        }
        parent::__construct($logger ? $logger->child('MongoDB') : new Logger('warn', 'GHL SDK MongoDB'));
        $this->dbUrl = $dbUrl;
        $this->dbName = $dbName;
        $this->collectionName = $collectionName;
    }

    /**
     * Set the client ID (called automatically by HighLevel class)
     * 
     * @param string $clientId The client ID from HighLevel configuration
     * @return void
     * @throws \Exception If clientId is empty
     */
    public function setClientId(string $clientId): void
    {
        if (empty($clientId)) {
            throw new \Exception('ClientId is required for session storage');
        }
        $this->clientId = $clientId;
        $this->logger->debug("SessionStorage clientId set: {$this->getApplicationId()}");
    }

    /**
     * Extract applicationId from clientId (first part before "-")
     * 
     * @return string Application ID
     * @throws \Exception If clientId is not set
     */
    private function getApplicationId(): string
    {
        if (empty($this->clientId)) {
            throw new \Exception('ClientId not set. Make sure HighLevel class has a valid clientId configured.');
        }
        return explode('-', $this->clientId)[0];
    }


    /**
     * Initialize the MongoDB connection
     * 
     * @return void
     * @throws \Exception
     */
    public function init(): void
    {
        try {
            $this->client = new Client($this->dbUrl);
            $this->db = $this->client->selectDatabase($this->dbName);
            $this->createCollection($this->collectionName);
            $this->isConnected = true;
            
            $this->logger->info("Connected to MongoDB database: {$this->dbName}");
        } catch (\Exception $error) {
            $this->logger->error("Failed to connect to MongoDB: {$error->getMessage()}");
            throw $error;
        }
    }

    /**
     * Close the MongoDB connection
     * 
     * @return void
     * @throws \Exception
     */
    public function disconnect(): void
    {
        try {
            if ($this->isConnected && $this->client) {
                // MongoDB PHP library doesn't have explicit close
                // Connection will be closed when object is destroyed
                $this->isConnected = false;
                $this->db = null;
                $this->client = null;
                $this->logger->info('Disconnected from MongoDB');
            }
        } catch (\Exception $error) {
            $this->logger->error("Error disconnecting from MongoDB: {$error->getMessage()}");
            throw $error;
        }
    }

    /**
     * Create a collection if it doesn't exist
     * 
     * @param string $collectionName Name of the collection to create
     * @return void
     * @throws \Exception
     */
    public function createCollection(string $collectionName): void
    {
        if (!$this->db) {
            throw new \Exception('Database not initialized. Call init() first.');
        }

        try {
            // Get list of existing collections
            $collections = iterator_to_array($this->db->listCollections());
            $collectionExists = false;
            
            foreach ($collections as $collection) {
                if ($collection->getName() === $collectionName) {
                    $collectionExists = true;
                    break;
                }
            }
            
            if (!$collectionExists) {
                $this->db->createCollection($collectionName);
                $this->logger->debug("Created MongoDB collection: {$collectionName}");

                // Create compound unique index on applicationId and resourceId
                $collection = $this->db->selectCollection($collectionName);
                $collection->createIndex(
                    ['applicationId' => 1, 'resourceId' => 1],
                    ['unique' => true, 'name' => 'application_resource_unique']
                );
                $this->logger->debug("Created unique compound index on applicationId and resourceId");
            } else {
                $this->logger->debug("MongoDB collection already exists: {$collectionName}");
            }
        } catch (\Exception $error) {
            $this->logger->error("Error creating collection {$collectionName}: {$error->getMessage()}");
            throw $error;
        }
    }

    /**
     * Get a reference to a collection
     * 
     * @param string $collectionName Name of the collection to get
     * @return Collection
     * @throws \Exception
     */
    public function getCollection(string $collectionName): Collection
    {
        if (!$this->db) {
            throw new \Exception('Database not initialized. Call init() first.');
        }

        // Ensure collection exists
        $this->createCollection($collectionName);
        
        return $this->db->selectCollection($collectionName);
    }

    /**
     * Store a session in MongoDB
     * 
     * @param string $resourceId Unique identifier: it can be a companyId or a locationId
     * @param SessionData $sessionData Session data to store
     * @return void
     * @throws \Exception
     */
    public function setSession(string $resourceId, SessionData $sessionData): void
    {
        try {
            $collection = $this->getCollection($this->collectionName);
            $applicationId = $this->getApplicationId();

            // Convert to array and merge with metadata
            $sessionArray = $sessionData->toArray();
            $sessionDocument = array_merge([
                'applicationId' => $applicationId,
                'resourceId' => $resourceId,
            ], $sessionArray, [
                'expire_at' => $this->calculateExpireAt($sessionData->expires_in)
            ]);

            $collection->findOneAndUpdate(
                ['applicationId' => $applicationId, 'resourceId' => $resourceId],
                [
                    '$set' => $sessionDocument,
                    '$setOnInsert' => [
                        'createdAt' => new UTCDateTime(),
                    ],
                    '$currentDate' => [
                        'updatedAt' => true,
                    ],
                ],
                ['upsert' => true]
            );

            $this->logger->debug("Session stored: {$applicationId}:{$resourceId}");
        } catch (\Exception $error) {
            $this->logger->error("Error storing session {$this->getApplicationId()}:{$resourceId}: {$error->getMessage()}");
            throw $error;
        }
    }

    /**
     * Retrieve a session from MongoDB
     * 
     * @param string $resourceId Unique identifier: it can be a companyId or a locationId
     * @return SessionData|null Session data or null if not found
     * @throws \Exception
     */
    public function getSession(string $resourceId): ?SessionData
    {
        try {
            $collection = $this->getCollection($this->collectionName);
            $applicationId = $this->getApplicationId();

            $sessionDocument = $collection->findOne(['applicationId' => $applicationId, 'resourceId' => $resourceId]);

            if (!$sessionDocument) {
                return null;
            }

            $this->logger->debug("Session retrieved: {$applicationId}:{$resourceId}");
            
            // Convert BSON document to array and remove MongoDB metadata
            $sessionArray = (array) $sessionDocument;
            unset(
                $sessionArray['applicationId'],
                $sessionArray['resourceId'],
                $sessionArray['createdAt'],
                $sessionArray['updatedAt'],
                $sessionArray['_id']
            );
            
            return new SessionData($sessionArray);
        } catch (\Exception $error) {
            $this->logger->error("Error retrieving session {$this->getApplicationId()}:{$resourceId}: {$error->getMessage()}");
            throw $error;
        }
    }

    /**
     * Delete a session from MongoDB
     * 
     * @param string $resourceId Unique identifier: it can be a companyId or a locationId
     * @return void
     * @throws \Exception
     */
    public function deleteSession(string $resourceId): void
    {
        try {
            $collection = $this->getCollection($this->collectionName);
            $applicationId = $this->getApplicationId();

            $result = $collection->deleteOne(['applicationId' => $applicationId, 'resourceId' => $resourceId]);

            if ($result->getDeletedCount() > 0) {
                $this->logger->debug("Session deleted: {$applicationId}:{$resourceId}");
            } else {
                $this->logger->debug("Session not found for deletion: {$applicationId}:{$resourceId}");
            }
        } catch (\Exception $error) {
            $this->logger->error("Error deleting session {$this->getApplicationId()}:{$resourceId}: {$error->getMessage()}");
            throw $error;
        }
    }

    /**
     * Get only the access token for a resource
     * 
     * @param string $resourceId Unique identifier for the resource (companyId or locationId)
     * @return string|null Access token or null if not found
     * @throws \Exception
     */
    public function getAccessToken(string $resourceId): ?string
    {
        try {
            $collection = $this->getCollection($this->collectionName);
            $applicationId = $this->getApplicationId();

            $sessionDocument = $collection->findOne(
                ['applicationId' => $applicationId, 'resourceId' => $resourceId],
                ['projection' => ['access_token' => 1]]
            );
            
            if (!$sessionDocument) {
                return null;
            }
            
            return $sessionDocument['access_token'] ?? null;
        } catch (\Exception $error) {
            $this->logger->error("Error retrieving access token {$this->getApplicationId()}:{$resourceId}: {$error->getMessage()}");
            throw $error;
        }
    }

    /**
     * Get only the refresh token for a resource
     * 
     * @param string $resourceId Unique identifier for the resource (companyId or locationId)
     * @return string|null Refresh token or null if not found
     * @throws \Exception
     */
    public function getRefreshToken(string $resourceId): ?string
    {
        try {
            $collection = $this->getCollection($this->collectionName);
            $applicationId = $this->getApplicationId();

            $sessionDocument = $collection->findOne(
                ['applicationId' => $applicationId, 'resourceId' => $resourceId],
                ['projection' => ['refresh_token' => 1]]
            );
            
            if (!$sessionDocument) {
                return null;
            }
            
            return $sessionDocument['refresh_token'] ?? null;
        } catch (\Exception $error) {
            $this->logger->error("Error retrieving refresh token {$this->getApplicationId()}:{$resourceId}: {$error->getMessage()}");
            throw $error;
        }
    }

    /**
     * Get all sessions for this application
     * 
     * @return array<array<string, mixed>> Array of session data for the application
     * @throws \Exception
     */
    public function getSessionsByApplication(): array
    {
        try {
            $collection = $this->getCollection($this->collectionName);
            $applicationId = $this->getApplicationId();
            
            $sessions = $collection->find(['applicationId' => $applicationId])->toArray();
            
            $count = count($sessions);
            $this->logger->debug("Found {$count} sessions for application: {$applicationId}");
            
            // Return session data without MongoDB metadata as SessionData instances
            $cleanSessions = [];
            foreach ($sessions as $doc) {
                $sessionArray = (array) $doc;
                unset(
                    $sessionArray['applicationId'],
                    $sessionArray['resourceId'],
                    $sessionArray['createdAt'],
                    $sessionArray['updatedAt'],
                    $sessionArray['_id']
                );
                $cleanSessions[] = new SessionData($sessionArray);
            }
            
            return $cleanSessions;
        } catch (\Exception $error) {
            $this->logger->error("Error retrieving sessions for application {$this->getApplicationId()}: {$error->getMessage()}");
            throw $error;
        }
    }

    /**
     * Get the underlying MongoDB database instance
     * 
     * @return Database|null
     */
    public function getDb(): ?Database
    {
        return $this->db;
    }

    /**
     * Get the underlying MongoDB client instance
     * 
     * @return Client|null
     */
    public function getClient(): ?Client
    {
        return $this->client;
    }

    /**
     * Check if the storage is connected
     * 
     * @return bool Connection status
     */
    public function isConnectionActive(): bool
    {
        return $this->isConnected;
    }
}
