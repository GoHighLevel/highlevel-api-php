<?php

namespace HighLevel\Services\Emails\Models;

/**
 * UpdateEmailCampaignPublicV2BodyDto model
 * 
 * @package HighLevel\Services\Emails\Models
 */
class UpdateEmailCampaignPublicV2BodyDto
{
    /**
     * @var string|null
     */
    public ?string $name = null;

    /**
     * @var string|null
     */
    public ?string $editor_content = null;

    /**
     * @var string|null
     */
    public ?string $editor_type = null;

    /**
     * @var string|null
     */
    public ?string $user_id = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->name = $data['name'] ?? null;
        $this->editor_content = $data['editorContent'] ?? null;
        $this->editor_type = $data['editorType'] ?? null;
        $this->user_id = $data['userId'] ?? null;
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
        if ($this->editor_content !== null) {
            $result['editorContent'] = $this->editor_content;
        }
        if ($this->editor_type !== null) {
            $result['editorType'] = $this->editor_type;
        }
        if ($this->user_id !== null) {
            $result['userId'] = $this->user_id;
        }
        return $result;
    }
}
