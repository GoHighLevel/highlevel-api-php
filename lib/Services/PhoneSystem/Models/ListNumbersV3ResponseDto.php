<?php

namespace HighLevel\Services\PhoneSystem\Models;

/**
 * ListNumbersV3ResponseDto model
 * 
 * @package HighLevel\Services\PhoneSystem\Models
 */
class ListNumbersV3ResponseDto
{
    /**
     * @var array&lt;ListNumberItemResponseDto&gt;
     */
    public array $numbers;

    /**
     * @var bool|null
     */
    public ?bool $is_under_lc = null;

    /**
     * @var float|null
     */
    public ?float $page_size = null;

    /**
     * @var float|null
     */
    public ?float $page = null;

    /**
     * @var string|null
     */
    public ?string $account_status = null;

    /**
     * @var array&lt;RcsSenderIdResponseDto&gt;|null
     */
    public ?array $rcs_sender_ids = null;

    /**
     * @var float|null
     */
    public ?float $total = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        // Handle array of ListNumberItemResponseDto objects
        if (isset($data['numbers']) && is_array($data['numbers'])) {
            $this->numbers = array_map(function($item) {
                return is_array($item) ? new ListNumberItemResponseDto($item) : $item;
            }, $data['numbers']);
        } else {
            $this->numbers = $data['numbers'] ?? [];
        }
        $this->is_under_lc = $data['isUnderLc'] ?? null;
        $this->page_size = $data['pageSize'] ?? null;
        $this->page = $data['page'] ?? null;
        $this->account_status = $data['accountStatus'] ?? null;
        // Handle array of RcsSenderIdResponseDto objects
        if (isset($data['rcsSenderIds']) && is_array($data['rcsSenderIds'])) {
            $this->rcs_sender_ids = array_map(function($item) {
                return is_array($item) ? new RcsSenderIdResponseDto($item) : $item;
            }, $data['rcsSenderIds']);
        } else {
            $this->rcs_sender_ids = $data['rcsSenderIds'] ?? null;
        }
        $this->total = $data['total'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->numbers !== null) {
            $result['numbers'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->numbers);
        }
        if ($this->is_under_lc !== null) {
            $result['isUnderLc'] = $this->is_under_lc;
        }
        if ($this->page_size !== null) {
            $result['pageSize'] = $this->page_size;
        }
        if ($this->page !== null) {
            $result['page'] = $this->page;
        }
        if ($this->account_status !== null) {
            $result['accountStatus'] = $this->account_status;
        }
        if ($this->rcs_sender_ids !== null) {
            $result['rcsSenderIds'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->rcs_sender_ids);
        }
        if ($this->total !== null) {
            $result['total'] = $this->total;
        }
        return $result;
    }
}
