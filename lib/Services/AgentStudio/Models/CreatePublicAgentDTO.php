<?php

namespace HighLevel\Services\AgentStudio\Models;

/**
 * CreatePublicAgentDTO model
 * 
 * @package HighLevel\Services\AgentStudio\Models
 */
class CreatePublicAgentDTO
{
    /**
     * @var string
     */
    public string $location_id;

    /**
     * @var string|null
     */
    public ?string $name = null;

    /**
     * @var string|null
     */
    public ?string $description = null;

    /**
     * @var string|null
     */
    public ?string $agency_id = null;

    /**
     * @var string|null
     */
    public ?string $author_id = null;

    /**
     * @var string|null
     */
    public ?string $author_name = null;

    /**
     * @var string|null
     */
    public ?string $author_email = null;

    /**
     * @var string
     */
    public string $status;

    /**
     * @var array&lt;string, mixed&gt;
     */
    public array $version;

    /**
     * @var array&lt;string&gt;|null
     */
    public ?array $nodes = null;

    /**
     * @var array&lt;string&gt;|null
     */
    public ?array $edges = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->location_id = $data['locationId'] ?? '';
        $this->name = $data['name'] ?? null;
        $this->description = $data['description'] ?? null;
        $this->agency_id = $data['agencyId'] ?? null;
        $this->author_id = $data['authorId'] ?? null;
        $this->author_name = $data['authorName'] ?? null;
        $this->author_email = $data['authorEmail'] ?? null;
        $this->status = $data['status'] ?? '';
        $this->version = $data['version'] ?? null;
        $this->nodes = $data['nodes'] ?? null;
        $this->edges = $data['edges'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->location_id !== null) {
            $result['locationId'] = $this->location_id;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->description !== null) {
            $result['description'] = $this->description;
        }
        if ($this->agency_id !== null) {
            $result['agencyId'] = $this->agency_id;
        }
        if ($this->author_id !== null) {
            $result['authorId'] = $this->author_id;
        }
        if ($this->author_name !== null) {
            $result['authorName'] = $this->author_name;
        }
        if ($this->author_email !== null) {
            $result['authorEmail'] = $this->author_email;
        }
        if ($this->status !== null) {
            $result['status'] = $this->status;
        }
        if ($this->version !== null) {
            $result['version'] = $this->version;
        }
        if ($this->nodes !== null) {
            $result['nodes'] = $this->nodes;
        }
        if ($this->edges !== null) {
            $result['edges'] = $this->edges;
        }
        return $result;
    }
}
