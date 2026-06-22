<?php

namespace HighLevel\Services\Oauth\Models;

/**
 * GetAccessTokenBodyDto model
 * 
 * @package HighLevel\Services\Oauth\Models
 */
class GetAccessTokenBodyDto
{
    /**
     * @var string
     */
    public string $client_id;

    /**
     * @var string
     */
    public string $client_secret;

    /**
     * @var string
     */
    public string $grant_type;

    /**
     * @var string|null
     */
    public ?string $code = null;

    /**
     * @var string|null
     */
    public ?string $refresh_token = null;

    /**
     * @var string|null
     */
    public ?string $user_type = null;

    /**
     * @var string|null
     */
    public ?string $redirect_uri = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->client_id = $data['clientId'] ?? '';
        $this->client_secret = $data['clientSecret'] ?? '';
        $this->grant_type = $data['grantType'] ?? '';
        $this->code = $data['code'] ?? null;
        $this->refresh_token = $data['refreshToken'] ?? null;
        $this->user_type = $data['userType'] ?? null;
        $this->redirect_uri = $data['redirectUri'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->client_id !== null) {
            $result['clientId'] = $this->client_id;
        }
        if ($this->client_secret !== null) {
            $result['clientSecret'] = $this->client_secret;
        }
        if ($this->grant_type !== null) {
            $result['grantType'] = $this->grant_type;
        }
        if ($this->code !== null) {
            $result['code'] = $this->code;
        }
        if ($this->refresh_token !== null) {
            $result['refreshToken'] = $this->refresh_token;
        }
        if ($this->user_type !== null) {
            $result['userType'] = $this->user_type;
        }
        if ($this->redirect_uri !== null) {
            $result['redirectUri'] = $this->redirect_uri;
        }
        return $result;
    }
}
