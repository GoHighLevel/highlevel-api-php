<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Emails\Models;

/**
 * BulkActionCampaignDto model
 * 
 * @package HighLevel\Services\Emails\Models
 */
class BulkActionCampaignDto
{
    /**
     * @var string
     */
    public string $id;

    /**
     * @var string
     */
    public string $name;

    /**
     * @var string
     */
    public string $status;

    /**
     * @var string
     */
    public string $schedule_type;

    /**
     * @var string
     */
    public string $created_by;

    /**
     * @var bool
     */
    public bool $deleted;

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
    public ?string $completed_at = null;

    /**
     * @var mixed
     */
    public $email_metadata;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->id = $data['id'] ?? '';
        $this->name = $data['name'] ?? '';
        $this->status = $data['status'] ?? '';
        $this->schedule_type = $data['scheduleType'] ?? '';
        $this->created_by = $data['createdBy'] ?? '';
        $this->deleted = $data['deleted'] ?? false;
        $this->created_at = $data['createdAt'] ?? '';
        $this->updated_at = $data['updatedAt'] ?? '';
        $this->completed_at = $data['completedAt'] ?? null;
        $this->email_metadata = $data['emailMetadata'] ?? null;
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
        if ($this->schedule_type !== null) {
            $result['scheduleType'] = $this->schedule_type;
        }
        if ($this->created_by !== null) {
            $result['createdBy'] = $this->created_by;
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
        if ($this->completed_at !== null) {
            $result['completedAt'] = $this->completed_at;
        }
        if ($this->email_metadata !== null) {
            $result['emailMetadata'] = $this->email_metadata;
        }
        return $result;
    }
}
