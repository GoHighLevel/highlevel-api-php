<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\KnowledgeBase\Models;

/**
 * ListFaqsResponseDTO model
 * 
 * @package HighLevel\Services\KnowledgeBase\Models
 */
class ListFaqsResponseDTO
{
    /**
     * @var float
     */
    public float $count;

    /**
     * @var array&lt;FaqResponseDTO&gt;
     */
    public array $faqs;

    /**
     * @var string|null
     */
    public ?string $last_faq_id = null;

    /**
     * @var bool|null
     */
    public ?bool $has_more = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->count = $data['count'] ?? 0;
        // Handle array of FaqResponseDTO objects
        if (isset($data['faqs']) && is_array($data['faqs'])) {
            $this->faqs = array_map(function($item) {
                return is_array($item) ? new FaqResponseDTO($item) : $item;
            }, $data['faqs']);
        } else {
            $this->faqs = $data['faqs'] ?? [];
        }
        $this->last_faq_id = $data['lastFaqId'] ?? null;
        $this->has_more = $data['hasMore'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->count !== null) {
            $result['count'] = $this->count;
        }
        if ($this->faqs !== null) {
            $result['faqs'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->faqs);
        }
        if ($this->last_faq_id !== null) {
            $result['lastFaqId'] = $this->last_faq_id;
        }
        if ($this->has_more !== null) {
            $result['hasMore'] = $this->has_more;
        }
        return $result;
    }
}
