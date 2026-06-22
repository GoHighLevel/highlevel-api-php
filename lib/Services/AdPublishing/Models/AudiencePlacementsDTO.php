<?php

namespace HighLevel\Services\AdPublishing\Models;

/**
 * AudiencePlacementsDTO model
 * 
 * @package HighLevel\Services\AdPublishing\Models
 */
class AudiencePlacementsDTO
{
    /**
     * @var array&lt;string&gt;|null
     */
    public ?array $facebook = null;

    /**
     * @var array&lt;string&gt;|null
     */
    public ?array $instagram = null;

    /**
     * @var array&lt;string&gt;|null
     */
    public ?array $messenger = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->facebook = $data['facebook'] ?? null;
        $this->instagram = $data['instagram'] ?? null;
        $this->messenger = $data['messenger'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->facebook !== null) {
            $result['facebook'] = $this->facebook;
        }
        if ($this->instagram !== null) {
            $result['instagram'] = $this->instagram;
        }
        if ($this->messenger !== null) {
            $result['messenger'] = $this->messenger;
        }
        return $result;
    }
}
