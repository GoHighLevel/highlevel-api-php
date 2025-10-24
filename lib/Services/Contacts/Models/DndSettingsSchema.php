<?php

namespace HighLevel\Services\Contacts\Models;

/**
 * DndSettingsSchema model
 * 
 * @package HighLevel\Services\Contacts\Models
 */
class DndSettingsSchema
{
    /**
     * @var DndSettingSchema|null
     */
    public ?DndSettingSchema $call = null;

    /**
     * @var DndSettingSchema|null
     */
    public ?DndSettingSchema $email = null;

    /**
     * @var DndSettingSchema|null
     */
    public ?DndSettingSchema $s_m_s = null;

    /**
     * @var DndSettingSchema|null
     */
    public ?DndSettingSchema $whats_app = null;

    /**
     * @var DndSettingSchema|null
     */
    public ?DndSettingSchema $g_m_b = null;

    /**
     * @var DndSettingSchema|null
     */
    public ?DndSettingSchema $f_b = null;

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
        // Handle single DndSettingSchema object
        if (isset($data['Call']) && is_array($data['Call'])) {
            $this->call = new DndSettingSchema($data['Call']);
        } else {
            $this->call = $data['Call'] ?? null;
        }
        // Handle single DndSettingSchema object
        if (isset($data['Email']) && is_array($data['Email'])) {
            $this->email = new DndSettingSchema($data['Email']);
        } else {
            $this->email = $data['Email'] ?? null;
        }
        // Handle single DndSettingSchema object
        if (isset($data['SMS']) && is_array($data['SMS'])) {
            $this->s_m_s = new DndSettingSchema($data['SMS']);
        } else {
            $this->s_m_s = $data['SMS'] ?? null;
        }
        // Handle single DndSettingSchema object
        if (isset($data['WhatsApp']) && is_array($data['WhatsApp'])) {
            $this->whats_app = new DndSettingSchema($data['WhatsApp']);
        } else {
            $this->whats_app = $data['WhatsApp'] ?? null;
        }
        // Handle single DndSettingSchema object
        if (isset($data['GMB']) && is_array($data['GMB'])) {
            $this->g_m_b = new DndSettingSchema($data['GMB']);
        } else {
            $this->g_m_b = $data['GMB'] ?? null;
        }
        // Handle single DndSettingSchema object
        if (isset($data['FB']) && is_array($data['FB'])) {
            $this->f_b = new DndSettingSchema($data['FB']);
        } else {
            $this->f_b = $data['FB'] ?? null;
        }
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
