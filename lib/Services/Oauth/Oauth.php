<?php

namespace HighLevel\Services\Oauth;

use HighLevel\HighLevel;
use HighLevel\GHLError;
use HighLevel\Utils\RequestUtils;
use HighLevel\Constants\UserType;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Exception\RequestException;
use HighLevel\Services\Oauth\Models\GetAccessCodeSuccessfulResponseDto;
use HighLevel\Services\Oauth\Models\GetLocationAccessTokenSuccessfulResponseDto;
use HighLevel\Services\Oauth\Models\GetInstalledLocationsSuccessfulResponseDto;

/**
 * Oauth Service
 * Documentation for OAuth 2.0 API
 * 
 * @package HighLevel\Services\Oauth
 */
class Oauth
{
    /**
     * Marketplace URL
     */
    private const MARKETPLACE_URL = 'https://marketplace.gohighlevel.com';

    /**
     * HighLevel client instance
     * @var HighLevel
     */
    private HighLevel $client;

    /**
     * Service configuration
     * @var array<string, mixed>
     */
    private array $config;

    /**
     * Create a new Oauth service instance
     * 
     * @param HighLevel $client HighLevel client instance
     * @param array<string, mixed> $config Service configuration
     */
    public function __construct(HighLevel $client, array $config = [])
    {
        $this->client = $client;
        $this->config = $config;
    }

    /**
     * Generate OAuth authorization URL for the authorization code flow
     * 
     * @param string $clientId OAuth client ID
     * @param string $redirectUri Redirect URI after authorization
     * @param string $scope OAuth scopes (space-separated)
     * @return string Authorization URL
     */
    public function getAuthorizationUrl(string $clientId, string $redirectUri, string $scope): string
    {
        $params = [
            'client_id' => $clientId,
            'redirect_uri' => $redirectUri,
            'scope' => $scope,
            'response_type' => 'code'
        ];

        return self::MARKETPLACE_URL . '/oauth/chooselocation?' . http_build_query($params);
    }

    /**
     * Refresh access token using refresh token
     * 
     * @param string $refreshToken The refresh token
     * @param string $clientId OAuth client ID
     * @param string $clientSecret OAuth client secret
     * @param string $grantType Grant type (must be 'refresh_token')
     * @param string $userType User type (UserType::LOCATION or UserType::COMPANY)
     * @return mixed Token data
     * @throws GHLError
     */
    public function refreshToken(
        string $refreshToken,
        string $clientId,
        string $clientSecret,
        string $grantType,
        string $userType
    ) {
        if ($grantType !== 'refresh_token') {
            throw new GHLError('grant_type must be "refresh_token"');
        }

        if (!in_array($userType, [UserType::LOCATION, UserType::COMPANY])) {
            throw new GHLError('user_type must be "' . UserType::LOCATION . '" or "' . UserType::COMPANY . '"');
        }

        return $this->getAccessToken([
            'refresh_token' => $refreshToken,
            'client_id' => $clientId,
            'client_secret' => $clientSecret,
            'grant_type' => $grantType,
            'user_type' => $userType
        ]);
    }

    /**
     * Get Access Token
     * Use Access Tokens to access GoHighLevel resources on behalf of an authenticated location/company.
     * 
     * @param array $requestBody Request body data
     * @param array<string, mixed>|null $options Additional request options
     * @return GetAccessCodeSuccessfulResponseDto Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function getAccessToken(
        array $requestBody,
        ?array $options = null
    ): GetAccessCodeSuccessfulResponseDto {
        if ($requestBody !== null && is_object($requestBody) && method_exists($requestBody, 'toArray')) {
            $requestBody = $requestBody->toArray();
        }
        $paramDefs = [];
        $extracted = RequestUtils::extractParams([], $paramDefs);
        $requirements = [];

        $processedBody = $requestBody ? http_build_query($requestBody) : null;

        $url = RequestUtils::buildUrl('/oauth/token', $extracted['path']);
        
        $headers = array_merge(
            
            ['Content-Type' => 'application/x-www-form-urlencoded'],
            
            $extracted['header'],
            $options['headers'] ?? []
        );

        $authToken = RequestUtils::getAuthToken(
            $this->client,
            $requirements,
            $headers,
            $extracted['query'],
            $requestBody ?? null,
            $options['preferredTokenType'] ?? null
        );

        if ($authToken) {
            $headers['Authorization'] = $authToken;
        }

        $requestOptions = [
            'headers' => $headers,
            'query' => $extracted['query'],
            '_security_requirements' => $requirements,
            '_path_params' => $extracted['path'],
            '_query_params' => $extracted['query']
        ];

        if ($processedBody !== null) {
            
            $requestOptions['body'] = $processedBody;
        }

        if ($options) {
            foreach ($options as $key => $value) {
                if (!in_array($key, ['headers', 'preferredTokenType'])) {
                    $requestOptions[$key] = $value;
                }
            }
        }

        try {
            $response = $this->client->getClient()->request(
                'POST',
                $url,
                $requestOptions
            );

            $body = (string) $response->getBody();
            $responseData = json_decode($body, true);
            
            return new GetAccessCodeSuccessfulResponseDto($responseData);
        } catch (RequestException $e) {
            $statusCode = $e->hasResponse() ? $e->getResponse()->getStatusCode() : null;
            $responseBody = $e->hasResponse() ? (string) $e->getResponse()->getBody() : null;
            $responseData = $responseBody ? json_decode($responseBody, true) : null;

            throw new GHLError(
                $e->getMessage(),
                $statusCode,
                $responseData,
                $requestOptions
            );
        }
    }

    /**
     * Get Location Access Token from Agency Token
     * This API allows you to generate locationAccessToken from AgencyAccessToken
     * 
     * @param array $requestBody Request body data
     * @param array<string, mixed>|null $options Additional request options
     * @return GetLocationAccessTokenSuccessfulResponseDto Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function getLocationAccessToken(
        array $requestBody,
        ?array $options = null
    ): GetLocationAccessTokenSuccessfulResponseDto {
        if ($requestBody !== null && is_object($requestBody) && method_exists($requestBody, 'toArray')) {
            $requestBody = $requestBody->toArray();
        }
        $paramDefs = [];
        $extracted = RequestUtils::extractParams([], $paramDefs);
        $requirements = ["Agency-Access-Only"];

        $processedBody = $requestBody ? http_build_query($requestBody) : null;

        $url = RequestUtils::buildUrl('/oauth/locationToken', $extracted['path']);
        
        $headers = array_merge(
            
            ['Content-Type' => 'application/x-www-form-urlencoded'],
            
            $extracted['header'],
            $options['headers'] ?? []
        );

        $authToken = RequestUtils::getAuthToken(
            $this->client,
            $requirements,
            $headers,
            $extracted['query'],
            $requestBody ?? null,
            $options['preferredTokenType'] ?? null
        );

        if ($authToken) {
            $headers['Authorization'] = $authToken;
        }

        $requestOptions = [
            'headers' => $headers,
            'query' => $extracted['query'],
            '_security_requirements' => $requirements,
            '_path_params' => $extracted['path'],
            '_query_params' => $extracted['query']
        ];

        if ($processedBody !== null) {
            
            $requestOptions['body'] = $processedBody;
        }

        if ($options) {
            foreach ($options as $key => $value) {
                if (!in_array($key, ['headers', 'preferredTokenType'])) {
                    $requestOptions[$key] = $value;
                }
            }
        }

        try {
            $response = $this->client->getClient()->request(
                'POST',
                $url,
                $requestOptions
            );

            $body = (string) $response->getBody();
            $responseData = json_decode($body, true);
            
            return new GetLocationAccessTokenSuccessfulResponseDto($responseData);
        } catch (RequestException $e) {
            $statusCode = $e->hasResponse() ? $e->getResponse()->getStatusCode() : null;
            $responseBody = $e->hasResponse() ? (string) $e->getResponse()->getBody() : null;
            $responseData = $responseBody ? json_decode($responseBody, true) : null;

            throw new GHLError(
                $e->getMessage(),
                $statusCode,
                $responseData,
                $requestOptions
            );
        }
    }

    /**
     * Get Location where app is installed
     * This API allows you fetch location where app is installed upon
     * 
     * @param array{
     *   skip?: string // Parameter to skip the number installed locations
     *   limit?: string // Parameter to limit the number installed locations
     *   query?: string // Parameter to search for the installed location by name
     *   isInstalled?: bool // Filters out location which are installed for specified app under the specified company
     *   companyId: string // Parameter to search by the companyId
     *   appId: string // Parameter to search by the appId
     *   versionId?: string // VersionId of the app
     *   onTrial?: bool // Filters out locations which are installed for specified app in trial mode
     *   planId?: string // Filters out location which are installed for specified app under the specified planId
     * } $params Request parameters
     * @param array<string, mixed>|null $options Additional request options
     * @return GetInstalledLocationsSuccessfulResponseDto Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function getInstalledLocation(
        array $params,
        ?array $options = null
    ): GetInstalledLocationsSuccessfulResponseDto {
        $paramDefs = [['name' => 'skip', 'in' => 'query'], ['name' => 'limit', 'in' => 'query'], ['name' => 'query', 'in' => 'query'], ['name' => 'isInstalled', 'in' => 'query'], ['name' => 'companyId', 'in' => 'query'], ['name' => 'appId', 'in' => 'query'], ['name' => 'versionId', 'in' => 'query'], ['name' => 'onTrial', 'in' => 'query'], ['name' => 'planId', 'in' => 'query'], ];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["Agency-Access"];


        $url = RequestUtils::buildUrl('/oauth/installedLocations', $extracted['path']);
        
        $headers = array_merge(
            
            $extracted['header'],
            $options['headers'] ?? []
        );

        $authToken = RequestUtils::getAuthToken(
            $this->client,
            $requirements,
            $headers,
            $extracted['query'],
            $requestBody ?? null,
            $options['preferredTokenType'] ?? null
        );

        if ($authToken) {
            $headers['Authorization'] = $authToken;
        }

        $requestOptions = [
            'headers' => $headers,
            'query' => $extracted['query'],
            '_security_requirements' => $requirements,
            '_path_params' => $extracted['path'],
            '_query_params' => $extracted['query']
        ];


        if ($options) {
            foreach ($options as $key => $value) {
                if (!in_array($key, ['headers', 'preferredTokenType'])) {
                    $requestOptions[$key] = $value;
                }
            }
        }

        try {
            $response = $this->client->getClient()->request(
                'GET',
                $url,
                $requestOptions
            );

            $body = (string) $response->getBody();
            $responseData = json_decode($body, true);
            
            return new GetInstalledLocationsSuccessfulResponseDto($responseData);
        } catch (RequestException $e) {
            $statusCode = $e->hasResponse() ? $e->getResponse()->getStatusCode() : null;
            $responseBody = $e->hasResponse() ? (string) $e->getResponse()->getBody() : null;
            $responseData = $responseBody ? json_decode($responseBody, true) : null;

            throw new GHLError(
                $e->getMessage(),
                $statusCode,
                $responseData,
                $requestOptions
            );
        }
    }

}

