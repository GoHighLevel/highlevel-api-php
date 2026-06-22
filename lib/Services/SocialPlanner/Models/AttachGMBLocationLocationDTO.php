<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\SocialPlanner\Models;

/**
 * AttachGMBLocationLocationDTO model
 * 
 * @package HighLevel\Services\SocialPlanner\Models
 */
class AttachGMBLocationLocationDTO
{
    /**
     * @var string
     */
    public string $name;

    /**
     * @var string|null
     */
    public ?string $store_code = null;

    /**
     * @var string
     */
    public string $title;

    /**
     * @var array&lt;string, mixed&gt;|null
     */
    public ?array $storefront_address = null;

    /**
     * @var array&lt;string, mixed&gt;|null
     */
    public ?array $metadata = null;

    /**
     * @var bool|null
     */
    public ?bool $max_location = null;

    /**
     * @var bool|null
     */
    public ?bool $is_verified = null;

    /**
     * @var bool|null
     */
    public ?bool $is_connected = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->name = $data['name'] ?? '';
        $this->store_code = $data['storeCode'] ?? null;
        $this->title = $data['title'] ?? '';
        $this->storefront_address = $data['storefrontAddress'] ?? null;
        $this->metadata = $data['metadata'] ?? null;
        $this->max_location = $data['maxLocation'] ?? null;
        $this->is_verified = $data['isVerified'] ?? null;
        $this->is_connected = $data['isConnected'] ?? null;
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
        if ($this->store_code !== null) {
            $result['storeCode'] = $this->store_code;
        }
        if ($this->title !== null) {
            $result['title'] = $this->title;
        }
        if ($this->storefront_address !== null) {
            $result['storefrontAddress'] = $this->storefront_address;
        }
        if ($this->metadata !== null) {
            $result['metadata'] = $this->metadata;
        }
        if ($this->max_location !== null) {
            $result['maxLocation'] = $this->max_location;
        }
        if ($this->is_verified !== null) {
            $result['isVerified'] = $this->is_verified;
        }
        if ($this->is_connected !== null) {
            $result['isConnected'] = $this->is_connected;
        }
        return $result;
    }
}
