<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Emails\Models;

/**
 * GetWorkflowCampaignPublicV2ResponseDto model
 * 
 * @package HighLevel\Services\Emails\Models
 */
class GetWorkflowCampaignPublicV2ResponseDto
{
    /**
     * @var string
     */
    public string $id;

    /**
     * @var string|null
     */
    public ?string $name = null;

    /**
     * @var string|null
     */
    public ?string $status = null;

    /**
     * @var string|null
     */
    public ?string $source = null;

    /**
     * @var string|null
     */
    public ?string $source_id = null;

    /**
     * @var array&lt;WorkflowCampaignSubSourcePublicV2Dto&gt;|null
     */
    public ?array $sub_sources = null;

    /**
     * @var bool|null
     */
    public ?bool $deleted = null;

    /**
     * @var string
     */
    public string $created_at;

    /**
     * @var string
     */
    public string $updated_at;

    /**
     * @var string|null
     */
    public ?string $trace_id = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->id = $data['id'] ?? '';
        $this->name = $data['name'] ?? null;
        $this->status = $data['status'] ?? null;
        $this->source = $data['source'] ?? null;
        $this->source_id = $data['sourceId'] ?? null;
        // Handle array of WorkflowCampaignSubSourcePublicV2Dto objects
        if (isset($data['subSources']) && is_array($data['subSources'])) {
            $this->sub_sources = array_map(function($item) {
                return is_array($item) ? new WorkflowCampaignSubSourcePublicV2Dto($item) : $item;
            }, $data['subSources']);
        } else {
            $this->sub_sources = $data['subSources'] ?? null;
        }
        $this->deleted = $data['deleted'] ?? null;
        $this->created_at = $data['createdAt'] ?? '';
        $this->updated_at = $data['updatedAt'] ?? '';
        $this->trace_id = $data['traceId'] ?? null;
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
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->status !== null) {
            $result['status'] = $this->status;
        }
        if ($this->source !== null) {
            $result['source'] = $this->source;
        }
        if ($this->source_id !== null) {
            $result['sourceId'] = $this->source_id;
        }
        if ($this->sub_sources !== null) {
            $result['subSources'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->sub_sources);
        }
        if ($this->deleted !== null) {
            $result['deleted'] = $this->deleted;
        }
        if ($this->created_at !== null) {
            $result['createdAt'] = $this->created_at;
        }
        if ($this->updated_at !== null) {
            $result['updatedAt'] = $this->updated_at;
        }
        if ($this->trace_id !== null) {
            $result['traceId'] = $this->trace_id;
        }
        return $result;
    }
}
