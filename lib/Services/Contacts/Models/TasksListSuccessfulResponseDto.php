<?php

namespace HighLevel\Services\Contacts\Models;

/**
 * TasksListSuccessfulResponseDto model
 * 
 * @package HighLevel\Services\Contacts\Models
 */
class TasksListSuccessfulResponseDto
{
    /**
     * @var array&lt;TaskSchema&gt;|null
     */
    public ?array $tasks = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        // Handle array of TaskSchema objects
        if (isset($data['tasks']) && is_array($data['tasks'])) {
            $this->tasks = array_map(function($item) {
                return is_array($item) ? new TaskSchema($item) : $item;
            }, $data['tasks']);
        } else {
            $this->tasks = $data['tasks'] ?? null;
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
        if ($this->tasks !== null) {
            $result['tasks'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->tasks);
        }
        return $result;
    }
}
