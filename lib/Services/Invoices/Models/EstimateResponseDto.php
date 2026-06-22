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
    public $business_details;

    /**
     * @var array&lt;array&lt;mixed&gt;&gt;
     */
    public array $items;

    /**
     * @var mixed
     */
    public $discount;

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
    public $contact_details;

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
    public $sent_to;

    /**
     * @var mixed
     */
    public $frequency_settings;

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
    public $auto_invoice;

    /**
     * @var string
     */
    public string $trace_id;

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
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->alt_id !== null) {
            $result['altId'] = $this->alt_id;
        }
        if ($this->alt_type !== null) {
            $result['altType'] = $this->alt_type;
        }
        if ($this->id !== null) {
            $result['_id'] = $this->id;
        }
        if ($this->live_mode !== null) {
            $result['liveMode'] = $this->live_mode;
        }
        if ($this->deleted !== null) {
            $result['deleted'] = $this->deleted;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->currency !== null) {
            $result['currency'] = $this->currency;
        }
        if ($this->business_details !== null) {
            $result['businessDetails'] = $this->business_details;
        }
        if ($this->items !== null) {
            $result['items'] = $this->items;
        }
        if ($this->discount !== null) {
            $result['discount'] = $this->discount;
        }
        if ($this->title !== null) {
            $result['title'] = $this->title;
        }
        if ($this->estimate_number_prefix !== null) {
            $result['estimateNumberPrefix'] = $this->estimate_number_prefix;
        }
        if ($this->attachments !== null) {
            $result['attachments'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->attachments);
        }
        if ($this->updated_by !== null) {
            $result['updatedBy'] = $this->updated_by;
        }
        if ($this->total !== null) {
            $result['total'] = $this->total;
        }
        if ($this->created_at !== null) {
            $result['createdAt'] = $this->created_at;
        }
        if ($this->updated_at !== null) {
            $result['updatedAt'] = $this->updated_at;
        }
        if ($this->_v !== null) {
            $result['__v'] = $this->_v;
        }
        if ($this->automatic_taxes_enabled !== null) {
            $result['automaticTaxesEnabled'] = $this->automatic_taxes_enabled;
        }
        if ($this->terms_notes !== null) {
            $result['termsNotes'] = $this->terms_notes;
        }
        if ($this->company_id !== null) {
            $result['companyId'] = $this->company_id;
        }
        if ($this->contact_details !== null) {
            $result['contactDetails'] = $this->contact_details;
        }
        if ($this->issue_date !== null) {
            $result['issueDate'] = $this->issue_date;
        }
        if ($this->expiry_date !== null) {
            $result['expiryDate'] = $this->expiry_date;
        }
        if ($this->sent_by !== null) {
            $result['sentBy'] = $this->sent_by;
        }
        if ($this->automatic_taxes_calculated !== null) {
            $result['automaticTaxesCalculated'] = $this->automatic_taxes_calculated;
        }
        if ($this->meta !== null) {
            $result['meta'] = $this->meta;
        }
        if ($this->estimate_action_history !== null) {
            $result['estimateActionHistory'] = $this->estimate_action_history;
        }
        if ($this->sent_to !== null) {
            $result['sentTo'] = $this->sent_to;
        }
        if ($this->frequency_settings !== null) {
            $result['frequencySettings'] = $this->frequency_settings;
        }
        if ($this->last_visited_at !== null) {
            $result['lastVisitedAt'] = $this->last_visited_at;
        }
        if ($this->totalamount_in_u_s_d !== null) {
            $result['totalamountInUSD'] = $this->totalamount_in_u_s_d;
        }
        if ($this->auto_invoice !== null) {
            $result['autoInvoice'] = $this->auto_invoice;
        }
        if ($this->trace_id !== null) {
            $result['traceId'] = $this->trace_id;
        }
        return $result;
    }
}
