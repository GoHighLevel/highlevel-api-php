<?php

namespace HighLevel\Services\Store\Models;

/**
 * AvailableShippingRate model
 * 
 * @package HighLevel\Services\Store\Models
 */
class AvailableShippingRate
{
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
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->name = $data['name'] ?? '';
        $this->description = $data['description'] ?? null;
        $this->currency = $data['currency'] ?? '';
        $this->amount = $data['amount'] ?? 0;
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
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
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
        return $result;
    }
}
