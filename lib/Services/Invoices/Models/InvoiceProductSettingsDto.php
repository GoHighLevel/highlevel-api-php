<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Invoices\Models;

/**
 * InvoiceProductSettingsDto model
 * 
 * @package HighLevel\Services\Invoices\Models
 */
class InvoiceProductSettingsDto
{
    /**
     * @var bool|null
     */
    public ?bool $enable_import_product_description = null;

    /**
     * @var bool|null
     */
    public ?bool $description_optional = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->enable_import_product_description = $data['enableImportProductDescription'] ?? null;
        $this->description_optional = $data['descriptionOptional'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->enable_import_product_description !== null) {
            $result['enableImportProductDescription'] = $this->enable_import_product_description;
        }
        if ($this->description_optional !== null) {
            $result['descriptionOptional'] = $this->description_optional;
        }
        return $result;
    }
}
