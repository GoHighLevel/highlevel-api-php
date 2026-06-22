<?php

namespace HighLevel\Services\Contacts\Models;

/**
 * AttributionSource model
 * 
 * @package HighLevel\Services\Contacts\Models
 */
class AttributionSource
{
    /**
     * @var string
     */
    public string $url;

    /**
     * @var string|null
     */
    public ?string $campaign = null;

    /**
     * @var string|null
     */
    public ?string $utm_source = null;

    /**
     * @var string|null
     */
    public ?string $utm_medium = null;

    /**
     * @var string|null
     */
    public ?string $utm_content = null;

    /**
     * @var string|null
     */
    public ?string $referrer = null;

    /**
     * @var string|null
     */
    public ?string $campaign_id = null;

    /**
     * @var string|null
     */
    public ?string $fbclid = null;

    /**
     * @var string|null
     */
    public ?string $gclid = null;

    /**
     * @var string|null
     */
    public ?string $msclikid = null;

    /**
     * @var string|null
     */
    public ?string $dclid = null;

    /**
     * @var string|null
     */
    public ?string $fbc = null;

    /**
     * @var string|null
     */
    public ?string $fbp = null;

    /**
     * @var string|null
     */
    public ?string $fb_event_id = null;

    /**
     * @var string|null
     */
    public ?string $user_agent = null;

    /**
     * @var string|null
     */
    public ?string $ip = null;

    /**
     * @var string|null
     */
    public ?string $medium = null;

    /**
     * @var string|null
     */
    public ?string $medium_id = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->url = $data['url'] ?? '';
        $this->campaign = $data['campaign'] ?? null;
        $this->utm_source = $data['utmSource'] ?? null;
        $this->utm_medium = $data['utmMedium'] ?? null;
        $this->utm_content = $data['utmContent'] ?? null;
        $this->referrer = $data['referrer'] ?? null;
        $this->campaign_id = $data['campaignId'] ?? null;
        $this->fbclid = $data['fbclid'] ?? null;
        $this->gclid = $data['gclid'] ?? null;
        $this->msclikid = $data['msclikid'] ?? null;
        $this->dclid = $data['dclid'] ?? null;
        $this->fbc = $data['fbc'] ?? null;
        $this->fbp = $data['fbp'] ?? null;
        $this->fb_event_id = $data['fbEventId'] ?? null;
        $this->user_agent = $data['userAgent'] ?? null;
        $this->ip = $data['ip'] ?? null;
        $this->medium = $data['medium'] ?? null;
        $this->medium_id = $data['mediumId'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->url !== null) {
            $result['url'] = $this->url;
        }
        if ($this->campaign !== null) {
            $result['campaign'] = $this->campaign;
        }
        if ($this->utm_source !== null) {
            $result['utmSource'] = $this->utm_source;
        }
        if ($this->utm_medium !== null) {
            $result['utmMedium'] = $this->utm_medium;
        }
        if ($this->utm_content !== null) {
            $result['utmContent'] = $this->utm_content;
        }
        if ($this->referrer !== null) {
            $result['referrer'] = $this->referrer;
        }
        if ($this->campaign_id !== null) {
            $result['campaignId'] = $this->campaign_id;
        }
        if ($this->fbclid !== null) {
            $result['fbclid'] = $this->fbclid;
        }
        if ($this->gclid !== null) {
            $result['gclid'] = $this->gclid;
        }
        if ($this->msclikid !== null) {
            $result['msclikid'] = $this->msclikid;
        }
        if ($this->dclid !== null) {
            $result['dclid'] = $this->dclid;
        }
        if ($this->fbc !== null) {
            $result['fbc'] = $this->fbc;
        }
        if ($this->fbp !== null) {
            $result['fbp'] = $this->fbp;
        }
        if ($this->fb_event_id !== null) {
            $result['fbEventId'] = $this->fb_event_id;
        }
        if ($this->user_agent !== null) {
            $result['userAgent'] = $this->user_agent;
        }
        if ($this->ip !== null) {
            $result['ip'] = $this->ip;
        }
        if ($this->medium !== null) {
            $result['medium'] = $this->medium;
        }
        if ($this->medium_id !== null) {
            $result['mediumId'] = $this->medium_id;
        }
        return $result;
    }
}
