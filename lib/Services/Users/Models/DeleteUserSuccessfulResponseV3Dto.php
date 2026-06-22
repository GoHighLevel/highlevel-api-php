<?php

namespace HighLevel\Services\Users\Models;

/**
 * DeleteUserSuccessfulResponseV3Dto model
 * 
 * @package HighLevel\Services\Users\Models
 */
class DeleteUserSuccessfulResponseV3Dto
{
    /**
     * @var bool|null
     */
    public ?bool $succeeded = null;

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
        $this->succeeded = $data['succeeded'] ?? null;
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
        if ($this->succeeded !== null) {
            $result['succeeded'] = $this->succeeded;
        }
        if ($this->message !== null) {
            $result['message'] = $this->message;
        }
        return $result;
    }
}
