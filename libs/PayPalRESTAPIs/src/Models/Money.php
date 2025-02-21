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
 * The currency and amount for a financial transaction, such as a balance or payment due.
 */
class Money implements \JsonSerializable
{
    /**
     * @var string
     */
    private $currencyCode;

    /**
     * @var string
     */
    private $value;

    /**
     * @param string $currencyCode
     * @param string $value
     */
    public function __construct(string $currencyCode, string $value)
    {
        $this->currencyCode = $currencyCode;
        $this->value = $value;
    }

    /**
     * Returns Currency Code.
     * The [three-character ISO-4217 currency code](/api/rest/reference/currency-codes/) that identifies
     * the currency.
     */
    public function getCurrencyCode(): string
    {
        return $this->currencyCode;
    }

    /**
     * Sets Currency Code.
     * The [three-character ISO-4217 currency code](/api/rest/reference/currency-codes/) that identifies
     * the currency.
     *
     * @required
     * @maps currency_code
     */
    public function setCurrencyCode(string $currencyCode): void
    {
        $this->currencyCode = $currencyCode;
    }

    /**
     * Returns Value.
     * The value, which might be:<ul><li>An integer for currencies like `JPY` that are not typically
     * fractional.</li><li>A decimal fraction for currencies like `TND` that are subdivided into
     * thousandths.</li></ul>For the required number of decimal places for a currency code, see [Currency
     * Codes](/api/rest/reference/currency-codes/).
     */
    public function getValue(): string
    {
        return $this->value;
    }

    /**
     * Sets Value.
     * The value, which might be:<ul><li>An integer for currencies like `JPY` that are not typically
     * fractional.</li><li>A decimal fraction for currencies like `TND` that are subdivided into
     * thousandths.</li></ul>For the required number of decimal places for a currency code, see [Currency
     * Codes](/api/rest/reference/currency-codes/).
     *
     * @required
     * @maps value
     */
    public function setValue(string $value): void
    {
        $this->value = $value;
    }

    /**
     * Converts the Money object to a human-readable string representation.
     *
     * @return string The string representation of the Money object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify('Money', ['currencyCode' => $this->currencyCode, 'value' => $this->value]);
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
        $json['currency_code'] = $this->currencyCode;
        $json['value']         = $this->value;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
