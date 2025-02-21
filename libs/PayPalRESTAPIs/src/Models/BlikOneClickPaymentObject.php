<?php

declare(strict_types=1);

/*
 * PaypalRestApisLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PaypalRestApisLib\Models;

use PaypalRestApisLib\ApiHelper;
use stdClass;

/**
 * Information used to pay using BLIK one-click flow.
 */
class BlikOneClickPaymentObject implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $consumerReference;

    /**
     * Returns Consumer Reference.
     * The merchant generated, unique reference serving as a primary identifier for accounts connected
     * between Blik and a merchant.
     */
    public function getConsumerReference(): ?string
    {
        return $this->consumerReference;
    }

    /**
     * Sets Consumer Reference.
     * The merchant generated, unique reference serving as a primary identifier for accounts connected
     * between Blik and a merchant.
     *
     * @maps consumer_reference
     */
    public function setConsumerReference(?string $consumerReference): void
    {
        $this->consumerReference = $consumerReference;
    }

    /**
     * Converts the BlikOneClickPaymentObject object to a human-readable string representation.
     *
     * @return string The string representation of the BlikOneClickPaymentObject object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify('BlikOneClickPaymentObject', ['consumerReference' => $this->consumerReference]);
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
        if (isset($this->consumerReference)) {
            $json['consumer_reference'] = $this->consumerReference;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
