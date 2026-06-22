<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Proposals;

use HighLevel\HighLevel;
use HighLevel\GHLError;
use HighLevel\Utils\RequestUtils;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Exception\RequestException;
use HighLevel\Services\Proposals\Models\DocumentListResponseDto;
use HighLevel\Services\Proposals\Models\SendDocumentDto;
use HighLevel\Services\Proposals\Models\SendDocumentResponseDto;
use HighLevel\Services\Proposals\Models\TemplateListPaginationResponseDTO;
use HighLevel\Services\Proposals\Models\SendDocumentFromPublicApiBodyDto;
use HighLevel\Services\Proposals\Models\SendTemplateResponseDto;

/**
 * Proposals Service
 * Documentation for Documents and Contracts API
 * 
 * @package HighLevel\Services\Proposals
 */
class Proposals
{
    /**
     * HighLevel client instance
     * @var HighLevel
     */
    private HighLevel $client;

    /**
     * Create a new Proposals service instance
     * 
     * @param HighLevel $client HighLevel client instance
     */
    public function __construct(HighLevel $client)
    {
        $this->client = $client;
    }

    /**
     * List documents
     * List documents for a location
     * 
     * @param array{
     *   locationId: string // Location Id
     *   status?: string // Document status, pass as comma separated values
     *   paymentStatus?: string // Payment status, pass as comma separated values
     *   limit?: int // Limit to fetch number of records
     *   skip?: int // Skip number of records
     *   query?: string // Search string
     *   dateFrom?: string // Date start from (ISO 8601), dateFrom & DateTo must be provided together
     *   dateTo?: string // Date to (ISO 8601), dateFrom & DateTo must be provided together
     * } $params Request parameters
     * @param array<string, mixed>|null $options Additional request options
     * @return DocumentListResponseDto Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function listDocumentsContracts(
        array $params,
        ?array $options = null
    ): DocumentListResponseDto {
        $paramDefs = [['name' => 'locationId', 'in' => 'query'], ['name' => 'status', 'in' => 'query'], ['name' => 'paymentStatus', 'in' => 'query'], ['name' => 'limit', 'in' => 'query'], ['name' => 'skip', 'in' => 'query'], ['name' => 'query', 'in' => 'query'], ['name' => 'dateFrom', 'in' => 'query'], ['name' => 'dateTo', 'in' => 'query'], ];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["Location-Access","Agency-Access"];

        $url = RequestUtils::buildUrl('/proposals/document', $extracted['path']);
        
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
            
            return new DocumentListResponseDto($responseData);
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
     * Send document
     * Send document to a client
     * 
     * @param SendDocumentDto $requestBody Request body data
     * @param array<string, mixed>|null $options Additional request options
     * @return SendDocumentResponseDto Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function sendDocumentsContracts(
        $requestBody,
        ?array $options = null
    ): SendDocumentResponseDto {
        if ($requestBody !== null && is_object($requestBody) && method_exists($requestBody, 'toArray')) {
            $requestBody = $requestBody->toArray();
        }
        $paramDefs = [];
        $extracted = RequestUtils::extractParams([], $paramDefs);
        $requirements = ["Location-Access","Agency-Access"];

        $url = RequestUtils::buildUrl('/proposals/document/send', $extracted['path']);
        
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
            
            return new SendDocumentResponseDto($responseData);
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
     * List templates
     * List document contract templates for a location
     * 
     * @param array{
     *   locationId: string // Location Id
     *   dateFrom?: string // Date start from (ISO 8601)
     *   dateTo?: string // Date to (ISO 8601)
     *   type?: string // Comma-separated template types. Valid values: proposal, estimate, contentLibrary
     *   name?: string // Template Name
     *   isPublicDocument?: bool // If the docForm is a DocForm
     *   userId?: string // User Id, required when isPublicDocument is true
     *   limit?: string // Limit
     *   skip?: string // Skip
     * } $params Request parameters
     * @param array<string, mixed>|null $options Additional request options
     * @return TemplateListPaginationResponseDTO Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function listDocumentsContractsTemplates(
        array $params,
        ?array $options = null
    ): TemplateListPaginationResponseDTO {
        $paramDefs = [['name' => 'locationId', 'in' => 'query'], ['name' => 'dateFrom', 'in' => 'query'], ['name' => 'dateTo', 'in' => 'query'], ['name' => 'type', 'in' => 'query'], ['name' => 'name', 'in' => 'query'], ['name' => 'isPublicDocument', 'in' => 'query'], ['name' => 'userId', 'in' => 'query'], ['name' => 'limit', 'in' => 'query'], ['name' => 'skip', 'in' => 'query'], ];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["Location-Access","Agency-Access"];

        $url = RequestUtils::buildUrl('/proposals/templates', $extracted['path']);
        
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
            
            return new TemplateListPaginationResponseDTO($responseData);
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
     * Send template
     * Send template to a client
     * 
     * @param SendDocumentFromPublicApiBodyDto $requestBody Request body data
     * @param array<string, mixed>|null $options Additional request options
     * @return SendTemplateResponseDto Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function sendDocumentsContractsTemplate(
        $requestBody,
        ?array $options = null
    ): SendTemplateResponseDto {
        if ($requestBody !== null && is_object($requestBody) && method_exists($requestBody, 'toArray')) {
            $requestBody = $requestBody->toArray();
        }
        $paramDefs = [];
        $extracted = RequestUtils::extractParams([], $paramDefs);
        $requirements = ["Location-Access","Agency-Access"];

        $url = RequestUtils::buildUrl('/proposals/templates/send', $extracted['path']);
        
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
            
            return new SendTemplateResponseDto($responseData);
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

