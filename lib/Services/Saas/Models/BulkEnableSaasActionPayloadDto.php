<?php

namespace HighLevel\Services\Saas\Models;

/**
 * BulkEnableSaasActionPayloadDto model
 * 
 * @package HighLevel\Services\Saas\Models
 */
class BulkEnableSaasActionPayloadDto
{
    /**
     * @var string|null
     */
    public ?string $price_id = null;

    /**
     * @var string|null
     */
    public ?string $stripe_account_id = null;

    /**
     * @var string
     */
    public string $saas_plan_id;

    /**
     * @var string|null
     */
    public ?string $provider_location_id = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->price_id = $data['priceId'] ?? null;
        $this->stripe_account_id = $data['stripeAccountId'] ?? null;
        $this->saas_plan_id = $data['saasPlanId'] ?? '';
        $this->provider_location_id = $data['providerLocationId'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->price_id !== null) {
            $result['priceId'] = $this->price_id;
        }
        if ($this->stripe_account_id !== null) {
            $result['stripeAccountId'] = $this->stripe_account_id;
        }
        if ($this->saas_plan_id !== null) {
            $result['saasPlanId'] = $this->saas_plan_id;
        }
        if ($this->provider_location_id !== null) {
            $result['providerLocationId'] = $this->provider_location_id;
        }
        return $result;
    }
}
