<?php

namespace HighLevel\Services\Oauth\Models;

/**
 * InstalledLocationSchema model
 * 
 * @package HighLevel\Services\Oauth\Models
 */
class InstalledLocationSchema
{
    /**
     * @var string
     */
    public string $id;

    /**
     * @var string
     */
    public string $name;

    /**
     * @var string
     */
    public string $address;

    /**
     * @var bool|null
     */
    public ?bool $is_installed = null;

    /**
     * @var string|null
     */
    public ?string $version_id = null;

    /**
     * @var string|null
     */
    public ?string $installed_at = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->id = $data['_id'] ?? '';
        $this->name = $data['name'] ?? '';
        $this->address = $data['address'] ?? '';
        $this->is_installed = $data['isInstalled'] ?? null;
        $this->version_id = $data['versionId'] ?? null;
        $this->installed_at = $data['installedAt'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->id !== null) {
            $result['_id'] = $this->id;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->address !== null) {
            $result['address'] = $this->address;
        }
        if ($this->is_installed !== null) {
            $result['isInstalled'] = $this->is_installed;
        }
        if ($this->version_id !== null) {
            $result['versionId'] = $this->version_id;
        }
        if ($this->installed_at !== null) {
            $result['installedAt'] = $this->installed_at;
        }
        return $result;
    }
}
