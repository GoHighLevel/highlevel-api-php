<?php

namespace HighLevel\Services\Invoices\Models;

/**
 * GetInvoiceSettingsResponseDto model
 * 
 * @package HighLevel\Services\Invoices\Models
 */
class GetInvoiceSettingsResponseDto
{
    /**
     * @var string|null
     */
    public ?string $alt_id = null;

    /**
     * @var string|null
     */
    public ?string $alt_type = null;

    /**
     * @var string|null
     */
    public ?string $terms_note = null;

    /**
     * @var string|null
     */
    public ?string $estimates_terms_note = null;

    /**
     * @var string|null
     */
    public ?string $title = null;

    /**
     * @var string|null
     */
    public ?string $estimates_title = null;

    /**
     * @var string|null
     */
    public ?string $invoice_number_prefix = null;

    /**
     * @var string|null
     */
    public ?string $estimate_number_prefix = null;

    /**
     * @var float|null
     */
    public ?float $due_after_x_days = null;

    /**
     * @var float|null
     */
    public ?float $estimates_expire_after_x_days = null;

    /**
     * @var float|null
     */
    public ?float $minimum_percentage_partial_payment = null;

    /**
     * @var array&lt;string&gt;|null
     */
    public ?array $custom_fields = null;

    /**
     * @var mixed
     */
    public mixed $custom_notification;

    /**
     * @var mixed
     */
    public mixed $business_details;

    /**
     * @var mixed
     */
    public mixed $sender_configuration;

    /**
     * @var mixed
     */
    public mixed $product_settings;

    /**
     * @var mixed
     */
    public mixed $reminder_settings;

    /**
     * @var mixed
     */
    public mixed $late_fees_configuration;

    /**
     * @var mixed
     */
    public mixed $tips_configuration;

    /**
     * @var mixed
     */
    public mixed $payment_methods;

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
        $this->alt_id = $data['altId'] ?? null;
        $this->alt_type = $data['altType'] ?? null;
        $this->terms_note = $data['termsNote'] ?? null;
        $this->estimates_terms_note = $data['estimatesTermsNote'] ?? null;
        $this->title = $data['title'] ?? null;
        $this->estimates_title = $data['estimatesTitle'] ?? null;
        $this->invoice_number_prefix = $data['invoiceNumberPrefix'] ?? null;
        $this->estimate_number_prefix = $data['estimateNumberPrefix'] ?? null;
        $this->due_after_x_days = $data['dueAfterXDays'] ?? null;
        $this->estimates_expire_after_x_days = $data['estimatesExpireAfterXDays'] ?? null;
        $this->minimum_percentage_partial_payment = $data['minimumPercentagePartialPayment'] ?? null;
        $this->custom_fields = $data['customFields'] ?? null;
        $this->custom_notification = $data['customNotification'] ?? null;
        $this->business_details = $data['businessDetails'] ?? null;
        $this->sender_configuration = $data['senderConfiguration'] ?? null;
        $this->product_settings = $data['productSettings'] ?? null;
        $this->reminder_settings = $data['reminderSettings'] ?? null;
        $this->late_fees_configuration = $data['lateFeesConfiguration'] ?? null;
        $this->tips_configuration = $data['tipsConfiguration'] ?? null;
        $this->payment_methods = $data['paymentMethods'] ?? null;
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
