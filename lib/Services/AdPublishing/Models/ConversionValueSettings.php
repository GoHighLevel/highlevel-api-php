<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\AdPublishing\Models;

/**
 * ConversionValueSettings model
 * 
 * @package HighLevel\Services\AdPublishing\Models
 */
class ConversionValueSettings
{
    /**
     * @var float
     */
    public float $default_value;

    /**
     * @var string
     */
    public string $default_currency_code;

    /**
     * @var bool
     */
    public bool $always_use_default_value;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->default_value = $data['defaultValue'] ?? 0;
        $this->default_currency_code = $data['defaultCurrencyCode'] ?? '';
        $this->always_use_default_value = $data['alwaysUseDefaultValue'] ?? false;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->default_value !== null) {
            $result['defaultValue'] = $this->default_value;
        }
        if ($this->default_currency_code !== null) {
            $result['defaultCurrencyCode'] = $this->default_currency_code;
        }
        if ($this->always_use_default_value !== null) {
            $result['alwaysUseDefaultValue'] = $this->always_use_default_value;
        }
        return $result;
    }
}
