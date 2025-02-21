<?php

declare(strict_types=1);

/*
 * PaypalRestApisLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PaypalRestApisLib\Models\Builders;

use Core\Utils\CoreHelper;
use PaypalRestApisLib\Models\PaymentMethodPreference;

/**
 * Builder for model PaymentMethodPreference
 *
 * @see PaymentMethodPreference
 */
class PaymentMethodPreferenceBuilder
{
    /**
     * @var PaymentMethodPreference
     */
    private $instance;

    private function __construct(PaymentMethodPreference $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Payment Method Preference Builder object.
     */
    public static function init(): self
    {
        return new self(new PaymentMethodPreference());
    }

    /**
     * Sets payee preferred field.
     *
     * @param string|null $value
     */
    public function payeePreferred(?string $value): self
    {
        $this->instance->setPayeePreferred($value);
        return $this;
    }

    /**
     * Sets standard entry class code field.
     *
     * @param string|null $value
     */
    public function standardEntryClassCode(?string $value): self
    {
        $this->instance->setStandardEntryClassCode($value);
        return $this;
    }

    /**
     * Initializes a new Payment Method Preference object.
     */
    public function build(): PaymentMethodPreference
    {
        return CoreHelper::clone($this->instance);
    }
}
