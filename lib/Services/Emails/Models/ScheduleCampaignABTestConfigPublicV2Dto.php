<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Emails\Models;

/**
 * ScheduleCampaignABTestConfigPublicV2Dto model
 * 
 * @package HighLevel\Services\Emails\Models
 */
class ScheduleCampaignABTestConfigPublicV2Dto
{
    /**
     * @var string
     */
    public string $test_type;

    /**
     * @var float
     */
    public float $test_duration;

    /**
     * @var float
     */
    public float $variation_count;

    /**
     * @var float
     */
    public float $test_size;

    /**
     * @var string
     */
    public string $winning_criteria;

    /**
     * @var array&lt;ScheduleCampaignABTestVariationPublicV2Dto&gt;
     */
    public array $variations;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->test_type = $data['testType'] ?? '';
        $this->test_duration = $data['testDuration'] ?? 0;
        $this->variation_count = $data['variationCount'] ?? 0;
        $this->test_size = $data['testSize'] ?? 0;
        $this->winning_criteria = $data['winningCriteria'] ?? '';
        // Handle array of ScheduleCampaignABTestVariationPublicV2Dto objects
        if (isset($data['variations']) && is_array($data['variations'])) {
            $this->variations = array_map(function($item) {
                return is_array($item) ? new ScheduleCampaignABTestVariationPublicV2Dto($item) : $item;
            }, $data['variations']);
        } else {
            $this->variations = $data['variations'] ?? [];
        }
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->test_type !== null) {
            $result['testType'] = $this->test_type;
        }
        if ($this->test_duration !== null) {
            $result['testDuration'] = $this->test_duration;
        }
        if ($this->variation_count !== null) {
            $result['variationCount'] = $this->variation_count;
        }
        if ($this->test_size !== null) {
            $result['testSize'] = $this->test_size;
        }
        if ($this->winning_criteria !== null) {
            $result['winningCriteria'] = $this->winning_criteria;
        }
        if ($this->variations !== null) {
            $result['variations'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->variations);
        }
        return $result;
    }
}
