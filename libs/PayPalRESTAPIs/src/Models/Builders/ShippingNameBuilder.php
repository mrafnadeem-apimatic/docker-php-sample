<?php

declare(strict_types=1);

/*
 * PaypalRestApisLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PaypalRestApisLib\Models\Builders;

use Core\Utils\CoreHelper;
use PaypalRestApisLib\Models\ShippingName;

/**
 * Builder for model ShippingName
 *
 * @see ShippingName
 */
class ShippingNameBuilder
{
    /**
     * @var ShippingName
     */
    private $instance;

    private function __construct(ShippingName $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Shipping Name Builder object.
     */
    public static function init(): self
    {
        return new self(new ShippingName());
    }

    /**
     * Sets full name field.
     *
     * @param string|null $value
     */
    public function fullName(?string $value): self
    {
        $this->instance->setFullName($value);
        return $this;
    }

    /**
     * Initializes a new Shipping Name object.
     */
    public function build(): ShippingName
    {
        return CoreHelper::clone($this->instance);
    }
}
