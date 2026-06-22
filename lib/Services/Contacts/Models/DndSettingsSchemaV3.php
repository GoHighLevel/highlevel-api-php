<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Contacts\Models;

/**
 * DndSettingsSchemaV3 model
 * 
 * @package HighLevel\Services\Contacts\Models
 */
class DndSettingsSchemaV3
{
    /**
     * @var mixed
     */
    public $call;

    /**
     * @var mixed
     */
    public $email;

    /**
     * @var mixed
     */
    public $sms;

    /**
     * @var mixed
     */
    public $whats_app;

    /**
     * @var mixed
     */
    public $gmb;

    /**
     * @var mixed
     */
    public $fb;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->call = $data['call'] ?? null;
        $this->email = $data['email'] ?? null;
        $this->sms = $data['sms'] ?? null;
        $this->whats_app = $data['whatsApp'] ?? null;
        $this->gmb = $data['gmb'] ?? null;
        $this->fb = $data['fb'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->call !== null) {
            $result['call'] = $this->call;
        }
        if ($this->email !== null) {
            $result['email'] = $this->email;
        }
        if ($this->sms !== null) {
            $result['sms'] = $this->sms;
        }
        if ($this->whats_app !== null) {
            $result['whatsApp'] = $this->whats_app;
        }
        if ($this->gmb !== null) {
            $result['gmb'] = $this->gmb;
        }
        if ($this->fb !== null) {
            $result['fb'] = $this->fb;
        }
        return $result;
    }
}
