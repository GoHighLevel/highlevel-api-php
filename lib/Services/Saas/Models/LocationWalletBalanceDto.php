<?php

namespace HighLevel\Services\Saas\Models;

/**
 * LocationWalletBalanceDto model
 * 
 * @package HighLevel\Services\Saas\Models
 */
class LocationWalletBalanceDto
{
    /**
     * @var string
     */
    public string $wallet_id;

    /**
     * @var float
     */
    public float $balance;

    /**
     * @var float
     */
    public float $complimentary_credits;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->wallet_id = $data['walletId'] ?? '';
        $this->balance = $data['balance'] ?? 0;
        $this->complimentary_credits = $data['complimentaryCredits'] ?? 0;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->wallet_id !== null) {
            $result['walletId'] = $this->wallet_id;
        }
        if ($this->balance !== null) {
            $result['balance'] = $this->balance;
        }
        if ($this->complimentary_credits !== null) {
            $result['complimentaryCredits'] = $this->complimentary_credits;
        }
        return $result;
    }
}
