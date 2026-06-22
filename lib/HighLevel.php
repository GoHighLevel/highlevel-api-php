<?php

namespace HighLevel;

use GuzzleHttp\Client;
use GuzzleHttp\HandlerStack;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use HighLevel\Services\AdPublishing\AdPublishing;
use HighLevel\Services\AffiliateManager\AffiliateManager;
use HighLevel\Services\AgentStudio\AgentStudio;
use HighLevel\Services\Associations\Associations;
use HighLevel\Services\Blogs\Blogs;
use HighLevel\Services\BrandBoards\BrandBoards;
use HighLevel\Services\Businesses\Businesses;
use HighLevel\Services\Calendars\Calendars;
use HighLevel\Services\Campaigns\Campaigns;
use HighLevel\Services\ChatWidget\ChatWidget;
use HighLevel\Services\Companies\Companies;
use HighLevel\Services\Contacts\Contacts;
use HighLevel\Services\ConversationAi\ConversationAi;
use HighLevel\Services\Conversations\Conversations;
use HighLevel\Services\Courses\Courses;
use HighLevel\Services\CustomFields\CustomFields;
use HighLevel\Services\CustomMenus\CustomMenus;
use HighLevel\Services\EmailIsv\EmailIsv;
use HighLevel\Services\Emails\Emails;
use HighLevel\Services\Forms\Forms;
use HighLevel\Services\Funnels\Funnels;
use HighLevel\Services\Invoices\Invoices;
use HighLevel\Services\KnowledgeBase\KnowledgeBase;
use HighLevel\Services\Links\Links;
use HighLevel\Services\Locations\Locations;
use HighLevel\Services\Marketplace\Marketplace;
use HighLevel\Services\Medias\Medias;
use HighLevel\Services\Oauth\Oauth;
use HighLevel\Services\Objects\Objects;
use HighLevel\Services\Opportunities\Opportunities;
use HighLevel\Services\Payments\Payments;
use HighLevel\Services\PhoneSystem\PhoneSystem;
use HighLevel\Services\Products\Products;
use HighLevel\Services\Proposals\Proposals;
use HighLevel\Services\Saas\Saas;
use HighLevel\Services\Snapshots\Snapshots;
use HighLevel\Services\SocialPlanner\SocialPlanner;
use HighLevel\Services\Store\Store;
use HighLevel\Services\Surveys\Surveys;
use HighLevel\Services\Users\Users;
use HighLevel\Services\VoiceAi\VoiceAi;
use HighLevel\Services\Workflows\Workflows;
use HighLevel\Storage\SessionStorage;
use HighLevel\Storage\MemorySessionStorage;
use HighLevel\Storage\SessionData;
use HighLevel\Logging\Logger;
use HighLevel\Webhook\WebhookManager;

/**
 * HighLevel SDK Client
 * Main entry point for interacting with the GoHighLevel API
 * 
 * @package HighLevel
 */
class HighLevel
{
    /**
     * Base URL for the GoHighLevel API
     */
    private const BASE_URL = 'https://services.leadconnectorhq.com';

    /**
     * API version sent in the `Version` header on every request.
     * This is fixed for the SDK build and cannot be overridden by the user.
     */
    private const API_VERSION = 'v3';

    /**
     * SDK configuration
     * @var array<string, mixed>
     */
    private array $config;

    /**
     * HTTP client instance
     * @var Client
     */
    private Client $client;

    /**
     * Session storage instance
     * @var SessionStorage
     */
    private SessionStorage $sessionStorage;

    /**
     * AdPublishing service
     * @var AdPublishing
     */
    public AdPublishing $adPublishing;

    /**
     * AffiliateManager service
     * @var AffiliateManager
     */
    public AffiliateManager $affiliateManager;

    /**
     * AgentStudio service
     * @var AgentStudio
     */
    public AgentStudio $agentStudio;

    /**
     * Associations service
     * @var Associations
     */
    public Associations $associations;

    /**
     * Blogs service
     * @var Blogs
     */
    public Blogs $blogs;

    /**
     * BrandBoards service
     * @var BrandBoards
     */
    public BrandBoards $brandBoards;

    /**
     * Businesses service
     * @var Businesses
     */
    public Businesses $businesses;

    /**
     * Calendars service
     * @var Calendars
     */
    public Calendars $calendars;

    /**
     * Campaigns service
     * @var Campaigns
     */
    public Campaigns $campaigns;

    /**
     * ChatWidget service
     * @var ChatWidget
     */
    public ChatWidget $chatWidget;

    /**
     * Companies service
     * @var Companies
     */
    public Companies $companies;

    /**
     * Contacts service
     * @var Contacts
     */
    public Contacts $contacts;

    /**
     * ConversationAi service
     * @var ConversationAi
     */
    public ConversationAi $conversationAi;

    /**
     * Conversations service
     * @var Conversations
     */
    public Conversations $conversations;

    /**
     * Courses service
     * @var Courses
     */
    public Courses $courses;

    /**
     * CustomFields service
     * @var CustomFields
     */
    public CustomFields $customFields;

    /**
     * CustomMenus service
     * @var CustomMenus
     */
    public CustomMenus $customMenus;

    /**
     * EmailIsv service
     * @var EmailIsv
     */
    public EmailIsv $emailIsv;

    /**
     * Emails service
     * @var Emails
     */
    public Emails $emails;

    /**
     * Forms service
     * @var Forms
     */
    public Forms $forms;

    /**
     * Funnels service
     * @var Funnels
     */
    public Funnels $funnels;

    /**
     * Invoices service
     * @var Invoices
     */
    public Invoices $invoices;

    /**
     * KnowledgeBase service
     * @var KnowledgeBase
     */
    public KnowledgeBase $knowledgeBase;

    /**
     * Links service
     * @var Links
     */
    public Links $links;

    /**
     * Locations service
     * @var Locations
     */
    public Locations $locations;

    /**
     * Marketplace service
     * @var Marketplace
     */
    public Marketplace $marketplace;

    /**
     * Medias service
     * @var Medias
     */
    public Medias $medias;

    /**
     * Oauth service
     * @var Oauth
     */
    public Oauth $oauth;

    /**
     * Objects service
     * @var Objects
     */
    public Objects $objects;

    /**
     * Opportunities service
     * @var Opportunities
     */
    public Opportunities $opportunities;

    /**
     * Payments service
     * @var Payments
     */
    public Payments $payments;

    /**
     * PhoneSystem service
     * @var PhoneSystem
     */
    public PhoneSystem $phoneSystem;

    /**
     * Products service
     * @var Products
     */
    public Products $products;

    /**
     * Proposals service
     * @var Proposals
     */
    public Proposals $proposals;

    /**
     * Saas service
     * @var Saas
     */
    public Saas $saas;

    /**
     * Snapshots service
     * @var Snapshots
     */
    public Snapshots $snapshots;

    /**
     * SocialPlanner service
     * @var SocialPlanner
     */
    public SocialPlanner $socialPlanner;

    /**
     * Store service
     * @var Store
     */
    public Store $store;

    /**
     * Surveys service
     * @var Surveys
     */
    public Surveys $surveys;

    /**
     * Users service
     * @var Users
     */
    public Users $users;

    /**
     * VoiceAi service
     * @var VoiceAi
     */
    public VoiceAi $voiceAi;

    /**
     * Workflows service
     * @var Workflows
     */
    public Workflows $workflows;

    /**
     * Logger instance
     * @var Logger
     */
    private Logger $logger;

    /**
     * Webhook manager instance
     * @var WebhookManager
     */
    private WebhookManager $webhookManager;

    /**
     * Create a new HighLevel SDK instance
     * 
     * @param array{
     *   privateIntegrationToken?: string,
     *   agencyAccessToken?: string,
     *   locationAccessToken?: string,
     *   clientId?: string,
     *   clientSecret?: string,
     *   sessionStorage?: SessionStorage,
     *   logLevel?: string,
     *   logPrefix?: string,
     *   timeout?: int,
     *   headers?: array<string, string>
     * } $config Configuration options
     */
    public function __construct(array $config = [])
    {
        $this->config = array_merge([
            'logLevel' => 'warn',
            'logPrefix' => 'GHL SDK',
            'timeout' => 30,
            'headers' => [],
        ], $config);

        // Initialize logger
        $this->logger = new Logger($this->config['logLevel'], $this->config['logPrefix']);

        // Initialize session storage
        $this->sessionStorage = $config['sessionStorage'] ?? new MemorySessionStorage($this->logger);
        
        // Update logger for user-provided session storage to use the correct log level
        if (isset($config['sessionStorage'])) {
            $this->sessionStorage->setLogger($this->logger);
        }

        // Initialize HTTP client
        $this->initializeHttpClient();

        // Initialize services
        $this->initializeServices();

        // Initialize session storage
        $this->initializeSessionStorage();

        // Initialize webhook manager
        $this->webhookManager = new WebhookManager($this->logger, $this->sessionStorage, $this->oauth);
    }

    /**
     * Initialize HTTP client with base configuration and token refresh middleware
     */
    private function initializeHttpClient(): void
    {
        // Create handler stack with token refresh middleware
        $stack = HandlerStack::create();
        $stack->push($this->createTokenRefreshMiddleware(), 'token_refresh');

        $clientConfig = [
            'base_uri' => self::BASE_URL,
            'timeout' => $this->config['timeout'],
            'handler' => $stack,
            'headers' => array_merge([
                'Content-Type' => 'application/json',
                'Accept' => 'application/json',
                'User-Agent' => 'GHL-SDK-PHP/1.0',
            ], $this->config['headers'], [
                'Version' => self::API_VERSION,
            ]),
        ];

        $this->client = new Client($clientConfig);
        
        $this->logger->debug('HTTP client initialized with token refresh middleware', ['config' => array_merge($clientConfig, ['handler' => '[HandlerStack]'])]);
    }

    /**
     * Initialize all service instances
     */
    private function initializeServices(): void
    {
        $this->adPublishing = new AdPublishing($this);
        $this->affiliateManager = new AffiliateManager($this);
        $this->agentStudio = new AgentStudio($this);
        $this->associations = new Associations($this);
        $this->blogs = new Blogs($this);
        $this->brandBoards = new BrandBoards($this);
        $this->businesses = new Businesses($this);
        $this->calendars = new Calendars($this);
        $this->campaigns = new Campaigns($this);
        $this->chatWidget = new ChatWidget($this);
        $this->companies = new Companies($this);
        $this->contacts = new Contacts($this);
        $this->conversationAi = new ConversationAi($this);
        $this->conversations = new Conversations($this);
        $this->courses = new Courses($this);
        $this->customFields = new CustomFields($this);
        $this->customMenus = new CustomMenus($this);
        $this->emailIsv = new EmailIsv($this);
        $this->emails = new Emails($this);
        $this->forms = new Forms($this);
        $this->funnels = new Funnels($this);
        $this->invoices = new Invoices($this);
        $this->knowledgeBase = new KnowledgeBase($this);
        $this->links = new Links($this);
        $this->locations = new Locations($this);
        $this->marketplace = new Marketplace($this);
        $this->medias = new Medias($this);
        $this->oauth = new Oauth($this, ['base_url' => self::BASE_URL]);
        $this->objects = new Objects($this);
        $this->opportunities = new Opportunities($this);
        $this->payments = new Payments($this);
        $this->phoneSystem = new PhoneSystem($this);
        $this->products = new Products($this);
        $this->proposals = new Proposals($this);
        $this->saas = new Saas($this);
        $this->snapshots = new Snapshots($this);
        $this->socialPlanner = new SocialPlanner($this);
        $this->store = new Store($this);
        $this->surveys = new Surveys($this);
        $this->users = new Users($this);
        $this->voiceAi = new VoiceAi($this);
        $this->workflows = new Workflows($this);
        $this->logger->debug('All services initialized');
    }

    /**
     * Initialize session storage (always exists - either provided or auto-created)
     */
    private function initializeSessionStorage(): void
    {
        // Pass clientId to session storage if available
        if (!empty($this->config['clientId']) && $this->sessionStorage) {
            $this->sessionStorage->setClientId($this->config['clientId']);
        }
        
        try {
            $this->sessionStorage->init();
            $this->logger->debug('Session storage initialized successfully');
        } catch (\Exception $error) {
            $this->logger->error('Failed to initialize session storage', ['error' => $error->getMessage()]);
        }
    }

    /**
     * Create token refresh middleware for automatic 401 handling
     * 
     * @return callable
     */
    private function createTokenRefreshMiddleware(): callable
    {
        return function (callable $handler) {
            return function (RequestInterface $request, array $options) use ($handler) {
                return $handler($request, $options)->then(
                    function (ResponseInterface $response) use ($request, $options, $handler) {
                        // Check if response is 401 and handle token refresh
                        if ($response->getStatusCode() === 401 && !isset($options['_retry_attempt'])) {
                            
                            $this->logger->warn('401 Unauthorized - Attempting token refresh');
                            
                            try {
                                // Extract security requirements and resource ID from request
                                $securityRequirements = $options['_security_requirements'] ?? [];
                                $preferredTokenType = $options['_preferred_token_type'] ?? null;
                                $pathParams = $options['_path_params'] ?? [];
                                $queryParams = $options['_query_params'] ?? [];
                                
                                $resourceId = $this->extractResourceId(
                                    $securityRequirements,
                                    $request->getHeaders(),
                                    array_merge($queryParams, $pathParams),
                                    $this->getRequestBody($request),
                                    $preferredTokenType
                                );
                                
                                if ($resourceId) {
                                    $sessionData = $this->sessionStorage->getSession($resourceId);
                                    
                                    if ($sessionData) {
                                        $this->logger->info("Token expired for {$resourceId}, attempting refresh");
                                        
                                        $newToken = $this->refreshTokenIfNeeded($resourceId, $sessionData);
                                        if ($newToken) {
                                            // Create new request with refreshed token
                                            $newRequest = $request->withHeader('Authorization', $newToken);
                                            
                                            // Add retry flag to prevent infinite loops and restore original options
                                            $retryOptions = array_merge($options, ['_retry_attempt' => true]);
                                            
                                            $this->logger->debug("Retrying request with refreshed token for {$resourceId}");
                                            return $handler($newRequest, $retryOptions);
                                        }
                                    }
                                }
                            } catch (\Exception $refreshError) {
                                $this->logger->error('Failed to refresh token on 401', [
                                    'error' => $refreshError->getMessage()
                                ]);
                            }
                        }
                        return $response;
                    }
                );
            };
        };
    }

    /**
     * Extract resource ID from request context for token refresh
     * 
     * @param array<string> $securityRequirements Security requirements
     * @param array<string, mixed> $headers Request headers (flattened)
     * @param array<string, mixed> $params Query and path parameters
     * @param mixed $body Request body
     * @param string|null $preferredTokenType Preferred token type ('company' or 'location')
     * @return string|null Extracted resourceId (companyId or locationId)
     */
    public function extractResourceId(array $securityRequirements, array $headers = [], array $params = [], $body = null, ?string $preferredTokenType = null): ?string
    {
        // Check headers first
        $companyId = '';
        $locationId = '';
        
        // Extract from headers with multiple format support
        // Handle both PSR-7 style (array of arrays) and flattened headers
        $companyId = $this->getHeaderValue($headers, 'x-company-id') 
                  ?: $this->getHeaderValue($headers, 'companyId') 
                  ?: $this->getHeaderValue($headers, 'company-id');
                  
        $locationId = $this->getHeaderValue($headers, 'x-location-id') 
                   ?: $this->getHeaderValue($headers, 'locationId') 
                   ?: $this->getHeaderValue($headers, 'location-id');
        
        // Check query/path parameters
        if (!$companyId) {
            $companyId = $params['companyId'] ?? $params['company_id'] ?? '';
        }
        
        if (!$locationId) {
            $locationId = $params['locationId'] ?? $params['location_id'] ?? '';
        }
        
        // Check body
        if (!$companyId && !$locationId && $body && is_array($body)) {
            if (!$companyId) {
                $companyId = $body['companyId'] ?? $body['company_id'] ?? '';
            }
            
            if (!$locationId) {
                $locationId = $body['locationId'] ?? $body['location_id'] ?? '';
            }
        }
        
        // Determine if we need location-level or agency-level token
        $needsLocationToken = false;
        $needsAgencyToken = false;
        
        foreach ($securityRequirements as $req) {
            if (in_array($req, ['Location-Access', 'Location-Access-Only', 'bearer'])) {
                $needsLocationToken = true;
            }
            if (in_array($req, ['Agency-Access', 'Agency-Access-Only'])) {
                $needsAgencyToken = true;
            }
        }
        
        // If both token types are supported, respect user preference
        if ($needsLocationToken && $needsAgencyToken) {
            if ($preferredTokenType === 'company' && $companyId) {
                return $companyId;
            }
            if ($preferredTokenType === 'location' && $locationId) {
                return $locationId;
            }
        }
        
        if ($needsLocationToken && $locationId) {
            return $locationId;
        }
        
        if ($needsAgencyToken && $companyId) {
            return $companyId;
        }
        
        return null;
    }

    /**
     * Get header value handling both PSR-7 and flattened header formats
     * 
     * @param array<string, mixed> $headers
     * @param string $name
     * @return string|null
     */
    private function getHeaderValue(array $headers, string $name): ?string
    {
        // Try exact case match first
        if (isset($headers[$name])) {
            $value = $headers[$name];
            // Handle PSR-7 style (array of values)
            if (is_array($value)) {
                return $value[0] ?? null;
            }
            // Handle flattened style (direct string)
            return is_string($value) ? $value : null;
        }
        
        // Try case-insensitive search
        foreach ($headers as $key => $value) {
            if (strcasecmp($key, $name) === 0) {
                if (is_array($value)) {
                    return $value[0] ?? null;
                }
                return is_string($value) ? $value : null;
            }
        }
        
        return null;
    }

    /**
     * Refresh token if needed and update session storage
     * 
     * @param string $resourceId
     * @param array<string, mixed> $sessionData
     * @return string|null New authorization header value
     */
    private function refreshTokenIfNeeded(string $resourceId, SessionData $sessionData): ?string
    {
        try {
            $refreshToken = $sessionData->refreshToken ?? $sessionData->refresh_token ?? null;
            $userType = $sessionData->userType ?? $sessionData->user_type ?? null;
            
            if (!$refreshToken) {
                $this->logger->warn("No refresh token available for {$resourceId}");
                return null;
            }
            
            // Use OAuth service to refresh the token
            $refreshData = $this->oauth->refreshToken(
                $refreshToken,
                $this->config['clientId'] ?? '',
                $this->config['clientSecret'] ?? '',
                'refresh_token',
                $userType ?? 'Location'
            );
            
            $accessToken = $refreshData->accessToken ?? $refreshData->access_token ?? null;
            if ($accessToken) {
                $this->sessionStorage->setSession($resourceId, new SessionData($refreshData));

                $tokenType = $refreshData->tokenType ?? $refreshData->token_type ?? 'Bearer';
                $this->logger->info("Token refreshed successfully for {$resourceId}");

                return "{$tokenType} {$accessToken}";
            } else {
                $this->logger->warn("Token refresh failed - no access_token in response for {$resourceId}");
                return null;
            }
        } catch (\Exception $e) {
            $this->logger->error("Token refresh failed for {$resourceId}", [
                'error' => $e->getMessage()
            ]);
            return null;
        }
    }

    /**
     * Internal method to get token based on security requirements and request data
     * 
     * @param array<string> $securityRequirements Security requirements from OpenAPI spec
     * @param array<string, mixed> $headers Request headers
     * @param array<string, mixed> $query Query parameters
     * @param mixed $body Request body
     * @param string|null $preferredTokenType Preferred token type ('company' or 'location')
     * @return string Authorization header value
     * @throws GHLError
     */
    public function getTokenForSecurity(
        array $securityRequirements,
        array $headers = [],
        array $query = [],
        $body = null,
        ?string $preferredTokenType = null
    ): string {
        // Priority 1: privateIntegrationToken always wins
        if (!empty($this->config['privateIntegrationToken'])) {
            return 'Bearer ' . $this->config['privateIntegrationToken'];
        }

        // Check which token we need to use
        $hasAgencyAccess = in_array('Agency-Access', $securityRequirements);
        $hasLocationAccess = in_array('Location-Access', $securityRequirements);
        $hasAgencyOnly = in_array('Agency-Access-Only', $securityRequirements);
        $hasLocationOnly = in_array('Location-Access-Only', $securityRequirements);
        $hasBearer = in_array('bearer', $securityRequirements);

        // Extract resourceId from request data
        $resourceId = $this->extractResourceId($securityRequirements, $headers, $query, $body, $preferredTokenType);

        // Handle Agency-Access-Only
        if ($hasAgencyOnly) {
            if (!empty($this->config['agencyAccessToken'])) {
                return 'Bearer ' . $this->config['agencyAccessToken'];
            }
            $storageToken = $this->fetchToken($resourceId);
            if ($storageToken) {
                return $storageToken;
            }
            throw new GHLError('Agency Access Token required but not available');
        }

        // Handle Location-Access-Only
        if ($hasLocationOnly) {
            if (!empty($this->config['locationAccessToken'])) {
                return 'Bearer ' . $this->config['locationAccessToken'];
            }
            $storageToken = $this->fetchToken($resourceId);
            if ($storageToken) {
                return $storageToken;
            }
            throw new GHLError('Location Access Token required but not available');
        }

        // Handle both Agency-Access and Location-Access (flexible)
        if ($hasAgencyAccess || $hasLocationAccess || $hasBearer) {
            // Try temporary tokens first
            if (!empty($this->config['agencyAccessToken'])) {
                return 'Bearer ' . $this->config['agencyAccessToken'];
            }
            if (!empty($this->config['locationAccessToken'])) {
                return 'Bearer ' . $this->config['locationAccessToken'];
            }
            
            // Try storage-based token
            $storageToken = $this->fetchToken($resourceId);
            if ($storageToken) {
                return $storageToken;
            }
            
            throw new GHLError('Authentication token required but not available');
        }

        // Default fallback
        $token = $this->getAuthToken($resourceId);
        if (!$token) {
            throw new GHLError('No authentication token available');
        }
        return $token;
    }

    /**
     * Fetch token from session storage
     * 
     * @param string|null $resourceId Resource ID to fetch token for
     * @return string|null Authorization header or null if not found
     */
    private function fetchToken(?string $resourceId): ?string
    {
        if (!$resourceId) {
            return null;
        }

        try {
            $sessionData = $this->sessionStorage->getSession($resourceId);
            if ($sessionData && $sessionData->access_token) {
                $tokenType = $sessionData->token_type ?? 'Bearer';
                return "{$tokenType} {$sessionData->access_token}";
            }
        } catch (\Exception $e) {
            $this->logger->warn("Failed to fetch token from storage for {$resourceId}", [
                'error' => $e->getMessage()
            ]);
        }

        return null;
    }

    /**
     * Get authentication token for a resource ID
     * 
     * @param string|null $resourceId Resource ID to get token for
     * @return string|null Authorization header or null if not found
     */
    public function getAuthToken(?string $resourceId = null): ?string
    {
        // Try configuration tokens first
        if (!empty($this->config['privateIntegrationToken'])) {
            return 'Bearer ' . $this->config['privateIntegrationToken'];
        }
        if (!empty($this->config['agencyAccessToken'])) {
            return 'Bearer ' . $this->config['agencyAccessToken'];
        }
        if (!empty($this->config['locationAccessToken'])) {
            return 'Bearer ' . $this->config['locationAccessToken'];
        }

        // Try session storage
        return $this->fetchToken($resourceId);
    }

    /**
     * Get request body from PSR-7 request
     * 
     * @param RequestInterface $request
     * @return mixed
     */
    private function getRequestBody(RequestInterface $request)
    {
        $body = $request->getBody();
        $contents = $body->getContents();
        
        // Reset stream position for subsequent reads
        if ($body->isSeekable()) {
            $body->rewind();
        }
        
        if (empty($contents)) {
            return null;
        }
        
        // Try to decode JSON body
        $decoded = json_decode($contents, true);
        return json_last_error() === JSON_ERROR_NONE ? $decoded : $contents;
    }

    /**
     * Get the HTTP client instance
     * 
     * @return Client
     */
    public function getClient(): Client
    {
        return $this->client;
    }

    /**
     * Get the logger instance
     * 
     * @return Logger
     */
    public function getLogger(): Logger
    {
        return $this->logger;
    }

    /**
     * Get the session storage instance
     * 
     * @return SessionStorage
     */
    public function getSessionStorage(): SessionStorage
    {
        return $this->sessionStorage;
    }

    /**
     * Get the webhook manager instance
     * 
     * @return WebhookManager
     */
    public function getWebhookManager(): WebhookManager
    {
        return $this->webhookManager;
    }

    /**
     * Get SDK configuration
     * 
     * @return array<string, mixed>
     */
    public function getConfig(): array
    {
        return $this->config;
    }

    /**
     * Update SDK configuration
     * 
     * @param array<string, mixed> $config New configuration options
     */
    public function updateConfig(array $config): void
    {
        $this->config = array_merge($this->config, $config);
        $this->logger->debug('Configuration updated', ['config' => $this->config]);
    }

    /**
     * Set authentication tokens
     * 
     * @param array<string, string|null> $tokens Authentication tokens
     */
    public function setTokens(array $tokens): void
    {
        foreach ($tokens as $key => $value) {
            if ($value !== null) {
                $this->config[$key] = $value;
            }
        }
        $this->logger->debug('Tokens updated');
    }

    /**
     * Verify webhook signature
     * 
     * @param string $rawBody Raw request body
     * @param string $signature Webhook signature
     * @param string $secret Webhook secret
     * @return bool
     */
    public function verifyWebhookSignature(string $rawBody, string $signature, string $secret): bool
    {
        return $this->webhookManager->verifySignature($rawBody, $signature, $secret);
    }

    /**
     * Set session storage implementation
     * 
     * @param SessionStorage $sessionStorage Session storage instance
     */
    public function setSessionStorage(SessionStorage $sessionStorage): void
    {
        $this->sessionStorage = $sessionStorage;
        $this->webhookManager = new WebhookManager($this->logger, $this->sessionStorage, $this->oauth);
        $this->logger->debug('Session storage updated');
    }

    /**
     * Create a new instance with different configuration
     * 
     * @param array<string, mixed> $config Configuration options
     * @return self
     */
    public static function create(array $config = []): self
    {
        return new self($config);
    }

    /**
     * Create instance with private integration token
     * 
     * @param string $token Private integration token
     * @param array<string, mixed> $config Additional configuration
     * @return self
     */
    public static function withPrivateIntegrationToken(string $token, array $config = []): self
    {
        return new self(array_merge($config, [
            'privateIntegrationToken' => $token,
        ]));
    }

    /**
     * Create instance with agency access token
     * 
     * @param string $token Agency access token
     * @param array<string, mixed> $config Additional configuration
     * @return self
     */
    public static function withAgencyAccessToken(string $token, array $config = []): self
    {
        return new self(array_merge($config, [
            'agencyAccessToken' => $token,
        ]));
    }

    /**
     * Create instance with location access token
     * 
     * @param string $token Location access token
     * @param array<string, mixed> $config Additional configuration
     * @return self
     */
    public static function withLocationAccessToken(string $token, array $config = []): self
    {
        return new self(array_merge($config, [
            'locationAccessToken' => $token,
        ]));
    }
}