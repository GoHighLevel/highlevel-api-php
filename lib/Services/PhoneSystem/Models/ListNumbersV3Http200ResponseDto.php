<?php

namespace HighLevel\Services\PhoneSystem\Models;

/**
 * ListNumbersV3Http200ResponseDto model
 * 
 * @package HighLevel\Services\PhoneSystem\Models
 */
class ListNumbersV3Http200ResponseDto
{
    /**
     * @var string
     */
    public string $status;

    /**
     * @var mixed
     */
    public $data;

    /**
     * @var string
     */
    public string $message;

    /**
     * @var float
     */
    public float $status_code;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->status = $data['status'] ?? '';
        $this->data = $data['data'] ?? null;
        $this->message = $data['message'] ?? '';
        $this->status_code = $data['statusCode'] ?? 0;
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
        if ($this->data !== null) {
            $result['data'] = $this->data;
        }
        if ($this->message !== null) {
            $result['message'] = $this->message;
        }
        if ($this->status_code !== null) {
            $result['statusCode'] = $this->status_code;
        }
        return $result;
    }
}
