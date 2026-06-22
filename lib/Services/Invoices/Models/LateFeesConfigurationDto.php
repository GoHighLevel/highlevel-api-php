<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Invoices\Models;

/**
 * LateFeesConfigurationDto model
 * 
 * @package HighLevel\Services\Invoices\Models
 */
class LateFeesConfigurationDto
{
    /**
     * @var bool
     */
    public bool $enable;

    /**
     * @var float
     */
    public float $value;

    /**
     * @var string
     */
    public string $type;

    /**
     * @var mixed
     */
    public $frequency;

    /**
     * @var mixed
     */
    public $grace;

    /**
     * @var mixed
     */
    public $max_late_fees;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->enable = $data['enable'] ?? false;
        $this->value = $data['value'] ?? 0;
        $this->type = $data['type'] ?? '';
        $this->frequency = $data['frequency'] ?? null;
        $this->grace = $data['grace'] ?? null;
        $this->max_late_fees = $data['maxLateFees'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->enable !== null) {
            $result['enable'] = $this->enable;
        }
        if ($this->value !== null) {
            $result['value'] = $this->value;
        }
        if ($this->type !== null) {
            $result['type'] = $this->type;
        }
        if ($this->frequency !== null) {
            $result['frequency'] = $this->frequency;
        }
        if ($this->grace !== null) {
            $result['grace'] = $this->grace;
        }
        if ($this->max_late_fees !== null) {
            $result['maxLateFees'] = $this->max_late_fees;
        }
        return $result;
    }
}
