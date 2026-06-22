<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Locations\Models;

/**
 * ConversationChannelSchema model
 * 
 * @package HighLevel\Services\Locations\Models
 */
class ConversationChannelSchema
{
    /**
     * @var array&lt;ConversationChannelEntrySchema&gt;|null
     */
    public ?array $s_m_s = null;

    /**
     * @var array&lt;ConversationChannelEntrySchema&gt;|null
     */
    public ?array $email = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        // Handle array of ConversationChannelEntrySchema objects
        if (isset($data['SMS']) && is_array($data['SMS'])) {
            $this->s_m_s = array_map(function($item) {
                return is_array($item) ? new ConversationChannelEntrySchema($item) : $item;
            }, $data['SMS']);
        } else {
            $this->s_m_s = $data['SMS'] ?? null;
        }
        // Handle array of ConversationChannelEntrySchema objects
        if (isset($data['Email']) && is_array($data['Email'])) {
            $this->email = array_map(function($item) {
                return is_array($item) ? new ConversationChannelEntrySchema($item) : $item;
            }, $data['Email']);
        } else {
            $this->email = $data['Email'] ?? null;
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
        if ($this->s_m_s !== null) {
            $result['SMS'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->s_m_s);
        }
        if ($this->email !== null) {
            $result['Email'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->email);
        }
        return $result;
    }
}
