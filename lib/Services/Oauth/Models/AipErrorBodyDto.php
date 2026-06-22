<?php

namespace HighLevel\Services\Oauth\Models;

/**
 * AipErrorBodyDto model
 * 
 * @package HighLevel\Services\Oauth\Models
 */
class AipErrorBodyDto
{
    /**
     * @var string
     */
    public string $code;

    /**
     * @var string
     */
    public string $message;

    /**
     * @var array&lt;string, mixed&gt;|null
     */
    public ?array $details = null;

    /**
     * @var string|null
     */
    public ?string $resolution = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->code = $data['code'] ?? '';
        $this->message = $data['message'] ?? '';
        $this->details = $data['details'] ?? null;
        $this->resolution = $data['resolution'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->code !== null) {
            $result['code'] = $this->code;
        }
        if ($this->message !== null) {
            $result['message'] = $this->message;
        }
        if ($this->details !== null) {
            $result['details'] = $this->details;
        }
        if ($this->resolution !== null) {
            $result['resolution'] = $this->resolution;
        }
        return $result;
    }
}
