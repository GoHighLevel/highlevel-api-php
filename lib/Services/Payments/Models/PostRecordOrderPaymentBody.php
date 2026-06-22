<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Payments\Models;

/**
 * PostRecordOrderPaymentBody model
 * 
 * @package HighLevel\Services\Payments\Models
 */
class PostRecordOrderPaymentBody
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
     * @var mixed
     */
    public $card;

    /**
     * @var mixed
     */
    public $cheque;

    /**
     * @var string|null
     */
    public ?string $notes = null;

    /**
     * @var float|null
     */
    public ?float $amount = null;

    /**
     * @var array&lt;string, mixed&gt;|null
     */
    public ?array $meta = null;

    /**
     * @var bool|null
     */
    public ?bool $is_partial_payment = null;

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
        $this->card = $data['card'] ?? null;
        $this->cheque = $data['cheque'] ?? null;
        $this->notes = $data['notes'] ?? null;
        $this->amount = $data['amount'] ?? null;
        $this->meta = $data['meta'] ?? null;
        $this->is_partial_payment = $data['isPartialPayment'] ?? null;
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
            $result['card'] = $this->card;
        }
        if ($this->cheque !== null) {
            $result['cheque'] = $this->cheque;
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
        if ($this->is_partial_payment !== null) {
            $result['isPartialPayment'] = $this->is_partial_payment;
        }
        return $result;
    }
}
