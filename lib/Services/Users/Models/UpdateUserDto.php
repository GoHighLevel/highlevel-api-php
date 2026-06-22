<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Users\Models;

/**
 * UpdateUserDto model
 * 
 * @package HighLevel\Services\Users\Models
 */
class UpdateUserDto
{
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
    public ?string $password = null;

    /**
     * @var string|null
     */
    public ?string $phone = null;

    /**
     * @var string|null
     */
    public ?string $type = null;

    /**
     * @var string|null
     */
    public ?string $role = null;

    /**
     * @var string|null
     */
    public ?string $company_id = null;

    /**
     * @var array&lt;string&gt;|null
     */
    public ?array $location_ids = null;

    /**
     * @var mixed
     */
    public $permissions;

    /**
     * @var array&lt;string&gt;|null
     */
    public ?array $scopes = null;

    /**
     * @var array&lt;string&gt;|null
     */
    public ?array $scopes_assigned_to_only = null;

    /**
     * @var string|null
     */
    public ?string $profile_photo = null;

    /**
     * @var array&lt;string, mixed&gt;|null
     */
    public ?array $twilio_phone = null;

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
        $this->first_name = $data['firstName'] ?? null;
        $this->last_name = $data['lastName'] ?? null;
        $this->email = $data['email'] ?? null;
        $this->password = $data['password'] ?? null;
        $this->phone = $data['phone'] ?? null;
        $this->type = $data['type'] ?? null;
        $this->role = $data['role'] ?? null;
        $this->company_id = $data['companyId'] ?? null;
        $this->location_ids = $data['locationIds'] ?? null;
        $this->permissions = $data['permissions'] ?? null;
        $this->scopes = $data['scopes'] ?? null;
        $this->scopes_assigned_to_only = $data['scopesAssignedToOnly'] ?? null;
        $this->profile_photo = $data['profilePhoto'] ?? null;
        $this->twilio_phone = $data['twilioPhone'] ?? null;
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
        if ($this->first_name !== null) {
            $result['firstName'] = $this->first_name;
        }
        if ($this->last_name !== null) {
            $result['lastName'] = $this->last_name;
        }
        if ($this->email !== null) {
            $result['email'] = $this->email;
        }
        if ($this->password !== null) {
            $result['password'] = $this->password;
        }
        if ($this->phone !== null) {
            $result['phone'] = $this->phone;
        }
        if ($this->type !== null) {
            $result['type'] = $this->type;
        }
        if ($this->role !== null) {
            $result['role'] = $this->role;
        }
        if ($this->company_id !== null) {
            $result['companyId'] = $this->company_id;
        }
        if ($this->location_ids !== null) {
            $result['locationIds'] = $this->location_ids;
        }
        if ($this->permissions !== null) {
            $result['permissions'] = $this->permissions;
        }
        if ($this->scopes !== null) {
            $result['scopes'] = $this->scopes;
        }
        if ($this->scopes_assigned_to_only !== null) {
            $result['scopesAssignedToOnly'] = $this->scopes_assigned_to_only;
        }
        if ($this->profile_photo !== null) {
            $result['profilePhoto'] = $this->profile_photo;
        }
        if ($this->twilio_phone !== null) {
            $result['twilioPhone'] = $this->twilio_phone;
        }
        if ($this->platform_language !== null) {
            $result['platformLanguage'] = $this->platform_language;
        }
        return $result;
    }
}
