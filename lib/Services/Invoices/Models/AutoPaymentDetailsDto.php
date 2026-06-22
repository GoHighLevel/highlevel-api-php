<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Invoices\Models;

/**
 * AutoPaymentDetailsDto model
 * 
 * @package HighLevel\Services\Invoices\Models
 */
class AutoPaymentDetailsDto
{
    /**
     * @var bool
     */
    public bool $enable;

    /**
     * @var string|null
     */
    public ?string $type = null;

    /**
     * @var string|null
     */
    public ?string $payment_method_id = null;

    /**
     * @var string|null
     */
    public ?string $customer_id = null;

    /**
     * @var CardDto|null
     */
    public ?CardDto $card = null;

    /**
     * @var USBankAccountDto|null
     */
    public ?USBankAccountDto $us_bank_account = null;

    /**
     * @var SepaDirectDebitDTO|null
     */
    public ?SepaDirectDebitDTO $sepa_direct_debit = null;

    /**
     * @var BacsDirectDebitDTO|null
     */
    public ?BacsDirectDebitDTO $bacs_direct_debit = null;

    /**
     * @var BecsDirectDebitDTO|null
     */
    public ?BecsDirectDebitDTO $becs_direct_debit = null;

    /**
     * @var string|null
     */
    public ?string $card_id = null;

    /**
     * @var array&lt;string, mixed&gt;|null
     */
    public ?array $provider = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->enable = $data['enable'] ?? false;
        $this->type = $data['type'] ?? null;
        $this->payment_method_id = $data['paymentMethodId'] ?? null;
        $this->customer_id = $data['customerId'] ?? null;
        // Handle single CardDto object
        if (isset($data['card']) && is_array($data['card'])) {
            $this->card = new CardDto($data['card']);
        } else {
            $this->card = $data['card'] ?? null;
        }
        // Handle single USBankAccountDto object
        if (isset($data['usBankAccount']) && is_array($data['usBankAccount'])) {
            $this->us_bank_account = new USBankAccountDto($data['usBankAccount']);
        } else {
            $this->us_bank_account = $data['usBankAccount'] ?? null;
        }
        // Handle single SepaDirectDebitDTO object
        if (isset($data['sepaDirectDebit']) && is_array($data['sepaDirectDebit'])) {
            $this->sepa_direct_debit = new SepaDirectDebitDTO($data['sepaDirectDebit']);
        } else {
            $this->sepa_direct_debit = $data['sepaDirectDebit'] ?? null;
        }
        // Handle single BacsDirectDebitDTO object
        if (isset($data['bacsDirectDebit']) && is_array($data['bacsDirectDebit'])) {
            $this->bacs_direct_debit = new BacsDirectDebitDTO($data['bacsDirectDebit']);
        } else {
            $this->bacs_direct_debit = $data['bacsDirectDebit'] ?? null;
        }
        // Handle single BecsDirectDebitDTO object
        if (isset($data['becsDirectDebit']) && is_array($data['becsDirectDebit'])) {
            $this->becs_direct_debit = new BecsDirectDebitDTO($data['becsDirectDebit']);
        } else {
            $this->becs_direct_debit = $data['becsDirectDebit'] ?? null;
        }
        $this->card_id = $data['cardId'] ?? null;
        $this->provider = $data['provider'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->enable !== null) {
            $result['enable'] = $this->enable;
        }
        if ($this->type !== null) {
            $result['type'] = $this->type;
        }
        if ($this->payment_method_id !== null) {
            $result['paymentMethodId'] = $this->payment_method_id;
        }
        if ($this->customer_id !== null) {
            $result['customerId'] = $this->customer_id;
        }
        if ($this->card !== null) {
            $result['card'] = is_object($this->card) && method_exists($this->card, 'toArray') 
                ? $this->card->toArray() 
                : $this->card;
        }
        if ($this->us_bank_account !== null) {
            $result['usBankAccount'] = is_object($this->us_bank_account) && method_exists($this->us_bank_account, 'toArray') 
                ? $this->us_bank_account->toArray() 
                : $this->us_bank_account;
        }
        if ($this->sepa_direct_debit !== null) {
            $result['sepaDirectDebit'] = is_object($this->sepa_direct_debit) && method_exists($this->sepa_direct_debit, 'toArray') 
                ? $this->sepa_direct_debit->toArray() 
                : $this->sepa_direct_debit;
        }
        if ($this->bacs_direct_debit !== null) {
            $result['bacsDirectDebit'] = is_object($this->bacs_direct_debit) && method_exists($this->bacs_direct_debit, 'toArray') 
                ? $this->bacs_direct_debit->toArray() 
                : $this->bacs_direct_debit;
        }
        if ($this->becs_direct_debit !== null) {
            $result['becsDirectDebit'] = is_object($this->becs_direct_debit) && method_exists($this->becs_direct_debit, 'toArray') 
                ? $this->becs_direct_debit->toArray() 
                : $this->becs_direct_debit;
        }
        if ($this->card_id !== null) {
            $result['cardId'] = $this->card_id;
        }
        if ($this->provider !== null) {
            $result['provider'] = $this->provider;
        }
        return $result;
    }
}
