<?php

namespace HighLevel\Services\AdPublishing\Models;

/**
 * RuleBasedUserListDTO model
 * 
 * @package HighLevel\Services\AdPublishing\Models
 */
class RuleBasedUserListDTO
{
    /**
     * @var string|null
     */
    public ?string $prepopulation_status = null;

    /**
     * @var mixed
     */
    public $flexible_rule_user_list;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->prepopulation_status = $data['prepopulationStatus'] ?? null;
        $this->flexible_rule_user_list = $data['flexibleRuleUserList'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->prepopulation_status !== null) {
            $result['prepopulationStatus'] = $this->prepopulation_status;
        }
        if ($this->flexible_rule_user_list !== null) {
            $result['flexibleRuleUserList'] = $this->flexible_rule_user_list;
        }
        return $result;
    }
}
