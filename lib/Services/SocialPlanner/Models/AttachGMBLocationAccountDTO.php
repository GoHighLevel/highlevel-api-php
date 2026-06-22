<?php

namespace HighLevel\Services\SocialPlanner\Models;

/**
 * AttachGMBLocationAccountDTO model
 * 
 * @package HighLevel\Services\SocialPlanner\Models
 */
class AttachGMBLocationAccountDTO
{
    /**
     * @var string
     */
    public string $name;

    /**
     * @var string
     */
    public string $account_name;

    /**
     * @var string
     */
    public string $type;

    /**
     * @var string
     */
    public string $verification_state;

    /**
     * @var string
     */
    public string $vetted_state;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->name = $data['name'] ?? '';
        $this->account_name = $data['accountName'] ?? '';
        $this->type = $data['type'] ?? '';
        $this->verification_state = $data['verificationState'] ?? '';
        $this->vetted_state = $data['vettedState'] ?? '';
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->account_name !== null) {
            $result['accountName'] = $this->account_name;
        }
        if ($this->type !== null) {
            $result['type'] = $this->type;
        }
        if ($this->verification_state !== null) {
            $result['verificationState'] = $this->verification_state;
        }
        if ($this->vetted_state !== null) {
            $result['vettedState'] = $this->vetted_state;
        }
        return $result;
    }
}
