<?php

declare(strict_types=1);

/*
 * OrdersLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace OrdersLib\Models\Builders;

use Core\Utils\CoreHelper;
use OrdersLib\Models\PayerBase;

/**
 * Builder for model PayerBase
 *
 * @see PayerBase
 */
class PayerBaseBuilder
{
    /**
     * @var PayerBase
     */
    private $instance;

    private function __construct(PayerBase $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Payer Base Builder object.
     */
    public static function init(): self
    {
        return new self(new PayerBase());
    }

    /**
     * Sets email address field.
     *
     * @param string|null $value
     */
    public function emailAddress(?string $value): self
    {
        $this->instance->setEmailAddress($value);
        return $this;
    }

    /**
     * Sets payer id field.
     *
     * @param string|null $value
     */
    public function payerId(?string $value): self
    {
        $this->instance->setPayerId($value);
        return $this;
    }

    /**
     * Initializes a new Payer Base object.
     */
    public function build(): PayerBase
    {
        return CoreHelper::clone($this->instance);
    }
}
