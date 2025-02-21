<?php

declare(strict_types=1);

/*
 * PaypalRestApisLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PaypalRestApisLib\Models\Builders;

use Core\Utils\CoreHelper;
use PaypalRestApisLib\Models\ApplePayRequest;
use PaypalRestApisLib\Models\CardRequest;
use PaypalRestApisLib\Models\GooglePayRequest;
use PaypalRestApisLib\Models\OrderAuthorizeRequestPaymentSource;
use PaypalRestApisLib\Models\PaypalWallet;
use PaypalRestApisLib\Models\Token;
use PaypalRestApisLib\Models\VenmoWalletRequest;

/**
 * Builder for model OrderAuthorizeRequestPaymentSource
 *
 * @see OrderAuthorizeRequestPaymentSource
 */
class OrderAuthorizeRequestPaymentSourceBuilder
{
    /**
     * @var OrderAuthorizeRequestPaymentSource
     */
    private $instance;

    private function __construct(OrderAuthorizeRequestPaymentSource $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Order Authorize Request Payment Source Builder object.
     */
    public static function init(): self
    {
        return new self(new OrderAuthorizeRequestPaymentSource());
    }

    /**
     * Sets card field.
     *
     * @param CardRequest|null $value
     */
    public function card(?CardRequest $value): self
    {
        $this->instance->setCard($value);
        return $this;
    }

    /**
     * Sets token field.
     *
     * @param Token|null $value
     */
    public function token(?Token $value): self
    {
        $this->instance->setToken($value);
        return $this;
    }

    /**
     * Sets paypal field.
     *
     * @param PaypalWallet|null $value
     */
    public function paypal(?PaypalWallet $value): self
    {
        $this->instance->setPaypal($value);
        return $this;
    }

    /**
     * Sets apple pay field.
     *
     * @param ApplePayRequest|null $value
     */
    public function applePay(?ApplePayRequest $value): self
    {
        $this->instance->setApplePay($value);
        return $this;
    }

    /**
     * Sets google pay field.
     *
     * @param GooglePayRequest|null $value
     */
    public function googlePay(?GooglePayRequest $value): self
    {
        $this->instance->setGooglePay($value);
        return $this;
    }

    /**
     * Sets venmo field.
     *
     * @param VenmoWalletRequest|null $value
     */
    public function venmo(?VenmoWalletRequest $value): self
    {
        $this->instance->setVenmo($value);
        return $this;
    }

    /**
     * Initializes a new Order Authorize Request Payment Source object.
     */
    public function build(): OrderAuthorizeRequestPaymentSource
    {
        return CoreHelper::clone($this->instance);
    }
}
