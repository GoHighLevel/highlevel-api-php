<?php

namespace HighLevel\Services\Products;

use HighLevel\HighLevel;
use HighLevel\GHLError;
use HighLevel\Utils\RequestUtils;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Exception\RequestException;
use HighLevel\Services\Products\Models\BulkUpdateDto;
use HighLevel\Services\Products\Models\BulkUpdateResponseDto;
use HighLevel\Services\Products\Models\BulkEditRequestDto;
use HighLevel\Services\Products\Models\BulkEditResponseDto;
use HighLevel\Services\Products\Models\CreatePriceDto;
use HighLevel\Services\Products\Models\CreatePriceResponseDto;
use HighLevel\Services\Products\Models\ListPricesResponseDto;
use HighLevel\Services\Products\Models\GetInventoryResponseDto;
use HighLevel\Services\Products\Models\UpdateInventoryDto;
use HighLevel\Services\Products\Models\UpdateInventoryResponseDto;
use HighLevel\Services\Products\Models\GetPriceResponseDto;
use HighLevel\Services\Products\Models\UpdatePriceDto;
use HighLevel\Services\Products\Models\UpdatePriceResponseDto;
use HighLevel\Services\Products\Models\DeletePriceResponseDto;
use HighLevel\Services\Products\Models\GetProductStatsResponseDto;
use HighLevel\Services\Products\Models\UpdateProductStoreDto;
use HighLevel\Services\Products\Models\UpdateProductStoreResponseDto;
use HighLevel\Services\Products\Models\UpdateDisplayPriorityBodyDto;
use HighLevel\Services\Products\Models\ListCollectionResponseDto;
use HighLevel\Services\Products\Models\CreateProductCollectionsDto;
use HighLevel\Services\Products\Models\CreateCollectionResponseDto;
use HighLevel\Services\Products\Models\DefaultCollectionResponseDto;
use HighLevel\Services\Products\Models\UpdateProductCollectionsDto;
use HighLevel\Services\Products\Models\UpdateProductCollectionResponseDto;
use HighLevel\Services\Products\Models\DeleteProductCollectionResponseDto;
use HighLevel\Services\Products\Models\ListProductReviewsResponseDto;
use HighLevel\Services\Products\Models\CountReviewsByStatusResponseDto;
use HighLevel\Services\Products\Models\UpdateProductReviewDto;
use HighLevel\Services\Products\Models\UpdateProductReviewsResponseDto;
use HighLevel\Services\Products\Models\DeleteProductReviewResponseDto;
use HighLevel\Services\Products\Models\UpdateProductReviewsDto;
use HighLevel\Services\Products\Models\GetProductResponseDto;
use HighLevel\Services\Products\Models\DeleteProductResponseDto;
use HighLevel\Services\Products\Models\UpdateProductDto;
use HighLevel\Services\Products\Models\UpdateProductResponseDto;
use HighLevel\Services\Products\Models\CreateProductDto;
use HighLevel\Services\Products\Models\CreateProductResponseDto;
use HighLevel\Services\Products\Models\ListProductsResponseDto;

/**
 * Products Service
 * Documentation for products API
 * 
 * @package HighLevel\Services\Products
 */
class Products
{
    /**
     * HighLevel client instance
     * @var HighLevel
     */
    private HighLevel $client;

    /**
     * Create a new Products service instance
     * 
     * @param HighLevel $client HighLevel client instance
     */
    public function __construct(HighLevel $client)
    {
        $this->client = $client;
    }

    /**
     * Bulk Update Products
     * API to bulk update products (price, availability, collections, delete)
     * 
     * @param BulkUpdateDto $requestBody Request body data
     * @param array<string, mixed>|null $options Additional request options
     * @return BulkUpdateResponseDto Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function bulkUpdate(
        $requestBody,
        ?array $options = null
    ): BulkUpdateResponseDto {
        if ($requestBody !== null && is_object($requestBody) && method_exists($requestBody, 'toArray')) {
            $requestBody = $requestBody->toArray();
        }
        $paramDefs = [];
        $extracted = RequestUtils::extractParams([], $paramDefs);
        $requirements = ["Location-Access"];

        $url = RequestUtils::buildUrl('/products/bulk-update', $extracted['path']);
        
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
            
            return new BulkUpdateResponseDto($responseData);
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
     * Bulk Edit Products and Prices
     * API to bulk edit products and their associated prices (max 30 entities)
     * 
     * @param BulkEditRequestDto $requestBody Request body data
     * @param array<string, mixed>|null $options Additional request options
     * @return BulkEditResponseDto Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function bulkEdit(
        $requestBody,
        ?array $options = null
    ): BulkEditResponseDto {
        if ($requestBody !== null && is_object($requestBody) && method_exists($requestBody, 'toArray')) {
            $requestBody = $requestBody->toArray();
        }
        $paramDefs = [];
        $extracted = RequestUtils::extractParams([], $paramDefs);
        $requirements = [];

        $url = RequestUtils::buildUrl('/products/bulk-update/edit', $extracted['path']);
        
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
            
            return new BulkEditResponseDto($responseData);
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
     * Create Price for a Product
     * The &quot;Create Price for a Product&quot; API allows adding a new price associated with a specific product to the system. Use this endpoint to create a price with the specified details for a particular product. Ensure that the required information is provided in the request payload.
     * 
     * @param array{
     *   productId: string // ID of the product that needs to be used
     * } $params Request parameters
     * @param CreatePriceDto $requestBody Request body data
     * @param array<string, mixed>|null $options Additional request options
     * @return CreatePriceResponseDto Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function createPriceForProduct(
        array $params,
        $requestBody,
        ?array $options = null
    ): CreatePriceResponseDto {
        if ($requestBody !== null && is_object($requestBody) && method_exists($requestBody, 'toArray')) {
            $requestBody = $requestBody->toArray();
        }
        $paramDefs = [['name' => 'productId', 'in' => 'path']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["Location-Access","Agency-Access"];

        $url = RequestUtils::buildUrl('/products/{productId}/price', $extracted['path']);
        
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
            
            return new CreatePriceResponseDto($responseData);
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
     * List Prices for a Product
     * The &quot;List Prices for a Product&quot; API allows retrieving a paginated list of prices associated with a specific product. Customize your results by filtering prices or paginate through the list using the provided query parameters.
     * 
     * @param array{
     *   productId: string // ID of the product that needs to be used
     *   limit?: int // The maximum number of items to be included in a single page of results
     *   offset?: int // The starting index of the page, indicating the position from which the results should be retrieved.
     *   locationId: string // The unique identifier for the location.
     *   ids?: string // To filter the response only with the given price ids, Please provide with comma separated
     * } $params Request parameters
     * @param array<string, mixed>|null $options Additional request options
     * @return ListPricesResponseDto Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function listPricesForProduct(
        array $params,
        ?array $options = null
    ): ListPricesResponseDto {
        $paramDefs = [['name' => 'productId', 'in' => 'path'], ['name' => 'limit', 'in' => 'query'], ['name' => 'offset', 'in' => 'query'], ['name' => 'locationId', 'in' => 'query'], ['name' => 'ids', 'in' => 'query']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["Location-Access","Agency-Access"];

        $url = RequestUtils::buildUrl('/products/{productId}/price', $extracted['path']);
        
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
            
            return new ListPricesResponseDto($responseData);
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
     * List Inventory
     * The &quot;List Inventory API allows the user to retrieve a paginated list of inventory items. Use this endpoint to fetch details for multiple items in the inventory based on the provided query parameters.
     * 
     * @param array{
     *   limit?: int // The maximum number of items to be included in a single page of results
     *   offset?: int // The starting index of the page, indicating the position from which the results should be retrieved.
     *   altId: string // Location Id or Agency Id
     *   altType: string
     *   search?: string // Search string for Variant Search
     * } $params Request parameters
     * @param array<string, mixed>|null $options Additional request options
     * @return GetInventoryResponseDto Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function getListInventory(
        array $params,
        ?array $options = null
    ): GetInventoryResponseDto {
        $paramDefs = [['name' => 'limit', 'in' => 'query'], ['name' => 'offset', 'in' => 'query'], ['name' => 'altId', 'in' => 'query'], ['name' => 'altType', 'in' => 'query'], ['name' => 'search', 'in' => 'query']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["Location-Access","Agency-Access"];

        $url = RequestUtils::buildUrl('/products/inventory', $extracted['path']);
        
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
            
            return new GetInventoryResponseDto($responseData);
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
     * Update Inventory
     * The Update Inventory API allows the user to bulk update the inventory for multiple items. Use this endpoint to update the available quantity and out-of-stock purchase settings for multiple items in the inventory.
     * 
     * @param UpdateInventoryDto $requestBody Request body data
     * @param array<string, mixed>|null $options Additional request options
     * @return UpdateInventoryResponseDto Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function updateInventory(
        $requestBody,
        ?array $options = null
    ): UpdateInventoryResponseDto {
        if ($requestBody !== null && is_object($requestBody) && method_exists($requestBody, 'toArray')) {
            $requestBody = $requestBody->toArray();
        }
        $paramDefs = [];
        $extracted = RequestUtils::extractParams([], $paramDefs);
        $requirements = ["Location-Access","Agency-Access"];

        $url = RequestUtils::buildUrl('/products/inventory', $extracted['path']);
        
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
            
            return new UpdateInventoryResponseDto($responseData);
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
     * Get Price by ID for a Product
     * The &quot;Get Price by ID for a Product&quot; API allows retrieving information for a specific price associated with a particular product using its unique identifier. Use this endpoint to fetch details for a single price based on the provided price ID and product ID.
     * 
     * @param array{
     *   productId: string // ID of the product that needs to be used
     *   priceId: string // ID of the price that needs to be returned
     *   locationId: string // location Id
     * } $params Request parameters
     * @param array<string, mixed>|null $options Additional request options
     * @return GetPriceResponseDto Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function getPriceByIdForProduct(
        array $params,
        ?array $options = null
    ): GetPriceResponseDto {
        $paramDefs = [['name' => 'productId', 'in' => 'path'], ['name' => 'priceId', 'in' => 'path'], ['name' => 'locationId', 'in' => 'query']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["Location-Access","Agency-Access"];

        $url = RequestUtils::buildUrl('/products/{productId}/price/{priceId}', $extracted['path']);
        
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
            
            return new GetPriceResponseDto($responseData);
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
     * Update Price by ID for a Product
     * The &quot;Update Price by ID for a Product&quot; API allows modifying information for a specific price associated with a particular product using its unique identifier. Use this endpoint to update details for a single price based on the provided price ID and product ID.
     * 
     * @param array{
     *   productId: string // ID of the product that needs to be used
     *   priceId: string // ID of the price that needs to be returned
     * } $params Request parameters
     * @param UpdatePriceDto $requestBody Request body data
     * @param array<string, mixed>|null $options Additional request options
     * @return UpdatePriceResponseDto Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function updatePriceByIdForProduct(
        array $params,
        $requestBody,
        ?array $options = null
    ): UpdatePriceResponseDto {
        if ($requestBody !== null && is_object($requestBody) && method_exists($requestBody, 'toArray')) {
            $requestBody = $requestBody->toArray();
        }
        $paramDefs = [['name' => 'productId', 'in' => 'path'], ['name' => 'priceId', 'in' => 'path']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["Location-Access","Agency-Access"];

        $url = RequestUtils::buildUrl('/products/{productId}/price/{priceId}', $extracted['path']);
        
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
            
            return new UpdatePriceResponseDto($responseData);
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
     * Delete Price by ID for a Product
     * The &quot;Delete Price by ID for a Product&quot; API allows deleting a specific price associated with a particular product using its unique identifier. Use this endpoint to remove a price from the system.
     * 
     * @param array{
     *   productId: string // ID of the product that needs to be used
     *   priceId: string // ID of the price that needs to be returned
     *   locationId: string // location Id
     * } $params Request parameters
     * @param array<string, mixed>|null $options Additional request options
     * @return DeletePriceResponseDto Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function deletePriceByIdForProduct(
        array $params,
        ?array $options = null
    ): DeletePriceResponseDto {
        $paramDefs = [['name' => 'productId', 'in' => 'path'], ['name' => 'priceId', 'in' => 'path'], ['name' => 'locationId', 'in' => 'query']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["Location-Access","Agency-Access"];

        $url = RequestUtils::buildUrl('/products/{productId}/price/{priceId}', $extracted['path']);
        
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
            
            return new DeletePriceResponseDto($responseData);
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
     * Fetch Product Store Stats
     * API to fetch the total number of products, included in the store, and excluded from the store and other stats
     * 
     * @param array{
     *   storeId: string // Products related to the store
     *   altId: string // Location Id or Agency Id
     *   altType: string
     *   search?: string // The name of the product for searching.
     *   collectionIds?: string // Filter by product collection Ids. Supports comma separated values
     * } $params Request parameters
     * @param array<string, mixed>|null $options Additional request options
     * @return GetProductStatsResponseDto Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function getProductStoreStats(
        array $params,
        ?array $options = null
    ): GetProductStatsResponseDto {
        $paramDefs = [['name' => 'storeId', 'in' => 'path'], ['name' => 'altId', 'in' => 'query'], ['name' => 'altType', 'in' => 'query'], ['name' => 'search', 'in' => 'query'], ['name' => 'collectionIds', 'in' => 'query']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["Location-Access"];

        $url = RequestUtils::buildUrl('/products/store/{storeId}/stats', $extracted['path']);
        
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
            
            return new GetProductStatsResponseDto($responseData);
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
     * Action to include/exclude the product in store
     * API to update the status of products in a particular store
     * 
     * @param array{
     *   storeId: string // Products related to the store
     * } $params Request parameters
     * @param UpdateProductStoreDto $requestBody Request body data
     * @param array<string, mixed>|null $options Additional request options
     * @return UpdateProductStoreResponseDto Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function updateStoreStatus(
        array $params,
        $requestBody,
        ?array $options = null
    ): UpdateProductStoreResponseDto {
        if ($requestBody !== null && is_object($requestBody) && method_exists($requestBody, 'toArray')) {
            $requestBody = $requestBody->toArray();
        }
        $paramDefs = [['name' => 'storeId', 'in' => 'path']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["Location-Access"];

        $url = RequestUtils::buildUrl('/products/store/{storeId}', $extracted['path']);
        
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
            
            return new UpdateProductStoreResponseDto($responseData);
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
     * Update product display priorities in store
     * API to set the display priority of products in a store
     * 
     * @param array{
     *   storeId: string // Products related to the store
     * } $params Request parameters
     * @param UpdateDisplayPriorityBodyDto $requestBody Request body data
     * @param array<string, mixed>|null $options Additional request options
     * @return mixed Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function updateDisplayPriority(
        array $params,
        $requestBody,
        ?array $options = null
    ) {
        if ($requestBody !== null && is_object($requestBody) && method_exists($requestBody, 'toArray')) {
            $requestBody = $requestBody->toArray();
        }
        $paramDefs = [['name' => 'storeId', 'in' => 'path']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["Location-Access"];

        $url = RequestUtils::buildUrl('/products/store/{storeId}/priority', $extracted['path']);
        
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
            
            return $responseData;
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
     * Fetch Product Collections
     * Internal API to fetch the Product Collections
     * 
     * @param array{
     *   limit?: int // The maximum number of items to be included in a single page of results
     *   offset?: int // The starting index of the page, indicating the position from which the results should be retrieved.
     *   altId: string // Location Id
     *   altType: string // The type of alt. For now it is only LOCATION
     *   collectionIds?: string // Ids of the collections separated by comma(,) for search purposes
     *   name?: string // Query to search collection based on names
     * } $params Request parameters
     * @param array<string, mixed>|null $options Additional request options
     * @return ListCollectionResponseDto Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function getProductCollection(
        array $params,
        ?array $options = null
    ): ListCollectionResponseDto {
        $paramDefs = [['name' => 'limit', 'in' => 'query'], ['name' => 'offset', 'in' => 'query'], ['name' => 'altId', 'in' => 'query'], ['name' => 'altType', 'in' => 'query'], ['name' => 'collectionIds', 'in' => 'query'], ['name' => 'name', 'in' => 'query']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["Location-Access"];

        $url = RequestUtils::buildUrl('/products/collections', $extracted['path']);
        
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
            
            return new ListCollectionResponseDto($responseData);
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
     * Create Product Collection
     * Create a new Product Collection for a specific location
     * 
     * @param CreateProductCollectionsDto $requestBody Request body data
     * @param array<string, mixed>|null $options Additional request options
     * @return CreateCollectionResponseDto Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function createProductCollection(
        $requestBody,
        ?array $options = null
    ): CreateCollectionResponseDto {
        if ($requestBody !== null && is_object($requestBody) && method_exists($requestBody, 'toArray')) {
            $requestBody = $requestBody->toArray();
        }
        $paramDefs = [];
        $extracted = RequestUtils::extractParams([], $paramDefs);
        $requirements = ["Location-Access"];

        $url = RequestUtils::buildUrl('/products/collections', $extracted['path']);
        
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
            
            return new CreateCollectionResponseDto($responseData);
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
     * Get Details about individual product collection
     * Get Details about individual product collection
     * 
     * @param array{
     *   collectionId: string // Collection Id
     *   altId: string // Location Id
     * } $params Request parameters
     * @param array<string, mixed>|null $options Additional request options
     * @return DefaultCollectionResponseDto Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function getProductCollectionId(
        array $params,
        ?array $options = null
    ): DefaultCollectionResponseDto {
        $paramDefs = [['name' => 'collectionId', 'in' => 'path'], ['name' => 'altId', 'in' => 'query']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["Location-Access"];

        $url = RequestUtils::buildUrl('/products/collections/{collectionId}', $extracted['path']);
        
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
            
            return new DefaultCollectionResponseDto($responseData);
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
     * Update Product Collection
     * Update a specific product collection with Id :collectionId
     * 
     * @param array{
     *   collectionId: string // MongoId of the collection
     * } $params Request parameters
     * @param UpdateProductCollectionsDto $requestBody Request body data
     * @param array<string, mixed>|null $options Additional request options
     * @return UpdateProductCollectionResponseDto Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function updateProductCollection(
        array $params,
        $requestBody,
        ?array $options = null
    ): UpdateProductCollectionResponseDto {
        if ($requestBody !== null && is_object($requestBody) && method_exists($requestBody, 'toArray')) {
            $requestBody = $requestBody->toArray();
        }
        $paramDefs = [['name' => 'collectionId', 'in' => 'path']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["Location-Access"];

        $url = RequestUtils::buildUrl('/products/collections/{collectionId}', $extracted['path']);
        
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
            
            return new UpdateProductCollectionResponseDto($responseData);
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
     * Delete Product Collection
     * Delete specific product collection with Id :collectionId
     * 
     * @param array{
     *   collectionId: string // MongoId of the collection
     *   altId: string // Location Id
     *   altType: string // The type of alt. For now it is only LOCATION
     * } $params Request parameters
     * @param array<string, mixed>|null $options Additional request options
     * @return DeleteProductCollectionResponseDto Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function deleteProductCollection(
        array $params,
        ?array $options = null
    ): DeleteProductCollectionResponseDto {
        $paramDefs = [['name' => 'collectionId', 'in' => 'path'], ['name' => 'altId', 'in' => 'query'], ['name' => 'altType', 'in' => 'query']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["Location-Access"];

        $url = RequestUtils::buildUrl('/products/collections/{collectionId}', $extracted['path']);
        
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
            
            return new DeleteProductCollectionResponseDto($responseData);
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
     * Fetch Product Reviews
     * API to fetch the Product Reviews
     * 
     * @param array{
     *   altId: string // Location Id or Agency Id
     *   altType: string
     *   limit?: int // The maximum number of items to be included in a single page of results
     *   offset?: int // The starting index of the page, indicating the position from which the results should be retrieved.
     *   sortField?: string // The field upon which the sort should be applied
     *   sortOrder?: string // The order of sort which should be applied for the sortField
     *   rating?: int // Key to filter the ratings 
     *   startDate?: string // The start date for filtering reviews
     *   endDate?: string // The end date for filtering reviews
     *   productId?: string // Comma-separated list of product IDs
     *   storeId?: string // Comma-separated list of store IDs
     * } $params Request parameters
     * @param array<string, mixed>|null $options Additional request options
     * @return ListProductReviewsResponseDto Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function getProductReviews(
        array $params,
        ?array $options = null
    ): ListProductReviewsResponseDto {
        $paramDefs = [['name' => 'altId', 'in' => 'query'], ['name' => 'altType', 'in' => 'query'], ['name' => 'limit', 'in' => 'query'], ['name' => 'offset', 'in' => 'query'], ['name' => 'sortField', 'in' => 'query'], ['name' => 'sortOrder', 'in' => 'query'], ['name' => 'rating', 'in' => 'query'], ['name' => 'startDate', 'in' => 'query'], ['name' => 'endDate', 'in' => 'query'], ['name' => 'productId', 'in' => 'query'], ['name' => 'storeId', 'in' => 'query']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["Location-Access"];

        $url = RequestUtils::buildUrl('/products/reviews', $extracted['path']);
        
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
            
            return new ListProductReviewsResponseDto($responseData);
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
     * Fetch Review Count as per status
     * API to fetch the Review Count as per status
     * 
     * @param array{
     *   altId: string // Location Id or Agency Id
     *   altType: string
     *   rating?: int // Key to filter the ratings 
     *   startDate?: string // The start date for filtering reviews
     *   endDate?: string // The end date for filtering reviews
     *   productId?: string // Comma-separated list of product IDs
     *   storeId?: string // Comma-separated list of store IDs
     * } $params Request parameters
     * @param array<string, mixed>|null $options Additional request options
     * @return CountReviewsByStatusResponseDto Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function getReviewsCount(
        array $params,
        ?array $options = null
    ): CountReviewsByStatusResponseDto {
        $paramDefs = [['name' => 'altId', 'in' => 'query'], ['name' => 'altType', 'in' => 'query'], ['name' => 'rating', 'in' => 'query'], ['name' => 'startDate', 'in' => 'query'], ['name' => 'endDate', 'in' => 'query'], ['name' => 'productId', 'in' => 'query'], ['name' => 'storeId', 'in' => 'query']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["Location-Access"];

        $url = RequestUtils::buildUrl('/products/reviews/count', $extracted['path']);
        
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
            
            return new CountReviewsByStatusResponseDto($responseData);
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
     * Update Product Reviews
     * Update status, reply, etc of a particular review
     * 
     * @param array{
     *   reviewId: string // Review Id
     * } $params Request parameters
     * @param UpdateProductReviewDto $requestBody Request body data
     * @param array<string, mixed>|null $options Additional request options
     * @return UpdateProductReviewsResponseDto Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function updateProductReview(
        array $params,
        $requestBody,
        ?array $options = null
    ): UpdateProductReviewsResponseDto {
        if ($requestBody !== null && is_object($requestBody) && method_exists($requestBody, 'toArray')) {
            $requestBody = $requestBody->toArray();
        }
        $paramDefs = [['name' => 'reviewId', 'in' => 'path']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["Location-Access"];

        $url = RequestUtils::buildUrl('/products/reviews/{reviewId}', $extracted['path']);
        
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
            
            return new UpdateProductReviewsResponseDto($responseData);
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
     * Delete Product Review
     * Delete specific product review
     * 
     * @param array{
     *   reviewId: string // Review Id
     *   altId: string // Location Id or Agency Id
     *   altType: string
     *   productId: string // Product Id of the product
     * } $params Request parameters
     * @param array<string, mixed>|null $options Additional request options
     * @return DeleteProductReviewResponseDto Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function deleteProductReview(
        array $params,
        ?array $options = null
    ): DeleteProductReviewResponseDto {
        $paramDefs = [['name' => 'reviewId', 'in' => 'path'], ['name' => 'altId', 'in' => 'query'], ['name' => 'altType', 'in' => 'query'], ['name' => 'productId', 'in' => 'query']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["Location-Access"];

        $url = RequestUtils::buildUrl('/products/reviews/{reviewId}', $extracted['path']);
        
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
            
            return new DeleteProductReviewResponseDto($responseData);
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
     * Update Product Reviews
     * Update one or multiple product reviews: status, reply, etc.
     * 
     * @param UpdateProductReviewsDto $requestBody Request body data
     * @param array<string, mixed>|null $options Additional request options
     * @return UpdateProductReviewsResponseDto Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function bulkUpdateProductReview(
        $requestBody,
        ?array $options = null
    ): UpdateProductReviewsResponseDto {
        if ($requestBody !== null && is_object($requestBody) && method_exists($requestBody, 'toArray')) {
            $requestBody = $requestBody->toArray();
        }
        $paramDefs = [];
        $extracted = RequestUtils::extractParams([], $paramDefs);
        $requirements = ["Location-Access"];

        $url = RequestUtils::buildUrl('/products/reviews/bulk-update', $extracted['path']);
        
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
            
            return new UpdateProductReviewsResponseDto($responseData);
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
     * Get Product by ID
     * The &quot;Get Product by ID&quot; API allows to retrieve information for a specific product using its unique identifier. Use this endpoint to fetch details for a single product based on the provided product ID.
     * 
     * @param array{
     *   productId: string // ID or the slug of the product that needs to be returned
     *   locationId: string // location Id
     *   sendWishlistStatus?: bool // Parameter which will decide whether to show the wishlisting status of products
     * } $params Request parameters
     * @param array<string, mixed>|null $options Additional request options
     * @return GetProductResponseDto Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function getProductById(
        array $params,
        ?array $options = null
    ): GetProductResponseDto {
        $paramDefs = [['name' => 'productId', 'in' => 'path'], ['name' => 'locationId', 'in' => 'query'], ['name' => 'sendWishlistStatus', 'in' => 'query']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["Location-Access","Agency-Access"];

        $url = RequestUtils::buildUrl('/products/{productId}', $extracted['path']);
        
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
            
            return new GetProductResponseDto($responseData);
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
     * Delete Product by ID
     * The &quot;Delete Product by ID&quot; API allows deleting a specific product using its unique identifier. Use this endpoint to remove a product from the system.
     * 
     * @param array{
     *   productId: string // ID or the slug of the product that needs to be returned
     *   locationId: string // location Id
     *   sendWishlistStatus?: bool // Parameter which will decide whether to show the wishlisting status of products
     * } $params Request parameters
     * @param array<string, mixed>|null $options Additional request options
     * @return DeleteProductResponseDto Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function deleteProductById(
        array $params,
        ?array $options = null
    ): DeleteProductResponseDto {
        $paramDefs = [['name' => 'productId', 'in' => 'path'], ['name' => 'locationId', 'in' => 'query'], ['name' => 'sendWishlistStatus', 'in' => 'query']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["Location-Access","Agency-Access"];

        $url = RequestUtils::buildUrl('/products/{productId}', $extracted['path']);
        
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
            
            return new DeleteProductResponseDto($responseData);
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
     * Update Product by ID
     * The &quot;Update Product by ID&quot; API allows modifying information for a specific product using its unique identifier. Use this endpoint to update details for a single product based on the provided product ID.
     * 
     * @param array{
     *   productId: string // ID or the slug of the product that needs to be returned
     * } $params Request parameters
     * @param UpdateProductDto $requestBody Request body data
     * @param array<string, mixed>|null $options Additional request options
     * @return UpdateProductResponseDto Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function updateProductById(
        array $params,
        $requestBody,
        ?array $options = null
    ): UpdateProductResponseDto {
        if ($requestBody !== null && is_object($requestBody) && method_exists($requestBody, 'toArray')) {
            $requestBody = $requestBody->toArray();
        }
        $paramDefs = [['name' => 'productId', 'in' => 'path']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["Location-Access","Agency-Access"];

        $url = RequestUtils::buildUrl('/products/{productId}', $extracted['path']);
        
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
            
            return new UpdateProductResponseDto($responseData);
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
     * Create Product
     * The &quot;Create Product&quot; API allows adding a new product to the system. Use this endpoint to create a product with the specified details. Ensure that the required information is provided in the request payload.
     * 
     * @param CreateProductDto $requestBody Request body data
     * @param array<string, mixed>|null $options Additional request options
     * @return CreateProductResponseDto Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function createProduct(
        $requestBody,
        ?array $options = null
    ): CreateProductResponseDto {
        if ($requestBody !== null && is_object($requestBody) && method_exists($requestBody, 'toArray')) {
            $requestBody = $requestBody->toArray();
        }
        $paramDefs = [];
        $extracted = RequestUtils::extractParams([], $paramDefs);
        $requirements = ["Location-Access","Agency-Access"];

        $url = RequestUtils::buildUrl('/products/', $extracted['path']);
        
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
            
            return new CreateProductResponseDto($responseData);
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
     * List Products
     * The &quot;List Products&quot; API allows to retrieve a paginated list of products. Customize your results by filtering products based on name or paginate through the list using the provided query parameters. This endpoint provides a straightforward way to explore and retrieve product information.
     * 
     * @param array{
     *   limit?: int // The maximum number of items to be included in a single page of results
     *   offset?: int // The starting index of the page, indicating the position from which the results should be retrieved.
     *   locationId: string // LocationId is the id of the sub-account
     *   search?: string // The name of the product for searching.
     *   collectionIds?: string // Filter by product category Ids. Supports comma separated values
     *   collectionSlug?: string // The slug value of the collection by which the collection would be searched
     *   expand?: array // Name of an entity whose data has to be fetched along with product. Possible entities are tax, stripe and paypal. If not mentioned, only ID will be returned in case of taxes
     *   productIds?: array // List of product ids to be fetched.
     *   storeId?: string // fetch and project products based on the storeId
     *   includedInStore?: bool // Separate products by which are included in the store and which are not
     *   availableInStore?: bool // If the product is included in the online store
     *   sortOrder?: string // The order of sort which should be applied for the date
     * } $params Request parameters
     * @param array<string, mixed>|null $options Additional request options
     * @return ListProductsResponseDto Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function listInvoices(
        array $params,
        ?array $options = null
    ): ListProductsResponseDto {
        $paramDefs = [['name' => 'limit', 'in' => 'query'], ['name' => 'offset', 'in' => 'query'], ['name' => 'locationId', 'in' => 'query'], ['name' => 'search', 'in' => 'query'], ['name' => 'collectionIds', 'in' => 'query'], ['name' => 'collectionSlug', 'in' => 'query'], ['name' => 'expand', 'in' => 'query'], ['name' => 'productIds', 'in' => 'query'], ['name' => 'storeId', 'in' => 'query'], ['name' => 'includedInStore', 'in' => 'query'], ['name' => 'availableInStore', 'in' => 'query'], ['name' => 'sortOrder', 'in' => 'query']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["Location-Access","Agency-Access"];

        $url = RequestUtils::buildUrl('/products/', $extracted['path']);
        
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
            
            return new ListProductsResponseDto($responseData);
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

