<?php

namespace HighLevel\Services\Payments\Models;

/**
 * ScheduleOptionsDto model
 * 
 * @package HighLevel\Services\Payments\Models
 */
class ScheduleOptionsDto
{
    /**
     * @var string|null
     */
    public ?string $execute_at = null;

    /**
     * @var CustomRRuleOptionsDto|null
     */
    public ?CustomRRuleOptionsDto $rrule = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->execute_at = $data['executeAt'] ?? null;
        // Handle single CustomRRuleOptionsDto object
        if (isset($data['rrule']) && is_array($data['rrule'])) {
            $this->rrule = new CustomRRuleOptionsDto($data['rrule']);
        } else {
            $this->rrule = $data['rrule'] ?? null;
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
        if ($this->execute_at !== null) {
            $result['executeAt'] = $this->execute_at;
        }
        if ($this->rrule !== null) {
            $result['rrule'] = is_object($this->rrule) && method_exists($this->rrule, 'toArray') 
                ? $this->rrule->toArray() 
                : $this->rrule;
        }
        return $result;
    }
}
