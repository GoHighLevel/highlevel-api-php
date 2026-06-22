<?php

namespace HighLevel\Services\Store\Models;

/**
 * ShippingCarrierSchema model
 * 
 * @package HighLevel\Services\Store\Models
 */
class ShippingCarrierSchema
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
     * @var string
     */
    public string $callback_url;

    /**
     * @var array&lt;ShippingCarrierServiceDto&gt;|null
     */
    public ?array $services = null;

    /**
     * @var bool|null
     */
    public ?bool $allows_multiple_service_selection = null;

    /**
     * @var string
     */
    public string $id;

    /**
     * @var string
     */
    public string $marketplace_app_id;

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
        $this->callback_url = $data['callbackUrl'] ?? '';
        // Handle array of ShippingCarrierServiceDto objects
        if (isset($data['services']) && is_array($data['services'])) {
            $this->services = array_map(function($item) {
                return is_array($item) ? new ShippingCarrierServiceDto($item) : $item;
            }, $data['services']);
        } else {
            $this->services = $data['services'] ?? null;
        }
        $this->allows_multiple_service_selection = $data['allowsMultipleServiceSelection'] ?? null;
        $this->id = $data['_id'] ?? '';
        $this->marketplace_app_id = $data['marketplaceAppId'] ?? '';
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
        if ($this->callback_url !== null) {
            $result['callbackUrl'] = $this->callback_url;
        }
        if ($this->services !== null) {
            $result['services'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->services);
        }
        if ($this->allows_multiple_service_selection !== null) {
            $result['allowsMultipleServiceSelection'] = $this->allows_multiple_service_selection;
        }
        if ($this->id !== null) {
            $result['_id'] = $this->id;
        }
        if ($this->marketplace_app_id !== null) {
            $result['marketplaceAppId'] = $this->marketplace_app_id;
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
