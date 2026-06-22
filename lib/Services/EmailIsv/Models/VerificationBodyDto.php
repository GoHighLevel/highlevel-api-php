<?php

namespace HighLevel\Services\EmailIsv\Models;

/**
 * VerificationBodyDto model
 * 
 * @package HighLevel\Services\EmailIsv\Models
 */
class VerificationBodyDto
{
    /**
     * @var string
     */
    public string $type;

    /**
     * @var string
     */
    public string $verify;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->type = $data['type'] ?? '';
        $this->verify = $data['verify'] ?? '';
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->type !== null) {
            $result['type'] = $this->type;
        }
        if ($this->verify !== null) {
            $result['verify'] = $this->verify;
        }
        return $result;
    }
}
