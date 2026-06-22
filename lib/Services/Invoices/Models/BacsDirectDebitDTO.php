<?php

namespace HighLevel\Services\Invoices\Models;

/**
 * BacsDirectDebitDTO model
 * 
 * @package HighLevel\Services\Invoices\Models
 */
class BacsDirectDebitDTO
{
    /**
     * @var string
     */
    public string $sort_code;

    /**
     * @var string
     */
    public string $last4;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->sort_code = $data['sort_code'] ?? '';
        $this->last4 = $data['last4'] ?? '';
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->sort_code !== null) {
            $result['sort_code'] = $this->sort_code;
        }
        if ($this->last4 !== null) {
            $result['last4'] = $this->last4;
        }
        return $result;
    }
}
