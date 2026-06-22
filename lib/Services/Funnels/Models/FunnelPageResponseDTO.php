<?php

namespace HighLevel\Services\Funnels\Models;

/**
 * FunnelPageResponseDTO model
 * 
 * @package HighLevel\Services\Funnels\Models
 */
class FunnelPageResponseDTO
{
    /**
     * @var string
     */
    public string $id;

    /**
     * @var string
     */
    public string $location_id;

    /**
     * @var string
     */
    public string $funnel_id;

    /**
     * @var string
     */
    public string $name;

    /**
     * @var string
     */
    public string $step_id;

    /**
     * @var string
     */
    public string $deleted;

    /**
     * @var string
     */
    public string $updated_at;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->id = $data['_id'] ?? '';
        $this->location_id = $data['locationId'] ?? '';
        $this->funnel_id = $data['funnelId'] ?? '';
        $this->name = $data['name'] ?? '';
        $this->step_id = $data['stepId'] ?? '';
        $this->deleted = $data['deleted'] ?? '';
        $this->updated_at = $data['updatedAt'] ?? '';
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->id !== null) {
            $result['_id'] = $this->id;
        }
        if ($this->location_id !== null) {
            $result['locationId'] = $this->location_id;
        }
        if ($this->funnel_id !== null) {
            $result['funnelId'] = $this->funnel_id;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->step_id !== null) {
            $result['stepId'] = $this->step_id;
        }
        if ($this->deleted !== null) {
            $result['deleted'] = $this->deleted;
        }
        if ($this->updated_at !== null) {
            $result['updatedAt'] = $this->updated_at;
        }
        return $result;
    }
}
