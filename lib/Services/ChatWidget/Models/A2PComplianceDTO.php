<?php

namespace HighLevel\Services\ChatWidget\Models;

/**
 * A2PComplianceDTO model
 * 
 * @package HighLevel\Services\ChatWidget\Models
 */
class A2PComplianceDTO
{
    /**
     * @var bool|null
     */
    public ?bool $enable_a2_p_compliance = null;

    /**
     * @var string|null
     */
    public ?string $a2p_opt_in_form1 = null;

    /**
     * @var bool|null
     */
    public ?bool $a2p_opt_in_form1_show_checkbox = null;

    /**
     * @var bool|null
     */
    public ?bool $a2p_opt_in_form1_pre_checked = null;

    /**
     * @var bool|null
     */
    public ?bool $is_a2_p_opt_in_form2 = null;

    /**
     * @var string|null
     */
    public ?string $a2p_opt_in_form2 = null;

    /**
     * @var bool|null
     */
    public ?bool $a2p_opt_in_form2_show_checkbox = null;

    /**
     * @var bool|null
     */
    public ?bool $a2p_opt_in_form2_pre_checked = null;

    /**
     * @var string|null
     */
    public ?string $privacy_policy_link = null;

    /**
     * @var string|null
     */
    public ?string $terms_of_service_link = null;

    /**
     * @var bool|null
     */
    public ?bool $is_a2_p_opt_in_form1 = null;

    /**
     * @var string|null
     */
    public ?string $message_type = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->enable_a2_p_compliance = $data['enableA2PCompliance'] ?? null;
        $this->a2p_opt_in_form1 = $data['a2pOptInForm1'] ?? null;
        $this->a2p_opt_in_form1_show_checkbox = $data['a2pOptInForm1ShowCheckbox'] ?? null;
        $this->a2p_opt_in_form1_pre_checked = $data['a2pOptInForm1PreChecked'] ?? null;
        $this->is_a2_p_opt_in_form2 = $data['isA2POptInForm2'] ?? null;
        $this->a2p_opt_in_form2 = $data['a2pOptInForm2'] ?? null;
        $this->a2p_opt_in_form2_show_checkbox = $data['a2pOptInForm2ShowCheckbox'] ?? null;
        $this->a2p_opt_in_form2_pre_checked = $data['a2pOptInForm2PreChecked'] ?? null;
        $this->privacy_policy_link = $data['privacyPolicyLink'] ?? null;
        $this->terms_of_service_link = $data['termsOfServiceLink'] ?? null;
        $this->is_a2_p_opt_in_form1 = $data['isA2POptInForm1'] ?? null;
        $this->message_type = $data['messageType'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->enable_a2_p_compliance !== null) {
            $result['enableA2PCompliance'] = $this->enable_a2_p_compliance;
        }
        if ($this->a2p_opt_in_form1 !== null) {
            $result['a2pOptInForm1'] = $this->a2p_opt_in_form1;
        }
        if ($this->a2p_opt_in_form1_show_checkbox !== null) {
            $result['a2pOptInForm1ShowCheckbox'] = $this->a2p_opt_in_form1_show_checkbox;
        }
        if ($this->a2p_opt_in_form1_pre_checked !== null) {
            $result['a2pOptInForm1PreChecked'] = $this->a2p_opt_in_form1_pre_checked;
        }
        if ($this->is_a2_p_opt_in_form2 !== null) {
            $result['isA2POptInForm2'] = $this->is_a2_p_opt_in_form2;
        }
        if ($this->a2p_opt_in_form2 !== null) {
            $result['a2pOptInForm2'] = $this->a2p_opt_in_form2;
        }
        if ($this->a2p_opt_in_form2_show_checkbox !== null) {
            $result['a2pOptInForm2ShowCheckbox'] = $this->a2p_opt_in_form2_show_checkbox;
        }
        if ($this->a2p_opt_in_form2_pre_checked !== null) {
            $result['a2pOptInForm2PreChecked'] = $this->a2p_opt_in_form2_pre_checked;
        }
        if ($this->privacy_policy_link !== null) {
            $result['privacyPolicyLink'] = $this->privacy_policy_link;
        }
        if ($this->terms_of_service_link !== null) {
            $result['termsOfServiceLink'] = $this->terms_of_service_link;
        }
        if ($this->is_a2_p_opt_in_form1 !== null) {
            $result['isA2POptInForm1'] = $this->is_a2_p_opt_in_form1;
        }
        if ($this->message_type !== null) {
            $result['messageType'] = $this->message_type;
        }
        return $result;
    }
}
