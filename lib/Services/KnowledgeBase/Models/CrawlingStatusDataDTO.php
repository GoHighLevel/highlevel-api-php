<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\KnowledgeBase\Models;

/**
 * CrawlingStatusDataDTO model
 * 
 * @package HighLevel\Services\KnowledgeBase\Models
 */
class CrawlingStatusDataDTO
{
    /**
     * @var array&lt;CrawlingAggregateDTO&gt;
     */
    public array $aggregate;

    /**
     * @var mixed
     */
    public $operation_details;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        // Handle array of CrawlingAggregateDTO objects
        if (isset($data['aggregate']) && is_array($data['aggregate'])) {
            $this->aggregate = array_map(function($item) {
                return is_array($item) ? new CrawlingAggregateDTO($item) : $item;
            }, $data['aggregate']);
        } else {
            $this->aggregate = $data['aggregate'] ?? [];
        }
        $this->operation_details = $data['operationDetails'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->aggregate !== null) {
            $result['aggregate'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->aggregate);
        }
        if ($this->operation_details !== null) {
            $result['operationDetails'] = $this->operation_details;
        }
        return $result;
    }
}
