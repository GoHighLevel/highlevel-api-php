<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Store\Models;

/**
 * UpdateShippingRateDto model
 * 
 * @package HighLevel\Services\Store\Models
 */
class UpdateShippingRateDto
{
    /**
     * @var string|null
     */
    public ?string $alt_id = null;

    /**
     * @var string|null
     */
    public ?string $alt_type = null;

    /**
     * @var string|null
     */
    public ?string $name = null;

    /**
     * @var string|null
     */
    public ?string $description = null;

    /**
     * @var string|null
     */
    public ?string $currency = null;

    /**
     * @var float|null
     */
    public ?float $amount = null;

    /**
     * @var string|null
     */
    public ?string $condition_type = null;

    /**
     * @var float|null
     */
    public ?float $min_condition = null;

    /**
     * @var float|null
     */
    public ?float $max_condition = null;

    /**
     * @var bool|null
     */
    public ?bool $is_carrier_rate = null;

    /**
     * @var string|null
     */
    public ?string $shipping_carrier_id = null;

    /**
     * @var float|null
     */
    public ?float $percentage_of_rate_fee = null;

    /**
     * @var array&lt;ShippingCarrierServiceDto&gt;|null
     */
    public ?array $shipping_carrier_services = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->alt_id = $data['altId'] ?? null;
        $this->alt_type = $data['altType'] ?? null;
        $this->name = $data['name'] ?? null;
        $this->description = $data['description'] ?? null;
        $this->currency = $data['currency'] ?? null;
        $this->amount = $data['amount'] ?? null;
        $this->condition_type = $data['conditionType'] ?? null;
        $this->min_condition = $data['minCondition'] ?? null;
        $this->max_condition = $data['maxCondition'] ?? null;
        $this->is_carrier_rate = $data['isCarrierRate'] ?? null;
        $this->shipping_carrier_id = $data['shippingCarrierId'] ?? null;
        $this->percentage_of_rate_fee = $data['percentageOfRateFee'] ?? null;
        // Handle array of ShippingCarrierServiceDto objects
        if (isset($data['shippingCarrierServices']) && is_array($data['shippingCarrierServices'])) {
            $this->shipping_carrier_services = array_map(function($item) {
                return is_array($item) ? new ShippingCarrierServiceDto($item) : $item;
            }, $data['shippingCarrierServices']);
        } else {
            $this->shipping_carrier_services = $data['shippingCarrierServices'] ?? null;
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
        if ($this->alt_id !== null) {
            $result['altId'] = $this->alt_id;
        }
        if ($this->alt_type !== null) {
            $result['altType'] = $this->alt_type;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->description !== null) {
            $result['description'] = $this->description;
        }
        if ($this->currency !== null) {
            $result['currency'] = $this->currency;
        }
        if ($this->amount !== null) {
            $result['amount'] = $this->amount;
        }
        if ($this->condition_type !== null) {
            $result['conditionType'] = $this->condition_type;
        }
        if ($this->min_condition !== null) {
            $result['minCondition'] = $this->min_condition;
        }
        if ($this->max_condition !== null) {
            $result['maxCondition'] = $this->max_condition;
        }
        if ($this->is_carrier_rate !== null) {
            $result['isCarrierRate'] = $this->is_carrier_rate;
        }
        if ($this->shipping_carrier_id !== null) {
            $result['shippingCarrierId'] = $this->shipping_carrier_id;
        }
        if ($this->percentage_of_rate_fee !== null) {
            $result['percentageOfRateFee'] = $this->percentage_of_rate_fee;
        }
        if ($this->shipping_carrier_services !== null) {
            $result['shippingCarrierServices'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->shipping_carrier_services);
        }
        return $result;
    }
}
