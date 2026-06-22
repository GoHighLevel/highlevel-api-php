<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\SocialPlanner\Models;

/**
 * BlueskyPostSchema model
 * 
 * @package HighLevel\Services\SocialPlanner\Models
 */
class BlueskyPostSchema
{
    /**
     * @var array&lt;string&gt;|null
     */
    public ?array $shortened_links = null;

    /**
     * @var string|null
     */
    public ?string $reply_to = null;

    /**
     * @var string|null
     */
    public ?string $quote_post = null;

    /**
     * @var string|null
     */
    public ?string $language = null;

    /**
     * @var string|null
     */
    public ?string $external_link = null;

    /**
     * @var string|null
     */
    public ?string $external_link_title = null;

    /**
     * @var string|null
     */
    public ?string $external_link_description = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->shortened_links = $data['shortenedLinks'] ?? null;
        $this->reply_to = $data['replyTo'] ?? null;
        $this->quote_post = $data['quotePost'] ?? null;
        $this->language = $data['language'] ?? null;
        $this->external_link = $data['externalLink'] ?? null;
        $this->external_link_title = $data['externalLinkTitle'] ?? null;
        $this->external_link_description = $data['externalLinkDescription'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->shortened_links !== null) {
            $result['shortenedLinks'] = $this->shortened_links;
        }
        if ($this->reply_to !== null) {
            $result['replyTo'] = $this->reply_to;
        }
        if ($this->quote_post !== null) {
            $result['quotePost'] = $this->quote_post;
        }
        if ($this->language !== null) {
            $result['language'] = $this->language;
        }
        if ($this->external_link !== null) {
            $result['externalLink'] = $this->external_link;
        }
        if ($this->external_link_title !== null) {
            $result['externalLinkTitle'] = $this->external_link_title;
        }
        if ($this->external_link_description !== null) {
            $result['externalLinkDescription'] = $this->external_link_description;
        }
        return $result;
    }
}
