<?php

declare(strict_types=1);

/*
 * PaypalRestApisLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PaypalRestApisLib\Models\Builders;

use Core\Utils\CoreHelper;
use PaypalRestApisLib\Models\AuthorizationStatusDetails;

/**
 * Builder for model AuthorizationStatusDetails
 *
 * @see AuthorizationStatusDetails
 */
class AuthorizationStatusDetailsBuilder
{
    /**
     * @var AuthorizationStatusDetails
     */
    private $instance;

    private function __construct(AuthorizationStatusDetails $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Authorization Status Details Builder object.
     */
    public static function init(): self
    {
        return new self(new AuthorizationStatusDetails());
    }

    /**
     * Sets reason field.
     *
     * @param string|null $value
     */
    public function reason(?string $value): self
    {
        $this->instance->setReason($value);
        return $this;
    }

    /**
     * Initializes a new Authorization Status Details object.
     */
    public function build(): AuthorizationStatusDetails
    {
        return CoreHelper::clone($this->instance);
    }
}
