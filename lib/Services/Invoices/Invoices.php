<?php

namespace HighLevel\Services\Invoices;

use HighLevel\HighLevel;
use HighLevel\GHLError;
use HighLevel\Utils\RequestUtils;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Exception\RequestException;
use HighLevel\Services\Invoices\Models\CreateInvoiceTemplateDto;
use HighLevel\Services\Invoices\Models\CreateInvoiceTemplateResponseDto;
use HighLevel\Services\Invoices\Models\ListTemplatesResponseDto;
use HighLevel\Services\Invoices\Models\GetTemplateResponseDto;
use HighLevel\Services\Invoices\Models\UpdateInvoiceTemplateDto;
use HighLevel\Services\Invoices\Models\UpdateInvoiceTemplateResponseDto;
use HighLevel\Services\Invoices\Models\DeleteInvoiceTemplateResponseDto;
use HighLevel\Services\Invoices\Models\UpdateInvoiceLateFeesConfigurationDto;
use HighLevel\Services\Invoices\Models\UpdatePaymentMethodsConfigurationDto;
use HighLevel\Services\Invoices\Models\CreateInvoiceScheduleDto;
use HighLevel\Services\Invoices\Models\CreateInvoiceScheduleResponseDto;
use HighLevel\Services\Invoices\Models\ListSchedulesResponseDto;
use HighLevel\Services\Invoices\Models\GetScheduleResponseDto;
use HighLevel\Services\Invoices\Models\UpdateInvoiceScheduleDto;
use HighLevel\Services\Invoices\Models\UpdateInvoiceScheduleResponseDto;
use HighLevel\Services\Invoices\Models\DeleteInvoiceScheduleResponseDto;
use HighLevel\Services\Invoices\Models\UpdateAndScheduleInvoiceScheduleResponseDto;
use HighLevel\Services\Invoices\Models\ScheduleInvoiceScheduleDto;
use HighLevel\Services\Invoices\Models\ScheduleInvoiceScheduleResponseDto;
use HighLevel\Services\Invoices\Models\AutoPaymentScheduleDto;
use HighLevel\Services\Invoices\Models\AutoPaymentInvoiceScheduleResponseDto;
use HighLevel\Services\Invoices\Models\CancelInvoiceScheduleDto;
use HighLevel\Services\Invoices\Models\CancelInvoiceScheduleResponseDto;
use HighLevel\Services\Invoices\Models\Text2PayDto;
use HighLevel\Services\Invoices\Models\Text2PayInvoiceResponseDto;
use HighLevel\Services\Invoices\Models\GenerateInvoiceNumberResponseDto;
use HighLevel\Services\Invoices\Models\GetInvoiceSettingsResponseDto;
use HighLevel\Services\Invoices\Models\GetInvoiceResponseDto;
use HighLevel\Services\Invoices\Models\UpdateInvoiceDto;
use HighLevel\Services\Invoices\Models\UpdateInvoiceResponseDto;
use HighLevel\Services\Invoices\Models\DeleteInvoiceResponseDto;
use HighLevel\Services\Invoices\Models\VoidInvoiceDto;
use HighLevel\Services\Invoices\Models\VoidInvoiceResponseDto;
use HighLevel\Services\Invoices\Models\SendInvoiceDto;
use HighLevel\Services\Invoices\Models\SendInvoicesResponseDto;
use HighLevel\Services\Invoices\Models\RecordPaymentDto;
use HighLevel\Services\Invoices\Models\RecordPaymentResponseDto;
use HighLevel\Services\Invoices\Models\PatchInvoiceStatsLastViewedDto;
use HighLevel\Services\Invoices\Models\CreateEstimatesDto;
use HighLevel\Services\Invoices\Models\EstimateResponseDto;
use HighLevel\Services\Invoices\Models\UpdateEstimateDto;
use HighLevel\Services\Invoices\Models\AltDto;
use HighLevel\Services\Invoices\Models\GenerateEstimateNumberResponse;
use HighLevel\Services\Invoices\Models\SendEstimateDto;
use HighLevel\Services\Invoices\Models\CreateInvoiceFromEstimateDto;
use HighLevel\Services\Invoices\Models\CreateInvoiceFromEstimateResponseDTO;
use HighLevel\Services\Invoices\Models\ListEstimatesResponseDTO;
use HighLevel\Services\Invoices\Models\EstimateIdParam;
use HighLevel\Services\Invoices\Models\ListEstimateTemplateResponseDTO;
use HighLevel\Services\Invoices\Models\EstimateTemplatesDto;
use HighLevel\Services\Invoices\Models\EstimateTemplateResponseDTO;
use HighLevel\Services\Invoices\Models\CreateInvoiceDto;
use HighLevel\Services\Invoices\Models\CreateInvoiceResponseDto;
use HighLevel\Services\Invoices\Models\ListInvoicesResponseDto;

/**
 * Invoices Service
 * Documentation for invoice API
 * 
 * @package HighLevel\Services\Invoices
 */
class Invoices
{
    /**
     * HighLevel client instance
     * @var HighLevel
     */
    private HighLevel $client;

    /**
     * Create a new Invoices service instance
     * 
     * @param HighLevel $client HighLevel client instance
     */
    public function __construct(HighLevel $client)
    {
        $this->client = $client;
    }

    /**
     * Create template
     * API to create a template
     * 
     * @param CreateInvoiceTemplateDto $requestBody Request body data
     * @param array<string, mixed>|null $options Additional request options
     * @return CreateInvoiceTemplateResponseDto Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function createInvoiceTemplate(
        $requestBody,
        ?array $options = null
    ): CreateInvoiceTemplateResponseDto {
        if ($requestBody !== null && is_object($requestBody) && method_exists($requestBody, 'toArray')) {
            $requestBody = $requestBody->toArray();
        }
        $paramDefs = [];
        $extracted = RequestUtils::extractParams([], $paramDefs);
        $requirements = ["Location-Access","Agency-Access"];

        $url = RequestUtils::buildUrl('/invoices/template', $extracted['path']);
        
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
            
            return new CreateInvoiceTemplateResponseDto($responseData);
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
     * API to get list of templates
     * 
     * @param array{
     *   altId: string // location Id / company Id based on altType
     *   altType: string // Alt Type
     *   status?: string // status to be filtered
     *   startAt?: string // startAt in YYYY-MM-DD format
     *   endAt?: string // endAt in YYYY-MM-DD format
     *   search?: string // To search for an invoice by id / name / email / phoneNo
     *   paymentMode?: string // payment mode
     *   limit: string // Limit the number of items to return
     *   offset: string // Number of items to skip
     * } $params Request parameters
     * @param array<string, mixed>|null $options Additional request options
     * @return ListTemplatesResponseDto Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function listInvoiceTemplates(
        array $params,
        ?array $options = null
    ): ListTemplatesResponseDto {
        $paramDefs = [['name' => 'altId', 'in' => 'query'], ['name' => 'altType', 'in' => 'query'], ['name' => 'status', 'in' => 'query'], ['name' => 'startAt', 'in' => 'query'], ['name' => 'endAt', 'in' => 'query'], ['name' => 'search', 'in' => 'query'], ['name' => 'paymentMode', 'in' => 'query'], ['name' => 'limit', 'in' => 'query'], ['name' => 'offset', 'in' => 'query']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["Location-Access","Agency-Access"];

        $url = RequestUtils::buildUrl('/invoices/template', $extracted['path']);
        
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
            
            return new ListTemplatesResponseDto($responseData);
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
     * Get an template
     * API to get an template by template id
     * 
     * @param array{
     *   templateId: string // Template Id
     *   altId: string // location Id / company Id based on altType
     *   altType: string // Alt Type
     * } $params Request parameters
     * @param array<string, mixed>|null $options Additional request options
     * @return GetTemplateResponseDto Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function getInvoiceTemplate(
        array $params,
        ?array $options = null
    ): GetTemplateResponseDto {
        $paramDefs = [['name' => 'templateId', 'in' => 'path'], ['name' => 'altId', 'in' => 'query'], ['name' => 'altType', 'in' => 'query']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["Location-Access","Agency-Access"];

        $url = RequestUtils::buildUrl('/invoices/template/{templateId}', $extracted['path']);
        
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
            
            return new GetTemplateResponseDto($responseData);
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
     * Update template
     * API to update an template by template id
     * 
     * @param array{
     *   templateId: string // Template Id
     * } $params Request parameters
     * @param UpdateInvoiceTemplateDto $requestBody Request body data
     * @param array<string, mixed>|null $options Additional request options
     * @return UpdateInvoiceTemplateResponseDto Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function updateInvoiceTemplate(
        array $params,
        $requestBody,
        ?array $options = null
    ): UpdateInvoiceTemplateResponseDto {
        if ($requestBody !== null && is_object($requestBody) && method_exists($requestBody, 'toArray')) {
            $requestBody = $requestBody->toArray();
        }
        $paramDefs = [['name' => 'templateId', 'in' => 'path']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["Location-Access","Agency-Access"];

        $url = RequestUtils::buildUrl('/invoices/template/{templateId}', $extracted['path']);
        
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
            
            return new UpdateInvoiceTemplateResponseDto($responseData);
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
     * Delete template
     * API to update an template by template id
     * 
     * @param array{
     *   templateId: string // Template Id
     *   altId: string // location Id / company Id based on altType
     *   altType: string // Alt Type
     * } $params Request parameters
     * @param array<string, mixed>|null $options Additional request options
     * @return DeleteInvoiceTemplateResponseDto Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function deleteInvoiceTemplate(
        array $params,
        ?array $options = null
    ): DeleteInvoiceTemplateResponseDto {
        $paramDefs = [['name' => 'templateId', 'in' => 'path'], ['name' => 'altId', 'in' => 'query'], ['name' => 'altType', 'in' => 'query']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["Location-Access","Agency-Access"];

        $url = RequestUtils::buildUrl('/invoices/template/{templateId}', $extracted['path']);
        
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
            
            return new DeleteInvoiceTemplateResponseDto($responseData);
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
     * Update template late fees configuration
     * API to update template late fees configuration by template id
     * 
     * @param array{
     *   templateId: string // Template Id
     * } $params Request parameters
     * @param UpdateInvoiceLateFeesConfigurationDto $requestBody Request body data
     * @param array<string, mixed>|null $options Additional request options
     * @return UpdateInvoiceTemplateResponseDto Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function updateInvoiceTemplateLateFeesConfiguration(
        array $params,
        $requestBody,
        ?array $options = null
    ): UpdateInvoiceTemplateResponseDto {
        if ($requestBody !== null && is_object($requestBody) && method_exists($requestBody, 'toArray')) {
            $requestBody = $requestBody->toArray();
        }
        $paramDefs = [['name' => 'templateId', 'in' => 'path']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["Location-Access","Agency-Access"];

        $url = RequestUtils::buildUrl('/invoices/template/{templateId}/late-fees-configuration', $extracted['path']);
        
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
            
            return new UpdateInvoiceTemplateResponseDto($responseData);
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
     * Update template late fees configuration
     * API to update template late fees configuration by template id
     * 
     * @param array{
     *   templateId: string // Template Id
     * } $params Request parameters
     * @param UpdatePaymentMethodsConfigurationDto $requestBody Request body data
     * @param array<string, mixed>|null $options Additional request options
     * @return UpdateInvoiceTemplateResponseDto Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function updateInvoicePaymentMethodsConfiguration(
        array $params,
        $requestBody,
        ?array $options = null
    ): UpdateInvoiceTemplateResponseDto {
        if ($requestBody !== null && is_object($requestBody) && method_exists($requestBody, 'toArray')) {
            $requestBody = $requestBody->toArray();
        }
        $paramDefs = [['name' => 'templateId', 'in' => 'path']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["Location-Access","Agency-Access"];

        $url = RequestUtils::buildUrl('/invoices/template/{templateId}/payment-methods-configuration', $extracted['path']);
        
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
            
            return new UpdateInvoiceTemplateResponseDto($responseData);
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
     * Create Invoice Schedule
     * API to create an invoice Schedule
     * 
     * @param CreateInvoiceScheduleDto $requestBody Request body data
     * @param array<string, mixed>|null $options Additional request options
     * @return CreateInvoiceScheduleResponseDto Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function createInvoiceSchedule(
        $requestBody,
        ?array $options = null
    ): CreateInvoiceScheduleResponseDto {
        if ($requestBody !== null && is_object($requestBody) && method_exists($requestBody, 'toArray')) {
            $requestBody = $requestBody->toArray();
        }
        $paramDefs = [];
        $extracted = RequestUtils::extractParams([], $paramDefs);
        $requirements = ["Location-Access","Agency-Access"];

        $url = RequestUtils::buildUrl('/invoices/schedule', $extracted['path']);
        
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
            
            return new CreateInvoiceScheduleResponseDto($responseData);
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
     * List schedules
     * API to get list of schedules
     * 
     * @param array{
     *   altId: string // location Id / company Id based on altType
     *   altType: string // Alt Type
     *   status?: string // status to be filtered
     *   startAt?: string // startAt in YYYY-MM-DD format
     *   endAt?: string // endAt in YYYY-MM-DD format
     *   search?: string // To search for an invoice by id / name / email / phoneNo
     *   paymentMode?: string // payment mode
     *   limit: string // Limit the number of items to return
     *   offset: string // Number of items to skip
     * } $params Request parameters
     * @param array<string, mixed>|null $options Additional request options
     * @return ListSchedulesResponseDto Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function listInvoiceSchedules(
        array $params,
        ?array $options = null
    ): ListSchedulesResponseDto {
        $paramDefs = [['name' => 'altId', 'in' => 'query'], ['name' => 'altType', 'in' => 'query'], ['name' => 'status', 'in' => 'query'], ['name' => 'startAt', 'in' => 'query'], ['name' => 'endAt', 'in' => 'query'], ['name' => 'search', 'in' => 'query'], ['name' => 'paymentMode', 'in' => 'query'], ['name' => 'limit', 'in' => 'query'], ['name' => 'offset', 'in' => 'query']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["Location-Access","Agency-Access"];

        $url = RequestUtils::buildUrl('/invoices/schedule', $extracted['path']);
        
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
            
            return new ListSchedulesResponseDto($responseData);
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
     * Get an schedule
     * API to get an schedule by schedule id
     * 
     * @param array{
     *   scheduleId: string // Schedule Id
     *   altId: string // location Id / company Id based on altType
     *   altType: string // Alt Type
     * } $params Request parameters
     * @param array<string, mixed>|null $options Additional request options
     * @return GetScheduleResponseDto Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function getInvoiceSchedule(
        array $params,
        ?array $options = null
    ): GetScheduleResponseDto {
        $paramDefs = [['name' => 'scheduleId', 'in' => 'path'], ['name' => 'altId', 'in' => 'query'], ['name' => 'altType', 'in' => 'query']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["Location-Access","Agency-Access"];

        $url = RequestUtils::buildUrl('/invoices/schedule/{scheduleId}', $extracted['path']);
        
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
            
            return new GetScheduleResponseDto($responseData);
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
     * Update schedule
     * API to update an schedule by schedule id
     * 
     * @param array{
     *   scheduleId: string // Schedule Id
     * } $params Request parameters
     * @param UpdateInvoiceScheduleDto $requestBody Request body data
     * @param array<string, mixed>|null $options Additional request options
     * @return UpdateInvoiceScheduleResponseDto Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function updateInvoiceSchedule(
        array $params,
        $requestBody,
        ?array $options = null
    ): UpdateInvoiceScheduleResponseDto {
        if ($requestBody !== null && is_object($requestBody) && method_exists($requestBody, 'toArray')) {
            $requestBody = $requestBody->toArray();
        }
        $paramDefs = [['name' => 'scheduleId', 'in' => 'path']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["Location-Access","Agency-Access"];

        $url = RequestUtils::buildUrl('/invoices/schedule/{scheduleId}', $extracted['path']);
        
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
            
            return new UpdateInvoiceScheduleResponseDto($responseData);
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
     * Delete schedule
     * API to delete an schedule by schedule id
     * 
     * @param array{
     *   scheduleId: string // Schedule Id
     *   altId: string // location Id / company Id based on altType
     *   altType: string // Alt Type
     * } $params Request parameters
     * @param array<string, mixed>|null $options Additional request options
     * @return DeleteInvoiceScheduleResponseDto Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function deleteInvoiceSchedule(
        array $params,
        ?array $options = null
    ): DeleteInvoiceScheduleResponseDto {
        $paramDefs = [['name' => 'scheduleId', 'in' => 'path'], ['name' => 'altId', 'in' => 'query'], ['name' => 'altType', 'in' => 'query']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["Location-Access","Agency-Access"];

        $url = RequestUtils::buildUrl('/invoices/schedule/{scheduleId}', $extracted['path']);
        
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
            
            return new DeleteInvoiceScheduleResponseDto($responseData);
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
     * Update scheduled recurring invoice
     * API to update scheduled recurring invoice
     * 
     * @param array{
     *   scheduleId: string // Schedule Id
     * } $params Request parameters
     * @param array<string, mixed>|null $options Additional request options
     * @return UpdateAndScheduleInvoiceScheduleResponseDto Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function updateAndScheduleInvoiceSchedule(
        array $params,
        ?array $options = null
    ): UpdateAndScheduleInvoiceScheduleResponseDto {
        $paramDefs = [['name' => 'scheduleId', 'in' => 'path']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["Location-Access","Agency-Access"];

        $url = RequestUtils::buildUrl('/invoices/schedule/{scheduleId}/updateAndSchedule', $extracted['path']);
        
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
                'POST',
                $url,
                $requestOptions
            );

            $body = (string) $response->getBody();
            $responseData = json_decode($body, true);
            
            return new UpdateAndScheduleInvoiceScheduleResponseDto($responseData);
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
     * Schedule an schedule invoice
     * API to schedule an schedule invoice to start sending to the customer
     * 
     * @param array{
     *   scheduleId: string // Schedule Id
     * } $params Request parameters
     * @param ScheduleInvoiceScheduleDto $requestBody Request body data
     * @param array<string, mixed>|null $options Additional request options
     * @return ScheduleInvoiceScheduleResponseDto Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function scheduleInvoiceSchedule(
        array $params,
        $requestBody,
        ?array $options = null
    ): ScheduleInvoiceScheduleResponseDto {
        if ($requestBody !== null && is_object($requestBody) && method_exists($requestBody, 'toArray')) {
            $requestBody = $requestBody->toArray();
        }
        $paramDefs = [['name' => 'scheduleId', 'in' => 'path']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["Location-Access","Agency-Access"];

        $url = RequestUtils::buildUrl('/invoices/schedule/{scheduleId}/schedule', $extracted['path']);
        
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
            
            return new ScheduleInvoiceScheduleResponseDto($responseData);
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
     * Manage Auto payment for an schedule invoice
     * API to manage auto payment for a schedule
     * 
     * @param array{
     *   scheduleId: string // Schedule Id
     * } $params Request parameters
     * @param AutoPaymentScheduleDto $requestBody Request body data
     * @param array<string, mixed>|null $options Additional request options
     * @return AutoPaymentInvoiceScheduleResponseDto Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function autoPaymentInvoiceSchedule(
        array $params,
        $requestBody,
        ?array $options = null
    ): AutoPaymentInvoiceScheduleResponseDto {
        if ($requestBody !== null && is_object($requestBody) && method_exists($requestBody, 'toArray')) {
            $requestBody = $requestBody->toArray();
        }
        $paramDefs = [['name' => 'scheduleId', 'in' => 'path']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["Location-Access","Agency-Access"];

        $url = RequestUtils::buildUrl('/invoices/schedule/{scheduleId}/auto-payment', $extracted['path']);
        
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
            
            return new AutoPaymentInvoiceScheduleResponseDto($responseData);
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
     * Cancel an scheduled invoice
     * API to cancel a scheduled invoice by schedule id
     * 
     * @param array{
     *   scheduleId: string // Schedule Id
     * } $params Request parameters
     * @param CancelInvoiceScheduleDto $requestBody Request body data
     * @param array<string, mixed>|null $options Additional request options
     * @return CancelInvoiceScheduleResponseDto Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function cancelInvoiceSchedule(
        array $params,
        $requestBody,
        ?array $options = null
    ): CancelInvoiceScheduleResponseDto {
        if ($requestBody !== null && is_object($requestBody) && method_exists($requestBody, 'toArray')) {
            $requestBody = $requestBody->toArray();
        }
        $paramDefs = [['name' => 'scheduleId', 'in' => 'path']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["Location-Access","Agency-Access"];

        $url = RequestUtils::buildUrl('/invoices/schedule/{scheduleId}/cancel', $extracted['path']);
        
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
            
            return new CancelInvoiceScheduleResponseDto($responseData);
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
     * Create &amp; Send
     * API to create or update a text2pay invoice
     * 
     * @param Text2PayDto $requestBody Request body data
     * @param array<string, mixed>|null $options Additional request options
     * @return Text2PayInvoiceResponseDto Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function text2payInvoice(
        $requestBody,
        ?array $options = null
    ): Text2PayInvoiceResponseDto {
        if ($requestBody !== null && is_object($requestBody) && method_exists($requestBody, 'toArray')) {
            $requestBody = $requestBody->toArray();
        }
        $paramDefs = [];
        $extracted = RequestUtils::extractParams([], $paramDefs);
        $requirements = ["Location-Access"];

        $url = RequestUtils::buildUrl('/invoices/text2pay', $extracted['path']);
        
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
            
            return new Text2PayInvoiceResponseDto($responseData);
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
     * Generate Invoice Number
     * Get the next invoice number for the given location
     * 
     * @param array{
     *   altId: string // Location Id
     *   altType: string
     * } $params Request parameters
     * @param array<string, mixed>|null $options Additional request options
     * @return GenerateInvoiceNumberResponseDto Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function generateInvoiceNumber(
        array $params,
        ?array $options = null
    ): GenerateInvoiceNumberResponseDto {
        $paramDefs = [['name' => 'altId', 'in' => 'query'], ['name' => 'altType', 'in' => 'query']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["Location-Access","Agency-Access"];

        $url = RequestUtils::buildUrl('/invoices/generate-invoice-number', $extracted['path']);
        
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
            
            return new GenerateInvoiceNumberResponseDto($responseData);
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
     * Get Invoice Settings
     * Get the invoice settings for the given location
     * 
     * @param array{
     *   altId: string // Location Id or Agency Id
     *   altType: string
     * } $params Request parameters
     * @param array<string, mixed>|null $options Additional request options
     * @return GetInvoiceSettingsResponseDto Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function getInvoiceSettings(
        array $params,
        ?array $options = null
    ): GetInvoiceSettingsResponseDto {
        $paramDefs = [['name' => 'altId', 'in' => 'query'], ['name' => 'altType', 'in' => 'query']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["Location-Access","Agency-Access"];

        $url = RequestUtils::buildUrl('/invoices/settings', $extracted['path']);
        
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
            
            return new GetInvoiceSettingsResponseDto($responseData);
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
     * Get invoice
     * API to get invoice by invoice id
     * 
     * @param array{
     *   invoiceId: string // Invoice Id
     *   altId: string // location Id / company Id based on altType
     *   altType: string // Alt Type
     * } $params Request parameters
     * @param array<string, mixed>|null $options Additional request options
     * @return GetInvoiceResponseDto Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function getInvoice(
        array $params,
        ?array $options = null
    ): GetInvoiceResponseDto {
        $paramDefs = [['name' => 'invoiceId', 'in' => 'path'], ['name' => 'altId', 'in' => 'query'], ['name' => 'altType', 'in' => 'query']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["Location-Access","Agency-Access"];

        $url = RequestUtils::buildUrl('/invoices/{invoiceId}', $extracted['path']);
        
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
            
            return new GetInvoiceResponseDto($responseData);
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
     * Update invoice
     * API to update invoice by invoice id
     * 
     * @param array{
     *   invoiceId: string // Invoice Id
     * } $params Request parameters
     * @param UpdateInvoiceDto $requestBody Request body data
     * @param array<string, mixed>|null $options Additional request options
     * @return UpdateInvoiceResponseDto Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function updateInvoice(
        array $params,
        $requestBody,
        ?array $options = null
    ): UpdateInvoiceResponseDto {
        if ($requestBody !== null && is_object($requestBody) && method_exists($requestBody, 'toArray')) {
            $requestBody = $requestBody->toArray();
        }
        $paramDefs = [['name' => 'invoiceId', 'in' => 'path']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["Location-Access","Agency-Access"];

        $url = RequestUtils::buildUrl('/invoices/{invoiceId}', $extracted['path']);
        
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
            
            return new UpdateInvoiceResponseDto($responseData);
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
     * Delete invoice
     * API to delete invoice by invoice id
     * 
     * @param array{
     *   invoiceId: string // Invoice Id
     *   altId: string // location Id / company Id based on altType
     *   altType: string // Alt Type
     * } $params Request parameters
     * @param array<string, mixed>|null $options Additional request options
     * @return DeleteInvoiceResponseDto Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function deleteInvoice(
        array $params,
        ?array $options = null
    ): DeleteInvoiceResponseDto {
        $paramDefs = [['name' => 'invoiceId', 'in' => 'path'], ['name' => 'altId', 'in' => 'query'], ['name' => 'altType', 'in' => 'query']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["Location-Access","Agency-Access"];

        $url = RequestUtils::buildUrl('/invoices/{invoiceId}', $extracted['path']);
        
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
            
            return new DeleteInvoiceResponseDto($responseData);
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
     * Update invoice late fees configuration
     * API to update invoice late fees configuration by invoice id
     * 
     * @param array{
     *   invoiceId: string // Invoice Id
     * } $params Request parameters
     * @param UpdateInvoiceLateFeesConfigurationDto $requestBody Request body data
     * @param array<string, mixed>|null $options Additional request options
     * @return UpdateInvoiceResponseDto Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function updateInvoiceLateFeesConfiguration(
        array $params,
        $requestBody,
        ?array $options = null
    ): UpdateInvoiceResponseDto {
        if ($requestBody !== null && is_object($requestBody) && method_exists($requestBody, 'toArray')) {
            $requestBody = $requestBody->toArray();
        }
        $paramDefs = [['name' => 'invoiceId', 'in' => 'path']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["Location-Access","Agency-Access"];

        $url = RequestUtils::buildUrl('/invoices/{invoiceId}/late-fees-configuration', $extracted['path']);
        
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
            
            return new UpdateInvoiceResponseDto($responseData);
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
     * Void invoice
     * API to delete invoice by invoice id
     * 
     * @param array{
     *   invoiceId: string // Invoice Id
     * } $params Request parameters
     * @param VoidInvoiceDto $requestBody Request body data
     * @param array<string, mixed>|null $options Additional request options
     * @return VoidInvoiceResponseDto Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function voidInvoice(
        array $params,
        $requestBody,
        ?array $options = null
    ): VoidInvoiceResponseDto {
        if ($requestBody !== null && is_object($requestBody) && method_exists($requestBody, 'toArray')) {
            $requestBody = $requestBody->toArray();
        }
        $paramDefs = [['name' => 'invoiceId', 'in' => 'path']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["Location-Access","Agency-Access"];

        $url = RequestUtils::buildUrl('/invoices/{invoiceId}/void', $extracted['path']);
        
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
            
            return new VoidInvoiceResponseDto($responseData);
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
     * Send invoice
     * API to send invoice by invoice id
     * 
     * @param array{
     *   invoiceId: string // Invoice Id
     * } $params Request parameters
     * @param SendInvoiceDto $requestBody Request body data
     * @param array<string, mixed>|null $options Additional request options
     * @return SendInvoicesResponseDto Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function sendInvoice(
        array $params,
        $requestBody,
        ?array $options = null
    ): SendInvoicesResponseDto {
        if ($requestBody !== null && is_object($requestBody) && method_exists($requestBody, 'toArray')) {
            $requestBody = $requestBody->toArray();
        }
        $paramDefs = [['name' => 'invoiceId', 'in' => 'path']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["Location-Access","Agency-Access"];

        $url = RequestUtils::buildUrl('/invoices/{invoiceId}/send', $extracted['path']);
        
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
            
            return new SendInvoicesResponseDto($responseData);
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
     * Record a manual payment for an invoice
     * API to record manual payment for an invoice by invoice id
     * 
     * @param array{
     *   invoiceId: string // Invoice Id
     * } $params Request parameters
     * @param RecordPaymentDto $requestBody Request body data
     * @param array<string, mixed>|null $options Additional request options
     * @return RecordPaymentResponseDto Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function recordInvoice(
        array $params,
        $requestBody,
        ?array $options = null
    ): RecordPaymentResponseDto {
        if ($requestBody !== null && is_object($requestBody) && method_exists($requestBody, 'toArray')) {
            $requestBody = $requestBody->toArray();
        }
        $paramDefs = [['name' => 'invoiceId', 'in' => 'path']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["Location-Access","Agency-Access"];

        $url = RequestUtils::buildUrl('/invoices/{invoiceId}/record-payment', $extracted['path']);
        
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
            
            return new RecordPaymentResponseDto($responseData);
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
     * Update invoice last visited at
     * API to update invoice last visited at by invoice id
     * 
     * @param PatchInvoiceStatsLastViewedDto $requestBody Request body data
     * @param array<string, mixed>|null $options Additional request options
     * @return mixed Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function updateInvoiceLastVisitedAt(
        $requestBody,
        ?array $options = null
    ) {
        if ($requestBody !== null && is_object($requestBody) && method_exists($requestBody, 'toArray')) {
            $requestBody = $requestBody->toArray();
        }
        $paramDefs = [];
        $extracted = RequestUtils::extractParams([], $paramDefs);
        $requirements = ["Location-Access","Agency-Access"];

        $url = RequestUtils::buildUrl('/invoices/stats/last-visited-at', $extracted['path']);
        
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
     * Create New Estimate
     * Create a new estimate with the provided details
     * 
     * @param CreateEstimatesDto $requestBody Request body data
     * @param array<string, mixed>|null $options Additional request options
     * @return EstimateResponseDto Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function createNewEstimate(
        $requestBody,
        ?array $options = null
    ): EstimateResponseDto {
        if ($requestBody !== null && is_object($requestBody) && method_exists($requestBody, 'toArray')) {
            $requestBody = $requestBody->toArray();
        }
        $paramDefs = [];
        $extracted = RequestUtils::extractParams([], $paramDefs);
        $requirements = ["Location-Access","Agency-Access"];

        $url = RequestUtils::buildUrl('/invoices/estimate', $extracted['path']);
        
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
            
            return new EstimateResponseDto($responseData);
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
     * Update Estimate
     * Update an existing estimate with new details
     * 
     * @param array{
     *   estimateId: string // Estimate Id
     * } $params Request parameters
     * @param UpdateEstimateDto $requestBody Request body data
     * @param array<string, mixed>|null $options Additional request options
     * @return EstimateResponseDto Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function updateEstimate(
        array $params,
        $requestBody,
        ?array $options = null
    ): EstimateResponseDto {
        if ($requestBody !== null && is_object($requestBody) && method_exists($requestBody, 'toArray')) {
            $requestBody = $requestBody->toArray();
        }
        $paramDefs = [['name' => 'estimateId', 'in' => 'path']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["Location-Access","Agency-Access"];

        $url = RequestUtils::buildUrl('/invoices/estimate/{estimateId}', $extracted['path']);
        
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
            
            return new EstimateResponseDto($responseData);
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
     * Delete Estimate
     * Delete an existing estimate
     * 
     * @param array{
     *   estimateId: string // Estimate Id
     * } $params Request parameters
     * @param AltDto $requestBody Request body data
     * @param array<string, mixed>|null $options Additional request options
     * @return EstimateResponseDto Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function deleteEstimate(
        array $params,
        $requestBody,
        ?array $options = null
    ): EstimateResponseDto {
        if ($requestBody !== null && is_object($requestBody) && method_exists($requestBody, 'toArray')) {
            $requestBody = $requestBody->toArray();
        }
        $paramDefs = [['name' => 'estimateId', 'in' => 'path']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["Location-Access","Agency-Access"];

        $url = RequestUtils::buildUrl('/invoices/estimate/{estimateId}', $extracted['path']);
        
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
            
            return new EstimateResponseDto($responseData);
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
     * Generate Estimate Number
     * Get the next estimate number for the given location
     * 
     * @param array{
     *   altId: string // Location Id or Agency Id
     *   altType: string
     * } $params Request parameters
     * @param array<string, mixed>|null $options Additional request options
     * @return GenerateEstimateNumberResponse Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function generateEstimateNumber(
        array $params,
        ?array $options = null
    ): GenerateEstimateNumberResponse {
        $paramDefs = [['name' => 'altId', 'in' => 'query'], ['name' => 'altType', 'in' => 'query']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["Location-Access","Agency-Access"];

        $url = RequestUtils::buildUrl('/invoices/estimate/number/generate', $extracted['path']);
        
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
            
            return new GenerateEstimateNumberResponse($responseData);
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
     * Send Estimate
     * API to send estimate by estimate id
     * 
     * @param array{
     *   estimateId: string // Estimate Id
     * } $params Request parameters
     * @param SendEstimateDto $requestBody Request body data
     * @param array<string, mixed>|null $options Additional request options
     * @return EstimateResponseDto Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function sendEstimate(
        array $params,
        $requestBody,
        ?array $options = null
    ): EstimateResponseDto {
        if ($requestBody !== null && is_object($requestBody) && method_exists($requestBody, 'toArray')) {
            $requestBody = $requestBody->toArray();
        }
        $paramDefs = [['name' => 'estimateId', 'in' => 'path']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["Location-Access","Agency-Access"];

        $url = RequestUtils::buildUrl('/invoices/estimate/{estimateId}/send', $extracted['path']);
        
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
            
            return new EstimateResponseDto($responseData);
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
     * Create Invoice from Estimate
     * Create a new invoice from an existing estimate
     * 
     * @param array{
     *   estimateId: string // Estimate Id
     * } $params Request parameters
     * @param CreateInvoiceFromEstimateDto $requestBody Request body data
     * @param array<string, mixed>|null $options Additional request options
     * @return CreateInvoiceFromEstimateResponseDTO Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function createInvoiceFromEstimate(
        array $params,
        $requestBody,
        ?array $options = null
    ): CreateInvoiceFromEstimateResponseDTO {
        if ($requestBody !== null && is_object($requestBody) && method_exists($requestBody, 'toArray')) {
            $requestBody = $requestBody->toArray();
        }
        $paramDefs = [['name' => 'estimateId', 'in' => 'path']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["Location-Access","Agency-Access"];

        $url = RequestUtils::buildUrl('/invoices/estimate/{estimateId}/invoice', $extracted['path']);
        
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
            
            return new CreateInvoiceFromEstimateResponseDTO($responseData);
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
     * List Estimates
     * Get a paginated list of estimates
     * 
     * @param array{
     *   altId: string // Location Id or Agency Id
     *   altType: string
     *   startAt?: string // startAt in YYYY-MM-DD format
     *   endAt?: string // endAt in YYYY-MM-DD format
     *   search?: string // search text for estimates name
     *   status?: string // estimate status
     *   contactId?: string // Contact ID for the estimate
     *   limit: string // Limit the number of items to return
     *   offset: string // Number of items to skip
     * } $params Request parameters
     * @param array<string, mixed>|null $options Additional request options
     * @return ListEstimatesResponseDTO Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function listEstimates(
        array $params,
        ?array $options = null
    ): ListEstimatesResponseDTO {
        $paramDefs = [['name' => 'altId', 'in' => 'query'], ['name' => 'altType', 'in' => 'query'], ['name' => 'startAt', 'in' => 'query'], ['name' => 'endAt', 'in' => 'query'], ['name' => 'search', 'in' => 'query'], ['name' => 'status', 'in' => 'query'], ['name' => 'contactId', 'in' => 'query'], ['name' => 'limit', 'in' => 'query'], ['name' => 'offset', 'in' => 'query']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["Location-Access","Agency-Access"];

        $url = RequestUtils::buildUrl('/invoices/estimate/list', $extracted['path']);
        
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
            
            return new ListEstimatesResponseDTO($responseData);
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
     * Update estimate last visited at
     * API to update estimate last visited at by estimate id
     * 
     * @param EstimateIdParam $requestBody Request body data
     * @param array<string, mixed>|null $options Additional request options
     * @return mixed Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function updateEstimateLastVisitedAt(
        $requestBody,
        ?array $options = null
    ) {
        if ($requestBody !== null && is_object($requestBody) && method_exists($requestBody, 'toArray')) {
            $requestBody = $requestBody->toArray();
        }
        $paramDefs = [];
        $extracted = RequestUtils::extractParams([], $paramDefs);
        $requirements = ["Location-Access","Agency-Access"];

        $url = RequestUtils::buildUrl('/invoices/estimate/stats/last-visited-at', $extracted['path']);
        
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
     * List Estimate Templates
     * Get a list of estimate templates or a specific template by ID
     * 
     * @param array{
     *   altId: string // Location Id or Agency Id
     *   altType: string
     *   search?: string // To search for an estimate template by id / name
     *   limit: string // Limit the number of items to return
     *   offset: string // Number of items to skip
     * } $params Request parameters
     * @param array<string, mixed>|null $options Additional request options
     * @return ListEstimateTemplateResponseDTO Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function listEstimateTemplates(
        array $params,
        ?array $options = null
    ): ListEstimateTemplateResponseDTO {
        $paramDefs = [['name' => 'altId', 'in' => 'query'], ['name' => 'altType', 'in' => 'query'], ['name' => 'search', 'in' => 'query'], ['name' => 'limit', 'in' => 'query'], ['name' => 'offset', 'in' => 'query']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["Location-Access","Agency-Access"];

        $url = RequestUtils::buildUrl('/invoices/estimate/template', $extracted['path']);
        
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
            
            return new ListEstimateTemplateResponseDTO($responseData);
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
     * Create Estimate Template
     * Create a new estimate template
     * 
     * @param EstimateTemplatesDto $requestBody Request body data
     * @param array<string, mixed>|null $options Additional request options
     * @return EstimateTemplateResponseDTO Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function createEstimateTemplate(
        $requestBody,
        ?array $options = null
    ): EstimateTemplateResponseDTO {
        if ($requestBody !== null && is_object($requestBody) && method_exists($requestBody, 'toArray')) {
            $requestBody = $requestBody->toArray();
        }
        $paramDefs = [];
        $extracted = RequestUtils::extractParams([], $paramDefs);
        $requirements = ["Location-Access","Agency-Access"];

        $url = RequestUtils::buildUrl('/invoices/estimate/template', $extracted['path']);
        
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
            
            return new EstimateTemplateResponseDTO($responseData);
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
     * Update Estimate Template
     * Update an existing estimate template
     * 
     * @param array{
     *   templateId: string // Template Id
     * } $params Request parameters
     * @param EstimateTemplatesDto $requestBody Request body data
     * @param array<string, mixed>|null $options Additional request options
     * @return EstimateTemplateResponseDTO Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function updateEstimateTemplate(
        array $params,
        $requestBody,
        ?array $options = null
    ): EstimateTemplateResponseDTO {
        if ($requestBody !== null && is_object($requestBody) && method_exists($requestBody, 'toArray')) {
            $requestBody = $requestBody->toArray();
        }
        $paramDefs = [['name' => 'templateId', 'in' => 'path']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["Location-Access","Agency-Access"];

        $url = RequestUtils::buildUrl('/invoices/estimate/template/{templateId}', $extracted['path']);
        
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
            
            return new EstimateTemplateResponseDTO($responseData);
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
     * Delete Estimate Template
     * Delete an existing estimate template
     * 
     * @param array{
     *   templateId: string // Template Id
     * } $params Request parameters
     * @param AltDto $requestBody Request body data
     * @param array<string, mixed>|null $options Additional request options
     * @return EstimateTemplateResponseDTO Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function deleteEstimateTemplate(
        array $params,
        $requestBody,
        ?array $options = null
    ): EstimateTemplateResponseDTO {
        if ($requestBody !== null && is_object($requestBody) && method_exists($requestBody, 'toArray')) {
            $requestBody = $requestBody->toArray();
        }
        $paramDefs = [['name' => 'templateId', 'in' => 'path']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["Location-Access","Agency-Access"];

        $url = RequestUtils::buildUrl('/invoices/estimate/template/{templateId}', $extracted['path']);
        
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
            
            return new EstimateTemplateResponseDTO($responseData);
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
     * Preview Estimate Template
     * Get a preview of an estimate template
     * 
     * @param array{
     *   altId: string // Location Id or Agency Id
     *   altType: string
     *   templateId: string // Template Id
     * } $params Request parameters
     * @param array<string, mixed>|null $options Additional request options
     * @return EstimateTemplateResponseDTO Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function previewEstimateTemplate(
        array $params,
        ?array $options = null
    ): EstimateTemplateResponseDTO {
        $paramDefs = [['name' => 'altId', 'in' => 'query'], ['name' => 'altType', 'in' => 'query'], ['name' => 'templateId', 'in' => 'query']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["Location-Access","Agency-Access"];

        $url = RequestUtils::buildUrl('/invoices/estimate/template/preview', $extracted['path']);
        
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
            
            return new EstimateTemplateResponseDTO($responseData);
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
     * Create Invoice
     * API to create an invoice
     * 
     * @param CreateInvoiceDto $requestBody Request body data
     * @param array<string, mixed>|null $options Additional request options
     * @return CreateInvoiceResponseDto Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function createInvoice(
        $requestBody,
        ?array $options = null
    ): CreateInvoiceResponseDto {
        if ($requestBody !== null && is_object($requestBody) && method_exists($requestBody, 'toArray')) {
            $requestBody = $requestBody->toArray();
        }
        $paramDefs = [];
        $extracted = RequestUtils::extractParams([], $paramDefs);
        $requirements = ["Location-Access","Agency-Access"];

        $url = RequestUtils::buildUrl('/invoices/', $extracted['path']);
        
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
            
            return new CreateInvoiceResponseDto($responseData);
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
     * List invoices
     * API to get list of invoices
     * 
     * @param array{
     *   altId: string // location Id / company Id based on altType
     *   altType: string // Alt Type
     *   status?: string // status to be filtered
     *   startAt?: string // startAt in YYYY-MM-DD format
     *   endAt?: string // endAt in YYYY-MM-DD format
     *   search?: string // To search for an invoice by id / name / email / phoneNo
     *   paymentMode?: string // payment mode
     *   contactId?: string // Contact ID for the invoice
     *   limit: string // Limit the number of items to return
     *   offset: string // Number of items to skip
     *   sortField?: string // The field on which sorting should be applied
     *   sortOrder?: string // The order of sort which should be applied for the sortField
     * } $params Request parameters
     * @param array<string, mixed>|null $options Additional request options
     * @return ListInvoicesResponseDto Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function listInvoices(
        array $params,
        ?array $options = null
    ): ListInvoicesResponseDto {
        $paramDefs = [['name' => 'altId', 'in' => 'query'], ['name' => 'altType', 'in' => 'query'], ['name' => 'status', 'in' => 'query'], ['name' => 'startAt', 'in' => 'query'], ['name' => 'endAt', 'in' => 'query'], ['name' => 'search', 'in' => 'query'], ['name' => 'paymentMode', 'in' => 'query'], ['name' => 'contactId', 'in' => 'query'], ['name' => 'limit', 'in' => 'query'], ['name' => 'offset', 'in' => 'query'], ['name' => 'sortField', 'in' => 'query'], ['name' => 'sortOrder', 'in' => 'query']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["Location-Access","Agency-Access"];

        $url = RequestUtils::buildUrl('/invoices/', $extracted['path']);
        
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
            
            return new ListInvoicesResponseDto($responseData);
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

