<?php

namespace HighLevel\Services\AffiliateManager;

use HighLevel\HighLevel;
use HighLevel\GHLError;
use HighLevel\Utils\RequestUtils;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Exception\RequestException;
use HighLevel\Services\AffiliateManager\Models\ListAffiliatesResponseDto;
use HighLevel\Services\AffiliateManager\Models\GetAffiliateResponseDto;
use HighLevel\Services\AffiliateManager\Models\GetPayoutListResponseDto;
use HighLevel\Services\AffiliateManager\Models\GetCommissionListResponseDto;

/**
 * AffiliateManager Service
 * Documentation for Affiliate Manager API
 * 
 * @package HighLevel\Services\AffiliateManager
 */
class AffiliateManager
{
    /**
     * HighLevel client instance
     * @var HighLevel
     */
    private HighLevel $client;

    /**
     * Create a new AffiliateManager service instance
     * 
     * @param HighLevel $client HighLevel client instance
     */
    public function __construct(HighLevel $client)
    {
        $this->client = $client;
    }

    /**
     * List Affiliates
     * Retrieve the list of affiliates for a location.
     * 
     * @param array{
     *   locationId: string // Location Id
     *   query?: string
     *   active?: string
     *   campaignId?: string
     *   skip?: int
     *   limit?: int // Maximum number of records to return. Maximum allowed value is 100.
     *   fromDate?: string
     *   toDate?: string
     * } $params Request parameters
     * @param array<string, mixed>|null $options Additional request options
     * @return ListAffiliatesResponseDto Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function listAffiliates(
        array $params,
        ?array $options = null
    ): ListAffiliatesResponseDto {
        $paramDefs = [['name' => 'locationId', 'in' => 'path'], ['name' => 'query', 'in' => 'query'], ['name' => 'active', 'in' => 'query'], ['name' => 'campaignId', 'in' => 'query'], ['name' => 'skip', 'in' => 'query'], ['name' => 'limit', 'in' => 'query'], ['name' => 'fromDate', 'in' => 'query'], ['name' => 'toDate', 'in' => 'query']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["bearer"];

        $url = RequestUtils::buildUrl('/affiliate-manager/{locationId}/affiliates', $extracted['path']);
        
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
            
            return new ListAffiliatesResponseDto($responseData);
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
     * Get Affiliate
     * Retrieve a single affiliate by id for a location.
     * 
     * @param array{
     *   locationId: string // Location Id
     *   affiliateId: string // Affiliate Id
     * } $params Request parameters
     * @param array<string, mixed>|null $options Additional request options
     * @return GetAffiliateResponseDto Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function getAffiliate(
        array $params,
        ?array $options = null
    ): GetAffiliateResponseDto {
        $paramDefs = [['name' => 'locationId', 'in' => 'path'], ['name' => 'affiliateId', 'in' => 'path']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["bearer"];

        $url = RequestUtils::buildUrl('/affiliate-manager/{locationId}/affiliates/{affiliateId}', $extracted['path']);
        
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
            
            return new GetAffiliateResponseDto($responseData);
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
     * List Payouts
     * Retrieve the list of payouts for a location.
     * 
     * @param array{
     *   locationId: string // Location Id
     *   status?: string // Payout status
     *   query?: string // query
     *   affiliateId?: string // Affiliate Id
     *   campaignId?: string // Campaign Id
     *   skip?: int
     *   limit?: int
     *   start?: string
     *   end?: string
     * } $params Request parameters
     * @param array<string, mixed>|null $options Additional request options
     * @return GetPayoutListResponseDto Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function listPayouts(
        array $params,
        ?array $options = null
    ): GetPayoutListResponseDto {
        $paramDefs = [['name' => 'locationId', 'in' => 'path'], ['name' => 'status', 'in' => 'query'], ['name' => 'query', 'in' => 'query'], ['name' => 'affiliateId', 'in' => 'query'], ['name' => 'campaignId', 'in' => 'query'], ['name' => 'skip', 'in' => 'query'], ['name' => 'limit', 'in' => 'query'], ['name' => 'start', 'in' => 'query'], ['name' => 'end', 'in' => 'query']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["bearer"];

        $url = RequestUtils::buildUrl('/affiliate-manager/{locationId}/payouts', $extracted['path']);
        
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
            
            return new GetPayoutListResponseDto($responseData);
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
     * List Commissions
     * Retrieve the list of commissions for a location.
     * 
     * @param array{
     *   locationId: string // Location Id
     *   campaignId?: string // Campaign Id
     *   affiliateId?: string // Affiliate Id
     *   status?: string // Status
     *   query?: string // Query
     *   skip?: int
     *   limit?: int // Maximum number of records to return. Maximum allowed value is 100.
     *   fromDate?: string
     *   toDate?: string
     * } $params Request parameters
     * @param array<string, mixed>|null $options Additional request options
     * @return GetCommissionListResponseDto Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function listCommissions(
        array $params,
        ?array $options = null
    ): GetCommissionListResponseDto {
        $paramDefs = [['name' => 'locationId', 'in' => 'path'], ['name' => 'campaignId', 'in' => 'query'], ['name' => 'affiliateId', 'in' => 'query'], ['name' => 'status', 'in' => 'query'], ['name' => 'query', 'in' => 'query'], ['name' => 'skip', 'in' => 'query'], ['name' => 'limit', 'in' => 'query'], ['name' => 'fromDate', 'in' => 'query'], ['name' => 'toDate', 'in' => 'query']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["bearer"];

        $url = RequestUtils::buildUrl('/affiliate-manager/{locationId}/commissions', $extracted['path']);
        
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
            
            return new GetCommissionListResponseDto($responseData);
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

