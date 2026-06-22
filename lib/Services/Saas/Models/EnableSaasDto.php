<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Saas\Models;

/**
 * EnableSaasDto model
 * 
 * @package HighLevel\Services\Saas\Models
 */
class EnableSaasDto
{
    /**
     * @var string|null
     */
    public ?string $stripe_account_id = null;

    /**
     * @var string|null
     */
    public ?string $name = null;

    /**
     * @var string|null
     */
    public ?string $email = null;

    /**
     * @var string|null
     */
    public ?string $stripe_customer_id = null;

    /**
     * @var string
     */
    public string $company_id;

    /**
     * @var bool
     */
    public bool $is_saa_s_v2;

    /**
     * @var string|null
     */
    public ?string $contact_id = null;

    /**
     * @var string|null
     */
    public ?string $provider_location_id = null;

    /**
     * @var string|null
     */
    public ?string $description = null;

    /**
     * @var string|null
     */
    public ?string $saas_plan_id = null;

    /**
     * @var string|null
     */
    public ?string $price_id = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->stripe_account_id = $data['stripeAccountId'] ?? null;
        $this->name = $data['name'] ?? null;
        $this->email = $data['email'] ?? null;
        $this->stripe_customer_id = $data['stripeCustomerId'] ?? null;
        $this->company_id = $data['companyId'] ?? '';
        $this->is_saa_s_v2 = $data['isSaaSV2'] ?? false;
        $this->contact_id = $data['contactId'] ?? null;
        $this->provider_location_id = $data['providerLocationId'] ?? null;
        $this->description = $data['description'] ?? null;
        $this->saas_plan_id = $data['saasPlanId'] ?? null;
        $this->price_id = $data['priceId'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->stripe_account_id !== null) {
            $result['stripeAccountId'] = $this->stripe_account_id;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->email !== null) {
            $result['email'] = $this->email;
        }
        if ($this->stripe_customer_id !== null) {
            $result['stripeCustomerId'] = $this->stripe_customer_id;
        }
        if ($this->company_id !== null) {
            $result['companyId'] = $this->company_id;
        }
        if ($this->is_saa_s_v2 !== null) {
            $result['isSaaSV2'] = $this->is_saa_s_v2;
        }
        if ($this->contact_id !== null) {
            $result['contactId'] = $this->contact_id;
        }
        if ($this->provider_location_id !== null) {
            $result['providerLocationId'] = $this->provider_location_id;
        }
        if ($this->description !== null) {
            $result['description'] = $this->description;
        }
        if ($this->saas_plan_id !== null) {
            $result['saasPlanId'] = $this->saas_plan_id;
        }
        if ($this->price_id !== null) {
            $result['priceId'] = $this->price_id;
        }
        return $result;
    }
}
