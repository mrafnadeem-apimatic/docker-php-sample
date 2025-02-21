<?php

declare(strict_types=1);

/*
 * PaypalRestApisLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PaypalRestApisLib\Models\Builders;

use Core\Utils\CoreHelper;
use PaypalRestApisLib\Models\BlikOneClickPaymentObject;
use PaypalRestApisLib\Models\BlikPaymentObject;

/**
 * Builder for model BlikPaymentObject
 *
 * @see BlikPaymentObject
 */
class BlikPaymentObjectBuilder
{
    /**
     * @var BlikPaymentObject
     */
    private $instance;

    private function __construct(BlikPaymentObject $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Blik Payment Object Builder object.
     */
    public static function init(): self
    {
        return new self(new BlikPaymentObject());
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
     * Sets country code field.
     *
     * @param string|null $value
     */
    public function countryCode(?string $value): self
    {
        $this->instance->setCountryCode($value);
        return $this;
    }

    /**
     * Sets email field.
     *
     * @param string|null $value
     */
    public function email(?string $value): self
    {
        $this->instance->setEmail($value);
        return $this;
    }

    /**
     * Sets one click field.
     *
     * @param BlikOneClickPaymentObject|null $value
     */
    public function oneClick(?BlikOneClickPaymentObject $value): self
    {
        $this->instance->setOneClick($value);
        return $this;
    }

    /**
     * Initializes a new Blik Payment Object object.
     */
    public function build(): BlikPaymentObject
    {
        return CoreHelper::clone($this->instance);
    }
}
