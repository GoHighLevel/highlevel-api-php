<?php

namespace HighLevel\Services\Marketplace\Models;

/**
 * UsagePlanDTO model
 * 
 * @package HighLevel\Services\Marketplace\Models
 */
class UsagePlanDTO
{
    /**
     * @var string
     */
    public string $product_type;

    /**
     * @var string
     */
    public string $product_name;

    /**
     * @var string
     */
    public string $usage_unit;

    /**
     * @var string
     */
    public string $meter_id;

    /**
     * @var string
     */
    public string $meter_name;

    /**
     * @var float
     */
    public float $fixed_price_per_unit;

    /**
     * @var string
     */
    public string $price_type;

    /**
     * @var string
     */
    public string $min_price_per_unit;

    /**
     * @var string
     */
    public string $max_price_per_unit;

    /**
     * @var float
     */
    public float $execution_limit_per_cycle;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->product_type = $data['productType'] ?? '';
        $this->product_name = $data['productName'] ?? '';
        $this->usage_unit = $data['usageUnit'] ?? '';
        $this->meter_id = $data['meterId'] ?? '';
        $this->meter_name = $data['meterName'] ?? '';
        $this->fixed_price_per_unit = $data['fixedPricePerUnit'] ?? 0;
        $this->price_type = $data['priceType'] ?? '';
        $this->min_price_per_unit = $data['minPricePerUnit'] ?? '';
        $this->max_price_per_unit = $data['maxPricePerUnit'] ?? '';
        $this->execution_limit_per_cycle = $data['executionLimitPerCycle'] ?? 0;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->product_type !== null) {
            $result['productType'] = $this->product_type;
        }
        if ($this->product_name !== null) {
            $result['productName'] = $this->product_name;
        }
        if ($this->usage_unit !== null) {
            $result['usageUnit'] = $this->usage_unit;
        }
        if ($this->meter_id !== null) {
            $result['meterId'] = $this->meter_id;
        }
        if ($this->meter_name !== null) {
            $result['meterName'] = $this->meter_name;
        }
        if ($this->fixed_price_per_unit !== null) {
            $result['fixedPricePerUnit'] = $this->fixed_price_per_unit;
        }
        if ($this->price_type !== null) {
            $result['priceType'] = $this->price_type;
        }
        if ($this->min_price_per_unit !== null) {
            $result['minPricePerUnit'] = $this->min_price_per_unit;
        }
        if ($this->max_price_per_unit !== null) {
            $result['maxPricePerUnit'] = $this->max_price_per_unit;
        }
        if ($this->execution_limit_per_cycle !== null) {
            $result['executionLimitPerCycle'] = $this->execution_limit_per_cycle;
        }
        return $result;
    }
}
