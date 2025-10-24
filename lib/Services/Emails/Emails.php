<?php

namespace HighLevel\Services\Emails;

use HighLevel\HighLevel;
use HighLevel\GHLError;
use HighLevel\Utils\RequestUtils;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Exception\RequestException;
use HighLevel\Services\Emails\Models\ScheduleFetchSuccessfulDTO;
use HighLevel\Services\Emails\Models\CreateBuilderDto;
use HighLevel\Services\Emails\Models\CreateBuilderSuccesfulResponseDto;
use HighLevel\Services\Emails\Models\FetchBuilderSuccesfulResponseDto;
use HighLevel\Services\Emails\Models\DeleteBuilderSuccesfulResponseDto;
use HighLevel\Services\Emails\Models\SaveBuilderDataDto;
use HighLevel\Services\Emails\Models\BuilderUpdateSuccessfulDTO;

/**
 * Emails Service
 * Documentation for emails API
 * 
 * @package HighLevel\Services\Emails
 */
class Emails
{
    /**
     * HighLevel client instance
     * @var HighLevel
     */
    private HighLevel $client;

    /**
     * Create a new Emails service instance
     * 
     * @param HighLevel $client HighLevel client instance
     */
    public function __construct(HighLevel $client)
    {
        $this->client = $client;
    }

    /**
     * Get Campaigns
     * Get Campaigns
     * 
     * @param array{
     *   locationId: string // Location ID to fetch campaigns from
     *   limit?: int // Maximum number of campaigns to return. Defaults to 10, maximum is 100
     *   offset?: int // Number of campaigns to skip for pagination
     *   status?: string // Filter by schedule status
     *   emailStatus?: string // Filter by email delivery status
     *   name?: string // Filter campaigns by name
     *   parentId?: string // Filter campaigns by parent folder ID
     *   limitedFields?: bool // When true, returns only essential campaign fields like id, templateDataDownloadUrl, updatedAt, type, templateType, templateId, downloadUrl and isPlainText. When false, returns complete campaign data including meta information, bulkRequestStatusInfo, ABTestInfo, resendScheduleInfo and all other campaign properties
     *   archived?: bool // Filter archived campaigns
     *   campaignsOnly?: bool // Return only campaigns, excluding folders
     *   showStats?: bool // When true, returns campaign statistics including delivered count, opened count, clicked count and revenue if available for the campaign. When false, returns campaign data without statistics.
     * } $params Request parameters
     * @param array<string, mixed>|null $options Additional request options
     * @return ScheduleFetchSuccessfulDTO Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function fetchCampaigns(
        array $params,
        ?array $options = null
    ): ScheduleFetchSuccessfulDTO {
        $paramDefs = [['name' => 'locationId', 'in' => 'query'], ['name' => 'limit', 'in' => 'query'], ['name' => 'offset', 'in' => 'query'], ['name' => 'status', 'in' => 'query'], ['name' => 'emailStatus', 'in' => 'query'], ['name' => 'name', 'in' => 'query'], ['name' => 'parentId', 'in' => 'query'], ['name' => 'limitedFields', 'in' => 'query'], ['name' => 'archived', 'in' => 'query'], ['name' => 'campaignsOnly', 'in' => 'query'], ['name' => 'showStats', 'in' => 'query'], ];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["Location-Access"];

        $url = RequestUtils::buildUrl('/emails/schedule', $extracted['path']);
        
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
            
            return new ScheduleFetchSuccessfulDTO($responseData);
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
     * Create a new template
     * Create a new template
     * 
     * @param CreateBuilderDto $requestBody Request body data
     * @param array<string, mixed>|null $options Additional request options
     * @return CreateBuilderSuccesfulResponseDto Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function createTemplate(
        CreateBuilderDto $requestBody,
        ?array $options = null
    ): CreateBuilderSuccesfulResponseDto {
        if ($requestBody !== null && is_object($requestBody) && method_exists($requestBody, 'toArray')) {
            $requestBody = $requestBody->toArray();
        }
        $paramDefs = [];
        $extracted = RequestUtils::extractParams([], $paramDefs);
        $requirements = ["Location-Access"];

        $url = RequestUtils::buildUrl('/emails/builder', $extracted['path']);
        
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

        if ($requestBody !== null) {
            $requestOptions['json'] = $requestBody;
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
            
            return new CreateBuilderSuccesfulResponseDto($responseData);
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
     * Fetch email templates
     * Fetch email templates by location id
     * 
     * @param array{
     *   locationId: string
     *   limit?: string
     *   offset?: string
     *   search?: string
     *   sortByDate?: string
     *   archived?: string
     *   builderVersion?: string
     *   name?: string
     *   parentId?: string
     *   originId?: string
     *   templatesOnly?: string
     * } $params Request parameters
     * @param array<string, mixed>|null $options Additional request options
     * @return FetchBuilderSuccesfulResponseDto Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function fetchTemplate(
        array $params,
        ?array $options = null
    ): FetchBuilderSuccesfulResponseDto {
        $paramDefs = [['name' => 'locationId', 'in' => 'query'], ['name' => 'limit', 'in' => 'query'], ['name' => 'offset', 'in' => 'query'], ['name' => 'search', 'in' => 'query'], ['name' => 'sortByDate', 'in' => 'query'], ['name' => 'archived', 'in' => 'query'], ['name' => 'builderVersion', 'in' => 'query'], ['name' => 'name', 'in' => 'query'], ['name' => 'parentId', 'in' => 'query'], ['name' => 'originId', 'in' => 'query'], ['name' => 'templatesOnly', 'in' => 'query'], ];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["Location-Access"];

        $url = RequestUtils::buildUrl('/emails/builder', $extracted['path']);
        
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
            
            return new FetchBuilderSuccesfulResponseDto($responseData);
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
     * Delete a template
     * Delete a template
     * 
     * @param array{
     *   locationId: string
     *   templateId: string
     * } $params Request parameters
     * @param array<string, mixed>|null $options Additional request options
     * @return DeleteBuilderSuccesfulResponseDto Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function deleteTemplate(
        array $params,
        ?array $options = null
    ): DeleteBuilderSuccesfulResponseDto {
        $paramDefs = [['name' => 'locationId', 'in' => 'path'], ['name' => 'templateId', 'in' => 'path'], ];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["Location-Access"];

        $url = RequestUtils::buildUrl('/emails/builder/{locationId}/{templateId}', $extracted['path']);
        
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
                'DELETE',
                $url,
                $requestOptions
            );

            $body = (string) $response->getBody();
            $responseData = json_decode($body, true);
            
            return new DeleteBuilderSuccesfulResponseDto($responseData);
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
     * Update a template
     * Update a template
     * 
     * @param SaveBuilderDataDto $requestBody Request body data
     * @param array<string, mixed>|null $options Additional request options
     * @return BuilderUpdateSuccessfulDTO Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function updateTemplate(
        SaveBuilderDataDto $requestBody,
        ?array $options = null
    ): BuilderUpdateSuccessfulDTO {
        if ($requestBody !== null && is_object($requestBody) && method_exists($requestBody, 'toArray')) {
            $requestBody = $requestBody->toArray();
        }
        $paramDefs = [];
        $extracted = RequestUtils::extractParams([], $paramDefs);
        $requirements = ["Location-Access"];

        $url = RequestUtils::buildUrl('/emails/builder/data', $extracted['path']);
        
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

        if ($requestBody !== null) {
            $requestOptions['json'] = $requestBody;
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
            
            return new BuilderUpdateSuccessfulDTO($responseData);
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

