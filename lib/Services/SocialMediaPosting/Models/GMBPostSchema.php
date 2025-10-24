<?php

namespace HighLevel\Services\SocialMediaPosting\Models;

/**
 * GMBPostSchema model
 * 
 * @package HighLevel\Services\SocialMediaPosting\Models
 */
class GMBPostSchema
{
    /**
     * @var string|null
     */
    public ?string $gmb_event_type = null;

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
    public mixed $start_date;

    /**
     * @var mixed
     */
    public mixed $end_date;

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
     * @var array&lt;string, mixed&gt;|null
     */
    public ?array $action_type = null;

    /**
     * Raw data storage for models without defined schema
     * @var array<string, mixed>
     */
    private array $data = [];

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->gmb_event_type = $data['gmbEventType'] ?? null;
        $this->title = $data['title'] ?? null;
        $this->offer_title = $data['offerTitle'] ?? null;
        $this->start_date = $data['startDate'] ?? null;
        $this->end_date = $data['endDate'] ?? null;
        $this->terms_conditions = $data['termsConditions'] ?? null;
        $this->url = $data['url'] ?? null;
        $this->coupon_code = $data['couponCode'] ?? null;
        $this->redeem_online_url = $data['redeemOnlineUrl'] ?? null;
        $this->action_type = $data['actionType'] ?? null;
        // No defined properties - store raw data for flexible models
        $this->data = $data;
    }

    /**
     * Convert model to array (for models without defined schema)
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        return $this->data;
    }

    /**
     * Magic getter for accessing data properties
     * 
     * @param string $name Property name
     * @return mixed Property value or null if not found
     */
    public function __get(string $name)
    {
        return $this->data[$name] ?? null;
    }

    /**
     * Magic setter for setting data properties
     * 
     * @param string $name Property name
     * @param mixed $value Property value
     * @return void
     */
    public function __set(string $name, $value): void
    {
        $this->data[$name] = $value;
    }

    /**
     * Magic isset for checking if data property exists
     * 
     * @param string $name Property name
     * @return bool True if property exists, false otherwise
     */
    public function __isset(string $name): bool
    {
        return isset($this->data[$name]);
    }

    /**
     * Get all data as array
     * 
     * @return array<string, mixed>
     */
    public function getData(): array
    {
        return $this->data;
    }
}
