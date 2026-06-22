<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\AdPublishing\Models;

/**
 * RuleDTO model
 * 
 * @package HighLevel\Services\AdPublishing\Models
 */
class RuleDTO
{
    /**
     * @var array&lt;RuleItemGroupDTO&gt;
     */
    public array $rule_item_groups;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        // Handle array of RuleItemGroupDTO objects
        if (isset($data['ruleItemGroups']) && is_array($data['ruleItemGroups'])) {
            $this->rule_item_groups = array_map(function($item) {
                return is_array($item) ? new RuleItemGroupDTO($item) : $item;
            }, $data['ruleItemGroups']);
        } else {
            $this->rule_item_groups = $data['ruleItemGroups'] ?? [];
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
        if ($this->rule_item_groups !== null) {
            $result['ruleItemGroups'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->rule_item_groups);
        }
        return $result;
    }
}
