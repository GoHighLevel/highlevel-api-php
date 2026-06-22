<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Emails\Models;

/**
 * ScheduleCampaignRecipientsPublicV2Dto model
 * 
 * @package HighLevel\Services\Emails\Models
 */
class ScheduleCampaignRecipientsPublicV2Dto
{
    /**
     * @var string
     */
    public string $type;

    /**
     * @var array&lt;string&gt;|null
     */
    public ?array $contact_ids = null;

    /**
     * @var array&lt;string&gt;|null
     */
    public ?array $tag_ids = null;

    /**
     * @var string|null
     */
    public ?string $segment = null;

    /**
     * @var bool|null
     */
    public ?bool $freeze_list = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->type = $data['type'] ?? '';
        $this->contact_ids = $data['contactIds'] ?? null;
        $this->tag_ids = $data['tagIds'] ?? null;
        $this->segment = $data['segment'] ?? null;
        $this->freeze_list = $data['freezeList'] ?? null;
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
        if ($this->contact_ids !== null) {
            $result['contactIds'] = $this->contact_ids;
        }
        if ($this->tag_ids !== null) {
            $result['tagIds'] = $this->tag_ids;
        }
        if ($this->segment !== null) {
            $result['segment'] = $this->segment;
        }
        if ($this->freeze_list !== null) {
            $result['freezeList'] = $this->freeze_list;
        }
        return $result;
    }
}
