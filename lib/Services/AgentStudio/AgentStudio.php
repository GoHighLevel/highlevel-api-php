<?php

namespace HighLevel\Services\AgentStudio;

use HighLevel\HighLevel;
use HighLevel\GHLError;
use HighLevel\Utils\RequestUtils;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Exception\RequestException;
use HighLevel\Services\AgentStudio\Models\CreatePublicAgentDTO;
use HighLevel\Services\AgentStudio\Models\CreatePublicAgentResponseDTO;
use HighLevel\Services\AgentStudio\Models\GetPublishedAgentsResponseDTO;
use HighLevel\Services\AgentStudio\Models\UpdatePublicAgentVersionDTO;
use HighLevel\Services\AgentStudio\Models\UpdatePublicAgentResponseDTO;
use HighLevel\Services\AgentStudio\Models\UpdatePublicAgentMetadataDTO;
use HighLevel\Services\AgentStudio\Models\DeletePublicAgentResponseDTO;
use HighLevel\Services\AgentStudio\Models\GetAgentByIdResponseDTO;
use HighLevel\Services\AgentStudio\Models\PromoteAndPublishDTO;
use HighLevel\Services\AgentStudio\Models\PromoteAndPublishResponseDTO;
use HighLevel\Services\AgentStudio\Models\ExecutePublicAgentDTO;
use HighLevel\Services\AgentStudio\Models\ExecutePublicAgentResponseDTO;

/**
 * AgentStudio Service
 * Documentation for Agent Studio APIs
 * 
 * @package HighLevel\Services\AgentStudio
 */
class AgentStudio
{
    /**
     * HighLevel client instance
     * @var HighLevel
     */
    private HighLevel $client;

    /**
     * Create a new AgentStudio service instance
     * 
     * @param HighLevel $client HighLevel client instance
     */
    public function __construct(HighLevel $client)
    {
        $this->client = $client;
    }

    /**
     * Create Agent
     * Creates a new agent with staging version. The agent will be created with an initial staging version that can later be promoted to production. 
     * 
     * @param array{
     *   source?: string
     * } $params Request parameters
     * @param CreatePublicAgentDTO $requestBody Request body data
     * @param array<string, mixed>|null $options Additional request options
     * @return CreatePublicAgentResponseDTO Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function createAgent(
        array $params,
        CreatePublicAgentDTO $requestBody,
        ?array $options = null
    ): CreatePublicAgentResponseDTO {
        if ($requestBody !== null && is_object($requestBody) && method_exists($requestBody, 'toArray')) {
            $requestBody = $requestBody->toArray();
        }
        $paramDefs = [['name' => 'source', 'in' => 'query']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["Location-Access"];

        $url = RequestUtils::buildUrl('/agent-studio/agent', $extracted['path']);
        
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
            
            return new CreatePublicAgentResponseDTO($responseData);
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
     * Lists all active agents for the specified location. locationId is required parameter to ensure optimal performance. Supports pagination using limit and offset. Optionally filter by isPublished&#x3D;true to return only agents with a published production version.
     * 
     * @param array{
     *   locationId: string
     *   isPublished?: string // Optional filter to return only agents with a published production version
     *   limit: string
     *   offset: string
     *   source?: string
     * } $params Request parameters
     * @param array<string, mixed>|null $options Additional request options
     * @return GetPublishedAgentsResponseDTO Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function getAgents(
        array $params,
        ?array $options = null
    ): GetPublishedAgentsResponseDTO {
        $paramDefs = [['name' => 'locationId', 'in' => 'query'], ['name' => 'isPublished', 'in' => 'query'], ['name' => 'limit', 'in' => 'query'], ['name' => 'offset', 'in' => 'query'], ['name' => 'source', 'in' => 'query']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["Location-Access"];

        $url = RequestUtils::buildUrl('/agent-studio/agent', $extracted['path']);
        
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
            
            return new GetPublishedAgentsResponseDTO($responseData);
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
     * Updates a specific agent version by versionId. Supports updating nodes, edges, variables, and configuration. 
     * 
     * @param array{
     *   versionId: string
     *   source?: string
     * } $params Request parameters
     * @param UpdatePublicAgentVersionDTO $requestBody Request body data
     * @param array<string, mixed>|null $options Additional request options
     * @return UpdatePublicAgentResponseDTO Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function updateAgentVersion(
        array $params,
        UpdatePublicAgentVersionDTO $requestBody,
        ?array $options = null
    ): UpdatePublicAgentResponseDTO {
        if ($requestBody !== null && is_object($requestBody) && method_exists($requestBody, 'toArray')) {
            $requestBody = $requestBody->toArray();
        }
        $paramDefs = [['name' => 'versionId', 'in' => 'path'], ['name' => 'source', 'in' => 'query']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["Location-Access"];

        $url = RequestUtils::buildUrl('/agent-studio/agent/versions/{versionId}', $extracted['path']);
        
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
            
            return new UpdatePublicAgentResponseDTO($responseData);
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
     * Update Agent Metadata
     * Updates agent metadata such as name, description, and status. 
     * 
     * @param array{
     *   agentId: string
     *   source?: string
     * } $params Request parameters
     * @param UpdatePublicAgentMetadataDTO $requestBody Request body data
     * @param array<string, mixed>|null $options Additional request options
     * @return UpdatePublicAgentResponseDTO Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function updateAgentMetadata(
        array $params,
        UpdatePublicAgentMetadataDTO $requestBody,
        ?array $options = null
    ): UpdatePublicAgentResponseDTO {
        if ($requestBody !== null && is_object($requestBody) && method_exists($requestBody, 'toArray')) {
            $requestBody = $requestBody->toArray();
        }
        $paramDefs = [['name' => 'agentId', 'in' => 'path'], ['name' => 'source', 'in' => 'query']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["Location-Access"];

        $url = RequestUtils::buildUrl('/agent-studio/agent/{agentId}', $extracted['path']);
        
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
            
            return new UpdatePublicAgentResponseDTO($responseData);
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
     * Deletes an agent and all its versions. 
     * 
     * @param array{
     *   agentId: string
     *   locationId: string
     *   source?: string
     * } $params Request parameters
     * @param array<string, mixed>|null $options Additional request options
     * @return DeletePublicAgentResponseDTO Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function deleteAgent(
        array $params,
        ?array $options = null
    ): DeletePublicAgentResponseDTO {
        $paramDefs = [['name' => 'agentId', 'in' => 'path'], ['name' => 'locationId', 'in' => 'query'], ['name' => 'source', 'in' => 'query']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["Location-Access"];

        $url = RequestUtils::buildUrl('/agent-studio/agent/{agentId}', $extracted['path']);
        
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
            
            return new DeletePublicAgentResponseDTO($responseData);
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
     * Gets a specific agent by its ID for the specified location with all its versions. Returns complete agent metadata and all non-deleted versions (draft, staging, production). locationId is required parameter. The agent must have active status.
     * 
     * @param array{
     *   agentId: string
     *   locationId: string
     *   source?: string
     * } $params Request parameters
     * @param array<string, mixed>|null $options Additional request options
     * @return GetAgentByIdResponseDTO Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function getAgentById(
        array $params,
        ?array $options = null
    ): GetAgentByIdResponseDTO {
        $paramDefs = [['name' => 'agentId', 'in' => 'path'], ['name' => 'locationId', 'in' => 'query'], ['name' => 'source', 'in' => 'query']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["Location-Access"];

        $url = RequestUtils::buildUrl('/agent-studio/agent/{agentId}', $extracted['path']);
        
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
            
            return new GetAgentByIdResponseDTO($responseData);
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
     * Promote to Production
     * Promotes a draft version to production.
     * 
     * @param array{
     *   versionId: string
     *   source?: string
     * } $params Request parameters
     * @param PromoteAndPublishDTO $requestBody Request body data
     * @param array<string, mixed>|null $options Additional request options
     * @return PromoteAndPublishResponseDTO Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function promoteAndPublish(
        array $params,
        PromoteAndPublishDTO $requestBody,
        ?array $options = null
    ): PromoteAndPublishResponseDTO {
        if ($requestBody !== null && is_object($requestBody) && method_exists($requestBody, 'toArray')) {
            $requestBody = $requestBody->toArray();
        }
        $paramDefs = [['name' => 'versionId', 'in' => 'path'], ['name' => 'source', 'in' => 'query']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["Location-Access"];

        $url = RequestUtils::buildUrl('/agent-studio/agent/versions/{versionId}/publish', $extracted['path']);
        
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
            
            return new PromoteAndPublishResponseDTO($responseData);
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
     * Execute Agent
     * Executes the specified agent and returns a non-streaming JSON response with the complete agent output. The agent must be in active status and belong to the specified location. locationId is required in the request body. 

**Session Management:**
- For the first message in a new session, do not include the &#x60;executionId&#x60; in the request payload.
- The API will return an &#x60;executionId&#x60; along with the agent response, which uniquely identifies this conversation session.
- To continue the conversation within the same session, include the &#x60;executionId&#x60; from the previous response in subsequent requests. This allows the agent to maintain conversation context and history across multiple interactions.
     * 
     * @param array{
     *   agentId: string
     *   source?: string
     * } $params Request parameters
     * @param ExecutePublicAgentDTO $requestBody Request body data
     * @param array<string, mixed>|null $options Additional request options
     * @return ExecutePublicAgentResponseDTO Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function executeAgent(
        array $params,
        ExecutePublicAgentDTO $requestBody,
        ?array $options = null
    ): ExecutePublicAgentResponseDTO {
        if ($requestBody !== null && is_object($requestBody) && method_exists($requestBody, 'toArray')) {
            $requestBody = $requestBody->toArray();
        }
        $paramDefs = [['name' => 'agentId', 'in' => 'path'], ['name' => 'source', 'in' => 'query']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["Location-Access"];

        $url = RequestUtils::buildUrl('/agent-studio/agent/{agentId}/execute', $extracted['path']);
        
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
            
            return new ExecutePublicAgentResponseDTO($responseData);
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
     * List Agents (Deprecated)
     * **Deprecated endpoint - use GET /agent instead.**

Lists all active agents that have a published production version for the specified location. locationId is required parameter. Supports pagination using limit and offset.
     * @deprecated Deprecated endpoint - use GET /agent instead. Use GET /agent instead instead.
     * 
     * @param array{
     *   locationId: string
     *   limit: string
     *   offset: string
     *   source?: string
     * } $params Request parameters
     * @param array<string, mixed>|null $options Additional request options
     * @return GetPublishedAgentsResponseDTO Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function getAgentsDeprecated(
        array $params,
        ?array $options = null
    ): GetPublishedAgentsResponseDTO {
        $paramDefs = [['name' => 'locationId', 'in' => 'query'], ['name' => 'limit', 'in' => 'query'], ['name' => 'offset', 'in' => 'query'], ['name' => 'source', 'in' => 'query']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["Location-Access"];

        $url = RequestUtils::buildUrl('/agent-studio/public-api/agents', $extracted['path']);
        
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
            
            return new GetPublishedAgentsResponseDTO($responseData);
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
     * Get Agent (Deprecated)
     * **Deprecated endpoint - use GET /agent/:agentId instead.**

Gets a specific agent by its ID for the specified location with all its versions. locationId is required parameter. The agent must have active status.
     * @deprecated Deprecated endpoint - use GET /agent/:agentId instead. Use GET /agent/:agentId instead instead.
     * 
     * @param array{
     *   agentId: string
     *   locationId: string
     *   source?: string
     * } $params Request parameters
     * @param array<string, mixed>|null $options Additional request options
     * @return GetAgentByIdResponseDTO Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function getAgentByIdDeprecated(
        array $params,
        ?array $options = null
    ): GetAgentByIdResponseDTO {
        $paramDefs = [['name' => 'agentId', 'in' => 'path'], ['name' => 'locationId', 'in' => 'query'], ['name' => 'source', 'in' => 'query']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["Location-Access"];

        $url = RequestUtils::buildUrl('/agent-studio/public-api/agents/{agentId}', $extracted['path']);
        
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
            
            return new GetAgentByIdResponseDTO($responseData);
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
     * Execute Agent (Deprecated)
     * **Deprecated endpoint - use POST /agent/:agentId/execute instead.**

Executes the specified agent and returns a non-streaming JSON response with the complete agent output. The agent must be in active status and belong to the specified location. locationId is required in the request body. 

**Session Management:**
- For the first message in a new session, do not include the &#x60;executionId&#x60; in the request payload.
- The API will return an &#x60;executionId&#x60; along with the agent response, which uniquely identifies this conversation session.
- To continue the conversation within the same session, include the &#x60;executionId&#x60; from the previous response in subsequent requests.
     * @deprecated Deprecated endpoint - use POST /agent/:agentId/execute instead. Use POST /agent/:agentId/execute instead instead.
     * 
     * @param array{
     *   agentId: string
     *   source?: string
     * } $params Request parameters
     * @param ExecutePublicAgentDTO $requestBody Request body data
     * @param array<string, mixed>|null $options Additional request options
     * @return ExecutePublicAgentResponseDTO Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function executeAgentDeprecated(
        array $params,
        ExecutePublicAgentDTO $requestBody,
        ?array $options = null
    ): ExecutePublicAgentResponseDTO {
        if ($requestBody !== null && is_object($requestBody) && method_exists($requestBody, 'toArray')) {
            $requestBody = $requestBody->toArray();
        }
        $paramDefs = [['name' => 'agentId', 'in' => 'path'], ['name' => 'source', 'in' => 'query']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["Location-Access"];

        $url = RequestUtils::buildUrl('/agent-studio/public-api/agents/{agentId}/execute', $extracted['path']);
        
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
            
            return new ExecutePublicAgentResponseDTO($responseData);
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

