<?php

namespace HighLevel\Services\Forms;

use HighLevel\HighLevel;
use HighLevel\GHLError;
use HighLevel\Utils\RequestUtils;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Exception\RequestException;
use HighLevel\Services\Forms\Models\FormsSubmissionsSuccessfulResponseDto;
use HighLevel\Services\Forms\Models\FormsSuccessfulResponseDto;

/**
 * Forms Service
 * Documentation for forms API
 * 
 * @package HighLevel\Services\Forms
 */
class Forms
{
    /**
     * HighLevel client instance
     * @var HighLevel
     */
    private HighLevel $client;

    /**
     * Create a new Forms service instance
     * 
     * @param HighLevel $client HighLevel client instance
     */
    public function __construct(HighLevel $client)
    {
        $this->client = $client;
    }

    /**
     * Get Forms Submissions
     * Get Forms Submissions
     * 
     * @param array{
     *   locationId: string
     *   page?: int // Page No. By default it will be 1
     *   limit?: int // Limit Per Page records count. will allow maximum up to 100 and default will be 20
     *   formId?: string // Filter submission by form id
     *   q?: string // Filter by contactId, name, email or phone no.
     *   startAt?: string // Get submission by starting of this date. By default it will be same date of last month(YYYY-MM-DD).
     *   endAt?: string // Get submission by ending of this date. By default it will be current date(YYYY-MM-DD).
     * } $params Request parameters
     * @param array<string, mixed>|null $options Additional request options
     * @return FormsSubmissionsSuccessfulResponseDto Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function getFormsSubmissions(
        array $params,
        ?array $options = null
    ): FormsSubmissionsSuccessfulResponseDto {
        $paramDefs = [['name' => 'locationId', 'in' => 'query'], ['name' => 'page', 'in' => 'query'], ['name' => 'limit', 'in' => 'query'], ['name' => 'formId', 'in' => 'query'], ['name' => 'q', 'in' => 'query'], ['name' => 'startAt', 'in' => 'query'], ['name' => 'endAt', 'in' => 'query']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["bearer"];

        $url = RequestUtils::buildUrl('/forms/submissions', $extracted['path']);
        
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
            
            return new FormsSubmissionsSuccessfulResponseDto($responseData);
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
     * Upload files to custom fields
     * Post the necessary fields for the API to upload files. The files need to be a buffer with the key &quot;&lt; custom_field_id &gt;_&lt; file_id &gt;&quot;. &lt;br /&gt; Here custom field id is the ID of your custom field and file id is a randomly generated id (or uuid) &lt;br /&gt; There is support for multiple file uploads as well. Have multiple fields in the format mentioned.&lt;br /&gt;File size is limited to 50 MB.&lt;br /&gt;&lt;br /&gt; The allowed file types are: &lt;br/&gt; &lt;ul&gt;&lt;li&gt;PDF&lt;/li&gt;&lt;li&gt;DOCX&lt;/li&gt;&lt;li&gt;DOC&lt;/li&gt;&lt;li&gt;JPG&lt;/li&gt;&lt;li&gt;JPEG&lt;/li&gt;&lt;li&gt;PNG&lt;/li&gt;&lt;li&gt;GIF&lt;/li&gt;&lt;li&gt;CSV&lt;/li&gt;&lt;li&gt;XLSX&lt;/li&gt;&lt;li&gt;XLS&lt;/li&gt;&lt;li&gt;MP4&lt;/li&gt;&lt;li&gt;MPEG&lt;/li&gt;&lt;li&gt;ZIP&lt;/li&gt;&lt;li&gt;RAR&lt;/li&gt;&lt;li&gt;TXT&lt;/li&gt;&lt;li&gt;SVG&lt;/li&gt;&lt;/ul&gt; &lt;br /&gt;&lt;br /&gt; The API will return the updated contact object.
     * 
     * @param array{
     *   contactId: string // Contact ID to upload the file to.
     *   locationId: string // Location ID of the contact.
     * } $params Request parameters
     * @param array $requestBody Request body data
     * @param array<string, mixed>|null $options Additional request options
     * @return mixed Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function uploadToCustomFields(
        array $params,
        array $requestBody,
        ?array $options = null
    ): mixed {
        if ($requestBody !== null && is_object($requestBody) && method_exists($requestBody, 'toArray')) {
            $requestBody = $requestBody->toArray();
        }
        $paramDefs = [['name' => 'contactId', 'in' => 'query'], ['name' => 'locationId', 'in' => 'query']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["bearer","Location-Access"];

        $url = RequestUtils::buildUrl('/forms/upload-custom-files', $extracted['path']);
        
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
     * Get Forms
     * Get Forms
     * 
     * @param array{
     *   locationId: string
     *   skip?: int
     *   limit?: int // Limit Per Page records count. will allow maximum up to 50 and default will be 10
     *   type?: string
     * } $params Request parameters
     * @param array<string, mixed>|null $options Additional request options
     * @return FormsSuccessfulResponseDto Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function getForms(
        array $params,
        ?array $options = null
    ): FormsSuccessfulResponseDto {
        $paramDefs = [['name' => 'locationId', 'in' => 'query'], ['name' => 'skip', 'in' => 'query'], ['name' => 'limit', 'in' => 'query'], ['name' => 'type', 'in' => 'query']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["bearer"];

        $url = RequestUtils::buildUrl('/forms/', $extracted['path']);
        
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
            
            return new FormsSuccessfulResponseDto($responseData);
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

