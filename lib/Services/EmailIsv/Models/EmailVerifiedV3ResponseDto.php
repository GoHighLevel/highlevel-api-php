<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\EmailIsv\Models;

/**
 * EmailVerifiedV3ResponseDto model
 * 
 * @package HighLevel\Services\EmailIsv\Models
 */
class EmailVerifiedV3ResponseDto
{
    /**
     * @var array&lt;string&gt;|null
     */
    public ?array $reason = null;

    /**
     * @var string
     */
    public string $result;

    /**
     * @var string
     */
    public string $risk;

    /**
     * @var string
     */
    public string $address;

    /**
     * @var mixed
     */
    public $lead_connector_recommendation;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->reason = $data['reason'] ?? null;
        $this->result = $data['result'] ?? '';
        $this->risk = $data['risk'] ?? '';
        $this->address = $data['address'] ?? '';
        $this->lead_connector_recommendation = $data['leadConnectorRecommendation'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->reason !== null) {
            $result['reason'] = $this->reason;
        }
        if ($this->result !== null) {
            $result['result'] = $this->result;
        }
        if ($this->risk !== null) {
            $result['risk'] = $this->risk;
        }
        if ($this->address !== null) {
            $result['address'] = $this->address;
        }
        if ($this->lead_connector_recommendation !== null) {
            $result['leadConnectorRecommendation'] = $this->lead_connector_recommendation;
        }
        return $result;
    }
}
