<?php

namespace HighLevel\Services\SocialMediaPosting;

use HighLevel\HighLevel;
use HighLevel\GHLError;
use HighLevel\Utils\RequestUtils;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Exception\RequestException;
use HighLevel\Services\SocialMediaPosting\Models\GetGoogleLocationResponseDTO;
use HighLevel\Services\SocialMediaPosting\Models\AttachGMBLocationDTO;
use HighLevel\Services\SocialMediaPosting\Models\SocialMediaGmbAccountResponseDTO;
use HighLevel\Services\SocialMediaPosting\Models\SearchPostDTO;
use HighLevel\Services\SocialMediaPosting\Models\PostSuccessfulResponseDTO;
use HighLevel\Services\SocialMediaPosting\Models\CreatePostDTO;
use HighLevel\Services\SocialMediaPosting\Models\CreatePostSuccessfulResponseDTO;
use HighLevel\Services\SocialMediaPosting\Models\GetPostSuccessfulResponseDTO;
use HighLevel\Services\SocialMediaPosting\Models\PostCreateRequest;
use HighLevel\Services\SocialMediaPosting\Models\UpdatePostSuccessfulResponseDTO;
use HighLevel\Services\SocialMediaPosting\Models\DeletePostSuccessfulResponseDTO;
use HighLevel\Services\SocialMediaPosting\Models\DeletePostsDto;
use HighLevel\Services\SocialMediaPosting\Models\BulkDeleteResponseDto;
use HighLevel\Services\SocialMediaPosting\Models\AccountsListResponseDTO;
use HighLevel\Services\SocialMediaPosting\Models\LocationAndAccountDeleteResponseDTO;
use HighLevel\Services\SocialMediaPosting\Models\GetFacebookAccountsResponseDTO;
use HighLevel\Services\SocialMediaPosting\Models\AttachFBAccountDTO;
use HighLevel\Services\SocialMediaPosting\Models\SocialMediaFBAccountResponseDTO;
use HighLevel\Services\SocialMediaPosting\Models\GetInstagramAccountsResponseDTO;
use HighLevel\Services\SocialMediaPosting\Models\AttachIGAccountDTO;
use HighLevel\Services\SocialMediaPosting\Models\SocialMediaInstagramAccountResponseDTO;
use HighLevel\Services\SocialMediaPosting\Models\GetLinkedInAccountsResponseDTO;
use HighLevel\Services\SocialMediaPosting\Models\AttachLinkedinAccountDTO;
use HighLevel\Services\SocialMediaPosting\Models\SocialMediaLinkedInAccountResponseDTO;
use HighLevel\Services\SocialMediaPosting\Models\GetTwitterAccountsResponseDTO;
use HighLevel\Services\SocialMediaPosting\Models\AttachTwitterAccountDTO;
use HighLevel\Services\SocialMediaPosting\Models\SocialMediaTwitterAccountResponseDTO;
use HighLevel\Services\SocialMediaPosting\Models\UploadFileResponseDTO;
use HighLevel\Services\SocialMediaPosting\Models\GetUploadStatusResponseDTO;
use HighLevel\Services\SocialMediaPosting\Models\SetAccountsDTO;
use HighLevel\Services\SocialMediaPosting\Models\SetAccountsResponseDTO;
use HighLevel\Services\SocialMediaPosting\Models\GetCsvPostResponseDTO;
use HighLevel\Services\SocialMediaPosting\Models\CSVDefaultDTO;
use HighLevel\Services\SocialMediaPosting\Models\CsvPostStatusResponseDTO;
use HighLevel\Services\SocialMediaPosting\Models\DeleteCsvResponseDTO;
use HighLevel\Services\SocialMediaPosting\Models\DeletePostResponseDTO;
use HighLevel\Services\SocialMediaPosting\Models\GetTiktokAccountResponseDTO;
use HighLevel\Services\SocialMediaPosting\Models\AttachTiktokAccountDTO;
use HighLevel\Services\SocialMediaPosting\Models\SocialMediaTiktokAccountResponseDTO;
use HighLevel\Services\SocialMediaPosting\Models\GetTiktokBusinessAccountResponseDTO;
use HighLevel\Services\SocialMediaPosting\Models\GetByLocationIdResponseDTO;
use HighLevel\Services\SocialMediaPosting\Models\GetByIdResponseDTO;
use HighLevel\Services\SocialMediaPosting\Models\GetTagsByLocationIdResponseDTO;
use HighLevel\Services\SocialMediaPosting\Models\UpdateTagDTO;
use HighLevel\Services\SocialMediaPosting\Models\GetTagsByIdResponseDTO;

/**
 * SocialMediaPosting Service
 * Documentation for Social Media Posting API
 * 
 * @package HighLevel\Services\SocialMediaPosting
 */
class SocialMediaPosting
{
    /**
     * HighLevel client instance
     * @var HighLevel
     */
    private HighLevel $client;

    /**
     * Create a new SocialMediaPosting service instance
     * 
     * @param HighLevel $client HighLevel client instance
     */
    public function __construct(HighLevel $client)
    {
        $this->client = $client;
    }

    /**
     * Starts OAuth For Google Account
     * Open the API in a window with appropriate params and headers instead of using the Curl. User is navigated to Google login OAuth screen. On successful login, listen on window object for message where event listener returns data in its callback function. 
  ### Sample code to listen to event data:
    window.addEventListener(&#x27;message&#x27;, 
      function(e) {
        if (e.data &amp;&amp; e.data.page &#x3D;&#x3D;&#x3D; &#x27;social_media_posting&#x27;) {
        const { actionType, page, platform, placement, accountId, reconnectAccounts } &#x3D; e.data
        }
      },
    false)
  ### Event Data Response:
    {
      actionType: string,            Ex: &quot;close&quot; 
      page: string,                  Ex: &quot;social-media-posting&quot; 
      platform: string,              Ex: &quot;google&quot; 
      placement: string,             Ex: &quot;placement&quot; 
      accountId: string,             Ex: &quot;658a9b6833b91e0ecb8f3958&quot; 
      reconnectAccounts: string[]]   Ex: [&quot;658a9b6833b91e0ecb834acd&quot;, &quot;efd2daa9b6833b91e0ecb8f3511&quot;] 
    }
  ### The accountId retrieved from above data can be used to fetch Google account details using below API -
  API: &#x27;/social-media-posting/oauth/google/accounts/:accountId&#x27; 

  Method: GET
     * 
     * @param array{
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
    public function startGoogleOauth(
        array $params,
        ?array $options = null
    ): mixed {
        $paramDefs = [['name' => 'locationId', 'in' => 'query'], ['name' => 'userId', 'in' => 'query'], ['name' => 'page', 'in' => 'query'], ['name' => 'reconnect', 'in' => 'query']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["bearer"];

        $url = RequestUtils::buildUrl('/social-media-posting/oauth/google/start', $extracted['path']);
        
        $headers = array_merge(
            $extracted['header'],
            $options['headers'] ?? []
        );

        $authToken = RequestUtils::getAuthToken(
            $this->client,
            $requirements,
            $headers,
            $extracted['query'],
            $requestBody ?? null,
            $options['preferredTokenType'] ?? null
        );

        if ($authToken) {
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
     * Get google business locations
     * Get google business locations
     * 
     * @param array{
     *   locationId: string // Account Location Id
     *   accountId: string // Account Id
     * } $params Request parameters
     * @param array<string, mixed>|null $options Additional request options
     * @return GetGoogleLocationResponseDTO Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function getGoogleLocations(
        array $params,
        ?array $options = null
    ): GetGoogleLocationResponseDTO {
        $paramDefs = [['name' => 'locationId', 'in' => 'path'], ['name' => 'accountId', 'in' => 'path']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["bearer"];

        $url = RequestUtils::buildUrl('/social-media-posting/oauth/{locationId}/google/locations/{accountId}', $extracted['path']);
        
        $headers = array_merge(
            $extracted['header'],
            $options['headers'] ?? []
        );

        $authToken = RequestUtils::getAuthToken(
            $this->client,
            $requirements,
            $headers,
            $extracted['query'],
            $requestBody ?? null,
            $options['preferredTokenType'] ?? null
        );

        if ($authToken) {
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
            
            return new GetGoogleLocationResponseDTO($responseData);
        } catch (RequestException $e) {
            $statusCode = $e->hasResponse() ? $e->getResponse()->getStatusCode() : null;
            $responseBody = $e->hasResponse() ? (string) $e->getResponse()->getBody() : null;
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
     * Set google business locations
     * Set google business locations
     * 
     * @param array{
     *   locationId: string // Account Location Id
     *   accountId: string // Account Id
     * } $params Request parameters
     * @param AttachGMBLocationDTO $requestBody Request body data
     * @param array<string, mixed>|null $options Additional request options
     * @return SocialMediaGmbAccountResponseDTO Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function setGoogleLocations(
        array $params,
        AttachGMBLocationDTO $requestBody,
        ?array $options = null
    ): SocialMediaGmbAccountResponseDTO {
        if ($requestBody !== null && is_object($requestBody) && method_exists($requestBody, 'toArray')) {
            $requestBody = $requestBody->toArray();
        }
        $paramDefs = [['name' => 'locationId', 'in' => 'path'], ['name' => 'accountId', 'in' => 'path']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["bearer"];

        $url = RequestUtils::buildUrl('/social-media-posting/oauth/{locationId}/google/locations/{accountId}', $extracted['path']);
        
        $headers = array_merge(
            $extracted['header'],
            $options['headers'] ?? []
        );

        $authToken = RequestUtils::getAuthToken(
            $this->client,
            $requirements,
            $headers,
            $extracted['query'],
            $requestBody ?? null,
            $options['preferredTokenType'] ?? null
        );

        if ($authToken) {
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
            
            return new SocialMediaGmbAccountResponseDTO($responseData);
        } catch (RequestException $e) {
            $statusCode = $e->hasResponse() ? $e->getResponse()->getStatusCode() : null;
            $responseBody = $e->hasResponse() ? (string) $e->getResponse()->getBody() : null;
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
        SearchPostDTO $requestBody,
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
        CreatePostDTO $requestBody,
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
     * @param PostCreateRequest $requestBody Request body data
     * @param array<string, mixed>|null $options Additional request options
     * @return UpdatePostSuccessfulResponseDTO Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function editPost(
        array $params,
        PostCreateRequest $requestBody,
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
                  
2.However, It will only get deleted in Highlevel database but still
                   it is recommended to be cautious of this operation.
     * 
     * @param DeletePostsDto $requestBody Request body data
     * @param array<string, mixed>|null $options Additional request options
     * @return BulkDeleteResponseDto Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function bulkDeleteSocialPlannerPosts(
        DeletePostsDto $requestBody,
        ?array $options = null
    ): BulkDeleteResponseDto {
        if ($requestBody !== null && is_object($requestBody) && method_exists($requestBody, 'toArray')) {
            $requestBody = $requestBody->toArray();
        }
        $paramDefs = [];
        $extracted = RequestUtils::extractParams([], $paramDefs);
        $requirements = [];

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
     * Starts OAuth For Facebook Account
     * Open the API in a window with appropriate params and headers instead of using the Curl. User is navigated to Facebook login OAuth screen. On successful login, listen on window object for message where event listener returns data in its callback function. 
  ### Sample code to listen to event data:
    window.addEventListener(&#x27;message&#x27;, 
      function(e) {
        if (e.data &amp;&amp; e.data.page &#x3D;&#x3D;&#x3D; &#x27;social_media_posting&#x27;) {
        const { actionType, page, platform, placement, accountId, reconnectAccounts } &#x3D; e.data
        }
      },
    false)
  ### Event Data Response:
    {
      actionType: string,            Ex: &quot;close&quot; 
      page: string,                  Ex: &quot;social-media-posting&quot; 
      platform: string,              Ex: &quot;facebook&quot; 
      placement: string,             Ex: &quot;placement&quot; 
      accountId: string,             Ex: &quot;658a9b6833b91e0ecb8f3958&quot; 
      reconnectAccounts: string[]]   Ex: [&quot;658a9b6833b91e0ecb834acd&quot;, &quot;efd2daa9b6833b91e0ecb8f3511&quot;] 
    }
  ### The accountId retrieved from above data can be used to fetch Facebook account details using below API -
  API: &#x27;/social-media-posting/oauth/facebook/accounts/:accountId&#x27; 

  Method: GET
     * 
     * @param array{
     *   locationId: string // Account Location Id
     *   userId: string // User ID
     *   page?: string // Facebook Page
     *   reconnect?: string // Reconnect boolean as string
     * } $params Request parameters
     * @param array<string, mixed>|null $options Additional request options
     * @return mixed Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function startFacebookOauth(
        array $params,
        ?array $options = null
    ): mixed {
        $paramDefs = [['name' => 'locationId', 'in' => 'query'], ['name' => 'userId', 'in' => 'query'], ['name' => 'page', 'in' => 'query'], ['name' => 'reconnect', 'in' => 'query']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["bearer"];

        $url = RequestUtils::buildUrl('/social-media-posting/oauth/facebook/start', $extracted['path']);
        
        $headers = array_merge(
            $extracted['header'],
            $options['headers'] ?? []
        );

        $authToken = RequestUtils::getAuthToken(
            $this->client,
            $requirements,
            $headers,
            $extracted['query'],
            $requestBody ?? null,
            $options['preferredTokenType'] ?? null
        );

        if ($authToken) {
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
     * Get facebook pages
     * Get facebook pages
     * 
     * @param array{
     *   locationId: string // Account Location Id
     *   accountId: string // Account Id
     * } $params Request parameters
     * @param array<string, mixed>|null $options Additional request options
     * @return GetFacebookAccountsResponseDTO Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function getFacebookPageGroup(
        array $params,
        ?array $options = null
    ): GetFacebookAccountsResponseDTO {
        $paramDefs = [['name' => 'locationId', 'in' => 'path'], ['name' => 'accountId', 'in' => 'path']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["bearer"];

        $url = RequestUtils::buildUrl('/social-media-posting/oauth/{locationId}/facebook/accounts/{accountId}', $extracted['path']);
        
        $headers = array_merge(
            $extracted['header'],
            $options['headers'] ?? []
        );

        $authToken = RequestUtils::getAuthToken(
            $this->client,
            $requirements,
            $headers,
            $extracted['query'],
            $requestBody ?? null,
            $options['preferredTokenType'] ?? null
        );

        if ($authToken) {
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
            
            return new GetFacebookAccountsResponseDTO($responseData);
        } catch (RequestException $e) {
            $statusCode = $e->hasResponse() ? $e->getResponse()->getStatusCode() : null;
            $responseBody = $e->hasResponse() ? (string) $e->getResponse()->getBody() : null;
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
     * Attach facebook pages
     * Attach facebook pages
     * 
     * @param array{
     *   locationId: string // Account Location Id
     *   accountId: string // Account Id
     * } $params Request parameters
     * @param AttachFBAccountDTO $requestBody Request body data
     * @param array<string, mixed>|null $options Additional request options
     * @return SocialMediaFBAccountResponseDTO Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function attachFacebookPageGroup(
        array $params,
        AttachFBAccountDTO $requestBody,
        ?array $options = null
    ): SocialMediaFBAccountResponseDTO {
        if ($requestBody !== null && is_object($requestBody) && method_exists($requestBody, 'toArray')) {
            $requestBody = $requestBody->toArray();
        }
        $paramDefs = [['name' => 'locationId', 'in' => 'path'], ['name' => 'accountId', 'in' => 'path']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["bearer"];

        $url = RequestUtils::buildUrl('/social-media-posting/oauth/{locationId}/facebook/accounts/{accountId}', $extracted['path']);
        
        $headers = array_merge(
            $extracted['header'],
            $options['headers'] ?? []
        );

        $authToken = RequestUtils::getAuthToken(
            $this->client,
            $requirements,
            $headers,
            $extracted['query'],
            $requestBody ?? null,
            $options['preferredTokenType'] ?? null
        );

        if ($authToken) {
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
            
            return new SocialMediaFBAccountResponseDTO($responseData);
        } catch (RequestException $e) {
            $statusCode = $e->hasResponse() ? $e->getResponse()->getStatusCode() : null;
            $responseBody = $e->hasResponse() ? (string) $e->getResponse()->getBody() : null;
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
     * Starts OAuth For Instagram Account
     * Open the API in a window with appropriate params and headers instead of using the Curl. User is navigated to Instagram login OAuth screen. On successful login, listen on window object for message where event listener returns data in its callback function. 
  ### Sample code to listen to event data:
    window.addEventListener(&#x27;message&#x27;, 
      function(e) {
        if (e.data &amp;&amp; e.data.page &#x3D;&#x3D;&#x3D; &#x27;social_media_posting&#x27;) {
        const { actionType, page, platform, placement, accountId, reconnectAccounts } &#x3D; e.data
        }
      },
    false)
  ### Event Data Response:
    {
      actionType: string,            Ex: &quot;close&quot; 
      page: string,                  Ex: &quot;social-media-posting&quot; 
      platform: string,              Ex: &quot;instagram&quot; 
      placement: string,             Ex: &quot;placement&quot; 
      accountId: string,             Ex: &quot;658a9b6833b91e0ecb8f3958&quot; 
      reconnectAccounts: string[]]   Ex: [&quot;658a9b6833b91e0ecb834acd&quot;, &quot;efd2daa9b6833b91e0ecb8f3511&quot;] 
    }
  ### The accountId retrieved from above data can be used to fetch Instagram account details using below API -
  API: &#x27;/social-media-posting/oauth/instagram/accounts/:accountId&#x27; 

  Method: GET
     * 
     * @param array{
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
    public function startInstagramOauth(
        array $params,
        ?array $options = null
    ): mixed {
        $paramDefs = [['name' => 'locationId', 'in' => 'query'], ['name' => 'userId', 'in' => 'query'], ['name' => 'page', 'in' => 'query'], ['name' => 'reconnect', 'in' => 'query']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["bearer"];

        $url = RequestUtils::buildUrl('/social-media-posting/oauth/instagram/start', $extracted['path']);
        
        $headers = array_merge(
            $extracted['header'],
            $options['headers'] ?? []
        );

        $authToken = RequestUtils::getAuthToken(
            $this->client,
            $requirements,
            $headers,
            $extracted['query'],
            $requestBody ?? null,
            $options['preferredTokenType'] ?? null
        );

        if ($authToken) {
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
     * Get Instagram Professional Accounts
     * Get Instagram Professional Accounts
     * 
     * @param array{
     *   locationId: string // Account Location Id
     *   accountId: string // Account Id
     * } $params Request parameters
     * @param array<string, mixed>|null $options Additional request options
     * @return GetInstagramAccountsResponseDTO Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function getInstagramPageGroup(
        array $params,
        ?array $options = null
    ): GetInstagramAccountsResponseDTO {
        $paramDefs = [['name' => 'locationId', 'in' => 'path'], ['name' => 'accountId', 'in' => 'path']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["bearer"];

        $url = RequestUtils::buildUrl('/social-media-posting/oauth/{locationId}/instagram/accounts/{accountId}', $extracted['path']);
        
        $headers = array_merge(
            $extracted['header'],
            $options['headers'] ?? []
        );

        $authToken = RequestUtils::getAuthToken(
            $this->client,
            $requirements,
            $headers,
            $extracted['query'],
            $requestBody ?? null,
            $options['preferredTokenType'] ?? null
        );

        if ($authToken) {
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
            
            return new GetInstagramAccountsResponseDTO($responseData);
        } catch (RequestException $e) {
            $statusCode = $e->hasResponse() ? $e->getResponse()->getStatusCode() : null;
            $responseBody = $e->hasResponse() ? (string) $e->getResponse()->getBody() : null;
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
     * Attach Instagram Professional Accounts
     * Attach Instagram Professional Accounts
     * 
     * @param array{
     *   locationId: string // Account Location Id
     *   accountId: string // Account Id
     * } $params Request parameters
     * @param AttachIGAccountDTO $requestBody Request body data
     * @param array<string, mixed>|null $options Additional request options
     * @return SocialMediaInstagramAccountResponseDTO Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function attachInstagramPageGroup(
        array $params,
        AttachIGAccountDTO $requestBody,
        ?array $options = null
    ): SocialMediaInstagramAccountResponseDTO {
        if ($requestBody !== null && is_object($requestBody) && method_exists($requestBody, 'toArray')) {
            $requestBody = $requestBody->toArray();
        }
        $paramDefs = [['name' => 'locationId', 'in' => 'path'], ['name' => 'accountId', 'in' => 'path']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["bearer"];

        $url = RequestUtils::buildUrl('/social-media-posting/oauth/{locationId}/instagram/accounts/{accountId}', $extracted['path']);
        
        $headers = array_merge(
            $extracted['header'],
            $options['headers'] ?? []
        );

        $authToken = RequestUtils::getAuthToken(
            $this->client,
            $requirements,
            $headers,
            $extracted['query'],
            $requestBody ?? null,
            $options['preferredTokenType'] ?? null
        );

        if ($authToken) {
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
            
            return new SocialMediaInstagramAccountResponseDTO($responseData);
        } catch (RequestException $e) {
            $statusCode = $e->hasResponse() ? $e->getResponse()->getStatusCode() : null;
            $responseBody = $e->hasResponse() ? (string) $e->getResponse()->getBody() : null;
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
     * Starts OAuth For LinkedIn Account
     * Open the API in a window with appropriate params and headers instead of using the Curl. User is navigated to LinkedIn login OAuth screen. On successful login, listen on window object for message where event listener returns data in its callback function. 
  ### Sample code to listen to event data:
    window.addEventListener(&#x27;message&#x27;, 
      function(e) {
        if (e.data &amp;&amp; e.data.page &#x3D;&#x3D;&#x3D; &#x27;social_media_posting&#x27;) {
        const { actionType, page, platform, placement, accountId, reconnectAccounts } &#x3D; e.data
        }
      },
    false)
  ### Event Data Response:
    {
      actionType: string,            Ex: &quot;close&quot; 
      page: string,                  Ex: &quot;social-media-posting&quot; 
      platform: string,              Ex: &quot;linkedin&quot; 
      placement: string,             Ex: &quot;placement&quot; 
      accountId: string,             Ex: &quot;658a9b6833b91e0ecb8f3958&quot; 
      reconnectAccounts: string[]]   Ex: [&quot;658a9b6833b91e0ecb834acd&quot;, &quot;efd2daa9b6833b91e0ecb8f3511&quot;] 
    }
  ### The accountId retrieved from above data can be used to fetch LinkedIn account details using below API -
  API: &#x27;/social-media-posting/oauth/linkedin/accounts/:accountId&#x27; 

  Method: GET
     * 
     * @param array{
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
    public function startLinkedinOauth(
        array $params,
        ?array $options = null
    ): mixed {
        $paramDefs = [['name' => 'locationId', 'in' => 'query'], ['name' => 'userId', 'in' => 'query'], ['name' => 'page', 'in' => 'query'], ['name' => 'reconnect', 'in' => 'query']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["bearer"];

        $url = RequestUtils::buildUrl('/social-media-posting/oauth/linkedin/start', $extracted['path']);
        
        $headers = array_merge(
            $extracted['header'],
            $options['headers'] ?? []
        );

        $authToken = RequestUtils::getAuthToken(
            $this->client,
            $requirements,
            $headers,
            $extracted['query'],
            $requestBody ?? null,
            $options['preferredTokenType'] ?? null
        );

        if ($authToken) {
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
     * Get Linkedin pages and profile
     * Get Linkedin pages and profile
     * 
     * @param array{
     *   locationId: string // Account Location Id
     *   accountId: string // Account Id
     * } $params Request parameters
     * @param array<string, mixed>|null $options Additional request options
     * @return GetLinkedInAccountsResponseDTO Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function getLinkedinPageProfile(
        array $params,
        ?array $options = null
    ): GetLinkedInAccountsResponseDTO {
        $paramDefs = [['name' => 'locationId', 'in' => 'path'], ['name' => 'accountId', 'in' => 'path']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["bearer"];

        $url = RequestUtils::buildUrl('/social-media-posting/oauth/{locationId}/linkedin/accounts/{accountId}', $extracted['path']);
        
        $headers = array_merge(
            $extracted['header'],
            $options['headers'] ?? []
        );

        $authToken = RequestUtils::getAuthToken(
            $this->client,
            $requirements,
            $headers,
            $extracted['query'],
            $requestBody ?? null,
            $options['preferredTokenType'] ?? null
        );

        if ($authToken) {
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
            
            return new GetLinkedInAccountsResponseDTO($responseData);
        } catch (RequestException $e) {
            $statusCode = $e->hasResponse() ? $e->getResponse()->getStatusCode() : null;
            $responseBody = $e->hasResponse() ? (string) $e->getResponse()->getBody() : null;
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
     * Attach linkedin pages and profile
     * Attach linkedin pages and profile
     * 
     * @param array{
     *   locationId: string // Account Location Id
     *   accountId: string // Account Id
     * } $params Request parameters
     * @param AttachLinkedinAccountDTO $requestBody Request body data
     * @param array<string, mixed>|null $options Additional request options
     * @return SocialMediaLinkedInAccountResponseDTO Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function attachLinkedinPageProfile(
        array $params,
        AttachLinkedinAccountDTO $requestBody,
        ?array $options = null
    ): SocialMediaLinkedInAccountResponseDTO {
        if ($requestBody !== null && is_object($requestBody) && method_exists($requestBody, 'toArray')) {
            $requestBody = $requestBody->toArray();
        }
        $paramDefs = [['name' => 'locationId', 'in' => 'path'], ['name' => 'accountId', 'in' => 'path']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["bearer"];

        $url = RequestUtils::buildUrl('/social-media-posting/oauth/{locationId}/linkedin/accounts/{accountId}', $extracted['path']);
        
        $headers = array_merge(
            $extracted['header'],
            $options['headers'] ?? []
        );

        $authToken = RequestUtils::getAuthToken(
            $this->client,
            $requirements,
            $headers,
            $extracted['query'],
            $requestBody ?? null,
            $options['preferredTokenType'] ?? null
        );

        if ($authToken) {
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
            
            return new SocialMediaLinkedInAccountResponseDTO($responseData);
        } catch (RequestException $e) {
            $statusCode = $e->hasResponse() ? $e->getResponse()->getStatusCode() : null;
            $responseBody = $e->hasResponse() ? (string) $e->getResponse()->getBody() : null;
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
     * Starts OAuth For Twitter Account
     * &lt;div&gt;&lt;div&gt;
  &lt;span style&#x3D; &quot;display: inline-block;
    width: 25px; height: 25px;
    background-color: red;
    color: black;
    font-weight: bold;
    font-size: 24px;
    text-align: center;
    line-height: 20px;
    border: 2px solid black;
    border-radius: 20%;
    margin-right: 10px;&quot;&gt;
    !
  &lt;/span&gt;
  &lt;span&gt;&lt;strong&gt;As of December 4, 2024, X (formerly Twitter) is no longer supported. We apologise for any inconvenience.&lt;/strong&gt;&lt;/span&gt;
&lt;/div&gt;&lt;/div&gt;
     * @deprecated This method is deprecated
     * 
     * @param array{
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
    public function startTwitterOauth(
        array $params,
        ?array $options = null
    ): mixed {
        $paramDefs = [['name' => 'locationId', 'in' => 'query'], ['name' => 'userId', 'in' => 'query'], ['name' => 'page', 'in' => 'query'], ['name' => 'reconnect', 'in' => 'query']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["bearer"];

        $url = RequestUtils::buildUrl('/social-media-posting/oauth/twitter/start', $extracted['path']);
        
        $headers = array_merge(
            $extracted['header'],
            $options['headers'] ?? []
        );

        $authToken = RequestUtils::getAuthToken(
            $this->client,
            $requirements,
            $headers,
            $extracted['query'],
            $requestBody ?? null,
            $options['preferredTokenType'] ?? null
        );

        if ($authToken) {
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
     * Get Twitter profile
     * &lt;div&gt;&lt;div&gt;
  &lt;span style&#x3D; &quot;display: inline-block;
    width: 25px; height: 25px;
    background-color: red;
    color: black;
    font-weight: bold;
    font-size: 24px;
    text-align: center;
    line-height: 20px;
    border: 2px solid black;
    border-radius: 20%;
    margin-right: 10px;&quot;&gt;
    !
  &lt;/span&gt;
  &lt;span&gt;&lt;strong&gt;As of December 4, 2024, X (formerly Twitter) is no longer supported. We apologise for any inconvenience.&lt;/strong&gt;&lt;/span&gt;
&lt;/div&gt;&lt;/div&gt;
     * @deprecated This method is deprecated
     * 
     * @param array{
     *   locationId: string // Account Location Id
     *   accountId: string // Account Id
     * } $params Request parameters
     * @param array<string, mixed>|null $options Additional request options
     * @return GetTwitterAccountsResponseDTO Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function getTwitterProfile(
        array $params,
        ?array $options = null
    ): GetTwitterAccountsResponseDTO {
        $paramDefs = [['name' => 'locationId', 'in' => 'path'], ['name' => 'accountId', 'in' => 'path']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = [];

        $url = RequestUtils::buildUrl('/social-media-posting/oauth/{locationId}/twitter/accounts/{accountId}', $extracted['path']);
        
        $headers = array_merge(
            $extracted['header'],
            $options['headers'] ?? []
        );

        $authToken = RequestUtils::getAuthToken(
            $this->client,
            $requirements,
            $headers,
            $extracted['query'],
            $requestBody ?? null,
            $options['preferredTokenType'] ?? null
        );

        if ($authToken) {
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
            
            return new GetTwitterAccountsResponseDTO($responseData);
        } catch (RequestException $e) {
            $statusCode = $e->hasResponse() ? $e->getResponse()->getStatusCode() : null;
            $responseBody = $e->hasResponse() ? (string) $e->getResponse()->getBody() : null;
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
     * Attach Twitter profile
     * &lt;div&gt;&lt;div&gt;
  &lt;span style&#x3D; &quot;display: inline-block;
    width: 25px; height: 25px;
    background-color: red;
    color: black;
    font-weight: bold;
    font-size: 24px;
    text-align: center;
    line-height: 20px;
    border: 2px solid black;
    border-radius: 20%;
    margin-right: 10px;&quot;&gt;
    !
  &lt;/span&gt;
  &lt;span&gt;&lt;strong&gt;As of December 4, 2024, X (formerly Twitter) is no longer supported. We apologise for any inconvenience.&lt;/strong&gt;&lt;/span&gt;
&lt;/div&gt;&lt;/div&gt;
     * @deprecated This method is deprecated
     * 
     * @param array{
     *   locationId: string // Account Location Id
     *   accountId: string // Account Id
     * } $params Request parameters
     * @param AttachTwitterAccountDTO $requestBody Request body data
     * @param array<string, mixed>|null $options Additional request options
     * @return SocialMediaTwitterAccountResponseDTO Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function attachTwitterProfile(
        array $params,
        AttachTwitterAccountDTO $requestBody,
        ?array $options = null
    ): SocialMediaTwitterAccountResponseDTO {
        if ($requestBody !== null && is_object($requestBody) && method_exists($requestBody, 'toArray')) {
            $requestBody = $requestBody->toArray();
        }
        $paramDefs = [['name' => 'locationId', 'in' => 'path'], ['name' => 'accountId', 'in' => 'path']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = [];

        $url = RequestUtils::buildUrl('/social-media-posting/oauth/{locationId}/twitter/accounts/{accountId}', $extracted['path']);
        
        $headers = array_merge(
            $extracted['header'],
            $options['headers'] ?? []
        );

        $authToken = RequestUtils::getAuthToken(
            $this->client,
            $requirements,
            $headers,
            $extracted['query'],
            $requestBody ?? null,
            $options['preferredTokenType'] ?? null
        );

        if ($authToken) {
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
            
            return new SocialMediaTwitterAccountResponseDTO($responseData);
        } catch (RequestException $e) {
            $statusCode = $e->hasResponse() ? $e->getResponse()->getStatusCode() : null;
            $responseBody = $e->hasResponse() ? (string) $e->getResponse()->getBody() : null;
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
     * 
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
        array $requestBody,
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
     * 
     * 
     * @param array{
     *   locationId: string // Location Id
     *   skip?: string
     *   limit?: string
     *   includeUsers?: string
     *   userId?: string // User ID
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
        $paramDefs = [['name' => 'locationId', 'in' => 'path'], ['name' => 'skip', 'in' => 'query'], ['name' => 'limit', 'in' => 'query'], ['name' => 'includeUsers', 'in' => 'query'], ['name' => 'userId', 'in' => 'query']];
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
     * 
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
        SetAccountsDTO $requestBody,
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
     * 
     * 
     * @param array{
     *   locationId: string
     *   id: string // CSV Id
     *   skip?: string
     *   limit?: string
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
     * 
     * 
     * @param array{
     *   locationId: string
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
        CSVDefaultDTO $requestBody,
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
     * 
     * 
     * @param array{
     *   locationId: string
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
     * 
     * 
     * @param array{
     *   locationId: string
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
     * Starts OAuth For Tiktok Account
     * Open the API in a window with appropriate params and headers instead of using the Curl. User is navigated to Tiktok login OAuth screen. On successful login, listen on window object for message where event listener returns data in its callback function. 
  ### Sample code to listen to event data:
    window.addEventListener(&#x27;message&#x27;, 
      function(e) {
        if (e.data &amp;&amp; e.data.page &#x3D;&#x3D;&#x3D; &#x27;social_media_posting&#x27;) {
        const { actionType, page, platform, placement, accountId, reconnectAccounts } &#x3D; e.data
        }
      },
    false)
  ### Event Data Response:
    {
      actionType: string,            Ex: &quot;close&quot; 
      page: string,                  Ex: &quot;social-media-posting&quot; 
      platform: string,              Ex: &quot;tiktok&quot; 
      placement: string,             Ex: &quot;placement&quot; 
      accountId: string,             Ex: &quot;658a9b6833b91e0ecb8f3958&quot; 
      reconnectAccounts: string[]]   Ex: [&quot;658a9b6833b91e0ecb834acd&quot;, &quot;efd2daa9b6833b91e0ecb8f3511&quot;] 
    }
  ### The accountId retrieved from above data can be used to fetch Tiktok account details using below API -
  API: &#x27;/social-media-posting/oauth/tiktok/accounts/:accountId&#x27; 

  Method: GET
     * 
     * @param array{
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
    public function startTiktokOauth(
        array $params,
        ?array $options = null
    ): mixed {
        $paramDefs = [['name' => 'locationId', 'in' => 'query'], ['name' => 'userId', 'in' => 'query'], ['name' => 'page', 'in' => 'query'], ['name' => 'reconnect', 'in' => 'query']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["bearer"];

        $url = RequestUtils::buildUrl('/social-media-posting/oauth/tiktok/start', $extracted['path']);
        
        $headers = array_merge(
            $extracted['header'],
            $options['headers'] ?? []
        );

        $authToken = RequestUtils::getAuthToken(
            $this->client,
            $requirements,
            $headers,
            $extracted['query'],
            $requestBody ?? null,
            $options['preferredTokenType'] ?? null
        );

        if ($authToken) {
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
     * Get Tiktok profile
     * Get Tiktok profile
     * 
     * @param array{
     *   locationId: string // Account Location Id
     *   accountId: string // Account Id
     * } $params Request parameters
     * @param array<string, mixed>|null $options Additional request options
     * @return GetTiktokAccountResponseDTO Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function getTiktokProfile(
        array $params,
        ?array $options = null
    ): GetTiktokAccountResponseDTO {
        $paramDefs = [['name' => 'locationId', 'in' => 'path'], ['name' => 'accountId', 'in' => 'path']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["bearer"];

        $url = RequestUtils::buildUrl('/social-media-posting/oauth/{locationId}/tiktok/accounts/{accountId}', $extracted['path']);
        
        $headers = array_merge(
            $extracted['header'],
            $options['headers'] ?? []
        );

        $authToken = RequestUtils::getAuthToken(
            $this->client,
            $requirements,
            $headers,
            $extracted['query'],
            $requestBody ?? null,
            $options['preferredTokenType'] ?? null
        );

        if ($authToken) {
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
            
            return new GetTiktokAccountResponseDTO($responseData);
        } catch (RequestException $e) {
            $statusCode = $e->hasResponse() ? $e->getResponse()->getStatusCode() : null;
            $responseBody = $e->hasResponse() ? (string) $e->getResponse()->getBody() : null;
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
     * Attach Tiktok profile
     * Attach Tiktok profile
     * 
     * @param array{
     *   locationId: string // Account Location Id
     *   accountId: string // Account Id
     * } $params Request parameters
     * @param AttachTiktokAccountDTO $requestBody Request body data
     * @param array<string, mixed>|null $options Additional request options
     * @return SocialMediaTiktokAccountResponseDTO Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function attachTiktokProfile(
        array $params,
        AttachTiktokAccountDTO $requestBody,
        ?array $options = null
    ): SocialMediaTiktokAccountResponseDTO {
        if ($requestBody !== null && is_object($requestBody) && method_exists($requestBody, 'toArray')) {
            $requestBody = $requestBody->toArray();
        }
        $paramDefs = [['name' => 'locationId', 'in' => 'path'], ['name' => 'accountId', 'in' => 'path']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["bearer"];

        $url = RequestUtils::buildUrl('/social-media-posting/oauth/{locationId}/tiktok/accounts/{accountId}', $extracted['path']);
        
        $headers = array_merge(
            $extracted['header'],
            $options['headers'] ?? []
        );

        $authToken = RequestUtils::getAuthToken(
            $this->client,
            $requirements,
            $headers,
            $extracted['query'],
            $requestBody ?? null,
            $options['preferredTokenType'] ?? null
        );

        if ($authToken) {
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
            
            return new SocialMediaTiktokAccountResponseDTO($responseData);
        } catch (RequestException $e) {
            $statusCode = $e->hasResponse() ? $e->getResponse()->getStatusCode() : null;
            $responseBody = $e->hasResponse() ? (string) $e->getResponse()->getBody() : null;
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
     * Starts OAuth For Tiktok Business Account
     * Open the API in a window with appropriate params and headers instead of using the Curl. User is navigated to Tiktok-Business login OAuth screen. On successful login, listen on window object for message where event listener returns data in its callback function. 
  ### Sample code to listen to event data:
    window.addEventListener(&#x27;message&#x27;, 
      function(e) {
        if (e.data &amp;&amp; e.data.page &#x3D;&#x3D;&#x3D; &#x27;social_media_posting&#x27;) {
        const { actionType, page, platform, placement, accountId, reconnectAccounts } &#x3D; e.data
        }
      },
    false)
  ### Event Data Response:
    {
      actionType: string,            Ex: &quot;close&quot; 
      page: string,                  Ex: &quot;social-media-posting&quot; 
      platform: string,              Ex: &quot;tiktok-business&quot; 
      placement: string,             Ex: &quot;placement&quot; 
      accountId: string,             Ex: &quot;658a9b6833b91e0ecb8f3958&quot; 
      reconnectAccounts: string[]]   Ex: [&quot;658a9b6833b91e0ecb834acd&quot;, &quot;efd2daa9b6833b91e0ecb8f3511&quot;] 
    }
  ### The accountId retrieved from above data can be used to fetch Tiktok-Business account details using below API -
  API: &#x27;/social-media-posting/oauth/tiktok-business/accounts/:accountId&#x27; 

  Method: GET
     * 
     * @param array{
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
    public function startTiktokBusinessOauth(
        array $params,
        ?array $options = null
    ): mixed {
        $paramDefs = [['name' => 'locationId', 'in' => 'query'], ['name' => 'userId', 'in' => 'query'], ['name' => 'page', 'in' => 'query'], ['name' => 'reconnect', 'in' => 'query']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["bearer"];

        $url = RequestUtils::buildUrl('/social-media-posting/oauth/tiktok-business/start', $extracted['path']);
        
        $headers = array_merge(
            $extracted['header'],
            $options['headers'] ?? []
        );

        $authToken = RequestUtils::getAuthToken(
            $this->client,
            $requirements,
            $headers,
            $extracted['query'],
            $requestBody ?? null,
            $options['preferredTokenType'] ?? null
        );

        if ($authToken) {
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
     * Get Tiktok Business profile
     * Get Tiktok Business profile
     * 
     * @param array{
     *   locationId: string // Account Location Id
     *   accountId: string // Account Id
     * } $params Request parameters
     * @param array<string, mixed>|null $options Additional request options
     * @return GetTiktokBusinessAccountResponseDTO Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function getTiktokBusinessProfile(
        array $params,
        ?array $options = null
    ): GetTiktokBusinessAccountResponseDTO {
        $paramDefs = [['name' => 'locationId', 'in' => 'path'], ['name' => 'accountId', 'in' => 'path']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["bearer"];

        $url = RequestUtils::buildUrl('/social-media-posting/oauth/{locationId}/tiktok-business/accounts/{accountId}', $extracted['path']);
        
        $headers = array_merge(
            $extracted['header'],
            $options['headers'] ?? []
        );

        $authToken = RequestUtils::getAuthToken(
            $this->client,
            $requirements,
            $headers,
            $extracted['query'],
            $requestBody ?? null,
            $options['preferredTokenType'] ?? null
        );

        if ($authToken) {
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
            
            return new GetTiktokBusinessAccountResponseDTO($responseData);
        } catch (RequestException $e) {
            $statusCode = $e->hasResponse() ? $e->getResponse()->getStatusCode() : null;
            $responseBody = $e->hasResponse() ? (string) $e->getResponse()->getBody() : null;
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
     * 
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
     * 
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
     * 
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
     * 
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
        UpdateTagDTO $requestBody,
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
     * Retrieve analytics data for multiple social media accounts. Provides metrics for the last 7 days with comparison to the previous 7 days. Supports filtering by platforms and specific connected accounts.
     * 
     * @param array{
     *   locationId: string // Location ID
     * } $params Request parameters
     * @param array|null $requestBody Request body data
     * @param array<string, mixed>|null $options Additional request options
     * @return mixed Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function getSocialMediaStatistics(
        array $params,
        ?array $requestBody = null,
        ?array $options = null
    ): mixed {
        if ($requestBody !== null && is_object($requestBody) && method_exists($requestBody, 'toArray')) {
            $requestBody = $requestBody->toArray();
        }
        $paramDefs = [['name' => 'locationId', 'in' => 'query']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = [];

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

}

