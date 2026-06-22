<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Companies;

use HighLevel\HighLevel;
use HighLevel\GHLError;
use HighLevel\Utils\RequestUtils;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Exception\RequestException;
use HighLevel\Services\Companies\Models\GetCompanyByIdSuccessfulResponseDto;

/**
 * Companies Service
 * Documentation for Companies API
 * 
 * @package HighLevel\Services\Companies
 */
class Companies
{
    /**
     * HighLevel client instance
     * @var HighLevel
     */
    private HighLevel $client;

    /**
     * Create a new Companies service instance
     * 
     * @param HighLevel $client HighLevel client instance
     */
    public function __construct(HighLevel $client)
    {
        $this->client = $client;
    }

    /**
     * Get Company
     * Get Comapny
     * 
     * @param array{
     *   companyId: string
     * } $params Request parameters
     * @param array<string, mixed>|null $options Additional request options
     * @return GetCompanyByIdSuccessfulResponseDto Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function getCompany(
        array $params,
        ?array $options = null
    ): GetCompanyByIdSuccessfulResponseDto {
        $paramDefs = [['name' => 'companyId', 'in' => 'path']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["Agency-Access"];

        $url = RequestUtils::buildUrl('/companies/{companyId}', $extracted['path']);
        
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
            
            return new GetCompanyByIdSuccessfulResponseDto($responseData);
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

