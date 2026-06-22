<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Emails\Models;

/**
 * EmailStatsNumbersDto model
 * 
 * @package HighLevel\Services\Emails\Models
 */
class EmailStatsNumbersDto
{
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
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
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
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
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
        return $result;
    }
}
