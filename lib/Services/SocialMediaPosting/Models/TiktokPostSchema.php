<?php

namespace HighLevel\Services\SocialMediaPosting\Models;

/**
 * TiktokPostSchema model
 * 
 * @package HighLevel\Services\SocialMediaPosting\Models
 */
class TiktokPostSchema
{
    /**
     * @var array&lt;string, mixed&gt;|null
     */
    public ?array $privacy_level = null;

    /**
     * @var bool|null
     */
    public ?bool $promote_other_brand = null;

    /**
     * @var bool|null
     */
    public ?bool $enable_comment = null;

    /**
     * @var bool|null
     */
    public ?bool $enable_duet = null;

    /**
     * @var bool|null
     */
    public ?bool $enable_stitch = null;

    /**
     * @var bool|null
     */
    public ?bool $video_disclosure = null;

    /**
     * @var bool|null
     */
    public ?bool $promote_your_brand = null;

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
        $this->privacy_level = $data['privacyLevel'] ?? null;
        $this->promote_other_brand = $data['promoteOtherBrand'] ?? null;
        $this->enable_comment = $data['enableComment'] ?? null;
        $this->enable_duet = $data['enableDuet'] ?? null;
        $this->enable_stitch = $data['enableStitch'] ?? null;
        $this->video_disclosure = $data['videoDisclosure'] ?? null;
        $this->promote_your_brand = $data['promoteYourBrand'] ?? null;
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
