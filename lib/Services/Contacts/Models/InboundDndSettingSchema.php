<?php

namespace HighLevel\Services\Contacts\Models;

/**
 * InboundDndSettingSchema model
 * 
 * @package HighLevel\Services\Contacts\Models
 */
class InboundDndSettingSchema
{
    /**
     * @var string
     */
    public string $status;

    /**
     * @var string|null
     */
    public ?string $message = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->status = $data['status'] ?? '';
        $this->message = $data['message'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->status !== null) {
            $result['status'] = $this->status;
        }
        if ($this->message !== null) {
            $result['message'] = $this->message;
        }
        return $result;
    }
}
