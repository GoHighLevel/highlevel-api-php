<?php

namespace HighLevel\Services\Invoices\Models;

/**
 * BusinessDetailsDto model
 * 
 * @package HighLevel\Services\Invoices\Models
 */
class BusinessDetailsDto
{
    /**
     * @var string|null
     */
    public ?string $logo_url = null;

    /**
     * @var string|null
     */
    public ?string $name = null;

    /**
     * @var string|null
     */
    public ?string $phone_no = null;

    /**
     * @var mixed
     */
    public $address;

    /**
     * @var string|null
     */
    public ?string $website = null;

    /**
     * @var array&lt;string&gt;|null
     */
    public ?array $custom_values = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->logo_url = $data['logoUrl'] ?? null;
        $this->name = $data['name'] ?? null;
        $this->phone_no = $data['phoneNo'] ?? null;
        $this->address = $data['address'] ?? null;
        $this->website = $data['website'] ?? null;
        $this->custom_values = $data['customValues'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->logo_url !== null) {
            $result['logoUrl'] = $this->logo_url;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->phone_no !== null) {
            $result['phoneNo'] = $this->phone_no;
        }
        if ($this->address !== null) {
            $result['address'] = $this->address;
        }
        if ($this->website !== null) {
            $result['website'] = $this->website;
        }
        if ($this->custom_values !== null) {
            $result['customValues'] = $this->custom_values;
        }
        return $result;
    }
}
