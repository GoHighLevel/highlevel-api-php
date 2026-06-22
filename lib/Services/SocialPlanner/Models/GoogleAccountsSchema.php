<?php

namespace HighLevel\Services\SocialPlanner\Models;

/**
 * GoogleAccountsSchema model
 * 
 * @package HighLevel\Services\SocialPlanner\Models
 */
class GoogleAccountsSchema
{
    /**
     * @var string|null
     */
    public ?string $name = null;

    /**
     * @var string|null
     */
    public ?string $account_name = null;

    /**
     * @var string|null
     */
    public ?string $type = null;

    /**
     * @var string|null
     */
    public ?string $verification_state = null;

    /**
     * @var string|null
     */
    public ?string $vetted_state = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->name = $data['name'] ?? null;
        $this->account_name = $data['accountName'] ?? null;
        $this->type = $data['type'] ?? null;
        $this->verification_state = $data['verificationState'] ?? null;
        $this->vetted_state = $data['vettedState'] ?? null;
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
