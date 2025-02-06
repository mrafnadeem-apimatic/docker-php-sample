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
 * The platform or partner fee, commission, or brokerage fee that is associated with the transaction.
 * Not a separate or isolated transaction leg from the external perspective. The platform fee is
 * limited in scope and is always associated with the original payment for the purchase unit.
 */
class PlatformFee implements \JsonSerializable
{
    /**
     * @var Money
     */
    private $amount;

    /**
     * @var PayeeBase|null
     */
    private $payee;

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
     * Returns Payee.
     * The details for the merchant who receives the funds and fulfills the order. The merchant is also
     * known as the payee.
     */
    public function getPayee(): ?PayeeBase
    {
        return $this->payee;
    }

    /**
     * Sets Payee.
     * The details for the merchant who receives the funds and fulfills the order. The merchant is also
     * known as the payee.
     *
     * @maps payee
     */
    public function setPayee(?PayeeBase $payee): void
    {
        $this->payee = $payee;
    }

    /**
     * Converts the PlatformFee object to a human-readable string representation.
     *
     * @return string The string representation of the PlatformFee object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify('PlatformFee', ['amount' => $this->amount, 'payee' => $this->payee]);
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
        $json['amount']    = $this->amount;
        if (isset($this->payee)) {
            $json['payee'] = $this->payee;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
