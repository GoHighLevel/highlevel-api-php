<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Oauth\Models;

/**
 * GetAccessTokenSuccessfulResponseDto model
 * 
 * @package HighLevel\Services\Oauth\Models
 */
class GetAccessTokenSuccessfulResponseDto
{
    /**
     * @var string|null
     */
    public ?string $access_token = null;

    /**
     * @var string|null
     */
    public ?string $token_type = null;

    /**
     * @var float|null
     */
    public ?float $expires_in = null;

    /**
     * @var string|null
     */
    public ?string $refresh_token = null;

    /**
     * @var string|null
     */
    public ?string $scope = null;

    /**
     * @var string|null
     */
    public ?string $user_type = null;

    /**
     * @var string|null
     */
    public ?string $location_id = null;

    /**
     * @var string|null
     */
    public ?string $company_id = null;

    /**
     * @var array&lt;string&gt;|null
     */
    public ?array $approved_locations = null;

    /**
     * @var string
     */
    public string $user_id;

    /**
     * @var string|null
     */
    public ?string $plan_id = null;

    /**
     * @var bool|null
     */
    public ?bool $is_bulk_installation = null;

    /**
     * @var bool|null
     */
    public ?bool $install_to_future_locations = null;

    /**
     * @var bool|null
     */
    public ?bool $approve_all_locations = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->access_token = $data['accessToken'] ?? null;
        $this->token_type = $data['tokenType'] ?? null;
        $this->expires_in = $data['expiresIn'] ?? null;
        $this->refresh_token = $data['refreshToken'] ?? null;
        $this->scope = $data['scope'] ?? null;
        $this->user_type = $data['userType'] ?? null;
        $this->location_id = $data['locationId'] ?? null;
        $this->company_id = $data['companyId'] ?? null;
        $this->approved_locations = $data['approvedLocations'] ?? null;
        $this->user_id = $data['userId'] ?? '';
        $this->plan_id = $data['planId'] ?? null;
        $this->is_bulk_installation = $data['isBulkInstallation'] ?? null;
        $this->install_to_future_locations = $data['installToFutureLocations'] ?? null;
        $this->approve_all_locations = $data['approveAllLocations'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->access_token !== null) {
            $result['accessToken'] = $this->access_token;
        }
        if ($this->token_type !== null) {
            $result['tokenType'] = $this->token_type;
        }
        if ($this->expires_in !== null) {
            $result['expiresIn'] = $this->expires_in;
        }
        if ($this->refresh_token !== null) {
            $result['refreshToken'] = $this->refresh_token;
        }
        if ($this->scope !== null) {
            $result['scope'] = $this->scope;
        }
        if ($this->user_type !== null) {
            $result['userType'] = $this->user_type;
        }
        if ($this->location_id !== null) {
            $result['locationId'] = $this->location_id;
        }
        if ($this->company_id !== null) {
            $result['companyId'] = $this->company_id;
        }
        if ($this->approved_locations !== null) {
            $result['approvedLocations'] = $this->approved_locations;
        }
        if ($this->user_id !== null) {
            $result['userId'] = $this->user_id;
        }
        if ($this->plan_id !== null) {
            $result['planId'] = $this->plan_id;
        }
        if ($this->is_bulk_installation !== null) {
            $result['isBulkInstallation'] = $this->is_bulk_installation;
        }
        if ($this->install_to_future_locations !== null) {
            $result['installToFutureLocations'] = $this->install_to_future_locations;
        }
        if ($this->approve_all_locations !== null) {
            $result['approveAllLocations'] = $this->approve_all_locations;
        }
        return $result;
    }
}
