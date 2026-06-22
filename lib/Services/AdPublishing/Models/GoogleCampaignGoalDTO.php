<?php

namespace HighLevel\Services\AdPublishing\Models;

/**
 * GoogleCampaignGoalDTO model
 * 
 * @package HighLevel\Services\AdPublishing\Models
 */
class GoogleCampaignGoalDTO
{
    /**
     * @var string
     */
    public string $type;

    /**
     * @var string|null
     */
    public ?string $value = null;

    /**
     * @var bool|null
     */
    public ?bool $is_custom_conversion_goal = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->type = $data['type'] ?? '';
        $this->value = $data['value'] ?? null;
        $this->is_custom_conversion_goal = $data['isCustomConversionGoal'] ?? null;
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
        if ($this->value !== null) {
            $result['value'] = $this->value;
        }
        if ($this->is_custom_conversion_goal !== null) {
            $result['isCustomConversionGoal'] = $this->is_custom_conversion_goal;
        }
        return $result;
    }
}
