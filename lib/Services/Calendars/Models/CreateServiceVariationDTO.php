<?php

namespace HighLevel\Services\Calendars\Models;

/**
 * CreateServiceVariationDTO model
 * 
 * @package HighLevel\Services\Calendars\Models
 */
class CreateServiceVariationDTO
{
    /**
     * @var float|null
     */
    public ?float $service_duration = null;

    /**
     * @var string|null
     */
    public ?string $service_duration_unit = null;

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
    public ?float $post_buffer = null;

    /**
     * @var string|null
     */
    public ?string $post_buffer_unit = null;

    /**
     * @var mixed
     */
    public $payment;

    /**
     * @var string
     */
    public string $name;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->service_duration = $data['serviceDuration'] ?? null;
        $this->service_duration_unit = $data['serviceDurationUnit'] ?? null;
        $this->pre_buffer = $data['preBuffer'] ?? null;
        $this->pre_buffer_unit = $data['preBufferUnit'] ?? null;
        $this->post_buffer = $data['postBuffer'] ?? null;
        $this->post_buffer_unit = $data['postBufferUnit'] ?? null;
        $this->payment = $data['payment'] ?? null;
        $this->name = $data['name'] ?? '';
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->service_duration !== null) {
            $result['serviceDuration'] = $this->service_duration;
        }
        if ($this->service_duration_unit !== null) {
            $result['serviceDurationUnit'] = $this->service_duration_unit;
        }
        if ($this->pre_buffer !== null) {
            $result['preBuffer'] = $this->pre_buffer;
        }
        if ($this->pre_buffer_unit !== null) {
            $result['preBufferUnit'] = $this->pre_buffer_unit;
        }
        if ($this->post_buffer !== null) {
            $result['postBuffer'] = $this->post_buffer;
        }
        if ($this->post_buffer_unit !== null) {
            $result['postBufferUnit'] = $this->post_buffer_unit;
        }
        if ($this->payment !== null) {
            $result['payment'] = $this->payment;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        return $result;
    }
}
