<?php

namespace HighLevel\Services\Contacts\Models;

/**
 * UpdateTagsResponseDTO model
 * 
 * @package HighLevel\Services\Contacts\Models
 */
class UpdateTagsResponseDTO
{
    /**
     * @var bool
     */
    public bool $succeeded;

    /**
     * @var bool
     */
    public bool $succeded;

    /**
     * @var float
     */
    public float $error_count;

    /**
     * @var array&lt;string&gt;
     */
    public array $responses;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->succeeded = $data['succeeded'] ?? false;
        $this->succeded = $data['succeded'] ?? false;
        $this->error_count = $data['errorCount'] ?? 0;
        $this->responses = $data['responses'] ?? [];
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
        if ($this->succeded !== null) {
            $result['succeded'] = $this->succeded;
        }
        if ($this->error_count !== null) {
            $result['errorCount'] = $this->error_count;
        }
        if ($this->responses !== null) {
            $result['responses'] = $this->responses;
        }
        return $result;
    }
}
