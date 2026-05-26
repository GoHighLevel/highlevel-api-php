<?php

namespace HighLevel\Services\Payments;

use HighLevel\HighLevel;
use HighLevel\GHLError;
use HighLevel\Utils\RequestUtils;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Exception\RequestException;
use HighLevel\Services\Payments\Models\CreateWhiteLabelIntegrationProviderDto;
use HighLevel\Services\Payments\Models\CreateWhitelabelIntegrationResponseDto;
use HighLevel\Services\Payments\Models\ListWhitelabelIntegrationProviderResponseDto;
use HighLevel\Services\Payments\Models\ListOrdersResponseDto;
use HighLevel\Services\Payments\Models\GetOrderResponseSchema;
use HighLevel\Services\Payments\Models\PostRecordOrderPaymentBody;
use HighLevel\Services\Payments\Models\PostRecordOrderPaymentResponse;
use HighLevel\Services\Payments\Models\CreateFulfillmentDto;
use HighLevel\Services\Payments\Models\CreateFulfillmentResponseDto;
use HighLevel\Services\Payments\Models\ListFulfillmentResponseDto;
use HighLevel\Services\Payments\Models\ListTxnsResponseDto;
use HighLevel\Services\Payments\Models\GetTxnResponseSchema;
use HighLevel\Services\Payments\Models\ListSubscriptionResponseDto;
use HighLevel\Services\Payments\Models\GetSubscriptionResponseSchema;
use HighLevel\Services\Payments\Models\ListCouponsResponseDto;
use HighLevel\Services\Payments\Models\CreateCouponParams;
use HighLevel\Services\Payments\Models\CreateCouponResponseDto;
use HighLevel\Services\Payments\Models\UpdateCouponParams;
use HighLevel\Services\Payments\Models\DeleteCouponParams;
use HighLevel\Services\Payments\Models\DeleteCouponResponseDto;
use HighLevel\Services\Payments\Models\CreateCustomProvidersDto;
use HighLevel\Services\Payments\Models\CreateCustomProvidersResponseSchema;
use HighLevel\Services\Payments\Models\DeleteCustomProvidersResponseSchema;
use HighLevel\Services\Payments\Models\GetCustomProvidersResponseSchema;
use HighLevel\Services\Payments\Models\ConnectCustomProvidersConfigDto;
use HighLevel\Services\Payments\Models\ConnectCustomProvidersResponseSchema;
use HighLevel\Services\Payments\Models\DeleteCustomProvidersConfigDto;
use HighLevel\Services\Payments\Models\DisconnectCustomProvidersResponseSchema;
use HighLevel\Services\Payments\Models\UpdateCustomProviderCapabilitiesDto;
use HighLevel\Services\Payments\Models\UpdateCustomProviderCapabilitiesResponseSchema;

/**
 * Payments Service
 * Documentation for payments API
 * 
 * @package HighLevel\Services\Payments
 */
class Payments
{
    /**
     * HighLevel client instance
     * @var HighLevel
     */
    private HighLevel $client;

    /**
     * Create a new Payments service instance
     * 
     * @param HighLevel $client HighLevel client instance
     */
    public function __construct(HighLevel $client)
    {
        $this->client = $client;
    }

    /**
     * Create White-label Integration Provider
     * The &quot;Create White-label Integration Provider&quot; API allows adding a new payment provider integration to the system which is built on top of Authorize.net or NMI. Use this endpoint to create a integration provider with the specified details. Ensure that the required information is provided in the request payload. This endpoint can be only invoked using marketplace-app token
     * 
     * @param CreateWhiteLabelIntegrationProviderDto $requestBody Request body data
     * @param array<string, mixed>|null $options Additional request options
     * @return CreateWhitelabelIntegrationResponseDto Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function createIntegrationProvider(
        CreateWhiteLabelIntegrationProviderDto $requestBody,
        ?array $options = null
    ): CreateWhitelabelIntegrationResponseDto {
        if ($requestBody !== null && is_object($requestBody) && method_exists($requestBody, 'toArray')) {
            $requestBody = $requestBody->toArray();
        }
        $paramDefs = [];
        $extracted = RequestUtils::extractParams([], $paramDefs);
        $requirements = ["Location-Access"];

        $url = RequestUtils::buildUrl('/payments/integrations/provider/whitelabel', $extracted['path']);
        
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
            
            return new CreateWhitelabelIntegrationResponseDto($responseData);
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
     * List White-label Integration Providers
     * The &quot;List White-label Integration Providers&quot; API allows to retrieve a paginated list of integration providers. Customize your results by filtering whitelabel integration providers(which are built directly on top of Authorize.net or NMI) based on name or paginate through the list using the provided query parameters. This endpoint provides a straightforward way to explore and retrieve integration provider information.
     * 
     * @param array{
     *   altId: string // location Id / company Id based on altType
     *   altType: string // Alt Type
     *   limit?: int // The maximum number of items to be included in a single page of results
     *   offset?: int // The starting index of the page, indicating the position from which the results should be retrieved.
     * } $params Request parameters
     * @param array<string, mixed>|null $options Additional request options
     * @return ListWhitelabelIntegrationProviderResponseDto Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function listIntegrationProviders(
        array $params,
        ?array $options = null
    ): ListWhitelabelIntegrationProviderResponseDto {
        $paramDefs = [['name' => 'altId', 'in' => 'query'], ['name' => 'altType', 'in' => 'query'], ['name' => 'limit', 'in' => 'query'], ['name' => 'offset', 'in' => 'query']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["Location-Access"];

        $url = RequestUtils::buildUrl('/payments/integrations/provider/whitelabel', $extracted['path']);
        
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
            
            return new ListWhitelabelIntegrationProviderResponseDto($responseData);
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
     * List Orders
     * The &quot;List Orders&quot; API allows to retrieve a paginated list of orders. Customize your results by filtering orders based on name, alt type, order status, payment mode, date range, type of source, contact, funnel products or paginate through the list using the provided query parameters. This endpoint provides a straightforward way to explore and retrieve order information.
     * 
     * @param array{
     *   locationId?: string // LocationId is the id of the sub-account.
     *   altId: string // AltId is the unique identifier e.g: location id.
     *   status?: string // Order status.
     *   paymentStatus?: string // Payment Status of the Order
     *   paymentMode?: string // Mode of payment.
     *   startAt?: string // Starting interval of orders.
     *   endAt?: string // Closing interval of orders.
     *   search?: string // The name of the order for searching.
     *   contactId?: string // Contact id for filtering of orders.
     *   funnelProductIds?: string // Funnel product ids separated by comma.
     *   sourceId?: string // Source id
     *   limit?: int // The maximum number of items to be included in a single page of results
     *   offset?: int // The starting index of the page, indicating the position from which the results should be retrieved.
     * } $params Request parameters
     * @param array<string, mixed>|null $options Additional request options
     * @return ListOrdersResponseDto Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function listOrders(
        array $params,
        ?array $options = null
    ): ListOrdersResponseDto {
        $paramDefs = [['name' => 'locationId', 'in' => 'query'], ['name' => 'altId', 'in' => 'query'], ['name' => 'status', 'in' => 'query'], ['name' => 'paymentStatus', 'in' => 'query'], ['name' => 'paymentMode', 'in' => 'query'], ['name' => 'startAt', 'in' => 'query'], ['name' => 'endAt', 'in' => 'query'], ['name' => 'search', 'in' => 'query'], ['name' => 'contactId', 'in' => 'query'], ['name' => 'funnelProductIds', 'in' => 'query'], ['name' => 'sourceId', 'in' => 'query'], ['name' => 'limit', 'in' => 'query'], ['name' => 'offset', 'in' => 'query']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["Location-Access"];

        $url = RequestUtils::buildUrl('/payments/orders', $extracted['path']);
        
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
            
            return new ListOrdersResponseDto($responseData);
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
     * Get Order by ID
     * The &quot;Get Order by ID&quot; API allows to retrieve information for a specific order using its unique identifier. Use this endpoint to fetch details for a single order based on the provided order ID.
     * 
     * @param array{
     *   orderId: string // ID of the order that needs to be returned
     *   locationId?: string // LocationId is the id of the sub-account.
     *   altId: string // AltId is the unique identifier e.g: location id.
     * } $params Request parameters
     * @param array<string, mixed>|null $options Additional request options
     * @return GetOrderResponseSchema Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function getOrderById(
        array $params,
        ?array $options = null
    ): GetOrderResponseSchema {
        $paramDefs = [['name' => 'orderId', 'in' => 'path'], ['name' => 'locationId', 'in' => 'query'], ['name' => 'altId', 'in' => 'query']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["Location-Access"];

        $url = RequestUtils::buildUrl('/payments/orders/{orderId}', $extracted['path']);
        
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
            
            return new GetOrderResponseSchema($responseData);
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
     * Record Order Payment
     * The &quot;Record Order Payment&quot; API allows to record a payment for an order. Use this endpoint to record payment for an order and update the order status to &quot;Paid&quot;.
     * 
     * @param array{
     *   orderId: string // Order ID
     * } $params Request parameters
     * @param PostRecordOrderPaymentBody $requestBody Request body data
     * @param array<string, mixed>|null $options Additional request options
     * @return PostRecordOrderPaymentResponse Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function recordOrderPayment(
        array $params,
        PostRecordOrderPaymentBody $requestBody,
        ?array $options = null
    ): PostRecordOrderPaymentResponse {
        if ($requestBody !== null && is_object($requestBody) && method_exists($requestBody, 'toArray')) {
            $requestBody = $requestBody->toArray();
        }
        $paramDefs = [['name' => 'orderId', 'in' => 'path']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["Location-Access"];

        $url = RequestUtils::buildUrl('/payments/orders/{orderId}/record-payment', $extracted['path']);
        
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
            
            return new PostRecordOrderPaymentResponse($responseData);
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
     * Create order fulfillment
     * The &quot;Order Fulfillment&quot; API facilitates the process of fulfilling an order.
     * 
     * @param array{
     *   orderId: string // ID of the order that needs to be returned
     * } $params Request parameters
     * @param CreateFulfillmentDto $requestBody Request body data
     * @param array<string, mixed>|null $options Additional request options
     * @return CreateFulfillmentResponseDto Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function createOrderFulfillment(
        array $params,
        CreateFulfillmentDto $requestBody,
        ?array $options = null
    ): CreateFulfillmentResponseDto {
        if ($requestBody !== null && is_object($requestBody) && method_exists($requestBody, 'toArray')) {
            $requestBody = $requestBody->toArray();
        }
        $paramDefs = [['name' => 'orderId', 'in' => 'path']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["Location-Access"];

        $url = RequestUtils::buildUrl('/payments/orders/{orderId}/fulfillments', $extracted['path']);
        
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
            
            return new CreateFulfillmentResponseDto($responseData);
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
     * List fulfillment
     * List all fulfillment history of an order
     * 
     * @param array{
     *   altId: string // Location Id or Agency Id
     *   altType: string
     *   orderId: string // ID of the order that needs to be returned
     * } $params Request parameters
     * @param array<string, mixed>|null $options Additional request options
     * @return ListFulfillmentResponseDto Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function listOrderFulfillment(
        array $params,
        ?array $options = null
    ): ListFulfillmentResponseDto {
        $paramDefs = [['name' => 'altId', 'in' => 'query'], ['name' => 'altType', 'in' => 'query'], ['name' => 'orderId', 'in' => 'path']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["Location-Access"];

        $url = RequestUtils::buildUrl('/payments/orders/{orderId}/fulfillments', $extracted['path']);
        
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
            
            return new ListFulfillmentResponseDto($responseData);
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
     * List Order Notes
     * List all notes of an order
     * 
     * @param array{
     *   altId: string // Location Id or Agency Id
     *   altType: string
     *   orderId: string // ID of the order that needs to be returned
     * } $params Request parameters
     * @param array<string, mixed>|null $options Additional request options
     * @return mixed Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function listOrderNotes(
        array $params,
        ?array $options = null
    ): mixed {
        $paramDefs = [['name' => 'altId', 'in' => 'query'], ['name' => 'altType', 'in' => 'query'], ['name' => 'orderId', 'in' => 'path']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["Location-Access"];

        $url = RequestUtils::buildUrl('/payments/orders/{orderId}/notes', $extracted['path']);
        
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
     * List Transactions
     * The &quot;List Transactions&quot; API allows to retrieve a paginated list of transactions. Customize your results by filtering transactions based on name, alt type, transaction status, payment mode, date range, type of source, contact, subscription id, entity id or paginate through the list using the provided query parameters. This endpoint provides a straightforward way to explore and retrieve transaction information.
     * 
     * @param array{
     *   locationId?: string // LocationId is the id of the sub-account.
     *   altId: string // AltId is the unique identifier e.g: location id.
     *   altType: string // AltType is the type of identifier.
     *   paymentMode?: string // Mode of payment.
     *   startAt?: string // Starting interval of transactions.
     *   endAt?: string // Closing interval of transactions.
     *   entitySourceType?: string // Source of the transactions.
     *   entitySourceSubType?: string // Source sub-type of the transactions.
     *   search?: string // The name of the transaction for searching.
     *   subscriptionId?: string // Subscription id for filtering of transactions.
     *   entityId?: string // Entity id for filtering of transactions.
     *   contactId?: string // Contact id for filtering of transactions.
     *   limit?: int // The maximum number of items to be included in a single page of results
     *   offset?: int // The starting index of the page, indicating the position from which the results should be retrieved.
     * } $params Request parameters
     * @param array<string, mixed>|null $options Additional request options
     * @return ListTxnsResponseDto Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function listTransactions(
        array $params,
        ?array $options = null
    ): ListTxnsResponseDto {
        $paramDefs = [['name' => 'locationId', 'in' => 'query'], ['name' => 'altId', 'in' => 'query'], ['name' => 'altType', 'in' => 'query'], ['name' => 'paymentMode', 'in' => 'query'], ['name' => 'startAt', 'in' => 'query'], ['name' => 'endAt', 'in' => 'query'], ['name' => 'entitySourceType', 'in' => 'query'], ['name' => 'entitySourceSubType', 'in' => 'query'], ['name' => 'search', 'in' => 'query'], ['name' => 'subscriptionId', 'in' => 'query'], ['name' => 'entityId', 'in' => 'query'], ['name' => 'contactId', 'in' => 'query'], ['name' => 'limit', 'in' => 'query'], ['name' => 'offset', 'in' => 'query']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["Location-Access"];

        $url = RequestUtils::buildUrl('/payments/transactions', $extracted['path']);
        
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
            
            return new ListTxnsResponseDto($responseData);
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
     * Get Transaction by ID
     * The &quot;Get Transaction by ID&quot; API allows to retrieve information for a specific transaction using its unique identifier. Use this endpoint to fetch details for a single transaction based on the provided transaction ID.
     * 
     * @param array{
     *   transactionId: string // ID of the transaction that needs to be returned
     *   locationId?: string // LocationId is the id of the sub-account.
     *   altId: string // AltId is the unique identifier e.g: location id.
     *   altType: string // AltType is the type of identifier.
     * } $params Request parameters
     * @param array<string, mixed>|null $options Additional request options
     * @return GetTxnResponseSchema Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function getTransactionById(
        array $params,
        ?array $options = null
    ): GetTxnResponseSchema {
        $paramDefs = [['name' => 'transactionId', 'in' => 'path'], ['name' => 'locationId', 'in' => 'query'], ['name' => 'altId', 'in' => 'query'], ['name' => 'altType', 'in' => 'query']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["Location-Access"];

        $url = RequestUtils::buildUrl('/payments/transactions/{transactionId}', $extracted['path']);
        
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
            
            return new GetTxnResponseSchema($responseData);
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
     * List Subscriptions
     * The &quot;List Subscriptions&quot; API allows to retrieve a paginated list of subscriptions. Customize your results by filtering subscriptions based on name, alt type, subscription status, payment mode, date range, type of source, contact, subscription id, entity id, contact or paginate through the list using the provided query parameters. This endpoint provides a straightforward way to explore and retrieve subscription information.
     * 
     * @param array{
     *   altId: string // AltId is the unique identifier e.g: location id.
     *   altType: string // AltType is the type of identifier.
     *   entityId?: string // Entity id for filtering of subscriptions.
     *   paymentMode?: string // Mode of payment.
     *   startAt?: string // Starting interval of subscriptions.
     *   endAt?: string // Closing interval of subscriptions.
     *   entitySourceType?: string // Source of the subscriptions.
     *   search?: string // The name of the subscription for searching.
     *   contactId?: string // Contact ID for the subscription
     *   id?: string // Subscription id for filtering of subscriptions.
     *   limit?: int // The maximum number of items to be included in a single page of results
     *   offset?: int // The starting index of the page, indicating the position from which the results should be retrieved.
     *   getPaymentsCollectedCount?: bool // Get the total payments collected for the subscription.
     * } $params Request parameters
     * @param array<string, mixed>|null $options Additional request options
     * @return ListSubscriptionResponseDto Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function listSubscriptions(
        array $params,
        ?array $options = null
    ): ListSubscriptionResponseDto {
        $paramDefs = [['name' => 'altId', 'in' => 'query'], ['name' => 'altType', 'in' => 'query'], ['name' => 'entityId', 'in' => 'query'], ['name' => 'paymentMode', 'in' => 'query'], ['name' => 'startAt', 'in' => 'query'], ['name' => 'endAt', 'in' => 'query'], ['name' => 'entitySourceType', 'in' => 'query'], ['name' => 'search', 'in' => 'query'], ['name' => 'contactId', 'in' => 'query'], ['name' => 'id', 'in' => 'query'], ['name' => 'limit', 'in' => 'query'], ['name' => 'offset', 'in' => 'query'], ['name' => 'getPaymentsCollectedCount', 'in' => 'query']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["Location-Access"];

        $url = RequestUtils::buildUrl('/payments/subscriptions', $extracted['path']);
        
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
            
            return new ListSubscriptionResponseDto($responseData);
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
     * Get Subscription by ID
     * The &quot;Get Subscription by ID&quot; API allows to retrieve information for a specific subscription using its unique identifier. Use this endpoint to fetch details for a single subscription based on the provided subscription ID.
     * 
     * @param array{
     *   subscriptionId: string // ID of the subscription that needs to be returned
     *   altId: string // AltId is the unique identifier e.g: location id.
     *   altType: string // AltType is the type of identifier.
     * } $params Request parameters
     * @param array<string, mixed>|null $options Additional request options
     * @return GetSubscriptionResponseSchema Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function getSubscriptionById(
        array $params,
        ?array $options = null
    ): GetSubscriptionResponseSchema {
        $paramDefs = [['name' => 'subscriptionId', 'in' => 'path'], ['name' => 'altId', 'in' => 'query'], ['name' => 'altType', 'in' => 'query']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["Location-Access"];

        $url = RequestUtils::buildUrl('/payments/subscriptions/{subscriptionId}', $extracted['path']);
        
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
            
            return new GetSubscriptionResponseSchema($responseData);
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
     * List Coupons
     * The &quot;List Coupons&quot; API allows you to retrieve a list of all coupons available in your location. Use this endpoint to view all promotional offers and special discounts for your customers.
     * 
     * @param array{
     *   altId: string // Location Id
     *   altType: string // Alt Type
     *   limit?: int // Maximum number of coupons to return
     *   offset?: int // Number of coupons to skip for pagination
     *   status?: string // Filter coupons by status
     *   search?: string // Search term to filter coupons by name or code
     * } $params Request parameters
     * @param array<string, mixed>|null $options Additional request options
     * @return ListCouponsResponseDto Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function listCoupons(
        array $params,
        ?array $options = null
    ): ListCouponsResponseDto {
        $paramDefs = [['name' => 'altId', 'in' => 'query'], ['name' => 'altType', 'in' => 'query'], ['name' => 'limit', 'in' => 'query'], ['name' => 'offset', 'in' => 'query'], ['name' => 'status', 'in' => 'query'], ['name' => 'search', 'in' => 'query']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["Location-Access"];

        $url = RequestUtils::buildUrl('/payments/coupon/list', $extracted['path']);
        
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
            
            return new ListCouponsResponseDto($responseData);
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
     * Create Coupon
     * The &quot;Create Coupon&quot; API allows you to create a new promotional coupon with customizable parameters such as discount amount, validity period, usage limits, and applicable products. Use this endpoint to set up promotional offers and special discounts for your customers.
     * 
     * @param CreateCouponParams $requestBody Request body data
     * @param array<string, mixed>|null $options Additional request options
     * @return CreateCouponResponseDto Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function createCoupon(
        CreateCouponParams $requestBody,
        ?array $options = null
    ): CreateCouponResponseDto {
        if ($requestBody !== null && is_object($requestBody) && method_exists($requestBody, 'toArray')) {
            $requestBody = $requestBody->toArray();
        }
        $paramDefs = [];
        $extracted = RequestUtils::extractParams([], $paramDefs);
        $requirements = ["Location-Access"];

        $url = RequestUtils::buildUrl('/payments/coupon', $extracted['path']);
        
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
            
            return new CreateCouponResponseDto($responseData);
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
     * Update Coupon
     * The &quot;Update Coupon&quot; API enables you to modify existing coupon details such as discount values, validity periods, usage limits, and other promotional parameters. Use this endpoint to adjust or extend promotional offers for your customers.
     * 
     * @param UpdateCouponParams $requestBody Request body data
     * @param array<string, mixed>|null $options Additional request options
     * @return CreateCouponResponseDto Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function updateCoupon(
        UpdateCouponParams $requestBody,
        ?array $options = null
    ): CreateCouponResponseDto {
        if ($requestBody !== null && is_object($requestBody) && method_exists($requestBody, 'toArray')) {
            $requestBody = $requestBody->toArray();
        }
        $paramDefs = [];
        $extracted = RequestUtils::extractParams([], $paramDefs);
        $requirements = ["Location-Access"];

        $url = RequestUtils::buildUrl('/payments/coupon', $extracted['path']);
        
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
            
            return new CreateCouponResponseDto($responseData);
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
     * Delete Coupon
     * The &quot;Delete Coupon&quot; API allows you to permanently remove a coupon from your system using its unique identifier. Use this endpoint to discontinue promotional offers or clean up unused coupons. Note that this action cannot be undone.
     * 
     * @param DeleteCouponParams $requestBody Request body data
     * @param array<string, mixed>|null $options Additional request options
     * @return DeleteCouponResponseDto Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function deleteCoupon(
        DeleteCouponParams $requestBody,
        ?array $options = null
    ): DeleteCouponResponseDto {
        if ($requestBody !== null && is_object($requestBody) && method_exists($requestBody, 'toArray')) {
            $requestBody = $requestBody->toArray();
        }
        $paramDefs = [];
        $extracted = RequestUtils::extractParams([], $paramDefs);
        $requirements = ["Location-Access"];

        $url = RequestUtils::buildUrl('/payments/coupon', $extracted['path']);
        
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
                'DELETE',
                $url,
                $requestOptions
            );

            $body = (string) $response->getBody();
            $responseData = json_decode($body, true);
            
            return new DeleteCouponResponseDto($responseData);
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
     * Fetch Coupon
     * The &quot;Get Coupon Details&quot; API enables you to retrieve comprehensive information about a specific coupon using either its unique identifier or promotional code. Use this endpoint to view coupon parameters, usage statistics, validity periods, and other promotional details.
     * 
     * @param array{
     *   altId: string // Location Id
     *   altType: string // Alt Type
     *   id: string // Coupon id
     *   code: string // Coupon code
     * } $params Request parameters
     * @param array<string, mixed>|null $options Additional request options
     * @return CreateCouponResponseDto Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function getCoupon(
        array $params,
        ?array $options = null
    ): CreateCouponResponseDto {
        $paramDefs = [['name' => 'altId', 'in' => 'query'], ['name' => 'altType', 'in' => 'query'], ['name' => 'id', 'in' => 'query'], ['name' => 'code', 'in' => 'query']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["Location-Access"];

        $url = RequestUtils::buildUrl('/payments/coupon', $extracted['path']);
        
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
            
            return new CreateCouponResponseDto($responseData);
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
     * Create new integration
     * API to create a new association for an app and location
     * 
     * @param array{
     *   locationId: string // Location id
     * } $params Request parameters
     * @param CreateCustomProvidersDto $requestBody Request body data
     * @param array<string, mixed>|null $options Additional request options
     * @return CreateCustomProvidersResponseSchema Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function createIntegration(
        array $params,
        CreateCustomProvidersDto $requestBody,
        ?array $options = null
    ): CreateCustomProvidersResponseSchema {
        if ($requestBody !== null && is_object($requestBody) && method_exists($requestBody, 'toArray')) {
            $requestBody = $requestBody->toArray();
        }
        $paramDefs = [['name' => 'locationId', 'in' => 'query']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["Location-Access"];

        $url = RequestUtils::buildUrl('/payments/custom-provider/provider', $extracted['path']);
        
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
            
            return new CreateCustomProvidersResponseSchema($responseData);
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
     * Deleting an existing integration
     * API to delete an association for an app and location
     * 
     * @param array{
     *   locationId: string // Location id
     * } $params Request parameters
     * @param array<string, mixed>|null $options Additional request options
     * @return DeleteCustomProvidersResponseSchema Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function deleteIntegration(
        array $params,
        ?array $options = null
    ): DeleteCustomProvidersResponseSchema {
        $paramDefs = [['name' => 'locationId', 'in' => 'query']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["Location-Access"];

        $url = RequestUtils::buildUrl('/payments/custom-provider/provider', $extracted['path']);
        
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
            
            return new DeleteCustomProvidersResponseSchema($responseData);
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
     * Fetch given provider config
     * API for fetching an existing payment config for given location
     * 
     * @param array{
     *   locationId: string // Location id
     * } $params Request parameters
     * @param array<string, mixed>|null $options Additional request options
     * @return GetCustomProvidersResponseSchema Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function fetchConfig(
        array $params,
        ?array $options = null
    ): GetCustomProvidersResponseSchema {
        $paramDefs = [['name' => 'locationId', 'in' => 'query']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["Location-Access"];

        $url = RequestUtils::buildUrl('/payments/custom-provider/connect', $extracted['path']);
        
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
            
            return new GetCustomProvidersResponseSchema($responseData);
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
     * Create new provider config
     * API to create a new payment config for given location
     * 
     * @param array{
     *   locationId: string // Location id
     * } $params Request parameters
     * @param ConnectCustomProvidersConfigDto $requestBody Request body data
     * @param array<string, mixed>|null $options Additional request options
     * @return ConnectCustomProvidersResponseSchema Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function createConfig(
        array $params,
        ConnectCustomProvidersConfigDto $requestBody,
        ?array $options = null
    ): ConnectCustomProvidersResponseSchema {
        if ($requestBody !== null && is_object($requestBody) && method_exists($requestBody, 'toArray')) {
            $requestBody = $requestBody->toArray();
        }
        $paramDefs = [['name' => 'locationId', 'in' => 'query']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["Location-Access"];

        $url = RequestUtils::buildUrl('/payments/custom-provider/connect', $extracted['path']);
        
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
            
            return new ConnectCustomProvidersResponseSchema($responseData);
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
     * Disconnect existing provider config
     * API to disconnect an existing payment config for given location
     * 
     * @param array{
     *   locationId: string // Location id
     * } $params Request parameters
     * @param DeleteCustomProvidersConfigDto $requestBody Request body data
     * @param array<string, mixed>|null $options Additional request options
     * @return DisconnectCustomProvidersResponseSchema Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function disconnectConfig(
        array $params,
        DeleteCustomProvidersConfigDto $requestBody,
        ?array $options = null
    ): DisconnectCustomProvidersResponseSchema {
        if ($requestBody !== null && is_object($requestBody) && method_exists($requestBody, 'toArray')) {
            $requestBody = $requestBody->toArray();
        }
        $paramDefs = [['name' => 'locationId', 'in' => 'query']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["Location-Access"];

        $url = RequestUtils::buildUrl('/payments/custom-provider/disconnect', $extracted['path']);
        
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
            
            return new DisconnectCustomProvidersResponseSchema($responseData);
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
     * Custom-provider marketplace app update capabilities
     * Toggle capabilities for the marketplace app tied to the OAuth client
     * 
     * @param UpdateCustomProviderCapabilitiesDto $requestBody Request body data
     * @param array<string, mixed>|null $options Additional request options
     * @return UpdateCustomProviderCapabilitiesResponseSchema Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function customProviderMarketplaceAppUpdateCapabilities(
        UpdateCustomProviderCapabilitiesDto $requestBody,
        ?array $options = null
    ): UpdateCustomProviderCapabilitiesResponseSchema {
        if ($requestBody !== null && is_object($requestBody) && method_exists($requestBody, 'toArray')) {
            $requestBody = $requestBody->toArray();
        }
        $paramDefs = [];
        $extracted = RequestUtils::extractParams([], $paramDefs);
        $requirements = ["Location-Access"];

        $url = RequestUtils::buildUrl('/payments/custom-provider/capabilities', $extracted['path']);
        
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
            
            return new UpdateCustomProviderCapabilitiesResponseSchema($responseData);
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

