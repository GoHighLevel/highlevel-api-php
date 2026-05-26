<?php

namespace HighLevel\Services\Contacts;

use HighLevel\HighLevel;
use HighLevel\GHLError;
use HighLevel\Utils\RequestUtils;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Exception\RequestException;
use HighLevel\Services\Contacts\Models\SearchBodyV2DTO;
use HighLevel\Services\Contacts\Models\TasksListSuccessfulResponseDto;
use HighLevel\Services\Contacts\Models\CreateTaskParams;
use HighLevel\Services\Contacts\Models\TaskByIsSuccessfulResponseDto;
use HighLevel\Services\Contacts\Models\UpdateTaskBody;
use HighLevel\Services\Contacts\Models\DeleteTaskSuccessfulResponseDto;
use HighLevel\Services\Contacts\Models\UpdateTaskStatusParams;
use HighLevel\Services\Contacts\Models\GetEventsSuccessfulResponseDto;
use HighLevel\Services\Contacts\Models\TagsDTO;
use HighLevel\Services\Contacts\Models\CreateAddTagSuccessfulResponseDto;
use HighLevel\Services\Contacts\Models\CreateDeleteTagSuccessfulResponseDto;
use HighLevel\Services\Contacts\Models\GetNotesListSuccessfulResponseDto;
use HighLevel\Services\Contacts\Models\NotesDTO;
use HighLevel\Services\Contacts\Models\GetCreateUpdateNoteSuccessfulResponseDto;
use HighLevel\Services\Contacts\Models\UpdateNoteDTO;
use HighLevel\Services\Contacts\Models\DeleteNoteSuccessfulResponseDto;
use HighLevel\Services\Contacts\Models\UpdateTagsDTO;
use HighLevel\Services\Contacts\Models\UpdateTagsResponseDTO;
use HighLevel\Services\Contacts\Models\ContactsBusinessUpdate;
use HighLevel\Services\Contacts\Models\ContactsBulkUpateResponse;
use HighLevel\Services\Contacts\Models\ContactsByIdSuccessfulResponseDto;
use HighLevel\Services\Contacts\Models\UpdateContactDto;
use HighLevel\Services\Contacts\Models\UpdateContactsSuccessfulResponseDto;
use HighLevel\Services\Contacts\Models\DeleteContactsSuccessfulResponseDto;
use HighLevel\Services\Contacts\Models\UpsertContactDto;
use HighLevel\Services\Contacts\Models\UpsertContactsSuccessfulResponseDto;
use HighLevel\Services\Contacts\Models\ContactsSearchSuccessfulResponseDto;
use HighLevel\Services\Contacts\Models\FollowersDTO;
use HighLevel\Services\Contacts\Models\CreateAddFollowersSuccessfulResponseDto;
use HighLevel\Services\Contacts\Models\DeleteFollowersSuccessfulResponseDto;
use HighLevel\Services\Contacts\Models\AddContactToCampaignDto;
use HighLevel\Services\Contacts\Models\CreateDeleteCantactsCampaignsSuccessfulResponseDto;
use HighLevel\Services\Contacts\Models\CreateWorkflowDto;
use HighLevel\Services\Contacts\Models\ContactsWorkflowSuccessfulResponseDto;
use HighLevel\Services\Contacts\Models\CreateContactDto;
use HighLevel\Services\Contacts\Models\CreateContactsSuccessfulResponseDto;

/**
 * Contacts Service
 * Documentation for Contacts API
 * 
 * @package HighLevel\Services\Contacts
 */
class Contacts
{
    /**
     * HighLevel client instance
     * @var HighLevel
     */
    private HighLevel $client;

    /**
     * Create a new Contacts service instance
     * 
     * @param HighLevel $client HighLevel client instance
     */
    public function __construct(HighLevel $client)
    {
        $this->client = $client;
    }

    /**
     * Search Contacts
     * Search contacts based on combinations of advanced filters. Documentation Link - https://doc.clickup.com/8631005/d/h/87cpx-158396/6e629989abe7fad
     * 
     * @param SearchBodyV2DTO $requestBody Request body data
     * @param array<string, mixed>|null $options Additional request options
     * @return mixed Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function searchContactsAdvanced(
        SearchBodyV2DTO $requestBody,
        ?array $options = null
    ): mixed {
        if ($requestBody !== null && is_object($requestBody) && method_exists($requestBody, 'toArray')) {
            $requestBody = $requestBody->toArray();
        }
        $paramDefs = [];
        $extracted = RequestUtils::extractParams([], $paramDefs);
        $requirements = ["bearer"];

        $url = RequestUtils::buildUrl('/contacts/search', $extracted['path']);
        
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
     * Get Duplicate Contact
     * Get Duplicate Contact.&lt;br/&gt;&lt;br/&gt;If &#x60;Allow Duplicate Contact&#x60; is disabled under Settings, the global unique identifier will be used for searching the contact. If the setting is enabled, first priority for search is &#x60;email&#x60; and the second priority will be &#x60;phone&#x60;.
     * 
     * @param array{
     *   locationId: string // Location Id
     *   number?: string // Phone Number - Pass in URL Encoded form. i.e +1423164516 will become `%2B1423164516`
     *   email?: string // Email - Pass in URL Encoded form. i.e test+abc@gmail.com will become `test%2Babc%40gmail.com`
     * } $params Request parameters
     * @param array<string, mixed>|null $options Additional request options
     * @return mixed Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function getDuplicateContact(
        array $params,
        ?array $options = null
    ): mixed {
        $paramDefs = [['name' => 'locationId', 'in' => 'query'], ['name' => 'number', 'in' => 'query'], ['name' => 'email', 'in' => 'query']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["bearer"];

        $url = RequestUtils::buildUrl('/contacts/search/duplicate', $extracted['path']);
        
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
     * Get all Tasks
     * Get all Tasks
     * 
     * @param array{
     *   contactId: string // Contact Id
     * } $params Request parameters
     * @param array<string, mixed>|null $options Additional request options
     * @return TasksListSuccessfulResponseDto Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function getAllTasks(
        array $params,
        ?array $options = null
    ): TasksListSuccessfulResponseDto {
        $paramDefs = [['name' => 'contactId', 'in' => 'path']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["bearer"];

        $url = RequestUtils::buildUrl('/contacts/{contactId}/tasks', $extracted['path']);
        
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
            
            return new TasksListSuccessfulResponseDto($responseData);
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
     * Create Task
     * Create Task
     * 
     * @param array{
     *   contactId: string // Contact Id
     * } $params Request parameters
     * @param CreateTaskParams $requestBody Request body data
     * @param array<string, mixed>|null $options Additional request options
     * @return TaskByIsSuccessfulResponseDto Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function createTask(
        array $params,
        CreateTaskParams $requestBody,
        ?array $options = null
    ): TaskByIsSuccessfulResponseDto {
        if ($requestBody !== null && is_object($requestBody) && method_exists($requestBody, 'toArray')) {
            $requestBody = $requestBody->toArray();
        }
        $paramDefs = [['name' => 'contactId', 'in' => 'path']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["bearer"];

        $url = RequestUtils::buildUrl('/contacts/{contactId}/tasks', $extracted['path']);
        
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
            
            return new TaskByIsSuccessfulResponseDto($responseData);
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
     * Get Task
     * Get Task
     * 
     * @param array{
     *   contactId: string // Contact Id
     *   taskId: string // Task Id
     * } $params Request parameters
     * @param array<string, mixed>|null $options Additional request options
     * @return TaskByIsSuccessfulResponseDto Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function getTask(
        array $params,
        ?array $options = null
    ): TaskByIsSuccessfulResponseDto {
        $paramDefs = [['name' => 'contactId', 'in' => 'path'], ['name' => 'taskId', 'in' => 'path']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["bearer"];

        $url = RequestUtils::buildUrl('/contacts/{contactId}/tasks/{taskId}', $extracted['path']);
        
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
            
            return new TaskByIsSuccessfulResponseDto($responseData);
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
     * Update Task
     * Update Task
     * 
     * @param array{
     *   contactId: string // Contact Id
     *   taskId: string // Task Id
     * } $params Request parameters
     * @param UpdateTaskBody $requestBody Request body data
     * @param array<string, mixed>|null $options Additional request options
     * @return TaskByIsSuccessfulResponseDto Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function updateTask(
        array $params,
        UpdateTaskBody $requestBody,
        ?array $options = null
    ): TaskByIsSuccessfulResponseDto {
        if ($requestBody !== null && is_object($requestBody) && method_exists($requestBody, 'toArray')) {
            $requestBody = $requestBody->toArray();
        }
        $paramDefs = [['name' => 'contactId', 'in' => 'path'], ['name' => 'taskId', 'in' => 'path']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["bearer"];

        $url = RequestUtils::buildUrl('/contacts/{contactId}/tasks/{taskId}', $extracted['path']);
        
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
            
            return new TaskByIsSuccessfulResponseDto($responseData);
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
     * Delete Task
     * Delete Task
     * 
     * @param array{
     *   contactId: string // Contact Id
     *   taskId: string // Task Id
     * } $params Request parameters
     * @param array<string, mixed>|null $options Additional request options
     * @return DeleteTaskSuccessfulResponseDto Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function deleteTask(
        array $params,
        ?array $options = null
    ): DeleteTaskSuccessfulResponseDto {
        $paramDefs = [['name' => 'contactId', 'in' => 'path'], ['name' => 'taskId', 'in' => 'path']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["bearer"];

        $url = RequestUtils::buildUrl('/contacts/{contactId}/tasks/{taskId}', $extracted['path']);
        
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
            
            return new DeleteTaskSuccessfulResponseDto($responseData);
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
     * Update Task Completed
     * Update Task Completed
     * 
     * @param array{
     *   contactId: string // Contact Id
     *   taskId: string // Task Id
     * } $params Request parameters
     * @param UpdateTaskStatusParams $requestBody Request body data
     * @param array<string, mixed>|null $options Additional request options
     * @return TaskByIsSuccessfulResponseDto Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function updateTaskCompleted(
        array $params,
        UpdateTaskStatusParams $requestBody,
        ?array $options = null
    ): TaskByIsSuccessfulResponseDto {
        if ($requestBody !== null && is_object($requestBody) && method_exists($requestBody, 'toArray')) {
            $requestBody = $requestBody->toArray();
        }
        $paramDefs = [['name' => 'contactId', 'in' => 'path'], ['name' => 'taskId', 'in' => 'path']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["bearer"];

        $url = RequestUtils::buildUrl('/contacts/{contactId}/tasks/{taskId}/completed', $extracted['path']);
        
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
            
            return new TaskByIsSuccessfulResponseDto($responseData);
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
     * Get Appointments for Contact
     * Get Appointments for Contact
     * 
     * @param array{
     *   contactId: string // Contact Id
     * } $params Request parameters
     * @param array<string, mixed>|null $options Additional request options
     * @return GetEventsSuccessfulResponseDto Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function getAppointmentsForContact(
        array $params,
        ?array $options = null
    ): GetEventsSuccessfulResponseDto {
        $paramDefs = [['name' => 'contactId', 'in' => 'path']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["bearer"];

        $url = RequestUtils::buildUrl('/contacts/{contactId}/appointments', $extracted['path']);
        
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
            
            return new GetEventsSuccessfulResponseDto($responseData);
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
     * Add Tags
     * Add Tags
     * 
     * @param array{
     *   contactId: string // Contact Id
     * } $params Request parameters
     * @param TagsDTO $requestBody Request body data
     * @param array<string, mixed>|null $options Additional request options
     * @return CreateAddTagSuccessfulResponseDto Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function addTags(
        array $params,
        TagsDTO $requestBody,
        ?array $options = null
    ): CreateAddTagSuccessfulResponseDto {
        if ($requestBody !== null && is_object($requestBody) && method_exists($requestBody, 'toArray')) {
            $requestBody = $requestBody->toArray();
        }
        $paramDefs = [['name' => 'contactId', 'in' => 'path']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["bearer"];

        $url = RequestUtils::buildUrl('/contacts/{contactId}/tags', $extracted['path']);
        
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
            
            return new CreateAddTagSuccessfulResponseDto($responseData);
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
     * Remove Tags
     * Remove Tags
     * 
     * @param array{
     *   contactId: string // Contact Id
     * } $params Request parameters
     * @param TagsDTO $requestBody Request body data
     * @param array<string, mixed>|null $options Additional request options
     * @return CreateDeleteTagSuccessfulResponseDto Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function removeTags(
        array $params,
        TagsDTO $requestBody,
        ?array $options = null
    ): CreateDeleteTagSuccessfulResponseDto {
        if ($requestBody !== null && is_object($requestBody) && method_exists($requestBody, 'toArray')) {
            $requestBody = $requestBody->toArray();
        }
        $paramDefs = [['name' => 'contactId', 'in' => 'path']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["bearer"];

        $url = RequestUtils::buildUrl('/contacts/{contactId}/tags', $extracted['path']);
        
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
            
            return new CreateDeleteTagSuccessfulResponseDto($responseData);
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
     * Get All Notes
     * Get All Notes
     * 
     * @param array{
     *   contactId: string // Contact Id
     * } $params Request parameters
     * @param array<string, mixed>|null $options Additional request options
     * @return GetNotesListSuccessfulResponseDto Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function getAllNotes(
        array $params,
        ?array $options = null
    ): GetNotesListSuccessfulResponseDto {
        $paramDefs = [['name' => 'contactId', 'in' => 'path']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["bearer"];

        $url = RequestUtils::buildUrl('/contacts/{contactId}/notes', $extracted['path']);
        
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
            
            return new GetNotesListSuccessfulResponseDto($responseData);
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
     * Create Note
     * Create Note
     * 
     * @param array{
     *   contactId: string // Contact Id
     * } $params Request parameters
     * @param NotesDTO $requestBody Request body data
     * @param array<string, mixed>|null $options Additional request options
     * @return GetCreateUpdateNoteSuccessfulResponseDto Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function createNote(
        array $params,
        NotesDTO $requestBody,
        ?array $options = null
    ): GetCreateUpdateNoteSuccessfulResponseDto {
        if ($requestBody !== null && is_object($requestBody) && method_exists($requestBody, 'toArray')) {
            $requestBody = $requestBody->toArray();
        }
        $paramDefs = [['name' => 'contactId', 'in' => 'path']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["bearer"];

        $url = RequestUtils::buildUrl('/contacts/{contactId}/notes', $extracted['path']);
        
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
            
            return new GetCreateUpdateNoteSuccessfulResponseDto($responseData);
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
     * Get Note
     * Get Note
     * 
     * @param array{
     *   contactId: string // Contact Id
     *   id: string // Note Id
     * } $params Request parameters
     * @param array<string, mixed>|null $options Additional request options
     * @return GetCreateUpdateNoteSuccessfulResponseDto Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function getNote(
        array $params,
        ?array $options = null
    ): GetCreateUpdateNoteSuccessfulResponseDto {
        $paramDefs = [['name' => 'contactId', 'in' => 'path'], ['name' => 'id', 'in' => 'path']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["bearer"];

        $url = RequestUtils::buildUrl('/contacts/{contactId}/notes/{id}', $extracted['path']);
        
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
            
            return new GetCreateUpdateNoteSuccessfulResponseDto($responseData);
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
     * Update Note
     * Update Note
     * 
     * @param array{
     *   contactId: string // Contact Id
     *   id: string // Note Id
     * } $params Request parameters
     * @param UpdateNoteDTO $requestBody Request body data
     * @param array<string, mixed>|null $options Additional request options
     * @return GetCreateUpdateNoteSuccessfulResponseDto Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function updateNote(
        array $params,
        UpdateNoteDTO $requestBody,
        ?array $options = null
    ): GetCreateUpdateNoteSuccessfulResponseDto {
        if ($requestBody !== null && is_object($requestBody) && method_exists($requestBody, 'toArray')) {
            $requestBody = $requestBody->toArray();
        }
        $paramDefs = [['name' => 'contactId', 'in' => 'path'], ['name' => 'id', 'in' => 'path']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["bearer"];

        $url = RequestUtils::buildUrl('/contacts/{contactId}/notes/{id}', $extracted['path']);
        
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
            
            return new GetCreateUpdateNoteSuccessfulResponseDto($responseData);
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
     * Delete Note
     * Delete Note
     * 
     * @param array{
     *   contactId: string // Contact Id
     *   id: string // Note Id
     * } $params Request parameters
     * @param array<string, mixed>|null $options Additional request options
     * @return DeleteNoteSuccessfulResponseDto Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function deleteNote(
        array $params,
        ?array $options = null
    ): DeleteNoteSuccessfulResponseDto {
        $paramDefs = [['name' => 'contactId', 'in' => 'path'], ['name' => 'id', 'in' => 'path']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["bearer"];

        $url = RequestUtils::buildUrl('/contacts/{contactId}/notes/{id}', $extracted['path']);
        
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
            
            return new DeleteNoteSuccessfulResponseDto($responseData);
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
     * Update Contacts Tags
     * Allows you to update tags to multiple contacts at once, you can add or remove tags from the contacts
     * 
     * @param UpdateTagsDTO $requestBody Request body data
     * @param array<string, mixed>|null $options Additional request options
     * @return UpdateTagsResponseDTO Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function createAssociation(
        UpdateTagsDTO $requestBody,
        ?array $options = null
    ): UpdateTagsResponseDTO {
        if ($requestBody !== null && is_object($requestBody) && method_exists($requestBody, 'toArray')) {
            $requestBody = $requestBody->toArray();
        }
        $paramDefs = [];
        $extracted = RequestUtils::extractParams([], $paramDefs);
        $requirements = [];

        $url = RequestUtils::buildUrl('/contacts/bulk/tags/update/{type}', $extracted['path']);
        
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
            
            return new UpdateTagsResponseDTO($responseData);
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
     * Add/Remove Contacts From Business
     * Add/Remove Contacts From Business . Passing a &#x60;null&#x60; businessId will remove the businessId from the contacts
     * 
     * @param ContactsBusinessUpdate $requestBody Request body data
     * @param array<string, mixed>|null $options Additional request options
     * @return ContactsBulkUpateResponse Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function addRemoveContactFromBusiness(
        ContactsBusinessUpdate $requestBody,
        ?array $options = null
    ): ContactsBulkUpateResponse {
        if ($requestBody !== null && is_object($requestBody) && method_exists($requestBody, 'toArray')) {
            $requestBody = $requestBody->toArray();
        }
        $paramDefs = [];
        $extracted = RequestUtils::extractParams([], $paramDefs);
        $requirements = [];

        $url = RequestUtils::buildUrl('/contacts/bulk/business', $extracted['path']);
        
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
            
            return new ContactsBulkUpateResponse($responseData);
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
     * Get Contact
     * Get Contact
     * 
     * @param array{
     *   contactId: string // Contact Id
     * } $params Request parameters
     * @param array<string, mixed>|null $options Additional request options
     * @return ContactsByIdSuccessfulResponseDto Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function getContact(
        array $params,
        ?array $options = null
    ): ContactsByIdSuccessfulResponseDto {
        $paramDefs = [['name' => 'contactId', 'in' => 'path']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["bearer"];

        $url = RequestUtils::buildUrl('/contacts/{contactId}', $extracted['path']);
        
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
            
            return new ContactsByIdSuccessfulResponseDto($responseData);
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
     * Update Contact
     * Please find the list of acceptable values for the &#x60;country&#x60; field  &lt;a href&#x3D;&quot;https://highlevel.stoplight.io/docs/integrations/ZG9jOjI4MzUzNDIy-country-list&quot; target&#x3D;&quot;_blank&quot;&gt;here&lt;/a&gt;
     * 
     * @param array{
     *   contactId: string // Contact Id
     * } $params Request parameters
     * @param UpdateContactDto $requestBody Request body data
     * @param array<string, mixed>|null $options Additional request options
     * @return UpdateContactsSuccessfulResponseDto Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function updateContact(
        array $params,
        UpdateContactDto $requestBody,
        ?array $options = null
    ): UpdateContactsSuccessfulResponseDto {
        if ($requestBody !== null && is_object($requestBody) && method_exists($requestBody, 'toArray')) {
            $requestBody = $requestBody->toArray();
        }
        $paramDefs = [['name' => 'contactId', 'in' => 'path']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["bearer"];

        $url = RequestUtils::buildUrl('/contacts/{contactId}', $extracted['path']);
        
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
            
            return new UpdateContactsSuccessfulResponseDto($responseData);
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
     * Delete Contact
     * Delete Contact
     * 
     * @param array{
     *   contactId: string // Contact Id
     * } $params Request parameters
     * @param array<string, mixed>|null $options Additional request options
     * @return DeleteContactsSuccessfulResponseDto Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function deleteContact(
        array $params,
        ?array $options = null
    ): DeleteContactsSuccessfulResponseDto {
        $paramDefs = [['name' => 'contactId', 'in' => 'path']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["bearer"];

        $url = RequestUtils::buildUrl('/contacts/{contactId}', $extracted['path']);
        
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
            
            return new DeleteContactsSuccessfulResponseDto($responseData);
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
     * Upsert Contact
     * Please find the list of acceptable values for the &#x60;country&#x60; field  &lt;a href&#x3D;&quot;https://highlevel.stoplight.io/docs/integrations/ZG9jOjI4MzUzNDIy-country-list&quot; target&#x3D;&quot;_blank&quot;&gt;here&lt;/a&gt;&lt;br/&gt;&lt;br/&gt;The Upsert API will adhere to the configuration defined under the “Allow Duplicate Contact” setting at the Location level. If the setting is configured to check both Email and Phone, the API will attempt to identify an existing contact based on the priority sequence specified in the setting, and will create or update the contact accordingly.&lt;br/&gt;&lt;br/&gt;If two separate contacts already exist—one with the same email and another with the same phone—and an upsert request includes both the email and phone, the API will update the contact that matches the first field in the configured sequence, and ignore the second field to prevent duplication.
     * 
     * @param UpsertContactDto $requestBody Request body data
     * @param array<string, mixed>|null $options Additional request options
     * @return UpsertContactsSuccessfulResponseDto Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function upsertContact(
        UpsertContactDto $requestBody,
        ?array $options = null
    ): UpsertContactsSuccessfulResponseDto {
        if ($requestBody !== null && is_object($requestBody) && method_exists($requestBody, 'toArray')) {
            $requestBody = $requestBody->toArray();
        }
        $paramDefs = [];
        $extracted = RequestUtils::extractParams([], $paramDefs);
        $requirements = ["bearer"];

        $url = RequestUtils::buildUrl('/contacts/upsert', $extracted['path']);
        
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
            
            return new UpsertContactsSuccessfulResponseDto($responseData);
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
     * Get Contacts By BusinessId
     * Get Contacts By BusinessId
     * 
     * @param array{
     *   businessId: string
     *   limit?: string
     *   locationId: string
     *   skip?: string
     *   query?: string
     * } $params Request parameters
     * @param array<string, mixed>|null $options Additional request options
     * @return ContactsSearchSuccessfulResponseDto Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function getContactsByBusinessId(
        array $params,
        ?array $options = null
    ): ContactsSearchSuccessfulResponseDto {
        $paramDefs = [['name' => 'businessId', 'in' => 'path'], ['name' => 'limit', 'in' => 'query'], ['name' => 'locationId', 'in' => 'query'], ['name' => 'skip', 'in' => 'query'], ['name' => 'query', 'in' => 'query']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["bearer"];

        $url = RequestUtils::buildUrl('/contacts/business/{businessId}', $extracted['path']);
        
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
            
            return new ContactsSearchSuccessfulResponseDto($responseData);
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
     * Add Followers
     * Add Followers
     * 
     * @param array{
     *   contactId: string // Contact Id
     * } $params Request parameters
     * @param FollowersDTO $requestBody Request body data
     * @param array<string, mixed>|null $options Additional request options
     * @return CreateAddFollowersSuccessfulResponseDto Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function addFollowersContact(
        array $params,
        FollowersDTO $requestBody,
        ?array $options = null
    ): CreateAddFollowersSuccessfulResponseDto {
        if ($requestBody !== null && is_object($requestBody) && method_exists($requestBody, 'toArray')) {
            $requestBody = $requestBody->toArray();
        }
        $paramDefs = [['name' => 'contactId', 'in' => 'path']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["bearer"];

        $url = RequestUtils::buildUrl('/contacts/{contactId}/followers', $extracted['path']);
        
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
            
            return new CreateAddFollowersSuccessfulResponseDto($responseData);
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
     * Remove Followers
     * Remove Followers
     * 
     * @param array{
     *   contactId: string // Contact Id
     * } $params Request parameters
     * @param FollowersDTO $requestBody Request body data
     * @param array<string, mixed>|null $options Additional request options
     * @return DeleteFollowersSuccessfulResponseDto Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function removeFollowersContact(
        array $params,
        FollowersDTO $requestBody,
        ?array $options = null
    ): DeleteFollowersSuccessfulResponseDto {
        if ($requestBody !== null && is_object($requestBody) && method_exists($requestBody, 'toArray')) {
            $requestBody = $requestBody->toArray();
        }
        $paramDefs = [['name' => 'contactId', 'in' => 'path']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["bearer"];

        $url = RequestUtils::buildUrl('/contacts/{contactId}/followers', $extracted['path']);
        
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
            
            return new DeleteFollowersSuccessfulResponseDto($responseData);
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
     * Add Contact to Campaign
     * Add contact to Campaign
     * 
     * @param array{
     *   contactId: string // Contact Id
     *   campaignId: string // Campaigns Id
     * } $params Request parameters
     * @param AddContactToCampaignDto $requestBody Request body data
     * @param array<string, mixed>|null $options Additional request options
     * @return CreateDeleteCantactsCampaignsSuccessfulResponseDto Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function addContactToCampaign(
        array $params,
        AddContactToCampaignDto $requestBody,
        ?array $options = null
    ): CreateDeleteCantactsCampaignsSuccessfulResponseDto {
        if ($requestBody !== null && is_object($requestBody) && method_exists($requestBody, 'toArray')) {
            $requestBody = $requestBody->toArray();
        }
        $paramDefs = [['name' => 'contactId', 'in' => 'path'], ['name' => 'campaignId', 'in' => 'path']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["bearer"];

        $url = RequestUtils::buildUrl('/contacts/{contactId}/campaigns/{campaignId}', $extracted['path']);
        
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
            
            return new CreateDeleteCantactsCampaignsSuccessfulResponseDto($responseData);
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
     * Remove Contact From Campaign
     * Remove Contact From Campaign
     * 
     * @param array{
     *   contactId: string // Contact Id
     *   campaignId: string // Campaigns Id
     * } $params Request parameters
     * @param array<string, mixed>|null $options Additional request options
     * @return CreateDeleteCantactsCampaignsSuccessfulResponseDto Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function removeContactFromCampaign(
        array $params,
        ?array $options = null
    ): CreateDeleteCantactsCampaignsSuccessfulResponseDto {
        $paramDefs = [['name' => 'contactId', 'in' => 'path'], ['name' => 'campaignId', 'in' => 'path']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["bearer"];

        $url = RequestUtils::buildUrl('/contacts/{contactId}/campaigns/{campaignId}', $extracted['path']);
        
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
            
            return new CreateDeleteCantactsCampaignsSuccessfulResponseDto($responseData);
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
     * Remove Contact From Every Campaign
     * Remove Contact From Every Campaign
     * 
     * @param array{
     *   contactId: string // Contact Id
     * } $params Request parameters
     * @param array<string, mixed>|null $options Additional request options
     * @return CreateDeleteCantactsCampaignsSuccessfulResponseDto Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function removeContactFromEveryCampaign(
        array $params,
        ?array $options = null
    ): CreateDeleteCantactsCampaignsSuccessfulResponseDto {
        $paramDefs = [['name' => 'contactId', 'in' => 'path']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["bearer"];

        $url = RequestUtils::buildUrl('/contacts/{contactId}/campaigns/removeAll', $extracted['path']);
        
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
            
            return new CreateDeleteCantactsCampaignsSuccessfulResponseDto($responseData);
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
     * Add Contact to Workflow
     * Add Contact to Workflow
     * 
     * @param array{
     *   contactId: string // Contact Id
     *   workflowId: string // Workflow Id
     * } $params Request parameters
     * @param CreateWorkflowDto $requestBody Request body data
     * @param array<string, mixed>|null $options Additional request options
     * @return ContactsWorkflowSuccessfulResponseDto Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function addContactToWorkflow(
        array $params,
        CreateWorkflowDto $requestBody,
        ?array $options = null
    ): ContactsWorkflowSuccessfulResponseDto {
        if ($requestBody !== null && is_object($requestBody) && method_exists($requestBody, 'toArray')) {
            $requestBody = $requestBody->toArray();
        }
        $paramDefs = [['name' => 'contactId', 'in' => 'path'], ['name' => 'workflowId', 'in' => 'path']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["bearer"];

        $url = RequestUtils::buildUrl('/contacts/{contactId}/workflow/{workflowId}', $extracted['path']);
        
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
            
            return new ContactsWorkflowSuccessfulResponseDto($responseData);
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
     * Delete Contact from Workflow
     * Delete Contact from Workflow
     * 
     * @param array{
     *   contactId: string // Contact Id
     *   workflowId: string // Workflow Id
     * } $params Request parameters
     * @param CreateWorkflowDto $requestBody Request body data
     * @param array<string, mixed>|null $options Additional request options
     * @return ContactsWorkflowSuccessfulResponseDto Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function deleteContactFromWorkflow(
        array $params,
        CreateWorkflowDto $requestBody,
        ?array $options = null
    ): ContactsWorkflowSuccessfulResponseDto {
        if ($requestBody !== null && is_object($requestBody) && method_exists($requestBody, 'toArray')) {
            $requestBody = $requestBody->toArray();
        }
        $paramDefs = [['name' => 'contactId', 'in' => 'path'], ['name' => 'workflowId', 'in' => 'path']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["bearer"];

        $url = RequestUtils::buildUrl('/contacts/{contactId}/workflow/{workflowId}', $extracted['path']);
        
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
            
            return new ContactsWorkflowSuccessfulResponseDto($responseData);
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
     * Create Contact
     * Please find the list of acceptable values for the &#x60;country&#x60; field  &lt;a href&#x3D;&quot;https://highlevel.stoplight.io/docs/integrations/ZG9jOjI4MzUzNDIy-country-list&quot; target&#x3D;&quot;_blank&quot;&gt;here&lt;/a&gt;
     * 
     * @param CreateContactDto $requestBody Request body data
     * @param array<string, mixed>|null $options Additional request options
     * @return CreateContactsSuccessfulResponseDto Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function createContact(
        CreateContactDto $requestBody,
        ?array $options = null
    ): CreateContactsSuccessfulResponseDto {
        if ($requestBody !== null && is_object($requestBody) && method_exists($requestBody, 'toArray')) {
            $requestBody = $requestBody->toArray();
        }
        $paramDefs = [];
        $extracted = RequestUtils::extractParams([], $paramDefs);
        $requirements = ["bearer"];

        $url = RequestUtils::buildUrl('/contacts/', $extracted['path']);
        
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
            
            return new CreateContactsSuccessfulResponseDto($responseData);
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
     * Get Contacts
     * Get Contacts

 **Note:** This API endpoint is deprecated. Please use the [Search Contacts](https://marketplace.gohighlevel.com/docs/ghl/contacts/search-contacts-advanced) endpoint instead.
     * @deprecated deprecated. Use the [Search Contacts](https://marketplace instead.
     * 
     * @param array{
     *   locationId: string // Location Id
     *   startAfterId?: string // Start After Id
     *   startAfter?: int // Start Afte
     *   query?: string // Contact Query
     *   limit?: int // Limit Per Page records count. will allow maximum up to 100 and default will be 20
     * } $params Request parameters
     * @param array<string, mixed>|null $options Additional request options
     * @return ContactsSearchSuccessfulResponseDto Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function getContacts(
        array $params,
        ?array $options = null
    ): ContactsSearchSuccessfulResponseDto {
        $paramDefs = [['name' => 'locationId', 'in' => 'query'], ['name' => 'startAfterId', 'in' => 'query'], ['name' => 'startAfter', 'in' => 'query'], ['name' => 'query', 'in' => 'query'], ['name' => 'limit', 'in' => 'query']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["bearer"];

        $url = RequestUtils::buildUrl('/contacts/', $extracted['path']);
        
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
            
            return new ContactsSearchSuccessfulResponseDto($responseData);
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

