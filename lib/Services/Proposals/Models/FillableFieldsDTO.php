<?php

namespace HighLevel\Services\Proposals\Models;

/**
 * FillableFieldsDTO model
 * 
 * @package HighLevel\Services\Proposals\Models
 */
class FillableFieldsDTO
{
    /**
     * @var string
     */
    public string $field_id;

    /**
     * @var bool
     */
    public bool $is_required;

    /**
     * @var bool
     */
    public bool $has_completed;

    /**
     * @var string
     */
    public string $recipient;

    /**
     * @var EntityReference
     */
    public EntityReference $entity_type;

    /**
     * @var string
     */
    public string $id;

    /**
     * @var ELEMENTS_LOOKUP
     */
    public ELEMENTS_LOOKUP $type;

    /**
     * @var string
     */
    public string $value;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->field_id = $data['fieldId'] ?? '';
        $this->is_required = $data['isRequired'] ?? false;
        $this->has_completed = $data['hasCompleted'] ?? false;
        $this->recipient = $data['recipient'] ?? '';
        // Handle single EntityReference object
        if (isset($data['entityType']) && is_array($data['entityType'])) {
            $this->entity_type = new EntityReference($data['entityType']);
        } else {
            $this->entity_type = $data['entityType'] ?? null;
        }
        $this->id = $data['id'] ?? '';
        // Handle single ELEMENTSLOOKUP object
        if (isset($data['type']) && is_array($data['type'])) {
            $this->type = new ELEMENTSLOOKUP($data['type']);
        } else {
            $this->type = $data['type'] ?? null;
        }
        $this->value = $data['value'] ?? '';
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->field_id !== null) {
            $result['fieldId'] = $this->field_id;
        }
        if ($this->is_required !== null) {
            $result['isRequired'] = $this->is_required;
        }
        if ($this->has_completed !== null) {
            $result['hasCompleted'] = $this->has_completed;
        }
        if ($this->recipient !== null) {
            $result['recipient'] = $this->recipient;
        }
        if ($this->entity_type !== null) {
            $result['entityType'] = is_object($this->entity_type) && method_exists($this->entity_type, 'toArray') 
                ? $this->entity_type->toArray() 
                : $this->entity_type;
        }
        if ($this->id !== null) {
            $result['id'] = $this->id;
        }
        if ($this->type !== null) {
            $result['type'] = is_object($this->type) && method_exists($this->type, 'toArray') 
                ? $this->type->toArray() 
                : $this->type;
        }
        if ($this->value !== null) {
            $result['value'] = $this->value;
        }
        return $result;
    }
}
