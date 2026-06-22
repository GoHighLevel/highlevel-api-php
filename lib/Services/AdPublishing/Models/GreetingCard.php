<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\AdPublishing\Models;

/**
 * GreetingCard model
 * 
 * @package HighLevel\Services\AdPublishing\Models
 */
class GreetingCard
{
    /**
     * @var string
     */
    public string $title;

    /**
     * @var string
     */
    public string $style;

    /**
     * @var array&lt;string&gt;
     */
    public array $content;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->title = $data['title'] ?? '';
        $this->style = $data['style'] ?? '';
        $this->content = $data['content'] ?? [];
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->title !== null) {
            $result['title'] = $this->title;
        }
        if ($this->style !== null) {
            $result['style'] = $this->style;
        }
        if ($this->content !== null) {
            $result['content'] = $this->content;
        }
        return $result;
    }
}
