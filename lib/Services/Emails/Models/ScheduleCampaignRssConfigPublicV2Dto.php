<?php

namespace HighLevel\Services\Emails\Models;

/**
 * ScheduleCampaignRssConfigPublicV2Dto model
 * 
 * @package HighLevel\Services\Emails\Models
 */
class ScheduleCampaignRssConfigPublicV2Dto
{
    /**
     * @var string
     */
    public string $name;

    /**
     * @var string
     */
    public string $rss_feed_u_r_l;

    /**
     * @var string
     */
    public string $repeat_after;

    /**
     * @var string
     */
    public string $repeat_after_time;

    /**
     * @var float|null
     */
    public ?float $rss_feed_limit = null;

    /**
     * @var string|null
     */
    public ?string $start_at_day = null;

    /**
     * @var string|null
     */
    public ?string $start_at_month_day = null;

    /**
     * @var string|null
     */
    public ?string $first_execution_date = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->name = $data['name'] ?? '';
        $this->rss_feed_u_r_l = $data['rssFeedURL'] ?? '';
        $this->repeat_after = $data['repeatAfter'] ?? '';
        $this->repeat_after_time = $data['repeatAfterTime'] ?? '';
        $this->rss_feed_limit = $data['rssFeedLimit'] ?? null;
        $this->start_at_day = $data['startAtDay'] ?? null;
        $this->start_at_month_day = $data['startAtMonthDay'] ?? null;
        $this->first_execution_date = $data['firstExecutionDate'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->rss_feed_u_r_l !== null) {
            $result['rssFeedURL'] = $this->rss_feed_u_r_l;
        }
        if ($this->repeat_after !== null) {
            $result['repeatAfter'] = $this->repeat_after;
        }
        if ($this->repeat_after_time !== null) {
            $result['repeatAfterTime'] = $this->repeat_after_time;
        }
        if ($this->rss_feed_limit !== null) {
            $result['rssFeedLimit'] = $this->rss_feed_limit;
        }
        if ($this->start_at_day !== null) {
            $result['startAtDay'] = $this->start_at_day;
        }
        if ($this->start_at_month_day !== null) {
            $result['startAtMonthDay'] = $this->start_at_month_day;
        }
        if ($this->first_execution_date !== null) {
            $result['firstExecutionDate'] = $this->first_execution_date;
        }
        return $result;
    }
}
