<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

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
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->campaigns_enabled !== null) {
            $result['campaignsEnabled'] = $this->campaigns_enabled;
        }
        if ($this->campaigns_read_only !== null) {
            $result['campaignsReadOnly'] = $this->campaigns_read_only;
        }
        if ($this->contacts_enabled !== null) {
            $result['contactsEnabled'] = $this->contacts_enabled;
        }
        if ($this->workflows_enabled !== null) {
            $result['workflowsEnabled'] = $this->workflows_enabled;
        }
        if ($this->workflows_read_only !== null) {
            $result['workflowsReadOnly'] = $this->workflows_read_only;
        }
        if ($this->triggers_enabled !== null) {
            $result['triggersEnabled'] = $this->triggers_enabled;
        }
        if ($this->funnels_enabled !== null) {
            $result['funnelsEnabled'] = $this->funnels_enabled;
        }
        if ($this->websites_enabled !== null) {
            $result['websitesEnabled'] = $this->websites_enabled;
        }
        if ($this->opportunities_enabled !== null) {
            $result['opportunitiesEnabled'] = $this->opportunities_enabled;
        }
        if ($this->dashboard_stats_enabled !== null) {
            $result['dashboardStatsEnabled'] = $this->dashboard_stats_enabled;
        }
        if ($this->bulk_requests_enabled !== null) {
            $result['bulkRequestsEnabled'] = $this->bulk_requests_enabled;
        }
        if ($this->appointments_enabled !== null) {
            $result['appointmentsEnabled'] = $this->appointments_enabled;
        }
        if ($this->reviews_enabled !== null) {
            $result['reviewsEnabled'] = $this->reviews_enabled;
        }
        if ($this->online_listings_enabled !== null) {
            $result['onlineListingsEnabled'] = $this->online_listings_enabled;
        }
        if ($this->phone_call_enabled !== null) {
            $result['phoneCallEnabled'] = $this->phone_call_enabled;
        }
        if ($this->conversations_enabled !== null) {
            $result['conversationsEnabled'] = $this->conversations_enabled;
        }
        if ($this->assigned_data_only !== null) {
            $result['assignedDataOnly'] = $this->assigned_data_only;
        }
        if ($this->adwords_reporting_enabled !== null) {
            $result['adwordsReportingEnabled'] = $this->adwords_reporting_enabled;
        }
        if ($this->membership_enabled !== null) {
            $result['membershipEnabled'] = $this->membership_enabled;
        }
        if ($this->facebook_ads_reporting_enabled !== null) {
            $result['facebookAdsReportingEnabled'] = $this->facebook_ads_reporting_enabled;
        }
        if ($this->attributions_reporting_enabled !== null) {
            $result['attributionsReportingEnabled'] = $this->attributions_reporting_enabled;
        }
        if ($this->settings_enabled !== null) {
            $result['settingsEnabled'] = $this->settings_enabled;
        }
        if ($this->tags_enabled !== null) {
            $result['tagsEnabled'] = $this->tags_enabled;
        }
        if ($this->lead_value_enabled !== null) {
            $result['leadValueEnabled'] = $this->lead_value_enabled;
        }
        if ($this->marketing_enabled !== null) {
            $result['marketingEnabled'] = $this->marketing_enabled;
        }
        if ($this->agent_reporting_enabled !== null) {
            $result['agentReportingEnabled'] = $this->agent_reporting_enabled;
        }
        if ($this->bot_service !== null) {
            $result['botService'] = $this->bot_service;
        }
        if ($this->social_planner !== null) {
            $result['socialPlanner'] = $this->social_planner;
        }
        if ($this->blogging_enabled !== null) {
            $result['bloggingEnabled'] = $this->blogging_enabled;
        }
        if ($this->invoice_enabled !== null) {
            $result['invoiceEnabled'] = $this->invoice_enabled;
        }
        if ($this->affiliate_manager_enabled !== null) {
            $result['affiliateManagerEnabled'] = $this->affiliate_manager_enabled;
        }
        if ($this->content_ai_enabled !== null) {
            $result['contentAiEnabled'] = $this->content_ai_enabled;
        }
        if ($this->refunds_enabled !== null) {
            $result['refundsEnabled'] = $this->refunds_enabled;
        }
        if ($this->record_payment_enabled !== null) {
            $result['recordPaymentEnabled'] = $this->record_payment_enabled;
        }
        if ($this->cancel_subscription_enabled !== null) {
            $result['cancelSubscriptionEnabled'] = $this->cancel_subscription_enabled;
        }
        if ($this->payments_enabled !== null) {
            $result['paymentsEnabled'] = $this->payments_enabled;
        }
        if ($this->communities_enabled !== null) {
            $result['communitiesEnabled'] = $this->communities_enabled;
        }
        if ($this->export_payments_enabled !== null) {
            $result['exportPaymentsEnabled'] = $this->export_payments_enabled;
        }
        return $result;
    }
}
