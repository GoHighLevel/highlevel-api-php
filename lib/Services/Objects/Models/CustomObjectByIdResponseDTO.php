<?php

namespace HighLevel\Services\Objects\Models;

/**
 * CustomObjectByIdResponseDTO model
 * 
 * @package HighLevel\Services\Objects\Models
 */
class CustomObjectByIdResponseDTO
{
    /**
     * @var ICustomObjectSchema|null
     */
    public ?ICustomObjectSchema $object = null;

    /**
     * @var bool
     */
    public bool $cache;

    /**
     * @var array&lt;ICustomField&gt;|null
     */
    public ?array $fields = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        // Handle single ICustomObjectSchema object
        if (isset($data['object']) && is_array($data['object'])) {
            $this->object = new ICustomObjectSchema($data['object']);
        } else {
            $this->object = $data['object'] ?? null;
        }
        $this->cache = $data['cache'] ?? false;
        // Handle array of ICustomField objects
        if (isset($data['fields']) && is_array($data['fields'])) {
            $this->fields = array_map(function($item) {
                return is_array($item) ? new ICustomField($item) : $item;
            }, $data['fields']);
        } else {
            $this->fields = $data['fields'] ?? null;
        }
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->object !== null) {
            $result['object'] = is_object($this->object) && method_exists($this->object, 'toArray') 
                ? $this->object->toArray() 
                : $this->object;
        }
        if ($this->cache !== null) {
            $result['cache'] = $this->cache;
        }
        if ($this->fields !== null) {
            $result['fields'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->fields);
        }
        return $result;
    }
}
