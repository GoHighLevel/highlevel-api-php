<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\BrandBoards;

use HighLevel\HighLevel;
use HighLevel\GHLError;
use HighLevel\Utils\RequestUtils;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Exception\RequestException;
use HighLevel\Services\BrandBoards\Models\ListBrandVoicesPublicV1ResponseDto;
use HighLevel\Services\BrandBoards\Models\CreateBrandVoicePublicV1BodyDto;
use HighLevel\Services\BrandBoards\Models\CreateBrandVoicePublicV1ResponseDto;
use HighLevel\Services\BrandBoards\Models\GetBrandVoicePublicV1ResponseDto;
use HighLevel\Services\BrandBoards\Models\UpdateBrandVoicePublicV1BodyDto;
use HighLevel\Services\BrandBoards\Models\UpdateBrandVoicePublicV1ResponseDto;
use HighLevel\Services\BrandBoards\Models\DeleteBrandVoicePublicV1ResponseDto;
use HighLevel\Services\BrandBoards\Models\SetDefaultBrandVoicePublicV1ResponseDto;
use HighLevel\Services\BrandBoards\Models\GetBrandBoardsByLocationSuccessDTO;
use HighLevel\Services\BrandBoards\Models\GetBrandBoardSuccessDTO;
use HighLevel\Services\BrandBoards\Models\UpdateBrandBoardBody;
use HighLevel\Services\BrandBoards\Models\CreateBrandBoardParam;

/**
 * BrandBoards Service
 * Documentation for Brand Boards API

## API Version v3

All APIs available via &#x60;/v3&#x60; route prefix with AIP-compliant responses.
 * 
 * @package HighLevel\Services\BrandBoards
 */
class BrandBoards
{
    /**
     * HighLevel client instance
     * @var HighLevel
     */
    private HighLevel $client;

    /**
     * Create a new BrandBoards service instance
     * 
     * @param HighLevel $client HighLevel client instance
     */
    public function __construct(HighLevel $client)
    {
        $this->client = $client;
    }

    /**
     * List Brand Voices
     * Get list of brand voices for a location
     * 
     * @param array{
     *   locationId: string // Location ID
     *   limit?: int // Number of brand voices to return. Defaults to 10, minimum is 1, maximum is 20
     *   offset?: int // Number of brand voices to skip for pagination. Defaults to 0, minimum is 0
     *   search?: string // Search text for brand voice name
     *   deleted?: bool // Whether to return deleted brand voices. Defaults to false
     * } $params Request parameters
     * @param array<string, mixed>|null $options Additional request options
     * @return ListBrandVoicesPublicV1ResponseDto Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function listBrandVoices(
        array $params,
        ?array $options = null
    ): ListBrandVoicesPublicV1ResponseDto {
        $paramDefs = [['name' => 'locationId', 'in' => 'path'], ['name' => 'limit', 'in' => 'query'], ['name' => 'offset', 'in' => 'query'], ['name' => 'search', 'in' => 'query'], ['name' => 'deleted', 'in' => 'query'], ];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["Location-Access"];

        $url = RequestUtils::buildUrl('/brand-boards/locations/{locationId}/brand-voices', $extracted['path']);
        
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
            
            return new ListBrandVoicesPublicV1ResponseDto($responseData);
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
     * Create Brand Voice
     * Create a brand voice for a location
     * 
     * @param array{
     *   locationId: string // Location ID
     * } $params Request parameters
     * @param CreateBrandVoicePublicV1BodyDto $requestBody Request body data
     * @param array<string, mixed>|null $options Additional request options
     * @return CreateBrandVoicePublicV1ResponseDto Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function createBrandVoice(
        array $params,
        $requestBody,
        ?array $options = null
    ): CreateBrandVoicePublicV1ResponseDto {
        if ($requestBody !== null && is_object($requestBody) && method_exists($requestBody, 'toArray')) {
            $requestBody = $requestBody->toArray();
        }
        $paramDefs = [['name' => 'locationId', 'in' => 'path'], ];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["Location-Access"];

        $url = RequestUtils::buildUrl('/brand-boards/locations/{locationId}/brand-voices', $extracted['path']);
        
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
            
            return new CreateBrandVoicePublicV1ResponseDto($responseData);
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
     * Get Brand Voice
     * Get a brand voice by ID
     * 
     * @param array{
     *   locationId: string // Location ID
     *   brandVoiceId: string // Brand voice ID
     * } $params Request parameters
     * @param array<string, mixed>|null $options Additional request options
     * @return GetBrandVoicePublicV1ResponseDto Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function getBrandVoice(
        array $params,
        ?array $options = null
    ): GetBrandVoicePublicV1ResponseDto {
        $paramDefs = [['name' => 'locationId', 'in' => 'path'], ['name' => 'brandVoiceId', 'in' => 'path'], ];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["Location-Access"];

        $url = RequestUtils::buildUrl('/brand-boards/locations/{locationId}/brand-voices/{brandVoiceId}', $extracted['path']);
        
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
            
            return new GetBrandVoicePublicV1ResponseDto($responseData);
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
     * Update Brand Voice
     * Update a brand voice by ID
     * 
     * @param array{
     *   locationId: string // Location ID
     *   brandVoiceId: string // Brand voice ID
     * } $params Request parameters
     * @param UpdateBrandVoicePublicV1BodyDto $requestBody Request body data
     * @param array<string, mixed>|null $options Additional request options
     * @return UpdateBrandVoicePublicV1ResponseDto Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function updateBrandVoice(
        array $params,
        $requestBody,
        ?array $options = null
    ): UpdateBrandVoicePublicV1ResponseDto {
        if ($requestBody !== null && is_object($requestBody) && method_exists($requestBody, 'toArray')) {
            $requestBody = $requestBody->toArray();
        }
        $paramDefs = [['name' => 'locationId', 'in' => 'path'], ['name' => 'brandVoiceId', 'in' => 'path'], ];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["Location-Access"];

        $url = RequestUtils::buildUrl('/brand-boards/locations/{locationId}/brand-voices/{brandVoiceId}', $extracted['path']);
        
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
                'PATCH',
                $url,
                $requestOptions
            );

            $body = (string) $response->getBody();
            $responseData = json_decode($body, true);
            
            return new UpdateBrandVoicePublicV1ResponseDto($responseData);
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
     * Delete Brand Voice
     * Delete a brand voice by ID
     * 
     * @param array{
     *   locationId: string // Location ID
     *   brandVoiceId: string // Brand voice ID
     * } $params Request parameters
     * @param array<string, mixed>|null $options Additional request options
     * @return DeleteBrandVoicePublicV1ResponseDto Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function deleteBrandVoice(
        array $params,
        ?array $options = null
    ): DeleteBrandVoicePublicV1ResponseDto {
        $paramDefs = [['name' => 'locationId', 'in' => 'path'], ['name' => 'brandVoiceId', 'in' => 'path'], ];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["Location-Access"];

        $url = RequestUtils::buildUrl('/brand-boards/locations/{locationId}/brand-voices/{brandVoiceId}', $extracted['path']);
        
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
            
            return new DeleteBrandVoicePublicV1ResponseDto($responseData);
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
     * Set Default Brand Voice
     * Set a brand voice as the default for a location. The previous default will be unset.
     * 
     * @param array{
     *   locationId: string // Location ID
     *   brandVoiceId: string // Brand voice ID
     * } $params Request parameters
     * @param array<string, mixed>|null $options Additional request options
     * @return SetDefaultBrandVoicePublicV1ResponseDto Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function setDefaultBrandVoice(
        array $params,
        ?array $options = null
    ): SetDefaultBrandVoicePublicV1ResponseDto {
        $paramDefs = [['name' => 'locationId', 'in' => 'path'], ['name' => 'brandVoiceId', 'in' => 'path'], ];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["Location-Access"];

        $url = RequestUtils::buildUrl('/brand-boards/locations/{locationId}/brand-voices/{brandVoiceId}/default', $extracted['path']);
        
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
                'POST',
                $url,
                $requestOptions
            );

            $body = (string) $response->getBody();
            $responseData = json_decode($body, true);
            
            return new SetDefaultBrandVoicePublicV1ResponseDto($responseData);
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
     * Get Brand Boards
     * Retrieves all Brand Boards for a specific location
     * 
     * @param array{
     *   locationId: string // Location ID where the brand boards exist
     *   limit?: int // Maximum number of brand boards to return
     *   offset?: int // Number of brand boards to skip for pagination
     *   search?: string // Search term to filter brand boards by name
     *   deleted?: bool // Include deleted brand boards in results
     * } $params Request parameters
     * @param array<string, mixed>|null $options Additional request options
     * @return GetBrandBoardsByLocationSuccessDTO Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function getBrandBoardsByLocation(
        array $params,
        ?array $options = null
    ): GetBrandBoardsByLocationSuccessDTO {
        $paramDefs = [['name' => 'locationId', 'in' => 'path'], ['name' => 'limit', 'in' => 'query'], ['name' => 'offset', 'in' => 'query'], ['name' => 'search', 'in' => 'query'], ['name' => 'deleted', 'in' => 'query'], ];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["Location-Access"];

        $url = RequestUtils::buildUrl('/brand-boards/{locationId}', $extracted['path']);
        
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
            
            return new GetBrandBoardsByLocationSuccessDTO($responseData);
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
     * Get Brand Board
     * Retrieves a specific Brand Board by its ID
     * 
     * @param array{
     *   locationId: string // Location ID where the brand board exists
     *   id: string // Brand board ID to update, retrieve, or delete
     * } $params Request parameters
     * @param array<string, mixed>|null $options Additional request options
     * @return GetBrandBoardSuccessDTO Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function getBrandBoardById(
        array $params,
        ?array $options = null
    ): GetBrandBoardSuccessDTO {
        $paramDefs = [['name' => 'locationId', 'in' => 'path'], ['name' => 'id', 'in' => 'path'], ];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["Location-Access"];

        $url = RequestUtils::buildUrl('/brand-boards/{locationId}/{id}', $extracted['path']);
        
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
            
            return new GetBrandBoardSuccessDTO($responseData);
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
     * Update a Brand Board
     * Updates an existing Brand Board
     * 
     * @param array{
     *   locationId: string // Location ID where the brand board exists
     *   id: string // Brand board ID to update, retrieve, or delete
     * } $params Request parameters
     * @param UpdateBrandBoardBody $requestBody Request body data
     * @param array<string, mixed>|null $options Additional request options
     * @return GetBrandBoardSuccessDTO Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function updateBrandBoard(
        array $params,
        $requestBody,
        ?array $options = null
    ): GetBrandBoardSuccessDTO {
        if ($requestBody !== null && is_object($requestBody) && method_exists($requestBody, 'toArray')) {
            $requestBody = $requestBody->toArray();
        }
        $paramDefs = [['name' => 'locationId', 'in' => 'path'], ['name' => 'id', 'in' => 'path'], ];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["Location-Access"];

        $url = RequestUtils::buildUrl('/brand-boards/{locationId}/{id}', $extracted['path']);
        
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
                'PATCH',
                $url,
                $requestOptions
            );

            $body = (string) $response->getBody();
            $responseData = json_decode($body, true);
            
            return new GetBrandBoardSuccessDTO($responseData);
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
     * Delete a Brand Board
     * Deletes a Brand Board
     * 
     * @param array{
     *   locationId: string // Location ID where the brand board exists
     *   id: string // Brand board ID to update, retrieve, or delete
     * } $params Request parameters
     * @param array<string, mixed>|null $options Additional request options
     * @return GetBrandBoardSuccessDTO Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function deleteBrandBoard(
        array $params,
        ?array $options = null
    ): GetBrandBoardSuccessDTO {
        $paramDefs = [['name' => 'locationId', 'in' => 'path'], ['name' => 'id', 'in' => 'path'], ];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["Location-Access"];

        $url = RequestUtils::buildUrl('/brand-boards/{locationId}/{id}', $extracted['path']);
        
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
            
            return new GetBrandBoardSuccessDTO($responseData);
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
     * Create a new brand board
     * Creates a new brand board with logos, colors, and fonts
     * 
     * @param CreateBrandBoardParam $requestBody Request body data
     * @param array<string, mixed>|null $options Additional request options
     * @return GetBrandBoardSuccessDTO Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function createBrandBoard(
        $requestBody,
        ?array $options = null
    ): GetBrandBoardSuccessDTO {
        if ($requestBody !== null && is_object($requestBody) && method_exists($requestBody, 'toArray')) {
            $requestBody = $requestBody->toArray();
        }
        $paramDefs = [];
        $extracted = RequestUtils::extractParams([], $paramDefs);
        $requirements = ["Location-Access"];

        $url = RequestUtils::buildUrl('/brand-boards/', $extracted['path']);
        
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
            
            return new GetBrandBoardSuccessDTO($responseData);
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

