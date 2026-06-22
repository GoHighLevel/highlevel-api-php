<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Proposals\Models;

/**
 * ProposalEstimateLinksDto model
 * 
 * @package HighLevel\Services\Proposals\Models
 */
class ProposalEstimateLinksDto
{
    /**
     * @var string
     */
    public string $reference_id;

    /**
     * @var string
     */
    public string $document_id;

    /**
     * @var string
     */
    public string $recipient_id;

    /**
     * @var string
     */
    public string $entity_name;

    /**
     * @var string
     */
    public string $recipient_category;

    /**
     * @var float
     */
    public float $document_revision;

    /**
     * @var string
     */
    public string $created_by;

    /**
     * @var bool
     */
    public bool $deleted;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->reference_id = $data['referenceId'] ?? '';
        $this->document_id = $data['documentId'] ?? '';
        $this->recipient_id = $data['recipientId'] ?? '';
        $this->entity_name = $data['entityName'] ?? '';
        $this->recipient_category = $data['recipientCategory'] ?? '';
        $this->document_revision = $data['documentRevision'] ?? 0;
        $this->created_by = $data['createdBy'] ?? '';
        $this->deleted = $data['deleted'] ?? false;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->reference_id !== null) {
            $result['referenceId'] = $this->reference_id;
        }
        if ($this->document_id !== null) {
            $result['documentId'] = $this->document_id;
        }
        if ($this->recipient_id !== null) {
            $result['recipientId'] = $this->recipient_id;
        }
        if ($this->entity_name !== null) {
            $result['entityName'] = $this->entity_name;
        }
        if ($this->recipient_category !== null) {
            $result['recipientCategory'] = $this->recipient_category;
        }
        if ($this->document_revision !== null) {
            $result['documentRevision'] = $this->document_revision;
        }
        if ($this->created_by !== null) {
            $result['createdBy'] = $this->created_by;
        }
        if ($this->deleted !== null) {
            $result['deleted'] = $this->deleted;
        }
        return $result;
    }
}
