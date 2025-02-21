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
 * The payment card to use to fund a payment. Can be a credit or debit card.
 */
class ApplePayTokenizedCard implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $name;

    /**
     * @var string|null
     */
    private $number;

    /**
     * @var string|null
     */
    private $expiry;

    /**
     * @var string|null
     */
    private $cardType;

    /**
     * @var string|null
     */
    private $type;

    /**
     * @var string|null
     */
    private $brand;

    /**
     * @var Address|null
     */
    private $billingAddress;

    /**
     * Returns Name.
     * The card holder's name as it appears on the card.
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Sets Name.
     * The card holder's name as it appears on the card.
     *
     * @maps name
     */
    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    /**
     * Returns Number.
     * The primary account number (PAN) for the payment card.
     */
    public function getNumber(): ?string
    {
        return $this->number;
    }

    /**
     * Sets Number.
     * The primary account number (PAN) for the payment card.
     *
     * @maps number
     */
    public function setNumber(?string $number): void
    {
        $this->number = $number;
    }

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
     * Returns Card Type.
     * The card network or brand. Applies to credit, debit, gift, and payment cards.
     */
    public function getCardType(): ?string
    {
        return $this->cardType;
    }

    /**
     * Sets Card Type.
     * The card network or brand. Applies to credit, debit, gift, and payment cards.
     *
     * @maps card_type
     */
    public function setCardType(?string $cardType): void
    {
        $this->cardType = $cardType;
    }

    /**
     * Returns Type.
     * Type of card. i.e Credit, Debit and so on.
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * Sets Type.
     * Type of card. i.e Credit, Debit and so on.
     *
     * @maps type
     */
    public function setType(?string $type): void
    {
        $this->type = $type;
    }

    /**
     * Returns Brand.
     * The card network or brand. Applies to credit, debit, gift, and payment cards.
     */
    public function getBrand(): ?string
    {
        return $this->brand;
    }

    /**
     * Sets Brand.
     * The card network or brand. Applies to credit, debit, gift, and payment cards.
     *
     * @maps brand
     */
    public function setBrand(?string $brand): void
    {
        $this->brand = $brand;
    }

    /**
     * Returns Billing Address.
     * The portable international postal address. Maps to [AddressValidationMetadata](https://github.
     * com/googlei18n/libaddressinput/wiki/AddressValidationMetadata) and HTML 5.1 [Autofilling form
     * controls: the autocomplete attribute](https://www.w3.org/TR/html51/sec-forms.html#autofilling-form-
     * controls-the-autocomplete-attribute).
     */
    public function getBillingAddress(): ?Address
    {
        return $this->billingAddress;
    }

    /**
     * Sets Billing Address.
     * The portable international postal address. Maps to [AddressValidationMetadata](https://github.
     * com/googlei18n/libaddressinput/wiki/AddressValidationMetadata) and HTML 5.1 [Autofilling form
     * controls: the autocomplete attribute](https://www.w3.org/TR/html51/sec-forms.html#autofilling-form-
     * controls-the-autocomplete-attribute).
     *
     * @maps billing_address
     */
    public function setBillingAddress(?Address $billingAddress): void
    {
        $this->billingAddress = $billingAddress;
    }

    /**
     * Converts the ApplePayTokenizedCard object to a human-readable string representation.
     *
     * @return string The string representation of the ApplePayTokenizedCard object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'ApplePayTokenizedCard',
            [
                'name' => $this->name,
                'number' => $this->number,
                'expiry' => $this->expiry,
                'cardType' => $this->cardType,
                'type' => $this->type,
                'brand' => $this->brand,
                'billingAddress' => $this->billingAddress
            ]
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
        if (isset($this->name)) {
            $json['name']            = $this->name;
        }
        if (isset($this->number)) {
            $json['number']          = $this->number;
        }
        if (isset($this->expiry)) {
            $json['expiry']          = $this->expiry;
        }
        if (isset($this->cardType)) {
            $json['card_type']       = $this->cardType;
        }
        if (isset($this->type)) {
            $json['type']            = $this->type;
        }
        if (isset($this->brand)) {
            $json['brand']           = $this->brand;
        }
        if (isset($this->billingAddress)) {
            $json['billing_address'] = $this->billingAddress;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
