<?php

namespace HighLevel\Services\AgentStudio\Models;

/**
 * ExecutePublicAgentDTO model
 * 
 * @package HighLevel\Services\AgentStudio\Models
 */
class ExecutePublicAgentDTO
{
    /**
     * @var string
     */
    public string $message;

    /**
     * @var string|null
     */
    public ?string $execution_id = null;

    /**
     * @var array&lt;string, mixed&gt;|null
     */
    public ?array $input_variables = null;

    /**
     * @var string|null
     */
    public ?string $version_id = null;

    /**
     * @var array&lt;PublicAttachmentSchema&gt;|null
     */
    public ?array $attachments = null;

    /**
     * @var string
     */
    public string $location_id;

    /**
     * @var string|null
     */
    public ?string $contact_id = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->message = $data['message'] ?? '';
        $this->execution_id = $data['executionId'] ?? null;
        $this->input_variables = $data['inputVariables'] ?? null;
        $this->version_id = $data['versionId'] ?? null;
        // Handle array of PublicAttachmentSchema objects
        if (isset($data['attachments']) && is_array($data['attachments'])) {
            $this->attachments = array_map(function($item) {
                return is_array($item) ? new PublicAttachmentSchema($item) : $item;
            }, $data['attachments']);
        } else {
            $this->attachments = $data['attachments'] ?? null;
        }
        $this->location_id = $data['locationId'] ?? '';
        $this->contact_id = $data['contactId'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->message !== null) {
            $result['message'] = $this->message;
        }
        if ($this->execution_id !== null) {
            $result['executionId'] = $this->execution_id;
        }
        if ($this->input_variables !== null) {
            $result['inputVariables'] = $this->input_variables;
        }
        if ($this->version_id !== null) {
            $result['versionId'] = $this->version_id;
        }
        if ($this->attachments !== null) {
            $result['attachments'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->attachments);
        }
        if ($this->location_id !== null) {
            $result['locationId'] = $this->location_id;
        }
        if ($this->contact_id !== null) {
            $result['contactId'] = $this->contact_id;
        }
        return $result;
    }
}
