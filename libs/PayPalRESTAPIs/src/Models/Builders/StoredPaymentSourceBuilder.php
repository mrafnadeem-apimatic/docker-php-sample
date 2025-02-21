<?php

declare(strict_types=1);

/*
 * PaypalRestApisLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PaypalRestApisLib\Models\Builders;

use Core\Utils\CoreHelper;
use PaypalRestApisLib\Models\NetworkTransactionReference;
use PaypalRestApisLib\Models\StoredPaymentSource;

/**
 * Builder for model StoredPaymentSource
 *
 * @see StoredPaymentSource
 */
class StoredPaymentSourceBuilder
{
    /**
     * @var StoredPaymentSource
     */
    private $instance;

    private function __construct(StoredPaymentSource $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Stored Payment Source Builder object.
     *
     * @param string $paymentInitiator
     * @param string $paymentType
     */
    public static function init(string $paymentInitiator, string $paymentType): self
    {
        return new self(new StoredPaymentSource($paymentInitiator, $paymentType));
    }

    /**
     * Sets usage field.
     *
     * @param string|null $value
     */
    public function usage(?string $value): self
    {
        $this->instance->setUsage($value);
        return $this;
    }

    /**
     * Sets previous network transaction reference field.
     *
     * @param NetworkTransactionReference|null $value
     */
    public function previousNetworkTransactionReference(?NetworkTransactionReference $value): self
    {
        $this->instance->setPreviousNetworkTransactionReference($value);
        return $this;
    }

    /**
     * Initializes a new Stored Payment Source object.
     */
    public function build(): StoredPaymentSource
    {
        return CoreHelper::clone($this->instance);
    }
}
