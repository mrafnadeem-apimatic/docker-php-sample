<?php

declare(strict_types=1);

/*
 * OrdersLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace OrdersLib\Models\Builders;

use Core\Utils\CoreHelper;
use OrdersLib\Models\VenmoWalletAdditionalAttributes;
use OrdersLib\Models\VenmoWalletExperienceContext;
use OrdersLib\Models\VenmoWalletRequest;

/**
 * Builder for model VenmoWalletRequest
 *
 * @see VenmoWalletRequest
 */
class VenmoWalletRequestBuilder
{
    /**
     * @var VenmoWalletRequest
     */
    private $instance;

    private function __construct(VenmoWalletRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Venmo Wallet Request Builder object.
     */
    public static function init(): self
    {
        return new self(new VenmoWalletRequest());
    }

    /**
     * Sets vault id field.
     *
     * @param string|null $value
     */
    public function vaultId(?string $value): self
    {
        $this->instance->setVaultId($value);
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
     * Sets experience context field.
     *
     * @param VenmoWalletExperienceContext|null $value
     */
    public function experienceContext(?VenmoWalletExperienceContext $value): self
    {
        $this->instance->setExperienceContext($value);
        return $this;
    }

    /**
     * Sets attributes field.
     *
     * @param VenmoWalletAdditionalAttributes|null $value
     */
    public function attributes(?VenmoWalletAdditionalAttributes $value): self
    {
        $this->instance->setAttributes($value);
        return $this;
    }

    /**
     * Initializes a new Venmo Wallet Request object.
     */
    public function build(): VenmoWalletRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
