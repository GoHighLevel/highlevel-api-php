<?php

namespace HighLevel\Services\AdPublishing\Models;

/**
 * UpsertConversionDTO model
 * 
 * @package HighLevel\Services\AdPublishing\Models
 */
class UpsertConversionDTO
{
    /**
     * @var string
     */
    public string $location_id;

    /**
     * @var string|null
     */
    public ?string $conversion_id = null;

    /**
     * @var string
     */
    public string $name;

    /**
     * @var string
     */
    public string $type;

    /**
     * @var string
     */
    public string $category;

    /**
     * @var mixed
     */
    public $value_settings;

    /**
     * @var string
     */
    public string $counting_type;

    /**
     * @var string
     */
    public string $attribution_model;

    /**
     * @var float
     */
    public float $click_through_window;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->location_id = $data['locationId'] ?? '';
        $this->conversion_id = $data['conversionId'] ?? null;
        $this->name = $data['name'] ?? '';
        $this->type = $data['type'] ?? '';
        $this->category = $data['category'] ?? '';
        $this->value_settings = $data['valueSettings'] ?? null;
        $this->counting_type = $data['countingType'] ?? '';
        $this->attribution_model = $data['attributionModel'] ?? '';
        $this->click_through_window = $data['clickThroughWindow'] ?? 0;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->location_id !== null) {
            $result['locationId'] = $this->location_id;
        }
        if ($this->conversion_id !== null) {
            $result['conversionId'] = $this->conversion_id;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->type !== null) {
            $result['type'] = $this->type;
        }
        if ($this->category !== null) {
            $result['category'] = $this->category;
        }
        if ($this->value_settings !== null) {
            $result['valueSettings'] = $this->value_settings;
        }
        if ($this->counting_type !== null) {
            $result['countingType'] = $this->counting_type;
        }
        if ($this->attribution_model !== null) {
            $result['attributionModel'] = $this->attribution_model;
        }
        if ($this->click_through_window !== null) {
            $result['clickThroughWindow'] = $this->click_through_window;
        }
        return $result;
    }
}
