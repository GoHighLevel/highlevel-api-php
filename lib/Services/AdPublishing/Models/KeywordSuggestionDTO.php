<?php

namespace HighLevel\Services\AdPublishing\Models;

/**
 * KeywordSuggestionDTO model
 * 
 * @package HighLevel\Services\AdPublishing\Models
 */
class KeywordSuggestionDTO
{
    /**
     * @var string
     */
    public string $url;

    /**
     * @var string|null
     */
    public ?string $language_code = null;

    /**
     * @var array&lt;string&gt;|null
     */
    public ?array $locations = null;

    /**
     * @var array&lt;string&gt;|null
     */
    public ?array $keywords = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->url = $data['url'] ?? '';
        $this->language_code = $data['languageCode'] ?? null;
        $this->locations = $data['locations'] ?? null;
        $this->keywords = $data['keywords'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->url !== null) {
            $result['url'] = $this->url;
        }
        if ($this->language_code !== null) {
            $result['languageCode'] = $this->language_code;
        }
        if ($this->locations !== null) {
            $result['locations'] = $this->locations;
        }
        if ($this->keywords !== null) {
            $result['keywords'] = $this->keywords;
        }
        return $result;
    }
}
