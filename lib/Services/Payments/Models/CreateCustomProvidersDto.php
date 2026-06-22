<?php

namespace HighLevel\Services\Payments\Models;

/**
 * CreateCustomProvidersDto model
 * 
 * @package HighLevel\Services\Payments\Models
 */
class CreateCustomProvidersDto
{
    /**
     * @var string
     */
    public string $name;

    /**
     * @var string
     */
    public string $description;

    /**
     * @var string
     */
    public string $payments_url;

    /**
     * @var string
     */
    public string $query_url;

    /**
     * @var string
     */
    public string $image_url;

    /**
     * @var bool
     */
    public bool $supports_subscription_schedule;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->name = $data['name'] ?? '';
        $this->description = $data['description'] ?? '';
        $this->payments_url = $data['paymentsUrl'] ?? '';
        $this->query_url = $data['queryUrl'] ?? '';
        $this->image_url = $data['imageUrl'] ?? '';
        $this->supports_subscription_schedule = $data['supportsSubscriptionSchedule'] ?? false;
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
        if ($this->payments_url !== null) {
            $result['paymentsUrl'] = $this->payments_url;
        }
        if ($this->query_url !== null) {
            $result['queryUrl'] = $this->query_url;
        }
        if ($this->image_url !== null) {
            $result['imageUrl'] = $this->image_url;
        }
        if ($this->supports_subscription_schedule !== null) {
            $result['supportsSubscriptionSchedule'] = $this->supports_subscription_schedule;
        }
        return $result;
    }
}
