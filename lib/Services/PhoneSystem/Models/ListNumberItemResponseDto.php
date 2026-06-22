<?php

namespace HighLevel\Services\PhoneSystem\Models;

/**
 * ListNumberItemResponseDto model
 * 
 * @package HighLevel\Services\PhoneSystem\Models
 */
class ListNumberItemResponseDto
{
    /**
     * @var string
     */
    public string $phone_number;

    /**
     * @var string|null
     */
    public ?string $friendly_name = null;

    /**
     * @var string|null
     */
    public ?string $sid = null;

    /**
     * @var string|null
     */
    public ?string $country_code = null;

    /**
     * @var mixed
     */
    public $capabilities;

    /**
     * @var string|null
     */
    public ?string $type = null;

    /**
     * @var bool|null
     */
    public ?bool $is_default_number = null;

    /**
     * @var string|null
     */
    public ?string $linked_user = null;

    /**
     * @var array&lt;string&gt;|null
     */
    public ?array $linked_ring_all_users = null;

    /**
     * @var array&lt;string, mixed&gt;|null
     */
    public ?array $inbound_call_service = null;

    /**
     * @var string|null
     */
    public ?string $forwarding_number = null;

    /**
     * @var bool|null
     */
    public ?bool $is_group_conversation_enabled = null;

    /**
     * @var string|null
     */
    public ?string $address_sid = null;

    /**
     * @var string|null
     */
    public ?string $bundle_sid = null;

    /**
     * @var array&lt;string, mixed&gt;|null
     */
    public ?array $date_added = null;

    /**
     * @var array&lt;string, mixed&gt;|null
     */
    public ?array $date_updated = null;

    /**
     * @var array&lt;string, mixed&gt;|null
     */
    public ?array $date_created = null;

    /**
     * @var string|null
     */
    public ?string $origin = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->phone_number = $data['phoneNumber'] ?? '';
        $this->friendly_name = $data['friendlyName'] ?? null;
        $this->sid = $data['sid'] ?? null;
        $this->country_code = $data['countryCode'] ?? null;
        $this->capabilities = $data['capabilities'] ?? null;
        $this->type = $data['type'] ?? null;
        $this->is_default_number = $data['isDefaultNumber'] ?? null;
        $this->linked_user = $data['linkedUser'] ?? null;
        $this->linked_ring_all_users = $data['linkedRingAllUsers'] ?? null;
        $this->inbound_call_service = $data['inboundCallService'] ?? null;
        $this->forwarding_number = $data['forwardingNumber'] ?? null;
        $this->is_group_conversation_enabled = $data['isGroupConversationEnabled'] ?? null;
        $this->address_sid = $data['addressSid'] ?? null;
        $this->bundle_sid = $data['bundleSid'] ?? null;
        $this->date_added = $data['dateAdded'] ?? null;
        $this->date_updated = $data['dateUpdated'] ?? null;
        $this->date_created = $data['dateCreated'] ?? null;
        $this->origin = $data['origin'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->phone_number !== null) {
            $result['phoneNumber'] = $this->phone_number;
        }
        if ($this->friendly_name !== null) {
            $result['friendlyName'] = $this->friendly_name;
        }
        if ($this->sid !== null) {
            $result['sid'] = $this->sid;
        }
        if ($this->country_code !== null) {
            $result['countryCode'] = $this->country_code;
        }
        if ($this->capabilities !== null) {
            $result['capabilities'] = $this->capabilities;
        }
        if ($this->type !== null) {
            $result['type'] = $this->type;
        }
        if ($this->is_default_number !== null) {
            $result['isDefaultNumber'] = $this->is_default_number;
        }
        if ($this->linked_user !== null) {
            $result['linkedUser'] = $this->linked_user;
        }
        if ($this->linked_ring_all_users !== null) {
            $result['linkedRingAllUsers'] = $this->linked_ring_all_users;
        }
        if ($this->inbound_call_service !== null) {
            $result['inboundCallService'] = $this->inbound_call_service;
        }
        if ($this->forwarding_number !== null) {
            $result['forwardingNumber'] = $this->forwarding_number;
        }
        if ($this->is_group_conversation_enabled !== null) {
            $result['isGroupConversationEnabled'] = $this->is_group_conversation_enabled;
        }
        if ($this->address_sid !== null) {
            $result['addressSid'] = $this->address_sid;
        }
        if ($this->bundle_sid !== null) {
            $result['bundleSid'] = $this->bundle_sid;
        }
        if ($this->date_added !== null) {
            $result['dateAdded'] = $this->date_added;
        }
        if ($this->date_updated !== null) {
            $result['dateUpdated'] = $this->date_updated;
        }
        if ($this->date_created !== null) {
            $result['dateCreated'] = $this->date_created;
        }
        if ($this->origin !== null) {
            $result['origin'] = $this->origin;
        }
        return $result;
    }
}
