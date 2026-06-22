<?php

namespace HighLevel\Services\SocialPlanner\Models;

/**
 * LinkedinPollDto model
 * 
 * @package HighLevel\Services\SocialPlanner\Models
 */
class LinkedinPollDto
{
    /**
     * @var string
     */
    public string $question;

    /**
     * @var array&lt;LinkedinPollOptionDto&gt;
     */
    public array $options;

    /**
     * @var mixed
     */
    public $settings;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->question = $data['question'] ?? '';
        // Handle array of LinkedinPollOptionDto objects
        if (isset($data['options']) && is_array($data['options'])) {
            $this->options = array_map(function($item) {
                return is_array($item) ? new LinkedinPollOptionDto($item) : $item;
            }, $data['options']);
        } else {
            $this->options = $data['options'] ?? [];
        }
        $this->settings = $data['settings'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->question !== null) {
            $result['question'] = $this->question;
        }
        if ($this->options !== null) {
            $result['options'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->options);
        }
        if ($this->settings !== null) {
            $result['settings'] = $this->settings;
        }
        return $result;
    }
}
