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
 * The platform or partner fee, commission, or brokerage fee that is associated with the transaction.
 * Not a separate or isolated transaction leg from the external perspective. The platform fee is
 * limited in scope and is always associated with the original payment for the purchase unit.
 */
class RefundPlatformFee implements \JsonSerializable
{
    /**
     * @var Money
     */
    private $amount;

    /**
     * @param Money $amount
     */
    public function __construct(Money $amount)
    {
        $this->amount = $amount;
    }

    /**
     * Returns Amount.
     * The currency and amount for a financial transaction, such as a balance or payment due.
     */
    public function getAmount(): Money
    {
        return $this->amount;
    }

    /**
     * Sets Amount.
     * The currency and amount for a financial transaction, such as a balance or payment due.
     *
     * @required
     * @maps amount
     */
    public function setAmount(Money $amount): void
    {
        $this->amount = $amount;
    }

    /**
     * Converts the RefundPlatformFee object to a human-readable string representation.
     *
     * @return string The string representation of the RefundPlatformFee object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify('RefundPlatformFee', ['amount' => $this->amount]);
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
        $json['amount'] = $this->amount;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
