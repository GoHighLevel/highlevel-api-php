<?php

namespace HighLevel\Storage;

use HighLevel\Logging\Logger;

/**
 * PHP Native Session implementation of SessionStorage  
 * Uses PHP's built-in $_SESSION for persistence across HTTP requests
 * Data persists until session expires or is explicitly cleared
 * 
 * @package HighLevel\Storage
 */
class MemorySessionStorage extends SessionStorage
{
    /**
     * Session namespace to avoid conflicts
     * @var string
     */
    private string $sessionNamespace = 'ghl_sessions';

    /**
     * OAuth client ID
     * @var string
     */
    private string $clientId = '';

    /**
     * Storage initialization status
     * @var bool
     */
    private bool $isInitialized = false;

    /**
     * Create a new MemorySessionStorage instance
     * 
     * @param Logger|null $logger Logger instance
     */
    public function __construct(?Logger $logger = null)
    {
        parent::__construct($logger ? $logger->child('Memory') : new Logger('warn', 'GHL SDK Memory'));
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
        $this->logger->debug("MemorySessionStorage clientId set: {$this->getApplicationId()}");
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
     * Generate a unique key combining applicationId and resourceId
     * 
     * @param string $resourceId The resource identifier (companyId or locationId)
     * @return string Unique composite key
     */
    private function generateUniqueKey(string $resourceId): string
    {
        $applicationId = $this->getApplicationId();
        return "{$applicationId}:{$resourceId}";
    }

    /**
     * Initialize the session storage (starts PHP session if needed)
     * 
     * @return void
     */
    public function init(): void
    {
        // Start session if not already started
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        
        // Initialize our namespace in the session
        if (!isset($_SESSION[$this->sessionNamespace])) {
            $_SESSION[$this->sessionNamespace] = [];
        }
        
        $this->isInitialized = true;
        $this->logger->info('MemorySessionStorage initialized with PHP native sessions');
    }

    /**
     * Close the session storage (clears our namespace data)
     * 
     * @return void
     */
    public function disconnect(): void
    {
        if (isset($_SESSION[$this->sessionNamespace])) {
            unset($_SESSION[$this->sessionNamespace]);
        }
        $this->isInitialized = false;
        $this->logger->info('MemorySessionStorage disconnected and cleared');
    }

    /**
     * Create a collection (no-op for memory storage)
     * 
     * @param string $collectionName Name of the collection (ignored in memory storage)
     * @return void
     */
    public function createCollection(string $collectionName): void
    {
        $this->logger->debug("MemorySessionStorage collection concept acknowledged: {$collectionName}");
    }

    /**
     * Get a collection reference (returns collection name for memory storage)
     * 
     * @param string $collectionName Name of the collection
     * @return string
     */
    public function getCollection(string $collectionName): string
    {
        return $collectionName;
    }

    /**
     * Store a session in PHP native session
     * 
     * @param string $resourceId Unique identifier: it can be a companyId or a locationId
     * @param SessionData $sessionData Session data to store
     * @return void
     * @throws \Exception
     */
    public function setSession(string $resourceId, SessionData $sessionData): void
    {
        try {
            $uniqueKey = $this->generateUniqueKey($resourceId);
            
            // Ensure session is initialized
            if (session_status() === PHP_SESSION_NONE) {
                $this->init();
            }
            
            // Convert to array and add metadata
            $sessionArray = $sessionData->toArray();
            $sessionDocument = array_merge($sessionArray, [
                'expire_at' => $this->calculateExpireAt($sessionData->expires_in),
                'createdAt' => new \DateTime(),
                'updatedAt' => new \DateTime()
            ]);

            $_SESSION[$this->sessionNamespace][$uniqueKey] = $sessionDocument;

            $this->logger->debug("Session stored in PHP session: {$uniqueKey}");
        } catch (\Exception $error) {
            $this->logger->error("Error storing session {$this->getApplicationId()}:{$resourceId}: {$error->getMessage()}");
            throw $error;
        }
    }

    /**
     * Retrieve a session from PHP native session
     * 
     * @param string $resourceId Unique identifier: it can be a companyId or a locationId
     * @return SessionData|null Session data or null if not found
     * @throws \Exception
     */
    public function getSession(string $resourceId): ?SessionData
    {
        try {
            $uniqueKey = $this->generateUniqueKey($resourceId);
            
            // Ensure session is initialized
            if (session_status() === PHP_SESSION_NONE) {
                $this->init();
            }
            
            if (!isset($_SESSION[$this->sessionNamespace][$uniqueKey])) {
                return null;
            }

            $sessionDocument = $_SESSION[$this->sessionNamespace][$uniqueKey];
            $this->logger->debug("Session retrieved from PHP session: {$uniqueKey}");
            
            // Return the session data without the timestamps as SessionData instance
            $sessionData = $sessionDocument;
            unset($sessionData['createdAt'], $sessionData['updatedAt']);
            
            return new SessionData($sessionData);
        } catch (\Exception $error) {
            $this->logger->error("Error retrieving session {$this->getApplicationId()}:{$resourceId}: {$error->getMessage()}");
            throw $error;
        }
    }

    /**
     * Delete a session from PHP native session
     * 
     * @param string $resourceId Unique identifier: it can be a companyId or a locationId
     * @return void
     * @throws \Exception
     */
    public function deleteSession(string $resourceId): void
    {
        try {
            $uniqueKey = $this->generateUniqueKey($resourceId);
            
            // Ensure session is initialized
            if (session_status() === PHP_SESSION_NONE) {
                $this->init();
            }
            
            if (isset($_SESSION[$this->sessionNamespace][$uniqueKey])) {
                unset($_SESSION[$this->sessionNamespace][$uniqueKey]);
                $this->logger->debug("Session deleted from PHP session: {$uniqueKey}");
            } else {
                $this->logger->debug("Session not found for deletion: {$uniqueKey}");
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
            $uniqueKey = $this->generateUniqueKey($resourceId);
            
            // Ensure session is initialized
            if (session_status() === PHP_SESSION_NONE) {
                $this->init();
            }
            
            if (!isset($_SESSION[$this->sessionNamespace][$uniqueKey])) {
                return null;
            }
            
            return $_SESSION[$this->sessionNamespace][$uniqueKey]['access_token'] ?? null;
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
            $uniqueKey = $this->generateUniqueKey($resourceId);
            
            // Ensure session is initialized
            if (session_status() === PHP_SESSION_NONE) {
                $this->init();
            }
            
            if (!isset($_SESSION[$this->sessionNamespace][$uniqueKey])) {
                return null;
            }
            
            return $_SESSION[$this->sessionNamespace][$uniqueKey]['refresh_token'] ?? null;
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
            $applicationId = $this->getApplicationId();
            $appSessions = [];
            
            // Ensure session is initialized
            if (session_status() === PHP_SESSION_NONE) {
                $this->init();
            }
            
            if (!isset($_SESSION[$this->sessionNamespace])) {
                return [];
            }
            
            foreach ($_SESSION[$this->sessionNamespace] as $key => $sessionData) {
                if (str_starts_with($key, "{$applicationId}:")) {
                    $cleanSessionData = $sessionData;
                    unset($cleanSessionData['createdAt'], $cleanSessionData['updatedAt']);
                    $appSessions[] = new SessionData($cleanSessionData);
                }
            }
            
            $count = count($appSessions);
            $this->logger->debug("Found {$count} sessions in PHP session for application: {$applicationId}");
            return $appSessions;
        } catch (\Exception $error) {
            $this->logger->error("Error retrieving sessions for application {$this->getApplicationId()}: {$error->getMessage()}");
            throw $error;
        }
    }

    /**
     * Check if the storage is initialized
     * 
     * @return bool Initialization status
     */
    public function isStorageActive(): bool
    {
        return $this->isInitialized;
    }

    /**
     * Get current session count
     * 
     * @return int Number of sessions stored in PHP session
     */
    public function getSessionCount(): int
    {
        if (session_status() === PHP_SESSION_NONE) {
            return 0;
        }
        
        return isset($_SESSION[$this->sessionNamespace]) ? count($_SESSION[$this->sessionNamespace]) : 0;
    }

    /**
     * Get all session keys (for debugging)
     * 
     * @return array<string> Array of all session keys
     */
    public function getAllSessionKeys(): array
    {
        if (session_status() === PHP_SESSION_NONE || !isset($_SESSION[$this->sessionNamespace])) {
            return [];
        }
        
        return array_keys($_SESSION[$this->sessionNamespace]);
    }

    /**
     * Clear all sessions (useful for testing)
     * 
     * @return void
     */
    public function clearAllSessions(): void
    {
        $count = 0;
        if (isset($_SESSION[$this->sessionNamespace])) {
            $count = count($_SESSION[$this->sessionNamespace]);
            $_SESSION[$this->sessionNamespace] = [];
        }
        $this->logger->debug("Cleared {$count} sessions from PHP session");
    }
}

