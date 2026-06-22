<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Store\Models;

/**
 * ShippingRateSchema model
 * 
 * @package HighLevel\Services\Store\Models
 */
class ShippingRateSchema
{
    /**
     * @var string
     */
    public string $alt_id;

    /**
     * @var string
     */
    public string $alt_type;

    /**
     * @var string
     */
    public string $name;

    /**
     * @var string|null
     */
    public ?string $description = null;

    /**
     * @var string
     */
    public string $currency;

    /**
     * @var float
     */
    public float $amount;

    /**
     * @var string
     */
    public string $condition_type;

    /**
     * @var float
     */
    public float $min_condition;

    /**
     * @var float
     */
    public float $max_condition;

    /**
     * @var bool|null
     */
    public ?bool $is_carrier_rate = null;

    /**
     * @var string
     */
    public string $shipping_carrier_id;

    /**
     * @var float|null
     */
    public ?float $percentage_of_rate_fee = null;

    /**
     * @var array&lt;ShippingCarrierServiceDto&gt;|null
     */
    public ?array $shipping_carrier_services = null;

    /**
     * @var string
     */
    public string $id;

    /**
     * @var string
     */
    public string $shipping_zone_id;

    /**
     * @var string
     */
    public string $created_at;

    /**
     * @var string
     */
    public string $updated_at;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->alt_id = $data['altId'] ?? '';
        $this->alt_type = $data['altType'] ?? '';
        $this->name = $data['name'] ?? '';
        $this->description = $data['description'] ?? null;
        $this->currency = $data['currency'] ?? '';
        $this->amount = $data['amount'] ?? 0;
        $this->condition_type = $data['conditionType'] ?? '';
        $this->min_condition = $data['minCondition'] ?? 0;
        $this->max_condition = $data['maxCondition'] ?? 0;
        $this->is_carrier_rate = $data['isCarrierRate'] ?? null;
        $this->shipping_carrier_id = $data['shippingCarrierId'] ?? '';
        $this->percentage_of_rate_fee = $data['percentageOfRateFee'] ?? null;
        // Handle array of ShippingCarrierServiceDto objects
        if (isset($data['shippingCarrierServices']) && is_array($data['shippingCarrierServices'])) {
            $this->shipping_carrier_services = array_map(function($item) {
                return is_array($item) ? new ShippingCarrierServiceDto($item) : $item;
            }, $data['shippingCarrierServices']);
        } else {
            $this->shipping_carrier_services = $data['shippingCarrierServices'] ?? null;
        }
        $this->id = $data['_id'] ?? '';
        $this->shipping_zone_id = $data['shippingZoneId'] ?? '';
        $this->created_at = $data['createdAt'] ?? '';
        $this->updated_at = $data['updatedAt'] ?? '';
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
        if ($this->id !== null) {
            $result['_id'] = $this->id;
        }
        if ($this->shipping_zone_id !== null) {
            $result['shippingZoneId'] = $this->shipping_zone_id;
        }
        if ($this->created_at !== null) {
            $result['createdAt'] = $this->created_at;
        }
        if ($this->updated_at !== null) {
            $result['updatedAt'] = $this->updated_at;
        }
        return $result;
    }
}
