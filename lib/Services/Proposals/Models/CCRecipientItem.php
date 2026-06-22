<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Proposals\Models;

/**
 * CCRecipientItem model
 * 
 * @package HighLevel\Services\Proposals\Models
 */
class CCRecipientItem
{
    /**
     * @var string
     */
    public string $email;

    /**
     * @var string
     */
    public string $id;

    /**
     * @var string
     */
    public string $image_url;

    /**
     * @var string
     */
    public string $contact_name;

    /**
     * @var string
     */
    public string $first_name;

    /**
     * @var string
     */
    public string $last_name;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->email = $data['email'] ?? '';
        $this->id = $data['id'] ?? '';
        $this->image_url = $data['imageUrl'] ?? '';
        $this->contact_name = $data['contactName'] ?? '';
        $this->first_name = $data['firstName'] ?? '';
        $this->last_name = $data['lastName'] ?? '';
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->email !== null) {
            $result['email'] = $this->email;
        }
        if ($this->id !== null) {
            $result['id'] = $this->id;
        }
        if ($this->image_url !== null) {
            $result['imageUrl'] = $this->image_url;
        }
        if ($this->contact_name !== null) {
            $result['contactName'] = $this->contact_name;
        }
        if ($this->first_name !== null) {
            $result['firstName'] = $this->first_name;
        }
        if ($this->last_name !== null) {
            $result['lastName'] = $this->last_name;
        }
        return $result;
    }
}
