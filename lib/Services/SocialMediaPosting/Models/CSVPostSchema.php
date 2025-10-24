<?php

namespace HighLevel\Services\SocialMediaPosting\Models;

/**
 * CSVPostSchema model
 * 
 * @package HighLevel\Services\SocialMediaPosting\Models
 */
class CSVPostSchema
{
    /**
     * @var array&lt;string&gt;|null
     */
    public ?array $account_ids = null;

    /**
     * @var mixed
     */
    public mixed $link;

    /**
     * @var array&lt;CSVMediaResponseSchema&gt;|null
     */
    public ?array $medias = null;

    /**
     * @var string|null
     */
    public ?string $schedule_date = null;

    /**
     * @var string|null
     */
    public ?string $summary = null;

    /**
     * @var string|null
     */
    public ?string $follow_up_comment = null;

    /**
     * @var array&lt;string, mixed&gt;|null
     */
    public ?array $type = null;

    /**
     * @var mixed
     */
    public mixed $tiktok_post_details;

    /**
     * @var mixed
     */
    public mixed $gmb_post_details;

    /**
     * @var string|null
     */
    public ?string $error_message = null;

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
        $this->account_ids = $data['accountIds'] ?? null;
        $this->link = $data['link'] ?? null;
        // Handle array of CSVMediaResponseSchema objects
        if (isset($data['medias']) && is_array($data['medias'])) {
            $this->medias = array_map(function($item) {
                return is_array($item) ? new CSVMediaResponseSchema($item) : $item;
            }, $data['medias']);
        } else {
            $this->medias = $data['medias'] ?? null;
        }
        $this->schedule_date = $data['scheduleDate'] ?? null;
        $this->summary = $data['summary'] ?? null;
        $this->follow_up_comment = $data['followUpComment'] ?? null;
        $this->type = $data['type'] ?? null;
        $this->tiktok_post_details = $data['tiktokPostDetails'] ?? null;
        $this->gmb_post_details = $data['gmbPostDetails'] ?? null;
        $this->error_message = $data['errorMessage'] ?? null;
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
