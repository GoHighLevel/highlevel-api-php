<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Blogs;

use HighLevel\HighLevel;
use HighLevel\GHLError;
use HighLevel\Utils\RequestUtils;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Exception\RequestException;
use HighLevel\Services\Blogs\Models\UrlSlugCheckResponseDTO;
use HighLevel\Services\Blogs\Models\UpdateBlogPostParams;
use HighLevel\Services\Blogs\Models\BlogPostUpdateResponseWrapperDTO;
use HighLevel\Services\Blogs\Models\CreateBlogPostParams;
use HighLevel\Services\Blogs\Models\BlogPostCreateResponseWrapperDTO;
use HighLevel\Services\Blogs\Models\AuthorsResponseDTO;
use HighLevel\Services\Blogs\Models\CategoriesResponseDTO;
use HighLevel\Services\Blogs\Models\BlogPostGetResponseWrapperDTO;
use HighLevel\Services\Blogs\Models\BlogGetResponseWrapperDTO;

/**
 * Blogs Service
 * Documentation for Blog public API
 * 
 * @package HighLevel\Services\Blogs
 */
class Blogs
{
    /**
     * HighLevel client instance
     * @var HighLevel
     */
    private HighLevel $client;

    /**
     * Create a new Blogs service instance
     * 
     * @param HighLevel $client HighLevel client instance
     */
    public function __construct(HighLevel $client)
    {
        $this->client = $client;
    }

    /**
     * Check url slug
     * The &quot;Check url slug&quot; API allows check the blog slug validation which is needed before publishing any blog post. Please use blogs/check-slug.readonly. you can find the POST ID from the post edit url.
     * 
     * @param array{
     *   urlSlug: string
     *   locationId: string
     *   postId?: string
     * } $params Request parameters
     * @param array<string, mixed>|null $options Additional request options
     * @return UrlSlugCheckResponseDTO Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function checkUrlSlugExists(
        array $params,
        ?array $options = null
    ): UrlSlugCheckResponseDTO {
        $paramDefs = [['name' => 'urlSlug', 'in' => 'query'], ['name' => 'locationId', 'in' => 'query'], ['name' => 'postId', 'in' => 'query']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["Location-Access"];

        $url = RequestUtils::buildUrl('/blogs/posts/url-slug-exists', $extracted['path']);
        
        $headers = array_merge(
            $extracted['header'],
            $options['headers'] ?? []
        );

        $authToken = RequestUtils::getAuthToken(
            $this->client,
            $requirements,
            $headers,
            $extracted['query'],
            $requestBody ?? null,
            $options['preferredTokenType'] ?? null
        );

        if ($authToken) {
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
            
            return new UrlSlugCheckResponseDTO($responseData);
        } catch (RequestException $e) {
            $statusCode = $e->hasResponse() ? $e->getResponse()->getStatusCode() : null;
            $responseBody = $e->hasResponse() ? (string) $e->getResponse()->getBody() : null;
            $responseData = $responseBody ? json_decode($responseBody, true) : null;

            throw new GHLError(
                $e->getMessage(),
                $statusCode,
                $responseData,
                $requestOptions
            );
        }
    }

    /**
     * Update Blog Post
     * The &quot;Update Blog Post&quot; API allows you update blog post for any given blog site. Please use blogs/post-update.write
     * 
     * @param UpdateBlogPostParams $requestBody Request body data
     * @param array<string, mixed>|null $options Additional request options
     * @return BlogPostUpdateResponseWrapperDTO Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function updateBlogPost(
        $requestBody,
        ?array $options = null
    ): BlogPostUpdateResponseWrapperDTO {
        if ($requestBody !== null && is_object($requestBody) && method_exists($requestBody, 'toArray')) {
            $requestBody = $requestBody->toArray();
        }
        $paramDefs = [];
        $extracted = RequestUtils::extractParams([], $paramDefs);
        $requirements = ["Location-Access"];

        $url = RequestUtils::buildUrl('/blogs/posts/{postId}', $extracted['path']);
        
        $headers = array_merge(
            $extracted['header'],
            $options['headers'] ?? []
        );

        $authToken = RequestUtils::getAuthToken(
            $this->client,
            $requirements,
            $headers,
            $extracted['query'],
            $requestBody ?? null,
            $options['preferredTokenType'] ?? null
        );

        if ($authToken) {
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
            
            return new BlogPostUpdateResponseWrapperDTO($responseData);
        } catch (RequestException $e) {
            $statusCode = $e->hasResponse() ? $e->getResponse()->getStatusCode() : null;
            $responseBody = $e->hasResponse() ? (string) $e->getResponse()->getBody() : null;
            $responseData = $responseBody ? json_decode($responseBody, true) : null;

            throw new GHLError(
                $e->getMessage(),
                $statusCode,
                $responseData,
                $requestOptions
            );
        }
    }

    /**
     * Create Blog Post
     * The &quot;Create Blog Post&quot; API allows you create blog post for any given blog site. Please use blogs/post.write
     * 
     * @param CreateBlogPostParams $requestBody Request body data
     * @param array<string, mixed>|null $options Additional request options
     * @return BlogPostCreateResponseWrapperDTO Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function createBlogPost(
        $requestBody,
        ?array $options = null
    ): BlogPostCreateResponseWrapperDTO {
        if ($requestBody !== null && is_object($requestBody) && method_exists($requestBody, 'toArray')) {
            $requestBody = $requestBody->toArray();
        }
        $paramDefs = [];
        $extracted = RequestUtils::extractParams([], $paramDefs);
        $requirements = ["Location-Access"];

        $url = RequestUtils::buildUrl('/blogs/posts', $extracted['path']);
        
        $headers = array_merge(
            $extracted['header'],
            $options['headers'] ?? []
        );

        $authToken = RequestUtils::getAuthToken(
            $this->client,
            $requirements,
            $headers,
            $extracted['query'],
            $requestBody ?? null,
            $options['preferredTokenType'] ?? null
        );

        if ($authToken) {
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
            
            return new BlogPostCreateResponseWrapperDTO($responseData);
        } catch (RequestException $e) {
            $statusCode = $e->hasResponse() ? $e->getResponse()->getStatusCode() : null;
            $responseBody = $e->hasResponse() ? (string) $e->getResponse()->getBody() : null;
            $responseData = $responseBody ? json_decode($responseBody, true) : null;

            throw new GHLError(
                $e->getMessage(),
                $statusCode,
                $responseData,
                $requestOptions
            );
        }
    }

    /**
     * Get all authors
     * The &quot;Get all authors&quot; Api return the blog authors for a given location ID. Please use &quot;blogs/author.readonly&quot; 
     * 
     * @param array{
     *   locationId: string // Location Id
     *   limit: int // Number of authors to show in the listing
     *   offset: int // Number of authors to skip in listing
     * } $params Request parameters
     * @param array<string, mixed>|null $options Additional request options
     * @return AuthorsResponseDTO Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function getAllBlogAuthorsByLocation(
        array $params,
        ?array $options = null
    ): AuthorsResponseDTO {
        $paramDefs = [['name' => 'locationId', 'in' => 'query'], ['name' => 'limit', 'in' => 'query'], ['name' => 'offset', 'in' => 'query']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["Location-Access"];

        $url = RequestUtils::buildUrl('/blogs/authors', $extracted['path']);
        
        $headers = array_merge(
            $extracted['header'],
            $options['headers'] ?? []
        );

        $authToken = RequestUtils::getAuthToken(
            $this->client,
            $requirements,
            $headers,
            $extracted['query'],
            $requestBody ?? null,
            $options['preferredTokenType'] ?? null
        );

        if ($authToken) {
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
            
            return new AuthorsResponseDTO($responseData);
        } catch (RequestException $e) {
            $statusCode = $e->hasResponse() ? $e->getResponse()->getStatusCode() : null;
            $responseBody = $e->hasResponse() ? (string) $e->getResponse()->getBody() : null;
            $responseData = $responseBody ? json_decode($responseBody, true) : null;

            throw new GHLError(
                $e->getMessage(),
                $statusCode,
                $responseData,
                $requestOptions
            );
        }
    }

    /**
     * Get all categories
     * The &quot;Get all categories&quot; Api return the blog categoies for a given location ID. Please use &quot;blogs/category.readonly&quot; 
     * 
     * @param array{
     *   locationId: string
     *   limit: int // Number of categories to show in the listing
     *   offset: int // Number of categories to skip in listing
     * } $params Request parameters
     * @param array<string, mixed>|null $options Additional request options
     * @return CategoriesResponseDTO Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function getAllCategoriesByLocation(
        array $params,
        ?array $options = null
    ): CategoriesResponseDTO {
        $paramDefs = [['name' => 'locationId', 'in' => 'query'], ['name' => 'limit', 'in' => 'query'], ['name' => 'offset', 'in' => 'query']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["Location-Access"];

        $url = RequestUtils::buildUrl('/blogs/categories', $extracted['path']);
        
        $headers = array_merge(
            $extracted['header'],
            $options['headers'] ?? []
        );

        $authToken = RequestUtils::getAuthToken(
            $this->client,
            $requirements,
            $headers,
            $extracted['query'],
            $requestBody ?? null,
            $options['preferredTokenType'] ?? null
        );

        if ($authToken) {
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
            
            return new CategoriesResponseDTO($responseData);
        } catch (RequestException $e) {
            $statusCode = $e->hasResponse() ? $e->getResponse()->getStatusCode() : null;
            $responseBody = $e->hasResponse() ? (string) $e->getResponse()->getBody() : null;
            $responseData = $responseBody ? json_decode($responseBody, true) : null;

            throw new GHLError(
                $e->getMessage(),
                $statusCode,
                $responseData,
                $requestOptions
            );
        }
    }

    /**
     * Get Blog posts by Blog ID
     * The &quot;Get Blog posts by Blog ID&quot; API allows you get blog posts for any given blog site using blog ID.Please use blogs/posts.readonly
     * 
     * @param array{
     *   locationId: string
     *   blogId: string
     *   limit: int
     *   offset: int
     *   searchTerm?: string // search for any post by name
     *   status?: string
     * } $params Request parameters
     * @param array<string, mixed>|null $options Additional request options
     * @return BlogPostGetResponseWrapperDTO Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function getBlogPost(
        array $params,
        ?array $options = null
    ): BlogPostGetResponseWrapperDTO {
        $paramDefs = [['name' => 'locationId', 'in' => 'query'], ['name' => 'blogId', 'in' => 'query'], ['name' => 'limit', 'in' => 'query'], ['name' => 'offset', 'in' => 'query'], ['name' => 'searchTerm', 'in' => 'query'], ['name' => 'status', 'in' => 'query']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["Location-Access"];

        $url = RequestUtils::buildUrl('/blogs/posts/all', $extracted['path']);
        
        $headers = array_merge(
            $extracted['header'],
            $options['headers'] ?? []
        );

        $authToken = RequestUtils::getAuthToken(
            $this->client,
            $requirements,
            $headers,
            $extracted['query'],
            $requestBody ?? null,
            $options['preferredTokenType'] ?? null
        );

        if ($authToken) {
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
            
            return new BlogPostGetResponseWrapperDTO($responseData);
        } catch (RequestException $e) {
            $statusCode = $e->hasResponse() ? $e->getResponse()->getStatusCode() : null;
            $responseBody = $e->hasResponse() ? (string) $e->getResponse()->getBody() : null;
            $responseData = $responseBody ? json_decode($responseBody, true) : null;

            throw new GHLError(
                $e->getMessage(),
                $statusCode,
                $responseData,
                $requestOptions
            );
        }
    }

    /**
     * Get Blogs by Location ID
     * The &quot;Get Blogs by Location ID&quot; API allows you get blogs using Location ID.Please use blogs/list.readonly
     * 
     * @param array{
     *   locationId: string
     *   skip: int
     *   limit: int
     *   searchTerm?: string // search for any post by name
     * } $params Request parameters
     * @param array<string, mixed>|null $options Additional request options
     * @return BlogGetResponseWrapperDTO Response data
     * @throws GHLError
     * @throws GuzzleException
     */
    public function getBlogs(
        array $params,
        ?array $options = null
    ): BlogGetResponseWrapperDTO {
        $paramDefs = [['name' => 'locationId', 'in' => 'query'], ['name' => 'skip', 'in' => 'query'], ['name' => 'limit', 'in' => 'query'], ['name' => 'searchTerm', 'in' => 'query']];
        $extracted = RequestUtils::extractParams($params, $paramDefs);
        $requirements = ["Location-Access"];

        $url = RequestUtils::buildUrl('/blogs/site/all', $extracted['path']);
        
        $headers = array_merge(
            $extracted['header'],
            $options['headers'] ?? []
        );

        $authToken = RequestUtils::getAuthToken(
            $this->client,
            $requirements,
            $headers,
            $extracted['query'],
            $requestBody ?? null,
            $options['preferredTokenType'] ?? null
        );

        if ($authToken) {
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
            
            return new BlogGetResponseWrapperDTO($responseData);
        } catch (RequestException $e) {
            $statusCode = $e->hasResponse() ? $e->getResponse()->getStatusCode() : null;
            $responseBody = $e->hasResponse() ? (string) $e->getResponse()->getBody() : null;
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

