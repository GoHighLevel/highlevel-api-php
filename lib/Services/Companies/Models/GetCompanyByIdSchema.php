<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

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
    public $onboarding_info;

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
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->id !== null) {
            $result['id'] = $this->id;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->email !== null) {
            $result['email'] = $this->email;
        }
        if ($this->logo_url !== null) {
            $result['logoUrl'] = $this->logo_url;
        }
        if ($this->phone !== null) {
            $result['phone'] = $this->phone;
        }
        if ($this->website !== null) {
            $result['website'] = $this->website;
        }
        if ($this->domain !== null) {
            $result['domain'] = $this->domain;
        }
        if ($this->spare_domain !== null) {
            $result['spareDomain'] = $this->spare_domain;
        }
        if ($this->privacy_policy !== null) {
            $result['privacyPolicy'] = $this->privacy_policy;
        }
        if ($this->terms_conditions !== null) {
            $result['termsConditions'] = $this->terms_conditions;
        }
        if ($this->address !== null) {
            $result['address'] = $this->address;
        }
        if ($this->city !== null) {
            $result['city'] = $this->city;
        }
        if ($this->postal_code !== null) {
            $result['postalCode'] = $this->postal_code;
        }
        if ($this->country !== null) {
            $result['country'] = $this->country;
        }
        if ($this->state !== null) {
            $result['state'] = $this->state;
        }
        if ($this->timezone !== null) {
            $result['timezone'] = $this->timezone;
        }
        if ($this->relationship_number !== null) {
            $result['relationshipNumber'] = $this->relationship_number;
        }
        if ($this->subdomain !== null) {
            $result['subdomain'] = $this->subdomain;
        }
        if ($this->plan !== null) {
            $result['plan'] = $this->plan;
        }
        if ($this->currency !== null) {
            $result['currency'] = $this->currency;
        }
        if ($this->customer_type !== null) {
            $result['customerType'] = $this->customer_type;
        }
        if ($this->terms_of_service_version !== null) {
            $result['termsOfServiceVersion'] = $this->terms_of_service_version;
        }
        if ($this->terms_of_service_accepted_by !== null) {
            $result['termsOfServiceAcceptedBy'] = $this->terms_of_service_accepted_by;
        }
        if ($this->twilio_trial_mode !== null) {
            $result['twilioTrialMode'] = $this->twilio_trial_mode;
        }
        if ($this->twilio_free_credits !== null) {
            $result['twilioFreeCredits'] = $this->twilio_free_credits;
        }
        if ($this->terms_of_service_accepted_date !== null) {
            $result['termsOfServiceAcceptedDate'] = $this->terms_of_service_accepted_date;
        }
        if ($this->privacy_policy_version !== null) {
            $result['privacyPolicyVersion'] = $this->privacy_policy_version;
        }
        if ($this->privacy_policy_accepted_by !== null) {
            $result['privacyPolicyAcceptedBy'] = $this->privacy_policy_accepted_by;
        }
        if ($this->privacy_policy_accepted_date !== null) {
            $result['privacyPolicyAcceptedDate'] = $this->privacy_policy_accepted_date;
        }
        if ($this->affiliate_policy_version !== null) {
            $result['affiliatePolicyVersion'] = $this->affiliate_policy_version;
        }
        if ($this->affiliate_policy_accepted_by !== null) {
            $result['affiliatePolicyAcceptedBy'] = $this->affiliate_policy_accepted_by;
        }
        if ($this->affiliate_policy_accepted_date !== null) {
            $result['affiliatePolicyAcceptedDate'] = $this->affiliate_policy_accepted_date;
        }
        if ($this->is_reselling !== null) {
            $result['isReselling'] = $this->is_reselling;
        }
        if ($this->onboarding_info !== null) {
            $result['onboardingInfo'] = $this->onboarding_info;
        }
        if ($this->upgrade_enabled_for_clients !== null) {
            $result['upgradeEnabledForClients'] = $this->upgrade_enabled_for_clients;
        }
        if ($this->cancel_enabled_for_clients !== null) {
            $result['cancelEnabledForClients'] = $this->cancel_enabled_for_clients;
        }
        if ($this->auto_suspend_enabled !== null) {
            $result['autoSuspendEnabled'] = $this->auto_suspend_enabled;
        }
        if ($this->saas_settings !== null) {
            $result['saasSettings'] = $this->saas_settings;
        }
        if ($this->stripe_connect_id !== null) {
            $result['stripeConnectId'] = $this->stripe_connect_id;
        }
        if ($this->enable_depreciated_features !== null) {
            $result['enableDepreciatedFeatures'] = $this->enable_depreciated_features;
        }
        if ($this->premium_upgraded !== null) {
            $result['premiumUpgraded'] = $this->premium_upgraded;
        }
        if ($this->status !== null) {
            $result['status'] = $this->status;
        }
        if ($this->location_count !== null) {
            $result['locationCount'] = $this->location_count;
        }
        if ($this->disable_email_service !== null) {
            $result['disableEmailService'] = $this->disable_email_service;
        }
        if ($this->referral_id !== null) {
            $result['referralId'] = $this->referral_id;
        }
        if ($this->is_enterprise_account !== null) {
            $result['isEnterpriseAccount'] = $this->is_enterprise_account;
        }
        if ($this->business_niche !== null) {
            $result['businessNiche'] = $this->business_niche;
        }
        if ($this->business_category !== null) {
            $result['businessCategory'] = $this->business_category;
        }
        if ($this->business_affinity_group !== null) {
            $result['businessAffinityGroup'] = $this->business_affinity_group;
        }
        if ($this->is_sandbox_account !== null) {
            $result['isSandboxAccount'] = $this->is_sandbox_account;
        }
        if ($this->enable_new_sub_account_default_data !== null) {
            $result['enableNewSubAccountDefaultData'] = $this->enable_new_sub_account_default_data;
        }
        return $result;
    }
}
