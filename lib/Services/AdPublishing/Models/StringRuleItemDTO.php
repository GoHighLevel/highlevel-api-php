<?php

namespace HighLevel\Services\AdPublishing\Models;

/**
 * StringRuleItemDTO model
 * 
 * @package HighLevel\Services\AdPublishing\Models
 */
class StringRuleItemDTO
{
    /**
     * @var string
     */
    public string $operator;

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
        $this->operator = $data['operator'] ?? '';
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
        if ($this->operator !== null) {
            $result['operator'] = $this->operator;
        }
        if ($this->value !== null) {
            $result['value'] = $this->value;
        }
        return $result;
    }
}
