<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\AdPublishing\Models;

/**
 * RuleItemDTO model
 * 
 * @package HighLevel\Services\AdPublishing\Models
 */
class RuleItemDTO
{
    /**
     * @var string
     */
    public string $name;

    /**
     * @var mixed
     */
    public $string_rule_item;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->name = $data['name'] ?? '';
        $this->string_rule_item = $data['stringRuleItem'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->string_rule_item !== null) {
            $result['stringRuleItem'] = $this->string_rule_item;
        }
        return $result;
    }
}
