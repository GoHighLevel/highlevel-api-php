<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\VoiceAi\Models;

/**
 * SendPostCallNotificationDTO model
 * 
 * @package HighLevel\Services\VoiceAi\Models
 */
class SendPostCallNotificationDTO
{
    /**
     * @var bool
     */
    public bool $admins;

    /**
     * @var bool
     */
    public bool $all_users;

    /**
     * @var bool
     */
    public bool $contact_assigned_user;

    /**
     * @var array&lt;string&gt;
     */
    public array $specific_users;

    /**
     * @var array&lt;string&gt;
     */
    public array $custom_emails;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->admins = $data['admins'] ?? false;
        $this->all_users = $data['allUsers'] ?? false;
        $this->contact_assigned_user = $data['contactAssignedUser'] ?? false;
        $this->specific_users = $data['specificUsers'] ?? [];
        $this->custom_emails = $data['customEmails'] ?? [];
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->admins !== null) {
            $result['admins'] = $this->admins;
        }
        if ($this->all_users !== null) {
            $result['allUsers'] = $this->all_users;
        }
        if ($this->contact_assigned_user !== null) {
            $result['contactAssignedUser'] = $this->contact_assigned_user;
        }
        if ($this->specific_users !== null) {
            $result['specificUsers'] = $this->specific_users;
        }
        if ($this->custom_emails !== null) {
            $result['customEmails'] = $this->custom_emails;
        }
        return $result;
    }
}
