<?php

namespace HighLevel\Services\AdPublishing\Models;

/**
 * RuleItemGroupDTO model
 * 
 * @package HighLevel\Services\AdPublishing\Models
 */
class RuleItemGroupDTO
{
    /**
     * @var array&lt;RuleItemDTO&gt;
     */
    public array $rule_items;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        // Handle array of RuleItemDTO objects
        if (isset($data['ruleItems']) && is_array($data['ruleItems'])) {
            $this->rule_items = array_map(function($item) {
                return is_array($item) ? new RuleItemDTO($item) : $item;
            }, $data['ruleItems']);
        } else {
            $this->rule_items = $data['ruleItems'] ?? [];
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
        if ($this->rule_items !== null) {
            $result['ruleItems'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->rule_items);
        }
        return $result;
    }
}
