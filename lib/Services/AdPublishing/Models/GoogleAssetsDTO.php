<?php

namespace HighLevel\Services\AdPublishing\Models;

/**
 * GoogleAssetsDTO model
 * 
 * @package HighLevel\Services\AdPublishing\Models
 */
class GoogleAssetsDTO
{
    /**
     * @var array&lt;string&gt;|null
     */
    public ?array $calls = null;

    /**
     * @var array&lt;string&gt;|null
     */
    public ?array $sitelinks = null;

    /**
     * @var string|null
     */
    public ?string $lead_form = null;

    /**
     * @var array&lt;GoogleAssetImageDTO&gt;|null
     */
    public ?array $images = null;

    /**
     * @var mixed
     */
    public $business_logo;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->calls = $data['calls'] ?? null;
        $this->sitelinks = $data['sitelinks'] ?? null;
        $this->lead_form = $data['leadForm'] ?? null;
        // Handle array of GoogleAssetImageDTO objects
        if (isset($data['images']) && is_array($data['images'])) {
            $this->images = array_map(function($item) {
                return is_array($item) ? new GoogleAssetImageDTO($item) : $item;
            }, $data['images']);
        } else {
            $this->images = $data['images'] ?? null;
        }
        $this->business_logo = $data['businessLogo'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->calls !== null) {
            $result['calls'] = $this->calls;
        }
        if ($this->sitelinks !== null) {
            $result['sitelinks'] = $this->sitelinks;
        }
        if ($this->lead_form !== null) {
            $result['leadForm'] = $this->lead_form;
        }
        if ($this->images !== null) {
            $result['images'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->images);
        }
        if ($this->business_logo !== null) {
            $result['businessLogo'] = $this->business_logo;
        }
        return $result;
    }
}
