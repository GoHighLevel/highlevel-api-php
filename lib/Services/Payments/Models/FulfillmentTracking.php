<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Payments\Models;

/**
 * FulfillmentTracking model
 * 
 * @package HighLevel\Services\Payments\Models
 */
class FulfillmentTracking
{
    /**
     * @var string|null
     */
    public ?string $tracking_number = null;

    /**
     * @var string|null
     */
    public ?string $shipping_carrier = null;

    /**
     * @var string|null
     */
    public ?string $tracking_url = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->tracking_number = $data['trackingNumber'] ?? null;
        $this->shipping_carrier = $data['shippingCarrier'] ?? null;
        $this->tracking_url = $data['trackingUrl'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->tracking_number !== null) {
            $result['trackingNumber'] = $this->tracking_number;
        }
        if ($this->shipping_carrier !== null) {
            $result['shippingCarrier'] = $this->shipping_carrier;
        }
        if ($this->tracking_url !== null) {
            $result['trackingUrl'] = $this->tracking_url;
        }
        return $result;
    }
}
