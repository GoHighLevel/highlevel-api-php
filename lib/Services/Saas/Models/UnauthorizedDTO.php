<?php

namespace HighLevel\Services\Saas\Models;

/**
 * UnauthorizedDTO model
 * 
 * @package HighLevel\Services\Saas\Models
 */
class UnauthorizedDTO
{
    /**
     * @var float|null
     */
    public ?float $status_code = null;

    /**
     * @var string|null
     */
    public ?string $message = null;

    /**
     * @var string|null
     */
    public ?string $error = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->status_code = $data['statusCode'] ?? null;
        $this->message = $data['message'] ?? null;
        $this->error = $data['error'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->status_code !== null) {
            $result['statusCode'] = $this->status_code;
        }
        if ($this->message !== null) {
            $result['message'] = $this->message;
        }
        if ($this->error !== null) {
            $result['error'] = $this->error;
        }
        return $result;
    }
}
