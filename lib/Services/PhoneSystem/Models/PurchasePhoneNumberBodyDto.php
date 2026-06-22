<?php

namespace HighLevel\Services\PhoneSystem\Models;

/**
 * PurchasePhoneNumberBodyDto model
 * 
 * @package HighLevel\Services\PhoneSystem\Models
 */
class PurchasePhoneNumberBodyDto
{
    /**
     * @var string
     */
    public string $phone_number;

    /**
     * @var string
     */
    public string $address_sid;

    /**
     * @var string
     */
    public string $bundle_sid;

    /**
     * @var string
     */
    public string $country_code;

    /**
     * @var array&lt;string, mixed&gt;
     */
    public array $number_type;

    /**
     * @var string
     */
    public string $payment_intent_id;

    /**
     * @var string
     */
    public string $stripe_account_id;

    /**
     * @var string
     */
    public string $payment_method_id;

    /**
     * @var string
     */
    public string $locality;

    /**
     * @var string
     */
    public string $region;

    /**
     * @var string
     */
    public string $fingerprint_id;

    /**
     * @var bool
     */
    public bool $skip_location_k_y_c;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->phone_number = $data['phoneNumber'] ?? '';
        $this->address_sid = $data['addressSid'] ?? '';
        $this->bundle_sid = $data['bundleSid'] ?? '';
        $this->country_code = $data['countryCode'] ?? '';
        $this->number_type = $data['numberType'] ?? null;
        $this->payment_intent_id = $data['paymentIntentId'] ?? '';
        $this->stripe_account_id = $data['stripeAccountId'] ?? '';
        $this->payment_method_id = $data['paymentMethodId'] ?? '';
        $this->locality = $data['locality'] ?? '';
        $this->region = $data['region'] ?? '';
        $this->fingerprint_id = $data['fingerprintId'] ?? '';
        $this->skip_location_k_y_c = $data['skipLocationKYC'] ?? false;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->phone_number !== null) {
            $result['phoneNumber'] = $this->phone_number;
        }
        if ($this->address_sid !== null) {
            $result['addressSid'] = $this->address_sid;
        }
        if ($this->bundle_sid !== null) {
            $result['bundleSid'] = $this->bundle_sid;
        }
        if ($this->country_code !== null) {
            $result['countryCode'] = $this->country_code;
        }
        if ($this->number_type !== null) {
            $result['numberType'] = $this->number_type;
        }
        if ($this->payment_intent_id !== null) {
            $result['paymentIntentId'] = $this->payment_intent_id;
        }
        if ($this->stripe_account_id !== null) {
            $result['stripeAccountId'] = $this->stripe_account_id;
        }
        if ($this->payment_method_id !== null) {
            $result['paymentMethodId'] = $this->payment_method_id;
        }
        if ($this->locality !== null) {
            $result['locality'] = $this->locality;
        }
        if ($this->region !== null) {
            $result['region'] = $this->region;
        }
        if ($this->fingerprint_id !== null) {
            $result['fingerprintId'] = $this->fingerprint_id;
        }
        if ($this->skip_location_k_y_c !== null) {
            $result['skipLocationKYC'] = $this->skip_location_k_y_c;
        }
        return $result;
    }
}
