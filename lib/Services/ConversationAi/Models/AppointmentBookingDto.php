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
     * Raw data storage for models without defined schema
     * @var array<string, mixed>
     */
    private array $data = [];

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
        // No defined properties - store raw data for flexible models
        $this->data = $data;
    }

    /**
     * Convert model to array (for models without defined schema)
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        return $this->data;
    }

    /**
     * Magic getter for accessing data properties
     * 
     * @param string $name Property name
     * @return mixed Property value or null if not found
     */
    public function __get(string $name)
    {
        return $this->data[$name] ?? null;
    }

    /**
     * Magic setter for setting data properties
     * 
     * @param string $name Property name
     * @param mixed $value Property value
     * @return void
     */
    public function __set(string $name, $value): void
    {
        $this->data[$name] = $value;
    }

    /**
     * Magic isset for checking if data property exists
     * 
     * @param string $name Property name
     * @return bool True if property exists, false otherwise
     */
    public function __isset(string $name): bool
    {
        return isset($this->data[$name]);
    }

    /**
     * Get all data as array
     * 
     * @return array<string, mixed>
     */
    public function getData(): array
    {
        return $this->data;
    }
}
