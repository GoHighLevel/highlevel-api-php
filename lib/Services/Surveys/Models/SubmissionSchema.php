<?php

namespace HighLevel\Services\Surveys\Models;

/**
 * SubmissionSchema model
 * 
 * @package HighLevel\Services\Surveys\Models
 */
class SubmissionSchema
{
    /**
     * @var string|null
     */
    public ?string $id = null;

    /**
     * @var string|null
     */
    public ?string $contact_id = null;

    /**
     * @var string|null
     */
    public ?string $created_at = null;

    /**
     * @var string|null
     */
    public ?string $survey_id = null;

    /**
     * @var string|null
     */
    public ?string $name = null;

    /**
     * @var string|null
     */
    public ?string $email = null;

    /**
     * @var othersSchema|null
     */
    public ?othersSchema $others = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->id = $data['id'] ?? null;
        $this->contact_id = $data['contactId'] ?? null;
        $this->created_at = $data['createdAt'] ?? null;
        $this->survey_id = $data['surveyId'] ?? null;
        $this->name = $data['name'] ?? null;
        $this->email = $data['email'] ?? null;
        // Handle single OthersSchema object
        if (isset($data['others']) && is_array($data['others'])) {
            $this->others = new OthersSchema($data['others']);
        } else {
            $this->others = $data['others'] ?? null;
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
        if ($this->id !== null) {
            $result['id'] = $this->id;
        }
        if ($this->contact_id !== null) {
            $result['contactId'] = $this->contact_id;
        }
        if ($this->created_at !== null) {
            $result['createdAt'] = $this->created_at;
        }
        if ($this->survey_id !== null) {
            $result['surveyId'] = $this->survey_id;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->email !== null) {
            $result['email'] = $this->email;
        }
        if ($this->others !== null) {
            $result['others'] = is_object($this->others) && method_exists($this->others, 'toArray') 
                ? $this->others->toArray() 
                : $this->others;
        }
        return $result;
    }
}
