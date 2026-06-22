<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Emails\Models;

/**
 * ScheduleCampaignPublicV2BodyDto model
 * 
 * @package HighLevel\Services\Emails\Models
 */
class ScheduleCampaignPublicV2BodyDto
{
    /**
     * @var string
     */
    public string $schedule_type;

    /**
     * @var string
     */
    public string $time_zone;

    /**
     * @var string
     */
    public string $user_id;

    /**
     * @var string|null
     */
    public ?string $user_name = null;

    /**
     * @var mixed
     */
    public $email_meta;

    /**
     * @var mixed
     */
    public $recipients;

    /**
     * @var array&lt;string&gt;|null
     */
    public ?array $send_days = null;

    /**
     * @var mixed
     */
    public $schedule_config;

    /**
     * @var mixed
     */
    public $rss_config;

    /**
     * @var mixed
     */
    public $ab_test_config;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->schedule_type = $data['scheduleType'] ?? '';
        $this->time_zone = $data['timeZone'] ?? '';
        $this->user_id = $data['userId'] ?? '';
        $this->user_name = $data['userName'] ?? null;
        $this->email_meta = $data['emailMeta'] ?? null;
        $this->recipients = $data['recipients'] ?? null;
        $this->send_days = $data['sendDays'] ?? null;
        $this->schedule_config = $data['scheduleConfig'] ?? null;
        $this->rss_config = $data['rssConfig'] ?? null;
        $this->ab_test_config = $data['abTestConfig'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->schedule_type !== null) {
            $result['scheduleType'] = $this->schedule_type;
        }
        if ($this->time_zone !== null) {
            $result['timeZone'] = $this->time_zone;
        }
        if ($this->user_id !== null) {
            $result['userId'] = $this->user_id;
        }
        if ($this->user_name !== null) {
            $result['userName'] = $this->user_name;
        }
        if ($this->email_meta !== null) {
            $result['emailMeta'] = $this->email_meta;
        }
        if ($this->recipients !== null) {
            $result['recipients'] = $this->recipients;
        }
        if ($this->send_days !== null) {
            $result['sendDays'] = $this->send_days;
        }
        if ($this->schedule_config !== null) {
            $result['scheduleConfig'] = $this->schedule_config;
        }
        if ($this->rss_config !== null) {
            $result['rssConfig'] = $this->rss_config;
        }
        if ($this->ab_test_config !== null) {
            $result['abTestConfig'] = $this->ab_test_config;
        }
        return $result;
    }
}
