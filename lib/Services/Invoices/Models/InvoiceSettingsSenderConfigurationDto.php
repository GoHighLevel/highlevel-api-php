<?php

namespace HighLevel\Services\Invoices\Models;

/**
 * InvoiceSettingsSenderConfigurationDto model
 * 
 * @package HighLevel\Services\Invoices\Models
 */
class InvoiceSettingsSenderConfigurationDto
{
    /**
     * @var string|null
     */
    public ?string $from_name = null;

    /**
     * @var string|null
     */
    public ?string $from_email = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->from_name = $data['fromName'] ?? null;
        $this->from_email = $data['fromEmail'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->from_name !== null) {
            $result['fromName'] = $this->from_name;
        }
        if ($this->from_email !== null) {
            $result['fromEmail'] = $this->from_email;
        }
        return $result;
    }
}
