<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Locations\Models;

/**
 * GetSmsTemplateResponseSchema model
 * 
 * @package HighLevel\Services\Locations\Models
 */
class GetSmsTemplateResponseSchema
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
     * @var SmsTemplateSchema|null
     */
    public ?SmsTemplateSchema $template = null;

    /**
     * @var string|null
     */
    public ?string $date_added = null;

    /**
     * @var string|null
     */
    public ?string $location_id = null;

    /**
     * @var array&lt;string&gt;|null
     */
    public ?array $url_attachments = null;

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
        // Handle single SmsTemplateSchema object
        if (isset($data['template']) && is_array($data['template'])) {
            $this->template = new SmsTemplateSchema($data['template']);
        } else {
            $this->template = $data['template'] ?? null;
        }
        $this->date_added = $data['dateAdded'] ?? null;
        $this->location_id = $data['locationId'] ?? null;
        $this->url_attachments = $data['urlAttachments'] ?? null;
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
        if ($this->template !== null) {
            $result['template'] = is_object($this->template) && method_exists($this->template, 'toArray') 
                ? $this->template->toArray() 
                : $this->template;
        }
        if ($this->date_added !== null) {
            $result['dateAdded'] = $this->date_added;
        }
        if ($this->location_id !== null) {
            $result['locationId'] = $this->location_id;
        }
        if ($this->url_attachments !== null) {
            $result['urlAttachments'] = $this->url_attachments;
        }
        return $result;
    }
}
