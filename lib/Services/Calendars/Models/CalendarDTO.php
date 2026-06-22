<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Calendars\Models;

/**
 * CalendarDTO model
 * 
 * @package HighLevel\Services\Calendars\Models
 */
class CalendarDTO
{
    /**
     * @var bool|null
     */
    public ?bool $is_active = null;

    /**
     * @var array&lt;CalendarNotification&gt;|null
     */
    public ?array $notifications = null;

    /**
     * @var string
     */
    public string $location_id;

    /**
     * @var string|null
     */
    public ?string $group_id = null;

    /**
     * @var array&lt;TeamMemberResponse&gt;|null
     */
    public ?array $team_members = null;

    /**
     * @var string|null
     */
    public ?string $event_type = null;

    /**
     * @var string
     */
    public string $name;

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
    public ?string $calendar_type = null;

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
     * @var string|null
     */
    public ?string $meeting_location = null;

    /**
     * @var array&lt;LocationConfigurationResponse&gt;|null
     */
    public ?array $location_configurations = null;

    /**
     * @var float|null
     */
    public ?float $slot_duration = null;

    /**
     * @var string|null
     */
    public ?string $slot_duration_unit = null;

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
     * @var string|null
     */
    public ?string $slot_buffer_unit = null;

    /**
     * @var float|null
     */
    public ?float $pre_buffer = null;

    /**
     * @var string|null
     */
    public ?string $pre_buffer_unit = null;

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
     * @var array&lt;Availability&gt;|null
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
    public $look_busy_config;

    /**
     * @var string
     */
    public string $id;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->is_active = $data['isActive'] ?? null;
        // Handle array of CalendarNotification objects
        if (isset($data['notifications']) && is_array($data['notifications'])) {
            $this->notifications = array_map(function($item) {
                return is_array($item) ? new CalendarNotification($item) : $item;
            }, $data['notifications']);
        } else {
            $this->notifications = $data['notifications'] ?? null;
        }
        $this->location_id = $data['locationId'] ?? '';
        $this->group_id = $data['groupId'] ?? null;
        // Handle array of TeamMemberResponse objects
        if (isset($data['teamMembers']) && is_array($data['teamMembers'])) {
            $this->team_members = array_map(function($item) {
                return is_array($item) ? new TeamMemberResponse($item) : $item;
            }, $data['teamMembers']);
        } else {
            $this->team_members = $data['teamMembers'] ?? null;
        }
        $this->event_type = $data['eventType'] ?? null;
        $this->name = $data['name'] ?? '';
        $this->description = $data['description'] ?? null;
        $this->slug = $data['slug'] ?? null;
        $this->widget_slug = $data['widgetSlug'] ?? null;
        $this->calendar_type = $data['calendarType'] ?? null;
        $this->widget_type = $data['widgetType'] ?? null;
        $this->event_title = $data['eventTitle'] ?? null;
        $this->event_color = $data['eventColor'] ?? null;
        $this->meeting_location = $data['meetingLocation'] ?? null;
        // Handle array of LocationConfigurationResponse objects
        if (isset($data['locationConfigurations']) && is_array($data['locationConfigurations'])) {
            $this->location_configurations = array_map(function($item) {
                return is_array($item) ? new LocationConfigurationResponse($item) : $item;
            }, $data['locationConfigurations']);
        } else {
            $this->location_configurations = $data['locationConfigurations'] ?? null;
        }
        $this->slot_duration = $data['slotDuration'] ?? null;
        $this->slot_duration_unit = $data['slotDurationUnit'] ?? null;
        $this->slot_interval = $data['slotInterval'] ?? null;
        $this->slot_interval_unit = $data['slotIntervalUnit'] ?? null;
        $this->slot_buffer = $data['slotBuffer'] ?? null;
        $this->slot_buffer_unit = $data['slotBufferUnit'] ?? null;
        $this->pre_buffer = $data['preBuffer'] ?? null;
        $this->pre_buffer_unit = $data['preBufferUnit'] ?? null;
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
        // Handle array of Availability objects
        if (isset($data['availabilities']) && is_array($data['availabilities'])) {
            $this->availabilities = array_map(function($item) {
                return is_array($item) ? new Availability($item) : $item;
            }, $data['availabilities']);
        } else {
            $this->availabilities = $data['availabilities'] ?? null;
        }
        $this->guest_type = $data['guestType'] ?? null;
        $this->consent_label = $data['consentLabel'] ?? null;
        $this->calendar_cover_image = $data['calendarCoverImage'] ?? null;
        $this->look_busy_config = $data['lookBusyConfig'] ?? null;
        $this->id = $data['id'] ?? '';
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->is_active !== null) {
            $result['isActive'] = $this->is_active;
        }
        if ($this->notifications !== null) {
            $result['notifications'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->notifications);
        }
        if ($this->location_id !== null) {
            $result['locationId'] = $this->location_id;
        }
        if ($this->group_id !== null) {
            $result['groupId'] = $this->group_id;
        }
        if ($this->team_members !== null) {
            $result['teamMembers'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->team_members);
        }
        if ($this->event_type !== null) {
            $result['eventType'] = $this->event_type;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->description !== null) {
            $result['description'] = $this->description;
        }
        if ($this->slug !== null) {
            $result['slug'] = $this->slug;
        }
        if ($this->widget_slug !== null) {
            $result['widgetSlug'] = $this->widget_slug;
        }
        if ($this->calendar_type !== null) {
            $result['calendarType'] = $this->calendar_type;
        }
        if ($this->widget_type !== null) {
            $result['widgetType'] = $this->widget_type;
        }
        if ($this->event_title !== null) {
            $result['eventTitle'] = $this->event_title;
        }
        if ($this->event_color !== null) {
            $result['eventColor'] = $this->event_color;
        }
        if ($this->meeting_location !== null) {
            $result['meetingLocation'] = $this->meeting_location;
        }
        if ($this->location_configurations !== null) {
            $result['locationConfigurations'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->location_configurations);
        }
        if ($this->slot_duration !== null) {
            $result['slotDuration'] = $this->slot_duration;
        }
        if ($this->slot_duration_unit !== null) {
            $result['slotDurationUnit'] = $this->slot_duration_unit;
        }
        if ($this->slot_interval !== null) {
            $result['slotInterval'] = $this->slot_interval;
        }
        if ($this->slot_interval_unit !== null) {
            $result['slotIntervalUnit'] = $this->slot_interval_unit;
        }
        if ($this->slot_buffer !== null) {
            $result['slotBuffer'] = $this->slot_buffer;
        }
        if ($this->slot_buffer_unit !== null) {
            $result['slotBufferUnit'] = $this->slot_buffer_unit;
        }
        if ($this->pre_buffer !== null) {
            $result['preBuffer'] = $this->pre_buffer;
        }
        if ($this->pre_buffer_unit !== null) {
            $result['preBufferUnit'] = $this->pre_buffer_unit;
        }
        if ($this->appoinment_per_slot !== null) {
            $result['appoinmentPerSlot'] = $this->appoinment_per_slot;
        }
        if ($this->appoinment_per_day !== null) {
            $result['appoinmentPerDay'] = $this->appoinment_per_day;
        }
        if ($this->allow_booking_after !== null) {
            $result['allowBookingAfter'] = $this->allow_booking_after;
        }
        if ($this->allow_booking_after_unit !== null) {
            $result['allowBookingAfterUnit'] = $this->allow_booking_after_unit;
        }
        if ($this->allow_booking_for !== null) {
            $result['allowBookingFor'] = $this->allow_booking_for;
        }
        if ($this->allow_booking_for_unit !== null) {
            $result['allowBookingForUnit'] = $this->allow_booking_for_unit;
        }
        if ($this->open_hours !== null) {
            $result['openHours'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->open_hours);
        }
        if ($this->enable_recurring !== null) {
            $result['enableRecurring'] = $this->enable_recurring;
        }
        if ($this->recurring !== null) {
            $result['recurring'] = is_object($this->recurring) && method_exists($this->recurring, 'toArray') 
                ? $this->recurring->toArray() 
                : $this->recurring;
        }
        if ($this->form_id !== null) {
            $result['formId'] = $this->form_id;
        }
        if ($this->sticky_contact !== null) {
            $result['stickyContact'] = $this->sticky_contact;
        }
        if ($this->is_live_payment_mode !== null) {
            $result['isLivePaymentMode'] = $this->is_live_payment_mode;
        }
        if ($this->auto_confirm !== null) {
            $result['autoConfirm'] = $this->auto_confirm;
        }
        if ($this->should_send_alert_emails_to_assigned_member !== null) {
            $result['shouldSendAlertEmailsToAssignedMember'] = $this->should_send_alert_emails_to_assigned_member;
        }
        if ($this->alert_email !== null) {
            $result['alertEmail'] = $this->alert_email;
        }
        if ($this->google_invitation_emails !== null) {
            $result['googleInvitationEmails'] = $this->google_invitation_emails;
        }
        if ($this->allow_reschedule !== null) {
            $result['allowReschedule'] = $this->allow_reschedule;
        }
        if ($this->allow_cancellation !== null) {
            $result['allowCancellation'] = $this->allow_cancellation;
        }
        if ($this->should_assign_contact_to_team_member !== null) {
            $result['shouldAssignContactToTeamMember'] = $this->should_assign_contact_to_team_member;
        }
        if ($this->should_skip_assigning_contact_for_existing !== null) {
            $result['shouldSkipAssigningContactForExisting'] = $this->should_skip_assigning_contact_for_existing;
        }
        if ($this->notes !== null) {
            $result['notes'] = $this->notes;
        }
        if ($this->pixel_id !== null) {
            $result['pixelId'] = $this->pixel_id;
        }
        if ($this->form_submit_type !== null) {
            $result['formSubmitType'] = $this->form_submit_type;
        }
        if ($this->form_submit_redirect_u_r_l !== null) {
            $result['formSubmitRedirectURL'] = $this->form_submit_redirect_u_r_l;
        }
        if ($this->form_submit_thanks_message !== null) {
            $result['formSubmitThanksMessage'] = $this->form_submit_thanks_message;
        }
        if ($this->availability_type !== null) {
            $result['availabilityType'] = $this->availability_type;
        }
        if ($this->availabilities !== null) {
            $result['availabilities'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->availabilities);
        }
        if ($this->guest_type !== null) {
            $result['guestType'] = $this->guest_type;
        }
        if ($this->consent_label !== null) {
            $result['consentLabel'] = $this->consent_label;
        }
        if ($this->calendar_cover_image !== null) {
            $result['calendarCoverImage'] = $this->calendar_cover_image;
        }
        if ($this->look_busy_config !== null) {
            $result['lookBusyConfig'] = $this->look_busy_config;
        }
        if ($this->id !== null) {
            $result['id'] = $this->id;
        }
        return $result;
    }
}
