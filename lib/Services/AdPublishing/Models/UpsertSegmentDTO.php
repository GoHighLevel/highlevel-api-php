<?php

namespace HighLevel\Services\AdPublishing\Models;

/**
 * UpsertSegmentDTO model
 * 
 * @package HighLevel\Services\AdPublishing\Models
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
    public $rule_based_user_list;

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
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->description !== null) {
            $result['description'] = $this->description;
        }
        if ($this->members !== null) {
            $result['members'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->members);
        }
        if ($this->status !== null) {
            $result['status'] = $this->status;
        }
        if ($this->type !== null) {
            $result['type'] = $this->type;
        }
        if ($this->id !== null) {
            $result['id'] = $this->id;
        }
        if ($this->membership_status !== null) {
            $result['membershipStatus'] = $this->membership_status;
        }
        if ($this->rule_based_user_list !== null) {
            $result['ruleBasedUserList'] = $this->rule_based_user_list;
        }
        if ($this->membership_life_span !== null) {
            $result['membershipLifeSpan'] = $this->membership_life_span;
        }
        if ($this->seed_user_list_ids !== null) {
            $result['seedUserListIds'] = $this->seed_user_list_ids;
        }
        if ($this->country_codes !== null) {
            $result['countryCodes'] = $this->country_codes;
        }
        if ($this->expansion_level !== null) {
            $result['expansionLevel'] = $this->expansion_level;
        }
        return $result;
    }
}
