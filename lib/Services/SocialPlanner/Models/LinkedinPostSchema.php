<?php

namespace HighLevel\Services\SocialPlanner\Models;

/**
 * LinkedinPostSchema model
 * 
 * @package HighLevel\Services\SocialPlanner\Models
 */
class LinkedinPostSchema
{
    /**
     * @var string
     */
    public string $pdf_title;

    /**
     * @var bool
     */
    public bool $post_as_pdf;

    /**
     * @var mixed
     */
    public $poll;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->pdf_title = $data['pdfTitle'] ?? '';
        $this->post_as_pdf = $data['postAsPdf'] ?? false;
        $this->poll = $data['poll'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->pdf_title !== null) {
            $result['pdfTitle'] = $this->pdf_title;
        }
        if ($this->post_as_pdf !== null) {
            $result['postAsPdf'] = $this->post_as_pdf;
        }
        if ($this->poll !== null) {
            $result['poll'] = $this->poll;
        }
        return $result;
    }
}
