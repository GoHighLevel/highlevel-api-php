<?php

namespace HighLevel\Services\Forms\Models;

/**
 * FormsSuccessfulResponseDto model
 * 
 * @package HighLevel\Services\Forms\Models
 */
class FormsSuccessfulResponseDto
{
    /**
     * @var array&lt;FormsParams&gt;|null
     */
    public ?array $forms = null;

    /**
     * @var float|null
     */
    public ?float $total = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        // Handle array of FormsParams objects
        if (isset($data['forms']) && is_array($data['forms'])) {
            $this->forms = array_map(function($item) {
                return is_array($item) ? new FormsParams($item) : $item;
            }, $data['forms']);
        } else {
            $this->forms = $data['forms'] ?? null;
        }
        $this->total = $data['total'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->forms !== null) {
            $result['forms'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->forms);
        }
        if ($this->total !== null) {
            $result['total'] = $this->total;
        }
        return $result;
    }
}
