<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\SocialPlanner\Models;

/**
 * TiktokPostSchema model
 * 
 * @package HighLevel\Services\SocialPlanner\Models
 */
class TiktokPostSchema
{
    /**
     * @var string
     */
    public string $privacy_level;

    /**
     * @var bool|null
     */
    public ?bool $promote_other_brand = null;

    /**
     * @var bool|null
     */
    public ?bool $enable_comment = null;

    /**
     * @var bool|null
     */
    public ?bool $enable_duet = null;

    /**
     * @var bool|null
     */
    public ?bool $enable_stitch = null;

    /**
     * @var bool|null
     */
    public ?bool $video_disclosure = null;

    /**
     * @var bool|null
     */
    public ?bool $promote_your_brand = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->privacy_level = $data['privacyLevel'] ?? '';
        $this->promote_other_brand = $data['promoteOtherBrand'] ?? null;
        $this->enable_comment = $data['enableComment'] ?? null;
        $this->enable_duet = $data['enableDuet'] ?? null;
        $this->enable_stitch = $data['enableStitch'] ?? null;
        $this->video_disclosure = $data['videoDisclosure'] ?? null;
        $this->promote_your_brand = $data['promoteYourBrand'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->privacy_level !== null) {
            $result['privacyLevel'] = $this->privacy_level;
        }
        if ($this->promote_other_brand !== null) {
            $result['promoteOtherBrand'] = $this->promote_other_brand;
        }
        if ($this->enable_comment !== null) {
            $result['enableComment'] = $this->enable_comment;
        }
        if ($this->enable_duet !== null) {
            $result['enableDuet'] = $this->enable_duet;
        }
        if ($this->enable_stitch !== null) {
            $result['enableStitch'] = $this->enable_stitch;
        }
        if ($this->video_disclosure !== null) {
            $result['videoDisclosure'] = $this->video_disclosure;
        }
        if ($this->promote_your_brand !== null) {
            $result['promoteYourBrand'] = $this->promote_your_brand;
        }
        return $result;
    }
}
