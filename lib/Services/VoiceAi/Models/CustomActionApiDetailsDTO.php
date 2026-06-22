<?php

namespace HighLevel\Services\VoiceAi\Models;

/**
 * CustomActionApiDetailsDTO model
 * 
 * @package HighLevel\Services\VoiceAi\Models
 */
class CustomActionApiDetailsDTO
{
    /**
     * @var string
     */
    public string $url;

    /**
     * @var string
     */
    public string $method;

    /**
     * @var bool|null
     */
    public ?bool $authentication_required = null;

    /**
     * @var string|null
     */
    public ?string $authentication_value = null;

    /**
     * @var array&lt;CustomActionHeaderDTO&gt;|null
     */
    public ?array $headers = null;

    /**
     * @var array&lt;CustomActionParameterDTO&gt;|null
     */
    public ?array $parameters = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->url = $data['url'] ?? '';
        $this->method = $data['method'] ?? '';
        $this->authentication_required = $data['authenticationRequired'] ?? null;
        $this->authentication_value = $data['authenticationValue'] ?? null;
        // Handle array of CustomActionHeaderDTO objects
        if (isset($data['headers']) && is_array($data['headers'])) {
            $this->headers = array_map(function($item) {
                return is_array($item) ? new CustomActionHeaderDTO($item) : $item;
            }, $data['headers']);
        } else {
            $this->headers = $data['headers'] ?? null;
        }
        // Handle array of CustomActionParameterDTO objects
        if (isset($data['parameters']) && is_array($data['parameters'])) {
            $this->parameters = array_map(function($item) {
                return is_array($item) ? new CustomActionParameterDTO($item) : $item;
            }, $data['parameters']);
        } else {
            $this->parameters = $data['parameters'] ?? null;
        }
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->url !== null) {
            $result['url'] = $this->url;
        }
        if ($this->method !== null) {
            $result['method'] = $this->method;
        }
        if ($this->authentication_required !== null) {
            $result['authenticationRequired'] = $this->authentication_required;
        }
        if ($this->authentication_value !== null) {
            $result['authenticationValue'] = $this->authentication_value;
        }
        if ($this->headers !== null) {
            $result['headers'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->headers);
        }
        if ($this->parameters !== null) {
            $result['parameters'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->parameters);
        }
        return $result;
    }
}
