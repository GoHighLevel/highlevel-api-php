<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\SocialPlanner\Models;

/**
 * AttachPinterestAccountDTO model
 * 
 * @package HighLevel\Services\SocialPlanner\Models
 */
class AttachPinterestAccountDTO
{
    /**
     * @var string
     */
    public string $origin_id;

    /**
     * @var string|null
     */
    public ?string $name = null;

    /**
     * @var string|null
     */
    public ?string $avatar = null;

    /**
     * @var bool|null
     */
    public ?bool $verified = null;

    /**
     * @var string|null
     */
    public ?string $username = null;

    /**
     * @var string|null
     */
    public ?string $website_url = null;

    /**
     * @var string|null
     */
    public ?string $company_id = null;

    /**
     * @var string|null
     */
    public ?string $type = null;

    /**
     * @var string|null
     */
    public ?string $origin_account_type = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->origin_id = $data['originId'] ?? '';
        $this->name = $data['name'] ?? null;
        $this->avatar = $data['avatar'] ?? null;
        $this->verified = $data['verified'] ?? null;
        $this->username = $data['username'] ?? null;
        $this->website_url = $data['websiteUrl'] ?? null;
        $this->company_id = $data['companyId'] ?? null;
        $this->type = $data['type'] ?? null;
        $this->origin_account_type = $data['originAccountType'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->origin_id !== null) {
            $result['originId'] = $this->origin_id;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->avatar !== null) {
            $result['avatar'] = $this->avatar;
        }
        if ($this->verified !== null) {
            $result['verified'] = $this->verified;
        }
        if ($this->username !== null) {
            $result['username'] = $this->username;
        }
        if ($this->website_url !== null) {
            $result['websiteUrl'] = $this->website_url;
        }
        if ($this->company_id !== null) {
            $result['companyId'] = $this->company_id;
        }
        if ($this->type !== null) {
            $result['type'] = $this->type;
        }
        if ($this->origin_account_type !== null) {
            $result['originAccountType'] = $this->origin_account_type;
        }
        return $result;
    }
}
