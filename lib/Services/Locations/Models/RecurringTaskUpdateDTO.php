<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Locations\Models;

/**
 * RecurringTaskUpdateDTO model
 * 
 * @package HighLevel\Services\Locations\Models
 */
class RecurringTaskUpdateDTO
{
    /**
     * @var string|null
     */
    public ?string $title = null;

    /**
     * @var string|null
     */
    public ?string $description = null;

    /**
     * @var array&lt;string&gt;|null
     */
    public ?array $contact_ids = null;

    /**
     * @var array&lt;string&gt;|null
     */
    public ?array $owners = null;

    /**
     * @var mixed
     */
    public $rrule_options;

    /**
     * @var bool|null
     */
    public ?bool $ignore_task_creation = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->title = $data['title'] ?? null;
        $this->description = $data['description'] ?? null;
        $this->contact_ids = $data['contactIds'] ?? null;
        $this->owners = $data['owners'] ?? null;
        $this->rrule_options = $data['rruleOptions'] ?? null;
        $this->ignore_task_creation = $data['ignoreTaskCreation'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->title !== null) {
            $result['title'] = $this->title;
        }
        if ($this->description !== null) {
            $result['description'] = $this->description;
        }
        if ($this->contact_ids !== null) {
            $result['contactIds'] = $this->contact_ids;
        }
        if ($this->owners !== null) {
            $result['owners'] = $this->owners;
        }
        if ($this->rrule_options !== null) {
            $result['rruleOptions'] = $this->rrule_options;
        }
        if ($this->ignore_task_creation !== null) {
            $result['ignoreTaskCreation'] = $this->ignore_task_creation;
        }
        return $result;
    }
}
