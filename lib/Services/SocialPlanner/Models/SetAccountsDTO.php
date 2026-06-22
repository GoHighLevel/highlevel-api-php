<?php

namespace HighLevel\Services\SocialPlanner\Models;

/**
 * SetAccountsDTO model
 * 
 * @package HighLevel\Services\SocialPlanner\Models
 */
class SetAccountsDTO
{
    /**
     * @var array&lt;string&gt;
     */
    public array $account_ids;

    /**
     * @var string
     */
    public string $file_path;

    /**
     * @var float
     */
    public float $rows_count;

    /**
     * @var string
     */
    public string $file_name;

    /**
     * @var string|null
     */
    public ?string $approver = null;

    /**
     * @var string
     */
    public string $user_id;

    /**
     * @var string|null
     */
    public ?string $csv_file_type = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->account_ids = $data['accountIds'] ?? [];
        $this->file_path = $data['filePath'] ?? '';
        $this->rows_count = $data['rowsCount'] ?? 0;
        $this->file_name = $data['fileName'] ?? '';
        $this->approver = $data['approver'] ?? null;
        $this->user_id = $data['userId'] ?? '';
        $this->csv_file_type = $data['csvFileType'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->account_ids !== null) {
            $result['accountIds'] = $this->account_ids;
        }
        if ($this->file_path !== null) {
            $result['filePath'] = $this->file_path;
        }
        if ($this->rows_count !== null) {
            $result['rowsCount'] = $this->rows_count;
        }
        if ($this->file_name !== null) {
            $result['fileName'] = $this->file_name;
        }
        if ($this->approver !== null) {
            $result['approver'] = $this->approver;
        }
        if ($this->user_id !== null) {
            $result['userId'] = $this->user_id;
        }
        if ($this->csv_file_type !== null) {
            $result['csvFileType'] = $this->csv_file_type;
        }
        return $result;
    }
}
