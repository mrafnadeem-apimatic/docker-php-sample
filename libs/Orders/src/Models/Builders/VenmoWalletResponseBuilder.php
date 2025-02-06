<?php

declare(strict_types=1);

/*
 * OrdersLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace OrdersLib\Models\Builders;

use Core\Utils\CoreHelper;
use OrdersLib\Models\Address;
use OrdersLib\Models\Name;
use OrdersLib\Models\PhoneNumber;
use OrdersLib\Models\VenmoWalletAttributesResponse;
use OrdersLib\Models\VenmoWalletResponse;

/**
 * Builder for model VenmoWalletResponse
 *
 * @see VenmoWalletResponse
 */
class VenmoWalletResponseBuilder
{
    /**
     * @var VenmoWalletResponse
     */
    private $instance;

    private function __construct(VenmoWalletResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Venmo Wallet Response Builder object.
     */
    public static function init(): self
    {
        return new self(new VenmoWalletResponse());
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
     * Sets account id field.
     *
     * @param string|null $value
     */
    public function accountId(?string $value): self
    {
        $this->instance->setAccountId($value);
        return $this;
    }

    /**
     * Sets user name field.
     *
     * @param string|null $value
     */
    public function userName(?string $value): self
    {
        $this->instance->setUserName($value);
        return $this;
    }

    /**
     * Sets name field.
     *
     * @param Name|null $value
     */
    public function name(?Name $value): self
    {
        $this->instance->setName($value);
        return $this;
    }

    /**
     * Sets phone number field.
     *
     * @param PhoneNumber|null $value
     */
    public function phoneNumber(?PhoneNumber $value): self
    {
        $this->instance->setPhoneNumber($value);
        return $this;
    }

    /**
     * Sets address field.
     *
     * @param Address|null $value
     */
    public function address(?Address $value): self
    {
        $this->instance->setAddress($value);
        return $this;
    }

    /**
     * Sets attributes field.
     *
     * @param VenmoWalletAttributesResponse|null $value
     */
    public function attributes(?VenmoWalletAttributesResponse $value): self
    {
        $this->instance->setAttributes($value);
        return $this;
    }

    /**
     * Initializes a new Venmo Wallet Response object.
     */
    public function build(): VenmoWalletResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
