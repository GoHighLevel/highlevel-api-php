<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\SocialPlanner;

use HighLevel\HighLevel;
use HighLevel\GHLError;
use HighLevel\Utils\RequestUtils;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Exception\RequestException;
use HighLevel\Services\SocialPlanner\Models\SearchPostDTO;
use HighLevel\Services\SocialPlanner\Models\PostSuccessfulResponseDTO;
use HighLevel\Services\SocialPlanner\Models\CreatePostDTO;
use HighLevel\Services\SocialPlanner\Models\CreatePostSuccessfulResponseDTO;
use HighLevel\Services\SocialPlanner\Models\GetPostSuccessfulResponseDTO;
use HighLevel\Services\SocialPlanner\Models\UpdatePostSuccessfulResponseDTO;
use HighLevel\Services\SocialPlanner\Models\DeletePostSuccessfulResponseDTO;
use HighLevel\Services\SocialPlanner\Models\DeletePostsDto;
use HighLevel\Services\SocialPlanner\Models\BulkDeleteResponseDto;
use HighLevel\Services\SocialPlanner\Models\AccountsListResponseDTO;
use HighLevel\Services\SocialPlanner\Models\LocationAndAccountDeleteResponseDTO;
use HighLevel\Services\SocialPlanner\Models\UploadFileResponseDTO;
use HighLevel\Services\SocialPlanner\Models\GetUploadStatusResponseDTO;
use HighLevel\Services\SocialPlanner\Models\SetAccountsDTO;
use HighLevel\Services\SocialPlanner\Models\SetAccountsResponseDTO;
use HighLevel\Services\SocialPlanner\Models\GetCsvPostResponseDTO;
use HighLevel\Services\SocialPlanner\Models\CSVDefaultDTO;
use HighLevel\Services\SocialPlanner\Models\CsvPostStatusResponseDTO;
use HighLevel\Services\SocialPlanner\Models\DeleteCsvResponseDTO;
use HighLevel\Services\SocialPlanner\Models\DeletePostResponseDTO;
use HighLevel\Services\SocialPlanner\Models\GetByLocationIdResponseDTO;
use HighLevel\Services\SocialPlanner\Models\GetByIdResponseDTO;
use HighLevel\Services\SocialPlanner\Models\GetTagsByLocationIdResponseDTO;
use HighLevel\Services\SocialPlanner\Models\UpdateTagDTO;
use HighLevel\Services\SocialPlanner\Models\GetTagsByIdResponseDTO;
use HighLevel\Services\SocialPlanner\Models\WrappedFetchAvailableCategoriesResponseDTO;
use HighLevel\Services\SocialPlanner\Models\CreateCategoryQueueDTO;
use HighLevel\Services\SocialPlanner\Models\WrappedCreateCategoryQueueResponseDTO;
use HighLevel\Services\SocialPlanner\Models\FetchCategoryQueuesDTO;
use HighLevel\Services\SocialPlanner\Models\WrappedFetchCategoryQueuesResponseDTO;
use HighLevel\Services\SocialPlanner\Models\WrappedFetchQueueByIdResponseDTO;
use HighLevel\Services\SocialPlanner\Models\UpdateCategoryQueueDTO;
use HighLevel\Services\SocialPlanner\Models\WrappedUpdateCategoryQueueResponseDTO;
use HighLevel\Services\SocialPlanner\Models\FetchQueueItemsDTO;
use HighLevel\Services\SocialPlanner\Models\WrappedFetchQueueItemsResponseDTO;
use HighLevel\Services\SocialPlanner\Models\StartEditSessionDTO;
use HighLevel\Services\SocialPlanner\Models\WrappedStartEditSessionResponseDTO;
use HighLevel\Services\SocialPlanner\Models\SaveEditSessionDTO;
use HighLevel\Services\SocialPlanner\Models\WrappedSaveEditSessionResponseDTO;
use HighLevel\Services\SocialPlanner\Models\DiscardEditSessionDTO;
use HighLevel\Services\SocialPlanner\Models\WrappedDiscardEditSessionResponseDTO;
use HighLevel\Services\SocialPlanner\Models\EditSessionCalendarDTO;
use HighLevel\Services\SocialPlanner\Models\WrappedEditSessionCalendarResponseDTO;
use HighLevel\Services\SocialPlanner\Models\FetchSlotsDTO;
use HighLevel\Services\SocialPlanner\Models\WrappedFetchSlotsResponseDTO;
use HighLevel\Services\SocialPlanner\Models\WrappedGeneralSuccessResponseDTO;
use HighLevel\Services\SocialPlanner\Models\UpdateQueueItemDTO;
use HighLevel\Services\SocialPlanner\Models\WrappedUpdateQueueItemResponseDTO;
use HighLevel\Services\SocialPlanner\Models\CalendarListDTO;
use HighLevel\Services\SocialPlanner\Models\WrappedFetchCalendarListResponseDTO;
use HighLevel\Services\SocialPlanner\Models\WrappedDeleteActivePostResponseDTO;
use HighLevel\Services\SocialPlanner\Models\ResetQueueItemDTO;
use HighLevel\Services\SocialPlanner\Models\WrappedResetQueueItemResponseDTO;
use HighLevel\Services\SocialPlanner\Models\CloneQueueItemDTO;
use HighLevel\Services\SocialPlanner\Models\WrappedCloneQueueItemResponseDTO;
use HighLevel\Services\SocialPlanner\Models\CreateQueueItemDTO;
use HighLevel\Services\SocialPlanner\Models\WrappedCreateQueueItemResponseDTO;
use HighLevel\Services\SocialPlanner\Models\CommentsCreateBodyDTO;
use HighLevel\Services\SocialPlanner\Models\CommentsCreateResponseDTO;
use HighLevel\Services\SocialPlanner\Models\CommentsLikeResponseDTO;
use HighLevel\Services\SocialPlanner\Models\DeleteLikeResponseDTO;
use HighLevel\Services\SocialPlanner\Models\CommentsGetListBodyDTO;
use HighLevel\Services\SocialPlanner\Models\CommentsGetListResponseDTO;

/**
 * SocialPlanner Service
 * Documentation for Social Media Posting API
 * 
 * @package HighLevel\Services\SocialPlanner
 */
class SocialPlanner
{
    /**
     * HighLevel client instance
     * @var HighLevel
     */
    private HighLevel $client;

    /**
     * Create a new SocialPlanner service instance
     * 
     * @param HighLevel $client HighLevel client instance
     */
    public function __construct(HighLevel $client)
    {
        $this->client = $client;
    }

    /**
     * Get posts
     * Get Posts
     * 
     * @param array{
     *   locationId: string // Location Id
     * } $params Request parameters
     * @param SearchPostDTO $requestBody Request body data
     * @param array<string, mixed>|null $options Additional request options
     * @return PostSuccessfulResponseDTO Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function getPosts(
        array $params,
        $requestBody,
        ?array $options = null
    ): PostSuccessfulResponseDTO {
        if ($requestBody !== null && is_object($requestBody) && method_exists($requestBody, 'toArray')) {
            $requestBody = $requestBody->toArray();
        }
        $paramDefs = [['name' => 'locationId', 'in' => 'path']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["bearer"];

        $url = RequestUtils::buildUrl('/social-media-posting/{locationId}/posts/list', $extracted['path']);
        
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
            
            return new PostSuccessfulResponseDTO($responseData);
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
     * Create post
     * Create posts for all supported platforms. It is possible to create customized posts per channel by using the same platform account IDs in a request and hitting the create post API multiple times with different summaries and account IDs per platform.

The content and media limitations, as well as platform rate limiters corresponding to the respective platforms, are provided in the following reference link:

  Link: [Platform Limitations](https://help.leadconnectorhq.com/support/solutions/articles/48001240003-social-planner-image-video-content-and-api-limitations &quot;Social Planner Help&quot;)
     * 
     * @param array{
     *   locationId: string // Location Id
     * } $params Request parameters
     * @param CreatePostDTO $requestBody Request body data
     * @param array<string, mixed>|null $options Additional request options
     * @return CreatePostSuccessfulResponseDTO Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function createPost(
        array $params,
        $requestBody,
        ?array $options = null
    ): CreatePostSuccessfulResponseDTO {
        if ($requestBody !== null && is_object($requestBody) && method_exists($requestBody, 'toArray')) {
            $requestBody = $requestBody->toArray();
        }
        $paramDefs = [['name' => 'locationId', 'in' => 'path']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["bearer"];

        $url = RequestUtils::buildUrl('/social-media-posting/{locationId}/posts', $extracted['path']);
        
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
            
            return new CreatePostSuccessfulResponseDTO($responseData);
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
     * Get post
     * Get post
     * 
     * @param array{
     *   locationId: string // Location Id
     *   id: string // Post Id
     * } $params Request parameters
     * @param array<string, mixed>|null $options Additional request options
     * @return GetPostSuccessfulResponseDTO Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function getPost(
        array $params,
        ?array $options = null
    ): GetPostSuccessfulResponseDTO {
        $paramDefs = [['name' => 'locationId', 'in' => 'path'], ['name' => 'id', 'in' => 'path']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["bearer"];

        $url = RequestUtils::buildUrl('/social-media-posting/{locationId}/posts/{id}', $extracted['path']);
        
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
            
            return new GetPostSuccessfulResponseDTO($responseData);
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
     * Edit post
     * Create posts for all supported platforms. It is possible to create customized posts per channel by using the same platform account IDs in a request and hitting the create post API multiple times with different summaries and account IDs per platform.

The content and media limitations, as well as platform rate limiters corresponding to the respective platforms, are provided in the following reference link:

  Link: [Platform Limitations](https://help.leadconnectorhq.com/support/solutions/articles/48001240003-social-planner-image-video-content-and-api-limitations &quot;Social Planner Help&quot;)
     * 
     * @param array{
     *   locationId: string // Location Id
     *   id: string // Post Id
     * } $params Request parameters
     * @param CreatePostDTO $requestBody Request body data
     * @param array<string, mixed>|null $options Additional request options
     * @return UpdatePostSuccessfulResponseDTO Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function editPost(
        array $params,
        $requestBody,
        ?array $options = null
    ): UpdatePostSuccessfulResponseDTO {
        if ($requestBody !== null && is_object($requestBody) && method_exists($requestBody, 'toArray')) {
            $requestBody = $requestBody->toArray();
        }
        $paramDefs = [['name' => 'locationId', 'in' => 'path'], ['name' => 'id', 'in' => 'path']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["bearer"];

        $url = RequestUtils::buildUrl('/social-media-posting/{locationId}/posts/{id}', $extracted['path']);
        
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
            
            return new UpdatePostSuccessfulResponseDTO($responseData);
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
     * Delete Post
     * Delete Post
     * 
     * @param array{
     *   locationId: string // Location Id
     *   id: string // Post Id
     * } $params Request parameters
     * @param array<string, mixed>|null $options Additional request options
     * @return DeletePostSuccessfulResponseDTO Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function deletePost(
        array $params,
        ?array $options = null
    ): DeletePostSuccessfulResponseDTO {
        $paramDefs = [['name' => 'locationId', 'in' => 'path'], ['name' => 'id', 'in' => 'path']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["bearer"];

        $url = RequestUtils::buildUrl('/social-media-posting/{locationId}/posts/{id}', $extracted['path']);
        
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
            
            return new DeletePostSuccessfulResponseDTO($responseData);
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
     * Bulk Delete Social Planner Posts
     * Deletes multiple posts based on the provided list of post IDs. 
                  This operation is useful for clearing up large numbers of posts efficiently. 
                  
Note: 
                  
1.The maximum number of posts that can be deleted in a single request is &#x27;50&#x27;.
                  
2.However, It will only get deleted in CRM database but still
                   it is recommended to be cautious of this operation.
     * 
     * @param DeletePostsDto $requestBody Request body data
     * @param array<string, mixed>|null $options Additional request options
     * @return BulkDeleteResponseDto Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function bulkDeleteSocialPlannerPosts(
        $requestBody,
        ?array $options = null
    ): BulkDeleteResponseDto {
        if ($requestBody !== null && is_object($requestBody) && method_exists($requestBody, 'toArray')) {
            $requestBody = $requestBody->toArray();
        }
        $paramDefs = [];
        $extracted = RequestUtils::extractParams([], $paramDefs);
        $requirements = ["bearer"];

        $url = RequestUtils::buildUrl('/social-media-posting/{locationId}/posts/bulk-delete', $extracted['path']);
        
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
            
            return new BulkDeleteResponseDto($responseData);
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
     * Get Accounts
     * Get list of accounts and groups
     * 
     * @param array{
     *   locationId: string // Location Id
     * } $params Request parameters
     * @param array<string, mixed>|null $options Additional request options
     * @return AccountsListResponseDTO Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function getAccount(
        array $params,
        ?array $options = null
    ): AccountsListResponseDTO {
        $paramDefs = [['name' => 'locationId', 'in' => 'path']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["bearer"];

        $url = RequestUtils::buildUrl('/social-media-posting/{locationId}/accounts', $extracted['path']);
        
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
            
            return new AccountsListResponseDTO($responseData);
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
     * Delete Account
     * Delete account and account from group
     * 
     * @param array{
     *   locationId: string // Location Id
     *   id: string // Id
     *   companyId?: string // Company ID
     *   userId?: string // User ID
     * } $params Request parameters
     * @param array<string, mixed>|null $options Additional request options
     * @return LocationAndAccountDeleteResponseDTO Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function deleteAccount(
        array $params,
        ?array $options = null
    ): LocationAndAccountDeleteResponseDTO {
        $paramDefs = [['name' => 'locationId', 'in' => 'path'], ['name' => 'id', 'in' => 'path'], ['name' => 'companyId', 'in' => 'query'], ['name' => 'userId', 'in' => 'query']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["bearer"];

        $url = RequestUtils::buildUrl('/social-media-posting/{locationId}/accounts/{id}', $extracted['path']);
        
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
            
            return new LocationAndAccountDeleteResponseDTO($responseData);
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
     * Upload CSV
     * Upload a CSV file containing social media posts for bulk scheduling
     * 
     * @param array{
     *   locationId: string // Location Id
     * } $params Request parameters
     * @param array $requestBody Request body data
     * @param array<string, mixed>|null $options Additional request options
     * @return UploadFileResponseDTO Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function uploadCsv(
        array $params,
        $requestBody,
        ?array $options = null
    ): UploadFileResponseDTO {
        if ($requestBody !== null && is_object($requestBody) && method_exists($requestBody, 'toArray')) {
            $requestBody = $requestBody->toArray();
        }
        $paramDefs = [['name' => 'locationId', 'in' => 'path']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["bearer"];

        $url = RequestUtils::buildUrl('/social-media-posting/{locationId}/csv', $extracted['path']);
        
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
            
            return new UploadFileResponseDTO($responseData);
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
     * Get Upload Status
     * Get the status of all CSV imports for a location
     * 
     * @param array{
     *   locationId: string // Location Id
     *   skip?: string // Number of records to skip
     *   limit?: string // Maximum number of records to return
     *   includeUsers?: string // Include user data in response
     *   isFromTemplate?: string // Filter CSVs imported from template library
     *   userId: string // User ID
     * } $params Request parameters
     * @param array<string, mixed>|null $options Additional request options
     * @return GetUploadStatusResponseDTO Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function getUploadStatus(
        array $params,
        ?array $options = null
    ): GetUploadStatusResponseDTO {
        $paramDefs = [['name' => 'locationId', 'in' => 'path'], ['name' => 'skip', 'in' => 'query'], ['name' => 'limit', 'in' => 'query'], ['name' => 'includeUsers', 'in' => 'query'], ['name' => 'isFromTemplate', 'in' => 'query'], ['name' => 'userId', 'in' => 'query']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["bearer"];

        $url = RequestUtils::buildUrl('/social-media-posting/{locationId}/csv', $extracted['path']);
        
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
            
            return new GetUploadStatusResponseDTO($responseData);
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
     * Set Accounts
     * Set social media accounts for a CSV import to publish posts to
     * 
     * @param array{
     *   locationId: string // Location Id
     * } $params Request parameters
     * @param SetAccountsDTO $requestBody Request body data
     * @param array<string, mixed>|null $options Additional request options
     * @return SetAccountsResponseDTO Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function setAccounts(
        array $params,
        $requestBody,
        ?array $options = null
    ): SetAccountsResponseDTO {
        if ($requestBody !== null && is_object($requestBody) && method_exists($requestBody, 'toArray')) {
            $requestBody = $requestBody->toArray();
        }
        $paramDefs = [['name' => 'locationId', 'in' => 'path']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["bearer"];

        $url = RequestUtils::buildUrl('/social-media-posting/{locationId}/set-accounts', $extracted['path']);
        
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
            
            return new SetAccountsResponseDTO($responseData);
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
     * Get CSV Post
     * Get details of a specific CSV import including its posts
     * 
     * @param array{
     *   locationId: string // Location Id
     *   id: string // CSV Id
     *   skip?: string // Number of records to skip
     *   limit?: string // Maximum number of records to return
     * } $params Request parameters
     * @param array<string, mixed>|null $options Additional request options
     * @return GetCsvPostResponseDTO Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function getCsvPost(
        array $params,
        ?array $options = null
    ): GetCsvPostResponseDTO {
        $paramDefs = [['name' => 'locationId', 'in' => 'path'], ['name' => 'id', 'in' => 'path'], ['name' => 'skip', 'in' => 'query'], ['name' => 'limit', 'in' => 'query']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["bearer"];

        $url = RequestUtils::buildUrl('/social-media-posting/{locationId}/csv/{id}', $extracted['path']);
        
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
            
            return new GetCsvPostResponseDTO($responseData);
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
     * Start CSV Finalize
     * Finalize a CSV import and schedule all posts for publishing
     * 
     * @param array{
     *   locationId: string // Location Id
     *   id: string // CSV Id
     * } $params Request parameters
     * @param CSVDefaultDTO $requestBody Request body data
     * @param array<string, mixed>|null $options Additional request options
     * @return CsvPostStatusResponseDTO Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function startCsvFinalize(
        array $params,
        $requestBody,
        ?array $options = null
    ): CsvPostStatusResponseDTO {
        if ($requestBody !== null && is_object($requestBody) && method_exists($requestBody, 'toArray')) {
            $requestBody = $requestBody->toArray();
        }
        $paramDefs = [['name' => 'locationId', 'in' => 'path'], ['name' => 'id', 'in' => 'path']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["bearer"];

        $url = RequestUtils::buildUrl('/social-media-posting/{locationId}/csv/{id}', $extracted['path']);
        
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
            
            return new CsvPostStatusResponseDTO($responseData);
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
     * Delete CSV
     * Delete a CSV import and all its associated posts
     * 
     * @param array{
     *   locationId: string // Location Id
     *   id: string // CSV Id
     * } $params Request parameters
     * @param array<string, mixed>|null $options Additional request options
     * @return DeleteCsvResponseDTO Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function deleteCsv(
        array $params,
        ?array $options = null
    ): DeleteCsvResponseDTO {
        $paramDefs = [['name' => 'locationId', 'in' => 'path'], ['name' => 'id', 'in' => 'path']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["bearer"];

        $url = RequestUtils::buildUrl('/social-media-posting/{locationId}/csv/{id}', $extracted['path']);
        
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
            
            return new DeleteCsvResponseDTO($responseData);
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
     * Delete CSV Post
     * Delete a specific post from a CSV import
     * 
     * @param array{
     *   locationId: string // Location Id
     *   postId: string // CSV Post Id
     *   csvId: string // CSV Id
     * } $params Request parameters
     * @param array<string, mixed>|null $options Additional request options
     * @return DeletePostResponseDTO Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function deleteCsvPost(
        array $params,
        ?array $options = null
    ): DeletePostResponseDTO {
        $paramDefs = [['name' => 'locationId', 'in' => 'path'], ['name' => 'postId', 'in' => 'path'], ['name' => 'csvId', 'in' => 'path']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["bearer"];

        $url = RequestUtils::buildUrl('/social-media-posting/{locationId}/csv/{csvId}/post/{postId}', $extracted['path']);
        
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
            
            return new DeletePostResponseDTO($responseData);
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
     * Start OAuth Flow (Step 1 of 3)
     * ## OAuth Connection Flow - Step 1: Initiate OAuth

This is the first step in the 3-step OAuth flow to connect a social media account:

1. **Start OAuth** (this endpoint) → User authenticates with the platform
2. **Get Accounts** → Retrieve available pages/channels to connect
3. **Attach Account** → Connect the selected account to your location

### How to Use

Open this API in a browser window (not via cURL) with the required query parameters. The user will be redirected to the platform&#x27;s OAuth login screen.

### Receiving the OAuth Response

After successful authentication, the OAuth window will post a message back to your application. Listen for this message to get the &#x60;accountId&#x60; needed for the next step.

&#x60;&#x60;&#x60;javascript
window.addEventListener(&#x27;message&#x27;, function(e) {
  if (e.data &amp;&amp; e.data.page &#x3D;&#x3D;&#x3D; &#x27;social_media_posting&#x27;) {
    const { actionType, page, platform, placement, accountId, reconnectAccounts } &#x3D; e.data;
    // Use accountId for Step 2: GET /oauth/{locationId}/{platform}/accounts/{accountId}
  }
}, false);
&#x60;&#x60;&#x60;

### Event Data Response

| Field | Type | Example | Description |
|-------|------|---------|-------------|
| actionType | string | &quot;close&quot; | The action type |
| page | string | &quot;social-media-posting&quot; | Source page identifier |
| platform | string | &quot;facebook&quot; | The OAuth platform |
| placement | string | &quot;placement&quot; | Placement context |
| accountId | string | &quot;658a9b6833b91e0ecb8f3958&quot; | **Use this for Step 2** |
| reconnectAccounts | string[] | [&quot;658a9b...&quot;, &quot;efd2da...&quot;] | Accounts that need reconnection |

### Next Step

Use the &#x60;accountId&#x60; from the response to call:
&#x60;&#x60;&#x60;
GET /social-media-posting/oauth/{locationId}/{platform}/accounts/{accountId}
&#x60;&#x60;&#x60;

### Platform Notes

- **bluesky**: Currently not supported, will return an error
- **tiktok-business**: Uses a separate business OAuth flow
     * 
     * @param array{
     *   platform: string // Social media platform to connect. Each platform has specific account types:
- **google**: Google Business Profile locations
- **facebook**: Facebook Pages
- **instagram**: Instagram Professional Accounts (Business/Creator)
- **linkedin**: LinkedIn Pages and Profiles
- **tiktok**: TikTok Creator Accounts
- **tiktok-business**: TikTok Business Center Accounts
- **youtube**: YouTube Channels
- **pinterest**: Pinterest Business Accounts
- **threads**: Threads Profiles
- **bluesky**: Bluesky Accounts (currently not supported)
     *   locationId: string // Location Id
     *   userId: string // User Id
     *   page?: string // Page
     *   reconnect?: string // Reconnect
     * } $params Request parameters
     * @param array<string, mixed>|null $options Additional request options
     * @return mixed Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function startOauth(
        array $params,
        ?array $options = null
    ) {
        $paramDefs = [['name' => 'platform', 'in' => 'path'], ['name' => 'locationId', 'in' => 'query'], ['name' => 'userId', 'in' => 'query'], ['name' => 'page', 'in' => 'query'], ['name' => 'reconnect', 'in' => 'query']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = [];

        $url = RequestUtils::buildUrl('/social-media-posting/oauth/{platform}/start', $extracted['path']);
        
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
     * Get Available Accounts (Step 2 of 3)
     * ## OAuth Connection Flow - Step 2: Get Available Accounts

After completing OAuth authentication (Step 1), use this endpoint to retrieve the list of available pages, channels, or locations that can be connected.

### OAuth Flow Position

1. **Start OAuth** → User authenticates, returns &#x60;accountId&#x60;
2. **Get Accounts** (this endpoint) → Lists available pages/channels to connect
3. **Attach Account** → Connect the selected account

### What This Returns

The response varies by platform:

| Platform | Returns |
|----------|--------|
| **facebook** | List of Facebook Pages the user manages |
| **instagram** | List of Instagram Professional Accounts (linked to Facebook Pages) |
| **google** | Google Business Profile locations |
| **linkedin** | LinkedIn Pages and Profile |
| **tiktok** | TikTok Creator account info |
| **tiktok-business** | TikTok Business Center accounts |
| **youtube** | YouTube Channels |
| **pinterest** | Pinterest Business accounts and boards |
| **threads** | Threads profiles |

### Next Step

From the response, select the account/page you want to connect and use its details in Step 3:
&#x60;&#x60;&#x60;
POST /social-media-posting/oauth/{locationId}/{platform}/accounts/{accountId}
&#x60;&#x60;&#x60;
     * 
     * @param array{
     *   locationId: string // Account Location Id
     *   platform: string // Social media platform
     *   accountId: string // The OAuth Account ID received from Step 1 (Start OAuth) via the window message event
     *   search?: string // Search term to filter accounts/pages by name. Useful when the user has many pages to choose from.
     * } $params Request parameters
     * @param array<string, mixed>|null $options Additional request options
     * @return mixed Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function getOauthAccounts(
        array $params,
        ?array $options = null
    ) {
        $paramDefs = [['name' => 'locationId', 'in' => 'path'], ['name' => 'platform', 'in' => 'path'], ['name' => 'accountId', 'in' => 'path'], ['name' => 'search', 'in' => 'query']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = [];

        $url = RequestUtils::buildUrl('/social-media-posting/oauth/{locationId}/{platform}/accounts/{accountId}', $extracted['path']);
        
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
     * Connect Account (Step 3 of 3)
     * ## OAuth Connection Flow - Step 3: Connect the Account

This is the final step in the OAuth flow. After retrieving available accounts (Step 2), use this endpoint to connect the selected account to your location.

### OAuth Flow Summary

1. **Start OAuth** → User authenticates with platform
2. **Get Accounts** → Retrieved available pages/channels
3. **Attach Account** (this endpoint) → Connect the selected account

### Request Body by Platform

The request body structure varies depending on the platform:

#### Facebook / Instagram
&#x60;&#x60;&#x60;json
{
  &quot;type&quot;: &quot;page&quot;,
  &quot;originId&quot;: &quot;244405XXXXX11687&quot;,
  &quot;name&quot;: &quot;My Facebook Page&quot;,
  &quot;avatar&quot;: &quot;https://...&quot; // optional
}
&#x60;&#x60;&#x60;

#### Google Business Profile
&#x60;&#x60;&#x60;json
{
  &quot;location&quot;: {
    &quot;name&quot;: &quot;locations/12345&quot;,
    &quot;title&quot;: &quot;My Business Location&quot;,
    &quot;storeCode&quot;: &quot;STORE123&quot;,
    &quot;isVerified&quot;: &quot;ChIJsZQpj1qbXjkRQNDUG4UUx6k&quot;
  },
  &quot;account&quot;: {
    &quot;name&quot;: &quot;accounts/12345&quot;,
    &quot;accountName&quot;: &quot;My Business Account&quot;,
    &quot;type&quot;: &quot;LOCATION_GROUP&quot;,
    &quot;verificationState&quot;: &quot;VERIFIED&quot;,
    &quot;vettedState&quot;: &quot;VETTED&quot;
  }
}
&#x60;&#x60;&#x60;

#### LinkedIn
&#x60;&#x60;&#x60;json
{
  &quot;type&quot;: &quot;page&quot;,
  &quot;originId&quot;: &quot;urn:li:organization:12345&quot;,
  &quot;name&quot;: &quot;My LinkedIn Page&quot;,
  &quot;avatar&quot;: &quot;https://...&quot; // optional
}
&#x60;&#x60;&#x60;

#### TikTok
&#x60;&#x60;&#x60;json
{
  &quot;originId&quot;: &quot;7234567890123456789&quot;,
  &quot;name&quot;: &quot;My TikTok Account&quot;,
  &quot;avatar&quot;: &quot;https://...&quot; // optional
}
&#x60;&#x60;&#x60;

#### YouTube
&#x60;&#x60;&#x60;json
{
  &quot;originId&quot;: &quot;UCxxxxxxxxxxxxxxxx&quot;,
  &quot;name&quot;: &quot;My YouTube Channel&quot;,
  &quot;avatar&quot;: &quot;https://...&quot; // optional
}
&#x60;&#x60;&#x60;

#### Pinterest
&#x60;&#x60;&#x60;json
{
  &quot;originId&quot;: &quot;123456789&quot;,
  &quot;name&quot;: &quot;My Pinterest Account&quot;,
  &quot;avatar&quot;: &quot;https://...&quot; // optional
}
&#x60;&#x60;&#x60;

### After Connection

Once connected, the account will appear in your location&#x27;s connected accounts and can be used for social media posting.
     * 
     * @param array{
     *   locationId: string // The Location ID where you want to connect this social account
     *   platform: string // Social media platform (must match the platform used in Steps 1 and 2)
     *   accountId: string // The OAuth Account ID received from Step 1 (same as used in Step 2)
     * } $params Request parameters
     * @param array $requestBody Request body data
     * @param array<string, mixed>|null $options Additional request options
     * @return mixed Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function attachOauthAccounts(
        array $params,
        $requestBody,
        ?array $options = null
    ) {
        if ($requestBody !== null && is_object($requestBody) && method_exists($requestBody, 'toArray')) {
            $requestBody = $requestBody->toArray();
        }
        $paramDefs = [['name' => 'locationId', 'in' => 'path'], ['name' => 'platform', 'in' => 'path'], ['name' => 'accountId', 'in' => 'path']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = [];

        $url = RequestUtils::buildUrl('/social-media-posting/oauth/{locationId}/{platform}/accounts/{accountId}', $extracted['path']);
        
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
     * Get categories by location id
     * Retrieve all categories for a specific location with optional search and pagination
     * 
     * @param array{
     *   locationId: string // Location Id
     *   searchText?: string // Search text string
     *   limit?: string // Limit
     *   skip?: string // Skip
     * } $params Request parameters
     * @param array<string, mixed>|null $options Additional request options
     * @return GetByLocationIdResponseDTO Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function getCategoriesLocationId(
        array $params,
        ?array $options = null
    ): GetByLocationIdResponseDTO {
        $paramDefs = [['name' => 'locationId', 'in' => 'path'], ['name' => 'searchText', 'in' => 'query'], ['name' => 'limit', 'in' => 'query'], ['name' => 'skip', 'in' => 'query']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["bearer"];

        $url = RequestUtils::buildUrl('/social-media-posting/{locationId}/categories', $extracted['path']);
        
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
            
            return new GetByLocationIdResponseDTO($responseData);
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
     * Get categories by id
     * Retrieve a specific category by its ID
     * 
     * @param array{
     *   id: string // Category Id
     *   locationId: string // Location Id
     * } $params Request parameters
     * @param array<string, mixed>|null $options Additional request options
     * @return GetByIdResponseDTO Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function getCategoriesId(
        array $params,
        ?array $options = null
    ): GetByIdResponseDTO {
        $paramDefs = [['name' => 'id', 'in' => 'path'], ['name' => 'locationId', 'in' => 'path']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["bearer"];

        $url = RequestUtils::buildUrl('/social-media-posting/{locationId}/categories/{id}', $extracted['path']);
        
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
            
            return new GetByIdResponseDTO($responseData);
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
     * Get tags by location id
     * Retrieve all tags for a specific location with optional search and pagination
     * 
     * @param array{
     *   locationId: string // Location Id
     *   searchText?: string // Search text string
     *   limit?: string // Limit
     *   skip?: string // Skip
     * } $params Request parameters
     * @param array<string, mixed>|null $options Additional request options
     * @return GetTagsByLocationIdResponseDTO Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function getTagsLocationId(
        array $params,
        ?array $options = null
    ): GetTagsByLocationIdResponseDTO {
        $paramDefs = [['name' => 'locationId', 'in' => 'path'], ['name' => 'searchText', 'in' => 'query'], ['name' => 'limit', 'in' => 'query'], ['name' => 'skip', 'in' => 'query']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["bearer"];

        $url = RequestUtils::buildUrl('/social-media-posting/{locationId}/tags', $extracted['path']);
        
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
            
            return new GetTagsByLocationIdResponseDTO($responseData);
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
     * Get tags by ids
     * Retrieve specific tags by their IDs
     * 
     * @param array{
     *   locationId: string // Location Id
     * } $params Request parameters
     * @param UpdateTagDTO $requestBody Request body data
     * @param array<string, mixed>|null $options Additional request options
     * @return GetTagsByIdResponseDTO Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function getTagsByIds(
        array $params,
        $requestBody,
        ?array $options = null
    ): GetTagsByIdResponseDTO {
        if ($requestBody !== null && is_object($requestBody) && method_exists($requestBody, 'toArray')) {
            $requestBody = $requestBody->toArray();
        }
        $paramDefs = [['name' => 'locationId', 'in' => 'path']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["bearer"];

        $url = RequestUtils::buildUrl('/social-media-posting/{locationId}/tags/details', $extracted['path']);
        
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
            
            return new GetTagsByIdResponseDTO($responseData);
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
     * Get Social Media Statistics
     * Retrieve analytics data for multiple social media accounts. Supports custom date ranges for both the current period and a comparison period. If no date ranges are provided, defaults to the last 7 days (excluding today) with comparison to the previous 7 days.
     * 
     * @param array{
     *   locationId: string // Location ID
     * } $params Request parameters
     * @param array $requestBody Request body data
     * @param array<string, mixed>|null $options Additional request options
     * @return mixed Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function getStatistics(
        array $params,
        $requestBody,
        ?array $options = null
    ) {
        if ($requestBody !== null && is_object($requestBody) && method_exists($requestBody, 'toArray')) {
            $requestBody = $requestBody->toArray();
        }
        $paramDefs = [['name' => 'locationId', 'in' => 'query']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["bearer"];

        $url = RequestUtils::buildUrl('/social-media-posting/statistics', $extracted['path']);
        
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
     * Get all categories with their queue status
     * Returns categories with status: &quot;available&quot; (no queue), &quot;in_queue&quot; (active/paused queue), or &quot;draft&quot; (queue in draft).
     * 
     * @param array{
     *   locationId: string // Location ID
     *   skip?: string // Number of items to skip
     *   limit?: string // Maximum number of items to return
     *   q?: string // Search query
     * } $params Request parameters
     * @param array<string, mixed>|null $options Additional request options
     * @return WrappedFetchAvailableCategoriesResponseDTO Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function fetchAvailableCategories(
        array $params,
        ?array $options = null
    ): WrappedFetchAvailableCategoriesResponseDTO {
        $paramDefs = [['name' => 'locationId', 'in' => 'query'], ['name' => 'skip', 'in' => 'query'], ['name' => 'limit', 'in' => 'query'], ['name' => 'q', 'in' => 'query']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["bearer"];

        $url = RequestUtils::buildUrl('/social-media-posting/category/queues/available-categories', $extracted['path']);
        
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
            
            return new WrappedFetchAvailableCategoriesResponseDTO($responseData);
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
     * Create a new category queue
     * Creates a queue in draft status for a category. Published posts are auto-added. Use update endpoint to activate.
     * 
     * @param CreateCategoryQueueDTO $requestBody Request body data
     * @param array<string, mixed>|null $options Additional request options
     * @return WrappedCreateCategoryQueueResponseDTO Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function createQueue(
        $requestBody,
        ?array $options = null
    ): WrappedCreateCategoryQueueResponseDTO {
        if ($requestBody !== null && is_object($requestBody) && method_exists($requestBody, 'toArray')) {
            $requestBody = $requestBody->toArray();
        }
        $paramDefs = [];
        $extracted = RequestUtils::extractParams([], $paramDefs);
        $requirements = ["bearer"];

        $url = RequestUtils::buildUrl('/social-media-posting/category/queues', $extracted['path']);
        
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
            
            return new WrappedCreateCategoryQueueResponseDTO($responseData);
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
     * Fetch category queues for a location
     * Retrieves a paginated list of all category queues for a given location, excluding any that have been marked as deleted.
     * 
     * @param FetchCategoryQueuesDTO $requestBody Request body data
     * @param array<string, mixed>|null $options Additional request options
     * @return WrappedFetchCategoryQueuesResponseDTO Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function fetchQueues(
        $requestBody,
        ?array $options = null
    ): WrappedFetchCategoryQueuesResponseDTO {
        if ($requestBody !== null && is_object($requestBody) && method_exists($requestBody, 'toArray')) {
            $requestBody = $requestBody->toArray();
        }
        $paramDefs = [];
        $extracted = RequestUtils::extractParams([], $paramDefs);
        $requirements = ["bearer"];

        $url = RequestUtils::buildUrl('/social-media-posting/category/queues/list', $extracted['path']);
        
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
            
            return new WrappedFetchCategoryQueuesResponseDTO($responseData);
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
     * Fetch a category queue by ID
     * Retrieves the details of a single category queue by its unique ID. The response includes a count of posts within the queue that have errors.
     * 
     * @param array{
     *   queueId: string
     *   locationId: string // Location ID
     * } $params Request parameters
     * @param array<string, mixed>|null $options Additional request options
     * @return WrappedFetchQueueByIdResponseDTO Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function fetchQueueById(
        array $params,
        ?array $options = null
    ): WrappedFetchQueueByIdResponseDTO {
        $paramDefs = [['name' => 'queueId', 'in' => 'path'], ['name' => 'locationId', 'in' => 'query']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["bearer"];

        $url = RequestUtils::buildUrl('/social-media-posting/category/queues/{queueId}', $extracted['path']);
        
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
            
            return new WrappedFetchQueueByIdResponseDTO($responseData);
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
     * Update queue settings or status
     * Updates queue status (active/paused/deleted), time slots, or skip dates.
     * 
     * @param array{
     *   queueId: string
     * } $params Request parameters
     * @param UpdateCategoryQueueDTO $requestBody Request body data
     * @param array<string, mixed>|null $options Additional request options
     * @return WrappedUpdateCategoryQueueResponseDTO Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function updateQueue(
        array $params,
        $requestBody,
        ?array $options = null
    ): WrappedUpdateCategoryQueueResponseDTO {
        if ($requestBody !== null && is_object($requestBody) && method_exists($requestBody, 'toArray')) {
            $requestBody = $requestBody->toArray();
        }
        $paramDefs = [['name' => 'queueId', 'in' => 'path']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["bearer"];

        $url = RequestUtils::buildUrl('/social-media-posting/category/queues/{queueId}', $extracted['path']);
        
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
            
            return new WrappedUpdateCategoryQueueResponseDTO($responseData);
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
     * Fetch items from a queue
     * Returns paginated queue items. Pass sessionId to get draft items from an edit session instead of live items.
     * 
     * @param array{
     *   queueId: string
     * } $params Request parameters
     * @param FetchQueueItemsDTO $requestBody Request body data
     * @param array<string, mixed>|null $options Additional request options
     * @return WrappedFetchQueueItemsResponseDTO Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function fetchQueueItems(
        array $params,
        $requestBody,
        ?array $options = null
    ): WrappedFetchQueueItemsResponseDTO {
        if ($requestBody !== null && is_object($requestBody) && method_exists($requestBody, 'toArray')) {
            $requestBody = $requestBody->toArray();
        }
        $paramDefs = [['name' => 'queueId', 'in' => 'path']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["bearer"];

        $url = RequestUtils::buildUrl('/social-media-posting/category/queues/{queueId}/items', $extracted['path']);
        
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
            
            return new WrappedFetchQueueItemsResponseDTO($responseData);
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
     * Start or resume an edit session
     * Creates a draft copy of queue items for editing. Changes are staged until saved or discarded.
     * 
     * @param array{
     *   queueId: string
     * } $params Request parameters
     * @param StartEditSessionDTO $requestBody Request body data
     * @param array<string, mixed>|null $options Additional request options
     * @return WrappedStartEditSessionResponseDTO Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function startEditSession(
        array $params,
        $requestBody,
        ?array $options = null
    ): WrappedStartEditSessionResponseDTO {
        if ($requestBody !== null && is_object($requestBody) && method_exists($requestBody, 'toArray')) {
            $requestBody = $requestBody->toArray();
        }
        $paramDefs = [['name' => 'queueId', 'in' => 'path']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["bearer"];

        $url = RequestUtils::buildUrl('/social-media-posting/category/queues/{queueId}/edit/start', $extracted['path']);
        
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
            
            return new WrappedStartEditSessionResponseDTO($responseData);
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
     * Save edit session changes
     * Applies all staged changes to the live queue and closes the edit session.
     * 
     * @param array{
     *   queueId: string
     * } $params Request parameters
     * @param SaveEditSessionDTO $requestBody Request body data
     * @param array<string, mixed>|null $options Additional request options
     * @return WrappedSaveEditSessionResponseDTO Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function saveEditSession(
        array $params,
        $requestBody,
        ?array $options = null
    ): WrappedSaveEditSessionResponseDTO {
        if ($requestBody !== null && is_object($requestBody) && method_exists($requestBody, 'toArray')) {
            $requestBody = $requestBody->toArray();
        }
        $paramDefs = [['name' => 'queueId', 'in' => 'path']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["bearer"];

        $url = RequestUtils::buildUrl('/social-media-posting/category/queues/{queueId}/edit/save', $extracted['path']);
        
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
            
            return new WrappedSaveEditSessionResponseDTO($responseData);
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
     * Discard edit session changes
     * Cancels the edit session and deletes all staged changes without affecting the live queue.
     * 
     * @param array{
     *   queueId: string
     * } $params Request parameters
     * @param DiscardEditSessionDTO $requestBody Request body data
     * @param array<string, mixed>|null $options Additional request options
     * @return WrappedDiscardEditSessionResponseDTO Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function discardEditSession(
        array $params,
        $requestBody,
        ?array $options = null
    ): WrappedDiscardEditSessionResponseDTO {
        if ($requestBody !== null && is_object($requestBody) && method_exists($requestBody, 'toArray')) {
            $requestBody = $requestBody->toArray();
        }
        $paramDefs = [['name' => 'queueId', 'in' => 'path']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["bearer"];

        $url = RequestUtils::buildUrl('/social-media-posting/category/queues/{queueId}/edit/discard', $extracted['path']);
        
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
            
            return new WrappedDiscardEditSessionResponseDTO($responseData);
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
     * Fetch calendar view for an edit session
     * Retrieves a calendar preview of scheduled posts based on draft items within an edit session. This shows how posts would be scheduled if changes were saved.
     * 
     * @param array{
     *   queueId: string
     * } $params Request parameters
     * @param EditSessionCalendarDTO $requestBody Request body data
     * @param array<string, mixed>|null $options Additional request options
     * @return WrappedEditSessionCalendarResponseDTO Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function fetchEditSessionCalendar(
        array $params,
        $requestBody,
        ?array $options = null
    ): WrappedEditSessionCalendarResponseDTO {
        if ($requestBody !== null && is_object($requestBody) && method_exists($requestBody, 'toArray')) {
            $requestBody = $requestBody->toArray();
        }
        $paramDefs = [['name' => 'queueId', 'in' => 'path']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["bearer"];

        $url = RequestUtils::buildUrl('/social-media-posting/category/queues/{queueId}/edit/calendar', $extracted['path']);
        
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
            
            return new WrappedEditSessionCalendarResponseDTO($responseData);
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
     * Fetch slot information for queue items
     * Returns paginated slot information (scheduledDateTime, isSkipped) for queue items. Pass sessionId to get slots for draft items, or omit for live items. Call this after mutations to refresh slot data.
     * 
     * @param array{
     *   queueId: string
     * } $params Request parameters
     * @param FetchSlotsDTO $requestBody Request body data
     * @param array<string, mixed>|null $options Additional request options
     * @return WrappedFetchSlotsResponseDTO Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function fetchSlots(
        array $params,
        $requestBody,
        ?array $options = null
    ): WrappedFetchSlotsResponseDTO {
        if ($requestBody !== null && is_object($requestBody) && method_exists($requestBody, 'toArray')) {
            $requestBody = $requestBody->toArray();
        }
        $paramDefs = [['name' => 'queueId', 'in' => 'path']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["bearer"];

        $url = RequestUtils::buildUrl('/social-media-posting/category/queues/{queueId}/slots', $extracted['path']);
        
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
            
            return new WrappedFetchSlotsResponseDTO($responseData);
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
     * Delete an item from a queue
     * Deletes an item from a specific category queue.
     * 
     * @param array{
     *   queueId: string
     *   itemId: string
     *   locationId: string // Location ID
     *   sessionId?: string // Edit session ID
     * } $params Request parameters
     * @param array<string, mixed>|null $options Additional request options
     * @return WrappedGeneralSuccessResponseDTO Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function deleteQueueItem(
        array $params,
        ?array $options = null
    ): WrappedGeneralSuccessResponseDTO {
        $paramDefs = [['name' => 'queueId', 'in' => 'path'], ['name' => 'itemId', 'in' => 'path'], ['name' => 'locationId', 'in' => 'query'], ['name' => 'sessionId', 'in' => 'query']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["bearer"];

        $url = RequestUtils::buildUrl('/social-media-posting/category/queues/{queueId}/items/{itemId}', $extracted['path']);
        
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
            
            return new WrappedGeneralSuccessResponseDTO($responseData);
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
     * Update an item in a queue
     * Updates the content or variations of a specific item within a category queue.
     * 
     * @param array{
     *   queueId: string
     *   itemId: string
     * } $params Request parameters
     * @param UpdateQueueItemDTO $requestBody Request body data
     * @param array<string, mixed>|null $options Additional request options
     * @return WrappedUpdateQueueItemResponseDTO Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function updateQueueItem(
        array $params,
        $requestBody,
        ?array $options = null
    ): WrappedUpdateQueueItemResponseDTO {
        if ($requestBody !== null && is_object($requestBody) && method_exists($requestBody, 'toArray')) {
            $requestBody = $requestBody->toArray();
        }
        $paramDefs = [['name' => 'queueId', 'in' => 'path'], ['name' => 'itemId', 'in' => 'path']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["bearer"];

        $url = RequestUtils::buildUrl('/social-media-posting/category/queues/{queueId}/items/{itemId}', $extracted['path']);
        
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
            
            return new WrappedUpdateQueueItemResponseDTO($responseData);
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
     * Get scheduled posts calendar view
     * Returns scheduled posts from active queues within a date range. Supports filtering by categories and accounts.
     * 
     * @param CalendarListDTO $requestBody Request body data
     * @param array<string, mixed>|null $options Additional request options
     * @return WrappedFetchCalendarListResponseDTO Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function fetchCalendarList(
        $requestBody,
        ?array $options = null
    ): WrappedFetchCalendarListResponseDTO {
        if ($requestBody !== null && is_object($requestBody) && method_exists($requestBody, 'toArray')) {
            $requestBody = $requestBody->toArray();
        }
        $paramDefs = [];
        $extracted = RequestUtils::extractParams([], $paramDefs);
        $requirements = ["bearer"];

        $url = RequestUtils::buildUrl('/social-media-posting/category/queues/list/calendar', $extracted['path']);
        
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
            
            return new WrappedFetchCalendarListResponseDTO($responseData);
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
     * Delete an active post and schedule the next one
     * Deletes a post that is currently scheduled and automatically triggers the scheduling of the next available post in the queue.
     * 
     * @param array{
     *   postId: string
     *   locationId: string // Location ID
     * } $params Request parameters
     * @param array<string, mixed>|null $options Additional request options
     * @return WrappedDeleteActivePostResponseDTO Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function deleteCurrentActivePostAndScheduleNext(
        array $params,
        ?array $options = null
    ): WrappedDeleteActivePostResponseDTO {
        $paramDefs = [['name' => 'postId', 'in' => 'path'], ['name' => 'locationId', 'in' => 'query']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["bearer"];

        $url = RequestUtils::buildUrl('/social-media-posting/category/queues/{postId}/active-post', $extracted['path']);
        
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
            
            return new WrappedDeleteActivePostResponseDTO($responseData);
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
     * Reset an item in a queue
     * Resets a specific queue item to its original state, discarding any modifications made.
     * 
     * @param array{
     *   queueId: string
     *   itemId: string
     * } $params Request parameters
     * @param ResetQueueItemDTO $requestBody Request body data
     * @param array<string, mixed>|null $options Additional request options
     * @return WrappedResetQueueItemResponseDTO Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function resetQueueItem(
        array $params,
        $requestBody,
        ?array $options = null
    ): WrappedResetQueueItemResponseDTO {
        if ($requestBody !== null && is_object($requestBody) && method_exists($requestBody, 'toArray')) {
            $requestBody = $requestBody->toArray();
        }
        $paramDefs = [['name' => 'queueId', 'in' => 'path'], ['name' => 'itemId', 'in' => 'path']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["bearer"];

        $url = RequestUtils::buildUrl('/social-media-posting/category/queues/{queueId}/items/{itemId}/reset', $extracted['path']);
        
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
            
            return new WrappedResetQueueItemResponseDTO($responseData);
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
     * Clone a queue item
     * Duplicates an existing queue item at a specified order position. Requires an active edit session.
     * 
     * @param array{
     *   queueId: string
     *   itemId: string
     * } $params Request parameters
     * @param CloneQueueItemDTO $requestBody Request body data
     * @param array<string, mixed>|null $options Additional request options
     * @return WrappedCloneQueueItemResponseDTO Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function cloneQueueItem(
        array $params,
        $requestBody,
        ?array $options = null
    ): WrappedCloneQueueItemResponseDTO {
        if ($requestBody !== null && is_object($requestBody) && method_exists($requestBody, 'toArray')) {
            $requestBody = $requestBody->toArray();
        }
        $paramDefs = [['name' => 'queueId', 'in' => 'path'], ['name' => 'itemId', 'in' => 'path']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["bearer"];

        $url = RequestUtils::buildUrl('/social-media-posting/category/queues/{queueId}/items/{itemId}/clone', $extracted['path']);
        
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
            
            return new WrappedCloneQueueItemResponseDTO($responseData);
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
     * Create a new item in the queue
     * Adds a new post item to a queue. Use sessionId for edit session or directToQueue for immediate addition.
     * 
     * @param array{
     *   queueId: string
     * } $params Request parameters
     * @param CreateQueueItemDTO $requestBody Request body data
     * @param array<string, mixed>|null $options Additional request options
     * @return WrappedCreateQueueItemResponseDTO Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function createQueueItem(
        array $params,
        $requestBody,
        ?array $options = null
    ): WrappedCreateQueueItemResponseDTO {
        if ($requestBody !== null && is_object($requestBody) && method_exists($requestBody, 'toArray')) {
            $requestBody = $requestBody->toArray();
        }
        $paramDefs = [['name' => 'queueId', 'in' => 'path']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["bearer"];

        $url = RequestUtils::buildUrl('/social-media-posting/category/queues/{queueId}/create/item', $extracted['path']);
        
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
            
            return new WrappedCreateQueueItemResponseDTO($responseData);
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
     * Create a comment or reply
     * Create a top-level comment on a post (&#x60;isParentThread: true&#x60;, &#x60;parentId&#x60; &#x3D; postId) or a reply to an existing comment (&#x60;isParentThread: false&#x60;, &#x60;parentId&#x60; &#x3D; commentId). Per-platform content max length: Facebook 8000, Instagram 2200, Linkedin 3000, Community 8000, Tiktok 150, Bluesky 300, Youtube 10000, Threads 500.

**Optional-field platform support:**
- &#x60;attachments&#x60; — supported on **Facebook only**. Ignored on Instagram, LinkedIn, TikTok, Bluesky, Community (Community processes the field but external URLs are not rendered due to its bucket restriction).
- &#x60;mentions&#x60; — supported on **Facebook**, **LinkedIn**, and **Community** only. Ignored on Instagram, TikTok, Bluesky.
- &#x60;notifyAllGroupMembers&#x60; — supported on **Community** only. When &#x60;true&#x60;, all group members get a push/in-app notification (equivalent to an &#x60;@everyone&#x60; broadcast). Independent of the &#x60;mentions&#x60; array and of &#x60;@everyone&#x60; text in &#x60;content&#x60;. Default &#x60;false&#x60;.
     * 
     * @param array{
     *   platform: string // Supported Comments Platforms
     *   locationId: string // Location ID
     * } $params Request parameters
     * @param CommentsCreateBodyDTO $requestBody Request body data
     * @param array<string, mixed>|null $options Additional request options
     * @return CommentsCreateResponseDTO Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function createComment(
        array $params,
        $requestBody,
        ?array $options = null
    ): CommentsCreateResponseDTO {
        if ($requestBody !== null && is_object($requestBody) && method_exists($requestBody, 'toArray')) {
            $requestBody = $requestBody->toArray();
        }
        $paramDefs = [['name' => 'platform', 'in' => 'path'], ['name' => 'locationId', 'in' => 'query']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = [];

        $url = RequestUtils::buildUrl('/social-media-posting/comments/{platform}', $extracted['path']);
        
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
            
            return new CommentsCreateResponseDTO($responseData);
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
     * Like a comment
     * Like a comment by its **Highlevel** comment ID (the &#x60;_id&#x60; returned by the list-comments endpoint — not the native platform ID).

Works for any comment level — top-level comments, replies, and replies-to-replies. **Supported platforms:** Facebook, LinkedIn, Community, TikTok, Bluesky. Instagram is not supported (passing &#x60;instagram&#x60; returns 400).
     * 
     * @param array{
     *   platform: string // Platform that supports liking / unliking comments (Instagram is not supported)
     *   id: string // Highlevel comment ID — the `_id` returned by the list-comments endpoint (`POST /comments/{platform}/list`). Not the native platform comment ID. Works for any comment level: top-level comments, replies, and replies-to-replies.
     *   locationId: string // Location ID
     * } $params Request parameters
     * @param array<string, mixed>|null $options Additional request options
     * @return CommentsLikeResponseDTO Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function createLike(
        array $params,
        ?array $options = null
    ): CommentsLikeResponseDTO {
        $paramDefs = [['name' => 'platform', 'in' => 'path'], ['name' => 'id', 'in' => 'path'], ['name' => 'locationId', 'in' => 'query']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = [];

        $url = RequestUtils::buildUrl('/social-media-posting/comments/{platform}/{id}/like', $extracted['path']);
        
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
            
            return new CommentsLikeResponseDTO($responseData);
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
     * Unlike a comment
     * Remove a like from a comment by its **Highlevel** comment ID (the &#x60;_id&#x60; returned by the list-comments endpoint — not the native platform ID).

Works for any comment level — top-level comments, replies, and replies-to-replies. **Supported platforms:** Facebook, LinkedIn, Community, TikTok, Bluesky. Instagram is not supported (passing &#x60;instagram&#x60; returns 400).
     * 
     * @param array{
     *   platform: string // Platform that supports liking / unliking comments (Instagram is not supported)
     *   id: string // Highlevel comment ID — the `_id` returned by the list-comments endpoint (`POST /comments/{platform}/list`). Not the native platform comment ID. Works for any comment level: top-level comments, replies, and replies-to-replies.
     *   locationId: string // Location ID
     * } $params Request parameters
     * @param array<string, mixed>|null $options Additional request options
     * @return DeleteLikeResponseDTO Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function deleteLike(
        array $params,
        ?array $options = null
    ): DeleteLikeResponseDTO {
        $paramDefs = [['name' => 'platform', 'in' => 'path'], ['name' => 'id', 'in' => 'path'], ['name' => 'locationId', 'in' => 'query']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = [];

        $url = RequestUtils::buildUrl('/social-media-posting/comments/{platform}/{id}/like', $extracted['path']);
        
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
            
            return new DeleteLikeResponseDTO($responseData);
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
     * List comments for a post or thread
     * Paginated list of comments scoped to a post (&#x60;parentId&#x60; &#x3D; postId) or a comment thread (&#x60;parentId&#x60; &#x3D; commentId). Use &#x60;skip&#x60;/&#x60;limit&#x60; for pagination, &#x60;sortBy&#x60; for ordering, &#x60;originIds&#x60; to filter by connected account, and &#x60;search&#x60; for keyword search.
     * 
     * @param array{
     *   platform: string // Supported Comments Platforms
     *   locationId: string // Location ID
     * } $params Request parameters
     * @param CommentsGetListBodyDTO $requestBody Request body data
     * @param array<string, mixed>|null $options Additional request options
     * @return CommentsGetListResponseDTO Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function getCommentList(
        array $params,
        $requestBody,
        ?array $options = null
    ): CommentsGetListResponseDTO {
        if ($requestBody !== null && is_object($requestBody) && method_exists($requestBody, 'toArray')) {
            $requestBody = $requestBody->toArray();
        }
        $paramDefs = [['name' => 'platform', 'in' => 'path'], ['name' => 'locationId', 'in' => 'query']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = [];

        $url = RequestUtils::buildUrl('/social-media-posting/comments/{platform}/list', $extracted['path']);
        
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
            
            return new CommentsGetListResponseDTO($responseData);
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

