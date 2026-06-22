<?php

namespace HighLevel\Services\Store\Models;

/**
 * UpdateShippingCarrierDto model
 * 
 * @package HighLevel\Services\Store\Models
 */
class UpdateShippingCarrierDto
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
    public ?string $callback_url = null;

    /**
     * @var array&lt;ShippingCarrierServiceDto&gt;|null
     */
    public ?array $services = null;

    /**
     * @var bool|null
     */
    public ?bool $allows_multiple_service_selection = null;

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
        $this->callback_url = $data['callbackUrl'] ?? null;
        // Handle array of ShippingCarrierServiceDto objects
        if (isset($data['services']) && is_array($data['services'])) {
            $this->services = array_map(function($item) {
                return is_array($item) ? new ShippingCarrierServiceDto($item) : $item;
            }, $data['services']);
        } else {
            $this->services = $data['services'] ?? null;
        }
        $this->allows_multiple_service_selection = $data['allowsMultipleServiceSelection'] ?? null;
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
        return $result;
    }
}
