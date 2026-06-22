<?php

namespace HighLevel\Services\SocialPlanner\Models;

/**
 * AttachTwitterAccountDTO model
 * 
 * @package HighLevel\Services\SocialPlanner\Models
 */
class AttachTwitterAccountDTO
{
    /**
     * @var string|null
     */
    public ?string $origin_id = null;

    /**
     * @var string|null
     */
    public ?string $name = null;

    /**
     * @var string|null
     */
    public ?string $username = null;

    /**
     * @var string|null
     */
    public ?string $avatar = null;

    /**
     * @var bool|null
     */
    public ?bool $protected = null;

    /**
     * @var bool|null
     */
    public ?bool $verified = null;

    /**
     * @var string|null
     */
    public ?string $company_id = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->origin_id = $data['originId'] ?? null;
        $this->name = $data['name'] ?? null;
        $this->username = $data['username'] ?? null;
        $this->avatar = $data['avatar'] ?? null;
        $this->protected = $data['protected'] ?? null;
        $this->verified = $data['verified'] ?? null;
        $this->company_id = $data['companyId'] ?? null;
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
        if ($this->username !== null) {
            $result['username'] = $this->username;
        }
        if ($this->avatar !== null) {
            $result['avatar'] = $this->avatar;
        }
        if ($this->protected !== null) {
            $result['protected'] = $this->protected;
        }
        if ($this->verified !== null) {
            $result['verified'] = $this->verified;
        }
        if ($this->company_id !== null) {
            $result['companyId'] = $this->company_id;
        }
        return $result;
    }
}
