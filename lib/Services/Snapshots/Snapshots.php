<?php

namespace HighLevel\Services\Snapshots;

use HighLevel\HighLevel;
use HighLevel\GHLError;
use HighLevel\Utils\RequestUtils;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Exception\RequestException;
use HighLevel\Services\Snapshots\Models\GetSnapshotsSuccessfulResponseDto;
use HighLevel\Services\Snapshots\Models\CreateSnapshotShareLinkRequestDTO;
use HighLevel\Services\Snapshots\Models\CreateSnapshotShareLinkSuccessfulResponseDTO;
use HighLevel\Services\Snapshots\Models\GetSnapshotPushStatusSuccessfulResponseDTO;
use HighLevel\Services\Snapshots\Models\GetLatestSnapshotPushStatusSuccessfulResponseDTO;

/**
 * Snapshots Service
 * Documentation for Snapshots API
 * 
 * @package HighLevel\Services\Snapshots
 */
class Snapshots
{
    /**
     * HighLevel client instance
     * @var HighLevel
     */
    private HighLevel $client;

    /**
     * Create a new Snapshots service instance
     * 
     * @param HighLevel $client HighLevel client instance
     */
    public function __construct(HighLevel $client)
    {
        $this->client = $client;
    }

    /**
     * Get Snapshots
     * Get a list of all own and imported Snapshots
     * 
     * @param array{
     *   companyId: string // Company Id
     * } $params Request parameters
     * @param array<string, mixed>|null $options Additional request options
     * @return GetSnapshotsSuccessfulResponseDto Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function getCustomSnapshots(
        array $params,
        ?array $options = null
    ): GetSnapshotsSuccessfulResponseDto {
        $paramDefs = [['name' => 'companyId', 'in' => 'query']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["Agency-Access"];

        $url = RequestUtils::buildUrl('/snapshots/', $extracted['path']);
        
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
            
            return new GetSnapshotsSuccessfulResponseDto($responseData);
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
     * Create Snapshot Share Link
     * Create a share link for snapshot
     * 
     * @param array{
     *   companyId: string
     * } $params Request parameters
     * @param CreateSnapshotShareLinkRequestDTO $requestBody Request body data
     * @param array<string, mixed>|null $options Additional request options
     * @return CreateSnapshotShareLinkSuccessfulResponseDTO Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function createSnapshotShareLink(
        array $params,
        CreateSnapshotShareLinkRequestDTO $requestBody,
        ?array $options = null
    ): CreateSnapshotShareLinkSuccessfulResponseDTO {
        if ($requestBody !== null && is_object($requestBody) && method_exists($requestBody, 'toArray')) {
            $requestBody = $requestBody->toArray();
        }
        $paramDefs = [['name' => 'companyId', 'in' => 'query'], ];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["Agency-Access"];

        $url = RequestUtils::buildUrl('/snapshots/share/link', $extracted['path']);
        
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
            
            return new CreateSnapshotShareLinkSuccessfulResponseDTO($responseData);
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
     * Get Snapshot Push between Dates
     * Get list of sub-accounts snapshot pushed in time period
     * 
     * @param array{
     *   snapshotId: string
     *   companyId: string
     *   from: string
     *   to: string
     *   lastDoc: string // Id for last document till what you want to skip
     *   limit: string
     * } $params Request parameters
     * @param array<string, mixed>|null $options Additional request options
     * @return GetSnapshotPushStatusSuccessfulResponseDTO Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function getSnapshotPush(
        array $params,
        ?array $options = null
    ): GetSnapshotPushStatusSuccessfulResponseDTO {
        $paramDefs = [['name' => 'snapshotId', 'in' => 'path'], ['name' => 'companyId', 'in' => 'query'], ['name' => 'from', 'in' => 'query'], ['name' => 'to', 'in' => 'query'], ['name' => 'lastDoc', 'in' => 'query'], ['name' => 'limit', 'in' => 'query'], ];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["Agency-Access"];

        $url = RequestUtils::buildUrl('/snapshots/snapshot-status/{snapshotId}', $extracted['path']);
        
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
            
            return new GetSnapshotPushStatusSuccessfulResponseDTO($responseData);
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
     * Get Last Snapshot Push
     * Get Latest Snapshot Push Status for a location id
     * 
     * @param array{
     *   companyId: string
     *   snapshotId: string
     *   locationId: string
     * } $params Request parameters
     * @param array<string, mixed>|null $options Additional request options
     * @return GetLatestSnapshotPushStatusSuccessfulResponseDTO Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function getLatestSnapshotPush(
        array $params,
        ?array $options = null
    ): GetLatestSnapshotPushStatusSuccessfulResponseDTO {
        $paramDefs = [['name' => 'companyId', 'in' => 'query'], ['name' => 'snapshotId', 'in' => 'path'], ['name' => 'locationId', 'in' => 'path'], ];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["Agency-Access"];

        $url = RequestUtils::buildUrl('/snapshots/snapshot-status/{snapshotId}/location/{locationId}', $extracted['path']);
        
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
            
            return new GetLatestSnapshotPushStatusSuccessfulResponseDTO($responseData);
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

