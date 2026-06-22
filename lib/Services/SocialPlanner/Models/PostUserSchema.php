<?php

namespace HighLevel\Services\SocialPlanner\Models;

/**
 * PostUserSchema model
 * 
 * @package HighLevel\Services\SocialPlanner\Models
 */
class PostUserSchema
{
    /**
     * @var string
     */
    public string $id;

    /**
     * @var string
     */
    public string $title;

    /**
     * @var string
     */
    public string $first_name;

    /**
     * @var string
     */
    public string $last_name;

    /**
     * @var string
     */
    public string $profile_photo;

    /**
     * @var string
     */
    public string $phone;

    /**
     * @var string
     */
    public string $email;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->id = $data['id'] ?? '';
        $this->title = $data['title'] ?? '';
        $this->first_name = $data['firstName'] ?? '';
        $this->last_name = $data['lastName'] ?? '';
        $this->profile_photo = $data['profilePhoto'] ?? '';
        $this->phone = $data['phone'] ?? '';
        $this->email = $data['email'] ?? '';
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
        if ($this->title !== null) {
            $result['title'] = $this->title;
        }
        if ($this->first_name !== null) {
            $result['firstName'] = $this->first_name;
        }
        if ($this->last_name !== null) {
            $result['lastName'] = $this->last_name;
        }
        if ($this->profile_photo !== null) {
            $result['profilePhoto'] = $this->profile_photo;
        }
        if ($this->phone !== null) {
            $result['phone'] = $this->phone;
        }
        if ($this->email !== null) {
            $result['email'] = $this->email;
        }
        return $result;
    }
}
