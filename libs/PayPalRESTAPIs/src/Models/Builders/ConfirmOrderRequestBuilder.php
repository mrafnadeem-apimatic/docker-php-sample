<?php

declare(strict_types=1);

/*
 * PaypalRestApisLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PaypalRestApisLib\Models\Builders;

use Core\Utils\CoreHelper;
use PaypalRestApisLib\Models\ConfirmOrderRequest;
use PaypalRestApisLib\Models\OrderConfirmApplicationContext;
use PaypalRestApisLib\Models\PaymentSource;

/**
 * Builder for model ConfirmOrderRequest
 *
 * @see ConfirmOrderRequest
 */
class ConfirmOrderRequestBuilder
{
    /**
     * @var ConfirmOrderRequest
     */
    private $instance;

    private function __construct(ConfirmOrderRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Confirm Order Request Builder object.
     *
     * @param PaymentSource $paymentSource
     */
    public static function init(PaymentSource $paymentSource): self
    {
        return new self(new ConfirmOrderRequest($paymentSource));
    }

    /**
     * Sets processing instruction field.
     *
     * @param string|null $value
     */
    public function processingInstruction(?string $value): self
    {
        $this->instance->setProcessingInstruction($value);
        return $this;
    }

    /**
     * Sets application context field.
     *
     * @param OrderConfirmApplicationContext|null $value
     */
    public function applicationContext(?OrderConfirmApplicationContext $value): self
    {
        $this->instance->setApplicationContext($value);
        return $this;
    }

    /**
     * Initializes a new Confirm Order Request object.
     */
    public function build(): ConfirmOrderRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
