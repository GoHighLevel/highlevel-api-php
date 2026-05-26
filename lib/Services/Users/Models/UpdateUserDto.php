<?php

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
     * @var PermissionsDto|null
     */
    public ?PermissionsDto $permissions = null;

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
     * Raw data storage for models without defined schema
     * @var array<string, mixed>
     */
    private array $data = [];

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
        // Handle single PermissionsDto object
        if (isset($data['permissions']) && is_array($data['permissions'])) {
            $this->permissions = new PermissionsDto($data['permissions']);
        } else {
            $this->permissions = $data['permissions'] ?? null;
        }
        $this->scopes = $data['scopes'] ?? null;
        $this->scopes_assigned_to_only = $data['scopesAssignedToOnly'] ?? null;
        $this->profile_photo = $data['profilePhoto'] ?? null;
        $this->twilio_phone = $data['twilioPhone'] ?? null;
        $this->platform_language = $data['platformLanguage'] ?? null;
        // No defined properties - store raw data for flexible models
        $this->data = $data;
    }

    /**
     * Convert model to array (for models without defined schema)
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        return $this->data;
    }

    /**
     * Magic getter for accessing data properties
     * 
     * @param string $name Property name
     * @return mixed Property value or null if not found
     */
    public function __get(string $name)
    {
        return $this->data[$name] ?? null;
    }

    /**
     * Magic setter for setting data properties
     * 
     * @param string $name Property name
     * @param mixed $value Property value
     * @return void
     */
    public function __set(string $name, $value): void
    {
        $this->data[$name] = $value;
    }

    /**
     * Magic isset for checking if data property exists
     * 
     * @param string $name Property name
     * @return bool True if property exists, false otherwise
     */
    public function __isset(string $name): bool
    {
        return isset($this->data[$name]);
    }

    /**
     * Get all data as array
     * 
     * @return array<string, mixed>
     */
    public function getData(): array
    {
        return $this->data;
    }
}
