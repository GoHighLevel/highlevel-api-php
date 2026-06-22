<?php

namespace HighLevel\Services\Locations\Models;

/**
 * TaskSearchParamsDto model
 * 
 * @package HighLevel\Services\Locations\Models
 */
class TaskSearchParamsDto
{
    /**
     * @var array&lt;string&gt;|null
     */
    public ?array $contact_id = null;

    /**
     * @var bool|null
     */
    public ?bool $completed = null;

    /**
     * @var array&lt;string&gt;|null
     */
    public ?array $assigned_to = null;

    /**
     * @var string|null
     */
    public ?string $query = null;

    /**
     * @var float|null
     */
    public ?float $limit = null;

    /**
     * @var float|null
     */
    public ?float $skip = null;

    /**
     * @var string|null
     */
    public ?string $business_id = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->contact_id = $data['contactId'] ?? null;
        $this->completed = $data['completed'] ?? null;
        $this->assigned_to = $data['assignedTo'] ?? null;
        $this->query = $data['query'] ?? null;
        $this->limit = $data['limit'] ?? null;
        $this->skip = $data['skip'] ?? null;
        $this->business_id = $data['businessId'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->contact_id !== null) {
            $result['contactId'] = $this->contact_id;
        }
        if ($this->completed !== null) {
            $result['completed'] = $this->completed;
        }
        if ($this->assigned_to !== null) {
            $result['assignedTo'] = $this->assigned_to;
        }
        if ($this->query !== null) {
            $result['query'] = $this->query;
        }
        if ($this->limit !== null) {
            $result['limit'] = $this->limit;
        }
        if ($this->skip !== null) {
            $result['skip'] = $this->skip;
        }
        if ($this->business_id !== null) {
            $result['businessId'] = $this->business_id;
        }
        return $result;
    }
}
