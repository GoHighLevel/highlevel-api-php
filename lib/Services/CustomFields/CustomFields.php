<?php

namespace HighLevel\Services\CustomFields;

use HighLevel\HighLevel;
use HighLevel\GHLError;
use HighLevel\Utils\RequestUtils;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Exception\RequestException;
use HighLevel\Services\CustomFields\Models\CustomFieldSuccessfulResponseDto;
use HighLevel\Services\CustomFields\Models\UpdateCustomFieldsDTO;
use HighLevel\Services\CustomFields\Models\CustomFolderDeleteResponseDto;
use HighLevel\Services\CustomFields\Models\CustomFieldsResponseDTO;
use HighLevel\Services\CustomFields\Models\CreateFolder;
use HighLevel\Services\CustomFields\Models\ICustomFieldFolder;
use HighLevel\Services\CustomFields\Models\UpdateFolder;
use HighLevel\Services\CustomFields\Models\CreateCustomFieldsDTO;

/**
 * CustomFields Service
 * Custom fields are data points that allow you to capture and store specific information tailored to your business requirements. You can create fields across field types like text, numeric, selection options and special fields like date/time or signature
 * 
 * @package HighLevel\Services\CustomFields
 */
class CustomFields
{
    /**
     * HighLevel client instance
     * @var HighLevel
     */
    private HighLevel $client;

    /**
     * Create a new CustomFields service instance
     * 
     * @param HighLevel $client HighLevel client instance
     */
    public function __construct(HighLevel $client)
    {
        $this->client = $client;
    }

    /**
     * Get Custom Field / Folder By Id
     * &lt;div&gt;
&lt;p&gt; Get Custom Field / Folder By Id.&lt;/p&gt; 
 &lt;/div&gt; 
 :::info
 Only supports Custom Objects and Company (Business) today. Will be extended to other Standard Objects in the future.
 :::
     * 
     * @param array{
     *   id: string
     * } $params Request parameters
     * @param array<string, mixed>|null $options Additional request options
     * @return CustomFieldSuccessfulResponseDto Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function getCustomFieldById(
        array $params,
        ?array $options = null
    ): CustomFieldSuccessfulResponseDto {
        $paramDefs = [['name' => 'id', 'in' => 'path']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["bearer"];

        $url = RequestUtils::buildUrl('/custom-fields/{id}', $extracted['path']);
        
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
            
            return new CustomFieldSuccessfulResponseDto($responseData);
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
     * Update Custom Field By Id
     * &lt;div&gt;
 &lt;p&gt; Update Custom Field By Id &lt;/p&gt; 
 &lt;/div&gt; 
 :::info
 Only supports Custom Objects and Company (Business) today. Will be extended to other Standard Objects in the future.
 :::
     * 
     * @param array{
     *   id: string
     * } $params Request parameters
     * @param UpdateCustomFieldsDTO $requestBody Request body data
     * @param array<string, mixed>|null $options Additional request options
     * @return CustomFieldSuccessfulResponseDto Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function updateCustomField(
        array $params,
        $requestBody,
        ?array $options = null
    ): CustomFieldSuccessfulResponseDto {
        if ($requestBody !== null && is_object($requestBody) && method_exists($requestBody, 'toArray')) {
            $requestBody = $requestBody->toArray();
        }
        $paramDefs = [['name' => 'id', 'in' => 'path']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["bearer"];

        $url = RequestUtils::buildUrl('/custom-fields/{id}', $extracted['path']);
        
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
            
            return new CustomFieldSuccessfulResponseDto($responseData);
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
     * Delete Custom Field By Id
     * &lt;div&gt;
 &lt;p&gt; Delete Custom Field By Id &lt;/p&gt; 
 &lt;/div&gt; 
 :::info
 Only supports Custom Objects and Company (Business) today. Will be extended to other Standard Objects in the future.
 :::
     * 
     * @param array{
     *   id: string
     * } $params Request parameters
     * @param array<string, mixed>|null $options Additional request options
     * @return CustomFolderDeleteResponseDto Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function deleteCustomField(
        array $params,
        ?array $options = null
    ): CustomFolderDeleteResponseDto {
        $paramDefs = [['name' => 'id', 'in' => 'path']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["bearer"];

        $url = RequestUtils::buildUrl('/custom-fields/{id}', $extracted['path']);
        
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
            
            return new CustomFolderDeleteResponseDto($responseData);
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
     * Get Custom Fields By Object Key
     * &lt;div&gt;
 &lt;p&gt; Get Custom Fields By Object Key &lt;/p&gt; 
 &lt;/div&gt; 
 :::info
 Only supports Custom Objects and Company (Business) today. Will be extended to other Standard Objects in the future.
 :::
     * 
     * @param array{
     *   objectKey: string // key of the Object. Must include "custom_objects." prefix for custom objects. Available on the Custom Objects details Page under settings
     *   locationId: string
     * } $params Request parameters
     * @param array<string, mixed>|null $options Additional request options
     * @return CustomFieldsResponseDTO Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function getCustomFieldsByObjectKey(
        array $params,
        ?array $options = null
    ): CustomFieldsResponseDTO {
        $paramDefs = [['name' => 'objectKey', 'in' => 'path'], ['name' => 'locationId', 'in' => 'query']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["bearer"];

        $url = RequestUtils::buildUrl('/custom-fields/object-key/{objectKey}', $extracted['path']);
        
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
            
            return new CustomFieldsResponseDTO($responseData);
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
     * Create Custom Field Folder
     * &lt;div&gt;
 &lt;p&gt; Create Custom Field Folder &lt;/p&gt; 
 &lt;/div&gt; 
 :::info
 Only supports Custom Objects and Company (Business) today. Will be extended to other Standard Objects in the future.
 :::
     * 
     * @param CreateFolder $requestBody Request body data
     * @param array<string, mixed>|null $options Additional request options
     * @return ICustomFieldFolder Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function createCustomFieldFolder(
        $requestBody,
        ?array $options = null
    ): ICustomFieldFolder {
        if ($requestBody !== null && is_object($requestBody) && method_exists($requestBody, 'toArray')) {
            $requestBody = $requestBody->toArray();
        }
        $paramDefs = [];
        $extracted = RequestUtils::extractParams([], $paramDefs);
        $requirements = ["bearer"];

        $url = RequestUtils::buildUrl('/custom-fields/folder', $extracted['path']);
        
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
            
            return new ICustomFieldFolder($responseData);
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
     * Update Custom Field Folder Name
     * &lt;div&gt;
 &lt;p&gt; Create Custom Field Folder &lt;/p&gt; 
 &lt;/div&gt; 
 :::info
 Only supports Custom Objects and Company (Business) today. Will be extended to other Standard Objects in the future.
 :::
     * 
     * @param array{
     *   id: string
     * } $params Request parameters
     * @param UpdateFolder $requestBody Request body data
     * @param array<string, mixed>|null $options Additional request options
     * @return ICustomFieldFolder Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function updateCustomFieldFolder(
        array $params,
        $requestBody,
        ?array $options = null
    ): ICustomFieldFolder {
        if ($requestBody !== null && is_object($requestBody) && method_exists($requestBody, 'toArray')) {
            $requestBody = $requestBody->toArray();
        }
        $paramDefs = [['name' => 'id', 'in' => 'path']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["bearer"];

        $url = RequestUtils::buildUrl('/custom-fields/folder/{id}', $extracted['path']);
        
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
            
            return new ICustomFieldFolder($responseData);
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
     * Delete Custom Field Folder
     * &lt;div&gt;
&lt;p&gt; Create Custom Field Folder &lt;/p&gt; 
 &lt;/div&gt; 
 :::info
 Only supports Custom Objects and Company (Business) today. Will be extended to other Standard Objects in the future.
 :::
     * 
     * @param array{
     *   id: string
     *   locationId: string // Location Id
     * } $params Request parameters
     * @param array<string, mixed>|null $options Additional request options
     * @return CustomFolderDeleteResponseDto Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function deleteCustomFieldFolder(
        array $params,
        ?array $options = null
    ): CustomFolderDeleteResponseDto {
        $paramDefs = [['name' => 'id', 'in' => 'path'], ['name' => 'locationId', 'in' => 'query']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["bearer"];

        $url = RequestUtils::buildUrl('/custom-fields/folder/{id}', $extracted['path']);
        
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
            
            return new CustomFolderDeleteResponseDto($responseData);
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
     * Create Custom Field
     * &lt;div&gt;
&lt;p&gt; Create Custom Field &lt;/p&gt; 
 &lt;/div&gt; 
 :::info
 Only supports Custom Objects and Company (Business) today. Will be extended to other Standard Objects in the future.
 :::
     * 
     * @param CreateCustomFieldsDTO $requestBody Request body data
     * @param array<string, mixed>|null $options Additional request options
     * @return CustomFieldSuccessfulResponseDto Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function createCustomField(
        $requestBody,
        ?array $options = null
    ): CustomFieldSuccessfulResponseDto {
        if ($requestBody !== null && is_object($requestBody) && method_exists($requestBody, 'toArray')) {
            $requestBody = $requestBody->toArray();
        }
        $paramDefs = [];
        $extracted = RequestUtils::extractParams([], $paramDefs);
        $requirements = ["bearer"];

        $url = RequestUtils::buildUrl('/custom-fields/', $extracted['path']);
        
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
            
            return new CustomFieldSuccessfulResponseDto($responseData);
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

