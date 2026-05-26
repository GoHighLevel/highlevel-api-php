<?php

namespace HighLevel\Services\PhoneSystem;

use HighLevel\HighLevel;
use HighLevel\GHLError;
use HighLevel\Utils\RequestUtils;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Exception\RequestException;
use HighLevel\Services\PhoneSystem\Models\AvailableNumbersResponseDto;
use HighLevel\Services\PhoneSystem\Models\PurchasePhoneNumberBodyDto;
use HighLevel\Services\PhoneSystem\Models\TwilioAccountResponseDto;

/**
 * PhoneSystem Service
 * Documentation for Phone System API
 * 
 * @package HighLevel\Services\PhoneSystem
 */
class PhoneSystem
{
    /**
     * HighLevel client instance
     * @var HighLevel
     */
    private HighLevel $client;

    /**
     * Create a new PhoneSystem service instance
     * 
     * @param HighLevel $client HighLevel client instance
     */
    public function __construct(HighLevel $client)
    {
        $this->client = $client;
    }

    /**
     * List Number Pools
     * Get list of number pools
     * 
     * @param array{
     *   locationId?: string // Location ID to filter pools
     * } $params Request parameters
     * @param array<string, mixed>|null $options Additional request options
     * @return mixed Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function getNumberPoolList(
        array $params,
        ?array $options = null
    ): mixed {
        $paramDefs = [['name' => 'locationId', 'in' => 'query'], ];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["Location-Access"];

        $url = RequestUtils::buildUrl('/phone-system/number-pools', $extracted['path']);
        
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
     * List available phone numbers
     * Search for available phone numbers to purchase for a specific location. Supports filtering by number pattern, type, and capabilities.
     * 
     * @param array{
     *   locationId: string // The unique identifier of the location
     *   countryCode: string // ISO 3166-1 alpha-2 country code for which to search available numbers
     *   numberTypes?: string // Comma-separated list of phone number types to search for (e.g. local, tollFree, mobile)
     *   firstPart?: string // Filter numbers that begin with this digit pattern
     *   lastPart?: string // Filter numbers that end with this digit pattern
     *   anywhere?: string // Filter numbers that contain this digit pattern anywhere
     *   smsEnabled?: bool // Filter for numbers with SMS capability
     *   mmsEnabled?: bool // Filter for numbers with MMS capability
     *   voiceEnabled?: bool // Filter for numbers with voice capability
     * } $params Request parameters
     * @param array<string, mixed>|null $options Additional request options
     * @return AvailableNumbersResponseDto Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function availableNumbers(
        array $params,
        ?array $options = null
    ): AvailableNumbersResponseDto {
        $paramDefs = [['name' => 'locationId', 'in' => 'path'], ['name' => 'countryCode', 'in' => 'query'], ['name' => 'numberTypes', 'in' => 'query'], ['name' => 'firstPart', 'in' => 'query'], ['name' => 'lastPart', 'in' => 'query'], ['name' => 'anywhere', 'in' => 'query'], ['name' => 'smsEnabled', 'in' => 'query'], ['name' => 'mmsEnabled', 'in' => 'query'], ['name' => 'voiceEnabled', 'in' => 'query'], ];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["Location-Access"];

        $url = RequestUtils::buildUrl('/phone-system/numbers/location/{locationId}/available', $extracted['path']);
        
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
            
            return new AvailableNumbersResponseDto($responseData);
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
     * Purchase a phone number
     * Purchase a phone number for a specific location.
     * 
     * @param array{
     *   locationId: string // The unique identifier of the location
     * } $params Request parameters
     * @param PurchasePhoneNumberBodyDto $requestBody Request body data
     * @param array<string, mixed>|null $options Additional request options
     * @return TwilioAccountResponseDto Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function purchasePhoneNumber(
        array $params,
        PurchasePhoneNumberBodyDto $requestBody,
        ?array $options = null
    ): TwilioAccountResponseDto {
        if ($requestBody !== null && is_object($requestBody) && method_exists($requestBody, 'toArray')) {
            $requestBody = $requestBody->toArray();
        }
        $paramDefs = [['name' => 'locationId', 'in' => 'path'], ];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["Location-Access"];

        $url = RequestUtils::buildUrl('/phone-system/numbers/location/{locationId}/purchase', $extracted['path']);
        
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
            
            return new TwilioAccountResponseDto($responseData);
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
     * List active numbers
     * Retrieve a paginated list of active phone numbers for a specific location. Supports filtering, pagination, and optional exclusion of number pool assignments.
     * 
     * @param array{
     *   locationId: string // The unique identifier of the location
     *   pageSize?: int // How many resources to return in each list page. The default is 50, and the maximum is 1000.
     *   page?: int // The page index for pagination. The default is 0.
     *   searchFilter?: string // Filter numbers by phone number pattern. Supports partial matching (e.g., "+91" to find all Indian numbers).
     *   skipNumberPool?: bool // Whether to exclude numbers that are assigned to number pools. Default is true.
     * } $params Request parameters
     * @param array<string, mixed>|null $options Additional request options
     * @return mixed Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function activeNumbers(
        array $params,
        ?array $options = null
    ): mixed {
        $paramDefs = [['name' => 'locationId', 'in' => 'path'], ['name' => 'pageSize', 'in' => 'query'], ['name' => 'page', 'in' => 'query'], ['name' => 'searchFilter', 'in' => 'query'], ['name' => 'skipNumberPool', 'in' => 'query'], ];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["Location-Access"];

        $url = RequestUtils::buildUrl('/phone-system/numbers/location/{locationId}', $extracted['path']);
        
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

}

