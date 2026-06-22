<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Oauth;

use HighLevel\HighLevel;
use HighLevel\GHLError;
use HighLevel\Utils\RequestUtils;
use HighLevel\Constants\UserType;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Exception\RequestException;
use HighLevel\Services\Oauth\Models\GetAccessTokenBodyDto;
use HighLevel\Services\Oauth\Models\GetAccessTokenSuccessfulResponseDto;
use HighLevel\Services\Oauth\Models\GetLocationAccessTokenV3SuccessfulResponseDto;
use HighLevel\Services\Oauth\Models\GetInstalledLocationsV3SuccessfulResponseDto;

/**
 * Oauth Service
 * Documentation for OAuth 2.0 API

## API Version v3

All APIs available via &#x60;/v3&#x60; route prefix with AIP-compliant responses.
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

        return self::MARKETPLACE_URL . '/v2/oauth/chooselocation?' . http_build_query($params);
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
            'refreshToken' => $refreshToken,
            'clientId' => $clientId,
            'clientSecret' => $clientSecret,
            'grantType' => $grantType,
            'userType' => $userType
        ]);
    }

    /**
     * Get Access Token
     * Use Access Tokens to access CRM resources on behalf of an authenticated location/company.
     * 
     * @param GetAccessTokenBodyDto $requestBody Request body data
     * @param array<string, mixed>|null $options Additional request options
     * @return GetAccessTokenSuccessfulResponseDto Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function getAccessToken(
        $requestBody,
        ?array $options = null
    ): GetAccessTokenSuccessfulResponseDto {
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
            
            return new GetAccessTokenSuccessfulResponseDto($responseData);
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
     * @return GetLocationAccessTokenV3SuccessfulResponseDto Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function getLocationAccessToken(
        $requestBody,
        ?array $options = null
    ): GetLocationAccessTokenV3SuccessfulResponseDto {
        if ($requestBody !== null && is_object($requestBody) && method_exists($requestBody, 'toArray')) {
            $requestBody = $requestBody->toArray();
        }
        $paramDefs = [];
        $extracted = RequestUtils::extractParams([], $paramDefs);
        $requirements = ["Agency-Access-Only"];

        $processedBody = $requestBody ? http_build_query($requestBody) : null;

        $url = RequestUtils::buildUrl('/oauth/location-token', $extracted['path']);
        
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
            
            return new GetLocationAccessTokenV3SuccessfulResponseDto($responseData);
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
     *   pageSize?: int // Max items per page (1-100). Replaces legacy `limit` parameter per AIP-158.
     *   pageToken?: string // Opaque token returned in a previous response to fetch the next page. Replaces legacy `skip` parameter per AIP-158.
     *   query?: string // Parameter to search for the installed location by name
     *   isInstalled?: bool // Filters out location which are installed for specified app under the specified company
     *   restrictToUserLocations?: bool // When true, restricts the list to locations the current user has access to (for restricted agency admins and account admins). When false or omitted, no user-based filter is applied for installed list; for backward compatibility, install list (isInstalled=false) is still filtered by user when this param is omitted.
     *   companyId: string // Parameter to search by the companyId
     *   appId: string // Parameter to search by the appId
     *   versionId?: string // VersionId of the app
     *   onTrial?: bool // Filters out locations which are installed for specified app in trial mode
     *   planId?: string // Filters out location which are installed for specified app under the specified planId
     *   locationId?: string // locationId
     * } $params Request parameters
     * @param array<string, mixed>|null $options Additional request options
     * @return GetInstalledLocationsV3SuccessfulResponseDto Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function getInstalledLocation(
        array $params,
        ?array $options = null
    ): GetInstalledLocationsV3SuccessfulResponseDto {
        $paramDefs = [['name' => 'pageSize', 'in' => 'query'], ['name' => 'pageToken', 'in' => 'query'], ['name' => 'query', 'in' => 'query'], ['name' => 'isInstalled', 'in' => 'query'], ['name' => 'restrictToUserLocations', 'in' => 'query'], ['name' => 'companyId', 'in' => 'query'], ['name' => 'appId', 'in' => 'query'], ['name' => 'versionId', 'in' => 'query'], ['name' => 'onTrial', 'in' => 'query'], ['name' => 'planId', 'in' => 'query'], ['name' => 'locationId', 'in' => 'query'], ];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["Agency-Access-Only"];


        $url = RequestUtils::buildUrl('/oauth/installed-locations', $extracted['path']);
        
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
            
            return new GetInstalledLocationsV3SuccessfulResponseDto($responseData);
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

