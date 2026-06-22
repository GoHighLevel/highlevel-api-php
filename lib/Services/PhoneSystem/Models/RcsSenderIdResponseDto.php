<?php

namespace HighLevel\Services\PhoneSystem\Models;

/**
 * RcsSenderIdResponseDto model
 * 
 * @package HighLevel\Services\PhoneSystem\Models
 */
class RcsSenderIdResponseDto
{
    /**
     * @var string
     */
    public string $number;

    /**
     * @var string
     */
    public string $number_type;

    /**
     * @var string|null
     */
    public ?string $friendly_name = null;

    /**
     * @var array&lt;string, mixed&gt;|null
     */
    public ?array $rcs_meta = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->number = $data['number'] ?? '';
        $this->number_type = $data['numberType'] ?? '';
        $this->friendly_name = $data['friendlyName'] ?? null;
        $this->rcs_meta = $data['rcsMeta'] ?? null;
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
        if ($this->number_type !== null) {
            $result['numberType'] = $this->number_type;
        }
        if ($this->friendly_name !== null) {
            $result['friendlyName'] = $this->friendly_name;
        }
        if ($this->rcs_meta !== null) {
            $result['rcsMeta'] = $this->rcs_meta;
        }
        return $result;
    }
}
