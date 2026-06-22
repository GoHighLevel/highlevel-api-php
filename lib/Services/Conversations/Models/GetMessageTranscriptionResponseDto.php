<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Conversations\Models;

/**
 * GetMessageTranscriptionResponseDto model
 * 
 * @package HighLevel\Services\Conversations\Models
 */
class GetMessageTranscriptionResponseDto
{
    /**
     * @var float
     */
    public float $media_channel;

    /**
     * @var float
     */
    public float $sentence_index;

    /**
     * @var float
     */
    public float $start_time;

    /**
     * @var float
     */
    public float $end_time;

    /**
     * @var string
     */
    public string $transcript;

    /**
     * @var float
     */
    public float $confidence;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->media_channel = $data['mediaChannel'] ?? 0;
        $this->sentence_index = $data['sentenceIndex'] ?? 0;
        $this->start_time = $data['startTime'] ?? 0;
        $this->end_time = $data['endTime'] ?? 0;
        $this->transcript = $data['transcript'] ?? '';
        $this->confidence = $data['confidence'] ?? 0;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->media_channel !== null) {
            $result['mediaChannel'] = $this->media_channel;
        }
        if ($this->sentence_index !== null) {
            $result['sentenceIndex'] = $this->sentence_index;
        }
        if ($this->start_time !== null) {
            $result['startTime'] = $this->start_time;
        }
        if ($this->end_time !== null) {
            $result['endTime'] = $this->end_time;
        }
        if ($this->transcript !== null) {
            $result['transcript'] = $this->transcript;
        }
        if ($this->confidence !== null) {
            $result['confidence'] = $this->confidence;
        }
        return $result;
    }
}
