<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\BrandBoards\Models;

/**
 * CreateBrandVoicePublicV1BodyDto model
 * 
 * @package HighLevel\Services\BrandBoards\Models
 */
class CreateBrandVoicePublicV1BodyDto
{
    /**
     * @var string|null
     */
    public ?string $name = null;

    /**
     * @var string
     */
    public string $type;

    /**
     * @var string|null
     */
    public ?string $url = null;

    /**
     * @var string|null
     */
    public ?string $description = null;

    /**
     * @var mixed
     */
    public $answers;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->name = $data['name'] ?? null;
        $this->type = $data['type'] ?? '';
        $this->url = $data['url'] ?? null;
        $this->description = $data['description'] ?? null;
        $this->answers = $data['answers'] ?? null;
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
        if ($this->type !== null) {
            $result['type'] = $this->type;
        }
        if ($this->url !== null) {
            $result['url'] = $this->url;
        }
        if ($this->description !== null) {
            $result['description'] = $this->description;
        }
        if ($this->answers !== null) {
            $result['answers'] = $this->answers;
        }
        return $result;
    }
}
