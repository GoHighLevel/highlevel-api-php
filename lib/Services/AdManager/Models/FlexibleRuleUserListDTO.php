<?php

namespace HighLevel\Services\AdManager\Models;

/**
 * FlexibleRuleUserListDTO model
 * 
 * @package HighLevel\Services\AdManager\Models
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
     * Raw data storage for models without defined schema
     * @var array<string, mixed>
     */
    private array $data = [];

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
        // No defined properties - store raw data for flexible models
        $this->data = $data;
    }

    /**
     * Convert model to array (for models without defined schema)
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        return $this->data;
    }

    /**
     * Magic getter for accessing data properties
     * 
     * @param string $name Property name
     * @return mixed Property value or null if not found
     */
    public function __get(string $name)
    {
        return $this->data[$name] ?? null;
    }

    /**
     * Magic setter for setting data properties
     * 
     * @param string $name Property name
     * @param mixed $value Property value
     * @return void
     */
    public function __set(string $name, $value): void
    {
        $this->data[$name] = $value;
    }

    /**
     * Magic isset for checking if data property exists
     * 
     * @param string $name Property name
     * @return bool True if property exists, false otherwise
     */
    public function __isset(string $name): bool
    {
        return isset($this->data[$name]);
    }

    /**
     * Get all data as array
     * 
     * @return array<string, mixed>
     */
    public function getData(): array
    {
        return $this->data;
    }
}
