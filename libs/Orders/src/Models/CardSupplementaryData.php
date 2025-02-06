<?php

declare(strict_types=1);

/*
 * OrdersLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace OrdersLib\Models;

use OrdersLib\ApiHelper;
use stdClass;

/**
 * Merchants and partners can add Level 2 and 3 data to payments to reduce risk and payment processing
 * costs. For more information about processing payments, see <a href="https://developer.paypal.
 * com/docs/checkout/advanced/processing/">checkout</a> or <a href="https://developer.paypal.
 * com/docs/multiparty/checkout/advanced/processing/">multiparty checkout</a>.
 */
class CardSupplementaryData implements \JsonSerializable
{
    /**
     * @var Level2CardProcessingData|null
     */
    private $level2;

    /**
     * @var Level3CardProcessingData|null
     */
    private $level3;

    /**
     * Returns Level 2.
     * The level 2 card processing data collections. If your merchant account has been configured for Level
     * 2 processing this field will be passed to the processor on your behalf. Please contact your PayPal
     * Technical Account Manager to define level 2 data for your business.
     */
    public function getLevel2(): ?Level2CardProcessingData
    {
        return $this->level2;
    }

    /**
     * Sets Level 2.
     * The level 2 card processing data collections. If your merchant account has been configured for Level
     * 2 processing this field will be passed to the processor on your behalf. Please contact your PayPal
     * Technical Account Manager to define level 2 data for your business.
     *
     * @maps level_2
     */
    public function setLevel2(?Level2CardProcessingData $level2): void
    {
        $this->level2 = $level2;
    }

    /**
     * Returns Level 3.
     * The level 3 card processing data collections, If your merchant account has been configured for Level
     * 3 processing this field will be passed to the processor on your behalf. Please contact your PayPal
     * Technical Account Manager to define level 3 data for your business.
     */
    public function getLevel3(): ?Level3CardProcessingData
    {
        return $this->level3;
    }

    /**
     * Sets Level 3.
     * The level 3 card processing data collections, If your merchant account has been configured for Level
     * 3 processing this field will be passed to the processor on your behalf. Please contact your PayPal
     * Technical Account Manager to define level 3 data for your business.
     *
     * @maps level_3
     */
    public function setLevel3(?Level3CardProcessingData $level3): void
    {
        $this->level3 = $level3;
    }

    /**
     * Converts the CardSupplementaryData object to a human-readable string representation.
     *
     * @return string The string representation of the CardSupplementaryData object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'CardSupplementaryData',
            ['level2' => $this->level2, 'level3' => $this->level3]
        );
    }

    /**
     * Encode this object to JSON
     *
     * @param bool $asArrayWhenEmpty Whether to serialize this model as an array whenever no fields
     *        are set. (default: false)
     *
     * @return array|stdClass
     */
    #[\ReturnTypeWillChange] // @phan-suppress-current-line PhanUndeclaredClassAttribute for (php < 8.1)
    public function jsonSerialize(bool $asArrayWhenEmpty = false)
    {
        $json = [];
        if (isset($this->level2)) {
            $json['level_2'] = $this->level2;
        }
        if (isset($this->level3)) {
            $json['level_3'] = $this->level3;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
