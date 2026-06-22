<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\VoiceAi\Models;

/**
 * SendPostCallNotificationSchema model
 * 
 * @package HighLevel\Services\VoiceAi\Models
 */
class SendPostCallNotificationSchema
{
    /**
     * @var bool|null
     */
    public ?bool $admins = null;

    /**
     * @var bool|null
     */
    public ?bool $all_users = null;

    /**
     * @var bool|null
     */
    public ?bool $contact_assigned_user = null;

    /**
     * @var array&lt;string&gt;|null
     */
    public ?array $specific_users = null;

    /**
     * @var array&lt;string&gt;|null
     */
    public ?array $custom_emails = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->admins = $data['admins'] ?? null;
        $this->all_users = $data['allUsers'] ?? null;
        $this->contact_assigned_user = $data['contactAssignedUser'] ?? null;
        $this->specific_users = $data['specificUsers'] ?? null;
        $this->custom_emails = $data['customEmails'] ?? null;
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
