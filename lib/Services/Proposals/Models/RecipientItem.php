<?php

namespace HighLevel\Services\Proposals\Models;

/**
 * RecipientItem model
 * 
 * @package HighLevel\Services\Proposals\Models
 */
class RecipientItem
{
    /**
     * @var string
     */
    public string $id;

    /**
     * @var string|null
     */
    public ?string $first_name = null;

    /**
     * @var string|null
     */
    public ?string $last_name = null;

    /**
     * @var string
     */
    public string $email;

    /**
     * @var string|null
     */
    public ?string $phone_number = null;

    /**
     * @var string|null
     */
    public ?string $phone = null;

    /**
     * @var bool
     */
    public bool $has_completed;

    /**
     * @var string
     */
    public string $role;

    /**
     * @var bool
     */
    public bool $is_primary;

    /**
     * @var float
     */
    public float $signing_order;

    /**
     * @var string|null
     */
    public ?string $img_url = null;

    /**
     * @var string|null
     */
    public ?string $ip = null;

    /**
     * @var string|null
     */
    public ?string $user_agent = null;

    /**
     * @var string|null
     */
    public ?string $signed_date = null;

    /**
     * @var string|null
     */
    public ?string $contact_name = null;

    /**
     * @var string|null
     */
    public ?string $country = null;

    /**
     * @var string|null
     */
    public ?string $entity_name = null;

    /**
     * @var string|null
     */
    public ?string $initials_img_url = null;

    /**
     * @var string|null
     */
    public ?string $last_viewed_at = null;

    /**
     * @var string|null
     */
    public ?string $share_link = null;

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
        $this->id = $data['id'] ?? '';
        $this->first_name = $data['firstName'] ?? null;
        $this->last_name = $data['lastName'] ?? null;
        $this->email = $data['email'] ?? '';
        $this->phone_number = $data['phoneNumber'] ?? null;
        $this->phone = $data['phone'] ?? null;
        $this->has_completed = $data['hasCompleted'] ?? false;
        $this->role = $data['role'] ?? '';
        $this->is_primary = $data['isPrimary'] ?? false;
        $this->signing_order = $data['signingOrder'] ?? 0;
        $this->img_url = $data['imgUrl'] ?? null;
        $this->ip = $data['ip'] ?? null;
        $this->user_agent = $data['userAgent'] ?? null;
        $this->signed_date = $data['signedDate'] ?? null;
        $this->contact_name = $data['contactName'] ?? null;
        $this->country = $data['country'] ?? null;
        $this->entity_name = $data['entityName'] ?? null;
        $this->initials_img_url = $data['initialsImgUrl'] ?? null;
        $this->last_viewed_at = $data['lastViewedAt'] ?? null;
        $this->share_link = $data['shareLink'] ?? null;
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
