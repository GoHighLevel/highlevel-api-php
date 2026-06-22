<?php

namespace HighLevel\Services\SocialPlanner\Models;

/**
 * FormatedApprovalDetails model
 * 
 * @package HighLevel\Services\SocialPlanner\Models
 */
class FormatedApprovalDetails
{
    /**
     * @var string|null
     */
    public ?string $approver = null;

    /**
     * @var string|null
     */
    public ?string $requester_note = null;

    /**
     * @var string|null
     */
    public ?string $approver_note = null;

    /**
     * @var string|null
     */
    public ?string $approval_status = null;

    /**
     * @var mixed
     */
    public $approver_user;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->approver = $data['approver'] ?? null;
        $this->requester_note = $data['requesterNote'] ?? null;
        $this->approver_note = $data['approverNote'] ?? null;
        $this->approval_status = $data['approvalStatus'] ?? null;
        $this->approver_user = $data['approverUser'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->approver !== null) {
            $result['approver'] = $this->approver;
        }
        if ($this->requester_note !== null) {
            $result['requesterNote'] = $this->requester_note;
        }
        if ($this->approver_note !== null) {
            $result['approverNote'] = $this->approver_note;
        }
        if ($this->approval_status !== null) {
            $result['approvalStatus'] = $this->approval_status;
        }
        if ($this->approver_user !== null) {
            $result['approverUser'] = $this->approver_user;
        }
        return $result;
    }
}
