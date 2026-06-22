<?php

namespace HighLevel\Services\AdPublishing\Models;

/**
 * RuleOperandDTO model
 * 
 * @package HighLevel\Services\AdPublishing\Models
 */
class RuleOperandDTO
{
    /**
     * @var float
     */
    public float $lookback_window_days;

    /**
     * @var mixed
     */
    public $rule;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->lookback_window_days = $data['lookbackWindowDays'] ?? 0;
        $this->rule = $data['rule'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->lookback_window_days !== null) {
            $result['lookbackWindowDays'] = $this->lookback_window_days;
        }
        if ($this->rule !== null) {
            $result['rule'] = $this->rule;
        }
        return $result;
    }
}
