<?php

declare(strict_types=1);

/*
 * PaypalRestApisLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PaypalRestApisLib\Models\Builders;

use Core\Utils\CoreHelper;
use PaypalRestApisLib\Models\GiropayPaymentObject;

/**
 * Builder for model GiropayPaymentObject
 *
 * @see GiropayPaymentObject
 */
class GiropayPaymentObjectBuilder
{
    /**
     * @var GiropayPaymentObject
     */
    private $instance;

    private function __construct(GiropayPaymentObject $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Giropay Payment Object Builder object.
     */
    public static function init(): self
    {
        return new self(new GiropayPaymentObject());
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
     * Sets bic field.
     *
     * @param string|null $value
     */
    public function bic(?string $value): self
    {
        $this->instance->setBic($value);
        return $this;
    }

    /**
     * Initializes a new Giropay Payment Object object.
     */
    public function build(): GiropayPaymentObject
    {
        return CoreHelper::clone($this->instance);
    }
}
