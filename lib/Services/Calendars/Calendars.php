<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Calendars;

use HighLevel\HighLevel;
use HighLevel\GHLError;
use HighLevel\Utils\RequestUtils;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Exception\RequestException;
use HighLevel\Services\Calendars\Models\AllGroupsSuccessfulResponseDTO;
use HighLevel\Services\Calendars\Models\GroupCreateDTO;
use HighLevel\Services\Calendars\Models\GroupCreateSuccessfulResponseDTO;
use HighLevel\Services\Calendars\Models\ValidateGroupSlugPostBody;
use HighLevel\Services\Calendars\Models\ValidateGroupSlugSuccessResponseDTO;
use HighLevel\Services\Calendars\Models\GroupSuccessfulResponseDTO;
use HighLevel\Services\Calendars\Models\GroupUpdateDTO;
use HighLevel\Services\Calendars\Models\GroupStatusUpdateParams;
use HighLevel\Services\Calendars\Models\ServiceBookingsListResponseDTO;
use HighLevel\Services\Calendars\Models\CreatePublicServiceBookingDTO;
use HighLevel\Services\Calendars\Models\CreateOrUpdateServiceBookingResponseDTO;
use HighLevel\Services\Calendars\Models\ServiceBookingResponseDTO;
use HighLevel\Services\Calendars\Models\UpdateServiceBookingDTO;
use HighLevel\Services\Calendars\Models\DeleteServiceBookingResponseDTO;
use HighLevel\Services\Calendars\Models\ServicesListResponseDTO;
use HighLevel\Services\Calendars\Models\CreateServiceDTO;
use HighLevel\Services\Calendars\Models\ServiceResponseWrapperDTO;
use HighLevel\Services\Calendars\Models\UpdateServiceDTO;
use HighLevel\Services\Calendars\Models\DeleteServiceResponseDTO;
use HighLevel\Services\Calendars\Models\ServiceLocationListResponseDTO;
use HighLevel\Services\Calendars\Models\CreateServiceLocationDTO;
use HighLevel\Services\Calendars\Models\ServiceLocationResponseDTO;
use HighLevel\Services\Calendars\Models\UpdateServiceLocationDTO;
use HighLevel\Services\Calendars\Models\DeleteServiceLocationResponseDTO;
use HighLevel\Services\Calendars\Models\AppointmentCreateSchema;
use HighLevel\Services\Calendars\Models\AppointmentSchemaResponse;
use HighLevel\Services\Calendars\Models\AppointmentEditSchema;
use HighLevel\Services\Calendars\Models\GetCalendarEventSuccessfulResponseDTO;
use HighLevel\Services\Calendars\Models\GetCalendarEventsSuccessfulResponseDTO;
use HighLevel\Services\Calendars\Models\BlockSlotCreateRequestDTO;
use HighLevel\Services\Calendars\Models\BlockedSlotSuccessfulResponseDto;
use HighLevel\Services\Calendars\Models\BlockSlotEditRequestDTO;
use HighLevel\Services\Calendars\Models\CalendarUpdateDTO;
use HighLevel\Services\Calendars\Models\CalendarByIdSuccessfulResponseDTO;
use HighLevel\Services\Calendars\Models\CalendarDeleteSuccessfulResponseDTO;
use HighLevel\Services\Calendars\Models\DeleteAppointmentSchema;
use HighLevel\Services\Calendars\Models\DeleteEventSuccessfulResponseDto;
use HighLevel\Services\Calendars\Models\GetNotesListSuccessfulResponseDto;
use HighLevel\Services\Calendars\Models\NotesDTO;
use HighLevel\Services\Calendars\Models\GetCreateUpdateNoteSuccessfulResponseDto;
use HighLevel\Services\Calendars\Models\DeleteNoteSuccessfulResponseDto;
use HighLevel\Services\Calendars\Models\CalendarResourceByIdResponseDTO;
use HighLevel\Services\Calendars\Models\UpdateCalendarResourceDTO;
use HighLevel\Services\Calendars\Models\CalendarResourceResponseDTO;
use HighLevel\Services\Calendars\Models\ResourceDeleteResponseDTO;
use HighLevel\Services\Calendars\Models\CreateCalendarResourceDTO;
use HighLevel\Services\Calendars\Models\CalendarNotificationResponseDTO;
use HighLevel\Services\Calendars\Models\UpdateCalendarNotificationsDTO;
use HighLevel\Services\Calendars\Models\CalendarNotificationDeleteResponseDTO;
use HighLevel\Services\Calendars\Models\GetAllSchedulesResponseDTO;
use HighLevel\Services\Calendars\Models\ScheduleResponseDTO;
use HighLevel\Services\Calendars\Models\UpdateScheduleDTO;
use HighLevel\Services\Calendars\Models\CreateScheduleDTO;
use HighLevel\Services\Calendars\Models\CreateEventCalendarScheduleDTO;
use HighLevel\Services\Calendars\Models\EventCalendarScheduleWrapperDTO;
use HighLevel\Services\Calendars\Models\UpdateEventCalendarScheduleDTO;
use HighLevel\Services\Calendars\Models\CalendarsGetSuccessfulResponseDTO;
use HighLevel\Services\Calendars\Models\CalendarCreateDTO;

/**
 * Calendars Service
 * Documentation for Calendars API
 * 
 * @package HighLevel\Services\Calendars
 */
class Calendars
{
    /**
     * HighLevel client instance
     * @var HighLevel
     */
    private HighLevel $client;

    /**
     * Create a new Calendars service instance
     * 
     * @param HighLevel $client HighLevel client instance
     */
    public function __construct(HighLevel $client)
    {
        $this->client = $client;
    }

    /**
     * Get Groups
     * Get all calendar groups in a location.
     * 
     * @param array{
     *   locationId: string // Location Id
     * } $params Request parameters
     * @param array<string, mixed>|null $options Additional request options
     * @return AllGroupsSuccessfulResponseDTO Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function getGroups(
        array $params,
        ?array $options = null
    ): AllGroupsSuccessfulResponseDTO {
        $paramDefs = [['name' => 'locationId', 'in' => 'query']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["bearer"];

        $url = RequestUtils::buildUrl('/calendars/groups', $extracted['path']);
        
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
            
            return new AllGroupsSuccessfulResponseDTO($responseData);
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
     * Create Calendar Group
     * Create Calendar Group
     * 
     * @param GroupCreateDTO $requestBody Request body data
     * @param array<string, mixed>|null $options Additional request options
     * @return GroupCreateSuccessfulResponseDTO Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function createCalendarGroup(
        $requestBody,
        ?array $options = null
    ): GroupCreateSuccessfulResponseDTO {
        if ($requestBody !== null && is_object($requestBody) && method_exists($requestBody, 'toArray')) {
            $requestBody = $requestBody->toArray();
        }
        $paramDefs = [];
        $extracted = RequestUtils::extractParams([], $paramDefs);
        $requirements = ["bearer"];

        $url = RequestUtils::buildUrl('/calendars/groups', $extracted['path']);
        
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
            
            return new GroupCreateSuccessfulResponseDTO($responseData);
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
     * Validate group slug
     * Validate if group slug is available or not.
     * 
     * @param ValidateGroupSlugPostBody $requestBody Request body data
     * @param array<string, mixed>|null $options Additional request options
     * @return ValidateGroupSlugSuccessResponseDTO Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function validateGroupsSlug(
        $requestBody,
        ?array $options = null
    ): ValidateGroupSlugSuccessResponseDTO {
        if ($requestBody !== null && is_object($requestBody) && method_exists($requestBody, 'toArray')) {
            $requestBody = $requestBody->toArray();
        }
        $paramDefs = [];
        $extracted = RequestUtils::extractParams([], $paramDefs);
        $requirements = ["bearer"];

        $url = RequestUtils::buildUrl('/calendars/groups/validate-slug', $extracted['path']);
        
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
            
            return new ValidateGroupSlugSuccessResponseDTO($responseData);
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
     * Delete Group
     * Delete Group
     * 
     * @param array{
     *   groupId: string // Group Id
     * } $params Request parameters
     * @param array<string, mixed>|null $options Additional request options
     * @return GroupSuccessfulResponseDTO Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function deleteGroup(
        array $params,
        ?array $options = null
    ): GroupSuccessfulResponseDTO {
        $paramDefs = [['name' => 'groupId', 'in' => 'path']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["bearer"];

        $url = RequestUtils::buildUrl('/calendars/groups/{groupId}', $extracted['path']);
        
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
            
            return new GroupSuccessfulResponseDTO($responseData);
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
     * Update Group
     * Update Group by group ID
     * 
     * @param array{
     *   groupId: string // Group Id
     * } $params Request parameters
     * @param GroupUpdateDTO $requestBody Request body data
     * @param array<string, mixed>|null $options Additional request options
     * @return GroupCreateSuccessfulResponseDTO Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function editGroup(
        array $params,
        $requestBody,
        ?array $options = null
    ): GroupCreateSuccessfulResponseDTO {
        if ($requestBody !== null && is_object($requestBody) && method_exists($requestBody, 'toArray')) {
            $requestBody = $requestBody->toArray();
        }
        $paramDefs = [['name' => 'groupId', 'in' => 'path']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["bearer"];

        $url = RequestUtils::buildUrl('/calendars/groups/{groupId}', $extracted['path']);
        
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
            
            return new GroupCreateSuccessfulResponseDTO($responseData);
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
     * Disable Group
     * Disable Group
     * 
     * @param array{
     *   groupId: string // Group Id
     * } $params Request parameters
     * @param GroupStatusUpdateParams $requestBody Request body data
     * @param array<string, mixed>|null $options Additional request options
     * @return GroupSuccessfulResponseDTO Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function disableGroup(
        array $params,
        $requestBody,
        ?array $options = null
    ): GroupSuccessfulResponseDTO {
        if ($requestBody !== null && is_object($requestBody) && method_exists($requestBody, 'toArray')) {
            $requestBody = $requestBody->toArray();
        }
        $paramDefs = [['name' => 'groupId', 'in' => 'path']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["bearer"];

        $url = RequestUtils::buildUrl('/calendars/groups/{groupId}/status', $extracted['path']);
        
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
            
            return new GroupSuccessfulResponseDTO($responseData);
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
     * Get Service Bookings
     * Retrieve service bookings for a location within a given date range, with an optional service location filter.
     * 
     * @param array{
     *   locationId: string // Location ID
     *   startTime: string // Start Time (timestamp in milliseconds as string)
     *   endTime: string // End Time (timestamp in milliseconds as string)
     *   timezone?: string // Timezone
     *   serviceLocationId?: string // Service Location ID
     * } $params Request parameters
     * @param array<string, mixed>|null $options Additional request options
     * @return ServiceBookingsListResponseDTO Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function getServiceBookings(
        array $params,
        ?array $options = null
    ): ServiceBookingsListResponseDTO {
        $paramDefs = [['name' => 'locationId', 'in' => 'query'], ['name' => 'startTime', 'in' => 'query'], ['name' => 'endTime', 'in' => 'query'], ['name' => 'timezone', 'in' => 'query'], ['name' => 'serviceLocationId', 'in' => 'query']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["bearer"];

        $url = RequestUtils::buildUrl('/calendars/services/bookings', $extracted['path']);
        
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
            
            return new ServiceBookingsListResponseDTO($responseData);
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
     * Create Service Booking
     * Create a new service booking
     * 
     * @param array{
     *   overrideAvailability?: bool // If true the time slot validation would be avoided for any booking creation/update (even the skipSchedulingNotice)
     *   skipSchedulingNotice?: bool // If set to true, the minimum scheduling notice and date range would be ignored
     * } $params Request parameters
     * @param CreatePublicServiceBookingDTO $requestBody Request body data
     * @param array<string, mixed>|null $options Additional request options
     * @return CreateOrUpdateServiceBookingResponseDTO Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function createServiceBooking(
        array $params,
        $requestBody,
        ?array $options = null
    ): CreateOrUpdateServiceBookingResponseDTO {
        if ($requestBody !== null && is_object($requestBody) && method_exists($requestBody, 'toArray')) {
            $requestBody = $requestBody->toArray();
        }
        $paramDefs = [['name' => 'overrideAvailability', 'in' => 'query'], ['name' => 'skipSchedulingNotice', 'in' => 'query']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["bearer"];

        $url = RequestUtils::buildUrl('/calendars/services/bookings', $extracted['path']);
        
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
            
            return new CreateOrUpdateServiceBookingResponseDTO($responseData);
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
     * Get Service Booking by ID
     * Get a specific service booking by ID
     * 
     * @param array{
     *   bookingId: string // Unique Service Booking ID
     * } $params Request parameters
     * @param array<string, mixed>|null $options Additional request options
     * @return ServiceBookingResponseDTO Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function getServiceBookingById(
        array $params,
        ?array $options = null
    ): ServiceBookingResponseDTO {
        $paramDefs = [['name' => 'bookingId', 'in' => 'path']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["bearer"];

        $url = RequestUtils::buildUrl('/calendars/services/bookings/{bookingId}', $extracted['path']);
        
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
            
            return new ServiceBookingResponseDTO($responseData);
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
     * Update Service Booking
     * Update an existing service booking
     * 
     * @param array{
     *   bookingId: string // Unique Service Booking ID
     *   overrideAvailability?: bool // If true the time slot validation would be avoided for any booking creation/update (even the skipSchedulingNotice)
     *   skipSchedulingNotice?: bool // If set to true, the minimum scheduling notice and date range would be ignored
     * } $params Request parameters
     * @param UpdateServiceBookingDTO $requestBody Request body data
     * @param array<string, mixed>|null $options Additional request options
     * @return CreateOrUpdateServiceBookingResponseDTO Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function updateServiceBooking(
        array $params,
        $requestBody,
        ?array $options = null
    ): CreateOrUpdateServiceBookingResponseDTO {
        if ($requestBody !== null && is_object($requestBody) && method_exists($requestBody, 'toArray')) {
            $requestBody = $requestBody->toArray();
        }
        $paramDefs = [['name' => 'bookingId', 'in' => 'path'], ['name' => 'overrideAvailability', 'in' => 'query'], ['name' => 'skipSchedulingNotice', 'in' => 'query']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["bearer"];

        $url = RequestUtils::buildUrl('/calendars/services/bookings/{bookingId}', $extracted['path']);
        
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
            
            return new CreateOrUpdateServiceBookingResponseDTO($responseData);
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
     * Delete Service Booking
     * Delete a service booking by ID
     * 
     * @param array{
     *   bookingId: string // Unique Service Booking ID
     * } $params Request parameters
     * @param array<string, mixed>|null $options Additional request options
     * @return DeleteServiceBookingResponseDTO Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function deleteServiceBooking(
        array $params,
        ?array $options = null
    ): DeleteServiceBookingResponseDTO {
        $paramDefs = [['name' => 'bookingId', 'in' => 'path']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["bearer"];

        $url = RequestUtils::buildUrl('/calendars/services/bookings/{bookingId}', $extracted['path']);
        
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
            
            return new DeleteServiceBookingResponseDTO($responseData);
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
     * Get Services
     * Get all services in a location.
     * 
     * @param array{
     *   locationId: string // Location ID
     *   serviceCategoryId?: string // Filter by service category ID
     *   isPrivate?: bool // Filter services: true = private only, false = public only, unset = all services
     * } $params Request parameters
     * @param array<string, mixed>|null $options Additional request options
     * @return ServicesListResponseDTO Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function getServicesCatalog(
        array $params,
        ?array $options = null
    ): ServicesListResponseDTO {
        $paramDefs = [['name' => 'locationId', 'in' => 'query'], ['name' => 'serviceCategoryId', 'in' => 'query'], ['name' => 'isPrivate', 'in' => 'query']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["bearer"];

        $url = RequestUtils::buildUrl('/calendars/services/catalog', $extracted['path']);
        
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
            
            return new ServicesListResponseDTO($responseData);
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
     * Create Service
     * Create new service in a location.
     * 
     * @param CreateServiceDTO $requestBody Request body data
     * @param array<string, mixed>|null $options Additional request options
     * @return ServiceResponseWrapperDTO Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function createServiceCatalog(
        $requestBody,
        ?array $options = null
    ): ServiceResponseWrapperDTO {
        if ($requestBody !== null && is_object($requestBody) && method_exists($requestBody, 'toArray')) {
            $requestBody = $requestBody->toArray();
        }
        $paramDefs = [];
        $extracted = RequestUtils::extractParams([], $paramDefs);
        $requirements = ["bearer"];

        $url = RequestUtils::buildUrl('/calendars/services/catalog', $extracted['path']);
        
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
            
            return new ServiceResponseWrapperDTO($responseData);
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
     * Get Service by ID
     * Get service by ID.
     * 
     * @param array{
     *   serviceId: string // Service ID
     * } $params Request parameters
     * @param array<string, mixed>|null $options Additional request options
     * @return ServiceResponseWrapperDTO Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function getServiceCatalogById(
        array $params,
        ?array $options = null
    ): ServiceResponseWrapperDTO {
        $paramDefs = [['name' => 'serviceId', 'in' => 'path']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["bearer"];

        $url = RequestUtils::buildUrl('/calendars/services/catalog/{serviceId}', $extracted['path']);
        
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
            
            return new ServiceResponseWrapperDTO($responseData);
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
     * Update Service
     * Update service by ID.
     * 
     * @param array{
     *   serviceId: string // Service ID
     * } $params Request parameters
     * @param UpdateServiceDTO $requestBody Request body data
     * @param array<string, mixed>|null $options Additional request options
     * @return ServiceResponseWrapperDTO Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function updateServiceCatalog(
        array $params,
        $requestBody,
        ?array $options = null
    ): ServiceResponseWrapperDTO {
        if ($requestBody !== null && is_object($requestBody) && method_exists($requestBody, 'toArray')) {
            $requestBody = $requestBody->toArray();
        }
        $paramDefs = [['name' => 'serviceId', 'in' => 'path']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["bearer"];

        $url = RequestUtils::buildUrl('/calendars/services/catalog/{serviceId}', $extracted['path']);
        
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
            
            return new ServiceResponseWrapperDTO($responseData);
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
     * Delete Service
     * Delete service by ID.
     * 
     * @param array{
     *   serviceId: string // Service ID
     * } $params Request parameters
     * @param array<string, mixed>|null $options Additional request options
     * @return DeleteServiceResponseDTO Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function deleteServiceCatalog(
        array $params,
        ?array $options = null
    ): DeleteServiceResponseDTO {
        $paramDefs = [['name' => 'serviceId', 'in' => 'path']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["bearer"];

        $url = RequestUtils::buildUrl('/calendars/services/catalog/{serviceId}', $extracted['path']);
        
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
            
            return new DeleteServiceResponseDTO($responseData);
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
     * Get Service Locations
     * Get all service locations
     * 
     * @param array{
     *   locationId: string // Location ID
     * } $params Request parameters
     * @param array<string, mixed>|null $options Additional request options
     * @return ServiceLocationListResponseDTO Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function getServiceLocations(
        array $params,
        ?array $options = null
    ): ServiceLocationListResponseDTO {
        $paramDefs = [['name' => 'locationId', 'in' => 'query']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["bearer"];

        $url = RequestUtils::buildUrl('/calendars/services/locations', $extracted['path']);
        
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
            
            return new ServiceLocationListResponseDTO($responseData);
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
     * Create Service Location
     * Create a new service location
     * 
     * @param CreateServiceLocationDTO $requestBody Request body data
     * @param array<string, mixed>|null $options Additional request options
     * @return ServiceLocationResponseDTO Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function createServiceLocation(
        $requestBody,
        ?array $options = null
    ): ServiceLocationResponseDTO {
        if ($requestBody !== null && is_object($requestBody) && method_exists($requestBody, 'toArray')) {
            $requestBody = $requestBody->toArray();
        }
        $paramDefs = [];
        $extracted = RequestUtils::extractParams([], $paramDefs);
        $requirements = ["bearer"];

        $url = RequestUtils::buildUrl('/calendars/services/locations', $extracted['path']);
        
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
            
            return new ServiceLocationResponseDTO($responseData);
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
     * Get Service Location by ID
     * Get service location by ID
     * 
     * @param array{
     *   serviceLocationId: string // Unique Service Location ID
     * } $params Request parameters
     * @param array<string, mixed>|null $options Additional request options
     * @return ServiceLocationResponseDTO Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function getServiceLocationById(
        array $params,
        ?array $options = null
    ): ServiceLocationResponseDTO {
        $paramDefs = [['name' => 'serviceLocationId', 'in' => 'path']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["bearer"];

        $url = RequestUtils::buildUrl('/calendars/services/locations/{serviceLocationId}', $extracted['path']);
        
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
            
            return new ServiceLocationResponseDTO($responseData);
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
     * Update Service Location
     * Update an existing service location
     * 
     * @param array{
     *   serviceLocationId: string // Unique Service Location ID
     * } $params Request parameters
     * @param UpdateServiceLocationDTO $requestBody Request body data
     * @param array<string, mixed>|null $options Additional request options
     * @return ServiceLocationResponseDTO Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function updateServiceLocation(
        array $params,
        $requestBody,
        ?array $options = null
    ): ServiceLocationResponseDTO {
        if ($requestBody !== null && is_object($requestBody) && method_exists($requestBody, 'toArray')) {
            $requestBody = $requestBody->toArray();
        }
        $paramDefs = [['name' => 'serviceLocationId', 'in' => 'path']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["bearer"];

        $url = RequestUtils::buildUrl('/calendars/services/locations/{serviceLocationId}', $extracted['path']);
        
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
            
            return new ServiceLocationResponseDTO($responseData);
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
     * Delete Service Location
     * Delete a service location by ID
     * 
     * @param array{
     *   serviceLocationId: string // Unique Service Location ID
     * } $params Request parameters
     * @param array<string, mixed>|null $options Additional request options
     * @return DeleteServiceLocationResponseDTO Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function deleteServiceLocation(
        array $params,
        ?array $options = null
    ): DeleteServiceLocationResponseDTO {
        $paramDefs = [['name' => 'serviceLocationId', 'in' => 'path']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["bearer"];

        $url = RequestUtils::buildUrl('/calendars/services/locations/{serviceLocationId}', $extracted['path']);
        
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
            
            return new DeleteServiceLocationResponseDTO($responseData);
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
     * Create appointment
     * Create appointment
     * 
     * @param AppointmentCreateSchema $requestBody Request body data
     * @param array<string, mixed>|null $options Additional request options
     * @return AppointmentSchemaResponse Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function createAppointment(
        $requestBody,
        ?array $options = null
    ): AppointmentSchemaResponse {
        if ($requestBody !== null && is_object($requestBody) && method_exists($requestBody, 'toArray')) {
            $requestBody = $requestBody->toArray();
        }
        $paramDefs = [];
        $extracted = RequestUtils::extractParams([], $paramDefs);
        $requirements = ["bearer"];

        $url = RequestUtils::buildUrl('/calendars/events/appointments', $extracted['path']);
        
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
            
            return new AppointmentSchemaResponse($responseData);
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
     * Update Appointment
     * Update appointment
     * 
     * @param array{
     *   eventId: string // Event Id or Instance id. For recurring appointments send masterEventId to modify original series.
     * } $params Request parameters
     * @param AppointmentEditSchema $requestBody Request body data
     * @param array<string, mixed>|null $options Additional request options
     * @return AppointmentSchemaResponse Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function editAppointment(
        array $params,
        $requestBody,
        ?array $options = null
    ): AppointmentSchemaResponse {
        if ($requestBody !== null && is_object($requestBody) && method_exists($requestBody, 'toArray')) {
            $requestBody = $requestBody->toArray();
        }
        $paramDefs = [['name' => 'eventId', 'in' => 'path']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["bearer"];

        $url = RequestUtils::buildUrl('/calendars/events/appointments/{eventId}', $extracted['path']);
        
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
            
            return new AppointmentSchemaResponse($responseData);
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
     * Get Appointment
     * Get appointment by ID
     * 
     * @param array{
     *   eventId: string // Event Id or Instance id. For recurring appointments send masterEventId to modify original series.
     * } $params Request parameters
     * @param array<string, mixed>|null $options Additional request options
     * @return GetCalendarEventSuccessfulResponseDTO Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function getAppointment(
        array $params,
        ?array $options = null
    ): GetCalendarEventSuccessfulResponseDTO {
        $paramDefs = [['name' => 'eventId', 'in' => 'path']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["bearer"];

        $url = RequestUtils::buildUrl('/calendars/events/appointments/{eventId}', $extracted['path']);
        
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
            
            return new GetCalendarEventSuccessfulResponseDTO($responseData);
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
     * Get Calendar Events
     * Get Calendar Events
     * 
     * @param array{
     *   locationId: string // Location Id
     *   userId?: string // User Id - Owner of an appointment. Either of userId, groupId or calendarId is required
     *   calendarId?: string // Either of calendarId, userId or groupId is required
     *   groupId?: string // Either of groupId, calendarId or userId is required
     *   startTime: string // Start Time (in millis)
     *   endTime: string // End Time (in millis)
     * } $params Request parameters
     * @param array<string, mixed>|null $options Additional request options
     * @return GetCalendarEventsSuccessfulResponseDTO Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function getCalendarEvents(
        array $params,
        ?array $options = null
    ): GetCalendarEventsSuccessfulResponseDTO {
        $paramDefs = [['name' => 'locationId', 'in' => 'query'], ['name' => 'userId', 'in' => 'query'], ['name' => 'calendarId', 'in' => 'query'], ['name' => 'groupId', 'in' => 'query'], ['name' => 'startTime', 'in' => 'query'], ['name' => 'endTime', 'in' => 'query']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["bearer"];

        $url = RequestUtils::buildUrl('/calendars/events', $extracted['path']);
        
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
            
            return new GetCalendarEventsSuccessfulResponseDTO($responseData);
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
     * Get Blocked Slots
     * Get Blocked Slots
     * 
     * @param array{
     *   locationId: string // Location Id
     *   userId?: string // User Id - Owner of an appointment. Either of userId, groupId or calendarId is required
     *   calendarId?: string // Either of calendarId, userId or groupId is required
     *   groupId?: string // Either of groupId, calendarId or userId is required
     *   startTime: string // Start Time (in millis)
     *   endTime: string // End Time (in millis)
     * } $params Request parameters
     * @param array<string, mixed>|null $options Additional request options
     * @return GetCalendarEventsSuccessfulResponseDTO Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function getBlockedSlots(
        array $params,
        ?array $options = null
    ): GetCalendarEventsSuccessfulResponseDTO {
        $paramDefs = [['name' => 'locationId', 'in' => 'query'], ['name' => 'userId', 'in' => 'query'], ['name' => 'calendarId', 'in' => 'query'], ['name' => 'groupId', 'in' => 'query'], ['name' => 'startTime', 'in' => 'query'], ['name' => 'endTime', 'in' => 'query']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["bearer"];

        $url = RequestUtils::buildUrl('/calendars/blocked-slots', $extracted['path']);
        
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
            
            return new GetCalendarEventsSuccessfulResponseDTO($responseData);
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
     * Create Block Slot
     * Create block slot
     * 
     * @param BlockSlotCreateRequestDTO $requestBody Request body data
     * @param array<string, mixed>|null $options Additional request options
     * @return BlockedSlotSuccessfulResponseDto Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function createBlockSlot(
        $requestBody,
        ?array $options = null
    ): BlockedSlotSuccessfulResponseDto {
        if ($requestBody !== null && is_object($requestBody) && method_exists($requestBody, 'toArray')) {
            $requestBody = $requestBody->toArray();
        }
        $paramDefs = [];
        $extracted = RequestUtils::extractParams([], $paramDefs);
        $requirements = ["bearer"];

        $url = RequestUtils::buildUrl('/calendars/events/block-slots', $extracted['path']);
        
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
            
            return new BlockedSlotSuccessfulResponseDto($responseData);
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
     * Update Block Slot
     * Update block slot by ID
     * 
     * @param array{
     *   eventId: string // Event Id or Instance id. For recurring appointments send masterEventId to modify original series.
     * } $params Request parameters
     * @param BlockSlotEditRequestDTO $requestBody Request body data
     * @param array<string, mixed>|null $options Additional request options
     * @return BlockedSlotSuccessfulResponseDto Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function editBlockSlot(
        array $params,
        $requestBody,
        ?array $options = null
    ): BlockedSlotSuccessfulResponseDto {
        if ($requestBody !== null && is_object($requestBody) && method_exists($requestBody, 'toArray')) {
            $requestBody = $requestBody->toArray();
        }
        $paramDefs = [['name' => 'eventId', 'in' => 'path']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["bearer"];

        $url = RequestUtils::buildUrl('/calendars/events/block-slots/{eventId}', $extracted['path']);
        
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
            
            return new BlockedSlotSuccessfulResponseDto($responseData);
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
     * Get Free Slots
     * Get free slots for a calendar between a date range. Optionally a consumer can also request free slots in a particular timezone and also for a particular user.
     * 
     * @param array{
     *   calendarId: string // Calendar Id
     *   startDate: int // Start Date (**⚠️ Important:** Date range cannot be more than 31 days)
     *   endDate: int // End Date (**⚠️ Important:** Date range cannot be more than 31 days)
     *   timezone?: string // The timezone in which the free slots are returned
     *   userId?: string // The user for whom the free slots are returned
     *   userIds?: array // The users for whom the free slots are returned
     * } $params Request parameters
     * @param array<string, mixed>|null $options Additional request options
     * @return mixed Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function getSlots(
        array $params,
        ?array $options = null
    ) {
        $paramDefs = [['name' => 'calendarId', 'in' => 'path'], ['name' => 'startDate', 'in' => 'query'], ['name' => 'endDate', 'in' => 'query'], ['name' => 'timezone', 'in' => 'query'], ['name' => 'userId', 'in' => 'query'], ['name' => 'userIds', 'in' => 'query']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["bearer"];

        $url = RequestUtils::buildUrl('/calendars/{calendarId}/free-slots', $extracted['path']);
        
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
     * Update Calendar
     * Update calendar by ID.
     * 
     * @param array{
     *   calendarId: string // Calendar Id
     * } $params Request parameters
     * @param CalendarUpdateDTO $requestBody Request body data
     * @param array<string, mixed>|null $options Additional request options
     * @return CalendarByIdSuccessfulResponseDTO Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function updateCalendar(
        array $params,
        $requestBody,
        ?array $options = null
    ): CalendarByIdSuccessfulResponseDTO {
        if ($requestBody !== null && is_object($requestBody) && method_exists($requestBody, 'toArray')) {
            $requestBody = $requestBody->toArray();
        }
        $paramDefs = [['name' => 'calendarId', 'in' => 'path']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["bearer"];

        $url = RequestUtils::buildUrl('/calendars/{calendarId}', $extracted['path']);
        
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
            
            return new CalendarByIdSuccessfulResponseDTO($responseData);
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
     * Get Calendar
     * Get calendar by ID
     * 
     * @param array{
     *   calendarId: string // Calendar Id
     * } $params Request parameters
     * @param array<string, mixed>|null $options Additional request options
     * @return CalendarByIdSuccessfulResponseDTO Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function getCalendar(
        array $params,
        ?array $options = null
    ): CalendarByIdSuccessfulResponseDTO {
        $paramDefs = [['name' => 'calendarId', 'in' => 'path']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["bearer"];

        $url = RequestUtils::buildUrl('/calendars/{calendarId}', $extracted['path']);
        
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
            
            return new CalendarByIdSuccessfulResponseDTO($responseData);
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
     * Delete Calendar
     * Delete calendar by ID
     * 
     * @param array{
     *   calendarId: string // Calendar Id
     * } $params Request parameters
     * @param array<string, mixed>|null $options Additional request options
     * @return CalendarDeleteSuccessfulResponseDTO Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function deleteCalendar(
        array $params,
        ?array $options = null
    ): CalendarDeleteSuccessfulResponseDTO {
        $paramDefs = [['name' => 'calendarId', 'in' => 'path']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["bearer"];

        $url = RequestUtils::buildUrl('/calendars/{calendarId}', $extracted['path']);
        
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
            
            return new CalendarDeleteSuccessfulResponseDTO($responseData);
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
     * Delete Event
     * Delete event by ID
     * 
     * @param array{
     *   eventId: string // Event Id or Instance id. For recurring appointments send masterEventId to modify original series.
     * } $params Request parameters
     * @param DeleteAppointmentSchema $requestBody Request body data
     * @param array<string, mixed>|null $options Additional request options
     * @return DeleteEventSuccessfulResponseDto Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function deleteEvent(
        array $params,
        $requestBody,
        ?array $options = null
    ): DeleteEventSuccessfulResponseDto {
        if ($requestBody !== null && is_object($requestBody) && method_exists($requestBody, 'toArray')) {
            $requestBody = $requestBody->toArray();
        }
        $paramDefs = [['name' => 'eventId', 'in' => 'path']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["bearer"];

        $url = RequestUtils::buildUrl('/calendars/events/{eventId}', $extracted['path']);
        
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
            
            return new DeleteEventSuccessfulResponseDto($responseData);
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
     * Get Notes
     * Get Appointment Notes
     * 
     * @param array{
     *   limit: int // Limit of notes to fetch
     *   offset: int // Offset of notes to fetch
     *   appointmentId: string // Appointment ID
     * } $params Request parameters
     * @param array<string, mixed>|null $options Additional request options
     * @return GetNotesListSuccessfulResponseDto Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function getAppointmentNotes(
        array $params,
        ?array $options = null
    ): GetNotesListSuccessfulResponseDto {
        $paramDefs = [['name' => 'limit', 'in' => 'query'], ['name' => 'offset', 'in' => 'query'], ['name' => 'appointmentId', 'in' => 'path']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["bearer"];

        $url = RequestUtils::buildUrl('/calendars/appointments/{appointmentId}/notes', $extracted['path']);
        
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
     *   appointmentId: string // Appointment ID
     * } $params Request parameters
     * @param NotesDTO $requestBody Request body data
     * @param array<string, mixed>|null $options Additional request options
     * @return GetCreateUpdateNoteSuccessfulResponseDto Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function createAppointmentNote(
        array $params,
        $requestBody,
        ?array $options = null
    ): GetCreateUpdateNoteSuccessfulResponseDto {
        if ($requestBody !== null && is_object($requestBody) && method_exists($requestBody, 'toArray')) {
            $requestBody = $requestBody->toArray();
        }
        $paramDefs = [['name' => 'appointmentId', 'in' => 'path']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["bearer"];

        $url = RequestUtils::buildUrl('/calendars/appointments/{appointmentId}/notes', $extracted['path']);
        
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
     * Update Note
     * Update Note
     * 
     * @param array{
     *   appointmentId: string // Appointment ID
     * } $params Request parameters
     * @param NotesDTO $requestBody Request body data
     * @param array<string, mixed>|null $options Additional request options
     * @return GetCreateUpdateNoteSuccessfulResponseDto Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function updateAppointmentNote(
        array $params,
        $requestBody,
        ?array $options = null
    ): GetCreateUpdateNoteSuccessfulResponseDto {
        if ($requestBody !== null && is_object($requestBody) && method_exists($requestBody, 'toArray')) {
            $requestBody = $requestBody->toArray();
        }
        $paramDefs = [['name' => 'appointmentId', 'in' => 'path']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["bearer"];

        $url = RequestUtils::buildUrl('/calendars/appointments/{appointmentId}/notes/{noteId}', $extracted['path']);
        
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
     *   appointmentId: string // Appointment ID
     * } $params Request parameters
     * @param array<string, mixed>|null $options Additional request options
     * @return DeleteNoteSuccessfulResponseDto Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function deleteAppointmentNote(
        array $params,
        ?array $options = null
    ): DeleteNoteSuccessfulResponseDto {
        $paramDefs = [['name' => 'appointmentId', 'in' => 'path']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["bearer"];

        $url = RequestUtils::buildUrl('/calendars/appointments/{appointmentId}/notes/{noteId}', $extracted['path']);
        
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
     * Get Calendar Resource
     * Get calendar resource by ID (Services V1)
     * @deprecated This method is deprecated
     * 
     * @param array{
     *   resourceType: string // Calendar Resource Type
     *   id: string // Calendar Resource ID
     * } $params Request parameters
     * @param array<string, mixed>|null $options Additional request options
     * @return CalendarResourceByIdResponseDTO Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function getCalendarResource(
        array $params,
        ?array $options = null
    ): CalendarResourceByIdResponseDTO {
        $paramDefs = [['name' => 'resourceType', 'in' => 'path'], ['name' => 'id', 'in' => 'path']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["Location-Access"];

        $url = RequestUtils::buildUrl('/calendars/resources/{resourceType}/{id}', $extracted['path']);
        
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
            
            return new CalendarResourceByIdResponseDTO($responseData);
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
     * Update Calendar Resource
     * Update calendar resource by ID (Services V1)
     * @deprecated This method is deprecated
     * 
     * @param array{
     *   resourceType: string // Calendar Resource Type
     *   id: string // Calendar Resource ID
     * } $params Request parameters
     * @param UpdateCalendarResourceDTO $requestBody Request body data
     * @param array<string, mixed>|null $options Additional request options
     * @return CalendarResourceResponseDTO Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function updateCalendarResource(
        array $params,
        $requestBody,
        ?array $options = null
    ): CalendarResourceResponseDTO {
        if ($requestBody !== null && is_object($requestBody) && method_exists($requestBody, 'toArray')) {
            $requestBody = $requestBody->toArray();
        }
        $paramDefs = [['name' => 'resourceType', 'in' => 'path'], ['name' => 'id', 'in' => 'path']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["Location-Access"];

        $url = RequestUtils::buildUrl('/calendars/resources/{resourceType}/{id}', $extracted['path']);
        
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
            
            return new CalendarResourceResponseDTO($responseData);
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
     * Delete Calendar Resource
     * Delete calendar resource by ID (Services V1)
     * @deprecated This method is deprecated
     * 
     * @param array{
     *   resourceType: string // Calendar Resource Type
     *   id: string // Calendar Resource ID
     * } $params Request parameters
     * @param array<string, mixed>|null $options Additional request options
     * @return ResourceDeleteResponseDTO Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function deleteCalendarResource(
        array $params,
        ?array $options = null
    ): ResourceDeleteResponseDTO {
        $paramDefs = [['name' => 'resourceType', 'in' => 'path'], ['name' => 'id', 'in' => 'path']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["Location-Access"];

        $url = RequestUtils::buildUrl('/calendars/resources/{resourceType}/{id}', $extracted['path']);
        
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
            
            return new ResourceDeleteResponseDTO($responseData);
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
     * List Calendar Resources
     * List calendar resources by resource type and location ID (Services V1)
     * @deprecated This method is deprecated
     * 
     * @param array{
     *   resourceType: string // Calendar Resource Type
     *   locationId: string
     *   limit: int
     *   skip: int
     * } $params Request parameters
     * @param array<string, mixed>|null $options Additional request options
     * @return mixed Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function fetchCalendarResources(
        array $params,
        ?array $options = null
    ) {
        $paramDefs = [['name' => 'resourceType', 'in' => 'path'], ['name' => 'locationId', 'in' => 'query'], ['name' => 'limit', 'in' => 'query'], ['name' => 'skip', 'in' => 'query']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["Location-Access"];

        $url = RequestUtils::buildUrl('/calendars/resources/{resourceType}', $extracted['path']);
        
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
     * Create Calendar Resource
     * Create calendar resource by resource type (Services V1)
     * @deprecated This method is deprecated
     * 
     * @param array{
     *   resourceType: string // Calendar Resource Type
     * } $params Request parameters
     * @param CreateCalendarResourceDTO $requestBody Request body data
     * @param array<string, mixed>|null $options Additional request options
     * @return CalendarResourceByIdResponseDTO Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function createCalendarResource(
        array $params,
        $requestBody,
        ?array $options = null
    ): CalendarResourceByIdResponseDTO {
        if ($requestBody !== null && is_object($requestBody) && method_exists($requestBody, 'toArray')) {
            $requestBody = $requestBody->toArray();
        }
        $paramDefs = [['name' => 'resourceType', 'in' => 'path']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["Location-Access"];

        $url = RequestUtils::buildUrl('/calendars/resources/{resourceType}', $extracted['path']);
        
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
            
            return new CalendarResourceByIdResponseDTO($responseData);
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
     * Get notifications
     * Get calendar notifications based on query
     * 
     * @param array{
     *   calendarId: string
     *   isActive?: bool
     *   deleted?: bool
     *   limit?: int // Number of records to return
     *   skip?: int // Number of records to skip
     * } $params Request parameters
     * @param array<string, mixed>|null $options Additional request options
     * @return mixed Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function getEventNotification(
        array $params,
        ?array $options = null
    ) {
        $paramDefs = [['name' => 'calendarId', 'in' => 'path'], ['name' => 'isActive', 'in' => 'query'], ['name' => 'deleted', 'in' => 'query'], ['name' => 'limit', 'in' => 'query'], ['name' => 'skip', 'in' => 'query']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["bearer"];

        $url = RequestUtils::buildUrl('/calendars/{calendarId}/notifications', $extracted['path']);
        
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
     * Create notification
     * Create Calendar notifications, either one or multiple. All notification settings must be for single calendar only
     * 
     * @param array{
     *   calendarId: string
     * } $params Request parameters
     * @param array $requestBody Request body data
     * @param array<string, mixed>|null $options Additional request options
     * @return mixed Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function createEventNotification(
        array $params,
        $requestBody,
        ?array $options = null
    ) {
        if ($requestBody !== null && is_object($requestBody) && method_exists($requestBody, 'toArray')) {
            $requestBody = $requestBody->toArray();
        }
        $paramDefs = [['name' => 'calendarId', 'in' => 'path']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["bearer"];

        $url = RequestUtils::buildUrl('/calendars/{calendarId}/notifications', $extracted['path']);
        
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
     * Get notification
     * Find Event notification by notificationId
     * 
     * @param array{
     *   calendarId: string
     *   notificationId: string
     * } $params Request parameters
     * @param array<string, mixed>|null $options Additional request options
     * @return CalendarNotificationResponseDTO Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function findEventNotification(
        array $params,
        ?array $options = null
    ): CalendarNotificationResponseDTO {
        $paramDefs = [['name' => 'calendarId', 'in' => 'path'], ['name' => 'notificationId', 'in' => 'path']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["bearer"];

        $url = RequestUtils::buildUrl('/calendars/{calendarId}/notifications/{notificationId}', $extracted['path']);
        
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
            
            return new CalendarNotificationResponseDTO($responseData);
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
     * Update notification
     * Update Event notification by id
     * 
     * @param array{
     *   calendarId: string
     *   notificationId: string
     * } $params Request parameters
     * @param UpdateCalendarNotificationsDTO $requestBody Request body data
     * @param array<string, mixed>|null $options Additional request options
     * @return CalendarNotificationDeleteResponseDTO Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function updateEventNotification(
        array $params,
        $requestBody,
        ?array $options = null
    ): CalendarNotificationDeleteResponseDTO {
        if ($requestBody !== null && is_object($requestBody) && method_exists($requestBody, 'toArray')) {
            $requestBody = $requestBody->toArray();
        }
        $paramDefs = [['name' => 'calendarId', 'in' => 'path'], ['name' => 'notificationId', 'in' => 'path']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["bearer"];

        $url = RequestUtils::buildUrl('/calendars/{calendarId}/notifications/{notificationId}', $extracted['path']);
        
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
            
            return new CalendarNotificationDeleteResponseDTO($responseData);
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
     * Delete Notification
     * Delete notification
     * 
     * @param array{
     *   calendarId: string
     *   notificationId: string
     * } $params Request parameters
     * @param array<string, mixed>|null $options Additional request options
     * @return CalendarNotificationDeleteResponseDTO Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function deleteEventNotification(
        array $params,
        ?array $options = null
    ): CalendarNotificationDeleteResponseDTO {
        $paramDefs = [['name' => 'calendarId', 'in' => 'path'], ['name' => 'notificationId', 'in' => 'path']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["bearer"];

        $url = RequestUtils::buildUrl('/calendars/{calendarId}/notifications/{notificationId}', $extracted['path']);
        
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
            
            return new CalendarNotificationDeleteResponseDTO($responseData);
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
     * List user availability schedule
     * Retrieve user availability schedules based on various filters including location, calendar, and user. Supports pagination.
     * 
     * @param array{
     *   locationId: string // Location ID to filter schedules by
     *   userId: string // User ID to filter schedules by specific user
     *   calendarId?: string // Calendar ID for filtering schedules by specific calendar
     *   skip?: int // Number of items to skip for pagination
     *   limit?: int // Maximum number of items to return (max 500)
     * } $params Request parameters
     * @param array<string, mixed>|null $options Additional request options
     * @return GetAllSchedulesResponseDTO Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function getAllSchedules(
        array $params,
        ?array $options = null
    ): GetAllSchedulesResponseDTO {
        $paramDefs = [['name' => 'locationId', 'in' => 'query'], ['name' => 'userId', 'in' => 'query'], ['name' => 'calendarId', 'in' => 'query'], ['name' => 'skip', 'in' => 'query'], ['name' => 'limit', 'in' => 'query']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["bearer"];

        $url = RequestUtils::buildUrl('/calendars/schedules/search', $extracted['path']);
        
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
            
            return new GetAllSchedulesResponseDTO($responseData);
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
     * Get user availability schedule
     * Retrieve a specific schedule by its unique identifier. Returns detailed information including rules, timezone, and associated calendars/users.
     * 
     * @param array{
     *   id: string // Unique identifier of the schedule
     * } $params Request parameters
     * @param array<string, mixed>|null $options Additional request options
     * @return ScheduleResponseDTO Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function getScheduleById(
        array $params,
        ?array $options = null
    ): ScheduleResponseDTO {
        $paramDefs = [['name' => 'id', 'in' => 'path']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["bearer"];

        $url = RequestUtils::buildUrl('/calendars/schedules/{id}', $extracted['path']);
        
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
            
            return new ScheduleResponseDTO($responseData);
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
     * Update user availability schedule
     * Modify an existing schedule by updating its rules, timezone, and name All fields are optional - only provided fields will be updated.
     * 
     * @param array{
     *   id: string // Unique identifier of the schedule to update
     * } $params Request parameters
     * @param UpdateScheduleDTO $requestBody Request body data
     * @param array<string, mixed>|null $options Additional request options
     * @return ScheduleResponseDTO Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function updateSchedule(
        array $params,
        $requestBody,
        ?array $options = null
    ): ScheduleResponseDTO {
        if ($requestBody !== null && is_object($requestBody) && method_exists($requestBody, 'toArray')) {
            $requestBody = $requestBody->toArray();
        }
        $paramDefs = [['name' => 'id', 'in' => 'path']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["bearer"];

        $url = RequestUtils::buildUrl('/calendars/schedules/{id}', $extracted['path']);
        
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
            
            return new ScheduleResponseDTO($responseData);
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
     * Delete user availability schedule
     * Permanently remove a schedule and all its associated rules. This action cannot be undone.
     * 
     * @param array{
     *   id: string // Unique identifier of the schedule to delete
     * } $params Request parameters
     * @param array<string, mixed>|null $options Additional request options
     * @return mixed Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function deleteSchedule(
        array $params,
        ?array $options = null
    ) {
        $paramDefs = [['name' => 'id', 'in' => 'path']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["bearer"];

        $url = RequestUtils::buildUrl('/calendars/schedules/{id}', $extracted['path']);
        
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
     * Create user availability schedule
     * Create new schedule with specified rules, timezone, location, user and calendar associations.
     * 
     * @param CreateScheduleDTO $requestBody Request body data
     * @param array<string, mixed>|null $options Additional request options
     * @return ScheduleResponseDTO Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function createSchedule(
        $requestBody,
        ?array $options = null
    ): ScheduleResponseDTO {
        if ($requestBody !== null && is_object($requestBody) && method_exists($requestBody, 'toArray')) {
            $requestBody = $requestBody->toArray();
        }
        $paramDefs = [];
        $extracted = RequestUtils::extractParams([], $paramDefs);
        $requirements = ["bearer"];

        $url = RequestUtils::buildUrl('/calendars/schedules', $extracted['path']);
        
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
            
            return new ScheduleResponseDTO($responseData);
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
     * Apply user availability schedule to a calendar
     * Associates a calendar with the given schedule by adding the calendarId to a schedule
     * 
     * @param array{
     *   id: string // Unique identifier of the schedule
     *   calendarId: string // Unique identifier of the team calendar to add to the schedule
     * } $params Request parameters
     * @param array<string, mixed>|null $options Additional request options
     * @return mixed Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function addCalendarToSchedule(
        array $params,
        ?array $options = null
    ) {
        $paramDefs = [['name' => 'id', 'in' => 'path'], ['name' => 'calendarId', 'in' => 'path']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["bearer"];

        $url = RequestUtils::buildUrl('/calendars/schedules/{id}/associations/{calendarId}', $extracted['path']);
        
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
                'PUT',
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
     * Remove user availability schedule from a calendar
     * Removes the association between a team calendar and the given schedule by removing the calendarId from the schedule
     * 
     * @param array{
     *   id: string // Unique identifier of the schedule
     *   calendarId: string // Unique identifier of the calendar to remove from the schedule
     * } $params Request parameters
     * @param array<string, mixed>|null $options Additional request options
     * @return mixed Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function removeCalendarFromSchedule(
        array $params,
        ?array $options = null
    ) {
        $paramDefs = [['name' => 'id', 'in' => 'path'], ['name' => 'calendarId', 'in' => 'path']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["bearer"];

        $url = RequestUtils::buildUrl('/calendars/schedules/{id}/associations/{calendarId}', $extracted['path']);
        
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
     * Create event calendar availability schedule
     * Create a new availability schedule specifically for an event calendar. The calendar ID is provided in the path, and schedule rules and timezone are provided in the request body.
     * 
     * @param array{
     *   calendarId: string // Unique identifier of the event calendar
     * } $params Request parameters
     * @param CreateEventCalendarScheduleDTO $requestBody Request body data
     * @param array<string, mixed>|null $options Additional request options
     * @return EventCalendarScheduleWrapperDTO Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function createCalendarSchedule(
        array $params,
        $requestBody,
        ?array $options = null
    ): EventCalendarScheduleWrapperDTO {
        if ($requestBody !== null && is_object($requestBody) && method_exists($requestBody, 'toArray')) {
            $requestBody = $requestBody->toArray();
        }
        $paramDefs = [['name' => 'calendarId', 'in' => 'path']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["bearer"];

        $url = RequestUtils::buildUrl('/calendars/schedules/event-calendar/{calendarId}', $extracted['path']);
        
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
            
            return new EventCalendarScheduleWrapperDTO($responseData);
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
     * Get event calendar availability schedule
     * Retrieve the availability schedule for a specific event calendar. Returns the schedule associated with the calendar ID provided in the path.
     * 
     * @param array{
     *   calendarId: string // Unique identifier of the event calendar
     * } $params Request parameters
     * @param array<string, mixed>|null $options Additional request options
     * @return EventCalendarScheduleWrapperDTO Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function getCalendarSchedule(
        array $params,
        ?array $options = null
    ): EventCalendarScheduleWrapperDTO {
        $paramDefs = [['name' => 'calendarId', 'in' => 'path']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["bearer"];

        $url = RequestUtils::buildUrl('/calendars/schedules/event-calendar/{calendarId}', $extracted['path']);
        
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
            
            return new EventCalendarScheduleWrapperDTO($responseData);
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
     * Update event calendar availability schedule
     * Update the availability schedule for a specific event calendar. Only provided fields will be updated. The calendar ID is provided in the path.
     * 
     * @param array{
     *   calendarId: string // Unique identifier of the event calendar
     * } $params Request parameters
     * @param UpdateEventCalendarScheduleDTO $requestBody Request body data
     * @param array<string, mixed>|null $options Additional request options
     * @return EventCalendarScheduleWrapperDTO Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function updateCalendarSchedule(
        array $params,
        $requestBody,
        ?array $options = null
    ): EventCalendarScheduleWrapperDTO {
        if ($requestBody !== null && is_object($requestBody) && method_exists($requestBody, 'toArray')) {
            $requestBody = $requestBody->toArray();
        }
        $paramDefs = [['name' => 'calendarId', 'in' => 'path']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["bearer"];

        $url = RequestUtils::buildUrl('/calendars/schedules/event-calendar/{calendarId}', $extracted['path']);
        
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
            
            return new EventCalendarScheduleWrapperDTO($responseData);
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
     * Get Calendars
     * Get all calendars in a location.
     * 
     * @param array{
     *   locationId: string // Location Id
     *   groupId?: string // Group Id
     *   showDrafted?: bool // Show drafted
     * } $params Request parameters
     * @param array<string, mixed>|null $options Additional request options
     * @return CalendarsGetSuccessfulResponseDTO Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function getCalendars(
        array $params,
        ?array $options = null
    ): CalendarsGetSuccessfulResponseDTO {
        $paramDefs = [['name' => 'locationId', 'in' => 'query'], ['name' => 'groupId', 'in' => 'query'], ['name' => 'showDrafted', 'in' => 'query']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["bearer"];

        $url = RequestUtils::buildUrl('/calendars/', $extracted['path']);
        
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
            
            return new CalendarsGetSuccessfulResponseDTO($responseData);
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
     * Create Calendar
     * Create calendar in a location.
     * 
     * @param CalendarCreateDTO $requestBody Request body data
     * @param array<string, mixed>|null $options Additional request options
     * @return CalendarByIdSuccessfulResponseDTO Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function createCalendar(
        $requestBody,
        ?array $options = null
    ): CalendarByIdSuccessfulResponseDTO {
        if ($requestBody !== null && is_object($requestBody) && method_exists($requestBody, 'toArray')) {
            $requestBody = $requestBody->toArray();
        }
        $paramDefs = [];
        $extracted = RequestUtils::extractParams([], $paramDefs);
        $requirements = ["bearer"];

        $url = RequestUtils::buildUrl('/calendars/', $extracted['path']);
        
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
            
            return new CalendarByIdSuccessfulResponseDTO($responseData);
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

