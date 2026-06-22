<?php

namespace HighLevel\Services\Invoices\Models;

/**
 * TipsConfigurationDto model
 * 
 * @package HighLevel\Services\Invoices\Models
 */
class TipsConfigurationDto
{
    /**
     * @var array&lt;string&gt;
     */
    public array $tips_percentage;

    /**
     * @var bool
     */
    public bool $tips_enabled;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->tips_percentage = $data['tipsPercentage'] ?? [];
        $this->tips_enabled = $data['tipsEnabled'] ?? false;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->tips_percentage !== null) {
            $result['tipsPercentage'] = $this->tips_percentage;
        }
        if ($this->tips_enabled !== null) {
            $result['tipsEnabled'] = $this->tips_enabled;
        }
        return $result;
    }
}
