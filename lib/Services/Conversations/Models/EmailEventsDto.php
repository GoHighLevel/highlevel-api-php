<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Conversations\Models;

/**
 * EmailEventsDto model
 * 
 * @package HighLevel\Services\Conversations\Models
 */
class EmailEventsDto
{
    /**
     * @var int|null
     */
    public ?int $delivered = null;

    /**
     * @var int|null
     */
    public ?int $opened = null;

    /**
     * @var int|null
     */
    public ?int $clicked = null;

    /**
     * @var int|null
     */
    public ?int $replied = null;

    /**
     * @var int|null
     */
    public ?int $failed = null;

    /**
     * @var int|null
     */
    public ?int $accepted = null;

    /**
     * @var int|null
     */
    public ?int $rejected = null;

    /**
     * @var int|null
     */
    public ?int $unsubscribed = null;

    /**
     * @var int|null
     */
    public ?int $complained = null;

    /**
     * @var int|null
     */
    public ?int $stored = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->delivered = $data['delivered'] ?? null;
        $this->opened = $data['opened'] ?? null;
        $this->clicked = $data['clicked'] ?? null;
        $this->replied = $data['replied'] ?? null;
        $this->failed = $data['failed'] ?? null;
        $this->accepted = $data['accepted'] ?? null;
        $this->rejected = $data['rejected'] ?? null;
        $this->unsubscribed = $data['unsubscribed'] ?? null;
        $this->complained = $data['complained'] ?? null;
        $this->stored = $data['stored'] ?? null;
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
        if ($this->replied !== null) {
            $result['replied'] = $this->replied;
        }
        if ($this->failed !== null) {
            $result['failed'] = $this->failed;
        }
        if ($this->accepted !== null) {
            $result['accepted'] = $this->accepted;
        }
        if ($this->rejected !== null) {
            $result['rejected'] = $this->rejected;
        }
        if ($this->unsubscribed !== null) {
            $result['unsubscribed'] = $this->unsubscribed;
        }
        if ($this->complained !== null) {
            $result['complained'] = $this->complained;
        }
        if ($this->stored !== null) {
            $result['stored'] = $this->stored;
        }
        return $result;
    }
}
