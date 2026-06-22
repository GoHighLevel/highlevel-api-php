<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Surveys\Models;

/**
 * GetSurveysSuccessfulResponseDto model
 * 
 * @package HighLevel\Services\Surveys\Models
 */
class GetSurveysSuccessfulResponseDto
{
    /**
     * @var array&lt;GetSurveysSchema&gt;|null
     */
    public ?array $surveys = null;

    /**
     * @var float|null
     */
    public ?float $total = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        // Handle array of GetSurveysSchema objects
        if (isset($data['surveys']) && is_array($data['surveys'])) {
            $this->surveys = array_map(function($item) {
                return is_array($item) ? new GetSurveysSchema($item) : $item;
            }, $data['surveys']);
        } else {
            $this->surveys = $data['surveys'] ?? null;
        }
        $this->total = $data['total'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->surveys !== null) {
            $result['surveys'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->surveys);
        }
        if ($this->total !== null) {
            $result['total'] = $this->total;
        }
        return $result;
    }
}
