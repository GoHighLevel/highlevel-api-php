<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Invoices\Models;

/**
 * SendInvoiceDto model
 * 
 * @package HighLevel\Services\Invoices\Models
 */
class SendInvoiceDto
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
    public string $user_id;

    /**
     * @var string
     */
    public string $action;

    /**
     * @var bool
     */
    public bool $live_mode;

    /**
     * @var mixed
     */
    public $sent_from;

    /**
     * @var mixed
     */
    public $auto_payment;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->alt_id = $data['altId'] ?? '';
        $this->alt_type = $data['altType'] ?? '';
        $this->user_id = $data['userId'] ?? '';
        $this->action = $data['action'] ?? '';
        $this->live_mode = $data['liveMode'] ?? false;
        $this->sent_from = $data['sentFrom'] ?? null;
        $this->auto_payment = $data['autoPayment'] ?? null;
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
        if ($this->user_id !== null) {
            $result['userId'] = $this->user_id;
        }
        if ($this->action !== null) {
            $result['action'] = $this->action;
        }
        if ($this->live_mode !== null) {
            $result['liveMode'] = $this->live_mode;
        }
        if ($this->sent_from !== null) {
            $result['sentFrom'] = $this->sent_from;
        }
        if ($this->auto_payment !== null) {
            $result['autoPayment'] = $this->auto_payment;
        }
        return $result;
    }
}
