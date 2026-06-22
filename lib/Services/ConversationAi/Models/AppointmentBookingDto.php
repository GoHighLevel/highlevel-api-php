<?php

namespace HighLevel\Services\ConversationAi\Models;

/**
 * appointmentBookingDto model
 * 
 * @package HighLevel\Services\ConversationAi\Models
 */
class AppointmentBookingDto
{
    /**
     * @var string|null
     */
    public ?string $action_id = null;

    /**
     * @var string
     */
    public string $calendar_id;

    /**
     * @var bool
     */
    public bool $only_send_link;

    /**
     * @var bool
     */
    public bool $trigger_workflow;

    /**
     * @var array&lt;string&gt;|null
     */
    public ?array $workflow_ids = null;

    /**
     * @var bool
     */
    public bool $sleep_after_booking;

    /**
     * @var string|null
     */
    public ?string $sleep_time_unit = null;

    /**
     * @var float|null
     */
    public ?float $sleep_time = null;

    /**
     * @var bool
     */
    public bool $transfer_bot;

    /**
     * @var string|null
     */
    public ?string $transfer_agent = null;

    /**
     * @var bool
     */
    public bool $reschedule_enabled;

    /**
     * @var bool
     */
    public bool $cancel_enabled;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->action_id = $data['actionId'] ?? null;
        $this->calendar_id = $data['calendarId'] ?? '';
        $this->only_send_link = $data['onlySendLink'] ?? false;
        $this->trigger_workflow = $data['triggerWorkflow'] ?? false;
        $this->workflow_ids = $data['workflowIds'] ?? null;
        $this->sleep_after_booking = $data['sleepAfterBooking'] ?? false;
        $this->sleep_time_unit = $data['sleepTimeUnit'] ?? null;
        $this->sleep_time = $data['sleepTime'] ?? null;
        $this->transfer_bot = $data['transferBot'] ?? false;
        $this->transfer_agent = $data['transferAgent'] ?? null;
        $this->reschedule_enabled = $data['rescheduleEnabled'] ?? false;
        $this->cancel_enabled = $data['cancelEnabled'] ?? false;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->action_id !== null) {
            $result['actionId'] = $this->action_id;
        }
        if ($this->calendar_id !== null) {
            $result['calendarId'] = $this->calendar_id;
        }
        if ($this->only_send_link !== null) {
            $result['onlySendLink'] = $this->only_send_link;
        }
        if ($this->trigger_workflow !== null) {
            $result['triggerWorkflow'] = $this->trigger_workflow;
        }
        if ($this->workflow_ids !== null) {
            $result['workflowIds'] = $this->workflow_ids;
        }
        if ($this->sleep_after_booking !== null) {
            $result['sleepAfterBooking'] = $this->sleep_after_booking;
        }
        if ($this->sleep_time_unit !== null) {
            $result['sleepTimeUnit'] = $this->sleep_time_unit;
        }
        if ($this->sleep_time !== null) {
            $result['sleepTime'] = $this->sleep_time;
        }
        if ($this->transfer_bot !== null) {
            $result['transferBot'] = $this->transfer_bot;
        }
        if ($this->transfer_agent !== null) {
            $result['transferAgent'] = $this->transfer_agent;
        }
        if ($this->reschedule_enabled !== null) {
            $result['rescheduleEnabled'] = $this->reschedule_enabled;
        }
        if ($this->cancel_enabled !== null) {
            $result['cancelEnabled'] = $this->cancel_enabled;
        }
        return $result;
    }
}
