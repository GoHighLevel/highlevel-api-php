<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Emails\Models;

/**
 * CreateBuilderSuccesfulResponseDto model
 * 
 * @package HighLevel\Services\Emails\Models
 */
class CreateBuilderSuccesfulResponseDto
{
    /**
     * @var string
     */
    public string $redirect;

    /**
     * @var string
     */
    public string $trace_id;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->redirect = $data['redirect'] ?? '';
        $this->trace_id = $data['traceId'] ?? '';
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->redirect !== null) {
            $result['redirect'] = $this->redirect;
        }
        if ($this->trace_id !== null) {
            $result['traceId'] = $this->trace_id;
        }
        return $result;
    }
}
