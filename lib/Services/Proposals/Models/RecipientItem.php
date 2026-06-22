<?php

namespace HighLevel\Services\Proposals\Models;

/**
 * RecipientItem model
 * 
 * @package HighLevel\Services\Proposals\Models
 */
class RecipientItem
{
    /**
     * @var string
     */
    public string $id;

    /**
     * @var string|null
     */
    public ?string $first_name = null;

    /**
     * @var string|null
     */
    public ?string $last_name = null;

    /**
     * @var string
     */
    public string $email;

    /**
     * @var string|null
     */
    public ?string $phone_number = null;

    /**
     * @var string|null
     */
    public ?string $phone = null;

    /**
     * @var bool
     */
    public bool $has_completed;

    /**
     * @var string
     */
    public string $role;

    /**
     * @var bool
     */
    public bool $is_primary;

    /**
     * @var float
     */
    public float $signing_order;

    /**
     * @var string|null
     */
    public ?string $img_url = null;

    /**
     * @var string|null
     */
    public ?string $ip = null;

    /**
     * @var string|null
     */
    public ?string $user_agent = null;

    /**
     * @var string|null
     */
    public ?string $signed_date = null;

    /**
     * @var string|null
     */
    public ?string $contact_name = null;

    /**
     * @var string|null
     */
    public ?string $country = null;

    /**
     * @var string|null
     */
    public ?string $entity_name = null;

    /**
     * @var string|null
     */
    public ?string $initials_img_url = null;

    /**
     * @var string|null
     */
    public ?string $last_viewed_at = null;

    /**
     * @var string|null
     */
    public ?string $share_link = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->id = $data['id'] ?? '';
        $this->first_name = $data['firstName'] ?? null;
        $this->last_name = $data['lastName'] ?? null;
        $this->email = $data['email'] ?? '';
        $this->phone_number = $data['phoneNumber'] ?? null;
        $this->phone = $data['phone'] ?? null;
        $this->has_completed = $data['hasCompleted'] ?? false;
        $this->role = $data['role'] ?? '';
        $this->is_primary = $data['isPrimary'] ?? false;
        $this->signing_order = $data['signingOrder'] ?? 0;
        $this->img_url = $data['imgUrl'] ?? null;
        $this->ip = $data['ip'] ?? null;
        $this->user_agent = $data['userAgent'] ?? null;
        $this->signed_date = $data['signedDate'] ?? null;
        $this->contact_name = $data['contactName'] ?? null;
        $this->country = $data['country'] ?? null;
        $this->entity_name = $data['entityName'] ?? null;
        $this->initials_img_url = $data['initialsImgUrl'] ?? null;
        $this->last_viewed_at = $data['lastViewedAt'] ?? null;
        $this->share_link = $data['shareLink'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->id !== null) {
            $result['id'] = $this->id;
        }
        if ($this->first_name !== null) {
            $result['firstName'] = $this->first_name;
        }
        if ($this->last_name !== null) {
            $result['lastName'] = $this->last_name;
        }
        if ($this->email !== null) {
            $result['email'] = $this->email;
        }
        if ($this->phone_number !== null) {
            $result['phoneNumber'] = $this->phone_number;
        }
        if ($this->phone !== null) {
            $result['phone'] = $this->phone;
        }
        if ($this->has_completed !== null) {
            $result['hasCompleted'] = $this->has_completed;
        }
        if ($this->role !== null) {
            $result['role'] = $this->role;
        }
        if ($this->is_primary !== null) {
            $result['isPrimary'] = $this->is_primary;
        }
        if ($this->signing_order !== null) {
            $result['signingOrder'] = $this->signing_order;
        }
        if ($this->img_url !== null) {
            $result['imgUrl'] = $this->img_url;
        }
        if ($this->ip !== null) {
            $result['ip'] = $this->ip;
        }
        if ($this->user_agent !== null) {
            $result['userAgent'] = $this->user_agent;
        }
        if ($this->signed_date !== null) {
            $result['signedDate'] = $this->signed_date;
        }
        if ($this->contact_name !== null) {
            $result['contactName'] = $this->contact_name;
        }
        if ($this->country !== null) {
            $result['country'] = $this->country;
        }
        if ($this->entity_name !== null) {
            $result['entityName'] = $this->entity_name;
        }
        if ($this->initials_img_url !== null) {
            $result['initialsImgUrl'] = $this->initials_img_url;
        }
        if ($this->last_viewed_at !== null) {
            $result['lastViewedAt'] = $this->last_viewed_at;
        }
        if ($this->share_link !== null) {
            $result['shareLink'] = $this->share_link;
        }
        return $result;
    }
}
