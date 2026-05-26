<?php

namespace HighLevel\Services\ConversationAi;

use HighLevel\HighLevel;
use HighLevel\GHLError;
use HighLevel\Utils\RequestUtils;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Exception\RequestException;
use HighLevel\Services\ConversationAi\Models\CreateActionDTO;
use HighLevel\Services\ConversationAi\Models\CreateActionResponseDTO;
use HighLevel\Services\ConversationAi\Models\FetchActionsForEmployeeResponseDTO;
use HighLevel\Services\ConversationAi\Models\FetchActionDetailsResponseDTO;
use HighLevel\Services\ConversationAi\Models\UpdateActionResponseDTO;
use HighLevel\Services\ConversationAi\Models\DeleteActionResponseDTO;
use HighLevel\Services\ConversationAi\Models\UpdateFollowupSettingsDTO;
use HighLevel\Services\ConversationAi\Models\CreateEmployeeDto;
use HighLevel\Services\ConversationAi\Models\EmployeeResponseDTO;
use HighLevel\Services\ConversationAi\Models\SearchEmployeeResponseDTO;
use HighLevel\Services\ConversationAi\Models\UpdateEmployeeDto;
use HighLevel\Services\ConversationAi\Models\DeleteEmployeeResponseDTO;
use HighLevel\Services\ConversationAi\Models\FetchAIResponseDetailsResponseDTO;

/**
 * ConversationAi Service
 * Documentation for AI Employees API
 * 
 * @package HighLevel\Services\ConversationAi
 */
class ConversationAi
{
    /**
     * HighLevel client instance
     * @var HighLevel
     */
    private HighLevel $client;

    /**
     * Create a new ConversationAi service instance
     * 
     * @param HighLevel $client HighLevel client instance
     */
    public function __construct(HighLevel $client)
    {
        $this->client = $client;
    }

    /**
     * Attach Action to Agent
     * Creates and attach a new action for an AI agent. Actions define specific tasks or behaviors that the agent can perform, such as booking appointments, sending follow-ups, or collecting information.
     * 
     * @param array{
     *   agentId: string
     * } $params Request parameters
     * @param CreateActionDTO $requestBody Request body data
     * @param array<string, mixed>|null $options Additional request options
     * @return CreateActionResponseDTO Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function createAction(
        array $params,
        CreateActionDTO $requestBody,
        ?array $options = null
    ): CreateActionResponseDTO {
        if ($requestBody !== null && is_object($requestBody) && method_exists($requestBody, 'toArray')) {
            $requestBody = $requestBody->toArray();
        }
        $paramDefs = [['name' => 'agentId', 'in' => 'path']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["bearer"];

        $url = RequestUtils::buildUrl('/conversation-ai/agents/{agentId}/actions', $extracted['path']);
        
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
            
            return new CreateActionResponseDTO($responseData);
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
     * List Actions for an Agent
     * List for actions for an agent
     * 
     * @param array{
     *   agentId: string
     * } $params Request parameters
     * @param array<string, mixed>|null $options Additional request options
     * @return FetchActionsForEmployeeResponseDTO Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function listActions(
        array $params,
        ?array $options = null
    ): FetchActionsForEmployeeResponseDTO {
        $paramDefs = [['name' => 'agentId', 'in' => 'path']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["bearer"];

        $url = RequestUtils::buildUrl('/conversation-ai/agents/{agentId}/actions/list', $extracted['path']);
        
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
            
            return new FetchActionsForEmployeeResponseDTO($responseData);
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
     * Get Action by ID
     * Retrieves detailed information about a specific action using its unique identifier. Returns the action configuration, associated agents, and performance metrics.
     * 
     * @param array{
     *   actionId: string // The unique identifier of the action ID Attached to the agent
     *   agentId: string
     * } $params Request parameters
     * @param array<string, mixed>|null $options Additional request options
     * @return FetchActionDetailsResponseDTO Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function getActionById(
        array $params,
        ?array $options = null
    ): FetchActionDetailsResponseDTO {
        $paramDefs = [['name' => 'actionId', 'in' => 'path'], ['name' => 'agentId', 'in' => 'path']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["bearer"];

        $url = RequestUtils::buildUrl('/conversation-ai/agents/{agentId}/actions/{actionId}', $extracted['path']);
        
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
            
            return new FetchActionDetailsResponseDTO($responseData);
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
     * Update Action
     * Updates an existing action&#x27;s configuration. This includes modifying the action name, description, trigger conditions, and behavior settings.
     * 
     * @param array{
     *   actionId: string // The unique identifier of the action ID Attached to the agent
     *   agentId: string
     * } $params Request parameters
     * @param CreateActionDTO $requestBody Request body data
     * @param array<string, mixed>|null $options Additional request options
     * @return UpdateActionResponseDTO Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function updateAction(
        array $params,
        CreateActionDTO $requestBody,
        ?array $options = null
    ): UpdateActionResponseDTO {
        if ($requestBody !== null && is_object($requestBody) && method_exists($requestBody, 'toArray')) {
            $requestBody = $requestBody->toArray();
        }
        $paramDefs = [['name' => 'actionId', 'in' => 'path'], ['name' => 'agentId', 'in' => 'path']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["bearer"];

        $url = RequestUtils::buildUrl('/conversation-ai/agents/{agentId}/actions/{actionId}', $extracted['path']);
        
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
            
            return new UpdateActionResponseDTO($responseData);
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
     * Remove Action from Agent
     * Permanently deletes an action. This will remove the action from all associated agents and cannot be undone.
     * 
     * @param array{
     *   actionId: string // The unique identifier of the action ID Attached to the agent
     *   agentId: string
     * } $params Request parameters
     * @param array<string, mixed>|null $options Additional request options
     * @return DeleteActionResponseDTO Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function deleteAction(
        array $params,
        ?array $options = null
    ): DeleteActionResponseDTO {
        $paramDefs = [['name' => 'actionId', 'in' => 'path'], ['name' => 'agentId', 'in' => 'path']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["bearer"];

        $url = RequestUtils::buildUrl('/conversation-ai/agents/{agentId}/actions/{actionId}', $extracted['path']);
        
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
            
            return new DeleteActionResponseDTO($responseData);
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
     * Update Followup Settings
     * Update the followup settings for an action
     * 
     * @param array{
     *   agentId: string
     * } $params Request parameters
     * @param UpdateFollowupSettingsDTO $requestBody Request body data
     * @param array<string, mixed>|null $options Additional request options
     * @return UpdateActionResponseDTO Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function updateFollowupSettings(
        array $params,
        UpdateFollowupSettingsDTO $requestBody,
        ?array $options = null
    ): UpdateActionResponseDTO {
        if ($requestBody !== null && is_object($requestBody) && method_exists($requestBody, 'toArray')) {
            $requestBody = $requestBody->toArray();
        }
        $paramDefs = [['name' => 'agentId', 'in' => 'path']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["bearer"];

        $url = RequestUtils::buildUrl('/conversation-ai/agents/{agentId}/followup-settings', $extracted['path']);
        
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
                'PATCH',
                $url,
                $requestOptions
            );

            $body = (string) $response->getBody();
            $responseData = json_decode($body, true);
            
            return new UpdateActionResponseDTO($responseData);
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
     * Create an Agent
     * Creates a new AI agent for the location. The agent will be created with the specified configuration including name, role, actions, and behavior settings.
     * 
     * @param CreateEmployeeDto $requestBody Request body data
     * @param array<string, mixed>|null $options Additional request options
     * @return EmployeeResponseDTO Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function createAgent(
        CreateEmployeeDto $requestBody,
        ?array $options = null
    ): EmployeeResponseDTO {
        if ($requestBody !== null && is_object($requestBody) && method_exists($requestBody, 'toArray')) {
            $requestBody = $requestBody->toArray();
        }
        $paramDefs = [];
        $extracted = RequestUtils::extractParams([], $paramDefs);
        $requirements = ["bearer"];

        $url = RequestUtils::buildUrl('/conversation-ai/agents', $extracted['path']);
        
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
            
            return new EmployeeResponseDTO($responseData);
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
     * Search Agents
     * Searches for AI agents based on various criteria including name, status, and configuration. Supports advanced filtering and full-text search capabilities.
     * 
     * @param array{
     *   startAfter?: string // Start after is the agent id to start after, Serving as skip, send empty when first page
     *   limit?: int // Records per page
     *   query?: string // query to search on agent name, must be provided in lowercase
     * } $params Request parameters
     * @param array<string, mixed>|null $options Additional request options
     * @return SearchEmployeeResponseDTO Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function searchAgent(
        array $params,
        ?array $options = null
    ): SearchEmployeeResponseDTO {
        $paramDefs = [['name' => 'startAfter', 'in' => 'query'], ['name' => 'limit', 'in' => 'query'], ['name' => 'query', 'in' => 'query']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["bearer"];

        $url = RequestUtils::buildUrl('/conversation-ai/agents/search', $extracted['path']);
        
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
            
            return new SearchEmployeeResponseDTO($responseData);
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
     * Update Agent
     * Updates an existing AI agent&#x27;s configuration. All fields in the agent configuration can be updated including name, status, actions, and behavior settings.
     * 
     * @param array{
     *   agentId: string // Conversations AI agent id
     * } $params Request parameters
     * @param UpdateEmployeeDto $requestBody Request body data
     * @param array<string, mixed>|null $options Additional request options
     * @return EmployeeResponseDTO Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function updateAgent(
        array $params,
        UpdateEmployeeDto $requestBody,
        ?array $options = null
    ): EmployeeResponseDTO {
        if ($requestBody !== null && is_object($requestBody) && method_exists($requestBody, 'toArray')) {
            $requestBody = $requestBody->toArray();
        }
        $paramDefs = [['name' => 'agentId', 'in' => 'path']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["bearer"];

        $url = RequestUtils::buildUrl('/conversation-ai/agents/{agentId}', $extracted['path']);
        
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
            
            return new EmployeeResponseDTO($responseData);
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
     * Get Agent
     * Retrieves a specific AI agent by its ID. Returns the complete agent configuration including name, status, actions, and settings.
     * 
     * @param array{
     *   agentId: string // Conversations AI agent id
     * } $params Request parameters
     * @param array<string, mixed>|null $options Additional request options
     * @return EmployeeResponseDTO Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function getAgent(
        array $params,
        ?array $options = null
    ): EmployeeResponseDTO {
        $paramDefs = [['name' => 'agentId', 'in' => 'path']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["bearer"];

        $url = RequestUtils::buildUrl('/conversation-ai/agents/{agentId}', $extracted['path']);
        
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
            
            return new EmployeeResponseDTO($responseData);
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
     * Delete Agent
     * Deletes an AI agent permanently. This action cannot be undone. All associated configurations and conversation history will be removed.
     * 
     * @param array{
     *   agentId: string // Conversations AI agent id
     * } $params Request parameters
     * @param array<string, mixed>|null $options Additional request options
     * @return DeleteEmployeeResponseDTO Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function deleteAgent(
        array $params,
        ?array $options = null
    ): DeleteEmployeeResponseDTO {
        $paramDefs = [['name' => 'agentId', 'in' => 'path']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["bearer"];

        $url = RequestUtils::buildUrl('/conversation-ai/agents/{agentId}', $extracted['path']);
        
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
            
            return new DeleteEmployeeResponseDTO($responseData);
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
     * Get the generation details
     * Retrieves detailed information about AI responses including the System Prompt, Conversation history, Knowledge base, website, FAQ chunks, and Rich Text chunks.
     * 
     * @param array{
     *   messageId: string // Message Id
     *   source: string
     * } $params Request parameters
     * @param array<string, mixed>|null $options Additional request options
     * @return FetchAIResponseDetailsResponseDTO Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function getGenerationDetails(
        array $params,
        ?array $options = null
    ): FetchAIResponseDetailsResponseDTO {
        $paramDefs = [['name' => 'messageId', 'in' => 'query'], ['name' => 'source', 'in' => 'query']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["bearer"];

        $url = RequestUtils::buildUrl('/conversation-ai/generations', $extracted['path']);
        
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
            
            return new FetchAIResponseDetailsResponseDTO($responseData);
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

