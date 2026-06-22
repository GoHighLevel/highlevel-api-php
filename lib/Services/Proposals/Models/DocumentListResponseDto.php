<?php

namespace HighLevel\Services\Proposals\Models;

/**
 * DocumentListResponseDto model
 * 
 * @package HighLevel\Services\Proposals\Models
 */
class DocumentListResponseDto
{
    /**
     * @var array&lt;DocumentDto&gt;
     */
    public array $documents;

    /**
     * @var float
     */
    public float $total;

    /**
     * @var float|null
     */
    public ?float $white_label_base_url = null;

    /**
     * @var float|null
     */
    public ?float $white_label_base_url_for_invoice = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        // Handle array of DocumentDto objects
        if (isset($data['documents']) && is_array($data['documents'])) {
            $this->documents = array_map(function($item) {
                return is_array($item) ? new DocumentDto($item) : $item;
            }, $data['documents']);
        } else {
            $this->documents = $data['documents'] ?? [];
        }
        $this->total = $data['total'] ?? 0;
        $this->white_label_base_url = $data['whiteLabelBaseUrl'] ?? null;
        $this->white_label_base_url_for_invoice = $data['whiteLabelBaseUrlForInvoice'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->documents !== null) {
            $result['documents'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->documents);
        }
        if ($this->total !== null) {
            $result['total'] = $this->total;
        }
        if ($this->white_label_base_url !== null) {
            $result['whiteLabelBaseUrl'] = $this->white_label_base_url;
        }
        if ($this->white_label_base_url_for_invoice !== null) {
            $result['whiteLabelBaseUrlForInvoice'] = $this->white_label_base_url_for_invoice;
        }
        return $result;
    }
}
