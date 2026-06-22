<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Surveys\Models;

/**
 * GetSurveysSubmissionSuccessfulResponseDto model
 * 
 * @package HighLevel\Services\Surveys\Models
 */
class GetSurveysSubmissionSuccessfulResponseDto
{
    /**
     * @var array&lt;SubmissionSchema&gt;|null
     */
    public ?array $submissions = null;

    /**
     * @var metaSchema|null
     */
    public ?metaSchema $meta = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        // Handle array of SubmissionSchema objects
        if (isset($data['submissions']) && is_array($data['submissions'])) {
            $this->submissions = array_map(function($item) {
                return is_array($item) ? new SubmissionSchema($item) : $item;
            }, $data['submissions']);
        } else {
            $this->submissions = $data['submissions'] ?? null;
        }
        // Handle single MetaSchema object
        if (isset($data['meta']) && is_array($data['meta'])) {
            $this->meta = new MetaSchema($data['meta']);
        } else {
            $this->meta = $data['meta'] ?? null;
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
        if ($this->submissions !== null) {
            $result['submissions'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->submissions);
        }
        if ($this->meta !== null) {
            $result['meta'] = is_object($this->meta) && method_exists($this->meta, 'toArray') 
                ? $this->meta->toArray() 
                : $this->meta;
        }
        return $result;
    }
}
