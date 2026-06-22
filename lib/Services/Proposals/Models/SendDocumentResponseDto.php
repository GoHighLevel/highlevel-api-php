<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Proposals\Models;

/**
 * SendDocumentResponseDto model
 * 
 * @package HighLevel\Services\Proposals\Models
 */
class SendDocumentResponseDto
{
    /**
     * @var bool
     */
    public bool $success;

    /**
     * @var array&lt;ProposalEstimateLinksDto&gt;
     */
    public array $links;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->success = $data['success'] ?? false;
        // Handle array of ProposalEstimateLinksDto objects
        if (isset($data['links']) && is_array($data['links'])) {
            $this->links = array_map(function($item) {
                return is_array($item) ? new ProposalEstimateLinksDto($item) : $item;
            }, $data['links']);
        } else {
            $this->links = $data['links'] ?? [];
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
        if ($this->success !== null) {
            $result['success'] = $this->success;
        }
        if ($this->links !== null) {
            $result['links'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->links);
        }
        return $result;
    }
}
