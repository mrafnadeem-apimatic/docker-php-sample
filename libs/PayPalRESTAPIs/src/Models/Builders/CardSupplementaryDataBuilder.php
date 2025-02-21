<?php

declare(strict_types=1);

/*
 * PaypalRestApisLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PaypalRestApisLib\Models\Builders;

use Core\Utils\CoreHelper;
use PaypalRestApisLib\Models\CardSupplementaryData;
use PaypalRestApisLib\Models\Level2CardProcessingData;
use PaypalRestApisLib\Models\Level3CardProcessingData;

/**
 * Builder for model CardSupplementaryData
 *
 * @see CardSupplementaryData
 */
class CardSupplementaryDataBuilder
{
    /**
     * @var CardSupplementaryData
     */
    private $instance;

    private function __construct(CardSupplementaryData $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Card Supplementary Data Builder object.
     */
    public static function init(): self
    {
        return new self(new CardSupplementaryData());
    }

    /**
     * Sets level 2 field.
     *
     * @param Level2CardProcessingData|null $value
     */
    public function level2(?Level2CardProcessingData $value): self
    {
        $this->instance->setLevel2($value);
        return $this;
    }

    /**
     * Sets level 3 field.
     *
     * @param Level3CardProcessingData|null $value
     */
    public function level3(?Level3CardProcessingData $value): self
    {
        $this->instance->setLevel3($value);
        return $this;
    }

    /**
     * Initializes a new Card Supplementary Data object.
     */
    public function build(): CardSupplementaryData
    {
        return CoreHelper::clone($this->instance);
    }
}
