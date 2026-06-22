<?php

namespace HighLevel\Services\CustomMenus;

use HighLevel\HighLevel;
use HighLevel\GHLError;
use HighLevel\Utils\RequestUtils;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Exception\RequestException;
use HighLevel\Services\CustomMenus\Models\GetSingleCustomMenusSuccessfulResponseDTO;
use HighLevel\Services\CustomMenus\Models\DeleteCustomMenuSuccessfulResponseDTO;
use HighLevel\Services\CustomMenus\Models\UpdateCustomMenuDTO;
use HighLevel\Services\CustomMenus\Models\UpdateCustomMenuLinkResponseDTO;
use HighLevel\Services\CustomMenus\Models\GetCustomMenusResponseDTO;
use HighLevel\Services\CustomMenus\Models\CreateCustomMenuDTO;

/**
 * CustomMenus Service
 * Documentation for Custom menus API
 * 
 * @package HighLevel\Services\CustomMenus
 */
class CustomMenus
{
    /**
     * HighLevel client instance
     * @var HighLevel
     */
    private HighLevel $client;

    /**
     * Create a new CustomMenus service instance
     * 
     * @param HighLevel $client HighLevel client instance
     */
    public function __construct(HighLevel $client)
    {
        $this->client = $client;
    }

    /**
     * Get Custom Menu Link
     * Fetches a single custom menus based on id. This endpoint allows clients to retrieve custom menu configurations, which may include menu items, categories, and associated metadata
     * 
     * @param array{
     *   customMenuId: string // Unique identifier of the custom menu
     * } $params Request parameters
     * @param array<string, mixed>|null $options Additional request options
     * @return GetSingleCustomMenusSuccessfulResponseDTO Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function getCustomMenuById(
        array $params,
        ?array $options = null
    ): GetSingleCustomMenusSuccessfulResponseDTO {
        $paramDefs = [['name' => 'customMenuId', 'in' => 'path']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["Agency-Access"];

        $url = RequestUtils::buildUrl('/custom-menus/{customMenuId}', $extracted['path']);
        
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
            
            return new GetSingleCustomMenusSuccessfulResponseDTO($responseData);
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
     * Delete Custom Menu Link
     * Removes a specific custom menu from the system. This operation requires authentication and proper permissions. The custom menu is identified by its unique ID, and the operation is performed within the context of a specific company.
     * 
     * @param array{
     *   customMenuId: string // ID of the custom menu to delete
     * } $params Request parameters
     * @param array<string, mixed>|null $options Additional request options
     * @return DeleteCustomMenuSuccessfulResponseDTO Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function deleteCustomMenu(
        array $params,
        ?array $options = null
    ): DeleteCustomMenuSuccessfulResponseDTO {
        $paramDefs = [['name' => 'customMenuId', 'in' => 'path']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["Agency-Access"];

        $url = RequestUtils::buildUrl('/custom-menus/{customMenuId}', $extracted['path']);
        
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
            
            return new DeleteCustomMenuSuccessfulResponseDTO($responseData);
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
     * Update Custom Menu Link
     * Updates an existing custom menu for a given company. Requires authentication and proper permissions.
     * 
     * @param array{
     *   customMenuId: string // ID of the custom menu to update
     * } $params Request parameters
     * @param UpdateCustomMenuDTO $requestBody Request body data
     * @param array<string, mixed>|null $options Additional request options
     * @return UpdateCustomMenuLinkResponseDTO Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function updateCustomMenu(
        array $params,
        $requestBody,
        ?array $options = null
    ): UpdateCustomMenuLinkResponseDTO {
        if ($requestBody !== null && is_object($requestBody) && method_exists($requestBody, 'toArray')) {
            $requestBody = $requestBody->toArray();
        }
        $paramDefs = [['name' => 'customMenuId', 'in' => 'path']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["Agency-Access"];

        $url = RequestUtils::buildUrl('/custom-menus/{customMenuId}', $extracted['path']);
        
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
                'PUT',
                $url,
                $requestOptions
            );

            $body = (string) $response->getBody();
            $responseData = json_decode($body, true);
            
            return new UpdateCustomMenuLinkResponseDTO($responseData);
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
     * Get Custom Menu Links
     * Fetches a collection of custom menus based on specified criteria. This endpoint allows clients to retrieve custom menu configurations, which may include menu items, categories, and associated metadata. The response can be tailored using query parameters for filtering, sorting, and pagination.
     * 
     * @param array{
     *   locationId?: string // Unique identifier of the location
     *   skip?: int // Number of items to skip for pagination
     *   limit?: int // Maximum number of items to return
     *   query?: string // Search query to filter custom menus by name, supports partial || full names
     *   showOnCompany?: bool // Filter to show only agency-level menu links. When omitted, fetches both agency and sub-account menu links. Ignored if locationId is provided
     * } $params Request parameters
     * @param array<string, mixed>|null $options Additional request options
     * @return GetCustomMenusResponseDTO Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function getCustomMenus(
        array $params,
        ?array $options = null
    ): GetCustomMenusResponseDTO {
        $paramDefs = [['name' => 'locationId', 'in' => 'query'], ['name' => 'skip', 'in' => 'query'], ['name' => 'limit', 'in' => 'query'], ['name' => 'query', 'in' => 'query'], ['name' => 'showOnCompany', 'in' => 'query']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["Agency-Access"];

        $url = RequestUtils::buildUrl('/custom-menus/', $extracted['path']);
        
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
            
            return new GetCustomMenusResponseDTO($responseData);
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
     * Create Custom Menu Link
     * Creates a new custom menu for a company. Requires authentication and proper permissions. For Icon Usage Details please refer to  https://doc.clickup.com/8631005/d/h/87cpx-243696/d60fa70db6b92b2
     * 
     * @param CreateCustomMenuDTO $requestBody Request body data
     * @param array<string, mixed>|null $options Additional request options
     * @return GetSingleCustomMenusSuccessfulResponseDTO Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function createCustomMenu(
        $requestBody,
        ?array $options = null
    ): GetSingleCustomMenusSuccessfulResponseDTO {
        if ($requestBody !== null && is_object($requestBody) && method_exists($requestBody, 'toArray')) {
            $requestBody = $requestBody->toArray();
        }
        $paramDefs = [];
        $extracted = RequestUtils::extractParams([], $paramDefs);
        $requirements = ["Agency-Access"];

        $url = RequestUtils::buildUrl('/custom-menus/', $extracted['path']);
        
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
            
            return new GetSingleCustomMenusSuccessfulResponseDTO($responseData);
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

