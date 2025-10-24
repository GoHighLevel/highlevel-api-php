<?php

namespace HighLevel\Services\Conversations\Models;

/**
 * GetMessageTranscriptionResponseDto model
 * 
 * @package HighLevel\Services\Conversations\Models
 */
class GetMessageTranscriptionResponseDto
{
    /**
     * @var float
     */
    public float $media_channel;

    /**
     * @var float
     */
    public float $sentence_index;

    /**
     * @var float
     */
    public float $start_time;

    /**
     * @var float
     */
    public float $end_time;

    /**
     * @var string
     */
    public string $transcript;

    /**
     * @var float
     */
    public float $confidence;

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
        $this->media_channel = $data['mediaChannel'] ?? 0;
        $this->sentence_index = $data['sentenceIndex'] ?? 0;
        $this->start_time = $data['startTime'] ?? 0;
        $this->end_time = $data['endTime'] ?? 0;
        $this->transcript = $data['transcript'] ?? '';
        $this->confidence = $data['confidence'] ?? 0;
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
