<?php

namespace HighLevel\Services\Invoices\Models;

/**
 * ItemTaxDto model
 * 
 * @package HighLevel\Services\Invoices\Models
 */
class ItemTaxDto
{
    /**
     * @var string
     */
    public string $id;

    /**
     * @var string
     */
    public string $name;

    /**
     * @var float
     */
    public float $rate;

    /**
     * @var string|null
     */
    public ?string $calculation = null;

    /**
     * @var string|null
     */
    public ?string $description = null;

    /**
     * @var string|null
     */
    public ?string $tax_id = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->id = $data['_id'] ?? '';
        $this->name = $data['name'] ?? '';
        $this->rate = $data['rate'] ?? 0;
        $this->calculation = $data['calculation'] ?? null;
        $this->description = $data['description'] ?? null;
        $this->tax_id = $data['taxId'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->id !== null) {
            $result['_id'] = $this->id;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->rate !== null) {
            $result['rate'] = $this->rate;
        }
        if ($this->calculation !== null) {
            $result['calculation'] = $this->calculation;
        }
        if ($this->description !== null) {
            $result['description'] = $this->description;
        }
        if ($this->tax_id !== null) {
            $result['taxId'] = $this->tax_id;
        }
        return $result;
    }
}
