<?php

namespace HighLevel\Services\SocialPlanner\Models;

/**
 * InstagramPostSchema model
 * 
 * @package HighLevel\Services\SocialPlanner\Models
 */
class InstagramPostSchema
{
    /**
     * @var string
     */
    public string $type;

    /**
     * @var array&lt;string, mixed&gt;|null
     */
    public ?array $collaborators = null;

    /**
     * @var bool|null
     */
    public ?bool $show_on_feed = null;

    /**
     * @var bool|null
     */
    public ?bool $publish_via_push_notification = null;

    /**
     * @var string|null
     */
    public ?string $publisher_note = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->type = $data['type'] ?? '';
        $this->collaborators = $data['collaborators'] ?? null;
        $this->show_on_feed = $data['showOnFeed'] ?? null;
        $this->publish_via_push_notification = $data['publishViaPushNotification'] ?? null;
        $this->publisher_note = $data['publisherNote'] ?? null;
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
        if ($this->collaborators !== null) {
            $result['collaborators'] = $this->collaborators;
        }
        if ($this->show_on_feed !== null) {
            $result['showOnFeed'] = $this->show_on_feed;
        }
        if ($this->publish_via_push_notification !== null) {
            $result['publishViaPushNotification'] = $this->publish_via_push_notification;
        }
        if ($this->publisher_note !== null) {
            $result['publisherNote'] = $this->publisher_note;
        }
        return $result;
    }
}
