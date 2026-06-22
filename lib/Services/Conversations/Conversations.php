<?php

namespace HighLevel\Services\Conversations;

use HighLevel\HighLevel;
use HighLevel\GHLError;
use HighLevel\Utils\RequestUtils;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Exception\RequestException;
use HighLevel\Services\Conversations\Models\SendConversationResponseDto;
use HighLevel\Services\Conversations\Models\GetConversationByIdResponse;
use HighLevel\Services\Conversations\Models\UpdateConversationDto;
use HighLevel\Services\Conversations\Models\GetConversationSuccessfulResponse;
use HighLevel\Services\Conversations\Models\DeleteConversationSuccessfulResponse;
use HighLevel\Services\Conversations\Models\GetEmailMessageResponseDto;
use HighLevel\Services\Conversations\Models\CancelScheduledResponseDto;
use HighLevel\Services\Conversations\Models\UpdateEmailMessageStatusDto;
use HighLevel\Services\Conversations\Models\UpdateEmailMessageStatusResponseDto;
use HighLevel\Services\Conversations\Models\ExportMessagesResponseDto;
use HighLevel\Services\Conversations\Models\GetMessageResponseDto;
use HighLevel\Services\Conversations\Models\GetMessagesByConversationResponseDto;
use HighLevel\Services\Conversations\Models\SendMessageBodyDto;
use HighLevel\Services\Conversations\Models\SendMessageResponseDto;
use HighLevel\Services\Conversations\Models\ProcessMessageBodyDto;
use HighLevel\Services\Conversations\Models\ProcessMessageResponseDto;
use HighLevel\Services\Conversations\Models\ProcessOutboundMessageBodyDto;
use HighLevel\Services\Conversations\Models\UploadFilesResponseDto;
use HighLevel\Services\Conversations\Models\UpdateMessageStatusDto;
use HighLevel\Services\Conversations\Models\AddMessageAttachmentsDto;
use HighLevel\Services\Conversations\Models\GetMessageTranscriptionResponseDto;
use HighLevel\Services\Conversations\Models\UserTypingBody;
use HighLevel\Services\Conversations\Models\CreateLiveChatMessageFeedbackResponse;
use HighLevel\Services\Conversations\Models\CreateConversationDto;
use HighLevel\Services\Conversations\Models\CreateConversationSuccessResponse;
use HighLevel\Services\Conversations\Models\SendReviewReplyDto;
use HighLevel\Services\Conversations\Models\InitiateFileUploadDto;
use HighLevel\Services\Conversations\Models\InitiateFileUploadResponseDto;
use HighLevel\Services\Conversations\Models\CompleteFileUploadDto;
use HighLevel\Services\Conversations\Models\CompleteFileUploadResponseDto;

/**
 * Conversations Service
 * Documentation for Conversations API
 * 
 * @package HighLevel\Services\Conversations
 */
class Conversations
{
    /**
     * HighLevel client instance
     * @var HighLevel
     */
    private HighLevel $client;

    /**
     * Create a new Conversations service instance
     * 
     * @param HighLevel $client HighLevel client instance
     */
    public function __construct(HighLevel $client)
    {
        $this->client = $client;
    }

    /**
     * Search Conversations
     * Returns a list of all conversations matching the search criteria along with the sort and filter options selected.
     * 
     * @param array{
     *   locationId: string // Location Id
     *   contactId?: string // Contact Id
     *   assignedTo?: string // User IDs that conversations are assigned to. Multiple IDs can be provided as comma-separated values. Use "unassigned" to fetch conversations not assigned to any user.
     *   followers?: string // User IDs of followers to filter conversations by. Multiple IDs can be provided as comma-separated values.
     *   mentions?: string // User Id of the mention. Multiple values are comma separated.
     *   query?: string // Search paramater as a string
     *   sort?: string // Sort paramater - asc or desc
     *   startAfterDate?: mixed // Search to begin after the specified date - should contain the sort value of the last document
     *   id?: string // Id of the conversation
     *   limit?: int // Limit of conversations - Default is 20
     *   lastMessageType?: string // Type of the last message in the conversation as a string
     *   lastMessageAction?: string // Action of the last outbound message in the conversation as string.
     *   lastMessageDirection?: string // Direction of the last message in the conversation as string.
     *   status?: string // The status of the conversation to be filtered - all, read, unread, starred 
     *   sortBy?: string // The sorting of the conversation to be filtered as - manual messages or all messages
     *   sortScoreProfile?: string // Id of score profile on which sortBy.ScoreProfile should sort on
     *   scoreProfile?: string // Id of score profile on which conversations should get filtered out, works with scoreProfileMin & scoreProfileMax
     *   scoreProfileMin?: int // Minimum value for score
     *   scoreProfileMax?: int // Maximum value for score
     *   startDate?: int // Start date filter for dateAdded field (Unix timestamp in milliseconds)
     *   endDate?: int // End date filter for dateAdded field (Unix timestamp in milliseconds)
     * } $params Request parameters
     * @param array<string, mixed>|null $options Additional request options
     * @return SendConversationResponseDto Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function searchConversation(
        array $params,
        ?array $options = null
    ): SendConversationResponseDto {
        $paramDefs = [['name' => 'locationId', 'in' => 'query'], ['name' => 'contactId', 'in' => 'query'], ['name' => 'assignedTo', 'in' => 'query'], ['name' => 'followers', 'in' => 'query'], ['name' => 'mentions', 'in' => 'query'], ['name' => 'query', 'in' => 'query'], ['name' => 'sort', 'in' => 'query'], ['name' => 'startAfterDate', 'in' => 'query'], ['name' => 'id', 'in' => 'query'], ['name' => 'limit', 'in' => 'query'], ['name' => 'lastMessageType', 'in' => 'query'], ['name' => 'lastMessageAction', 'in' => 'query'], ['name' => 'lastMessageDirection', 'in' => 'query'], ['name' => 'status', 'in' => 'query'], ['name' => 'sortBy', 'in' => 'query'], ['name' => 'sortScoreProfile', 'in' => 'query'], ['name' => 'scoreProfile', 'in' => 'query'], ['name' => 'scoreProfileMin', 'in' => 'query'], ['name' => 'scoreProfileMax', 'in' => 'query'], ['name' => 'startDate', 'in' => 'query'], ['name' => 'endDate', 'in' => 'query']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["bearer"];

        $url = RequestUtils::buildUrl('/conversations/search', $extracted['path']);
        
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
            
            return new SendConversationResponseDto($responseData);
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
     * Get Conversation
     * Get the conversation details based on the conversation ID
     * 
     * @param array{
     *   conversationId: string // Conversation ID as string
     * } $params Request parameters
     * @param array<string, mixed>|null $options Additional request options
     * @return GetConversationByIdResponse Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function getConversation(
        array $params,
        ?array $options = null
    ): GetConversationByIdResponse {
        $paramDefs = [['name' => 'conversationId', 'in' => 'path']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["bearer"];

        $url = RequestUtils::buildUrl('/conversations/{conversationId}', $extracted['path']);
        
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
            
            return new GetConversationByIdResponse($responseData);
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
     * Update Conversation
     * Update the conversation details based on the conversation ID
     * 
     * @param array{
     *   conversationId: string // Conversation ID as string
     * } $params Request parameters
     * @param UpdateConversationDto $requestBody Request body data
     * @param array<string, mixed>|null $options Additional request options
     * @return GetConversationSuccessfulResponse Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function updateConversation(
        array $params,
        $requestBody,
        ?array $options = null
    ): GetConversationSuccessfulResponse {
        if ($requestBody !== null && is_object($requestBody) && method_exists($requestBody, 'toArray')) {
            $requestBody = $requestBody->toArray();
        }
        $paramDefs = [['name' => 'conversationId', 'in' => 'path']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["bearer"];

        $url = RequestUtils::buildUrl('/conversations/{conversationId}', $extracted['path']);
        
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
            
            return new GetConversationSuccessfulResponse($responseData);
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
     * Delete Conversation
     * Delete the conversation details based on the conversation ID
     * 
     * @param array{
     *   conversationId: string // Conversation ID as string
     * } $params Request parameters
     * @param array<string, mixed>|null $options Additional request options
     * @return DeleteConversationSuccessfulResponse Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function deleteConversation(
        array $params,
        ?array $options = null
    ): DeleteConversationSuccessfulResponse {
        $paramDefs = [['name' => 'conversationId', 'in' => 'path']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["bearer"];

        $url = RequestUtils::buildUrl('/conversations/{conversationId}', $extracted['path']);
        
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
            
            return new DeleteConversationSuccessfulResponse($responseData);
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
     * Get email by Id
     * Get email by Id
     * 
     * @param array<string, mixed>|null $options Additional request options
     * @return GetEmailMessageResponseDto Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function getEmailById(
        ?array $options = null
    ): GetEmailMessageResponseDto {
        $paramDefs = [];
        $extracted = RequestUtils::extractParams([], $paramDefs);
        $requirements = ["bearer"];

        $url = RequestUtils::buildUrl('/conversations/messages/email/{id}', $extracted['path']);
        
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
            
            return new GetEmailMessageResponseDto($responseData);
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
     * Cancel a scheduled email message.
     * Post the messageId for the API to delete a scheduled email message. &lt;br /&gt;
     * 
     * @param array{
     *   emailMessageId: string // Email Message Id
     * } $params Request parameters
     * @param array<string, mixed>|null $options Additional request options
     * @return CancelScheduledResponseDto Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function cancelScheduledEmailMessage(
        array $params,
        ?array $options = null
    ): CancelScheduledResponseDto {
        $paramDefs = [['name' => 'emailMessageId', 'in' => 'path']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["bearer"];

        $url = RequestUtils::buildUrl('/conversations/messages/email/{emailMessageId}/schedule', $extracted['path']);
        
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
            
            return new CancelScheduledResponseDto($responseData);
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
     * Update email message status
     * Update delivery events, per-recipient statuses, and the overall message status for an email sent via a custom conversation provider.

### Authorization
- Requires the &#x60;conversations/message.write&#x60; OAuth scope.
- The calling OAuth app must own the conversation provider that originally sent the email.
- Attempts to update emails sent via LC Email or Mailgun will return &#x60;403 Forbidden&#x60;.

### Updatable Fields
**&#x60;status&#x60;** is required on every request. You may also include **&#x60;events&#x60;** and/or **&#x60;recipients&#x60;**.

**&#x60;events&#x60;** — Aggregate delivery event counters (integers). Counters are merged into the existing values (not replaced). Setting a counter to &#x60;0&#x60; is treated as no-op and will **not** reset the stored value.

**&#x60;recipients&#x60;** — Per-recipient delivery statuses. Each entry maps a recipient email address to a &#x60;MessageStatus&#x60; value. Use &#x60;failReason&#x60; to capture bounce or rejection details when the status is &#x60;failed&#x60;.

**&#x60;status&#x60;** — The overall message status. Accepts any &#x60;MessageStatus&#x60; enum value.

### Event Inference
The API automatically infers related events to maintain data consistency:
- **&#x60;clicked&#x60;, &#x60;complained&#x60;, &#x60;unsubscribed&#x60;, or &#x60;replied&#x60;** → implies &#x60;opened&#x60; (set to 1 if not already provided and open tracking is enabled) and &#x60;delivered&#x60; (set to 1).
- **&#x60;opened&#x60;** → implies &#x60;delivered&#x60; (set to 1 if not provided).
- **&#x60;delivered&#x60;, &#x60;permanent_fail&#x60;, or &#x60;temporary_fail&#x60;** → implies &#x60;accepted&#x60; (set to 1 if not provided).

### Timestamps
The API automatically records server-side timestamps on first occurrence for &#x60;delivered&#x60;, &#x60;opened&#x60;, and &#x60;clicked&#x60; events. Subsequent updates to these counters do not overwrite the original timestamp.
     * 
     * @param array{
     *   id: string // Email message id
     * } $params Request parameters
     * @param UpdateEmailMessageStatusDto $requestBody Request body data
     * @param array<string, mixed>|null $options Additional request options
     * @return UpdateEmailMessageStatusResponseDto Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function updateEmailMessageStatus(
        array $params,
        $requestBody,
        ?array $options = null
    ): UpdateEmailMessageStatusResponseDto {
        if ($requestBody !== null && is_object($requestBody) && method_exists($requestBody, 'toArray')) {
            $requestBody = $requestBody->toArray();
        }
        $paramDefs = [['name' => 'id', 'in' => 'path']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["bearer"];

        $url = RequestUtils::buildUrl('/conversations/messages/email/{id}/status', $extracted['path']);
        
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
            
            return new UpdateEmailMessageStatusResponseDto($responseData);
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
     * Export messages by location ID
     * Export messages for a specific location with cursor-based pagination support. Response includes messageType (string), source, and subType fields. The channel parameter is optional - if not provided, all non-email message types will be returned including activity messages (opportunity updates, appointments, etc.).
     * 
     * @param array{
     *   locationId: string // Location ID to filter messages by
     *   limit?: int // Number of messages to return per page
     *   cursor?: string // Cursor for pagination. Pass the nextCursor from previous response to get next page.
     *   sortBy?: string // Field to sort by
     *   sortOrder?: string // Sort order
     *   conversationId?: string // Filter messages by conversation ID
     *   contactId?: string // Filter messages by contact ID
     *   channel?: string // Filter by message channel. Optional - when not provided, all non-email message types will be returned including activity messages (opportunity updates, appointments, etc.). To fetch email messages, you must explicitly set channel=Email.
     *   startDate?: string // Start date to filter messages by
     *   endDate?: string // End date to filter messages by
     * } $params Request parameters
     * @param array<string, mixed>|null $options Additional request options
     * @return ExportMessagesResponseDto Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function exportMessagesByLocation(
        array $params,
        ?array $options = null
    ): ExportMessagesResponseDto {
        $paramDefs = [['name' => 'locationId', 'in' => 'query'], ['name' => 'limit', 'in' => 'query'], ['name' => 'cursor', 'in' => 'query'], ['name' => 'sortBy', 'in' => 'query'], ['name' => 'sortOrder', 'in' => 'query'], ['name' => 'conversationId', 'in' => 'query'], ['name' => 'contactId', 'in' => 'query'], ['name' => 'channel', 'in' => 'query'], ['name' => 'startDate', 'in' => 'query'], ['name' => 'endDate', 'in' => 'query']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["bearer"];

        $url = RequestUtils::buildUrl('/conversations/messages/export', $extracted['path']);
        
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
            
            return new ExportMessagesResponseDto($responseData);
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
     * Get message by message id
     * Get message by message id.
     * 
     * @param array<string, mixed>|null $options Additional request options
     * @return GetMessageResponseDto Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function getMessage(
        ?array $options = null
    ): GetMessageResponseDto {
        $paramDefs = [];
        $extracted = RequestUtils::extractParams([], $paramDefs);
        $requirements = ["bearer"];

        $url = RequestUtils::buildUrl('/conversations/messages/{id}', $extracted['path']);
        
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
            
            return new GetMessageResponseDto($responseData);
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
     * Get messages by conversation id
     * Get messages by conversation id.
     * 
     * @param array{
     *   conversationId: string // Conversation ID as string
     *   lastMessageId?: string // Message ID of the last message in the list as a string
     *   limit?: int // Number of messages to be fetched from the conversation. Default limit is 20
     *   type?: string // Types of message to fetched separated with comma
     * } $params Request parameters
     * @param array<string, mixed>|null $options Additional request options
     * @return GetMessagesByConversationResponseDto Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function getMessages(
        array $params,
        ?array $options = null
    ): GetMessagesByConversationResponseDto {
        $paramDefs = [['name' => 'conversationId', 'in' => 'path'], ['name' => 'lastMessageId', 'in' => 'query'], ['name' => 'limit', 'in' => 'query'], ['name' => 'type', 'in' => 'query']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["bearer"];

        $url = RequestUtils::buildUrl('/conversations/{conversationId}/messages', $extracted['path']);
        
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
            
            return new GetMessagesByConversationResponseDto($responseData);
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
     * Send a new message
     * Post the necessary fields for the API to send a new message.
     * 
     * @param SendMessageBodyDto $requestBody Request body data
     * @param array<string, mixed>|null $options Additional request options
     * @return SendMessageResponseDto Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function sendANewMessage(
        $requestBody,
        ?array $options = null
    ): SendMessageResponseDto {
        if ($requestBody !== null && is_object($requestBody) && method_exists($requestBody, 'toArray')) {
            $requestBody = $requestBody->toArray();
        }
        $paramDefs = [];
        $extracted = RequestUtils::extractParams([], $paramDefs);
        $requirements = ["bearer"];

        $url = RequestUtils::buildUrl('/conversations/messages', $extracted['path']);
        
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
            
            return new SendMessageResponseDto($responseData);
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
     * Add an inbound message
     * Post the necessary fields for the API to add a new inbound message. &lt;br /&gt;
     * 
     * @param ProcessMessageBodyDto $requestBody Request body data
     * @param array<string, mixed>|null $options Additional request options
     * @return ProcessMessageResponseDto Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function addAnInboundMessage(
        $requestBody,
        ?array $options = null
    ): ProcessMessageResponseDto {
        if ($requestBody !== null && is_object($requestBody) && method_exists($requestBody, 'toArray')) {
            $requestBody = $requestBody->toArray();
        }
        $paramDefs = [];
        $extracted = RequestUtils::extractParams([], $paramDefs);
        $requirements = ["bearer"];

        $url = RequestUtils::buildUrl('/conversations/messages/inbound', $extracted['path']);
        
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
            
            return new ProcessMessageResponseDto($responseData);
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
     * Add an external outbound call
     * Post the necessary fields for the API to add a new outbound call.
     * 
     * @param ProcessOutboundMessageBodyDto $requestBody Request body data
     * @param array<string, mixed>|null $options Additional request options
     * @return ProcessMessageResponseDto Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function addAnOutboundMessage(
        $requestBody,
        ?array $options = null
    ): ProcessMessageResponseDto {
        if ($requestBody !== null && is_object($requestBody) && method_exists($requestBody, 'toArray')) {
            $requestBody = $requestBody->toArray();
        }
        $paramDefs = [];
        $extracted = RequestUtils::extractParams([], $paramDefs);
        $requirements = ["bearer"];

        $url = RequestUtils::buildUrl('/conversations/messages/outbound', $extracted['path']);
        
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
            
            return new ProcessMessageResponseDto($responseData);
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
     * Cancel a scheduled message.
     * Post the messageId for the API to delete a scheduled message. &lt;br /&gt;
     * 
     * @param array{
     *   messageId: string // Message Id
     * } $params Request parameters
     * @param array<string, mixed>|null $options Additional request options
     * @return CancelScheduledResponseDto Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function cancelScheduledMessage(
        array $params,
        ?array $options = null
    ): CancelScheduledResponseDto {
        $paramDefs = [['name' => 'messageId', 'in' => 'path']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["bearer"];

        $url = RequestUtils::buildUrl('/conversations/messages/{messageId}/schedule', $extracted['path']);
        
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
            
            return new CancelScheduledResponseDto($responseData);
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
     * Upload file attachments
     * Post the necessary fields for the API to upload files. The files need to be a buffer with the key &quot;fileAttachment&quot;. &lt;br /&gt;&lt;br /&gt; The allowed file types are: &lt;br/&gt; &lt;ul&gt;&lt;li&gt;JPG&lt;/li&gt;&lt;li&gt;JPEG&lt;/li&gt;&lt;li&gt;PNG&lt;/li&gt;&lt;li&gt;MP4&lt;/li&gt;&lt;li&gt;MPEG&lt;/li&gt;&lt;li&gt;ZIP&lt;/li&gt;&lt;li&gt;RAR&lt;/li&gt;&lt;li&gt;PDF&lt;/li&gt;&lt;li&gt;DOC&lt;/li&gt;&lt;li&gt;DOCX&lt;/li&gt;&lt;li&gt;TXT&lt;/li&gt;&lt;li&gt;MP3&lt;/li&gt;&lt;li&gt;WAV&lt;/li&gt;&lt;/ul&gt; &lt;br /&gt;&lt;br /&gt; The API will return an object with the URLs
     * 
     * @param array $requestBody Request body data
     * @param array<string, mixed>|null $options Additional request options
     * @return UploadFilesResponseDto Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function uploadFileAttachments(
        $requestBody,
        ?array $options = null
    ): UploadFilesResponseDto {
        if ($requestBody !== null && is_object($requestBody) && method_exists($requestBody, 'toArray')) {
            $requestBody = $requestBody->toArray();
        }
        $paramDefs = [];
        $extracted = RequestUtils::extractParams([], $paramDefs);
        $requirements = ["bearer"];

        $url = RequestUtils::buildUrl('/conversations/messages/upload', $extracted['path']);
        
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
            
            return new UploadFilesResponseDto($responseData);
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
     * Update message status
     * Post the necessary fields for the API to update message status.
     * 
     * @param array{
     *   messageId: string // Message Id
     * } $params Request parameters
     * @param UpdateMessageStatusDto $requestBody Request body data
     * @param array<string, mixed>|null $options Additional request options
     * @return SendMessageResponseDto Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function updateMessageStatus(
        array $params,
        $requestBody,
        ?array $options = null
    ): SendMessageResponseDto {
        if ($requestBody !== null && is_object($requestBody) && method_exists($requestBody, 'toArray')) {
            $requestBody = $requestBody->toArray();
        }
        $paramDefs = [['name' => 'messageId', 'in' => 'path']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["bearer"];

        $url = RequestUtils::buildUrl('/conversations/messages/{messageId}/status', $extracted['path']);
        
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
            
            return new SendMessageResponseDto($responseData);
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
     * Add message attachments
     * Set attachments on an existing message (replaces existing). Maximum 5 URLs. Supported for TYPE_CUSTOM_CALL (34) and TYPE_CALL (1) with subType EXTERNAL_CALL.
     * 
     * @param array{
     *   messageId: string // Message Id
     * } $params Request parameters
     * @param AddMessageAttachmentsDto $requestBody Request body data
     * @param array<string, mixed>|null $options Additional request options
     * @return mixed Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function addMessageAttachments(
        array $params,
        $requestBody,
        ?array $options = null
    ) {
        if ($requestBody !== null && is_object($requestBody) && method_exists($requestBody, 'toArray')) {
            $requestBody = $requestBody->toArray();
        }
        $paramDefs = [['name' => 'messageId', 'in' => 'path']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["bearer"];

        $url = RequestUtils::buildUrl('/conversations/messages/{messageId}/attachments', $extracted['path']);
        
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
     * Get Recording by Message ID
     * Get the recording for a message by passing the message id
     * 
     * @param array{
     *   locationId: string // Location ID as string
     *   messageId: string // Message ID as string
     * } $params Request parameters
     * @param array<string, mixed>|null $options Additional request options
     * @return mixed Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function getMessageRecording(
        array $params,
        ?array $options = null
    ) {
        $paramDefs = [['name' => 'locationId', 'in' => 'path'], ['name' => 'messageId', 'in' => 'path']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["bearer","Location-Access"];

        $url = RequestUtils::buildUrl('/conversations/messages/{messageId}/locations/{locationId}/recording', $extracted['path']);
        
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
     * Get transcription by Message ID
     * Get the recording transcription for a message by passing the message id
     * 
     * @param array{
     *   locationId: string // Location ID as string
     *   messageId: string // Message ID as string
     * } $params Request parameters
     * @param array<string, mixed>|null $options Additional request options
     * @return GetMessageTranscriptionResponseDto Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function getMessageTranscription(
        array $params,
        ?array $options = null
    ): GetMessageTranscriptionResponseDto {
        $paramDefs = [['name' => 'locationId', 'in' => 'path'], ['name' => 'messageId', 'in' => 'path']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["bearer","Location-Access"];

        $url = RequestUtils::buildUrl('/conversations/locations/{locationId}/messages/{messageId}/transcription', $extracted['path']);
        
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
            
            return new GetMessageTranscriptionResponseDto($responseData);
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
     * Download transcription by Message ID
     * Download the recording transcription for a message by passing the message id
     * 
     * @param array{
     *   locationId: string // Location ID as string
     *   messageId: string // Message ID as string
     * } $params Request parameters
     * @param array<string, mixed>|null $options Additional request options
     * @return mixed Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function downloadMessageTranscription(
        array $params,
        ?array $options = null
    ) {
        $paramDefs = [['name' => 'locationId', 'in' => 'path'], ['name' => 'messageId', 'in' => 'path']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["bearer","Location-Access"];

        $url = RequestUtils::buildUrl('/conversations/locations/{locationId}/messages/{messageId}/transcription/download', $extracted['path']);
        
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
     * Agent/Ai-Bot is typing a message indicator for live chat
     * Agent/AI-Bot will call this when they are typing a message in live chat message
     * 
     * @param UserTypingBody $requestBody Request body data
     * @param array<string, mixed>|null $options Additional request options
     * @return CreateLiveChatMessageFeedbackResponse Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function liveChatAgentTyping(
        $requestBody,
        ?array $options = null
    ): CreateLiveChatMessageFeedbackResponse {
        if ($requestBody !== null && is_object($requestBody) && method_exists($requestBody, 'toArray')) {
            $requestBody = $requestBody->toArray();
        }
        $paramDefs = [];
        $extracted = RequestUtils::extractParams([], $paramDefs);
        $requirements = ["Location-Access"];

        $url = RequestUtils::buildUrl('/conversations/providers/live-chat/typing', $extracted['path']);
        
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
            
            return new CreateLiveChatMessageFeedbackResponse($responseData);
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
     * Create Conversation
     * Creates a new conversation with the data provided
     * 
     * @param CreateConversationDto $requestBody Request body data
     * @param array<string, mixed>|null $options Additional request options
     * @return CreateConversationSuccessResponse Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function createConversation(
        $requestBody,
        ?array $options = null
    ): CreateConversationSuccessResponse {
        if ($requestBody !== null && is_object($requestBody) && method_exists($requestBody, 'toArray')) {
            $requestBody = $requestBody->toArray();
        }
        $paramDefs = [];
        $extracted = RequestUtils::extractParams([], $paramDefs);
        $requirements = ["bearer"];

        $url = RequestUtils::buildUrl('/conversations/', $extracted['path']);
        
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
            
            return new CreateConversationSuccessResponse($responseData);
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
     * Send a review reply to Google My Business
     * Post a reply to a customer review on Google My Business

This endpoint is internal-only and is not supported for OAuth or public API integrations. It will be removed from the public OpenAPI specification in a future release.
     * @deprecated This method is deprecated
     * 
     * @param SendReviewReplyDto $requestBody Request body data
     * @param array<string, mixed>|null $options Additional request options
     * @return SendMessageResponseDto Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function sendReviewReply(
        $requestBody,
        ?array $options = null
    ): SendMessageResponseDto {
        if ($requestBody !== null && is_object($requestBody) && method_exists($requestBody, 'toArray')) {
            $requestBody = $requestBody->toArray();
        }
        $paramDefs = [];
        $extracted = RequestUtils::extractParams([], $paramDefs);
        $requirements = ["bearer"];

        $url = RequestUtils::buildUrl('/conversations/messages/review-reply', $extracted['path']);
        
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
            
            return new SendMessageResponseDto($responseData);
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
     * Initiate file upload to GCS
     * Generates a signed URL for direct file upload to Google Cloud Storage. Returns a signed URL valid for 15 minutes. Upload file via PUT request, then call /complete to finalize.

This endpoint is internal-only and is not supported for OAuth or public API integrations. It will be removed from the public OpenAPI specification in a future release.
     * @deprecated This method is deprecated
     * 
     * @param InitiateFileUploadDto $requestBody Request body data
     * @param array<string, mixed>|null $options Additional request options
     * @return InitiateFileUploadResponseDto Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function initiateFileUpload(
        $requestBody,
        ?array $options = null
    ): InitiateFileUploadResponseDto {
        if ($requestBody !== null && is_object($requestBody) && method_exists($requestBody, 'toArray')) {
            $requestBody = $requestBody->toArray();
        }
        $paramDefs = [];
        $extracted = RequestUtils::extractParams([], $paramDefs);
        $requirements = ["bearer"];

        $url = RequestUtils::buildUrl('/conversations/messages/upload/initiate', $extracted['path']);
        
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
            
            return new InitiateFileUploadResponseDto($responseData);
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
     * Complete file upload
     * Validates the uploaded file in GCS and returns the public URL. Call this endpoint after successfully uploading the file to the signed URL.

This endpoint is internal-only and is not supported for OAuth or public API integrations. It will be removed from the public OpenAPI specification in a future release.
     * @deprecated This method is deprecated
     * 
     * @param CompleteFileUploadDto $requestBody Request body data
     * @param array<string, mixed>|null $options Additional request options
     * @return CompleteFileUploadResponseDto Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function completeFileUpload(
        $requestBody,
        ?array $options = null
    ): CompleteFileUploadResponseDto {
        if ($requestBody !== null && is_object($requestBody) && method_exists($requestBody, 'toArray')) {
            $requestBody = $requestBody->toArray();
        }
        $paramDefs = [];
        $extracted = RequestUtils::extractParams([], $paramDefs);
        $requirements = ["bearer"];

        $url = RequestUtils::buildUrl('/conversations/messages/upload/complete', $extracted['path']);
        
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
            
            return new CompleteFileUploadResponseDto($responseData);
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

