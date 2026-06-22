<?php

namespace HighLevel\Services\Contacts\Models;

/**
 * InboundDndSettingsSchema model
 * 
 * @package HighLevel\Services\Contacts\Models
 */
class InboundDndSettingsSchema
{
    /**
     * @var mixed
     */
    public $all;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->all = $data['all'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->all !== null) {
            $result['all'] = $this->all;
        }
        return $result;
    }
}
