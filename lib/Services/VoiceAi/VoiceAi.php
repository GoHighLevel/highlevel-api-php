<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\VoiceAi;

use HighLevel\HighLevel;
use HighLevel\GHLError;
use HighLevel\Utils\RequestUtils;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Exception\RequestException;
use HighLevel\Services\VoiceAi\Models\AgentCreationRequestDTO;
use HighLevel\Services\VoiceAi\Models\CreateAgentResponseDTO;
use HighLevel\Services\VoiceAi\Models\GetAgentsResponseDTO;
use HighLevel\Services\VoiceAi\Models\PatchAgentDTO;
use HighLevel\Services\VoiceAi\Models\PatchAgentResponseDTO;
use HighLevel\Services\VoiceAi\Models\GetAgentResponseDTO;
use HighLevel\Services\VoiceAi\Models\CallLogsResponseDTO;
use HighLevel\Services\VoiceAi\Models\CallLogDTO;
use HighLevel\Services\VoiceAi\Models\CreateSingleActionDTO;
use HighLevel\Services\VoiceAi\Models\CreateActionResponseDTO;
use HighLevel\Services\VoiceAi\Models\UpdateSingleActionDTO;
use HighLevel\Services\VoiceAi\Models\UpdateActionResponseDTO;
use HighLevel\Services\VoiceAi\Models\GetActionResponseDTO;

/**
 * VoiceAi Service
 * Documentation for Voice AI API
 * 
 * @package HighLevel\Services\VoiceAi
 */
class VoiceAi
{
    /**
     * HighLevel client instance
     * @var HighLevel
     */
    private HighLevel $client;

    /**
     * Create a new VoiceAi service instance
     * 
     * @param HighLevel $client HighLevel client instance
     */
    public function __construct(HighLevel $client)
    {
        $this->client = $client;
    }

    /**
     * Create Agent
     * Create a new voice AI agent configuration and settings
     * 
     * @param AgentCreationRequestDTO $requestBody Request body data
     * @param array<string, mixed>|null $options Additional request options
     * @return CreateAgentResponseDTO Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function createAgent(
        $requestBody,
        ?array $options = null
    ): CreateAgentResponseDTO {
        if ($requestBody !== null && is_object($requestBody) && method_exists($requestBody, 'toArray')) {
            $requestBody = $requestBody->toArray();
        }
        $paramDefs = [];
        $extracted = RequestUtils::extractParams([], $paramDefs);
        $requirements = ["bearer"];

        $url = RequestUtils::buildUrl('/voice-ai/agents', $extracted['path']);
        
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
            
            return new CreateAgentResponseDTO($responseData);
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
     * List Agents
     * Retrieve a paginated list of agents for given location.
     * 
     * @param array{
     *   page?: int // Page number starting from 1
     *   pageSize?: int // Number of items per page
     *   locationId: string // Location ID
     *   query?: string // Query
     * } $params Request parameters
     * @param array<string, mixed>|null $options Additional request options
     * @return GetAgentsResponseDTO Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function getAgents(
        array $params,
        ?array $options = null
    ): GetAgentsResponseDTO {
        $paramDefs = [['name' => 'page', 'in' => 'query'], ['name' => 'pageSize', 'in' => 'query'], ['name' => 'locationId', 'in' => 'query'], ['name' => 'query', 'in' => 'query']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["bearer"];

        $url = RequestUtils::buildUrl('/voice-ai/agents', $extracted['path']);
        
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
            
            return new GetAgentsResponseDTO($responseData);
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
     * Patch Agent
     * Partially update an existing voice AI agent
     * 
     * @param array{
     *   agentId: string // Unique agent identifier
     *   locationId: string // Location ID
     * } $params Request parameters
     * @param PatchAgentDTO $requestBody Request body data
     * @param array<string, mixed>|null $options Additional request options
     * @return PatchAgentResponseDTO Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function patchAgent(
        array $params,
        $requestBody,
        ?array $options = null
    ): PatchAgentResponseDTO {
        if ($requestBody !== null && is_object($requestBody) && method_exists($requestBody, 'toArray')) {
            $requestBody = $requestBody->toArray();
        }
        $paramDefs = [['name' => 'agentId', 'in' => 'path'], ['name' => 'locationId', 'in' => 'query']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["bearer"];

        $url = RequestUtils::buildUrl('/voice-ai/agents/{agentId}', $extracted['path']);
        
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
            
            return new PatchAgentResponseDTO($responseData);
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
     * Retrieve detailed configuration and settings for a specific voice AI agent
     * 
     * @param array{
     *   agentId: string // Unique agent identifier
     *   locationId: string // Location ID
     * } $params Request parameters
     * @param array<string, mixed>|null $options Additional request options
     * @return GetAgentResponseDTO Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function getAgent(
        array $params,
        ?array $options = null
    ): GetAgentResponseDTO {
        $paramDefs = [['name' => 'agentId', 'in' => 'path'], ['name' => 'locationId', 'in' => 'query']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["bearer"];

        $url = RequestUtils::buildUrl('/voice-ai/agents/{agentId}', $extracted['path']);
        
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
            
            return new GetAgentResponseDTO($responseData);
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
     * Delete a voice AI agent and all its configurations
     * 
     * @param array{
     *   agentId: string // Unique agent identifier
     *   locationId: string // Location ID
     * } $params Request parameters
     * @param array<string, mixed>|null $options Additional request options
     * @return mixed Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function deleteAgent(
        array $params,
        ?array $options = null
    ) {
        $paramDefs = [['name' => 'agentId', 'in' => 'path'], ['name' => 'locationId', 'in' => 'query']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["bearer"];

        $url = RequestUtils::buildUrl('/voice-ai/agents/{agentId}', $extracted['path']);
        
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
     * List Call Logs
     * Returns call logs for Voice AI agents scoped to a location. Supports filtering by agent, contact, call type, action types, and date range (interpreted in the provided IANA timezone). Also supports sorting and 1-based pagination.
     * 
     * @param array{
     *   locationId: string // Location identifier. Filters results to this location.
     *   agentId?: string // Agent identifier. When provided, returns logs for this agent only.
     *   contactId?: string // Contact IDs (comma-separated) to filter by.
     *   callType?: string // Call type filter.
     *   startDate?: int // Start date filter (Unix timestamp). Must be less than endDate. Both startDate and endDate must be provided together.
     *   endDate?: int // End date filter (Unix timestamp). Must be greater than startDate. Both startDate and endDate must be provided together.
     *   actionType?: string // Action type filter for call logs (comma-separated ACTION_TYPE values)
     *   sortBy?: string // Field to sort by. Defaults to newest if omitted.
     *   sort?: string // Sort direction. Applies only when sortBy is provided.
     *   page?: int // Page number (1-based).
     *   pageSize?: int // Page size (max 50).
     * } $params Request parameters
     * @param array<string, mixed>|null $options Additional request options
     * @return CallLogsResponseDTO Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function getCallLogs(
        array $params,
        ?array $options = null
    ): CallLogsResponseDTO {
        $paramDefs = [['name' => 'locationId', 'in' => 'query'], ['name' => 'agentId', 'in' => 'query'], ['name' => 'contactId', 'in' => 'query'], ['name' => 'callType', 'in' => 'query'], ['name' => 'startDate', 'in' => 'query'], ['name' => 'endDate', 'in' => 'query'], ['name' => 'actionType', 'in' => 'query'], ['name' => 'sortBy', 'in' => 'query'], ['name' => 'sort', 'in' => 'query'], ['name' => 'page', 'in' => 'query'], ['name' => 'pageSize', 'in' => 'query']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["bearer"];

        $url = RequestUtils::buildUrl('/voice-ai/dashboard/call-logs', $extracted['path']);
        
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
            
            return new CallLogsResponseDTO($responseData);
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
     * Get Call Log
     * Returns a call log by callId.
     * 
     * @param array{
     *   callId: string // Call ID
     *   locationId: string // Location ID
     * } $params Request parameters
     * @param array<string, mixed>|null $options Additional request options
     * @return CallLogDTO Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function getCallLog(
        array $params,
        ?array $options = null
    ): CallLogDTO {
        $paramDefs = [['name' => 'callId', 'in' => 'path'], ['name' => 'locationId', 'in' => 'query']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["bearer"];

        $url = RequestUtils::buildUrl('/voice-ai/dashboard/call-logs/{callId}', $extracted['path']);
        
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
            
            return new CallLogDTO($responseData);
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
     * Create Agent Action
     * Create a new action for a voice AI agent. Actions define specific behaviors and capabilities for the agent during calls.
     * 
     * @param CreateSingleActionDTO $requestBody Request body data
     * @param array<string, mixed>|null $options Additional request options
     * @return CreateActionResponseDTO Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function createAction(
        $requestBody,
        ?array $options = null
    ): CreateActionResponseDTO {
        if ($requestBody !== null && is_object($requestBody) && method_exists($requestBody, 'toArray')) {
            $requestBody = $requestBody->toArray();
        }
        $paramDefs = [];
        $extracted = RequestUtils::extractParams([], $paramDefs);
        $requirements = ["bearer"];

        $url = RequestUtils::buildUrl('/voice-ai/actions', $extracted['path']);
        
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
     * Update Agent Action
     * Update an existing action for a voice AI agent. Modifies the behavior and configuration of an agent action.
     * 
     * @param array{
     *   actionId: string // Unique identifier for the action
     * } $params Request parameters
     * @param UpdateSingleActionDTO $requestBody Request body data
     * @param array<string, mixed>|null $options Additional request options
     * @return UpdateActionResponseDTO Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function updateAction(
        array $params,
        $requestBody,
        ?array $options = null
    ): UpdateActionResponseDTO {
        if ($requestBody !== null && is_object($requestBody) && method_exists($requestBody, 'toArray')) {
            $requestBody = $requestBody->toArray();
        }
        $paramDefs = [['name' => 'actionId', 'in' => 'path']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["bearer"];

        $url = RequestUtils::buildUrl('/voice-ai/actions/{actionId}', $extracted['path']);
        
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
     * Get Agent Action
     * Retrieve details of a specific action by its ID. Returns the action configuration including actionParameters.
     * 
     * @param array{
     *   actionId: string // Unique identifier for the action
     *   locationId: string // Location ID
     * } $params Request parameters
     * @param array<string, mixed>|null $options Additional request options
     * @return GetActionResponseDTO Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function getAction(
        array $params,
        ?array $options = null
    ): GetActionResponseDTO {
        $paramDefs = [['name' => 'actionId', 'in' => 'path'], ['name' => 'locationId', 'in' => 'query']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["bearer"];

        $url = RequestUtils::buildUrl('/voice-ai/actions/{actionId}', $extracted['path']);
        
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
            
            return new GetActionResponseDTO($responseData);
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
     * Delete Agent Action
     * Delete an existing action from a voice AI agent. This permanently removes the action and its configuration.
     * 
     * @param array{
     *   actionId: string // Unique identifier for the action
     *   locationId: string // Location ID
     *   agentId: string // Agent ID the action is attached to
     * } $params Request parameters
     * @param array<string, mixed>|null $options Additional request options
     * @return mixed Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function deleteAction(
        array $params,
        ?array $options = null
    ) {
        $paramDefs = [['name' => 'actionId', 'in' => 'path'], ['name' => 'locationId', 'in' => 'query'], ['name' => 'agentId', 'in' => 'query']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["bearer"];

        $url = RequestUtils::buildUrl('/voice-ai/actions/{actionId}', $extracted['path']);
        
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

}

