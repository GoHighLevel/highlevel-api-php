<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Contacts\Models;

/**
 * GetNoteSchema model
 * 
 * @package HighLevel\Services\Contacts\Models
 */
class GetNoteSchema
{
    /**
     * @var string|null
     */
    public ?string $id = null;

    /**
     * @var string|null
     */
    public ?string $body = null;

    /**
     * @var string|null
     */
    public ?string $user_id = null;

    /**
     * @var string|null
     */
    public ?string $date_added = null;

    /**
     * @var string|null
     */
    public ?string $contact_id = null;

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
        $this->id = $data['id'] ?? null;
        $this->body = $data['body'] ?? null;
        $this->user_id = $data['userId'] ?? null;
        $this->date_added = $data['dateAdded'] ?? null;
        $this->contact_id = $data['contactId'] ?? null;
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
        if ($this->id !== null) {
            $result['id'] = $this->id;
        }
        if ($this->body !== null) {
            $result['body'] = $this->body;
        }
        if ($this->user_id !== null) {
            $result['userId'] = $this->user_id;
        }
        if ($this->date_added !== null) {
            $result['dateAdded'] = $this->date_added;
        }
        if ($this->contact_id !== null) {
            $result['contactId'] = $this->contact_id;
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
