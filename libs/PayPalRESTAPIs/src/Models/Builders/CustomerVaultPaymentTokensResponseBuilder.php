<?php

declare(strict_types=1);

/*
 * PaypalRestApisLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PaypalRestApisLib\Models\Builders;

use Core\Utils\CoreHelper;
use PaypalRestApisLib\Models\CustomerRequest;
use PaypalRestApisLib\Models\CustomerVaultPaymentTokensResponse;
use PaypalRestApisLib\Models\LinkDescription;
use PaypalRestApisLib\Models\PaymentTokenResponse;

/**
 * Builder for model CustomerVaultPaymentTokensResponse
 *
 * @see CustomerVaultPaymentTokensResponse
 */
class CustomerVaultPaymentTokensResponseBuilder
{
    /**
     * @var CustomerVaultPaymentTokensResponse
     */
    private $instance;

    private function __construct(CustomerVaultPaymentTokensResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Customer Vault Payment Tokens Response Builder object.
     */
    public static function init(): self
    {
        return new self(new CustomerVaultPaymentTokensResponse());
    }

    /**
     * Sets total items field.
     *
     * @param int|null $value
     */
    public function totalItems(?int $value): self
    {
        $this->instance->setTotalItems($value);
        return $this;
    }

    /**
     * Sets total pages field.
     *
     * @param int|null $value
     */
    public function totalPages(?int $value): self
    {
        $this->instance->setTotalPages($value);
        return $this;
    }

    /**
     * Sets customer field.
     *
     * @param CustomerRequest|null $value
     */
    public function customer(?CustomerRequest $value): self
    {
        $this->instance->setCustomer($value);
        return $this;
    }

    /**
     * Sets payment tokens field.
     *
     * @param PaymentTokenResponse[]|null $value
     */
    public function paymentTokens(?array $value): self
    {
        $this->instance->setPaymentTokens($value);
        return $this;
    }

    /**
     * Sets links field.
     *
     * @param LinkDescription[]|null $value
     */
    public function links(?array $value): self
    {
        $this->instance->setLinks($value);
        return $this;
    }

    /**
     * Initializes a new Customer Vault Payment Tokens Response object.
     */
    public function build(): CustomerVaultPaymentTokensResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
