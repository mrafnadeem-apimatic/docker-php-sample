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
 * Information needed to pay using ApplePay.
 */
class ApplePayPaymentObject implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $id;

    /**
     * @var string|null
     */
    private $token;

    /**
     * @var string|null
     */
    private $name;

    /**
     * @var string|null
     */
    private $emailAddress;

    /**
     * @var PhoneNumber|null
     */
    private $phoneNumber;

    /**
     * @var ApplePayCardResponse|null
     */
    private $card;

    /**
     * @var ApplePayAttributesResponse|null
     */
    private $attributes;

    /**
     * Returns Id.
     * ApplePay transaction identifier, this will be the unique identifier for this transaction provided by
     * Apple. The pattern is defined by an external party and supports Unicode.
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * Sets Id.
     * ApplePay transaction identifier, this will be the unique identifier for this transaction provided by
     * Apple. The pattern is defined by an external party and supports Unicode.
     *
     * @maps id
     */
    public function setId(?string $id): void
    {
        $this->id = $id;
    }

    /**
     * Returns Token.
     * Encrypted ApplePay token, containing card information. This token would be base64encoded. The
     * pattern is defined by an external party and supports Unicode.
     */
    public function getToken(): ?string
    {
        return $this->token;
    }

    /**
     * Sets Token.
     * Encrypted ApplePay token, containing card information. This token would be base64encoded. The
     * pattern is defined by an external party and supports Unicode.
     *
     * @maps token
     */
    public function setToken(?string $token): void
    {
        $this->token = $token;
    }

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
    public function getPhoneNumber(): ?PhoneNumber
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
    public function setPhoneNumber(?PhoneNumber $phoneNumber): void
    {
        $this->phoneNumber = $phoneNumber;
    }

    /**
     * Returns Card.
     * The Card from Apple Pay Wallet used to fund the payment.
     */
    public function getCard(): ?ApplePayCardResponse
    {
        return $this->card;
    }

    /**
     * Sets Card.
     * The Card from Apple Pay Wallet used to fund the payment.
     *
     * @maps card
     */
    public function setCard(?ApplePayCardResponse $card): void
    {
        $this->card = $card;
    }

    /**
     * Returns Attributes.
     * Additional attributes associated with the use of Apple Pay.
     */
    public function getAttributes(): ?ApplePayAttributesResponse
    {
        return $this->attributes;
    }

    /**
     * Sets Attributes.
     * Additional attributes associated with the use of Apple Pay.
     *
     * @maps attributes
     */
    public function setAttributes(?ApplePayAttributesResponse $attributes): void
    {
        $this->attributes = $attributes;
    }

    /**
     * Converts the ApplePayPaymentObject object to a human-readable string representation.
     *
     * @return string The string representation of the ApplePayPaymentObject object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'ApplePayPaymentObject',
            [
                'id' => $this->id,
                'token' => $this->token,
                'name' => $this->name,
                'emailAddress' => $this->emailAddress,
                'phoneNumber' => $this->phoneNumber,
                'card' => $this->card,
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
        if (isset($this->id)) {
            $json['id']            = $this->id;
        }
        if (isset($this->token)) {
            $json['token']         = $this->token;
        }
        if (isset($this->name)) {
            $json['name']          = $this->name;
        }
        if (isset($this->emailAddress)) {
            $json['email_address'] = $this->emailAddress;
        }
        if (isset($this->phoneNumber)) {
            $json['phone_number']  = $this->phoneNumber;
        }
        if (isset($this->card)) {
            $json['card']          = $this->card;
        }
        if (isset($this->attributes)) {
            $json['attributes']    = $this->attributes;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
