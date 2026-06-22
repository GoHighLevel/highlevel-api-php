<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\SocialPlanner\Models;

/**
 * GMBPostSchema model
 * 
 * @package HighLevel\Services\SocialPlanner\Models
 */
class GMBPostSchema
{
    /**
     * @var string
     */
    public string $gmb_event_type;

    /**
     * @var string|null
     */
    public ?string $title = null;

    /**
     * @var string|null
     */
    public ?string $offer_title = null;

    /**
     * @var mixed
     */
    public $start_date;

    /**
     * @var mixed
     */
    public $end_date;

    /**
     * @var string|null
     */
    public ?string $terms_conditions = null;

    /**
     * @var string|null
     */
    public ?string $url = null;

    /**
     * @var string|null
     */
    public ?string $coupon_code = null;

    /**
     * @var string|null
     */
    public ?string $redeem_online_url = null;

    /**
     * @var string|null
     */
    public ?string $action_type = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->gmb_event_type = $data['gmbEventType'] ?? '';
        $this->title = $data['title'] ?? null;
        $this->offer_title = $data['offerTitle'] ?? null;
        $this->start_date = $data['startDate'] ?? null;
        $this->end_date = $data['endDate'] ?? null;
        $this->terms_conditions = $data['termsConditions'] ?? null;
        $this->url = $data['url'] ?? null;
        $this->coupon_code = $data['couponCode'] ?? null;
        $this->redeem_online_url = $data['redeemOnlineUrl'] ?? null;
        $this->action_type = $data['actionType'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->gmb_event_type !== null) {
            $result['gmbEventType'] = $this->gmb_event_type;
        }
        if ($this->title !== null) {
            $result['title'] = $this->title;
        }
        if ($this->offer_title !== null) {
            $result['offerTitle'] = $this->offer_title;
        }
        if ($this->start_date !== null) {
            $result['startDate'] = $this->start_date;
        }
        if ($this->end_date !== null) {
            $result['endDate'] = $this->end_date;
        }
        if ($this->terms_conditions !== null) {
            $result['termsConditions'] = $this->terms_conditions;
        }
        if ($this->url !== null) {
            $result['url'] = $this->url;
        }
        if ($this->coupon_code !== null) {
            $result['couponCode'] = $this->coupon_code;
        }
        if ($this->redeem_online_url !== null) {
            $result['redeemOnlineUrl'] = $this->redeem_online_url;
        }
        if ($this->action_type !== null) {
            $result['actionType'] = $this->action_type;
        }
        return $result;
    }
}
