<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\AdPublishing\Models;

/**
 * MemberDTO model
 * 
 * @package HighLevel\Services\AdPublishing\Models
 */
class MemberDTO
{
    /**
     * @var string
     */
    public string $member_type;

    /**
     * @var string|null
     */
    public ?string $keyword = null;

    /**
     * @var string|null
     */
    public ?string $url = null;

    /**
     * @var string|null
     */
    public ?string $app = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->member_type = $data['memberType'] ?? '';
        $this->keyword = $data['keyword'] ?? null;
        $this->url = $data['url'] ?? null;
        $this->app = $data['app'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->member_type !== null) {
            $result['memberType'] = $this->member_type;
        }
        if ($this->keyword !== null) {
            $result['keyword'] = $this->keyword;
        }
        if ($this->url !== null) {
            $result['url'] = $this->url;
        }
        if ($this->app !== null) {
            $result['app'] = $this->app;
        }
        return $result;
    }
}
