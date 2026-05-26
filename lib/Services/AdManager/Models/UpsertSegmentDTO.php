<?php

namespace HighLevel\Services\AdManager\Models;

/**
 * UpsertSegmentDTO model
 * 
 * @package HighLevel\Services\AdManager\Models
 */
class UpsertSegmentDTO
{
    /**
     * @var string
     */
    public string $name;

    /**
     * @var string|null
     */
    public ?string $description = null;

    /**
     * @var array&lt;MemberDTO&gt;|null
     */
    public ?array $members = null;

    /**
     * @var string|null
     */
    public ?string $status = null;

    /**
     * @var string|null
     */
    public ?string $type = null;

    /**
     * @var string|null
     */
    public ?string $id = null;

    /**
     * @var string|null
     */
    public ?string $membership_status = null;

    /**
     * @var mixed
     */
    public mixed $rule_based_user_list;

    /**
     * @var float|null
     */
    public ?float $membership_life_span = null;

    /**
     * @var array&lt;string&gt;|null
     */
    public ?array $seed_user_list_ids = null;

    /**
     * @var array&lt;string&gt;|null
     */
    public ?array $country_codes = null;

    /**
     * @var string|null
     */
    public ?string $expansion_level = null;

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
        $this->name = $data['name'] ?? '';
        $this->description = $data['description'] ?? null;
        // Handle array of MemberDTO objects
        if (isset($data['members']) && is_array($data['members'])) {
            $this->members = array_map(function($item) {
                return is_array($item) ? new MemberDTO($item) : $item;
            }, $data['members']);
        } else {
            $this->members = $data['members'] ?? null;
        }
        $this->status = $data['status'] ?? null;
        $this->type = $data['type'] ?? null;
        $this->id = $data['id'] ?? null;
        $this->membership_status = $data['membershipStatus'] ?? null;
        $this->rule_based_user_list = $data['ruleBasedUserList'] ?? null;
        $this->membership_life_span = $data['membershipLifeSpan'] ?? null;
        $this->seed_user_list_ids = $data['seedUserListIds'] ?? null;
        $this->country_codes = $data['countryCodes'] ?? null;
        $this->expansion_level = $data['expansionLevel'] ?? null;
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
