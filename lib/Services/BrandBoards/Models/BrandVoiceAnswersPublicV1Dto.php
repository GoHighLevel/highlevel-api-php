<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\BrandBoards\Models;

/**
 * BrandVoiceAnswersPublicV1Dto model
 * 
 * @package HighLevel\Services\BrandBoards\Models
 */
class BrandVoiceAnswersPublicV1Dto
{
    /**
     * @var string|null
     */
    public ?string $brand_name = null;

    /**
     * @var string|null
     */
    public ?string $tone_of_voice = null;

    /**
     * @var string|null
     */
    public ?string $target_audience = null;

    /**
     * @var string|null
     */
    public ?string $customer_pain_points = null;

    /**
     * @var string|null
     */
    public ?string $business_type = null;

    /**
     * @var string|null
     */
    public ?string $company_website = null;

    /**
     * @var string|null
     */
    public ?string $company_email = null;

    /**
     * @var string|null
     */
    public ?string $company_address = null;

    /**
     * @var array&lt;string, mixed&gt;|null
     */
    public ?array $phone = null;

    /**
     * @var string|null
     */
    public ?string $business_hours = null;

    /**
     * @var string|null
     */
    public ?string $brand_promise = null;

    /**
     * @var string|null
     */
    public ?string $brand_values = null;

    /**
     * @var string|null
     */
    public ?string $brand_purpose = null;

    /**
     * @var string|null
     */
    public ?string $competitive_advantage = null;

    /**
     * @var string|null
     */
    public ?string $risks_of_inaction = null;

    /**
     * @var string|null
     */
    public ?string $unique_selling_proposition = null;

    /**
     * @var string|null
     */
    public ?string $call_to_action = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->brand_name = $data['brandName'] ?? null;
        $this->tone_of_voice = $data['toneOfVoice'] ?? null;
        $this->target_audience = $data['targetAudience'] ?? null;
        $this->customer_pain_points = $data['customerPainPoints'] ?? null;
        $this->business_type = $data['businessType'] ?? null;
        $this->company_website = $data['companyWebsite'] ?? null;
        $this->company_email = $data['companyEmail'] ?? null;
        $this->company_address = $data['companyAddress'] ?? null;
        $this->phone = $data['phone'] ?? null;
        $this->business_hours = $data['businessHours'] ?? null;
        $this->brand_promise = $data['brandPromise'] ?? null;
        $this->brand_values = $data['brandValues'] ?? null;
        $this->brand_purpose = $data['brandPurpose'] ?? null;
        $this->competitive_advantage = $data['competitiveAdvantage'] ?? null;
        $this->risks_of_inaction = $data['risksOfInaction'] ?? null;
        $this->unique_selling_proposition = $data['uniqueSellingProposition'] ?? null;
        $this->call_to_action = $data['callToAction'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->brand_name !== null) {
            $result['brandName'] = $this->brand_name;
        }
        if ($this->tone_of_voice !== null) {
            $result['toneOfVoice'] = $this->tone_of_voice;
        }
        if ($this->target_audience !== null) {
            $result['targetAudience'] = $this->target_audience;
        }
        if ($this->customer_pain_points !== null) {
            $result['customerPainPoints'] = $this->customer_pain_points;
        }
        if ($this->business_type !== null) {
            $result['businessType'] = $this->business_type;
        }
        if ($this->company_website !== null) {
            $result['companyWebsite'] = $this->company_website;
        }
        if ($this->company_email !== null) {
            $result['companyEmail'] = $this->company_email;
        }
        if ($this->company_address !== null) {
            $result['companyAddress'] = $this->company_address;
        }
        if ($this->phone !== null) {
            $result['phone'] = $this->phone;
        }
        if ($this->business_hours !== null) {
            $result['businessHours'] = $this->business_hours;
        }
        if ($this->brand_promise !== null) {
            $result['brandPromise'] = $this->brand_promise;
        }
        if ($this->brand_values !== null) {
            $result['brandValues'] = $this->brand_values;
        }
        if ($this->brand_purpose !== null) {
            $result['brandPurpose'] = $this->brand_purpose;
        }
        if ($this->competitive_advantage !== null) {
            $result['competitiveAdvantage'] = $this->competitive_advantage;
        }
        if ($this->risks_of_inaction !== null) {
            $result['risksOfInaction'] = $this->risks_of_inaction;
        }
        if ($this->unique_selling_proposition !== null) {
            $result['uniqueSellingProposition'] = $this->unique_selling_proposition;
        }
        if ($this->call_to_action !== null) {
            $result['callToAction'] = $this->call_to_action;
        }
        return $result;
    }
}
