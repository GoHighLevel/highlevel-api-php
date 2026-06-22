<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Payments\Models;

/**
 * ConnectCustomProvidersResponseSchema model
 * 
 * @package HighLevel\Services\Payments\Models
 */
class ConnectCustomProvidersResponseSchema
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
     * @var string
     */
    public string $id;

    /**
     * @var string
     */
    public string $location_id;

    /**
     * @var string
     */
    public string $marketplace_app_id;

    /**
     * @var array&lt;string, mixed&gt;|null
     */
    public ?array $payment_provider = null;

    /**
     * @var bool
     */
    public bool $deleted;

    /**
     * @var string
     */
    public string $created_at;

    /**
     * @var string
     */
    public string $updated_at;

    /**
     * @var string|null
     */
    public ?string $trace_id = null;

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
        $this->id = $data['_id'] ?? '';
        $this->location_id = $data['locationId'] ?? '';
        $this->marketplace_app_id = $data['marketplaceAppId'] ?? '';
        $this->payment_provider = $data['paymentProvider'] ?? null;
        $this->deleted = $data['deleted'] ?? false;
        $this->created_at = $data['createdAt'] ?? '';
        $this->updated_at = $data['updatedAt'] ?? '';
        $this->trace_id = $data['traceId'] ?? null;
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
        if ($this->id !== null) {
            $result['_id'] = $this->id;
        }
        if ($this->location_id !== null) {
            $result['locationId'] = $this->location_id;
        }
        if ($this->marketplace_app_id !== null) {
            $result['marketplaceAppId'] = $this->marketplace_app_id;
        }
        if ($this->payment_provider !== null) {
            $result['paymentProvider'] = $this->payment_provider;
        }
        if ($this->deleted !== null) {
            $result['deleted'] = $this->deleted;
        }
        if ($this->created_at !== null) {
            $result['createdAt'] = $this->created_at;
        }
        if ($this->updated_at !== null) {
            $result['updatedAt'] = $this->updated_at;
        }
        if ($this->trace_id !== null) {
            $result['traceId'] = $this->trace_id;
        }
        return $result;
    }
}
