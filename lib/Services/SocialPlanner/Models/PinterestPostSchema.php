<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\SocialPlanner\Models;

/**
 * PinterestPostSchema model
 * 
 * @package HighLevel\Services\SocialPlanner\Models
 */
class PinterestPostSchema
{
    /**
     * @var string|null
     */
    public ?string $title = null;

    /**
     * @var string|null
     */
    public ?string $link = null;

    /**
     * @var array&lt;string, mixed&gt;|null
     */
    public ?array $board_ids = null;

    /**
     * @var array&lt;PinterestBoardSelection&gt;|null
     */
    public ?array $pinterest_boards = null;

    /**
     * @var array&lt;string&gt;|null
     */
    public ?array $shortened_links = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->title = $data['title'] ?? null;
        $this->link = $data['link'] ?? null;
        $this->board_ids = $data['boardIds'] ?? null;
        // Handle array of PinterestBoardSelection objects
        if (isset($data['pinterestBoards']) && is_array($data['pinterestBoards'])) {
            $this->pinterest_boards = array_map(function($item) {
                return is_array($item) ? new PinterestBoardSelection($item) : $item;
            }, $data['pinterestBoards']);
        } else {
            $this->pinterest_boards = $data['pinterestBoards'] ?? null;
        }
        $this->shortened_links = $data['shortenedLinks'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->title !== null) {
            $result['title'] = $this->title;
        }
        if ($this->link !== null) {
            $result['link'] = $this->link;
        }
        if ($this->board_ids !== null) {
            $result['boardIds'] = $this->board_ids;
        }
        if ($this->pinterest_boards !== null) {
            $result['pinterestBoards'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->pinterest_boards);
        }
        if ($this->shortened_links !== null) {
            $result['shortenedLinks'] = $this->shortened_links;
        }
        return $result;
    }
}
