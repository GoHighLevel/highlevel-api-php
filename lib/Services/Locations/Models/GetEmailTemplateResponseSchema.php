<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Locations\Models;

/**
 * GetEmailTemplateResponseSchema model
 * 
 * @package HighLevel\Services\Locations\Models
 */
class GetEmailTemplateResponseSchema
{
    /**
     * @var string|null
     */
    public ?string $id = null;

    /**
     * @var string|null
     */
    public ?string $name = null;

    /**
     * @var string|null
     */
    public ?string $type = null;

    /**
     * @var string|null
     */
    public ?string $date_added = null;

    /**
     * @var EmailTemplateSchema|null
     */
    public ?EmailTemplateSchema $template = null;

    /**
     * @var string|null
     */
    public ?string $location_id = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->id = $data['id'] ?? null;
        $this->name = $data['name'] ?? null;
        $this->type = $data['type'] ?? null;
        $this->date_added = $data['dateAdded'] ?? null;
        // Handle single EmailTemplateSchema object
        if (isset($data['template']) && is_array($data['template'])) {
            $this->template = new EmailTemplateSchema($data['template']);
        } else {
            $this->template = $data['template'] ?? null;
        }
        $this->location_id = $data['locationId'] ?? null;
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
        if ($this->type !== null) {
            $result['type'] = $this->type;
        }
        if ($this->date_added !== null) {
            $result['dateAdded'] = $this->date_added;
        }
        if ($this->template !== null) {
            $result['template'] = is_object($this->template) && method_exists($this->template, 'toArray') 
                ? $this->template->toArray() 
                : $this->template;
        }
        if ($this->location_id !== null) {
            $result['locationId'] = $this->location_id;
        }
        return $result;
    }
}
