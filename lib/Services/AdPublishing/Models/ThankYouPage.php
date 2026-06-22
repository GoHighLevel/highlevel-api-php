<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\AdPublishing\Models;

/**
 * ThankYouPage model
 * 
 * @package HighLevel\Services\AdPublishing\Models
 */
class ThankYouPage
{
    /**
     * @var string
     */
    public string $title;

    /**
     * @var string
     */
    public string $body;

    /**
     * @var string
     */
    public string $button_text;

    /**
     * @var string
     */
    public string $button_type;

    /**
     * @var string|null
     */
    public ?string $button_link = null;

    /**
     * @var string|null
     */
    public ?string $business_phone = null;

    /**
     * @var string|null
     */
    public ?string $country_code = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->title = $data['title'] ?? '';
        $this->body = $data['body'] ?? '';
        $this->button_text = $data['buttonText'] ?? '';
        $this->button_type = $data['buttonType'] ?? '';
        $this->button_link = $data['buttonLink'] ?? null;
        $this->business_phone = $data['businessPhone'] ?? null;
        $this->country_code = $data['countryCode'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->title !== null) {
            $result['title'] = $this->title;
        }
        if ($this->body !== null) {
            $result['body'] = $this->body;
        }
        if ($this->button_text !== null) {
            $result['buttonText'] = $this->button_text;
        }
        if ($this->button_type !== null) {
            $result['buttonType'] = $this->button_type;
        }
        if ($this->button_link !== null) {
            $result['buttonLink'] = $this->button_link;
        }
        if ($this->business_phone !== null) {
            $result['businessPhone'] = $this->business_phone;
        }
        if ($this->country_code !== null) {
            $result['countryCode'] = $this->country_code;
        }
        return $result;
    }
}
