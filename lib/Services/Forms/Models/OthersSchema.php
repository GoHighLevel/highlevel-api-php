<?php

namespace HighLevel\Services\Forms\Models;

/**
 * othersSchema model
 * 
 * @package HighLevel\Services\Forms\Models
 */
class OthersSchema
{
    /**
     * @var string|null
     */
    public ?string $_submissions_other_field_ = null;

    /**
     * @var string|null
     */
    public ?string $_custom_field_id_ = null;

    /**
     * @var EventDataSchema|null
     */
    public ?EventDataSchema $event_data = null;

    /**
     * @var array&lt;string&gt;|null
     */
    public ?array $fields_ori_sequance = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->_submissions_other_field_ = $data['__submissions_other_field__'] ?? null;
        $this->_custom_field_id_ = $data['__custom_field_id__'] ?? null;
        // Handle single EventDataSchema object
        if (isset($data['eventData']) && is_array($data['eventData'])) {
            $this->event_data = new EventDataSchema($data['eventData']);
        } else {
            $this->event_data = $data['eventData'] ?? null;
        }
        $this->fields_ori_sequance = $data['fieldsOriSequance'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->_submissions_other_field_ !== null) {
            $result['__submissions_other_field__'] = $this->_submissions_other_field_;
        }
        if ($this->_custom_field_id_ !== null) {
            $result['__custom_field_id__'] = $this->_custom_field_id_;
        }
        if ($this->event_data !== null) {
            $result['eventData'] = is_object($this->event_data) && method_exists($this->event_data, 'toArray') 
                ? $this->event_data->toArray() 
                : $this->event_data;
        }
        if ($this->fields_ori_sequance !== null) {
            $result['fieldsOriSequance'] = $this->fields_ori_sequance;
        }
        return $result;
    }
}
