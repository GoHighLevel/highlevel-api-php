<?php

namespace HighLevel\Services\PhoneSystem\Models;

/**
 * DetailedPhoneNumberDto model
 * 
 * @package HighLevel\Services\PhoneSystem\Models
 */
class DetailedPhoneNumberDto
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
     * @var string
     */
    public string $sid;

    /**
     * @var string
     */
    public string $country_code;

    /**
     * @var array&lt;string, mixed&gt;
     */
    public array $capabilities;

    /**
     * @var string
     */
    public string $type;

    /**
     * @var bool
     */
    public bool $is_default_number;

    /**
     * @var string|null
     */
    public ?string $linked_user = null;

    /**
     * @var array&lt;string&gt;
     */
    public array $linked_ring_all_users;

    /**
     * @var array&lt;string, mixed&gt;|null
     */
    public ?array $inbound_call_service = null;

    /**
     * @var string|null
     */
    public ?string $forwarding_number = null;

    /**
     * @var bool
     */
    public bool $is_group_conversation_enabled;

    /**
     * @var string|null
     */
    public ?string $address_sid = null;

    /**
     * @var string|null
     */
    public ?string $bundle_sid = null;

    /**
     * @var string|null
     */
    public ?string $date_added = null;

    /**
     * @var string|null
     */
    public ?string $date_updated = null;

    /**
     * @var string|null
     */
    public ?string $origin = null;

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
        $this->phone_number = $data['phoneNumber'] ?? '';
        $this->friendly_name = $data['friendlyName'] ?? null;
        $this->sid = $data['sid'] ?? '';
        $this->country_code = $data['countryCode'] ?? '';
        $this->capabilities = $data['capabilities'] ?? null;
        $this->type = $data['type'] ?? '';
        $this->is_default_number = $data['isDefaultNumber'] ?? false;
        $this->linked_user = $data['linkedUser'] ?? null;
        $this->linked_ring_all_users = $data['linkedRingAllUsers'] ?? [];
        $this->inbound_call_service = $data['inboundCallService'] ?? null;
        $this->forwarding_number = $data['forwardingNumber'] ?? null;
        $this->is_group_conversation_enabled = $data['isGroupConversationEnabled'] ?? false;
        $this->address_sid = $data['addressSid'] ?? null;
        $this->bundle_sid = $data['bundleSid'] ?? null;
        $this->date_added = $data['dateAdded'] ?? null;
        $this->date_updated = $data['dateUpdated'] ?? null;
        $this->origin = $data['origin'] ?? null;
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
