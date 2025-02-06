<?php

declare(strict_types=1);

/*
 * OrdersLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace OrdersLib\Models\Builders;

use Core\Utils\CoreHelper;
use OrdersLib\Models\MyBankPaymentObject;

/**
 * Builder for model MyBankPaymentObject
 *
 * @see MyBankPaymentObject
 */
class MyBankPaymentObjectBuilder
{
    /**
     * @var MyBankPaymentObject
     */
    private $instance;

    private function __construct(MyBankPaymentObject $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new My Bank Payment Object Builder object.
     */
    public static function init(): self
    {
        return new self(new MyBankPaymentObject());
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
     * Sets iban last chars field.
     *
     * @param string|null $value
     */
    public function ibanLastChars(?string $value): self
    {
        $this->instance->setIbanLastChars($value);
        return $this;
    }

    /**
     * Initializes a new My Bank Payment Object object.
     */
    public function build(): MyBankPaymentObject
    {
        return CoreHelper::clone($this->instance);
    }
}
