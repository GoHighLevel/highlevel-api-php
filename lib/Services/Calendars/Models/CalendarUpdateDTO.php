<?php

namespace HighLevel\Services\Calendars\Models;

/**
 * CalendarUpdateDTO model
 * 
 * @package HighLevel\Services\Calendars\Models
 */
class CalendarUpdateDTO
{
    /**
     * @var array&lt;CalendarNotification&gt;|null
     */
    public ?array $notifications = null;

    /**
     * @var string|null
     */
    public ?string $group_id = null;

    /**
     * @var array&lt;TeamMember&gt;|null
     */
    public ?array $team_members = null;

    /**
     * @var string|null
     */
    public ?string $event_type = null;

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
    public ?string $slug = null;

    /**
     * @var string|null
     */
    public ?string $widget_slug = null;

    /**
     * @var string|null
     */
    public ?string $widget_type = null;

    /**
     * @var string|null
     */
    public ?string $event_title = null;

    /**
     * @var string|null
     */
    public ?string $event_color = null;

    /**
     * @var array&lt;LocationConfiguration&gt;|null
     */
    public ?array $location_configurations = null;

    /**
     * @var string|null
     */
    public ?string $meeting_location = null;

    /**
     * @var float|null
     */
    public ?float $slot_duration = null;

    /**
     * @var string|null
     */
    public ?string $slot_duration_unit = null;

    /**
     * @var string|null
     */
    public ?string $pre_buffer_unit = null;

    /**
     * @var float|null
     */
    public ?float $slot_interval = null;

    /**
     * @var string|null
     */
    public ?string $slot_interval_unit = null;

    /**
     * @var float|null
     */
    public ?float $slot_buffer = null;

    /**
     * @var float|null
     */
    public ?float $pre_buffer = null;

    /**
     * @var float|null
     */
    public ?float $appoinment_per_slot = null;

    /**
     * @var float|null
     */
    public ?float $appoinment_per_day = null;

    /**
     * @var float|null
     */
    public ?float $allow_booking_after = null;

    /**
     * @var string|null
     */
    public ?string $allow_booking_after_unit = null;

    /**
     * @var float|null
     */
    public ?float $allow_booking_for = null;

    /**
     * @var string|null
     */
    public ?string $allow_booking_for_unit = null;

    /**
     * @var array&lt;OpenHour&gt;|null
     */
    public ?array $open_hours = null;

    /**
     * @var bool|null
     */
    public ?bool $enable_recurring = null;

    /**
     * @var Recurring|null
     */
    public ?Recurring $recurring = null;

    /**
     * @var string|null
     */
    public ?string $form_id = null;

    /**
     * @var bool|null
     */
    public ?bool $sticky_contact = null;

    /**
     * @var bool|null
     */
    public ?bool $is_live_payment_mode = null;

    /**
     * @var bool|null
     */
    public ?bool $auto_confirm = null;

    /**
     * @var bool|null
     */
    public ?bool $should_send_alert_emails_to_assigned_member = null;

    /**
     * @var string|null
     */
    public ?string $alert_email = null;

    /**
     * @var bool|null
     */
    public ?bool $google_invitation_emails = null;

    /**
     * @var bool|null
     */
    public ?bool $allow_reschedule = null;

    /**
     * @var bool|null
     */
    public ?bool $allow_cancellation = null;

    /**
     * @var bool|null
     */
    public ?bool $should_assign_contact_to_team_member = null;

    /**
     * @var bool|null
     */
    public ?bool $should_skip_assigning_contact_for_existing = null;

    /**
     * @var string|null
     */
    public ?string $notes = null;

    /**
     * @var string|null
     */
    public ?string $pixel_id = null;

    /**
     * @var string|null
     */
    public ?string $form_submit_type = null;

    /**
     * @var string|null
     */
    public ?string $form_submit_redirect_u_r_l = null;

    /**
     * @var string|null
     */
    public ?string $form_submit_thanks_message = null;

    /**
     * @var float|null
     */
    public ?float $availability_type = null;

    /**
     * @var array&lt;UpdateAvailability&gt;|null
     */
    public ?array $availabilities = null;

    /**
     * @var string|null
     */
    public ?string $guest_type = null;

    /**
     * @var string|null
     */
    public ?string $consent_label = null;

    /**
     * @var string|null
     */
    public ?string $calendar_cover_image = null;

    /**
     * @var mixed
     */
    public mixed $look_busy_config;

    /**
     * @var bool|null
     */
    public ?bool $is_active = null;

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
        // Handle array of CalendarNotification objects
        if (isset($data['notifications']) && is_array($data['notifications'])) {
            $this->notifications = array_map(function($item) {
                return is_array($item) ? new CalendarNotification($item) : $item;
            }, $data['notifications']);
        } else {
            $this->notifications = $data['notifications'] ?? null;
        }
        $this->group_id = $data['groupId'] ?? null;
        // Handle array of TeamMember objects
        if (isset($data['teamMembers']) && is_array($data['teamMembers'])) {
            $this->team_members = array_map(function($item) {
                return is_array($item) ? new TeamMember($item) : $item;
            }, $data['teamMembers']);
        } else {
            $this->team_members = $data['teamMembers'] ?? null;
        }
        $this->event_type = $data['eventType'] ?? null;
        $this->name = $data['name'] ?? null;
        $this->description = $data['description'] ?? null;
        $this->slug = $data['slug'] ?? null;
        $this->widget_slug = $data['widgetSlug'] ?? null;
        $this->widget_type = $data['widgetType'] ?? null;
        $this->event_title = $data['eventTitle'] ?? null;
        $this->event_color = $data['eventColor'] ?? null;
        // Handle array of LocationConfiguration objects
        if (isset($data['locationConfigurations']) && is_array($data['locationConfigurations'])) {
            $this->location_configurations = array_map(function($item) {
                return is_array($item) ? new LocationConfiguration($item) : $item;
            }, $data['locationConfigurations']);
        } else {
            $this->location_configurations = $data['locationConfigurations'] ?? null;
        }
        $this->meeting_location = $data['meetingLocation'] ?? null;
        $this->slot_duration = $data['slotDuration'] ?? null;
        $this->slot_duration_unit = $data['slotDurationUnit'] ?? null;
        $this->pre_buffer_unit = $data['preBufferUnit'] ?? null;
        $this->slot_interval = $data['slotInterval'] ?? null;
        $this->slot_interval_unit = $data['slotIntervalUnit'] ?? null;
        $this->slot_buffer = $data['slotBuffer'] ?? null;
        $this->pre_buffer = $data['preBuffer'] ?? null;
        $this->appoinment_per_slot = $data['appoinmentPerSlot'] ?? null;
        $this->appoinment_per_day = $data['appoinmentPerDay'] ?? null;
        $this->allow_booking_after = $data['allowBookingAfter'] ?? null;
        $this->allow_booking_after_unit = $data['allowBookingAfterUnit'] ?? null;
        $this->allow_booking_for = $data['allowBookingFor'] ?? null;
        $this->allow_booking_for_unit = $data['allowBookingForUnit'] ?? null;
        // Handle array of OpenHour objects
        if (isset($data['openHours']) && is_array($data['openHours'])) {
            $this->open_hours = array_map(function($item) {
                return is_array($item) ? new OpenHour($item) : $item;
            }, $data['openHours']);
        } else {
            $this->open_hours = $data['openHours'] ?? null;
        }
        $this->enable_recurring = $data['enableRecurring'] ?? null;
        // Handle single Recurring object
        if (isset($data['recurring']) && is_array($data['recurring'])) {
            $this->recurring = new Recurring($data['recurring']);
        } else {
            $this->recurring = $data['recurring'] ?? null;
        }
        $this->form_id = $data['formId'] ?? null;
        $this->sticky_contact = $data['stickyContact'] ?? null;
        $this->is_live_payment_mode = $data['isLivePaymentMode'] ?? null;
        $this->auto_confirm = $data['autoConfirm'] ?? null;
        $this->should_send_alert_emails_to_assigned_member = $data['shouldSendAlertEmailsToAssignedMember'] ?? null;
        $this->alert_email = $data['alertEmail'] ?? null;
        $this->google_invitation_emails = $data['googleInvitationEmails'] ?? null;
        $this->allow_reschedule = $data['allowReschedule'] ?? null;
        $this->allow_cancellation = $data['allowCancellation'] ?? null;
        $this->should_assign_contact_to_team_member = $data['shouldAssignContactToTeamMember'] ?? null;
        $this->should_skip_assigning_contact_for_existing = $data['shouldSkipAssigningContactForExisting'] ?? null;
        $this->notes = $data['notes'] ?? null;
        $this->pixel_id = $data['pixelId'] ?? null;
        $this->form_submit_type = $data['formSubmitType'] ?? null;
        $this->form_submit_redirect_u_r_l = $data['formSubmitRedirectURL'] ?? null;
        $this->form_submit_thanks_message = $data['formSubmitThanksMessage'] ?? null;
        $this->availability_type = $data['availabilityType'] ?? null;
        // Handle array of UpdateAvailability objects
        if (isset($data['availabilities']) && is_array($data['availabilities'])) {
            $this->availabilities = array_map(function($item) {
                return is_array($item) ? new UpdateAvailability($item) : $item;
            }, $data['availabilities']);
        } else {
            $this->availabilities = $data['availabilities'] ?? null;
        }
        $this->guest_type = $data['guestType'] ?? null;
        $this->consent_label = $data['consentLabel'] ?? null;
        $this->calendar_cover_image = $data['calendarCoverImage'] ?? null;
        $this->look_busy_config = $data['lookBusyConfig'] ?? null;
        $this->is_active = $data['isActive'] ?? null;
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
