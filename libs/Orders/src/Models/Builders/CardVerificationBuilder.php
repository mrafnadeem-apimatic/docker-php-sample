<?php

declare(strict_types=1);

/*
 * OrdersLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace OrdersLib\Models\Builders;

use Core\Utils\CoreHelper;
use OrdersLib\Models\CardVerification;

/**
 * Builder for model CardVerification
 *
 * @see CardVerification
 */
class CardVerificationBuilder
{
    /**
     * @var CardVerification
     */
    private $instance;

    private function __construct(CardVerification $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Card Verification Builder object.
     */
    public static function init(): self
    {
        return new self(new CardVerification());
    }

    /**
     * Sets method field.
     *
     * @param string|null $value
     */
    public function method(?string $value): self
    {
        $this->instance->setMethod($value);
        return $this;
    }

    /**
     * Initializes a new Card Verification object.
     */
    public function build(): CardVerification
    {
        return CoreHelper::clone($this->instance);
    }
}
