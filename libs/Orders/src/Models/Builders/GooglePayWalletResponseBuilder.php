<?php

declare(strict_types=1);

/*
 * OrdersLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace OrdersLib\Models\Builders;

use Core\Utils\CoreHelper;
use OrdersLib\Models\GooglePayCardResponse;
use OrdersLib\Models\GooglePayWalletResponse;
use OrdersLib\Models\PhoneNumberWithCountryCode;

/**
 * Builder for model GooglePayWalletResponse
 *
 * @see GooglePayWalletResponse
 */
class GooglePayWalletResponseBuilder
{
    /**
     * @var GooglePayWalletResponse
     */
    private $instance;

    private function __construct(GooglePayWalletResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Google Pay Wallet Response Builder object.
     */
    public static function init(): self
    {
        return new self(new GooglePayWalletResponse());
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
     * Sets phone number field.
     *
     * @param PhoneNumberWithCountryCode|null $value
     */
    public function phoneNumber(?PhoneNumberWithCountryCode $value): self
    {
        $this->instance->setPhoneNumber($value);
        return $this;
    }

    /**
     * Sets card field.
     *
     * @param GooglePayCardResponse|null $value
     */
    public function card(?GooglePayCardResponse $value): self
    {
        $this->instance->setCard($value);
        return $this;
    }

    /**
     * Initializes a new Google Pay Wallet Response object.
     */
    public function build(): GooglePayWalletResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
