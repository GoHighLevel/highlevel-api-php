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
    public $grand_total;

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
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->location_id !== null) {
            $result['locationId'] = $this->location_id;
        }
        if ($this->document_id !== null) {
            $result['documentId'] = $this->document_id;
        }
        if ($this->id !== null) {
            $result['_id'] = $this->id;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->type !== null) {
            $result['type'] = $this->type;
        }
        if ($this->deleted !== null) {
            $result['deleted'] = $this->deleted;
        }
        if ($this->is_expired !== null) {
            $result['isExpired'] = $this->is_expired;
        }
        if ($this->document_revision !== null) {
            $result['documentRevision'] = $this->document_revision;
        }
        if ($this->fillable_fields !== null) {
            $result['fillableFields'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->fillable_fields);
        }
        if ($this->grand_total !== null) {
            $result['grandTotal'] = $this->grand_total;
        }
        if ($this->locale !== null) {
            $result['locale'] = $this->locale;
        }
        if ($this->status !== null) {
            $result['status'] = $this->status;
        }
        if ($this->payment_status !== null) {
            $result['paymentStatus'] = $this->payment_status;
        }
        if ($this->recipients !== null) {
            $result['recipients'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->recipients);
        }
        if ($this->links !== null) {
            $result['links'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->links);
        }
        if ($this->updated_at !== null) {
            $result['updatedAt'] = $this->updated_at;
        }
        if ($this->created_at !== null) {
            $result['createdAt'] = $this->created_at;
        }
        return $result;
    }
}
