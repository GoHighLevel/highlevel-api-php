<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\ChatWidget\Models;

/**
 * AdvanceSettingsDTO model
 * 
 * @package HighLevel\Services\ChatWidget\Models
 */
class AdvanceSettingsDTO
{
    /**
     * @var string|null
     */
    public ?string $branding_title = null;

    /**
     * @var mixed
     */
    public $redirect;

    /**
     * @var bool|null
     */
    public ?bool $enable_contact_form = null;

    /**
     * @var bool|null
     */
    public ?bool $default_consent_check = null;

    /**
     * @var mixed
     */
    public $business_office_hours;

    /**
     * @var array&lt;string&gt;|null
     */
    public ?array $contact_form_options = null;

    /**
     * @var array&lt;string&gt;|null
     */
    public ?array $all_in_one_chat_types = null;

    /**
     * @var string|null
     */
    public ?string $all_in_one_initial_msg = null;

    /**
     * @var string|null
     */
    public ?string $contact_form_intro_message = null;

    /**
     * @var string|null
     */
    public ?string $contact_form_system_message = null;

    /**
     * @var string|null
     */
    public ?string $prefilled_message_text = null;

    /**
     * @var array&lt;string, mixed&gt;|null
     */
    public ?array $voice_ai_agent = null;

    /**
     * @var mixed
     */
    public $fb_page;

    /**
     * @var mixed
     */
    public $instagram_page;

    /**
     * @var bool|null
     */
    public ?bool $play_notification_sound = null;

    /**
     * @var string|null
     */
    public ?string $voice_ai_send_action_text = null;

    /**
     * @var mixed
     */
    public $a_two_p_compliance;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->branding_title = $data['brandingTitle'] ?? null;
        $this->redirect = $data['redirect'] ?? null;
        $this->enable_contact_form = $data['enableContactForm'] ?? null;
        $this->default_consent_check = $data['defaultConsentCheck'] ?? null;
        $this->business_office_hours = $data['businessOfficeHours'] ?? null;
        $this->contact_form_options = $data['contactFormOptions'] ?? null;
        $this->all_in_one_chat_types = $data['allInOneChatTypes'] ?? null;
        $this->all_in_one_initial_msg = $data['allInOneInitialMsg'] ?? null;
        $this->contact_form_intro_message = $data['contactFormIntroMessage'] ?? null;
        $this->contact_form_system_message = $data['contactFormSystemMessage'] ?? null;
        $this->prefilled_message_text = $data['prefilledMessageText'] ?? null;
        $this->voice_ai_agent = $data['voiceAiAgent'] ?? null;
        $this->fb_page = $data['fbPage'] ?? null;
        $this->instagram_page = $data['instagramPage'] ?? null;
        $this->play_notification_sound = $data['playNotificationSound'] ?? null;
        $this->voice_ai_send_action_text = $data['voiceAiSendActionText'] ?? null;
        $this->a_two_p_compliance = $data['aTwoPCompliance'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->branding_title !== null) {
            $result['brandingTitle'] = $this->branding_title;
        }
        if ($this->redirect !== null) {
            $result['redirect'] = $this->redirect;
        }
        if ($this->enable_contact_form !== null) {
            $result['enableContactForm'] = $this->enable_contact_form;
        }
        if ($this->default_consent_check !== null) {
            $result['defaultConsentCheck'] = $this->default_consent_check;
        }
        if ($this->business_office_hours !== null) {
            $result['businessOfficeHours'] = $this->business_office_hours;
        }
        if ($this->contact_form_options !== null) {
            $result['contactFormOptions'] = $this->contact_form_options;
        }
        if ($this->all_in_one_chat_types !== null) {
            $result['allInOneChatTypes'] = $this->all_in_one_chat_types;
        }
        if ($this->all_in_one_initial_msg !== null) {
            $result['allInOneInitialMsg'] = $this->all_in_one_initial_msg;
        }
        if ($this->contact_form_intro_message !== null) {
            $result['contactFormIntroMessage'] = $this->contact_form_intro_message;
        }
        if ($this->contact_form_system_message !== null) {
            $result['contactFormSystemMessage'] = $this->contact_form_system_message;
        }
        if ($this->prefilled_message_text !== null) {
            $result['prefilledMessageText'] = $this->prefilled_message_text;
        }
        if ($this->voice_ai_agent !== null) {
            $result['voiceAiAgent'] = $this->voice_ai_agent;
        }
        if ($this->fb_page !== null) {
            $result['fbPage'] = $this->fb_page;
        }
        if ($this->instagram_page !== null) {
            $result['instagramPage'] = $this->instagram_page;
        }
        if ($this->play_notification_sound !== null) {
            $result['playNotificationSound'] = $this->play_notification_sound;
        }
        if ($this->voice_ai_send_action_text !== null) {
            $result['voiceAiSendActionText'] = $this->voice_ai_send_action_text;
        }
        if ($this->a_two_p_compliance !== null) {
            $result['aTwoPCompliance'] = $this->a_two_p_compliance;
        }
        return $result;
    }
}
