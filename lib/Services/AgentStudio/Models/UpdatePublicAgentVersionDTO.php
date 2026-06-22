<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\AgentStudio\Models;

/**
 * UpdatePublicAgentVersionDTO model
 * 
 * @package HighLevel\Services\AgentStudio\Models
 */
class UpdatePublicAgentVersionDTO
{
    /**
     * @var string
     */
    public string $location_id;

    /**
     * @var string|null
     */
    public ?string $version_name = null;

    /**
     * @var string|null
     */
    public ?string $description = null;

    /**
     * @var array&lt;array&lt;string, mixed&gt;&gt;|null
     */
    public ?array $nodes = null;

    /**
     * @var array&lt;array&lt;string, mixed&gt;&gt;|null
     */
    public ?array $edges = null;

    /**
     * @var array&lt;array&lt;string, mixed&gt;&gt;|null
     */
    public ?array $global_variables = null;

    /**
     * @var array&lt;array&lt;string, mixed&gt;&gt;|null
     */
    public ?array $input_variables = null;

    /**
     * @var array&lt;array&lt;string, mixed&gt;&gt;|null
     */
    public ?array $runtime_variables = null;

    /**
     * @var array&lt;string, mixed&gt;|null
     */
    public ?array $global_config = null;

    /**
     * @var string|null
     */
    public ?string $user_id = null;

    /**
     * @var string|null
     */
    public ?string $user_name = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->location_id = $data['locationId'] ?? '';
        $this->version_name = $data['versionName'] ?? null;
        $this->description = $data['description'] ?? null;
        $this->nodes = $data['nodes'] ?? null;
        $this->edges = $data['edges'] ?? null;
        $this->global_variables = $data['globalVariables'] ?? null;
        $this->input_variables = $data['inputVariables'] ?? null;
        $this->runtime_variables = $data['runtimeVariables'] ?? null;
        $this->global_config = $data['globalConfig'] ?? null;
        $this->user_id = $data['userId'] ?? null;
        $this->user_name = $data['userName'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->location_id !== null) {
            $result['locationId'] = $this->location_id;
        }
        if ($this->version_name !== null) {
            $result['versionName'] = $this->version_name;
        }
        if ($this->description !== null) {
            $result['description'] = $this->description;
        }
        if ($this->nodes !== null) {
            $result['nodes'] = $this->nodes;
        }
        if ($this->edges !== null) {
            $result['edges'] = $this->edges;
        }
        if ($this->global_variables !== null) {
            $result['globalVariables'] = $this->global_variables;
        }
        if ($this->input_variables !== null) {
            $result['inputVariables'] = $this->input_variables;
        }
        if ($this->runtime_variables !== null) {
            $result['runtimeVariables'] = $this->runtime_variables;
        }
        if ($this->global_config !== null) {
            $result['globalConfig'] = $this->global_config;
        }
        if ($this->user_id !== null) {
            $result['userId'] = $this->user_id;
        }
        if ($this->user_name !== null) {
            $result['userName'] = $this->user_name;
        }
        return $result;
    }
}
