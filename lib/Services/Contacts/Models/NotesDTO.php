<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Contacts\Models;

/**
 * NotesDTO model
 * 
 * @package HighLevel\Services\Contacts\Models
 */
class NotesDTO
{
    /**
     * @var string|null
     */
    public ?string $user_id = null;

    /**
     * @var string
     */
    public string $body;

    /**
     * @var string|null
     */
    public ?string $title = null;

    /**
     * @var string|null
     */
    public ?string $color = null;

    /**
     * @var bool|null
     */
    public ?bool $pinned = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->user_id = $data['userId'] ?? null;
        $this->body = $data['body'] ?? '';
        $this->title = $data['title'] ?? null;
        $this->color = $data['color'] ?? null;
        $this->pinned = $data['pinned'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->user_id !== null) {
            $result['userId'] = $this->user_id;
        }
        if ($this->body !== null) {
            $result['body'] = $this->body;
        }
        if ($this->title !== null) {
            $result['title'] = $this->title;
        }
        if ($this->color !== null) {
            $result['color'] = $this->color;
        }
        if ($this->pinned !== null) {
            $result['pinned'] = $this->pinned;
        }
        return $result;
    }
}
