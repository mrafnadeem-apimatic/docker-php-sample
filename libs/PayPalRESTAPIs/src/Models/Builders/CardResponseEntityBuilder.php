<?php

declare(strict_types=1);

/*
 * PaypalRestApisLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PaypalRestApisLib\Models\Builders;

use Core\Utils\CoreHelper;
use PaypalRestApisLib\Models\AddressDetails;
use PaypalRestApisLib\Models\AuthenticationResponse;
use PaypalRestApisLib\Models\BinDetails;
use PaypalRestApisLib\Models\CardResponseEntity;
use PaypalRestApisLib\Models\CardVerificationDetails;
use PaypalRestApisLib\Models\NetworkTransactionReferenceEntity;

/**
 * Builder for model CardResponseEntity
 *
 * @see CardResponseEntity
 */
class CardResponseEntityBuilder
{
    /**
     * @var CardResponseEntity
     */
    private $instance;

    private function __construct(CardResponseEntity $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Card Response Entity Builder object.
     */
    public static function init(): self
    {
        return new self(new CardResponseEntity());
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
     * Sets last digits field.
     *
     * @param string|null $value
     */
    public function lastDigits(?string $value): self
    {
        $this->instance->setLastDigits($value);
        return $this;
    }

    /**
     * Sets brand field.
     *
     * @param string|null $value
     */
    public function brand(?string $value): self
    {
        $this->instance->setBrand($value);
        return $this;
    }

    /**
     * Sets expiry field.
     *
     * @param string|null $value
     */
    public function expiry(?string $value): self
    {
        $this->instance->setExpiry($value);
        return $this;
    }

    /**
     * Sets billing address field.
     *
     * @param AddressDetails|null $value
     */
    public function billingAddress(?AddressDetails $value): self
    {
        $this->instance->setBillingAddress($value);
        return $this;
    }

    /**
     * Sets verification status field.
     *
     * @param string|null $value
     */
    public function verificationStatus(?string $value): self
    {
        $this->instance->setVerificationStatus($value);
        return $this;
    }

    /**
     * Sets verification field.
     *
     * @param CardVerificationDetails|null $value
     */
    public function verification(?CardVerificationDetails $value): self
    {
        $this->instance->setVerification($value);
        return $this;
    }

    /**
     * Sets network transaction reference field.
     *
     * @param NetworkTransactionReferenceEntity|null $value
     */
    public function networkTransactionReference(?NetworkTransactionReferenceEntity $value): self
    {
        $this->instance->setNetworkTransactionReference($value);
        return $this;
    }

    /**
     * Sets authentication result field.
     *
     * @param AuthenticationResponse|null $value
     */
    public function authenticationResult(?AuthenticationResponse $value): self
    {
        $this->instance->setAuthenticationResult($value);
        return $this;
    }

    /**
     * Sets bin details field.
     *
     * @param BinDetails|null $value
     */
    public function binDetails(?BinDetails $value): self
    {
        $this->instance->setBinDetails($value);
        return $this;
    }

    /**
     * Sets type field.
     *
     * @param string|null $value
     */
    public function type(?string $value): self
    {
        $this->instance->setType($value);
        return $this;
    }

    /**
     * Initializes a new Card Response Entity object.
     */
    public function build(): CardResponseEntity
    {
        return CoreHelper::clone($this->instance);
    }
}
