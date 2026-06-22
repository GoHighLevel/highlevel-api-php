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
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->customer_send_invoice !== null) {
            $result['customerSendInvoice'] = is_object($this->customer_send_invoice) && method_exists($this->customer_send_invoice, 'toArray') 
                ? $this->customer_send_invoice->toArray() 
                : $this->customer_send_invoice;
        }
        if ($this->team_payment_success !== null) {
            $result['teamPaymentSuccess'] = is_object($this->team_payment_success) && method_exists($this->team_payment_success, 'toArray') 
                ? $this->team_payment_success->toArray() 
                : $this->team_payment_success;
        }
        if ($this->customer_payment_success !== null) {
            $result['customerPaymentSuccess'] = is_object($this->customer_payment_success) && method_exists($this->customer_payment_success, 'toArray') 
                ? $this->customer_payment_success->toArray() 
                : $this->customer_payment_success;
        }
        if ($this->team_auto_payment_success !== null) {
            $result['teamAutoPaymentSuccess'] = is_object($this->team_auto_payment_success) && method_exists($this->team_auto_payment_success, 'toArray') 
                ? $this->team_auto_payment_success->toArray() 
                : $this->team_auto_payment_success;
        }
        if ($this->customer_auto_payment_success !== null) {
            $result['customerAutoPaymentSuccess'] = is_object($this->customer_auto_payment_success) && method_exists($this->customer_auto_payment_success, 'toArray') 
                ? $this->customer_auto_payment_success->toArray() 
                : $this->customer_auto_payment_success;
        }
        if ($this->team_payment_failure !== null) {
            $result['teamPaymentFailure'] = is_object($this->team_payment_failure) && method_exists($this->team_payment_failure, 'toArray') 
                ? $this->team_payment_failure->toArray() 
                : $this->team_payment_failure;
        }
        if ($this->customer_payment_failure !== null) {
            $result['customerPaymentFailure'] = is_object($this->customer_payment_failure) && method_exists($this->customer_payment_failure, 'toArray') 
                ? $this->customer_payment_failure->toArray() 
                : $this->customer_payment_failure;
        }
        if ($this->team_auto_payment_failure !== null) {
            $result['teamAutoPaymentFailure'] = is_object($this->team_auto_payment_failure) && method_exists($this->team_auto_payment_failure, 'toArray') 
                ? $this->team_auto_payment_failure->toArray() 
                : $this->team_auto_payment_failure;
        }
        if ($this->customer_auto_payment_failure !== null) {
            $result['customerAutoPaymentFailure'] = is_object($this->customer_auto_payment_failure) && method_exists($this->customer_auto_payment_failure, 'toArray') 
                ? $this->customer_auto_payment_failure->toArray() 
                : $this->customer_auto_payment_failure;
        }
        if ($this->customer_auto_payment_info !== null) {
            $result['customerAutoPaymentInfo'] = is_object($this->customer_auto_payment_info) && method_exists($this->customer_auto_payment_info, 'toArray') 
                ? $this->customer_auto_payment_info->toArray() 
                : $this->customer_auto_payment_info;
        }
        if ($this->customer_auto_payment_amount_changed !== null) {
            $result['customerAutoPaymentAmountChanged'] = is_object($this->customer_auto_payment_amount_changed) && method_exists($this->customer_auto_payment_amount_changed, 'toArray') 
                ? $this->customer_auto_payment_amount_changed->toArray() 
                : $this->customer_auto_payment_amount_changed;
        }
        if ($this->team_auto_payment_skip !== null) {
            $result['teamAutoPaymentSkip'] = is_object($this->team_auto_payment_skip) && method_exists($this->team_auto_payment_skip, 'toArray') 
                ? $this->team_auto_payment_skip->toArray() 
                : $this->team_auto_payment_skip;
        }
        if ($this->team_recurring_send_invoice_failed !== null) {
            $result['teamRecurringSendInvoiceFailed'] = is_object($this->team_recurring_send_invoice_failed) && method_exists($this->team_recurring_send_invoice_failed, 'toArray') 
                ? $this->team_recurring_send_invoice_failed->toArray() 
                : $this->team_recurring_send_invoice_failed;
        }
        if ($this->customer_send_estimate !== null) {
            $result['customerSendEstimate'] = is_object($this->customer_send_estimate) && method_exists($this->customer_send_estimate, 'toArray') 
                ? $this->customer_send_estimate->toArray() 
                : $this->customer_send_estimate;
        }
        if ($this->team_estimate_accepted !== null) {
            $result['teamEstimateAccepted'] = is_object($this->team_estimate_accepted) && method_exists($this->team_estimate_accepted, 'toArray') 
                ? $this->team_estimate_accepted->toArray() 
                : $this->team_estimate_accepted;
        }
        if ($this->team_estimate_declined !== null) {
            $result['teamEstimateDeclined'] = is_object($this->team_estimate_declined) && method_exists($this->team_estimate_declined, 'toArray') 
                ? $this->team_estimate_declined->toArray() 
                : $this->team_estimate_declined;
        }
        return $result;
    }
}
