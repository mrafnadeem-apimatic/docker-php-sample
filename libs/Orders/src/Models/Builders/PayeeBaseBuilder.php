<?php

declare(strict_types=1);

/*
 * OrdersLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace OrdersLib\Models\Builders;

use Core\Utils\CoreHelper;
use OrdersLib\Models\PayeeBase;

/**
 * Builder for model PayeeBase
 *
 * @see PayeeBase
 */
class PayeeBaseBuilder
{
    /**
     * @var PayeeBase
     */
    private $instance;

    private function __construct(PayeeBase $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Payee Base Builder object.
     */
    public static function init(): self
    {
        return new self(new PayeeBase());
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
     * Sets merchant id field.
     *
     * @param string|null $value
     */
    public function merchantId(?string $value): self
    {
        $this->instance->setMerchantId($value);
        return $this;
    }

    /**
     * Initializes a new Payee Base object.
     */
    public function build(): PayeeBase
    {
        return CoreHelper::clone($this->instance);
    }
}
