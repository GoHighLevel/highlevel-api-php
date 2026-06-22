<?php

namespace HighLevel\Services\Emails\Models;

/**
 * EmailStatsNumbersPublicV2Dto model
 * 
 * @package HighLevel\Services\Emails\Models
 */
class EmailStatsNumbersPublicV2Dto
{
    /**
     * @var float
     */
    public float $sent;

    /**
     * @var float
     */
    public float $accepted;

    /**
     * @var float
     */
    public float $delivered;

    /**
     * @var float
     */
    public float $opened;

    /**
     * @var float
     */
    public float $clicked;

    /**
     * @var float
     */
    public float $unsubscribed;

    /**
     * @var float
     */
    public float $complained;

    /**
     * @var float
     */
    public float $permanent_fail;

    /**
     * @var float
     */
    public float $temporary_fail;

    /**
     * @var float
     */
    public float $rejected;

    /**
     * @var float
     */
    public float $failed;

    /**
     * @var float
     */
    public float $replied;

    /**
     * @var float
     */
    public float $open_rate;

    /**
     * @var float
     */
    public float $click_rate;

    /**
     * @var float
     */
    public float $unsubscribe_rate;

    /**
     * @var float
     */
    public float $complaint_rate;

    /**
     * @var float
     */
    public float $bounce_rate;

    /**
     * @var float
     */
    public float $reply_rate;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->sent = $data['sent'] ?? 0;
        $this->accepted = $data['accepted'] ?? 0;
        $this->delivered = $data['delivered'] ?? 0;
        $this->opened = $data['opened'] ?? 0;
        $this->clicked = $data['clicked'] ?? 0;
        $this->unsubscribed = $data['unsubscribed'] ?? 0;
        $this->complained = $data['complained'] ?? 0;
        $this->permanent_fail = $data['permanentFail'] ?? 0;
        $this->temporary_fail = $data['temporaryFail'] ?? 0;
        $this->rejected = $data['rejected'] ?? 0;
        $this->failed = $data['failed'] ?? 0;
        $this->replied = $data['replied'] ?? 0;
        $this->open_rate = $data['openRate'] ?? 0;
        $this->click_rate = $data['clickRate'] ?? 0;
        $this->unsubscribe_rate = $data['unsubscribeRate'] ?? 0;
        $this->complaint_rate = $data['complaintRate'] ?? 0;
        $this->bounce_rate = $data['bounceRate'] ?? 0;
        $this->reply_rate = $data['replyRate'] ?? 0;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->sent !== null) {
            $result['sent'] = $this->sent;
        }
        if ($this->accepted !== null) {
            $result['accepted'] = $this->accepted;
        }
        if ($this->delivered !== null) {
            $result['delivered'] = $this->delivered;
        }
        if ($this->opened !== null) {
            $result['opened'] = $this->opened;
        }
        if ($this->clicked !== null) {
            $result['clicked'] = $this->clicked;
        }
        if ($this->unsubscribed !== null) {
            $result['unsubscribed'] = $this->unsubscribed;
        }
        if ($this->complained !== null) {
            $result['complained'] = $this->complained;
        }
        if ($this->permanent_fail !== null) {
            $result['permanentFail'] = $this->permanent_fail;
        }
        if ($this->temporary_fail !== null) {
            $result['temporaryFail'] = $this->temporary_fail;
        }
        if ($this->rejected !== null) {
            $result['rejected'] = $this->rejected;
        }
        if ($this->failed !== null) {
            $result['failed'] = $this->failed;
        }
        if ($this->replied !== null) {
            $result['replied'] = $this->replied;
        }
        if ($this->open_rate !== null) {
            $result['openRate'] = $this->open_rate;
        }
        if ($this->click_rate !== null) {
            $result['clickRate'] = $this->click_rate;
        }
        if ($this->unsubscribe_rate !== null) {
            $result['unsubscribeRate'] = $this->unsubscribe_rate;
        }
        if ($this->complaint_rate !== null) {
            $result['complaintRate'] = $this->complaint_rate;
        }
        if ($this->bounce_rate !== null) {
            $result['bounceRate'] = $this->bounce_rate;
        }
        if ($this->reply_rate !== null) {
            $result['replyRate'] = $this->reply_rate;
        }
        return $result;
    }
}
