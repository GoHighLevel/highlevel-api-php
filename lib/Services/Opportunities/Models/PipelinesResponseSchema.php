<?php

namespace HighLevel\Services\Opportunities\Models;

/**
 * PipelinesResponseSchema model
 * 
 * @package HighLevel\Services\Opportunities\Models
 */
class PipelinesResponseSchema
{
    /**
     * @var string|null
     */
    public ?string $id = null;

    /**
     * @var string|null
     */
    public ?string $name = null;

    /**
     * @var array&lt;array&lt;mixed&gt;&gt;|null
     */
    public ?array $stages = null;

    /**
     * @var bool|null
     */
    public ?bool $show_in_funnel = null;

    /**
     * @var bool|null
     */
    public ?bool $show_in_pie_chart = null;

    /**
     * @var string|null
     */
    public ?string $location_id = null;

    /**
     * @var bool|null
     */
    public ?bool $use_opportunity_probability = null;

    /**
     * @var string|null
     */
    public ?string $color_render_mode = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->id = $data['id'] ?? null;
        $this->name = $data['name'] ?? null;
        $this->stages = $data['stages'] ?? null;
        $this->show_in_funnel = $data['showInFunnel'] ?? null;
        $this->show_in_pie_chart = $data['showInPieChart'] ?? null;
        $this->location_id = $data['locationId'] ?? null;
        $this->use_opportunity_probability = $data['useOpportunityProbability'] ?? null;
        $this->color_render_mode = $data['colorRenderMode'] ?? null;
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
            $result['id'] = $this->id;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->stages !== null) {
            $result['stages'] = $this->stages;
        }
        if ($this->show_in_funnel !== null) {
            $result['showInFunnel'] = $this->show_in_funnel;
        }
        if ($this->show_in_pie_chart !== null) {
            $result['showInPieChart'] = $this->show_in_pie_chart;
        }
        if ($this->location_id !== null) {
            $result['locationId'] = $this->location_id;
        }
        if ($this->use_opportunity_probability !== null) {
            $result['useOpportunityProbability'] = $this->use_opportunity_probability;
        }
        if ($this->color_render_mode !== null) {
            $result['colorRenderMode'] = $this->color_render_mode;
        }
        return $result;
    }
}
