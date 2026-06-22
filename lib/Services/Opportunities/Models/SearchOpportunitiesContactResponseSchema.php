<?php

namespace HighLevel\Services\Opportunities\Models;

/**
 * SearchOpportunitiesContactResponseSchema model
 * 
 * @package HighLevel\Services\Opportunities\Models
 */
class SearchOpportunitiesContactResponseSchema
{
    /**
     * @var string|null
     */
    public ?string $id = null;

    /**
     * @var string|null
     */
    public ?string $name = null;

    /**
     * @var string|null
     */
    public ?string $company_name = null;

    /**
     * @var string|null
     */
    public ?string $email = null;

    /**
     * @var string|null
     */
    public ?string $phone = null;

    /**
     * @var array&lt;string&gt;|null
     */
    public ?array $tags = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->id = $data['id'] ?? null;
        $this->name = $data['name'] ?? null;
        $this->company_name = $data['companyName'] ?? null;
        $this->email = $data['email'] ?? null;
        $this->phone = $data['phone'] ?? null;
        $this->tags = $data['tags'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->id !== null) {
            $result['id'] = $this->id;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->company_name !== null) {
            $result['companyName'] = $this->company_name;
        }
        if ($this->email !== null) {
            $result['email'] = $this->email;
        }
        if ($this->phone !== null) {
            $result['phone'] = $this->phone;
        }
        if ($this->tags !== null) {
            $result['tags'] = $this->tags;
        }
        return $result;
    }
}
