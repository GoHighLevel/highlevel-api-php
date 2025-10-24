<?php

namespace HighLevel\Services\Surveys\Models;

/**
 * EventDataSchema model
 * 
 * @package HighLevel\Services\Surveys\Models
 */
class EventDataSchema
{
    /**
     * @var string|null
     */
    public ?string $fbc = null;

    /**
     * @var string|null
     */
    public ?string $fbp = null;

    /**
     * @var PageDetailsSchema|null
     */
    public ?PageDetailsSchema $page = null;

    /**
     * @var string|null
     */
    public ?string $type = null;

    /**
     * @var string|null
     */
    public ?string $domain = null;

    /**
     * @var string|null
     */
    public ?string $medium = null;

    /**
     * @var string|null
     */
    public ?string $source = null;

    /**
     * @var string|null
     */
    public ?string $version = null;

    /**
     * @var string|null
     */
    public ?string $ad_source = null;

    /**
     * @var string|null
     */
    public ?string $medium_id = null;

    /**
     * @var string|null
     */
    public ?string $parent_id = null;

    /**
     * @var string|null
     */
    public ?string $referrer = null;

    /**
     * @var string|null
     */
    public ?string $fb_event_id = null;

    /**
     * @var float|null
     */
    public ?float $timestamp = null;

    /**
     * @var string|null
     */
    public ?string $parent_name = null;

    /**
     * @var string|null
     */
    public ?string $fingerprint = null;

    /**
     * @var string|null
     */
    public ?string $page_visit_type = null;

    /**
     * @var mixed
     */
    public mixed $contact_session_ids;

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
        $this->fbc = $data['fbc'] ?? null;
        $this->fbp = $data['fbp'] ?? null;
        // Handle single PageDetailsSchema object
        if (isset($data['page']) && is_array($data['page'])) {
            $this->page = new PageDetailsSchema($data['page']);
        } else {
            $this->page = $data['page'] ?? null;
        }
        $this->type = $data['type'] ?? null;
        $this->domain = $data['domain'] ?? null;
        $this->medium = $data['medium'] ?? null;
        $this->source = $data['source'] ?? null;
        $this->version = $data['version'] ?? null;
        $this->ad_source = $data['adSource'] ?? null;
        $this->medium_id = $data['mediumId'] ?? null;
        $this->parent_id = $data['parentId'] ?? null;
        $this->referrer = $data['referrer'] ?? null;
        $this->fb_event_id = $data['fbEventId'] ?? null;
        $this->timestamp = $data['timestamp'] ?? null;
        $this->parent_name = $data['parentName'] ?? null;
        $this->fingerprint = $data['fingerprint'] ?? null;
        $this->page_visit_type = $data['pageVisitType'] ?? null;
        $this->contact_session_ids = $data['contactSessionIds'] ?? null;
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
