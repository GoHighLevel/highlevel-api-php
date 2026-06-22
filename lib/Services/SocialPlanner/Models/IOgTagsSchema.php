<?php

namespace HighLevel\Services\SocialPlanner\Models;

/**
 * IOgTagsSchema model
 * 
 * @package HighLevel\Services\SocialPlanner\Models
 */
class IOgTagsSchema
{
    /**
     * @var string|null
     */
    public ?string $url = null;

    /**
     * @var string|null
     */
    public ?string $og_description = null;

    /**
     * @var mixed
     */
    public $og_image;

    /**
     * @var string|null
     */
    public ?string $og_title = null;

    /**
     * @var string|null
     */
    public ?string $og_url = null;

    /**
     * @var string|null
     */
    public ?string $og_site_name = null;

    /**
     * @var string|null
     */
    public ?string $error = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->url = $data['url'] ?? null;
        $this->og_description = $data['ogDescription'] ?? null;
        $this->og_image = $data['ogImage'] ?? null;
        $this->og_title = $data['ogTitle'] ?? null;
        $this->og_url = $data['ogUrl'] ?? null;
        $this->og_site_name = $data['ogSiteName'] ?? null;
        $this->error = $data['error'] ?? null;
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
        if ($this->og_description !== null) {
            $result['ogDescription'] = $this->og_description;
        }
        if ($this->og_image !== null) {
            $result['ogImage'] = $this->og_image;
        }
        if ($this->og_title !== null) {
            $result['ogTitle'] = $this->og_title;
        }
        if ($this->og_url !== null) {
            $result['ogUrl'] = $this->og_url;
        }
        if ($this->og_site_name !== null) {
            $result['ogSiteName'] = $this->og_site_name;
        }
        if ($this->error !== null) {
            $result['error'] = $this->error;
        }
        return $result;
    }
}
