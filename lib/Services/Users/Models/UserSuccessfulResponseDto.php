<?php

namespace HighLevel\Services\Users\Models;

/**
 * UserSuccessfulResponseDto model
 * 
 * @package HighLevel\Services\Users\Models
 */
class UserSuccessfulResponseDto
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
    public ?string $first_name = null;

    /**
     * @var string|null
     */
    public ?string $last_name = null;

    /**
     * @var string|null
     */
    public ?string $email = null;

    /**
     * @var string|null
     */
    public ?string $phone = null;

    /**
     * @var string|null
     */
    public ?string $extension = null;

    /**
     * @var mixed
     */
    public $permissions;

    /**
     * @var string|null
     */
    public ?string $scopes = null;

    /**
     * @var mixed
     */
    public $roles;

    /**
     * @var array&lt;string, mixed&gt;|null
     */
    public ?array $lc_phone = null;

    /**
     * @var string|null
     */
    public ?string $platform_language = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->id = $data['id'] ?? null;
        $this->name = $data['name'] ?? null;
        $this->first_name = $data['firstName'] ?? null;
        $this->last_name = $data['lastName'] ?? null;
        $this->email = $data['email'] ?? null;
        $this->phone = $data['phone'] ?? null;
        $this->extension = $data['extension'] ?? null;
        $this->permissions = $data['permissions'] ?? null;
        $this->scopes = $data['scopes'] ?? null;
        $this->roles = $data['roles'] ?? null;
        $this->lc_phone = $data['lcPhone'] ?? null;
        $this->platform_language = $data['platformLanguage'] ?? null;
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
        if ($this->first_name !== null) {
            $result['firstName'] = $this->first_name;
        }
        if ($this->last_name !== null) {
            $result['lastName'] = $this->last_name;
        }
        if ($this->email !== null) {
            $result['email'] = $this->email;
        }
        if ($this->phone !== null) {
            $result['phone'] = $this->phone;
        }
        if ($this->extension !== null) {
            $result['extension'] = $this->extension;
        }
        if ($this->permissions !== null) {
            $result['permissions'] = $this->permissions;
        }
        if ($this->scopes !== null) {
            $result['scopes'] = $this->scopes;
        }
        if ($this->roles !== null) {
            $result['roles'] = $this->roles;
        }
        if ($this->lc_phone !== null) {
            $result['lcPhone'] = $this->lc_phone;
        }
        if ($this->platform_language !== null) {
            $result['platformLanguage'] = $this->platform_language;
        }
        return $result;
    }
}
