<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Invoices\Models;

/**
 * SendEstimateDto model
 * 
 * @package HighLevel\Services\Invoices\Models
 */
class SendEstimateDto
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
    public string $action;

    /**
     * @var bool
     */
    public bool $live_mode;

    /**
     * @var string
     */
    public string $user_id;

    /**
     * @var mixed
     */
    public $sent_from;

    /**
     * @var string|null
     */
    public ?string $estimate_name = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->alt_id = $data['altId'] ?? '';
        $this->alt_type = $data['altType'] ?? '';
        $this->action = $data['action'] ?? '';
        $this->live_mode = $data['liveMode'] ?? false;
        $this->user_id = $data['userId'] ?? '';
        $this->sent_from = $data['sentFrom'] ?? null;
        $this->estimate_name = $data['estimateName'] ?? null;
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
        if ($this->action !== null) {
            $result['action'] = $this->action;
        }
        if ($this->live_mode !== null) {
            $result['liveMode'] = $this->live_mode;
        }
        if ($this->user_id !== null) {
            $result['userId'] = $this->user_id;
        }
        if ($this->sent_from !== null) {
            $result['sentFrom'] = $this->sent_from;
        }
        if ($this->estimate_name !== null) {
            $result['estimateName'] = $this->estimate_name;
        }
        return $result;
    }
}
