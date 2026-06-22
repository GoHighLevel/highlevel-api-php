<?php

namespace HighLevel\Services\Store\Models;

/**
 * CreateStoreSettingDto model
 * 
 * @package HighLevel\Services\Store\Models
 */
class CreateStoreSettingDto
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
        return $result;
    }
}
