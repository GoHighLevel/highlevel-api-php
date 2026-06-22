<?php

namespace HighLevel\Services\Surveys\Models;

/**
 * EventDataSchema model
 * 
 * @package HighLevel\Services\Surveys\Models
 */
class EventDataSchema
{
    /**
     * @var string|null
     */
    public ?string $fbc = null;

    /**
     * @var string|null
     */
    public ?string $fbp = null;

    /**
     * @var PageDetailsSchema|null
     */
    public ?PageDetailsSchema $page = null;

    /**
     * @var string|null
     */
    public ?string $type = null;

    /**
     * @var string|null
     */
    public ?string $domain = null;

    /**
     * @var string|null
     */
    public ?string $medium = null;

    /**
     * @var string|null
     */
    public ?string $source = null;

    /**
     * @var string|null
     */
    public ?string $version = null;

    /**
     * @var string|null
     */
    public ?string $ad_source = null;

    /**
     * @var string|null
     */
    public ?string $medium_id = null;

    /**
     * @var string|null
     */
    public ?string $parent_id = null;

    /**
     * @var string|null
     */
    public ?string $referrer = null;

    /**
     * @var string|null
     */
    public ?string $fb_event_id = null;

    /**
     * @var float|null
     */
    public ?float $timestamp = null;

    /**
     * @var string|null
     */
    public ?string $parent_name = null;

    /**
     * @var string|null
     */
    public ?string $fingerprint = null;

    /**
     * @var string|null
     */
    public ?string $page_visit_type = null;

    /**
     * @var mixed
     */
    public $contact_session_ids;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->fbc = $data['fbc'] ?? null;
        $this->fbp = $data['fbp'] ?? null;
        // Handle single PageDetailsSchema object
        if (isset($data['page']) && is_array($data['page'])) {
            $this->page = new PageDetailsSchema($data['page']);
        } else {
            $this->page = $data['page'] ?? null;
        }
        $this->type = $data['type'] ?? null;
        $this->domain = $data['domain'] ?? null;
        $this->medium = $data['medium'] ?? null;
        $this->source = $data['source'] ?? null;
        $this->version = $data['version'] ?? null;
        $this->ad_source = $data['adSource'] ?? null;
        $this->medium_id = $data['mediumId'] ?? null;
        $this->parent_id = $data['parentId'] ?? null;
        $this->referrer = $data['referrer'] ?? null;
        $this->fb_event_id = $data['fbEventId'] ?? null;
        $this->timestamp = $data['timestamp'] ?? null;
        $this->parent_name = $data['parentName'] ?? null;
        $this->fingerprint = $data['fingerprint'] ?? null;
        $this->page_visit_type = $data['pageVisitType'] ?? null;
        $this->contact_session_ids = $data['contactSessionIds'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->fbc !== null) {
            $result['fbc'] = $this->fbc;
        }
        if ($this->fbp !== null) {
            $result['fbp'] = $this->fbp;
        }
        if ($this->page !== null) {
            $result['page'] = is_object($this->page) && method_exists($this->page, 'toArray') 
                ? $this->page->toArray() 
                : $this->page;
        }
        if ($this->type !== null) {
            $result['type'] = $this->type;
        }
        if ($this->domain !== null) {
            $result['domain'] = $this->domain;
        }
        if ($this->medium !== null) {
            $result['medium'] = $this->medium;
        }
        if ($this->source !== null) {
            $result['source'] = $this->source;
        }
        if ($this->version !== null) {
            $result['version'] = $this->version;
        }
        if ($this->ad_source !== null) {
            $result['adSource'] = $this->ad_source;
        }
        if ($this->medium_id !== null) {
            $result['mediumId'] = $this->medium_id;
        }
        if ($this->parent_id !== null) {
            $result['parentId'] = $this->parent_id;
        }
        if ($this->referrer !== null) {
            $result['referrer'] = $this->referrer;
        }
        if ($this->fb_event_id !== null) {
            $result['fbEventId'] = $this->fb_event_id;
        }
        if ($this->timestamp !== null) {
            $result['timestamp'] = $this->timestamp;
        }
        if ($this->parent_name !== null) {
            $result['parentName'] = $this->parent_name;
        }
        if ($this->fingerprint !== null) {
            $result['fingerprint'] = $this->fingerprint;
        }
        if ($this->page_visit_type !== null) {
            $result['pageVisitType'] = $this->page_visit_type;
        }
        if ($this->contact_session_ids !== null) {
            $result['contactSessionIds'] = $this->contact_session_ids;
        }
        return $result;
    }
}
