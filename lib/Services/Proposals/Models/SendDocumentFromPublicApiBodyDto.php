<?php

namespace HighLevel\Services\Proposals\Models;

/**
 * SendDocumentFromPublicApiBodyDto model
 * 
 * @package HighLevel\Services\Proposals\Models
 */
class SendDocumentFromPublicApiBodyDto
{
    /**
     * @var string
     */
    public string $template_id;

    /**
     * @var string
     */
    public string $user_id;

    /**
     * @var bool|null
     */
    public ?bool $send_document = null;

    /**
     * @var string
     */
    public string $location_id;

    /**
     * @var string
     */
    public string $contact_id;

    /**
     * @var string|null
     */
    public ?string $opportunity_id = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->template_id = $data['templateId'] ?? '';
        $this->user_id = $data['userId'] ?? '';
        $this->send_document = $data['sendDocument'] ?? null;
        $this->location_id = $data['locationId'] ?? '';
        $this->contact_id = $data['contactId'] ?? '';
        $this->opportunity_id = $data['opportunityId'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->template_id !== null) {
            $result['templateId'] = $this->template_id;
        }
        if ($this->user_id !== null) {
            $result['userId'] = $this->user_id;
        }
        if ($this->send_document !== null) {
            $result['sendDocument'] = $this->send_document;
        }
        if ($this->location_id !== null) {
            $result['locationId'] = $this->location_id;
        }
        if ($this->contact_id !== null) {
            $result['contactId'] = $this->contact_id;
        }
        if ($this->opportunity_id !== null) {
            $result['opportunityId'] = $this->opportunity_id;
        }
        return $result;
    }
}
