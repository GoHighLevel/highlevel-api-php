<?php

namespace HighLevel\Services\Locations\Models;

/**
 * GetLocationByIdSchema model
 * 
 * @package HighLevel\Services\Locations\Models
 */
class GetLocationByIdSchema
{
    /**
     * @var string|null
     */
    public ?string $id = null;

    /**
     * @var string|null
     */
    public ?string $company_id = null;

    /**
     * @var string|null
     */
    public ?string $name = null;

    /**
     * @var string|null
     */
    public ?string $domain = null;

    /**
     * @var string|null
     */
    public ?string $address = null;

    /**
     * @var string|null
     */
    public ?string $city = null;

    /**
     * @var string|null
     */
    public ?string $state = null;

    /**
     * @var string|null
     */
    public ?string $logo_url = null;

    /**
     * @var string|null
     */
    public ?string $country = null;

    /**
     * @var string|null
     */
    public ?string $postal_code = null;

    /**
     * @var string|null
     */
    public ?string $website = null;

    /**
     * @var string|null
     */
    public ?string $timezone = null;

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
     * @var BusinessSchema|null
     */
    public ?BusinessSchema $business = null;

    /**
     * @var SocialSchema|null
     */
    public ?SocialSchema $social = null;

    /**
     * @var SettingsSchema|null
     */
    public ?SettingsSchema $settings = null;

    /**
     * @var array&lt;string, mixed&gt;|null
     */
    public ?array $reseller = null;

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
        $this->company_id = $data['companyId'] ?? null;
        $this->name = $data['name'] ?? null;
        $this->domain = $data['domain'] ?? null;
        $this->address = $data['address'] ?? null;
        $this->city = $data['city'] ?? null;
        $this->state = $data['state'] ?? null;
        $this->logo_url = $data['logoUrl'] ?? null;
        $this->country = $data['country'] ?? null;
        $this->postal_code = $data['postalCode'] ?? null;
        $this->website = $data['website'] ?? null;
        $this->timezone = $data['timezone'] ?? null;
        $this->first_name = $data['firstName'] ?? null;
        $this->last_name = $data['lastName'] ?? null;
        $this->email = $data['email'] ?? null;
        $this->phone = $data['phone'] ?? null;
        // Handle single BusinessSchema object
        if (isset($data['business']) && is_array($data['business'])) {
            $this->business = new BusinessSchema($data['business']);
        } else {
            $this->business = $data['business'] ?? null;
        }
        // Handle single SocialSchema object
        if (isset($data['social']) && is_array($data['social'])) {
            $this->social = new SocialSchema($data['social']);
        } else {
            $this->social = $data['social'] ?? null;
        }
        // Handle single SettingsSchema object
        if (isset($data['settings']) && is_array($data['settings'])) {
            $this->settings = new SettingsSchema($data['settings']);
        } else {
            $this->settings = $data['settings'] ?? null;
        }
        $this->reseller = $data['reseller'] ?? null;
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
