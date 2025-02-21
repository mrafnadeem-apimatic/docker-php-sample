<?php

declare(strict_types=1);

/*
 * PaypalRestApisLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PaypalRestApisLib\Models\Builders;

use Core\Utils\CoreHelper;
use PaypalRestApisLib\Models\Level2CardProcessingData;
use PaypalRestApisLib\Models\Money;

/**
 * Builder for model Level2CardProcessingData
 *
 * @see Level2CardProcessingData
 */
class Level2CardProcessingDataBuilder
{
    /**
     * @var Level2CardProcessingData
     */
    private $instance;

    private function __construct(Level2CardProcessingData $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Level 2 Card Processing Data Builder object.
     */
    public static function init(): self
    {
        return new self(new Level2CardProcessingData());
    }

    /**
     * Sets invoice id field.
     *
     * @param string|null $value
     */
    public function invoiceId(?string $value): self
    {
        $this->instance->setInvoiceId($value);
        return $this;
    }

    /**
     * Sets tax total field.
     *
     * @param Money|null $value
     */
    public function taxTotal(?Money $value): self
    {
        $this->instance->setTaxTotal($value);
        return $this;
    }

    /**
     * Initializes a new Level 2 Card Processing Data object.
     */
    public function build(): Level2CardProcessingData
    {
        return CoreHelper::clone($this->instance);
    }
}
