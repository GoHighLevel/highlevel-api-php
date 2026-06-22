<?php

namespace HighLevel\Services\Emails\Models;

/**
 * EmailCampaignVariationPublicV2Dto model
 * 
 * @package HighLevel\Services\Emails\Models
 */
class EmailCampaignVariationPublicV2Dto
{
    /**
     * @var string
     */
    public string $source_id;

    /**
     * @var bool
     */
    public bool $is_winner;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->source_id = $data['sourceId'] ?? '';
        $this->is_winner = $data['isWinner'] ?? false;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->source_id !== null) {
            $result['sourceId'] = $this->source_id;
        }
        if ($this->is_winner !== null) {
            $result['isWinner'] = $this->is_winner;
        }
        return $result;
    }
}
