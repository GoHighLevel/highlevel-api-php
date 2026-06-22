<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

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
    public $custom_notification;

    /**
     * @var mixed
     */
    public $business_details;

    /**
     * @var mixed
     */
    public $sender_configuration;

    /**
     * @var mixed
     */
    public $product_settings;

    /**
     * @var mixed
     */
    public $reminder_settings;

    /**
     * @var mixed
     */
    public $late_fees_configuration;

    /**
     * @var mixed
     */
    public $tips_configuration;

    /**
     * @var mixed
     */
    public $payment_methods;

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
        if ($this->terms_note !== null) {
            $result['termsNote'] = $this->terms_note;
        }
        if ($this->estimates_terms_note !== null) {
            $result['estimatesTermsNote'] = $this->estimates_terms_note;
        }
        if ($this->title !== null) {
            $result['title'] = $this->title;
        }
        if ($this->estimates_title !== null) {
            $result['estimatesTitle'] = $this->estimates_title;
        }
        if ($this->invoice_number_prefix !== null) {
            $result['invoiceNumberPrefix'] = $this->invoice_number_prefix;
        }
        if ($this->estimate_number_prefix !== null) {
            $result['estimateNumberPrefix'] = $this->estimate_number_prefix;
        }
        if ($this->due_after_x_days !== null) {
            $result['dueAfterXDays'] = $this->due_after_x_days;
        }
        if ($this->estimates_expire_after_x_days !== null) {
            $result['estimatesExpireAfterXDays'] = $this->estimates_expire_after_x_days;
        }
        if ($this->minimum_percentage_partial_payment !== null) {
            $result['minimumPercentagePartialPayment'] = $this->minimum_percentage_partial_payment;
        }
        if ($this->custom_fields !== null) {
            $result['customFields'] = $this->custom_fields;
        }
        if ($this->custom_notification !== null) {
            $result['customNotification'] = $this->custom_notification;
        }
        if ($this->business_details !== null) {
            $result['businessDetails'] = $this->business_details;
        }
        if ($this->sender_configuration !== null) {
            $result['senderConfiguration'] = $this->sender_configuration;
        }
        if ($this->product_settings !== null) {
            $result['productSettings'] = $this->product_settings;
        }
        if ($this->reminder_settings !== null) {
            $result['reminderSettings'] = $this->reminder_settings;
        }
        if ($this->late_fees_configuration !== null) {
            $result['lateFeesConfiguration'] = $this->late_fees_configuration;
        }
        if ($this->tips_configuration !== null) {
            $result['tipsConfiguration'] = $this->tips_configuration;
        }
        if ($this->payment_methods !== null) {
            $result['paymentMethods'] = $this->payment_methods;
        }
        return $result;
    }
}
