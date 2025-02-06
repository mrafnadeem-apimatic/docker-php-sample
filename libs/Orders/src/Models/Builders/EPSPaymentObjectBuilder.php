<?php

declare(strict_types=1);

/*
 * OrdersLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace OrdersLib\Models\Builders;

use Core\Utils\CoreHelper;
use OrdersLib\Models\EPSPaymentObject;

/**
 * Builder for model EPSPaymentObject
 *
 * @see EPSPaymentObject
 */
class EPSPaymentObjectBuilder
{
    /**
     * @var EPSPaymentObject
     */
    private $instance;

    private function __construct(EPSPaymentObject $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new EPS Payment Object Builder object.
     */
    public static function init(): self
    {
        return new self(new EPSPaymentObject());
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
     * Initializes a new EPS Payment Object object.
     */
    public function build(): EPSPaymentObject
    {
        return CoreHelper::clone($this->instance);
    }
}
