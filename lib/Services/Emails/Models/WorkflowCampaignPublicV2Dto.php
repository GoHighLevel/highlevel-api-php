<?php

namespace HighLevel\Services\Emails\Models;

/**
 * WorkflowCampaignPublicV2Dto model
 * 
 * @package HighLevel\Services\Emails\Models
 */
class WorkflowCampaignPublicV2Dto
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
        $this->deleted = $data['deleted'] ?? null;
        $this->created_at = $data['createdAt'] ?? '';
        $this->updated_at = $data['updatedAt'] ?? '';
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
        if ($this->deleted !== null) {
            $result['deleted'] = $this->deleted;
        }
        if ($this->created_at !== null) {
            $result['createdAt'] = $this->created_at;
        }
        if ($this->updated_at !== null) {
            $result['updatedAt'] = $this->updated_at;
        }
        return $result;
    }
}
