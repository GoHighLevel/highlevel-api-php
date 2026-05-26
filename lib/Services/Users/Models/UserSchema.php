<?php

namespace HighLevel\Services\Users\Models;

/**
 * UserSchema model
 * 
 * @package HighLevel\Services\Users\Models
 */
class UserSchema
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
     * @var PermissionsDto|null
     */
    public ?PermissionsDto $permissions = null;

    /**
     * @var string|null
     */
    public ?string $scopes = null;

    /**
     * @var RoleSchema|null
     */
    public ?RoleSchema $roles = null;

    /**
     * @var bool|null
     */
    public ?bool $deleted = null;

    /**
     * @var array&lt;string, mixed&gt;|null
     */
    public ?array $lc_phone = null;

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
        $this->id = $data['id'] ?? null;
        $this->name = $data['name'] ?? null;
        $this->first_name = $data['firstName'] ?? null;
        $this->last_name = $data['lastName'] ?? null;
        $this->email = $data['email'] ?? null;
        $this->phone = $data['phone'] ?? null;
        $this->extension = $data['extension'] ?? null;
        // Handle single PermissionsDto object
        if (isset($data['permissions']) && is_array($data['permissions'])) {
            $this->permissions = new PermissionsDto($data['permissions']);
        } else {
            $this->permissions = $data['permissions'] ?? null;
        }
        $this->scopes = $data['scopes'] ?? null;
        // Handle single RoleSchema object
        if (isset($data['roles']) && is_array($data['roles'])) {
            $this->roles = new RoleSchema($data['roles']);
        } else {
            $this->roles = $data['roles'] ?? null;
        }
        $this->deleted = $data['deleted'] ?? null;
        $this->lc_phone = $data['lcPhone'] ?? null;
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
