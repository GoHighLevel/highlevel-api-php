<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Marketplace\Models;

/**
 * GetInstallerDetailsResponseDTO model
 * 
 * @package HighLevel\Services\Marketplace\Models
 */
class GetInstallerDetailsResponseDTO
{
    /**
     * @var mixed
     */
    public $installation_details;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->installation_details = $data['installationDetails'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->installation_details !== null) {
            $result['installationDetails'] = $this->installation_details;
        }
        return $result;
    }
}
