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
 * Representation of card details as received in the request.
 */
class CardFromRequest implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $expiry;

    /**
     * @var string|null
     */
    private $lastDigits;

    /**
     * Returns Expiry.
     * The year and month, in ISO-8601 `YYYY-MM` date format. See [Internet date and time format](https:
     * //tools.ietf.org/html/rfc3339#section-5.6).
     */
    public function getExpiry(): ?string
    {
        return $this->expiry;
    }

    /**
     * Sets Expiry.
     * The year and month, in ISO-8601 `YYYY-MM` date format. See [Internet date and time format](https:
     * //tools.ietf.org/html/rfc3339#section-5.6).
     *
     * @maps expiry
     */
    public function setExpiry(?string $expiry): void
    {
        $this->expiry = $expiry;
    }

    /**
     * Returns Last Digits.
     * The last digits of the payment card.
     */
    public function getLastDigits(): ?string
    {
        return $this->lastDigits;
    }

    /**
     * Sets Last Digits.
     * The last digits of the payment card.
     *
     * @maps last_digits
     */
    public function setLastDigits(?string $lastDigits): void
    {
        $this->lastDigits = $lastDigits;
    }

    /**
     * Converts the CardFromRequest object to a human-readable string representation.
     *
     * @return string The string representation of the CardFromRequest object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'CardFromRequest',
            ['expiry' => $this->expiry, 'lastDigits' => $this->lastDigits]
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
        if (isset($this->expiry)) {
            $json['expiry']      = $this->expiry;
        }
        if (isset($this->lastDigits)) {
            $json['last_digits'] = $this->lastDigits;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
