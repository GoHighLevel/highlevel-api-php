<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\AdPublishing\Models;

/**
 * LegalInfoDTO model
 * 
 * @package HighLevel\Services\AdPublishing\Models
 */
class LegalInfoDTO
{
    /**
     * @var array&lt;ConsentDTO&gt;
     */
    public array $consents;

    /**
     * @var string
     */
    public string $privacy_policy_url;

    /**
     * @var mixed
     */
    public $legal_disclaimer;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        // Handle array of ConsentDTO objects
        if (isset($data['consents']) && is_array($data['consents'])) {
            $this->consents = array_map(function($item) {
                return is_array($item) ? new ConsentDTO($item) : $item;
            }, $data['consents']);
        } else {
            $this->consents = $data['consents'] ?? [];
        }
        $this->privacy_policy_url = $data['privacyPolicyUrl'] ?? '';
        $this->legal_disclaimer = $data['legalDisclaimer'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->consents !== null) {
            $result['consents'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->consents);
        }
        if ($this->privacy_policy_url !== null) {
            $result['privacyPolicyUrl'] = $this->privacy_policy_url;
        }
        if ($this->legal_disclaimer !== null) {
            $result['legalDisclaimer'] = $this->legal_disclaimer;
        }
        return $result;
    }
}
