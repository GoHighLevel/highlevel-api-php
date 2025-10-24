<?php

namespace HighLevel\Services\VoiceAi\Models;

/**
 * CallLogsResponseDTO model
 * 
 * @package HighLevel\Services\VoiceAi\Models
 */
class CallLogsResponseDTO
{
    /**
     * @var float
     */
    public float $total;

    /**
     * @var float
     */
    public float $page;

    /**
     * @var float
     */
    public float $page_size;

    /**
     * @var array&lt;CallLogDTO&gt;
     */
    public array $call_logs;

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
        $this->total = $data['total'] ?? 0;
        $this->page = $data['page'] ?? 0;
        $this->page_size = $data['pageSize'] ?? 0;
        // Handle array of CallLogDTO objects
        if (isset($data['callLogs']) && is_array($data['callLogs'])) {
            $this->call_logs = array_map(function($item) {
                return is_array($item) ? new CallLogDTO($item) : $item;
            }, $data['callLogs']);
        } else {
            $this->call_logs = $data['callLogs'] ?? [];
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
