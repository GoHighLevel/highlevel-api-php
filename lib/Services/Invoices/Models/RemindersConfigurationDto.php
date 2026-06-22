<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Invoices\Models;

/**
 * RemindersConfigurationDto model
 * 
 * @package HighLevel\Services\Invoices\Models
 */
class RemindersConfigurationDto
{
    /**
     * @var mixed
     */
    public $reminder_execution_details_list;

    /**
     * @var mixed
     */
    public $reminder_settings;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->reminder_execution_details_list = $data['reminderExecutionDetailsList'] ?? null;
        $this->reminder_settings = $data['reminderSettings'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->reminder_execution_details_list !== null) {
            $result['reminderExecutionDetailsList'] = $this->reminder_execution_details_list;
        }
        if ($this->reminder_settings !== null) {
            $result['reminderSettings'] = $this->reminder_settings;
        }
        return $result;
    }
}
