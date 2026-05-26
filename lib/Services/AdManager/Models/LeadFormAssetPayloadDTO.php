<?php

namespace HighLevel\Services\AdManager\Models;

/**
 * LeadFormAssetPayloadDTO model
 * 
 * @package HighLevel\Services\AdManager\Models
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
