<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Funnels\Models;

/**
 * RedirectResponseDTO model
 * 
 * @package HighLevel\Services\Funnels\Models
 */
class RedirectResponseDTO
{
    /**
     * @var string
     */
    public string $id;

    /**
     * @var string
     */
    public string $location_id;

    /**
     * @var string
     */
    public string $domain;

    /**
     * @var string
     */
    public string $path;

    /**
     * @var string
     */
    public string $path_lowercase;

    /**
     * @var string
     */
    public string $type;

    /**
     * @var string
     */
    public string $target;

    /**
     * @var string
     */
    public string $action;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->id = $data['id'] ?? '';
        $this->location_id = $data['locationId'] ?? '';
        $this->domain = $data['domain'] ?? '';
        $this->path = $data['path'] ?? '';
        $this->path_lowercase = $data['pathLowercase'] ?? '';
        $this->type = $data['type'] ?? '';
        $this->target = $data['target'] ?? '';
        $this->action = $data['action'] ?? '';
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->id !== null) {
            $result['id'] = $this->id;
        }
        if ($this->location_id !== null) {
            $result['locationId'] = $this->location_id;
        }
        if ($this->domain !== null) {
            $result['domain'] = $this->domain;
        }
        if ($this->path !== null) {
            $result['path'] = $this->path;
        }
        if ($this->path_lowercase !== null) {
            $result['pathLowercase'] = $this->path_lowercase;
        }
        if ($this->type !== null) {
            $result['type'] = $this->type;
        }
        if ($this->target !== null) {
            $result['target'] = $this->target;
        }
        if ($this->action !== null) {
            $result['action'] = $this->action;
        }
        return $result;
    }
}
