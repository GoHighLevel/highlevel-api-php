<?php

namespace HighLevel\Services\Invoices\Models;

/**
 * CustomNotificationDto model
 * 
 * @package HighLevel\Services\Invoices\Models
 */
class CustomNotificationDto
{
    /**
     * @var CustomNotificationItemDto
     */
    public CustomNotificationItemDto $customer_send_invoice;

    /**
     * @var CustomNotificationItemDto
     */
    public CustomNotificationItemDto $team_payment_success;

    /**
     * @var CustomNotificationItemDto
     */
    public CustomNotificationItemDto $customer_payment_success;

    /**
     * @var CustomNotificationItemDto
     */
    public CustomNotificationItemDto $team_auto_payment_success;

    /**
     * @var CustomNotificationItemDto
     */
    public CustomNotificationItemDto $customer_auto_payment_success;

    /**
     * @var CustomNotificationItemDto
     */
    public CustomNotificationItemDto $team_payment_failure;

    /**
     * @var CustomNotificationItemDto
     */
    public CustomNotificationItemDto $customer_payment_failure;

    /**
     * @var CustomNotificationItemDto
     */
    public CustomNotificationItemDto $team_auto_payment_failure;

    /**
     * @var CustomNotificationItemDto
     */
    public CustomNotificationItemDto $customer_auto_payment_failure;

    /**
     * @var CustomNotificationItemDto
     */
    public CustomNotificationItemDto $customer_auto_payment_info;

    /**
     * @var CustomNotificationItemDto
     */
    public CustomNotificationItemDto $customer_auto_payment_amount_changed;

    /**
     * @var CustomNotificationItemDto
     */
    public CustomNotificationItemDto $team_auto_payment_skip;

    /**
     * @var CustomNotificationItemDto
     */
    public CustomNotificationItemDto $team_recurring_send_invoice_failed;

    /**
     * @var CustomNotificationItemDto
     */
    public CustomNotificationItemDto $customer_send_estimate;

    /**
     * @var CustomNotificationItemDto
     */
    public CustomNotificationItemDto $team_estimate_accepted;

    /**
     * @var CustomNotificationItemDto
     */
    public CustomNotificationItemDto $team_estimate_declined;

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
        // Handle single CustomNotificationItemDto object
        if (isset($data['customerSendInvoice']) && is_array($data['customerSendInvoice'])) {
            $this->customer_send_invoice = new CustomNotificationItemDto($data['customerSendInvoice']);
        } else {
            $this->customer_send_invoice = $data['customerSendInvoice'] ?? null;
        }
        // Handle single CustomNotificationItemDto object
        if (isset($data['teamPaymentSuccess']) && is_array($data['teamPaymentSuccess'])) {
            $this->team_payment_success = new CustomNotificationItemDto($data['teamPaymentSuccess']);
        } else {
            $this->team_payment_success = $data['teamPaymentSuccess'] ?? null;
        }
        // Handle single CustomNotificationItemDto object
        if (isset($data['customerPaymentSuccess']) && is_array($data['customerPaymentSuccess'])) {
            $this->customer_payment_success = new CustomNotificationItemDto($data['customerPaymentSuccess']);
        } else {
            $this->customer_payment_success = $data['customerPaymentSuccess'] ?? null;
        }
        // Handle single CustomNotificationItemDto object
        if (isset($data['teamAutoPaymentSuccess']) && is_array($data['teamAutoPaymentSuccess'])) {
            $this->team_auto_payment_success = new CustomNotificationItemDto($data['teamAutoPaymentSuccess']);
        } else {
            $this->team_auto_payment_success = $data['teamAutoPaymentSuccess'] ?? null;
        }
        // Handle single CustomNotificationItemDto object
        if (isset($data['customerAutoPaymentSuccess']) && is_array($data['customerAutoPaymentSuccess'])) {
            $this->customer_auto_payment_success = new CustomNotificationItemDto($data['customerAutoPaymentSuccess']);
        } else {
            $this->customer_auto_payment_success = $data['customerAutoPaymentSuccess'] ?? null;
        }
        // Handle single CustomNotificationItemDto object
        if (isset($data['teamPaymentFailure']) && is_array($data['teamPaymentFailure'])) {
            $this->team_payment_failure = new CustomNotificationItemDto($data['teamPaymentFailure']);
        } else {
            $this->team_payment_failure = $data['teamPaymentFailure'] ?? null;
        }
        // Handle single CustomNotificationItemDto object
        if (isset($data['customerPaymentFailure']) && is_array($data['customerPaymentFailure'])) {
            $this->customer_payment_failure = new CustomNotificationItemDto($data['customerPaymentFailure']);
        } else {
            $this->customer_payment_failure = $data['customerPaymentFailure'] ?? null;
        }
        // Handle single CustomNotificationItemDto object
        if (isset($data['teamAutoPaymentFailure']) && is_array($data['teamAutoPaymentFailure'])) {
            $this->team_auto_payment_failure = new CustomNotificationItemDto($data['teamAutoPaymentFailure']);
        } else {
            $this->team_auto_payment_failure = $data['teamAutoPaymentFailure'] ?? null;
        }
        // Handle single CustomNotificationItemDto object
        if (isset($data['customerAutoPaymentFailure']) && is_array($data['customerAutoPaymentFailure'])) {
            $this->customer_auto_payment_failure = new CustomNotificationItemDto($data['customerAutoPaymentFailure']);
        } else {
            $this->customer_auto_payment_failure = $data['customerAutoPaymentFailure'] ?? null;
        }
        // Handle single CustomNotificationItemDto object
        if (isset($data['customerAutoPaymentInfo']) && is_array($data['customerAutoPaymentInfo'])) {
            $this->customer_auto_payment_info = new CustomNotificationItemDto($data['customerAutoPaymentInfo']);
        } else {
            $this->customer_auto_payment_info = $data['customerAutoPaymentInfo'] ?? null;
        }
        // Handle single CustomNotificationItemDto object
        if (isset($data['customerAutoPaymentAmountChanged']) && is_array($data['customerAutoPaymentAmountChanged'])) {
            $this->customer_auto_payment_amount_changed = new CustomNotificationItemDto($data['customerAutoPaymentAmountChanged']);
        } else {
            $this->customer_auto_payment_amount_changed = $data['customerAutoPaymentAmountChanged'] ?? null;
        }
        // Handle single CustomNotificationItemDto object
        if (isset($data['teamAutoPaymentSkip']) && is_array($data['teamAutoPaymentSkip'])) {
            $this->team_auto_payment_skip = new CustomNotificationItemDto($data['teamAutoPaymentSkip']);
        } else {
            $this->team_auto_payment_skip = $data['teamAutoPaymentSkip'] ?? null;
        }
        // Handle single CustomNotificationItemDto object
        if (isset($data['teamRecurringSendInvoiceFailed']) && is_array($data['teamRecurringSendInvoiceFailed'])) {
            $this->team_recurring_send_invoice_failed = new CustomNotificationItemDto($data['teamRecurringSendInvoiceFailed']);
        } else {
            $this->team_recurring_send_invoice_failed = $data['teamRecurringSendInvoiceFailed'] ?? null;
        }
        // Handle single CustomNotificationItemDto object
        if (isset($data['customerSendEstimate']) && is_array($data['customerSendEstimate'])) {
            $this->customer_send_estimate = new CustomNotificationItemDto($data['customerSendEstimate']);
        } else {
            $this->customer_send_estimate = $data['customerSendEstimate'] ?? null;
        }
        // Handle single CustomNotificationItemDto object
        if (isset($data['teamEstimateAccepted']) && is_array($data['teamEstimateAccepted'])) {
            $this->team_estimate_accepted = new CustomNotificationItemDto($data['teamEstimateAccepted']);
        } else {
            $this->team_estimate_accepted = $data['teamEstimateAccepted'] ?? null;
        }
        // Handle single CustomNotificationItemDto object
        if (isset($data['teamEstimateDeclined']) && is_array($data['teamEstimateDeclined'])) {
            $this->team_estimate_declined = new CustomNotificationItemDto($data['teamEstimateDeclined']);
        } else {
            $this->team_estimate_declined = $data['teamEstimateDeclined'] ?? null;
        }
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
