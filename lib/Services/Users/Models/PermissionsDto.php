<?php

namespace HighLevel\Services\Users\Models;

/**
 * PermissionsDto model
 * 
 * @package HighLevel\Services\Users\Models
 */
class PermissionsDto
{
    /**
     * @var bool|null
     */
    public ?bool $campaigns_enabled = null;

    /**
     * @var bool|null
     */
    public ?bool $campaigns_read_only = null;

    /**
     * @var bool|null
     */
    public ?bool $contacts_enabled = null;

    /**
     * @var bool|null
     */
    public ?bool $workflows_enabled = null;

    /**
     * @var bool|null
     */
    public ?bool $workflows_read_only = null;

    /**
     * @var bool|null
     */
    public ?bool $triggers_enabled = null;

    /**
     * @var bool|null
     */
    public ?bool $funnels_enabled = null;

    /**
     * @var bool|null
     */
    public ?bool $websites_enabled = null;

    /**
     * @var bool|null
     */
    public ?bool $opportunities_enabled = null;

    /**
     * @var bool|null
     */
    public ?bool $dashboard_stats_enabled = null;

    /**
     * @var bool|null
     */
    public ?bool $bulk_requests_enabled = null;

    /**
     * @var bool|null
     */
    public ?bool $appointments_enabled = null;

    /**
     * @var bool|null
     */
    public ?bool $reviews_enabled = null;

    /**
     * @var bool|null
     */
    public ?bool $online_listings_enabled = null;

    /**
     * @var bool|null
     */
    public ?bool $phone_call_enabled = null;

    /**
     * @var bool|null
     */
    public ?bool $conversations_enabled = null;

    /**
     * @var bool|null
     */
    public ?bool $assigned_data_only = null;

    /**
     * @var bool|null
     */
    public ?bool $adwords_reporting_enabled = null;

    /**
     * @var bool|null
     */
    public ?bool $membership_enabled = null;

    /**
     * @var bool|null
     */
    public ?bool $facebook_ads_reporting_enabled = null;

    /**
     * @var bool|null
     */
    public ?bool $attributions_reporting_enabled = null;

    /**
     * @var bool|null
     */
    public ?bool $settings_enabled = null;

    /**
     * @var bool|null
     */
    public ?bool $tags_enabled = null;

    /**
     * @var bool|null
     */
    public ?bool $lead_value_enabled = null;

    /**
     * @var bool|null
     */
    public ?bool $marketing_enabled = null;

    /**
     * @var bool|null
     */
    public ?bool $agent_reporting_enabled = null;

    /**
     * @var bool|null
     */
    public ?bool $bot_service = null;

    /**
     * @var bool|null
     */
    public ?bool $social_planner = null;

    /**
     * @var bool|null
     */
    public ?bool $blogging_enabled = null;

    /**
     * @var bool|null
     */
    public ?bool $invoice_enabled = null;

    /**
     * @var bool|null
     */
    public ?bool $affiliate_manager_enabled = null;

    /**
     * @var bool|null
     */
    public ?bool $content_ai_enabled = null;

    /**
     * @var bool|null
     */
    public ?bool $refunds_enabled = null;

    /**
     * @var bool|null
     */
    public ?bool $record_payment_enabled = null;

    /**
     * @var bool|null
     */
    public ?bool $cancel_subscription_enabled = null;

    /**
     * @var bool|null
     */
    public ?bool $payments_enabled = null;

    /**
     * @var bool|null
     */
    public ?bool $communities_enabled = null;

    /**
     * @var bool|null
     */
    public ?bool $export_payments_enabled = null;

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
        $this->campaigns_enabled = $data['campaignsEnabled'] ?? null;
        $this->campaigns_read_only = $data['campaignsReadOnly'] ?? null;
        $this->contacts_enabled = $data['contactsEnabled'] ?? null;
        $this->workflows_enabled = $data['workflowsEnabled'] ?? null;
        $this->workflows_read_only = $data['workflowsReadOnly'] ?? null;
        $this->triggers_enabled = $data['triggersEnabled'] ?? null;
        $this->funnels_enabled = $data['funnelsEnabled'] ?? null;
        $this->websites_enabled = $data['websitesEnabled'] ?? null;
        $this->opportunities_enabled = $data['opportunitiesEnabled'] ?? null;
        $this->dashboard_stats_enabled = $data['dashboardStatsEnabled'] ?? null;
        $this->bulk_requests_enabled = $data['bulkRequestsEnabled'] ?? null;
        $this->appointments_enabled = $data['appointmentsEnabled'] ?? null;
        $this->reviews_enabled = $data['reviewsEnabled'] ?? null;
        $this->online_listings_enabled = $data['onlineListingsEnabled'] ?? null;
        $this->phone_call_enabled = $data['phoneCallEnabled'] ?? null;
        $this->conversations_enabled = $data['conversationsEnabled'] ?? null;
        $this->assigned_data_only = $data['assignedDataOnly'] ?? null;
        $this->adwords_reporting_enabled = $data['adwordsReportingEnabled'] ?? null;
        $this->membership_enabled = $data['membershipEnabled'] ?? null;
        $this->facebook_ads_reporting_enabled = $data['facebookAdsReportingEnabled'] ?? null;
        $this->attributions_reporting_enabled = $data['attributionsReportingEnabled'] ?? null;
        $this->settings_enabled = $data['settingsEnabled'] ?? null;
        $this->tags_enabled = $data['tagsEnabled'] ?? null;
        $this->lead_value_enabled = $data['leadValueEnabled'] ?? null;
        $this->marketing_enabled = $data['marketingEnabled'] ?? null;
        $this->agent_reporting_enabled = $data['agentReportingEnabled'] ?? null;
        $this->bot_service = $data['botService'] ?? null;
        $this->social_planner = $data['socialPlanner'] ?? null;
        $this->blogging_enabled = $data['bloggingEnabled'] ?? null;
        $this->invoice_enabled = $data['invoiceEnabled'] ?? null;
        $this->affiliate_manager_enabled = $data['affiliateManagerEnabled'] ?? null;
        $this->content_ai_enabled = $data['contentAiEnabled'] ?? null;
        $this->refunds_enabled = $data['refundsEnabled'] ?? null;
        $this->record_payment_enabled = $data['recordPaymentEnabled'] ?? null;
        $this->cancel_subscription_enabled = $data['cancelSubscriptionEnabled'] ?? null;
        $this->payments_enabled = $data['paymentsEnabled'] ?? null;
        $this->communities_enabled = $data['communitiesEnabled'] ?? null;
        $this->export_payments_enabled = $data['exportPaymentsEnabled'] ?? null;
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
