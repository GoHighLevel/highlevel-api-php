<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\ChatWidget\Models;

/**
 * WidgetSettingsDTO model
 * 
 * @package HighLevel\Services\ChatWidget\Models
 */
class WidgetSettingsDTO
{
    /**
     * @var mixed
     */
    public $acknowledgement_details;

    /**
     * @var string|null
     */
    public ?string $agency_name = null;

    /**
     * @var string|null
     */
    public ?string $agency_website = null;

    /**
     * @var bool|null
     */
    public ?bool $allow_avatar_image = null;

    /**
     * @var bool|null
     */
    public ?bool $auto_country_code = null;

    /**
     * @var string|null
     */
    public ?string $country_code = null;

    /**
     * @var string
     */
    public string $chat_type;

    /**
     * @var string|null
     */
    public ?string $prompt_type = null;

    /**
     * @var string
     */
    public string $chat_icon;

    /**
     * @var bool|null
     */
    public ?bool $enable_revisit_message = null;

    /**
     * @var string|null
     */
    public ?string $heading = null;

    /**
     * @var string|null
     */
    public ?string $legal_msg = null;

    /**
     * @var string|null
     */
    public ?string $live_chat_ack_msg = null;

    /**
     * @var string|null
     */
    public ?string $live_chat_ended_msg = null;

    /**
     * @var string|null
     */
    public ?string $live_chat_feedback_msg = null;

    /**
     * @var string|null
     */
    public ?string $live_chat_feedback_note = null;

    /**
     * @var string|null
     */
    public ?string $live_chat_intro_msg = null;

    /**
     * @var string|null
     */
    public ?string $live_chat_user_inactive_msg = null;

    /**
     * @var string|null
     */
    public ?string $live_chat_user_inactive_time = null;

    /**
     * @var string|null
     */
    public ?string $live_chat_visitor_inactive_msg = null;

    /**
     * @var string|null
     */
    public ?string $live_chat_visitor_inactive_time = null;

    /**
     * @var string|null
     */
    public ?string $locale = null;

    /**
     * @var string|null
     */
    public ?string $prompt_avatar = null;

    /**
     * @var string|null
     */
    public ?string $prompt_avatar_alt_text = null;

    /**
     * @var bool|null
     */
    public ?bool $is_prompt_avatar_image_optimize = null;

    /**
     * @var string|null
     */
    public ?string $prompt_msg = null;

    /**
     * @var string|null
     */
    public ?string $revisit_prompt_msg = null;

    /**
     * @var string|null
     */
    public ?string $send_action_text = null;

    /**
     * @var bool|null
     */
    public ?bool $show_agency_branding = null;

    /**
     * @var bool|null
     */
    public ?bool $show_consent_checkbox = null;

    /**
     * @var bool|null
     */
    public ?bool $show_live_chat_welcome_msg = null;

    /**
     * @var bool|null
     */
    public ?bool $show_prompt = null;

    /**
     * @var string|null
     */
    public ?string $sub_heading = null;

    /**
     * @var string|null
     */
    public ?string $success_msg = null;

    /**
     * @var string|null
     */
    public ?string $support_contact = null;

    /**
     * @var string|null
     */
    public ?string $thank_you_msg = null;

    /**
     * @var mixed
     */
    public $theme;

    /**
     * @var bool|null
     */
    public ?bool $use_email_field = null;

    /**
     * @var string|null
     */
    public ?string $wa_number = null;

    /**
     * @var string|null
     */
    public ?string $widget_primary_color = null;

    /**
     * @var string|null
     */
    public ?string $representative_assigned_message = null;

    /**
     * @var mixed
     */
    public $dimensions;

    /**
     * @var mixed
     */
    public $advance_settings;

    /**
     * @var string|null
     */
    public ?string $location_country_code = null;

    /**
     * @var string|null
     */
    public ?string $widget_id = null;

    /**
     * @var string|null
     */
    public ?string $widget_placement = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->acknowledgement_details = $data['acknowledgementDetails'] ?? null;
        $this->agency_name = $data['agencyName'] ?? null;
        $this->agency_website = $data['agencyWebsite'] ?? null;
        $this->allow_avatar_image = $data['allowAvatarImage'] ?? null;
        $this->auto_country_code = $data['autoCountryCode'] ?? null;
        $this->country_code = $data['countryCode'] ?? null;
        $this->chat_type = $data['chatType'] ?? '';
        $this->prompt_type = $data['promptType'] ?? null;
        $this->chat_icon = $data['chatIcon'] ?? '';
        $this->enable_revisit_message = $data['enableRevisitMessage'] ?? null;
        $this->heading = $data['heading'] ?? null;
        $this->legal_msg = $data['legalMsg'] ?? null;
        $this->live_chat_ack_msg = $data['liveChatAckMsg'] ?? null;
        $this->live_chat_ended_msg = $data['liveChatEndedMsg'] ?? null;
        $this->live_chat_feedback_msg = $data['liveChatFeedbackMsg'] ?? null;
        $this->live_chat_feedback_note = $data['liveChatFeedbackNote'] ?? null;
        $this->live_chat_intro_msg = $data['liveChatIntroMsg'] ?? null;
        $this->live_chat_user_inactive_msg = $data['liveChatUserInactiveMsg'] ?? null;
        $this->live_chat_user_inactive_time = $data['liveChatUserInactiveTime'] ?? null;
        $this->live_chat_visitor_inactive_msg = $data['liveChatVisitorInactiveMsg'] ?? null;
        $this->live_chat_visitor_inactive_time = $data['liveChatVisitorInactiveTime'] ?? null;
        $this->locale = $data['locale'] ?? null;
        $this->prompt_avatar = $data['promptAvatar'] ?? null;
        $this->prompt_avatar_alt_text = $data['promptAvatarAltText'] ?? null;
        $this->is_prompt_avatar_image_optimize = $data['isPromptAvatarImageOptimize'] ?? null;
        $this->prompt_msg = $data['promptMsg'] ?? null;
        $this->revisit_prompt_msg = $data['revisitPromptMsg'] ?? null;
        $this->send_action_text = $data['sendActionText'] ?? null;
        $this->show_agency_branding = $data['showAgencyBranding'] ?? null;
        $this->show_consent_checkbox = $data['showConsentCheckbox'] ?? null;
        $this->show_live_chat_welcome_msg = $data['showLiveChatWelcomeMsg'] ?? null;
        $this->show_prompt = $data['showPrompt'] ?? null;
        $this->sub_heading = $data['subHeading'] ?? null;
        $this->success_msg = $data['successMsg'] ?? null;
        $this->support_contact = $data['supportContact'] ?? null;
        $this->thank_you_msg = $data['thankYouMsg'] ?? null;
        $this->theme = $data['theme'] ?? null;
        $this->use_email_field = $data['useEmailField'] ?? null;
        $this->wa_number = $data['waNumber'] ?? null;
        $this->widget_primary_color = $data['widgetPrimaryColor'] ?? null;
        $this->representative_assigned_message = $data['representativeAssignedMessage'] ?? null;
        $this->dimensions = $data['dimensions'] ?? null;
        $this->advance_settings = $data['advanceSettings'] ?? null;
        $this->location_country_code = $data['locationCountryCode'] ?? null;
        $this->widget_id = $data['widgetId'] ?? null;
        $this->widget_placement = $data['widgetPlacement'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->acknowledgement_details !== null) {
            $result['acknowledgementDetails'] = $this->acknowledgement_details;
        }
        if ($this->agency_name !== null) {
            $result['agencyName'] = $this->agency_name;
        }
        if ($this->agency_website !== null) {
            $result['agencyWebsite'] = $this->agency_website;
        }
        if ($this->allow_avatar_image !== null) {
            $result['allowAvatarImage'] = $this->allow_avatar_image;
        }
        if ($this->auto_country_code !== null) {
            $result['autoCountryCode'] = $this->auto_country_code;
        }
        if ($this->country_code !== null) {
            $result['countryCode'] = $this->country_code;
        }
        if ($this->chat_type !== null) {
            $result['chatType'] = $this->chat_type;
        }
        if ($this->prompt_type !== null) {
            $result['promptType'] = $this->prompt_type;
        }
        if ($this->chat_icon !== null) {
            $result['chatIcon'] = $this->chat_icon;
        }
        if ($this->enable_revisit_message !== null) {
            $result['enableRevisitMessage'] = $this->enable_revisit_message;
        }
        if ($this->heading !== null) {
            $result['heading'] = $this->heading;
        }
        if ($this->legal_msg !== null) {
            $result['legalMsg'] = $this->legal_msg;
        }
        if ($this->live_chat_ack_msg !== null) {
            $result['liveChatAckMsg'] = $this->live_chat_ack_msg;
        }
        if ($this->live_chat_ended_msg !== null) {
            $result['liveChatEndedMsg'] = $this->live_chat_ended_msg;
        }
        if ($this->live_chat_feedback_msg !== null) {
            $result['liveChatFeedbackMsg'] = $this->live_chat_feedback_msg;
        }
        if ($this->live_chat_feedback_note !== null) {
            $result['liveChatFeedbackNote'] = $this->live_chat_feedback_note;
        }
        if ($this->live_chat_intro_msg !== null) {
            $result['liveChatIntroMsg'] = $this->live_chat_intro_msg;
        }
        if ($this->live_chat_user_inactive_msg !== null) {
            $result['liveChatUserInactiveMsg'] = $this->live_chat_user_inactive_msg;
        }
        if ($this->live_chat_user_inactive_time !== null) {
            $result['liveChatUserInactiveTime'] = $this->live_chat_user_inactive_time;
        }
        if ($this->live_chat_visitor_inactive_msg !== null) {
            $result['liveChatVisitorInactiveMsg'] = $this->live_chat_visitor_inactive_msg;
        }
        if ($this->live_chat_visitor_inactive_time !== null) {
            $result['liveChatVisitorInactiveTime'] = $this->live_chat_visitor_inactive_time;
        }
        if ($this->locale !== null) {
            $result['locale'] = $this->locale;
        }
        if ($this->prompt_avatar !== null) {
            $result['promptAvatar'] = $this->prompt_avatar;
        }
        if ($this->prompt_avatar_alt_text !== null) {
            $result['promptAvatarAltText'] = $this->prompt_avatar_alt_text;
        }
        if ($this->is_prompt_avatar_image_optimize !== null) {
            $result['isPromptAvatarImageOptimize'] = $this->is_prompt_avatar_image_optimize;
        }
        if ($this->prompt_msg !== null) {
            $result['promptMsg'] = $this->prompt_msg;
        }
        if ($this->revisit_prompt_msg !== null) {
            $result['revisitPromptMsg'] = $this->revisit_prompt_msg;
        }
        if ($this->send_action_text !== null) {
            $result['sendActionText'] = $this->send_action_text;
        }
        if ($this->show_agency_branding !== null) {
            $result['showAgencyBranding'] = $this->show_agency_branding;
        }
        if ($this->show_consent_checkbox !== null) {
            $result['showConsentCheckbox'] = $this->show_consent_checkbox;
        }
        if ($this->show_live_chat_welcome_msg !== null) {
            $result['showLiveChatWelcomeMsg'] = $this->show_live_chat_welcome_msg;
        }
        if ($this->show_prompt !== null) {
            $result['showPrompt'] = $this->show_prompt;
        }
        if ($this->sub_heading !== null) {
            $result['subHeading'] = $this->sub_heading;
        }
        if ($this->success_msg !== null) {
            $result['successMsg'] = $this->success_msg;
        }
        if ($this->support_contact !== null) {
            $result['supportContact'] = $this->support_contact;
        }
        if ($this->thank_you_msg !== null) {
            $result['thankYouMsg'] = $this->thank_you_msg;
        }
        if ($this->theme !== null) {
            $result['theme'] = $this->theme;
        }
        if ($this->use_email_field !== null) {
            $result['useEmailField'] = $this->use_email_field;
        }
        if ($this->wa_number !== null) {
            $result['waNumber'] = $this->wa_number;
        }
        if ($this->widget_primary_color !== null) {
            $result['widgetPrimaryColor'] = $this->widget_primary_color;
        }
        if ($this->representative_assigned_message !== null) {
            $result['representativeAssignedMessage'] = $this->representative_assigned_message;
        }
        if ($this->dimensions !== null) {
            $result['dimensions'] = $this->dimensions;
        }
        if ($this->advance_settings !== null) {
            $result['advanceSettings'] = $this->advance_settings;
        }
        if ($this->location_country_code !== null) {
            $result['locationCountryCode'] = $this->location_country_code;
        }
        if ($this->widget_id !== null) {
            $result['widgetId'] = $this->widget_id;
        }
        if ($this->widget_placement !== null) {
            $result['widgetPlacement'] = $this->widget_placement;
        }
        return $result;
    }
}
