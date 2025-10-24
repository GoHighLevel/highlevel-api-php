<?php

namespace HighLevel\Services\Invoices\Models;

/**
 * RecordPaymentDto model
 * 
 * @package HighLevel\Services\Invoices\Models
 */
class RecordPaymentDto
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
     * @var CardDto
     */
    public CardDto $card;

    /**
     * @var ChequeDto
     */
    public ChequeDto $cheque;

    /**
     * @var string
     */
    public string $notes;

    /**
     * @var float|null
     */
    public ?float $amount = null;

    /**
     * @var array&lt;string, mixed&gt;|null
     */
    public ?array $meta = null;

    /**
     * @var array&lt;string&gt;|null
     */
    public ?array $payment_schedule_ids = null;

    /**
     * @var string|null
     */
    public ?string $fulfilled_at = null;

    /**
     * Raw data storage for models without defined schema
     * @var array<string, mixed>
     */
    private array $data = [];

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
        // Handle single CardDto object
        if (isset($data['card']) && is_array($data['card'])) {
            $this->card = new CardDto($data['card']);
        } else {
            $this->card = $data['card'] ?? null;
        }
        // Handle single ChequeDto object
        if (isset($data['cheque']) && is_array($data['cheque'])) {
            $this->cheque = new ChequeDto($data['cheque']);
        } else {
            $this->cheque = $data['cheque'] ?? null;
        }
        $this->notes = $data['notes'] ?? '';
        $this->amount = $data['amount'] ?? null;
        $this->meta = $data['meta'] ?? null;
        $this->payment_schedule_ids = $data['paymentScheduleIds'] ?? null;
        $this->fulfilled_at = $data['fulfilledAt'] ?? null;
        // No defined properties - store raw data for flexible models
        $this->data = $data;
    }

    /**
     * Convert model to array (for models without defined schema)
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        return $this->data;
    }

    /**
     * Magic getter for accessing data properties
     * 
     * @param string $name Property name
     * @return mixed Property value or null if not found
     */
    public function __get(string $name)
    {
        return $this->data[$name] ?? null;
    }

    /**
     * Magic setter for setting data properties
     * 
     * @param string $name Property name
     * @param mixed $value Property value
     * @return void
     */
    public function __set(string $name, $value): void
    {
        $this->data[$name] = $value;
    }

    /**
     * Magic isset for checking if data property exists
     * 
     * @param string $name Property name
     * @return bool True if property exists, false otherwise
     */
    public function __isset(string $name): bool
    {
        return isset($this->data[$name]);
    }

    /**
     * Get all data as array
     * 
     * @return array<string, mixed>
     */
    public function getData(): array
    {
        return $this->data;
    }
}
