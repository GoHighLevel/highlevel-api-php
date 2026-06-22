<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Invoices\Models;

/**
 * RecordPaymentDto model
 * 
 * @package HighLevel\Services\Invoices\Models
 */
class RecordPaymentDto
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
    public string $mode;

    /**
     * @var CardDto
     */
    public CardDto $card;

    /**
     * @var ChequeDto
     */
    public ChequeDto $cheque;

    /**
     * @var string
     */
    public string $notes;

    /**
     * @var float|null
     */
    public ?float $amount = null;

    /**
     * @var array&lt;string, mixed&gt;|null
     */
    public ?array $meta = null;

    /**
     * @var array&lt;string&gt;|null
     */
    public ?array $payment_schedule_ids = null;

    /**
     * @var string|null
     */
    public ?string $fulfilled_at = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->alt_id = $data['altId'] ?? '';
        $this->alt_type = $data['altType'] ?? '';
        $this->mode = $data['mode'] ?? '';
        // Handle single CardDto object
        if (isset($data['card']) && is_array($data['card'])) {
            $this->card = new CardDto($data['card']);
        } else {
            $this->card = $data['card'] ?? null;
        }
        // Handle single ChequeDto object
        if (isset($data['cheque']) && is_array($data['cheque'])) {
            $this->cheque = new ChequeDto($data['cheque']);
        } else {
            $this->cheque = $data['cheque'] ?? null;
        }
        $this->notes = $data['notes'] ?? '';
        $this->amount = $data['amount'] ?? null;
        $this->meta = $data['meta'] ?? null;
        $this->payment_schedule_ids = $data['paymentScheduleIds'] ?? null;
        $this->fulfilled_at = $data['fulfilledAt'] ?? null;
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
        if ($this->mode !== null) {
            $result['mode'] = $this->mode;
        }
        if ($this->card !== null) {
            $result['card'] = is_object($this->card) && method_exists($this->card, 'toArray') 
                ? $this->card->toArray() 
                : $this->card;
        }
        if ($this->cheque !== null) {
            $result['cheque'] = is_object($this->cheque) && method_exists($this->cheque, 'toArray') 
                ? $this->cheque->toArray() 
                : $this->cheque;
        }
        if ($this->notes !== null) {
            $result['notes'] = $this->notes;
        }
        if ($this->amount !== null) {
            $result['amount'] = $this->amount;
        }
        if ($this->meta !== null) {
            $result['meta'] = $this->meta;
        }
        if ($this->payment_schedule_ids !== null) {
            $result['paymentScheduleIds'] = $this->payment_schedule_ids;
        }
        if ($this->fulfilled_at !== null) {
            $result['fulfilledAt'] = $this->fulfilled_at;
        }
        return $result;
    }
}
