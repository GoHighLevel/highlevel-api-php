<?php

namespace HighLevel\Services\AdPublishing\Models;

/**
 * FlexibleRuleUserListDTO model
 * 
 * @package HighLevel\Services\AdPublishing\Models
 */
class FlexibleRuleUserListDTO
{
    /**
     * @var string|null
     */
    public ?string $inclusive_rule_operator = null;

    /**
     * @var array&lt;RuleOperandDTO&gt;
     */
    public array $inclusive_operands;

    /**
     * @var array&lt;RuleOperandDTO&gt;
     */
    public array $exclusive_operands;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->inclusive_rule_operator = $data['inclusiveRuleOperator'] ?? null;
        // Handle array of RuleOperandDTO objects
        if (isset($data['inclusiveOperands']) && is_array($data['inclusiveOperands'])) {
            $this->inclusive_operands = array_map(function($item) {
                return is_array($item) ? new RuleOperandDTO($item) : $item;
            }, $data['inclusiveOperands']);
        } else {
            $this->inclusive_operands = $data['inclusiveOperands'] ?? [];
        }
        // Handle array of RuleOperandDTO objects
        if (isset($data['exclusiveOperands']) && is_array($data['exclusiveOperands'])) {
            $this->exclusive_operands = array_map(function($item) {
                return is_array($item) ? new RuleOperandDTO($item) : $item;
            }, $data['exclusiveOperands']);
        } else {
            $this->exclusive_operands = $data['exclusiveOperands'] ?? [];
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
        if ($this->inclusive_rule_operator !== null) {
            $result['inclusiveRuleOperator'] = $this->inclusive_rule_operator;
        }
        if ($this->inclusive_operands !== null) {
            $result['inclusiveOperands'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->inclusive_operands);
        }
        if ($this->exclusive_operands !== null) {
            $result['exclusiveOperands'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->exclusive_operands);
        }
        return $result;
    }
}
