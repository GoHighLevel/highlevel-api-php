<?php

namespace HighLevel\Services\Invoices\Models;

/**
 * SentToDto model
 * 
 * @package HighLevel\Services\Invoices\Models
 */
class SentToDto
{
    /**
     * @var array&lt;string&gt;
     */
    public array $email;

    /**
     * @var array&lt;string&gt;|null
     */
    public ?array $email_cc = null;

    /**
     * @var array&lt;string&gt;|null
     */
    public ?array $email_bcc = null;

    /**
     * @var array&lt;string&gt;|null
     */
    public ?array $phone_no = null;

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
        $this->email = $data['email'] ?? [];
        $this->email_cc = $data['emailCc'] ?? null;
        $this->email_bcc = $data['emailBcc'] ?? null;
        $this->phone_no = $data['phoneNo'] ?? null;
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
