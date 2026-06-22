<?php

namespace HighLevel\Services\AdPublishing\Models;

/**
 * CreateLeadFormDTO model
 * 
 * @package HighLevel\Services\AdPublishing\Models
 */
class CreateLeadFormDTO
{
    /**
     * @var string
     */
    public string $type;

    /**
     * @var string
     */
    public string $name;

    /**
     * @var string
     */
    public string $location_id;

    /**
     * @var mixed
     */
    public $greeting_card;

    /**
     * @var array&lt;FormQuestion&gt;
     */
    public array $questions;

    /**
     * @var string|null
     */
    public ?string $question_page_headline = null;

    /**
     * @var string
     */
    public string $privacy_policy_link;

    /**
     * @var string|null
     */
    public ?string $privacy_policy_text = null;

    /**
     * @var mixed
     */
    public $custom_disclaimer;

    /**
     * @var mixed
     */
    public $thank_you_page;

    /**
     * @var bool|null
     */
    public ?bool $is_draft = null;

    /**
     * @var string|null
     */
    public ?string $draft_form_id = null;

    /**
     * @var string|null
     */
    public ?string $locale = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->type = $data['type'] ?? '';
        $this->name = $data['name'] ?? '';
        $this->location_id = $data['locationId'] ?? '';
        $this->greeting_card = $data['greetingCard'] ?? null;
        // Handle array of FormQuestion objects
        if (isset($data['questions']) && is_array($data['questions'])) {
            $this->questions = array_map(function($item) {
                return is_array($item) ? new FormQuestion($item) : $item;
            }, $data['questions']);
        } else {
            $this->questions = $data['questions'] ?? [];
        }
        $this->question_page_headline = $data['questionPageHeadline'] ?? null;
        $this->privacy_policy_link = $data['privacyPolicyLink'] ?? '';
        $this->privacy_policy_text = $data['privacyPolicyText'] ?? null;
        $this->custom_disclaimer = $data['customDisclaimer'] ?? null;
        $this->thank_you_page = $data['thankYouPage'] ?? null;
        $this->is_draft = $data['isDraft'] ?? null;
        $this->draft_form_id = $data['draftFormId'] ?? null;
        $this->locale = $data['locale'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->type !== null) {
            $result['type'] = $this->type;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->location_id !== null) {
            $result['locationId'] = $this->location_id;
        }
        if ($this->greeting_card !== null) {
            $result['greetingCard'] = $this->greeting_card;
        }
        if ($this->questions !== null) {
            $result['questions'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->questions);
        }
        if ($this->question_page_headline !== null) {
            $result['questionPageHeadline'] = $this->question_page_headline;
        }
        if ($this->privacy_policy_link !== null) {
            $result['privacyPolicyLink'] = $this->privacy_policy_link;
        }
        if ($this->privacy_policy_text !== null) {
            $result['privacyPolicyText'] = $this->privacy_policy_text;
        }
        if ($this->custom_disclaimer !== null) {
            $result['customDisclaimer'] = $this->custom_disclaimer;
        }
        if ($this->thank_you_page !== null) {
            $result['thankYouPage'] = $this->thank_you_page;
        }
        if ($this->is_draft !== null) {
            $result['isDraft'] = $this->is_draft;
        }
        if ($this->draft_form_id !== null) {
            $result['draftFormId'] = $this->draft_form_id;
        }
        if ($this->locale !== null) {
            $result['locale'] = $this->locale;
        }
        return $result;
    }
}
