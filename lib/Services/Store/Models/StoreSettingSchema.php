<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Store\Models;

/**
 * StoreSettingSchema model
 * 
 * @package HighLevel\Services\Store\Models
 */
class StoreSettingSchema
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
     * @var mixed
     */
    public $shipping_origin;

    /**
     * @var mixed
     */
    public $store_order_notification;

    /**
     * @var mixed
     */
    public $store_order_fulfillment_notification;

    /**
     * @var string
     */
    public string $id;

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
        $this->shipping_origin = $data['shippingOrigin'] ?? null;
        $this->store_order_notification = $data['storeOrderNotification'] ?? null;
        $this->store_order_fulfillment_notification = $data['storeOrderFulfillmentNotification'] ?? null;
        $this->id = $data['_id'] ?? '';
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
        if ($this->shipping_origin !== null) {
            $result['shippingOrigin'] = $this->shipping_origin;
        }
        if ($this->store_order_notification !== null) {
            $result['storeOrderNotification'] = $this->store_order_notification;
        }
        if ($this->store_order_fulfillment_notification !== null) {
            $result['storeOrderFulfillmentNotification'] = $this->store_order_fulfillment_notification;
        }
        if ($this->id !== null) {
            $result['_id'] = $this->id;
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
