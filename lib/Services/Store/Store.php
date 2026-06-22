<?php

namespace HighLevel\Services\Store;

use HighLevel\HighLevel;
use HighLevel\GHLError;
use HighLevel\Utils\RequestUtils;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Exception\RequestException;
use HighLevel\Services\Store\Models\CreateShippingZoneDto;
use HighLevel\Services\Store\Models\CreateShippingZoneResponseDto;
use HighLevel\Services\Store\Models\ListShippingZoneResponseDto;
use HighLevel\Services\Store\Models\GetShippingZoneResponseDto;
use HighLevel\Services\Store\Models\UpdateShippingZoneDto;
use HighLevel\Services\Store\Models\UpdateShippingZoneResponseDto;
use HighLevel\Services\Store\Models\DeleteShippingZoneResponseDto;
use HighLevel\Services\Store\Models\GetAvailableShippingRates;
use HighLevel\Services\Store\Models\GetAvailableShippingRatesResponseDto;
use HighLevel\Services\Store\Models\CreateShippingRateDto;
use HighLevel\Services\Store\Models\CreateShippingRateResponseDto;
use HighLevel\Services\Store\Models\ListShippingRateResponseDto;
use HighLevel\Services\Store\Models\GetShippingRateResponseDto;
use HighLevel\Services\Store\Models\UpdateShippingRateDto;
use HighLevel\Services\Store\Models\UpdateShippingRateResponseDto;
use HighLevel\Services\Store\Models\DeleteShippingRateResponseDto;
use HighLevel\Services\Store\Models\CreateShippingCarrierDto;
use HighLevel\Services\Store\Models\CreateShippingCarrierResponseDto;
use HighLevel\Services\Store\Models\ListShippingCarrierResponseDto;
use HighLevel\Services\Store\Models\GetShippingCarrierResponseDto;
use HighLevel\Services\Store\Models\UpdateShippingCarrierDto;
use HighLevel\Services\Store\Models\UpdateShippingCarrierResponseDto;
use HighLevel\Services\Store\Models\DeleteShippingCarrierResponseDto;
use HighLevel\Services\Store\Models\CreateStoreSettingDto;
use HighLevel\Services\Store\Models\CreateStoreSettingResponseDto;
use HighLevel\Services\Store\Models\GetStoreSettingResponseDto;

/**
 * Store Service
 * Documentation for store API
 * 
 * @package HighLevel\Services\Store
 */
class Store
{
    /**
     * HighLevel client instance
     * @var HighLevel
     */
    private HighLevel $client;

    /**
     * Create a new Store service instance
     * 
     * @param HighLevel $client HighLevel client instance
     */
    public function __construct(HighLevel $client)
    {
        $this->client = $client;
    }

    /**
     * Create Shipping Zone
     * The &quot;Create Shipping Zone&quot; API allows adding a new shipping zone.
     * 
     * @param CreateShippingZoneDto $requestBody Request body data
     * @param array<string, mixed>|null $options Additional request options
     * @return CreateShippingZoneResponseDto Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function createShippingZone(
        $requestBody,
        ?array $options = null
    ): CreateShippingZoneResponseDto {
        if ($requestBody !== null && is_object($requestBody) && method_exists($requestBody, 'toArray')) {
            $requestBody = $requestBody->toArray();
        }
        $paramDefs = [];
        $extracted = RequestUtils::extractParams([], $paramDefs);
        $requirements = ["Location-Access"];

        $url = RequestUtils::buildUrl('/store/shipping-zone', $extracted['path']);
        
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
            
            return new CreateShippingZoneResponseDto($responseData);
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
     * List Shipping Zones
     * The &quot;List Shipping Zone&quot; API allows to retrieve a list of shipping zone.
     * 
     * @param array{
     *   altId: string // Location Id or Agency Id
     *   altType: string
     *   limit?: int // The maximum number of items to be included in a single page of results
     *   offset?: int // The starting index of the page, indicating the position from which the results should be retrieved.
     *   withShippingRate?: bool // Include shipping rates array
     * } $params Request parameters
     * @param array<string, mixed>|null $options Additional request options
     * @return ListShippingZoneResponseDto Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function listShippingZones(
        array $params,
        ?array $options = null
    ): ListShippingZoneResponseDto {
        $paramDefs = [['name' => 'altId', 'in' => 'query'], ['name' => 'altType', 'in' => 'query'], ['name' => 'limit', 'in' => 'query'], ['name' => 'offset', 'in' => 'query'], ['name' => 'withShippingRate', 'in' => 'query']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["Location-Access"];

        $url = RequestUtils::buildUrl('/store/shipping-zone', $extracted['path']);
        
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
            
            return new ListShippingZoneResponseDto($responseData);
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
     * Get Shipping Zone
     * The &quot;List Shipping Zone&quot; API allows to retrieve a paginated list of shipping zone.
     * 
     * @param array{
     *   shippingZoneId: string // ID of the item that needs to be returned
     *   altId: string // Location Id or Agency Id
     *   altType: string
     *   withShippingRate?: bool // Include shipping rates array
     * } $params Request parameters
     * @param array<string, mixed>|null $options Additional request options
     * @return GetShippingZoneResponseDto Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function getShippingZones(
        array $params,
        ?array $options = null
    ): GetShippingZoneResponseDto {
        $paramDefs = [['name' => 'shippingZoneId', 'in' => 'path'], ['name' => 'altId', 'in' => 'query'], ['name' => 'altType', 'in' => 'query'], ['name' => 'withShippingRate', 'in' => 'query']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["Location-Access"];

        $url = RequestUtils::buildUrl('/store/shipping-zone/{shippingZoneId}', $extracted['path']);
        
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
            
            return new GetShippingZoneResponseDto($responseData);
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
     * Update Shipping Zone
     * The &quot;update Shipping Zone&quot; API allows update a shipping zone to the system. 
     * 
     * @param array{
     *   shippingZoneId: string // ID of the item that needs to be returned
     * } $params Request parameters
     * @param UpdateShippingZoneDto $requestBody Request body data
     * @param array<string, mixed>|null $options Additional request options
     * @return UpdateShippingZoneResponseDto Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function updateShippingZone(
        array $params,
        $requestBody,
        ?array $options = null
    ): UpdateShippingZoneResponseDto {
        if ($requestBody !== null && is_object($requestBody) && method_exists($requestBody, 'toArray')) {
            $requestBody = $requestBody->toArray();
        }
        $paramDefs = [['name' => 'shippingZoneId', 'in' => 'path']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["Location-Access"];

        $url = RequestUtils::buildUrl('/store/shipping-zone/{shippingZoneId}', $extracted['path']);
        
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
            
            return new UpdateShippingZoneResponseDto($responseData);
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
     * Delete shipping zone
     * Delete specific shipping zone with Id :shippingZoneId
     * 
     * @param array{
     *   shippingZoneId: string // ID of the item that needs to be returned
     *   altId: string // Location Id or Agency Id
     *   altType: string
     * } $params Request parameters
     * @param array<string, mixed>|null $options Additional request options
     * @return DeleteShippingZoneResponseDto Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function deleteShippingZone(
        array $params,
        ?array $options = null
    ): DeleteShippingZoneResponseDto {
        $paramDefs = [['name' => 'shippingZoneId', 'in' => 'path'], ['name' => 'altId', 'in' => 'query'], ['name' => 'altType', 'in' => 'query']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["Location-Access"];

        $url = RequestUtils::buildUrl('/store/shipping-zone/{shippingZoneId}', $extracted['path']);
        
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
            
            return new DeleteShippingZoneResponseDto($responseData);
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
     * Get available shipping rates
     * This return available shipping rates for country based on order amount
     * 
     * @param GetAvailableShippingRates $requestBody Request body data
     * @param array<string, mixed>|null $options Additional request options
     * @return GetAvailableShippingRatesResponseDto Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function getAvailableShippingZones(
        $requestBody,
        ?array $options = null
    ): GetAvailableShippingRatesResponseDto {
        if ($requestBody !== null && is_object($requestBody) && method_exists($requestBody, 'toArray')) {
            $requestBody = $requestBody->toArray();
        }
        $paramDefs = [];
        $extracted = RequestUtils::extractParams([], $paramDefs);
        $requirements = [];

        $url = RequestUtils::buildUrl('/store/shipping-zone/shipping-rates', $extracted['path']);
        
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
            
            return new GetAvailableShippingRatesResponseDto($responseData);
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
     * Create Shipping Rate
     * The &quot;Create Shipping Rate&quot; API allows adding a new shipping rate.
     * 
     * @param array{
     *   shippingZoneId: string // ID of the item that needs to be returned
     * } $params Request parameters
     * @param CreateShippingRateDto $requestBody Request body data
     * @param array<string, mixed>|null $options Additional request options
     * @return CreateShippingRateResponseDto Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function createShippingRate(
        array $params,
        $requestBody,
        ?array $options = null
    ): CreateShippingRateResponseDto {
        if ($requestBody !== null && is_object($requestBody) && method_exists($requestBody, 'toArray')) {
            $requestBody = $requestBody->toArray();
        }
        $paramDefs = [['name' => 'shippingZoneId', 'in' => 'path']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["Location-Access"];

        $url = RequestUtils::buildUrl('/store/shipping-zone/{shippingZoneId}/shipping-rate', $extracted['path']);
        
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
            
            return new CreateShippingRateResponseDto($responseData);
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
     * List Shipping Rates
     * The &quot;List Shipping Rate&quot; API allows to retrieve a list of shipping rate.
     * 
     * @param array{
     *   shippingZoneId: string // ID of the item that needs to be returned
     *   altId: string // Location Id or Agency Id
     *   altType: string
     *   limit?: int // The maximum number of items to be included in a single page of results
     *   offset?: int // The starting index of the page, indicating the position from which the results should be retrieved.
     * } $params Request parameters
     * @param array<string, mixed>|null $options Additional request options
     * @return ListShippingRateResponseDto Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function listShippingRates(
        array $params,
        ?array $options = null
    ): ListShippingRateResponseDto {
        $paramDefs = [['name' => 'shippingZoneId', 'in' => 'path'], ['name' => 'altId', 'in' => 'query'], ['name' => 'altType', 'in' => 'query'], ['name' => 'limit', 'in' => 'query'], ['name' => 'offset', 'in' => 'query']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["Location-Access"];

        $url = RequestUtils::buildUrl('/store/shipping-zone/{shippingZoneId}/shipping-rate', $extracted['path']);
        
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
            
            return new ListShippingRateResponseDto($responseData);
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
     * Get Shipping Rate
     * The &quot;List Shipping Rate&quot; API allows to retrieve a paginated list of shipping rate.
     * 
     * @param array{
     *   shippingZoneId: string // ID of the shipping zone
     *   shippingRateId: string // ID of the shipping rate that needs to be returned
     *   altId: string // Location Id or Agency Id
     *   altType: string
     * } $params Request parameters
     * @param array<string, mixed>|null $options Additional request options
     * @return GetShippingRateResponseDto Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function getShippingRates(
        array $params,
        ?array $options = null
    ): GetShippingRateResponseDto {
        $paramDefs = [['name' => 'shippingZoneId', 'in' => 'path'], ['name' => 'shippingRateId', 'in' => 'path'], ['name' => 'altId', 'in' => 'query'], ['name' => 'altType', 'in' => 'query']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["Location-Access"];

        $url = RequestUtils::buildUrl('/store/shipping-zone/{shippingZoneId}/shipping-rate/{shippingRateId}', $extracted['path']);
        
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
            
            return new GetShippingRateResponseDto($responseData);
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
     * Update Shipping Rate
     * The &quot;update Shipping Rate&quot; API allows update a shipping rate to the system. 
     * 
     * @param array{
     *   shippingZoneId: string // ID of the shipping zone
     *   shippingRateId: string // ID of the shipping rate that needs to be returned
     * } $params Request parameters
     * @param UpdateShippingRateDto $requestBody Request body data
     * @param array<string, mixed>|null $options Additional request options
     * @return UpdateShippingRateResponseDto Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function updateShippingRate(
        array $params,
        $requestBody,
        ?array $options = null
    ): UpdateShippingRateResponseDto {
        if ($requestBody !== null && is_object($requestBody) && method_exists($requestBody, 'toArray')) {
            $requestBody = $requestBody->toArray();
        }
        $paramDefs = [['name' => 'shippingZoneId', 'in' => 'path'], ['name' => 'shippingRateId', 'in' => 'path']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["Location-Access"];

        $url = RequestUtils::buildUrl('/store/shipping-zone/{shippingZoneId}/shipping-rate/{shippingRateId}', $extracted['path']);
        
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
            
            return new UpdateShippingRateResponseDto($responseData);
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
     * Delete shipping rate
     * Delete specific shipping rate with Id :shippingRateId
     * 
     * @param array{
     *   shippingZoneId: string // ID of the shipping zone
     *   shippingRateId: string // ID of the shipping rate that needs to be returned
     *   altId: string // Location Id or Agency Id
     *   altType: string
     * } $params Request parameters
     * @param array<string, mixed>|null $options Additional request options
     * @return DeleteShippingRateResponseDto Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function deleteShippingRate(
        array $params,
        ?array $options = null
    ): DeleteShippingRateResponseDto {
        $paramDefs = [['name' => 'shippingZoneId', 'in' => 'path'], ['name' => 'shippingRateId', 'in' => 'path'], ['name' => 'altId', 'in' => 'query'], ['name' => 'altType', 'in' => 'query']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["Location-Access"];

        $url = RequestUtils::buildUrl('/store/shipping-zone/{shippingZoneId}/shipping-rate/{shippingRateId}', $extracted['path']);
        
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
            
            return new DeleteShippingRateResponseDto($responseData);
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
     * Create Shipping Carrier
     * The &quot;Create Shipping Carrier&quot; API allows adding a new shipping carrier.
     * 
     * @param CreateShippingCarrierDto $requestBody Request body data
     * @param array<string, mixed>|null $options Additional request options
     * @return CreateShippingCarrierResponseDto Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function createShippingCarrier(
        $requestBody,
        ?array $options = null
    ): CreateShippingCarrierResponseDto {
        if ($requestBody !== null && is_object($requestBody) && method_exists($requestBody, 'toArray')) {
            $requestBody = $requestBody->toArray();
        }
        $paramDefs = [];
        $extracted = RequestUtils::extractParams([], $paramDefs);
        $requirements = ["Location-Access"];

        $url = RequestUtils::buildUrl('/store/shipping-carrier', $extracted['path']);
        
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
            
            return new CreateShippingCarrierResponseDto($responseData);
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
     * List Shipping Carriers
     * The &quot;List Shipping Carrier&quot; API allows to retrieve a list of shipping carrier.
     * 
     * @param array{
     *   altId: string // Location Id or Agency Id
     *   altType: string
     * } $params Request parameters
     * @param array<string, mixed>|null $options Additional request options
     * @return ListShippingCarrierResponseDto Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function listShippingCarriers(
        array $params,
        ?array $options = null
    ): ListShippingCarrierResponseDto {
        $paramDefs = [['name' => 'altId', 'in' => 'query'], ['name' => 'altType', 'in' => 'query']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["Location-Access"];

        $url = RequestUtils::buildUrl('/store/shipping-carrier', $extracted['path']);
        
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
            
            return new ListShippingCarrierResponseDto($responseData);
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
     * Get Shipping Carrier
     * The &quot;List Shipping Carrier&quot; API allows to retrieve a paginated list of shipping carrier.
     * 
     * @param array{
     *   shippingCarrierId: string // ID of the shipping carrier that needs to be returned
     *   altId: string // Location Id or Agency Id
     *   altType: string
     * } $params Request parameters
     * @param array<string, mixed>|null $options Additional request options
     * @return GetShippingCarrierResponseDto Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function getShippingCarriers(
        array $params,
        ?array $options = null
    ): GetShippingCarrierResponseDto {
        $paramDefs = [['name' => 'shippingCarrierId', 'in' => 'path'], ['name' => 'altId', 'in' => 'query'], ['name' => 'altType', 'in' => 'query']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["Location-Access"];

        $url = RequestUtils::buildUrl('/store/shipping-carrier/{shippingCarrierId}', $extracted['path']);
        
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
            
            return new GetShippingCarrierResponseDto($responseData);
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
     * Update Shipping Carrier
     * The &quot;update Shipping Carrier&quot; API allows update a shipping carrier to the system. 
     * 
     * @param array{
     *   shippingCarrierId: string // ID of the shipping carrier that needs to be returned
     * } $params Request parameters
     * @param UpdateShippingCarrierDto $requestBody Request body data
     * @param array<string, mixed>|null $options Additional request options
     * @return UpdateShippingCarrierResponseDto Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function updateShippingCarrier(
        array $params,
        $requestBody,
        ?array $options = null
    ): UpdateShippingCarrierResponseDto {
        if ($requestBody !== null && is_object($requestBody) && method_exists($requestBody, 'toArray')) {
            $requestBody = $requestBody->toArray();
        }
        $paramDefs = [['name' => 'shippingCarrierId', 'in' => 'path']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["Location-Access"];

        $url = RequestUtils::buildUrl('/store/shipping-carrier/{shippingCarrierId}', $extracted['path']);
        
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
            
            return new UpdateShippingCarrierResponseDto($responseData);
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
     * Delete shipping carrier
     * Delete specific shipping carrier with Id :shippingCarrierId
     * 
     * @param array{
     *   shippingCarrierId: string // ID of the shipping carrier that needs to be returned
     *   altId: string // Location Id or Agency Id
     *   altType: string
     * } $params Request parameters
     * @param array<string, mixed>|null $options Additional request options
     * @return DeleteShippingCarrierResponseDto Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function deleteShippingCarrier(
        array $params,
        ?array $options = null
    ): DeleteShippingCarrierResponseDto {
        $paramDefs = [['name' => 'shippingCarrierId', 'in' => 'path'], ['name' => 'altId', 'in' => 'query'], ['name' => 'altType', 'in' => 'query']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["Location-Access"];

        $url = RequestUtils::buildUrl('/store/shipping-carrier/{shippingCarrierId}', $extracted['path']);
        
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
            
            return new DeleteShippingCarrierResponseDto($responseData);
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
     * Create/Update Store Settings
     * Create or update store settings by altId and altType.
     * 
     * @param CreateStoreSettingDto $requestBody Request body data
     * @param array<string, mixed>|null $options Additional request options
     * @return CreateStoreSettingResponseDto Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function createStoreSetting(
        $requestBody,
        ?array $options = null
    ): CreateStoreSettingResponseDto {
        if ($requestBody !== null && is_object($requestBody) && method_exists($requestBody, 'toArray')) {
            $requestBody = $requestBody->toArray();
        }
        $paramDefs = [];
        $extracted = RequestUtils::extractParams([], $paramDefs);
        $requirements = ["Location-Access"];

        $url = RequestUtils::buildUrl('/store/store-setting', $extracted['path']);
        
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
            
            return new CreateStoreSettingResponseDto($responseData);
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
     * Get Store Settings
     * Get store settings by altId and altType.
     * 
     * @param array{
     *   altId: string // Location Id or Agency Id
     *   altType: string
     * } $params Request parameters
     * @param array<string, mixed>|null $options Additional request options
     * @return GetStoreSettingResponseDto Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function getStoreSettings(
        array $params,
        ?array $options = null
    ): GetStoreSettingResponseDto {
        $paramDefs = [['name' => 'altId', 'in' => 'query'], ['name' => 'altType', 'in' => 'query']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["Location-Access"];

        $url = RequestUtils::buildUrl('/store/store-setting', $extracted['path']);
        
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
            
            return new GetStoreSettingResponseDto($responseData);
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

