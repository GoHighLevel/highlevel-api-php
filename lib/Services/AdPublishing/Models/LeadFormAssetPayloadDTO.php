<?php

namespace HighLevel\Services\AdPublishing\Models;

/**
 * LeadFormAssetPayloadDTO model
 * 
 * @package HighLevel\Services\AdPublishing\Models
 */
class LeadFormAssetPayloadDTO
{
    /**
     * @var string|null
     */
    public ?string $resource_name = null;

    /**
     * @var string
     */
    public string $headline;

    /**
     * @var string
     */
    public string $description;

    /**
     * @var string
     */
    public string $business_name;

    /**
     * @var string
     */
    public string $privacy_policy_url;

    /**
     * @var array&lt;LeadFormFieldDTO&gt;
     */
    public array $fields;

    /**
     * @var string
     */
    public string $call_to_action_type;

    /**
     * @var string|null
     */
    public ?string $call_to_action_description = null;

    /**
     * @var string|null
     */
    public ?string $background_image_asset = null;

    /**
     * @var string|null
     */
    public ?string $desired_intent = null;

    /**
     * @var array&lt;CustomQuestionFieldDTO&gt;|null
     */
    public ?array $custom_question_fields = null;

    /**
     * @var string|null
     */
    public ?string $post_submit_headline = null;

    /**
     * @var string|null
     */
    public ?string $post_submit_description = null;

    /**
     * @var string|null
     */
    public ?string $post_submit_call_to_action_type = null;

    /**
     * @var string|null
     */
    public ?string $final_urls = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->resource_name = $data['resourceName'] ?? null;
        $this->headline = $data['headline'] ?? '';
        $this->description = $data['description'] ?? '';
        $this->business_name = $data['businessName'] ?? '';
        $this->privacy_policy_url = $data['privacyPolicyUrl'] ?? '';
        // Handle array of LeadFormFieldDTO objects
        if (isset($data['fields']) && is_array($data['fields'])) {
            $this->fields = array_map(function($item) {
                return is_array($item) ? new LeadFormFieldDTO($item) : $item;
            }, $data['fields']);
        } else {
            $this->fields = $data['fields'] ?? [];
        }
        $this->call_to_action_type = $data['callToActionType'] ?? '';
        $this->call_to_action_description = $data['callToActionDescription'] ?? null;
        $this->background_image_asset = $data['backgroundImageAsset'] ?? null;
        $this->desired_intent = $data['desiredIntent'] ?? null;
        // Handle array of CustomQuestionFieldDTO objects
        if (isset($data['customQuestionFields']) && is_array($data['customQuestionFields'])) {
            $this->custom_question_fields = array_map(function($item) {
                return is_array($item) ? new CustomQuestionFieldDTO($item) : $item;
            }, $data['customQuestionFields']);
        } else {
            $this->custom_question_fields = $data['customQuestionFields'] ?? null;
        }
        $this->post_submit_headline = $data['postSubmitHeadline'] ?? null;
        $this->post_submit_description = $data['postSubmitDescription'] ?? null;
        $this->post_submit_call_to_action_type = $data['postSubmitCallToActionType'] ?? null;
        $this->final_urls = $data['finalUrls'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->resource_name !== null) {
            $result['resourceName'] = $this->resource_name;
        }
        if ($this->headline !== null) {
            $result['headline'] = $this->headline;
        }
        if ($this->description !== null) {
            $result['description'] = $this->description;
        }
        if ($this->business_name !== null) {
            $result['businessName'] = $this->business_name;
        }
        if ($this->privacy_policy_url !== null) {
            $result['privacyPolicyUrl'] = $this->privacy_policy_url;
        }
        if ($this->fields !== null) {
            $result['fields'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->fields);
        }
        if ($this->call_to_action_type !== null) {
            $result['callToActionType'] = $this->call_to_action_type;
        }
        if ($this->call_to_action_description !== null) {
            $result['callToActionDescription'] = $this->call_to_action_description;
        }
        if ($this->background_image_asset !== null) {
            $result['backgroundImageAsset'] = $this->background_image_asset;
        }
        if ($this->desired_intent !== null) {
            $result['desiredIntent'] = $this->desired_intent;
        }
        if ($this->custom_question_fields !== null) {
            $result['customQuestionFields'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->custom_question_fields);
        }
        if ($this->post_submit_headline !== null) {
            $result['postSubmitHeadline'] = $this->post_submit_headline;
        }
        if ($this->post_submit_description !== null) {
            $result['postSubmitDescription'] = $this->post_submit_description;
        }
        if ($this->post_submit_call_to_action_type !== null) {
            $result['postSubmitCallToActionType'] = $this->post_submit_call_to_action_type;
        }
        if ($this->final_urls !== null) {
            $result['finalUrls'] = $this->final_urls;
        }
        return $result;
    }
}
