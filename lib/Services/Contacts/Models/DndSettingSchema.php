<?php

namespace HighLevel\Services\Contacts\Models;

/**
 * DndSettingSchema model
 * 
 * @package HighLevel\Services\Contacts\Models
 */
class DndSettingSchema
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
     * @var string|null
     */
    public ?string $code = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->status = $data['status'] ?? '';
        $this->message = $data['message'] ?? null;
        $this->code = $data['code'] ?? null;
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
        if ($this->code !== null) {
            $result['code'] = $this->code;
        }
        return $result;
    }
}
