<?php

namespace HighLevel\Services\AdManager\Models;

/**
 * LegalInfoDTO model
 * 
 * @package HighLevel\Services\AdManager\Models
 */
class LegalInfoDTO
{
    /**
     * @var array&lt;ConsentDTO&gt;
     */
    public array $consents;

    /**
     * @var string
     */
    public string $privacy_policy_url;

    /**
     * @var mixed
     */
    public mixed $legal_disclaimer;

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
        // Handle array of ConsentDTO objects
        if (isset($data['consents']) && is_array($data['consents'])) {
            $this->consents = array_map(function($item) {
                return is_array($item) ? new ConsentDTO($item) : $item;
            }, $data['consents']);
        } else {
            $this->consents = $data['consents'] ?? [];
        }
        $this->privacy_policy_url = $data['privacyPolicyUrl'] ?? '';
        $this->legal_disclaimer = $data['legalDisclaimer'] ?? null;
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
