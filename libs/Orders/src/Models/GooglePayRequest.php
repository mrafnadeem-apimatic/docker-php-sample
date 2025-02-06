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
 * Information needed to pay using Google Pay.
 */
class GooglePayRequest implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $name;

    /**
     * @var string|null
     */
    private $emailAddress;

    /**
     * @var PhoneNumberWithCountryCode|null
     */
    private $phoneNumber;

    /**
     * @var array|null
     */
    private $card;

    /**
     * @var GooglePayDecryptedTokenData|null
     */
    private $decryptedToken;

    /**
     * @var array|null
     */
    private $assuranceDetails;

    /**
     * @var GooglePayCardAttributes|null
     */
    private $attributes;

    /**
     * Returns Name.
     * The full name representation like Mr J Smith.
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Sets Name.
     * The full name representation like Mr J Smith.
     *
     * @maps name
     */
    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    /**
     * Returns Email Address.
     * The internationalized email address.<blockquote><strong>Note:</strong> Up to 64 characters are
     * allowed before and 255 characters are allowed after the <code>@</code> sign. However, the generally
     * accepted maximum length for an email address is 254 characters. The pattern verifies that an
     * unquoted <code>@</code> sign exists.</blockquote>
     */
    public function getEmailAddress(): ?string
    {
        return $this->emailAddress;
    }

    /**
     * Sets Email Address.
     * The internationalized email address.<blockquote><strong>Note:</strong> Up to 64 characters are
     * allowed before and 255 characters are allowed after the <code>@</code> sign. However, the generally
     * accepted maximum length for an email address is 254 characters. The pattern verifies that an
     * unquoted <code>@</code> sign exists.</blockquote>
     *
     * @maps email_address
     */
    public function setEmailAddress(?string $emailAddress): void
    {
        $this->emailAddress = $emailAddress;
    }

    /**
     * Returns Phone Number.
     * The phone number in its canonical international [E.164 numbering plan format](https://www.itu.
     * int/rec/T-REC-E.164/en).
     */
    public function getPhoneNumber(): ?PhoneNumberWithCountryCode
    {
        return $this->phoneNumber;
    }

    /**
     * Sets Phone Number.
     * The phone number in its canonical international [E.164 numbering plan format](https://www.itu.
     * int/rec/T-REC-E.164/en).
     *
     * @maps phone_number
     */
    public function setPhoneNumber(?PhoneNumberWithCountryCode $phoneNumber): void
    {
        $this->phoneNumber = $phoneNumber;
    }

    /**
     * Returns Card.
     * The payment card information.
     */
    public function getCard(): ?array
    {
        return $this->card;
    }

    /**
     * Sets Card.
     * The payment card information.
     *
     * @maps card
     */
    public function setCard(?array $card): void
    {
        $this->card = $card;
    }

    /**
     * Returns Decrypted Token.
     * Details shared by Google for the merchant to be shared with PayPal. This is required to process the
     * transaction using the Google Pay payment method.
     */
    public function getDecryptedToken(): ?GooglePayDecryptedTokenData
    {
        return $this->decryptedToken;
    }

    /**
     * Sets Decrypted Token.
     * Details shared by Google for the merchant to be shared with PayPal. This is required to process the
     * transaction using the Google Pay payment method.
     *
     * @maps decrypted_token
     */
    public function setDecryptedToken(?GooglePayDecryptedTokenData $decryptedToken): void
    {
        $this->decryptedToken = $decryptedToken;
    }

    /**
     * Returns Assurance Details.
     */
    public function getAssuranceDetails(): ?array
    {
        return $this->assuranceDetails;
    }

    /**
     * Sets Assurance Details.
     *
     * @maps assurance_details
     */
    public function setAssuranceDetails(?array $assuranceDetails): void
    {
        $this->assuranceDetails = $assuranceDetails;
    }

    /**
     * Returns Attributes.
     * Additional attributes associated with the use of this card.
     */
    public function getAttributes(): ?GooglePayCardAttributes
    {
        return $this->attributes;
    }

    /**
     * Sets Attributes.
     * Additional attributes associated with the use of this card.
     *
     * @maps attributes
     */
    public function setAttributes(?GooglePayCardAttributes $attributes): void
    {
        $this->attributes = $attributes;
    }

    /**
     * Converts the GooglePayRequest object to a human-readable string representation.
     *
     * @return string The string representation of the GooglePayRequest object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'GooglePayRequest',
            [
                'name' => $this->name,
                'emailAddress' => $this->emailAddress,
                'phoneNumber' => $this->phoneNumber,
                'card' => $this->card,
                'decryptedToken' => $this->decryptedToken,
                'assuranceDetails' => $this->assuranceDetails,
                'attributes' => $this->attributes
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
            $json['name']              = $this->name;
        }
        if (isset($this->emailAddress)) {
            $json['email_address']     = $this->emailAddress;
        }
        if (isset($this->phoneNumber)) {
            $json['phone_number']      = $this->phoneNumber;
        }
        if (isset($this->card)) {
            $json['card']              = $this->card;
        }
        if (isset($this->decryptedToken)) {
            $json['decrypted_token']   = $this->decryptedToken;
        }
        if (isset($this->assuranceDetails)) {
            $json['assurance_details'] = $this->assuranceDetails;
        }
        if (isset($this->attributes)) {
            $json['attributes']        = $this->attributes;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
