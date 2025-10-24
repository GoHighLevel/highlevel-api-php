<?php

namespace HighLevel\Services\Companies\Models;

/**
 * GetCompanyByIdSchema model
 * 
 * @package HighLevel\Services\Companies\Models
 */
class GetCompanyByIdSchema
{
    /**
     * @var string|null
     */
    public ?string $id = null;

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
    public ?string $logo_url = null;

    /**
     * @var string|null
     */
    public ?string $phone = null;

    /**
     * @var string|null
     */
    public ?string $website = null;

    /**
     * @var string|null
     */
    public ?string $domain = null;

    /**
     * @var string|null
     */
    public ?string $spare_domain = null;

    /**
     * @var string|null
     */
    public ?string $privacy_policy = null;

    /**
     * @var string|null
     */
    public ?string $terms_conditions = null;

    /**
     * @var string|null
     */
    public ?string $address = null;

    /**
     * @var string|null
     */
    public ?string $city = null;

    /**
     * @var string|null
     */
    public ?string $postal_code = null;

    /**
     * @var string|null
     */
    public ?string $country = null;

    /**
     * @var string|null
     */
    public ?string $state = null;

    /**
     * @var string|null
     */
    public ?string $timezone = null;

    /**
     * @var string|null
     */
    public ?string $relationship_number = null;

    /**
     * @var string|null
     */
    public ?string $subdomain = null;

    /**
     * @var float|null
     */
    public ?float $plan = null;

    /**
     * @var string|null
     */
    public ?string $currency = null;

    /**
     * @var string|null
     */
    public ?string $customer_type = null;

    /**
     * @var string|null
     */
    public ?string $terms_of_service_version = null;

    /**
     * @var string|null
     */
    public ?string $terms_of_service_accepted_by = null;

    /**
     * @var bool|null
     */
    public ?bool $twilio_trial_mode = null;

    /**
     * @var float|null
     */
    public ?float $twilio_free_credits = null;

    /**
     * @var string|null
     */
    public ?string $terms_of_service_accepted_date = null;

    /**
     * @var string|null
     */
    public ?string $privacy_policy_version = null;

    /**
     * @var string|null
     */
    public ?string $privacy_policy_accepted_by = null;

    /**
     * @var string|null
     */
    public ?string $privacy_policy_accepted_date = null;

    /**
     * @var string|null
     */
    public ?string $affiliate_policy_version = null;

    /**
     * @var string|null
     */
    public ?string $affiliate_policy_accepted_by = null;

    /**
     * @var string|null
     */
    public ?string $affiliate_policy_accepted_date = null;

    /**
     * @var bool|null
     */
    public ?bool $is_reselling = null;

    /**
     * @var mixed
     */
    public mixed $onboarding_info;

    /**
     * @var bool|null
     */
    public ?bool $upgrade_enabled_for_clients = null;

    /**
     * @var bool|null
     */
    public ?bool $cancel_enabled_for_clients = null;

    /**
     * @var bool|null
     */
    public ?bool $auto_suspend_enabled = null;

    /**
     * @var array&lt;string, mixed&gt;|null
     */
    public ?array $saas_settings = null;

    /**
     * @var string|null
     */
    public ?string $stripe_connect_id = null;

    /**
     * @var bool|null
     */
    public ?bool $enable_depreciated_features = null;

    /**
     * @var bool|null
     */
    public ?bool $premium_upgraded = null;

    /**
     * @var string|null
     */
    public ?string $status = null;

    /**
     * @var float|null
     */
    public ?float $location_count = null;

    /**
     * @var bool|null
     */
    public ?bool $disable_email_service = null;

    /**
     * @var string|null
     */
    public ?string $referral_id = null;

    /**
     * @var bool|null
     */
    public ?bool $is_enterprise_account = null;

    /**
     * @var string|null
     */
    public ?string $business_niche = null;

    /**
     * @var string|null
     */
    public ?string $business_category = null;

    /**
     * @var string|null
     */
    public ?string $business_affinity_group = null;

    /**
     * @var bool|null
     */
    public ?bool $is_sandbox_account = null;

    /**
     * @var bool|null
     */
    public ?bool $enable_new_sub_account_default_data = null;

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
        $this->id = $data['id'] ?? null;
        $this->name = $data['name'] ?? null;
        $this->email = $data['email'] ?? null;
        $this->logo_url = $data['logoUrl'] ?? null;
        $this->phone = $data['phone'] ?? null;
        $this->website = $data['website'] ?? null;
        $this->domain = $data['domain'] ?? null;
        $this->spare_domain = $data['spareDomain'] ?? null;
        $this->privacy_policy = $data['privacyPolicy'] ?? null;
        $this->terms_conditions = $data['termsConditions'] ?? null;
        $this->address = $data['address'] ?? null;
        $this->city = $data['city'] ?? null;
        $this->postal_code = $data['postalCode'] ?? null;
        $this->country = $data['country'] ?? null;
        $this->state = $data['state'] ?? null;
        $this->timezone = $data['timezone'] ?? null;
        $this->relationship_number = $data['relationshipNumber'] ?? null;
        $this->subdomain = $data['subdomain'] ?? null;
        $this->plan = $data['plan'] ?? null;
        $this->currency = $data['currency'] ?? null;
        $this->customer_type = $data['customerType'] ?? null;
        $this->terms_of_service_version = $data['termsOfServiceVersion'] ?? null;
        $this->terms_of_service_accepted_by = $data['termsOfServiceAcceptedBy'] ?? null;
        $this->twilio_trial_mode = $data['twilioTrialMode'] ?? null;
        $this->twilio_free_credits = $data['twilioFreeCredits'] ?? null;
        $this->terms_of_service_accepted_date = $data['termsOfServiceAcceptedDate'] ?? null;
        $this->privacy_policy_version = $data['privacyPolicyVersion'] ?? null;
        $this->privacy_policy_accepted_by = $data['privacyPolicyAcceptedBy'] ?? null;
        $this->privacy_policy_accepted_date = $data['privacyPolicyAcceptedDate'] ?? null;
        $this->affiliate_policy_version = $data['affiliatePolicyVersion'] ?? null;
        $this->affiliate_policy_accepted_by = $data['affiliatePolicyAcceptedBy'] ?? null;
        $this->affiliate_policy_accepted_date = $data['affiliatePolicyAcceptedDate'] ?? null;
        $this->is_reselling = $data['isReselling'] ?? null;
        $this->onboarding_info = $data['onboardingInfo'] ?? null;
        $this->upgrade_enabled_for_clients = $data['upgradeEnabledForClients'] ?? null;
        $this->cancel_enabled_for_clients = $data['cancelEnabledForClients'] ?? null;
        $this->auto_suspend_enabled = $data['autoSuspendEnabled'] ?? null;
        $this->saas_settings = $data['saasSettings'] ?? null;
        $this->stripe_connect_id = $data['stripeConnectId'] ?? null;
        $this->enable_depreciated_features = $data['enableDepreciatedFeatures'] ?? null;
        $this->premium_upgraded = $data['premiumUpgraded'] ?? null;
        $this->status = $data['status'] ?? null;
        $this->location_count = $data['locationCount'] ?? null;
        $this->disable_email_service = $data['disableEmailService'] ?? null;
        $this->referral_id = $data['referralId'] ?? null;
        $this->is_enterprise_account = $data['isEnterpriseAccount'] ?? null;
        $this->business_niche = $data['businessNiche'] ?? null;
        $this->business_category = $data['businessCategory'] ?? null;
        $this->business_affinity_group = $data['businessAffinityGroup'] ?? null;
        $this->is_sandbox_account = $data['isSandboxAccount'] ?? null;
        $this->enable_new_sub_account_default_data = $data['enableNewSubAccountDefaultData'] ?? null;
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
