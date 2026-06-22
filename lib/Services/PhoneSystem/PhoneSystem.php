<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\PhoneSystem;

use HighLevel\HighLevel;
use HighLevel\GHLError;
use HighLevel\Utils\RequestUtils;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Exception\RequestException;
use HighLevel\Services\PhoneSystem\Models\PurchasePhoneNumberBodyDto;
use HighLevel\Services\PhoneSystem\Models\PurchaseNumberForLocationV3Http201ResponseDto;
use HighLevel\Services\PhoneSystem\Models\ListNumbersV3Http200ResponseDto;

/**
 * PhoneSystem Service
 * API Service for LC Phone - version v3
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
     * List number pools
     * Returns number pools for the location. Requires locationId as a query parameter.
     * 
     * @param array{
     *   locationId: string // Location ID to scope the number pool list
     * } $params Request parameters
     * @param array<string, mixed>|null $options Additional request options
     * @return mixed Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function getNumberPoolList(
        array $params,
        ?array $options = null
    ) {
        $paramDefs = [['name' => 'locationId', 'in' => 'query']];
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
     * Search Twilio inventory for purchasable phone numbers in a country for the given location.
     * 
     * @param array{
     *   firstPart: string // firstPart is the beginning of the phone number
     *   lastPart: string // lastPart is the ending of the phone number
     *   anywhere: string // anywhere are the numbers required anywhere in phone number
     *   numberTypes: array // comma separated types of phone number required
     *   smsEnabled: bool // requested phone numbers should have sms functionality
     *   mmsEnabled: bool // requested phone numbers should have mms functionality
     *   voiceEnabled: bool // requested phone numbers should have voice functionality
     *   countryCode: string // country for which the phone numbers are being requested
     *   locationId: string // Location ID as string
     * } $params Request parameters
     * @param array<string, mixed>|null $options Additional request options
     * @return mixed Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function listAvailableNumbersForACountry(
        array $params,
        ?array $options = null
    ) {
        $paramDefs = [['name' => 'firstPart', 'in' => 'query'], ['name' => 'lastPart', 'in' => 'query'], ['name' => 'anywhere', 'in' => 'query'], ['name' => 'numberTypes', 'in' => 'query'], ['name' => 'smsEnabled', 'in' => 'query'], ['name' => 'mmsEnabled', 'in' => 'query'], ['name' => 'voiceEnabled', 'in' => 'query'], ['name' => 'countryCode', 'in' => 'query'], ['name' => 'locationId', 'in' => 'path']];
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
     * Purchase number for location
     * Purchase number for location. With &#x60;version: v3&#x60;, the HTTP 201 body is the standard success envelope (&#x60;status&#x60;, &#x60;data&#x60;, &#x60;message&#x60;, &#x60;statusCode&#x60;). The v3 purchase fields live under &#x60;data&#x60;: &#x60;number&#x60;, &#x60;locationId&#x60;, &#x60;id&#x60;, and &#x60;underLcAccount&#x60; (renamed from under_ghl_account).
     * 
     * @param array{
     *   locationId: string // Location ID as string
     *   version: string // Send `v3` to use the v3 response contract (AIP). This is the supported version value for these endpoints.
     * } $params Request parameters
     * @param PurchasePhoneNumberBodyDto $requestBody Request body data
     * @param array<string, mixed>|null $options Additional request options
     * @return PurchaseNumberForLocationV3Http201ResponseDto Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function purchaseNumberForLocation(
        array $params,
        $requestBody,
        ?array $options = null
    ): PurchaseNumberForLocationV3Http201ResponseDto {
        if ($requestBody !== null && is_object($requestBody) && method_exists($requestBody, 'toArray')) {
            $requestBody = $requestBody->toArray();
        }
        $paramDefs = [['name' => 'locationId', 'in' => 'path'], ['name' => 'version', 'in' => 'header']];
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
            
            return new PurchaseNumberForLocationV3Http201ResponseDto($responseData);
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
     * List active numbers. With &#x60;version: v3&#x60;, the HTTP 200 body is the standard success envelope (&#x60;status&#x60;, &#x60;data&#x60;, &#x60;message&#x60;, &#x60;statusCode&#x60;). The v3 list payload is under &#x60;data&#x60;; &#x60;isUnderGhl&#x60; is renamed to &#x60;isUnderLc&#x60; per AIP naming convention.
     * 
     * @param array{
     *   locationId: string // Location ID as string
     *   pageSize?: int // How many resources to return in each list page. The default is 50, and the maximum is 1000.
     *   page?: int // The page index. The default is 0.
     *   searchFilter?: string // Number search Filter
     *   skipNumberPool?: bool // When true, exclude numbers assigned to number pools from the list.
     *   includeRcsSenderIds?: bool // Include RCS Sender IDs
     *   version: string // Send `v3` to use the v3 response contract (AIP). This is the supported version value for these endpoints.
     * } $params Request parameters
     * @param array<string, mixed>|null $options Additional request options
     * @return ListNumbersV3Http200ResponseDto Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function activeNumbers(
        array $params,
        ?array $options = null
    ): ListNumbersV3Http200ResponseDto {
        $paramDefs = [['name' => 'locationId', 'in' => 'path'], ['name' => 'pageSize', 'in' => 'query'], ['name' => 'page', 'in' => 'query'], ['name' => 'searchFilter', 'in' => 'query'], ['name' => 'skipNumberPool', 'in' => 'query'], ['name' => 'includeRcsSenderIds', 'in' => 'query'], ['name' => 'version', 'in' => 'header']];
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
            
            return new ListNumbersV3Http200ResponseDto($responseData);
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

