<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Users\Models;

/**
 * FilterByEmailDto model
 * 
 * @package HighLevel\Services\Users\Models
 */
class FilterByEmailDto
{
    /**
     * @var string
     */
    public string $company_id;

    /**
     * @var string
     */
    public string $emails;

    /**
     * @var bool|null
     */
    public ?bool $deleted = null;

    /**
     * @var string|null
     */
    public ?string $skip = null;

    /**
     * @var string|null
     */
    public ?string $limit = null;

    /**
     * @var string|null
     */
    public ?string $projection = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->company_id = $data['companyId'] ?? '';
        $this->emails = $data['emails'] ?? '';
        $this->deleted = $data['deleted'] ?? null;
        $this->skip = $data['skip'] ?? null;
        $this->limit = $data['limit'] ?? null;
        $this->projection = $data['projection'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->company_id !== null) {
            $result['companyId'] = $this->company_id;
        }
        if ($this->emails !== null) {
            $result['emails'] = $this->emails;
        }
        if ($this->deleted !== null) {
            $result['deleted'] = $this->deleted;
        }
        if ($this->skip !== null) {
            $result['skip'] = $this->skip;
        }
        if ($this->limit !== null) {
            $result['limit'] = $this->limit;
        }
        if ($this->projection !== null) {
            $result['projection'] = $this->projection;
        }
        return $result;
    }
}
