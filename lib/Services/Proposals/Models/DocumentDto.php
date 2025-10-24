<?php

namespace HighLevel\Services\Proposals\Models;

/**
 * DocumentDto model
 * 
 * @package HighLevel\Services\Proposals\Models
 */
class DocumentDto
{
    /**
     * @var string
     */
    public string $location_id;

    /**
     * @var string
     */
    public string $document_id;

    /**
     * @var string
     */
    public string $id;

    /**
     * @var string
     */
    public string $name;

    /**
     * @var string
     */
    public string $type;

    /**
     * @var bool
     */
    public bool $deleted;

    /**
     * @var bool
     */
    public bool $is_expired;

    /**
     * @var float
     */
    public float $document_revision;

    /**
     * @var array&lt;FillableFieldsDTO&gt;
     */
    public array $fillable_fields;

    /**
     * @var mixed
     */
    public mixed $grand_total;

    /**
     * @var string
     */
    public string $locale;

    /**
     * @var array&lt;string&gt;
     */
    public array $status;

    /**
     * @var array&lt;string&gt;
     */
    public array $payment_status;

    /**
     * @var array&lt;RecipientItem&gt;
     */
    public array $recipients;

    /**
     * @var array&lt;ProposalEstimateLinksDto&gt;
     */
    public array $links;

    /**
     * @var string
     */
    public string $updated_at;

    /**
     * @var string
     */
    public string $created_at;

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
        $this->location_id = $data['locationId'] ?? '';
        $this->document_id = $data['documentId'] ?? '';
        $this->id = $data['_id'] ?? '';
        $this->name = $data['name'] ?? '';
        $this->type = $data['type'] ?? '';
        $this->deleted = $data['deleted'] ?? false;
        $this->is_expired = $data['isExpired'] ?? false;
        $this->document_revision = $data['documentRevision'] ?? 0;
        // Handle array of FillableFieldsDTO objects
        if (isset($data['fillableFields']) && is_array($data['fillableFields'])) {
            $this->fillable_fields = array_map(function($item) {
                return is_array($item) ? new FillableFieldsDTO($item) : $item;
            }, $data['fillableFields']);
        } else {
            $this->fillable_fields = $data['fillableFields'] ?? [];
        }
        $this->grand_total = $data['grandTotal'] ?? null;
        $this->locale = $data['locale'] ?? '';
        $this->status = $data['status'] ?? [];
        $this->payment_status = $data['paymentStatus'] ?? [];
        // Handle array of RecipientItem objects
        if (isset($data['recipients']) && is_array($data['recipients'])) {
            $this->recipients = array_map(function($item) {
                return is_array($item) ? new RecipientItem($item) : $item;
            }, $data['recipients']);
        } else {
            $this->recipients = $data['recipients'] ?? [];
        }
        // Handle array of ProposalEstimateLinksDto objects
        if (isset($data['links']) && is_array($data['links'])) {
            $this->links = array_map(function($item) {
                return is_array($item) ? new ProposalEstimateLinksDto($item) : $item;
            }, $data['links']);
        } else {
            $this->links = $data['links'] ?? [];
        }
        $this->updated_at = $data['updatedAt'] ?? '';
        $this->created_at = $data['createdAt'] ?? '';
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
