<?php

namespace HighLevel\Services\Invoices\Models;

/**
 * ContactDetailsDto model
 * 
 * @package HighLevel\Services\Invoices\Models
 */
class ContactDetailsDto
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
    public string $phone_no;

    /**
     * @var string
     */
    public string $email;

    /**
     * @var array&lt;AdditionalEmailsDto&gt;|null
     */
    public ?array $additional_emails = null;

    /**
     * @var string|null
     */
    public ?string $company_name = null;

    /**
     * @var AddressDto|null
     */
    public ?AddressDto $address = null;

    /**
     * @var array&lt;string&gt;|null
     */
    public ?array $custom_fields = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->id = $data['id'] ?? '';
        $this->name = $data['name'] ?? '';
        $this->phone_no = $data['phoneNo'] ?? '';
        $this->email = $data['email'] ?? '';
        // Handle array of AdditionalEmailsDto objects
        if (isset($data['additionalEmails']) && is_array($data['additionalEmails'])) {
            $this->additional_emails = array_map(function($item) {
                return is_array($item) ? new AdditionalEmailsDto($item) : $item;
            }, $data['additionalEmails']);
        } else {
            $this->additional_emails = $data['additionalEmails'] ?? null;
        }
        $this->company_name = $data['companyName'] ?? null;
        // Handle single AddressDto object
        if (isset($data['address']) && is_array($data['address'])) {
            $this->address = new AddressDto($data['address']);
        } else {
            $this->address = $data['address'] ?? null;
        }
        $this->custom_fields = $data['customFields'] ?? null;
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
            $result['id'] = $this->id;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->phone_no !== null) {
            $result['phoneNo'] = $this->phone_no;
        }
        if ($this->email !== null) {
            $result['email'] = $this->email;
        }
        if ($this->additional_emails !== null) {
            $result['additionalEmails'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->additional_emails);
        }
        if ($this->company_name !== null) {
            $result['companyName'] = $this->company_name;
        }
        if ($this->address !== null) {
            $result['address'] = is_object($this->address) && method_exists($this->address, 'toArray') 
                ? $this->address->toArray() 
                : $this->address;
        }
        if ($this->custom_fields !== null) {
            $result['customFields'] = $this->custom_fields;
        }
        return $result;
    }
}
