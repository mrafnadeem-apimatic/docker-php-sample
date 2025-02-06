<?php

declare(strict_types=1);

/*
 * OrdersLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace OrdersLib\Models\Builders;

use Core\Utils\CoreHelper;
use OrdersLib\Models\ApplePayRequest;
use OrdersLib\Models\BancontactPaymentRequest;
use OrdersLib\Models\BLIKPaymentRequest;
use OrdersLib\Models\CardRequest;
use OrdersLib\Models\EPSPaymentRequest;
use OrdersLib\Models\GiropayPaymentRequest;
use OrdersLib\Models\GooglePayRequest;
use OrdersLib\Models\IDEALPaymentRequest;
use OrdersLib\Models\MyBankPaymentRequest;
use OrdersLib\Models\P24PaymentRequest;
use OrdersLib\Models\PaymentSource;
use OrdersLib\Models\PayPalWallet;
use OrdersLib\Models\SofortPaymentRequest;
use OrdersLib\Models\Token;
use OrdersLib\Models\TrustlyPaymentRequest;
use OrdersLib\Models\VenmoWalletRequest;

/**
 * Builder for model PaymentSource
 *
 * @see PaymentSource
 */
class PaymentSourceBuilder
{
    /**
     * @var PaymentSource
     */
    private $instance;

    private function __construct(PaymentSource $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Payment Source Builder object.
     */
    public static function init(): self
    {
        return new self(new PaymentSource());
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
     * @param PayPalWallet|null $value
     */
    public function paypal(?PayPalWallet $value): self
    {
        $this->instance->setPaypal($value);
        return $this;
    }

    /**
     * Sets bancontact field.
     *
     * @param BancontactPaymentRequest|null $value
     */
    public function bancontact(?BancontactPaymentRequest $value): self
    {
        $this->instance->setBancontact($value);
        return $this;
    }

    /**
     * Sets blik field.
     *
     * @param BLIKPaymentRequest|null $value
     */
    public function blik(?BLIKPaymentRequest $value): self
    {
        $this->instance->setBlik($value);
        return $this;
    }

    /**
     * Sets eps field.
     *
     * @param EPSPaymentRequest|null $value
     */
    public function eps(?EPSPaymentRequest $value): self
    {
        $this->instance->setEps($value);
        return $this;
    }

    /**
     * Sets giropay field.
     *
     * @param GiropayPaymentRequest|null $value
     */
    public function giropay(?GiropayPaymentRequest $value): self
    {
        $this->instance->setGiropay($value);
        return $this;
    }

    /**
     * Sets ideal field.
     *
     * @param IDEALPaymentRequest|null $value
     */
    public function ideal(?IDEALPaymentRequest $value): self
    {
        $this->instance->setIdeal($value);
        return $this;
    }

    /**
     * Sets mybank field.
     *
     * @param MyBankPaymentRequest|null $value
     */
    public function mybank(?MyBankPaymentRequest $value): self
    {
        $this->instance->setMybank($value);
        return $this;
    }

    /**
     * Sets p 24 field.
     *
     * @param P24PaymentRequest|null $value
     */
    public function p24(?P24PaymentRequest $value): self
    {
        $this->instance->setP24($value);
        return $this;
    }

    /**
     * Sets sofort field.
     *
     * @param SofortPaymentRequest|null $value
     */
    public function sofort(?SofortPaymentRequest $value): self
    {
        $this->instance->setSofort($value);
        return $this;
    }

    /**
     * Sets trustly field.
     *
     * @param TrustlyPaymentRequest|null $value
     */
    public function trustly(?TrustlyPaymentRequest $value): self
    {
        $this->instance->setTrustly($value);
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
     * Initializes a new Payment Source object.
     */
    public function build(): PaymentSource
    {
        return CoreHelper::clone($this->instance);
    }
}
