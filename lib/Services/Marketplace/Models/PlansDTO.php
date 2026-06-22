<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Marketplace\Models;

/**
 * PlansDTO model
 * 
 * @package HighLevel\Services\Marketplace\Models
 */
class PlansDTO
{
    /**
     * @var array&lt;SubscriptionPlanDTO&gt;
     */
    public array $subscription;

    /**
     * @var array&lt;UsagePlanDTO&gt;
     */
    public array $usage;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        // Handle array of SubscriptionPlanDTO objects
        if (isset($data['subscription']) && is_array($data['subscription'])) {
            $this->subscription = array_map(function($item) {
                return is_array($item) ? new SubscriptionPlanDTO($item) : $item;
            }, $data['subscription']);
        } else {
            $this->subscription = $data['subscription'] ?? [];
        }
        // Handle array of UsagePlanDTO objects
        if (isset($data['usage']) && is_array($data['usage'])) {
            $this->usage = array_map(function($item) {
                return is_array($item) ? new UsagePlanDTO($item) : $item;
            }, $data['usage']);
        } else {
            $this->usage = $data['usage'] ?? [];
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
        if ($this->subscription !== null) {
            $result['subscription'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->subscription);
        }
        if ($this->usage !== null) {
            $result['usage'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->usage);
        }
        return $result;
    }
}
