<?php

declare(strict_types=1);

/*
 * OrdersLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace OrdersLib\Models\Builders;

use Core\Utils\CoreHelper;
use OrdersLib\Models\AuthenticationResponse;
use OrdersLib\Models\ThreeDSecureAuthenticationResponse;

/**
 * Builder for model AuthenticationResponse
 *
 * @see AuthenticationResponse
 */
class AuthenticationResponseBuilder
{
    /**
     * @var AuthenticationResponse
     */
    private $instance;

    private function __construct(AuthenticationResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Authentication Response Builder object.
     */
    public static function init(): self
    {
        return new self(new AuthenticationResponse());
    }

    /**
     * Sets liability shift field.
     *
     * @param string|null $value
     */
    public function liabilityShift(?string $value): self
    {
        $this->instance->setLiabilityShift($value);
        return $this;
    }

    /**
     * Sets three d secure field.
     *
     * @param ThreeDSecureAuthenticationResponse|null $value
     */
    public function threeDSecure(?ThreeDSecureAuthenticationResponse $value): self
    {
        $this->instance->setThreeDSecure($value);
        return $this;
    }

    /**
     * Initializes a new Authentication Response object.
     */
    public function build(): AuthenticationResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
