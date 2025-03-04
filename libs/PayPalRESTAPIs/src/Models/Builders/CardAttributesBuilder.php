<?php

declare(strict_types=1);

/*
 * PaypalRestApisLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PaypalRestApisLib\Models\Builders;

use Core\Utils\CoreHelper;
use PaypalRestApisLib\Models\CardAttributes;
use PaypalRestApisLib\Models\CardVerification;
use PaypalRestApisLib\Models\CustomerInformation;
use PaypalRestApisLib\Models\VaultInstructionBase;

/**
 * Builder for model CardAttributes
 *
 * @see CardAttributes
 */
class CardAttributesBuilder
{
    /**
     * @var CardAttributes
     */
    private $instance;

    private function __construct(CardAttributes $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Card Attributes Builder object.
     */
    public static function init(): self
    {
        return new self(new CardAttributes());
    }

    /**
     * Sets customer field.
     *
     * @param CustomerInformation|null $value
     */
    public function customer(?CustomerInformation $value): self
    {
        $this->instance->setCustomer($value);
        return $this;
    }

    /**
     * Sets vault field.
     *
     * @param VaultInstructionBase|null $value
     */
    public function vault(?VaultInstructionBase $value): self
    {
        $this->instance->setVault($value);
        return $this;
    }

    /**
     * Sets verification field.
     *
     * @param CardVerification|null $value
     */
    public function verification(?CardVerification $value): self
    {
        $this->instance->setVerification($value);
        return $this;
    }

    /**
     * Initializes a new Card Attributes object.
     */
    public function build(): CardAttributes
    {
        return CoreHelper::clone($this->instance);
    }
}
