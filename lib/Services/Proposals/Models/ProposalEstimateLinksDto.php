<?php

namespace HighLevel\Services\Proposals\Models;

/**
 * ProposalEstimateLinksDto model
 * 
 * @package HighLevel\Services\Proposals\Models
 */
class ProposalEstimateLinksDto
{
    /**
     * @var string
     */
    public string $reference_id;

    /**
     * @var string
     */
    public string $document_id;

    /**
     * @var string
     */
    public string $recipient_id;

    /**
     * @var string
     */
    public string $entity_name;

    /**
     * @var string
     */
    public string $recipient_category;

    /**
     * @var float
     */
    public float $document_revision;

    /**
     * @var string
     */
    public string $created_by;

    /**
     * @var bool
     */
    public bool $deleted;

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
        $this->reference_id = $data['referenceId'] ?? '';
        $this->document_id = $data['documentId'] ?? '';
        $this->recipient_id = $data['recipientId'] ?? '';
        $this->entity_name = $data['entityName'] ?? '';
        $this->recipient_category = $data['recipientCategory'] ?? '';
        $this->document_revision = $data['documentRevision'] ?? 0;
        $this->created_by = $data['createdBy'] ?? '';
        $this->deleted = $data['deleted'] ?? false;
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
