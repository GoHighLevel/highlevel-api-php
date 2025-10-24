<?php

namespace HighLevel\Services\Contacts\Models;

/**
 * AttributionSource model
 * 
 * @package HighLevel\Services\Contacts\Models
 */
class AttributionSource
{
    /**
     * @var string
     */
    public string $url;

    /**
     * @var string|null
     */
    public ?string $campaign = null;

    /**
     * @var string|null
     */
    public ?string $utm_source = null;

    /**
     * @var string|null
     */
    public ?string $utm_medium = null;

    /**
     * @var string|null
     */
    public ?string $utm_content = null;

    /**
     * @var string|null
     */
    public ?string $referrer = null;

    /**
     * @var string|null
     */
    public ?string $campaign_id = null;

    /**
     * @var string|null
     */
    public ?string $fbclid = null;

    /**
     * @var string|null
     */
    public ?string $gclid = null;

    /**
     * @var string|null
     */
    public ?string $msclikid = null;

    /**
     * @var string|null
     */
    public ?string $dclid = null;

    /**
     * @var string|null
     */
    public ?string $fbc = null;

    /**
     * @var string|null
     */
    public ?string $fbp = null;

    /**
     * @var string|null
     */
    public ?string $fb_event_id = null;

    /**
     * @var string|null
     */
    public ?string $user_agent = null;

    /**
     * @var string|null
     */
    public ?string $ip = null;

    /**
     * @var string|null
     */
    public ?string $medium = null;

    /**
     * @var string|null
     */
    public ?string $medium_id = null;

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
        $this->url = $data['url'] ?? '';
        $this->campaign = $data['campaign'] ?? null;
        $this->utm_source = $data['utmSource'] ?? null;
        $this->utm_medium = $data['utmMedium'] ?? null;
        $this->utm_content = $data['utmContent'] ?? null;
        $this->referrer = $data['referrer'] ?? null;
        $this->campaign_id = $data['campaignId'] ?? null;
        $this->fbclid = $data['fbclid'] ?? null;
        $this->gclid = $data['gclid'] ?? null;
        $this->msclikid = $data['msclikid'] ?? null;
        $this->dclid = $data['dclid'] ?? null;
        $this->fbc = $data['fbc'] ?? null;
        $this->fbp = $data['fbp'] ?? null;
        $this->fb_event_id = $data['fbEventId'] ?? null;
        $this->user_agent = $data['userAgent'] ?? null;
        $this->ip = $data['ip'] ?? null;
        $this->medium = $data['medium'] ?? null;
        $this->medium_id = $data['mediumId'] ?? null;
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
