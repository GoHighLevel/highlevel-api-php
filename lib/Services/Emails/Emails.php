<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Emails;

use HighLevel\HighLevel;
use HighLevel\GHLError;
use HighLevel\Utils\RequestUtils;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Exception\RequestException;
use HighLevel\Services\Emails\Models\CreateTemplatePublicV2BodyDto;
use HighLevel\Services\Emails\Models\CreateTemplatePublicV2ResponseDto;
use HighLevel\Services\Emails\Models\ListTemplatesPublicV2ResponseDto;
use HighLevel\Services\Emails\Models\ImportTemplatePublicV2BodyDto;
use HighLevel\Services\Emails\Models\ImportTemplatePublicV2ResponseDto;
use HighLevel\Services\Emails\Models\CreateTemplateFolderPublicV2BodyDto;
use HighLevel\Services\Emails\Models\CreateTemplateFolderPublicV2ResponseDto;
use HighLevel\Services\Emails\Models\GetTemplatePublicV2ResponseDto;
use HighLevel\Services\Emails\Models\DeleteTemplatePublicV2ResponseDto;
use HighLevel\Services\Emails\Models\UpdateTemplatePublicV2BodyDto;
use HighLevel\Services\Emails\Models\UpdateTemplatePublicV2ResponseDto;
use HighLevel\Services\Emails\Models\GetCampaignStatsPublicV2ResponseDto;
use HighLevel\Services\Emails\Models\CreateEmailCampaignPublicV2BodyDto;
use HighLevel\Services\Emails\Models\CreateEmailCampaignPublicV2ResponseDto;
use HighLevel\Services\Emails\Models\ListEmailCampaignsPublicV2ResponseDto;
use HighLevel\Services\Emails\Models\UpdateEmailCampaignPublicV2BodyDto;
use HighLevel\Services\Emails\Models\UpdateEmailCampaignPublicV2ResponseDto;
use HighLevel\Services\Emails\Models\GetEmailCampaignPublicV2ResponseDto;
use HighLevel\Services\Emails\Models\DeleteCampaignPublicV2ResponseDto;
use HighLevel\Services\Emails\Models\ListWorkflowCampaignsPublicV2ResponseDto;
use HighLevel\Services\Emails\Models\GetWorkflowCampaignPublicV2ResponseDto;
use HighLevel\Services\Emails\Models\ListBulkActionCampaignsPublicV2ResponseDto;
use HighLevel\Services\Emails\Models\GetBulkActionCampaignPublicV2ResponseDto;
use HighLevel\Services\Emails\Models\ScheduleCampaignPublicV2BodyDto;
use HighLevel\Services\Emails\Models\ScheduleCampaignPublicV2ResponseDto;

/**
 * Emails Service
 * Documentation for emails API

## API Version v3

All APIs available via &#x60;/v3&#x60; route prefix with AIP-compliant responses.
 * 
 * @package HighLevel\Services\Emails
 */
class Emails
{
    /**
     * HighLevel client instance
     * @var HighLevel
     */
    private HighLevel $client;

    /**
     * Create a new Emails service instance
     * 
     * @param HighLevel $client HighLevel client instance
     */
    public function __construct(HighLevel $client)
    {
        $this->client = $client;
    }

    /**
     * Create an email template
     * Create a new email template
     * 
     * @param array{
     *   locationId: string // Location ID
     * } $params Request parameters
     * @param CreateTemplatePublicV2BodyDto $requestBody Request body data
     * @param array<string, mixed>|null $options Additional request options
     * @return CreateTemplatePublicV2ResponseDto Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function createEmailTemplate(
        array $params,
        $requestBody,
        ?array $options = null
    ): CreateTemplatePublicV2ResponseDto {
        if ($requestBody !== null && is_object($requestBody) && method_exists($requestBody, 'toArray')) {
            $requestBody = $requestBody->toArray();
        }
        $paramDefs = [['name' => 'locationId', 'in' => 'path'], ];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["Location-Access"];

        $url = RequestUtils::buildUrl('/emails/locations/{locationId}/templates', $extracted['path']);
        
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
            
            return new CreateTemplatePublicV2ResponseDto($responseData);
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
     * Import an email template
     * Import a template from a provider URL
     * 
     * @param array{
     *   locationId: string // Location ID
     * } $params Request parameters
     * @param ImportTemplatePublicV2BodyDto $requestBody Request body data
     * @param array<string, mixed>|null $options Additional request options
     * @return ImportTemplatePublicV2ResponseDto Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function importEmailTemplate(
        array $params,
        $requestBody,
        ?array $options = null
    ): ImportTemplatePublicV2ResponseDto {
        if ($requestBody !== null && is_object($requestBody) && method_exists($requestBody, 'toArray')) {
            $requestBody = $requestBody->toArray();
        }
        $paramDefs = [['name' => 'locationId', 'in' => 'path'], ];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["Location-Access"];

        $url = RequestUtils::buildUrl('/emails/locations/{locationId}/templates/import', $extracted['path']);
        
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
            
            return new ImportTemplatePublicV2ResponseDto($responseData);
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
     * Create a template folder
     * Create a new template folder
     * 
     * @param array{
     *   locationId: string // Location ID
     * } $params Request parameters
     * @param CreateTemplateFolderPublicV2BodyDto $requestBody Request body data
     * @param array<string, mixed>|null $options Additional request options
     * @return CreateTemplateFolderPublicV2ResponseDto Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function createTemplateFolder(
        array $params,
        $requestBody,
        ?array $options = null
    ): CreateTemplateFolderPublicV2ResponseDto {
        if ($requestBody !== null && is_object($requestBody) && method_exists($requestBody, 'toArray')) {
            $requestBody = $requestBody->toArray();
        }
        $paramDefs = [['name' => 'locationId', 'in' => 'path'], ];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["Location-Access"];

        $url = RequestUtils::buildUrl('/emails/locations/{locationId}/templates/folders', $extracted['path']);
        
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
            
            return new CreateTemplateFolderPublicV2ResponseDto($responseData);
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
     * Get Email Template by ID
     * Get a single email template by its ID
     * 
     * @param array{
     *   locationId: string // Location ID
     *   templateId: string // Template ID
     * } $params Request parameters
     * @param array<string, mixed>|null $options Additional request options
     * @return GetTemplatePublicV2ResponseDto Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function getEmailTemplate(
        array $params,
        ?array $options = null
    ): GetTemplatePublicV2ResponseDto {
        $paramDefs = [['name' => 'locationId', 'in' => 'path'], ['name' => 'templateId', 'in' => 'path'], ];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["Location-Access"];

        $url = RequestUtils::buildUrl('/emails/locations/{locationId}/templates/{templateId}', $extracted['path']);
        
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
            
            return new GetTemplatePublicV2ResponseDto($responseData);
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
     * Delete a template
     * Delete a template
     * 
     * @param array{
     *   locationId: string // Location ID
     *   templateId: string // Template ID
     * } $params Request parameters
     * @param array<string, mixed>|null $options Additional request options
     * @return DeleteTemplatePublicV2ResponseDto Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function deleteEmailTemplate(
        array $params,
        ?array $options = null
    ): DeleteTemplatePublicV2ResponseDto {
        $paramDefs = [['name' => 'locationId', 'in' => 'path'], ['name' => 'templateId', 'in' => 'path'], ];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["Location-Access"];

        $url = RequestUtils::buildUrl('/emails/locations/{locationId}/templates/{templateId}', $extracted['path']);
        
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
            
            return new DeleteTemplatePublicV2ResponseDto($responseData);
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
     * Update an email template
     * Update email template
     * 
     * @param array{
     *   locationId: string // Location ID
     *   templateId: string // Template ID
     * } $params Request parameters
     * @param UpdateTemplatePublicV2BodyDto $requestBody Request body data
     * @param array<string, mixed>|null $options Additional request options
     * @return UpdateTemplatePublicV2ResponseDto Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function updateEmailTemplate(
        array $params,
        $requestBody,
        ?array $options = null
    ): UpdateTemplatePublicV2ResponseDto {
        if ($requestBody !== null && is_object($requestBody) && method_exists($requestBody, 'toArray')) {
            $requestBody = $requestBody->toArray();
        }
        $paramDefs = [['name' => 'locationId', 'in' => 'path'], ['name' => 'templateId', 'in' => 'path'], ];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["Location-Access"];

        $url = RequestUtils::buildUrl('/emails/locations/{locationId}/templates/{templateId}', $extracted['path']);
        
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
            
            return new UpdateTemplatePublicV2ResponseDto($responseData);
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
     * Get Campaign Statistics
     * Get statistics for email campaigns, workflows, or bulk actions
     * 
     * @param array{
     *   locationId: string // Location ID
     *   source: string // Source type: email-campaigns, workflow-campaigns, or bulk-actions
     *   sourceId: string // Source ID of the email campaign, workflow campaign, or bulk action
     *   subSourceId?: string // Workflow action ID. Only valid when source is `workflow-campaigns`
     * } $params Request parameters
     * @param array<string, mixed>|null $options Additional request options
     * @return GetCampaignStatsPublicV2ResponseDto Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function getCampaignStats(
        array $params,
        ?array $options = null
    ): GetCampaignStatsPublicV2ResponseDto {
        $paramDefs = [['name' => 'locationId', 'in' => 'path'], ['name' => 'source', 'in' => 'path'], ['name' => 'sourceId', 'in' => 'path'], ['name' => 'subSourceId', 'in' => 'query'], ];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["Location-Access"];

        $url = RequestUtils::buildUrl('/emails/locations/{locationId}/campaigns/stats/{source}/{sourceId}', $extracted['path']);
        
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
            
            return new GetCampaignStatsPublicV2ResponseDto($responseData);
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
     * Create Email Campaign
     * Create a new email campaign
     * 
     * @param array{
     *   locationId: string // Location ID
     * } $params Request parameters
     * @param CreateEmailCampaignPublicV2BodyDto $requestBody Request body data
     * @param array<string, mixed>|null $options Additional request options
     * @return CreateEmailCampaignPublicV2ResponseDto Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function createEmailCampaign(
        array $params,
        $requestBody,
        ?array $options = null
    ): CreateEmailCampaignPublicV2ResponseDto {
        if ($requestBody !== null && is_object($requestBody) && method_exists($requestBody, 'toArray')) {
            $requestBody = $requestBody->toArray();
        }
        $paramDefs = [['name' => 'locationId', 'in' => 'path'], ];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["Location-Access"];

        $url = RequestUtils::buildUrl('/emails/locations/{locationId}/campaigns/emails', $extracted['path']);
        
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
            
            return new CreateEmailCampaignPublicV2ResponseDto($responseData);
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
     * List Email Campaigns
     * Get list of email campaigns for a location
     * 
     * @param array{
     *   locationId: string // Location ID
     *   limit?: int // Number of campaigns to return. Defaults to 10, minimum is 1, maximum is 20
     *   offset?: int // Number of campaigns to skip for pagination. Defaults to 0, minimum is 0
     *   search?: string // Search text for campaign name
     *   status?: string // Filter by campaign status
     * } $params Request parameters
     * @param array<string, mixed>|null $options Additional request options
     * @return ListEmailCampaignsPublicV2ResponseDto Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function listEmailCampaigns(
        array $params,
        ?array $options = null
    ): ListEmailCampaignsPublicV2ResponseDto {
        $paramDefs = [['name' => 'locationId', 'in' => 'path'], ['name' => 'limit', 'in' => 'query'], ['name' => 'offset', 'in' => 'query'], ['name' => 'search', 'in' => 'query'], ['name' => 'status', 'in' => 'query'], ];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["Location-Access"];

        $url = RequestUtils::buildUrl('/emails/locations/{locationId}/campaigns/emails', $extracted['path']);
        
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
            
            return new ListEmailCampaignsPublicV2ResponseDto($responseData);
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
     * Update Email Campaign
     * Update an email campaign draft
     * 
     * @param array{
     *   locationId: string // Location ID
     *   campaignId: string // Campaign ID
     * } $params Request parameters
     * @param UpdateEmailCampaignPublicV2BodyDto $requestBody Request body data
     * @param array<string, mixed>|null $options Additional request options
     * @return UpdateEmailCampaignPublicV2ResponseDto Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function updateEmailCampaign(
        array $params,
        $requestBody,
        ?array $options = null
    ): UpdateEmailCampaignPublicV2ResponseDto {
        if ($requestBody !== null && is_object($requestBody) && method_exists($requestBody, 'toArray')) {
            $requestBody = $requestBody->toArray();
        }
        $paramDefs = [['name' => 'locationId', 'in' => 'path'], ['name' => 'campaignId', 'in' => 'path'], ];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["Location-Access"];

        $url = RequestUtils::buildUrl('/emails/locations/{locationId}/campaigns/emails/{campaignId}', $extracted['path']);
        
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
            
            return new UpdateEmailCampaignPublicV2ResponseDto($responseData);
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
     * Get Email Campaign by ID
     * Get a single email campaign by its ID
     * 
     * @param array{
     *   locationId: string // Location ID
     *   campaignId: string // Campaign ID
     * } $params Request parameters
     * @param array<string, mixed>|null $options Additional request options
     * @return GetEmailCampaignPublicV2ResponseDto Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function getEmailCampaign(
        array $params,
        ?array $options = null
    ): GetEmailCampaignPublicV2ResponseDto {
        $paramDefs = [['name' => 'locationId', 'in' => 'path'], ['name' => 'campaignId', 'in' => 'path'], ];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["Location-Access"];

        $url = RequestUtils::buildUrl('/emails/locations/{locationId}/campaigns/emails/{campaignId}', $extracted['path']);
        
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
            
            return new GetEmailCampaignPublicV2ResponseDto($responseData);
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
     * Delete Campaign
     * Delete a campaign
     * 
     * @param array{
     *   locationId: string // Location ID
     *   campaignId: string // Campaign ID
     * } $params Request parameters
     * @param array<string, mixed>|null $options Additional request options
     * @return DeleteCampaignPublicV2ResponseDto Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function deleteCampaign(
        array $params,
        ?array $options = null
    ): DeleteCampaignPublicV2ResponseDto {
        $paramDefs = [['name' => 'locationId', 'in' => 'path'], ['name' => 'campaignId', 'in' => 'path'], ];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["Location-Access"];

        $url = RequestUtils::buildUrl('/emails/locations/{locationId}/campaigns/emails/{campaignId}', $extracted['path']);
        
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
            
            return new DeleteCampaignPublicV2ResponseDto($responseData);
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
     * List Workflow Campaigns
     * Get list of workflow campaigns for a location
     * 
     * @param array{
     *   locationId: string // Location ID
     *   limit?: int // Number of campaigns to return. Defaults to 10, minimum is 1, maximum is 20
     *   offset?: int // Number of items to skip for pagination. Defaults to 0, minimum is 0
     *   search?: string // Search query to filter campaigns.
     *   status?: string // Filter by campaign status
     * } $params Request parameters
     * @param array<string, mixed>|null $options Additional request options
     * @return ListWorkflowCampaignsPublicV2ResponseDto Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function listWorkflowCampaigns(
        array $params,
        ?array $options = null
    ): ListWorkflowCampaignsPublicV2ResponseDto {
        $paramDefs = [['name' => 'locationId', 'in' => 'path'], ['name' => 'limit', 'in' => 'query'], ['name' => 'offset', 'in' => 'query'], ['name' => 'search', 'in' => 'query'], ['name' => 'status', 'in' => 'query'], ];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["Location-Access"];

        $url = RequestUtils::buildUrl('/emails/locations/{locationId}/campaigns/workflows', $extracted['path']);
        
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
            
            return new ListWorkflowCampaignsPublicV2ResponseDto($responseData);
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
     * Get Workflow Campaign by ID
     * Get a single workflow campaign by its ID
     * 
     * @param array{
     *   locationId: string // Location ID
     *   campaignId: string // Campaign ID
     * } $params Request parameters
     * @param array<string, mixed>|null $options Additional request options
     * @return GetWorkflowCampaignPublicV2ResponseDto Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function getWorkflowCampaign(
        array $params,
        ?array $options = null
    ): GetWorkflowCampaignPublicV2ResponseDto {
        $paramDefs = [['name' => 'locationId', 'in' => 'path'], ['name' => 'campaignId', 'in' => 'path'], ];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["Location-Access"];

        $url = RequestUtils::buildUrl('/emails/locations/{locationId}/campaigns/workflows/{campaignId}', $extracted['path']);
        
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
            
            return new GetWorkflowCampaignPublicV2ResponseDto($responseData);
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
     * List Bulk Action Campaigns
     * Get list of bulk action campaigns for a location
     * 
     * @param array{
     *   locationId: string // Location ID
     *   limit?: int // Number of campaigns to return. Defaults to 10, minimum is 1, maximum is 20
     *   offset?: int // Number of campaigns to skip for pagination. Defaults to 0, minimum is 0
     *   search?: string // Search query to filter campaigns.
     *   dateFrom?: string // Filter by start date (ISO 8601 format)
     *   dateTo?: string // Filter by end date (ISO 8601 format)
     *   status?: string // Filter by status
     * } $params Request parameters
     * @param array<string, mixed>|null $options Additional request options
     * @return ListBulkActionCampaignsPublicV2ResponseDto Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function listBulkActionCampaigns(
        array $params,
        ?array $options = null
    ): ListBulkActionCampaignsPublicV2ResponseDto {
        $paramDefs = [['name' => 'locationId', 'in' => 'path'], ['name' => 'limit', 'in' => 'query'], ['name' => 'offset', 'in' => 'query'], ['name' => 'search', 'in' => 'query'], ['name' => 'dateFrom', 'in' => 'query'], ['name' => 'dateTo', 'in' => 'query'], ['name' => 'status', 'in' => 'query'], ];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["Location-Access"];

        $url = RequestUtils::buildUrl('/emails/locations/{locationId}/campaigns/bulk-actions', $extracted['path']);
        
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
            
            return new ListBulkActionCampaignsPublicV2ResponseDto($responseData);
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
     * Get Bulk Action Campaign by ID
     * Get a single bulk action campaign by its ID
     * 
     * @param array{
     *   locationId: string // Location ID
     *   campaignId: string // Campaign ID
     * } $params Request parameters
     * @param array<string, mixed>|null $options Additional request options
     * @return GetBulkActionCampaignPublicV2ResponseDto Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function getBulkActionCampaign(
        array $params,
        ?array $options = null
    ): GetBulkActionCampaignPublicV2ResponseDto {
        $paramDefs = [['name' => 'locationId', 'in' => 'path'], ['name' => 'campaignId', 'in' => 'path'], ];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["Location-Access"];

        $url = RequestUtils::buildUrl('/emails/locations/{locationId}/campaigns/bulk-actions/{campaignId}', $extracted['path']);
        
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
            
            return new GetBulkActionCampaignPublicV2ResponseDto($responseData);
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
     * Schedule Campaign
     * Schedule or start an email campaign. The campaign must be in draft, cancelled, or paused status.
     * 
     * @param array{
     *   locationId: string // Location ID
     *   campaignId: string // Campaign ID
     * } $params Request parameters
     * @param ScheduleCampaignPublicV2BodyDto $requestBody Request body data
     * @param array<string, mixed>|null $options Additional request options
     * @return ScheduleCampaignPublicV2ResponseDto Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function scheduleCampaign(
        array $params,
        $requestBody,
        ?array $options = null
    ): ScheduleCampaignPublicV2ResponseDto {
        if ($requestBody !== null && is_object($requestBody) && method_exists($requestBody, 'toArray')) {
            $requestBody = $requestBody->toArray();
        }
        $paramDefs = [['name' => 'locationId', 'in' => 'path'], ['name' => 'campaignId', 'in' => 'path'], ];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["Location-Access"];

        $url = RequestUtils::buildUrl('/emails/locations/{locationId}/campaigns/emails/{campaignId}/schedule', $extracted['path']);
        
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
            
            return new ScheduleCampaignPublicV2ResponseDto($responseData);
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

