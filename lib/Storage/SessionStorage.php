<?php

namespace HighLevel\Storage;

use HighLevel\Logging\Logger;

/**
 * Abstract base class for session storage implementations
 * Provides interface for storing and retrieving user sessions, tokens, and related data
 * 
 * @package HighLevel\Storage
 */
abstract class SessionStorage
{
    /**
     * Logger instance
     * @var Logger
     */
    protected Logger $logger;

    /**
     * Create a new SessionStorage instance
     * 
     * @param Logger|null $logger Logger instance
     */
    public function __construct(?Logger $logger = null)
    {
        $this->logger = $logger ?? new Logger('warn', 'GHL SDK Storage');
    }

    /**
     * Set the logger instance
     * 
     * @param Logger $logger Logger instance
     * @return void
     */
    public function setLogger(Logger $logger): void
    {
        $this->logger = $logger;
    }

    /**
     * Set the client ID (called automatically by HighLevel class)
     * 
     * @param string $clientId The client ID from HighLevel configuration
     * @return void
     */
    abstract public function setClientId(string $clientId): void;

    /**
     * Initialize the storage connection
     * This method is called automatically when the storage is initialized in HighLevel constructor
     * 
     * @return void
     */
    abstract public function init(): void;

    /**
     * Close the connection to the storage
     * 
     * @return void
     */
    abstract public function disconnect(): void;

    /**
     * Create a collection/table if it doesn't exist
     * 
     * @param string $collectionName Name of the collection to create
     * @return void
     */
    abstract public function createCollection(string $collectionName): void;

    /**
     * Get a reference to a collection/table
     * 
     * @param string $collectionName Name of the collection to get
     * @return mixed
     */
    abstract public function getCollection(string $collectionName);

    /**
     * Store a session in the storage
     * 
     * @param string $resourceId Unique identifier for the resource (companyId or locationId)
     * @param SessionData $sessionData Session data to store
     * @return void
     */
    abstract public function setSession(string $resourceId, SessionData $sessionData): void;

    /**
     * Retrieve a session from the storage
     * 
     * @param string $resourceId Unique identifier for the resource (companyId or locationId)
     * @return SessionData|null Session data or null if not found
     */
    abstract public function getSession(string $resourceId): ?SessionData;

    /**
     * Delete a session from the storage
     * 
     * @param string $resourceId Unique identifier for the resource (companyId or locationId)
     * @return void
     */
    abstract public function deleteSession(string $resourceId): void;

    /**
     * Get only the access token for a resource
     * 
     * @param string $resourceId Unique identifier for the resource (companyId or locationId)
     * @return string|null Access token or null if not found
     */
    abstract public function getAccessToken(string $resourceId): ?string;

    /**
     * Get only the refresh token for a resource
     * 
     * @param string $resourceId Unique identifier for the resource (companyId or locationId)
     * @return string|null Refresh token or null if not found
     */
    abstract public function getRefreshToken(string $resourceId): ?string;

    /**
     * Get all sessions for the current application (optional method)
     * This method is optional and can be overridden by implementations that support it
     * 
     * @return SessionData[] Array of session data for the current application
     * @throws \Exception If not implemented by the storage implementation
     */
    public function getSessionsByApplication(): array
    {
        throw new \Exception('getSessionsByApplication is not implemented by this storage provider');
    }

    /**
     * Calculate the expiration timestamp in milliseconds
     * 
     * @param int|null $expiresIn The number of seconds until expiration
     * @return int The timestamp in milliseconds
     */
    protected function calculateExpireAt(?int $expiresIn = null): int
    {
        if ($expiresIn === null) {
            // Default to 24 hours if no expires_in provided
            return (int)(microtime(true) * 1000) + (24 * 60 * 60 * 1000);
        }
        return (int)(microtime(true) * 1000) + ($expiresIn * 1000);
    }
}

