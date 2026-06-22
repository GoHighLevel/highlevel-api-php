<?php

namespace HighLevel\Services\Links\Models;

/**
 * GetLinkSuccessfulResponseDto model
 * 
 * @package HighLevel\Services\Links\Models
 */
class GetLinkSuccessfulResponseDto
{
    /**
     * @var mixed
     */
    public $link;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->link = $data['link'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->link !== null) {
            $result['link'] = $this->link;
        }
        return $result;
    }
}
