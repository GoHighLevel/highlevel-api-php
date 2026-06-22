<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\ChatWidget\Models;

/**
 * RedirectDTO model
 * 
 * @package HighLevel\Services\ChatWidget\Models
 */
class RedirectDTO
{
    /**
     * @var bool|null
     */
    public ?bool $redirect_action = null;

    /**
     * @var string|null
     */
    public ?string $redirect_website = null;

    /**
     * @var string|null
     */
    public ?string $redirect_text = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->redirect_action = $data['redirectAction'] ?? null;
        $this->redirect_website = $data['redirectWebsite'] ?? null;
        $this->redirect_text = $data['redirectText'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->redirect_action !== null) {
            $result['redirectAction'] = $this->redirect_action;
        }
        if ($this->redirect_website !== null) {
            $result['redirectWebsite'] = $this->redirect_website;
        }
        if ($this->redirect_text !== null) {
            $result['redirectText'] = $this->redirect_text;
        }
        return $result;
    }
}
