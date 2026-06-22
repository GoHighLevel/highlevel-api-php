<?php

/**
 * @generated
 * File generated from our OpenAPI spec
 */

namespace HighLevel\Services\Invoices\Models;

/**
 * EstimateLineItemDto model
 * 
 * @package HighLevel\Services\Invoices\Models
 */
class EstimateLineItemDto
{
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
    public ?string $product_id = null;

    /**
     * @var string|null
     */
    public ?string $price_id = null;

    /**
     * @var string
     */
    public string $currency;

    /**
     * @var float
     */
    public float $amount;

    /**
     * @var float
     */
    public float $qty;

    /**
     * @var array&lt;ItemTaxDto&gt;|null
     */
    public ?array $taxes = null;

    /**
     * @var string|null
     */
    public ?string $automatic_tax_category_id = null;

    /**
     * @var bool|null
     */
    public ?bool $is_setup_fee_item = null;

    /**
     * @var string|null
     */
    public ?string $type = null;

    /**
     * @var bool|null
     */
    public ?bool $tax_inclusive = null;

    /**
     * @var array&lt;string&gt;|null
     */
    public ?array $attachments = null;

    /**
     * Create model from array data
     * 
     * @param array<string, mixed> $data Model data
     */
    public function __construct(array $data = [])
    {
        $this->name = $data['name'] ?? '';
        $this->description = $data['description'] ?? null;
        $this->product_id = $data['productId'] ?? null;
        $this->price_id = $data['priceId'] ?? null;
        $this->currency = $data['currency'] ?? '';
        $this->amount = $data['amount'] ?? 0;
        $this->qty = $data['qty'] ?? 0;
        // Handle array of ItemTaxDto objects
        if (isset($data['taxes']) && is_array($data['taxes'])) {
            $this->taxes = array_map(function($item) {
                return is_array($item) ? new ItemTaxDto($item) : $item;
            }, $data['taxes']);
        } else {
            $this->taxes = $data['taxes'] ?? null;
        }
        $this->automatic_tax_category_id = $data['automaticTaxCategoryId'] ?? null;
        $this->is_setup_fee_item = $data['isSetupFeeItem'] ?? null;
        $this->type = $data['type'] ?? null;
        $this->tax_inclusive = $data['taxInclusive'] ?? null;
        $this->attachments = $data['attachments'] ?? null;
    }

    /**
     * Convert model to array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        if ($this->description !== null) {
            $result['description'] = $this->description;
        }
        if ($this->product_id !== null) {
            $result['productId'] = $this->product_id;
        }
        if ($this->price_id !== null) {
            $result['priceId'] = $this->price_id;
        }
        if ($this->currency !== null) {
            $result['currency'] = $this->currency;
        }
        if ($this->amount !== null) {
            $result['amount'] = $this->amount;
        }
        if ($this->qty !== null) {
            $result['qty'] = $this->qty;
        }
        if ($this->taxes !== null) {
            $result['taxes'] = array_map(function($item) {
                return is_object($item) && method_exists($item, 'toArray') ? $item->toArray() : $item;
            }, $this->taxes);
        }
        if ($this->automatic_tax_category_id !== null) {
            $result['automaticTaxCategoryId'] = $this->automatic_tax_category_id;
        }
        if ($this->is_setup_fee_item !== null) {
            $result['isSetupFeeItem'] = $this->is_setup_fee_item;
        }
        if ($this->type !== null) {
            $result['type'] = $this->type;
        }
        if ($this->tax_inclusive !== null) {
            $result['taxInclusive'] = $this->tax_inclusive;
        }
        if ($this->attachments !== null) {
            $result['attachments'] = $this->attachments;
        }
        return $result;
    }
}
