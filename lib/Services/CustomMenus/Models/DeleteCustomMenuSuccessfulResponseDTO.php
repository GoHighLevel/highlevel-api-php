<?php

namespace HighLevel\Services\CustomMenus\Models;

/**
 * DeleteCustomMenuSuccessfulResponseDTO model
 * 
 * @package HighLevel\Services\CustomMenus\Models
 */
class DeleteCustomMenuSuccessfulResponseDTO
{
    /**
     * @var bool|null
     */
    public ?bool $success = null;

    /**
     * @var string|null
     */
    public ?string $message = null;

    /**
     * @var string|null
     */
    public ?string $deleted_menu_id = null;

    /**
     * @var string|null
     */
    public ?string $deleted_at = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->success = $data['success'] ?? null;
        $this->message = $data['message'] ?? null;
        $this->deleted_menu_id = $data['deletedMenuId'] ?? null;
        $this->deleted_at = $data['deletedAt'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->success !== null) {
            $result['success'] = $this->success;
        }
        if ($this->message !== null) {
            $result['message'] = $this->message;
        }
        if ($this->deleted_menu_id !== null) {
            $result['deletedMenuId'] = $this->deleted_menu_id;
        }
        if ($this->deleted_at !== null) {
            $result['deletedAt'] = $this->deleted_at;
        }
        return $result;
    }
}
