<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel;

use HighLevel\Storage\SessionStorage;

/**
 * Configuration class for HighLevel SDK
 * 
 * @package HighLevel
 */
class HighLevelConfig
{
    /**
     * Private integration token (for private integrations)
     * @var string|null
     */
    public ?string $privateIntegrationToken = null;

    /**
     * Agency access token (temporary token for agency-level access)
     * @var string|null
     */
    public ?string $agencyAccessToken = null;

    /**
     * Location access token (temporary token for location-level access)
     * @var string|null
     */
    public ?string $locationAccessToken = null;

    /**
     * OAuth client ID
     * @var string|null
     */
    public ?string $clientId = null;

    /**
     * OAuth client secret
     * @var string|null
     */
    public ?string $clientSecret = null;

    /**
     * Session storage implementation
     * @var SessionStorage|null
     */
    public ?SessionStorage $sessionStorage = null;

    /**
     * Log level (debug|info|warn|error|silent)
     * @var string|null
     */
    public ?string $logLevel = null;

    /**
     * Create a new configuration instance
     * 
     * @param array<string, mixed> $config Configuration array
     */
    public function __construct(array $config = [])
    {
        $this->privateIntegrationToken = $config['privateIntegrationToken'] ?? null;
        $this->agencyAccessToken = $config['agencyAccessToken'] ?? null;
        $this->locationAccessToken = $config['locationAccessToken'] ?? null;
        $this->clientId = $config['clientId'] ?? null;
        $this->clientSecret = $config['clientSecret'] ?? null;
        $this->sessionStorage = $config['sessionStorage'] ?? null;
        $this->logLevel = $config['logLevel'] ?? null;
    }
}

