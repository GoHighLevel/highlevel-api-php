<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Surveys;

use HighLevel\HighLevel;
use HighLevel\GHLError;
use HighLevel\Utils\RequestUtils;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Exception\RequestException;
use HighLevel\Services\Surveys\Models\GetSurveysSubmissionSuccessfulResponseDto;
use HighLevel\Services\Surveys\Models\GetSurveysSuccessfulResponseDto;

/**
 * Surveys Service
 * Documentation for surveys API
 * 
 * @package HighLevel\Services\Surveys
 */
class Surveys
{
    /**
     * HighLevel client instance
     * @var HighLevel
     */
    private HighLevel $client;

    /**
     * Create a new Surveys service instance
     * 
     * @param HighLevel $client HighLevel client instance
     */
    public function __construct(HighLevel $client)
    {
        $this->client = $client;
    }

    /**
     * Get Surveys Submissions
     * Get Surveys Submissions
     * 
     * @param array{
     *   locationId: string
     *   page?: int // Page No. By default it will be 1
     *   limit?: int // Limit Per Page records count. will allow maximum up to 100 and default will be 20
     *   surveyId?: string // Filter submission by survey id
     *   q?: string // Filter by contactId, name, email or phone no.
     *   startAt?: string // Get submission by starting of this date. By default it will be same date of last month(YYYY-MM-DD).
     *   endAt?: string // Get submission by ending of this date. By default it will be current date(YYYY-MM-DD).
     * } $params Request parameters
     * @param array<string, mixed>|null $options Additional request options
     * @return GetSurveysSubmissionSuccessfulResponseDto Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function getSurveysSubmissions(
        array $params,
        ?array $options = null
    ): GetSurveysSubmissionSuccessfulResponseDto {
        $paramDefs = [['name' => 'locationId', 'in' => 'query'], ['name' => 'page', 'in' => 'query'], ['name' => 'limit', 'in' => 'query'], ['name' => 'surveyId', 'in' => 'query'], ['name' => 'q', 'in' => 'query'], ['name' => 'startAt', 'in' => 'query'], ['name' => 'endAt', 'in' => 'query']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["bearer"];

        $url = RequestUtils::buildUrl('/surveys/submissions', $extracted['path']);
        
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
            
            return new GetSurveysSubmissionSuccessfulResponseDto($responseData);
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
     * Get Surveys
     * Get Surveys
     * 
     * @param array{
     *   locationId: string
     *   skip?: int
     *   limit?: int // Limit Per Page records count. will allow maximum up to 50 and default will be 10
     *   type?: string
     * } $params Request parameters
     * @param array<string, mixed>|null $options Additional request options
     * @return GetSurveysSuccessfulResponseDto Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function getSurveys(
        array $params,
        ?array $options = null
    ): GetSurveysSuccessfulResponseDto {
        $paramDefs = [['name' => 'locationId', 'in' => 'query'], ['name' => 'skip', 'in' => 'query'], ['name' => 'limit', 'in' => 'query'], ['name' => 'type', 'in' => 'query']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["bearer"];

        $url = RequestUtils::buildUrl('/surveys/', $extracted['path']);
        
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
            
            return new GetSurveysSuccessfulResponseDto($responseData);
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

