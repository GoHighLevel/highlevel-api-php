<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel;

use Exception;

/**
 * Custom exception class for GHL API errors
 * 
 * @package HighLevel
 */
class GHLError extends Exception
{
    /**
     * HTTP status code
     * @var int|null
     */
    private ?int $statusCode;

    /**
     * Response data from the API
     * @var mixed
     */
    private $response;

    /**
     * Request data that caused the error
     * @var mixed
     */
    private $request;

    /**
     * Create a new GHLError instance
     * 
     * @param string $message Error message
     * @param int|null $statusCode HTTP status code
     * @param mixed $response Response data
     * @param mixed $request Request data
     */
    public function __construct(
        string $message,
        ?int $statusCode = null,
        $response = null,
        $request = null
    ) {
        parent::__construct($message);
        $this->statusCode = $statusCode;
        $this->response = $response;
        $this->request = $request;
    }

    /**
     * Get HTTP status code
     * 
     * @return int|null
     */
    public function getStatusCode(): ?int
    {
        return $this->statusCode;
    }

    /**
     * Get response data
     * 
     * @return mixed
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * Get request data
     * 
     * @return mixed
     */
    public function getRequest()
    {
        return $this->request;
    }
}

