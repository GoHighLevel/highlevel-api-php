<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Users\Models;

/**
 * CreateUserDto model
 * 
 * @package HighLevel\Services\Users\Models
 */
class CreateUserDto
{
    /**
     * @var string
     */
    public string $company_id;

    /**
     * @var string
     */
    public string $email;

    /**
     * @var string
     */
    public string $password;

    /**
     * @var string|null
     */
    public ?string $phone = null;

    /**
     * @var string
     */
    public string $type;

    /**
     * @var string
     */
    public string $role;

    /**
     * @var array&lt;string&gt;
     */
    public array $location_ids;

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
     * @var string
     */
    public string $first_name;

    /**
     * @var string
     */
    public string $last_name;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->company_id = $data['companyId'] ?? '';
        $this->email = $data['email'] ?? '';
        $this->password = $data['password'] ?? '';
        $this->phone = $data['phone'] ?? null;
        $this->type = $data['type'] ?? '';
        $this->role = $data['role'] ?? '';
        $this->location_ids = $data['locationIds'] ?? [];
        $this->permissions = $data['permissions'] ?? null;
        $this->scopes = $data['scopes'] ?? null;
        $this->scopes_assigned_to_only = $data['scopesAssignedToOnly'] ?? null;
        $this->profile_photo = $data['profilePhoto'] ?? null;
        $this->twilio_phone = $data['twilioPhone'] ?? null;
        $this->platform_language = $data['platformLanguage'] ?? null;
        $this->first_name = $data['firstName'] ?? '';
        $this->last_name = $data['lastName'] ?? '';
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
        if ($this->first_name !== null) {
            $result['firstName'] = $this->first_name;
        }
        if ($this->last_name !== null) {
            $result['lastName'] = $this->last_name;
        }
        return $result;
    }
}
