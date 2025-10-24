<?php

namespace HighLevel\Services\Invoices\Models;

/**
 * EstimateResponseDto model
 * 
 * @package HighLevel\Services\Invoices\Models
 */
class EstimateResponseDto
{
    /**
     * @var string
     */
    public string $alt_id;

    /**
     * @var string
     */
    public string $alt_type;

    /**
     * @var string
     */
    public string $id;

    /**
     * @var bool
     */
    public bool $live_mode;

    /**
     * @var bool
     */
    public bool $deleted;

    /**
     * @var string
     */
    public string $name;

    /**
     * @var string
     */
    public string $currency;

    /**
     * @var mixed
     */
    public mixed $business_details;

    /**
     * @var array&lt;array&lt;mixed&gt;&gt;
     */
    public array $items;

    /**
     * @var mixed
     */
    public mixed $discount;

    /**
     * @var string|null
     */
    public ?string $title = null;

    /**
     * @var string|null
     */
    public ?string $estimate_number_prefix = null;

    /**
     * @var array&lt;AttachmentsDto&gt;|null
     */
    public ?array $attachments = null;

    /**
     * @var string|null
     */
    public ?string $updated_by = null;

    /**
     * @var float
     */
    public float $total;

    /**
     * @var string
     */
    public string $created_at;

    /**
     * @var string
     */
    public string $updated_at;

    /**
     * @var float
     */
    public float $_v;

    /**
     * @var bool
     */
    public bool $automatic_taxes_enabled;

    /**
     * @var string|null
     */
    public ?string $terms_notes = null;

    /**
     * @var string
     */
    public string $company_id;

    /**
     * @var mixed
     */
    public mixed $contact_details;

    /**
     * @var string
     */
    public string $issue_date;

    /**
     * @var string
     */
    public string $expiry_date;

    /**
     * @var string|null
     */
    public ?string $sent_by = null;

    /**
     * @var bool
     */
    public bool $automatic_taxes_calculated;

    /**
     * @var array&lt;string, mixed&gt;
     */
    public array $meta;

    /**
     * @var array&lt;string&gt;
     */
    public array $estimate_action_history;

    /**
     * @var mixed
     */
    public mixed $sent_to;

    /**
     * @var mixed
     */
    public mixed $frequency_settings;

    /**
     * @var string
     */
    public string $last_visited_at;

    /**
     * @var float
     */
    public float $totalamount_in_u_s_d;

    /**
     * @var mixed
     */
    public mixed $auto_invoice;

    /**
     * @var string
     */
    public string $trace_id;

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
        $this->alt_id = $data['altId'] ?? '';
        $this->alt_type = $data['altType'] ?? '';
        $this->id = $data['_id'] ?? '';
        $this->live_mode = $data['liveMode'] ?? false;
        $this->deleted = $data['deleted'] ?? false;
        $this->name = $data['name'] ?? '';
        $this->currency = $data['currency'] ?? '';
        $this->business_details = $data['businessDetails'] ?? null;
        $this->items = $data['items'] ?? [];
        $this->discount = $data['discount'] ?? null;
        $this->title = $data['title'] ?? null;
        $this->estimate_number_prefix = $data['estimateNumberPrefix'] ?? null;
        // Handle array of AttachmentsDto objects
        if (isset($data['attachments']) && is_array($data['attachments'])) {
            $this->attachments = array_map(function($item) {
                return is_array($item) ? new AttachmentsDto($item) : $item;
            }, $data['attachments']);
        } else {
            $this->attachments = $data['attachments'] ?? null;
        }
        $this->updated_by = $data['updatedBy'] ?? null;
        $this->total = $data['total'] ?? 0;
        $this->created_at = $data['createdAt'] ?? '';
        $this->updated_at = $data['updatedAt'] ?? '';
        $this->_v = $data['__v'] ?? 0;
        $this->automatic_taxes_enabled = $data['automaticTaxesEnabled'] ?? false;
        $this->terms_notes = $data['termsNotes'] ?? null;
        $this->company_id = $data['companyId'] ?? '';
        $this->contact_details = $data['contactDetails'] ?? null;
        $this->issue_date = $data['issueDate'] ?? '';
        $this->expiry_date = $data['expiryDate'] ?? '';
        $this->sent_by = $data['sentBy'] ?? null;
        $this->automatic_taxes_calculated = $data['automaticTaxesCalculated'] ?? false;
        $this->meta = $data['meta'] ?? null;
        $this->estimate_action_history = $data['estimateActionHistory'] ?? [];
        $this->sent_to = $data['sentTo'] ?? null;
        $this->frequency_settings = $data['frequencySettings'] ?? null;
        $this->last_visited_at = $data['lastVisitedAt'] ?? '';
        $this->totalamount_in_u_s_d = $data['totalamountInUSD'] ?? 0;
        $this->auto_invoice = $data['autoInvoice'] ?? null;
        $this->trace_id = $data['traceId'] ?? '';
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
