<?php

declare(strict_types=1);

/*
 * PaypalRestApisLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PaypalRestApisLib\Models\Builders;

use Core\Utils\CoreHelper;
use PaypalRestApisLib\Models\OrderTrackerItem;
use PaypalRestApisLib\Models\UniversalProductCode;

/**
 * Builder for model OrderTrackerItem
 *
 * @see OrderTrackerItem
 */
class OrderTrackerItemBuilder
{
    /**
     * @var OrderTrackerItem
     */
    private $instance;

    private function __construct(OrderTrackerItem $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Order Tracker Item Builder object.
     */
    public static function init(): self
    {
        return new self(new OrderTrackerItem());
    }

    /**
     * Sets name field.
     *
     * @param string|null $value
     */
    public function name(?string $value): self
    {
        $this->instance->setName($value);
        return $this;
    }

    /**
     * Sets quantity field.
     *
     * @param string|null $value
     */
    public function quantity(?string $value): self
    {
        $this->instance->setQuantity($value);
        return $this;
    }

    /**
     * Sets sku field.
     *
     * @param string|null $value
     */
    public function sku(?string $value): self
    {
        $this->instance->setSku($value);
        return $this;
    }

    /**
     * Sets url field.
     *
     * @param string|null $value
     */
    public function url(?string $value): self
    {
        $this->instance->setUrl($value);
        return $this;
    }

    /**
     * Sets image url field.
     *
     * @param string|null $value
     */
    public function imageUrl(?string $value): self
    {
        $this->instance->setImageUrl($value);
        return $this;
    }

    /**
     * Sets upc field.
     *
     * @param UniversalProductCode|null $value
     */
    public function upc(?UniversalProductCode $value): self
    {
        $this->instance->setUpc($value);
        return $this;
    }

    /**
     * Initializes a new Order Tracker Item object.
     */
    public function build(): OrderTrackerItem
    {
        return CoreHelper::clone($this->instance);
    }
}
