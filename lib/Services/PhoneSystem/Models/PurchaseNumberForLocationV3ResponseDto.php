<?php

namespace HighLevel\Services\PhoneSystem\Models;

/**
 * PurchaseNumberForLocationV3ResponseDto model
 * 
 * @package HighLevel\Services\PhoneSystem\Models
 */
class PurchaseNumberForLocationV3ResponseDto
{
    /**
     * @var string
     */
    public string $number;

    /**
     * @var string
     */
    public string $location_id;

    /**
     * @var string
     */
    public string $id;

    /**
     * @var bool
     */
    public bool $under_lc_account;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->number = $data['number'] ?? '';
        $this->location_id = $data['locationId'] ?? '';
        $this->id = $data['id'] ?? '';
        $this->under_lc_account = $data['underLcAccount'] ?? false;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->number !== null) {
            $result['number'] = $this->number;
        }
        if ($this->location_id !== null) {
            $result['locationId'] = $this->location_id;
        }
        if ($this->id !== null) {
            $result['id'] = $this->id;
        }
        if ($this->under_lc_account !== null) {
            $result['underLcAccount'] = $this->under_lc_account;
        }
        return $result;
    }
}
