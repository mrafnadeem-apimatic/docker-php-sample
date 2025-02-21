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
class ApplePayRequest implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $id;

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
     * @var ApplePayDecryptedTokenData|null
     */
    private $decryptedToken;

    /**
     * @var CardStoredCredential|null
     */
    private $storedCredential;

    /**
     * @var string|null
     */
    private $vaultId;

    /**
     * @var ApplePayAttributes|null
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
     * Returns Decrypted Token.
     * Information about the Payment data obtained by decrypting Apple Pay token.
     */
    public function getDecryptedToken(): ?ApplePayDecryptedTokenData
    {
        return $this->decryptedToken;
    }

    /**
     * Sets Decrypted Token.
     * Information about the Payment data obtained by decrypting Apple Pay token.
     *
     * @maps decrypted_token
     */
    public function setDecryptedToken(?ApplePayDecryptedTokenData $decryptedToken): void
    {
        $this->decryptedToken = $decryptedToken;
    }

    /**
     * Returns Stored Credential.
     * Provides additional details to process a payment using a `card` that has been stored or is intended
     * to be stored (also referred to as stored_credential or card-on-file).<br/>Parameter compatibility:
     * <br/><ul><li>`payment_type=ONE_TIME` is compatible only with `payment_initiator=CUSTOMER`.
     * </li><li>`usage=FIRST` is compatible only with `payment_initiator=CUSTOMER`.
     * </li><li>`previous_transaction_reference` or `previous_network_transaction_reference` is compatible
     * only with `payment_initiator=MERCHANT`.</li><li>Only one of the parameters -
     * `previous_transaction_reference` and `previous_network_transaction_reference` - can be present in
     * the request.</li></ul>
     */
    public function getStoredCredential(): ?CardStoredCredential
    {
        return $this->storedCredential;
    }

    /**
     * Sets Stored Credential.
     * Provides additional details to process a payment using a `card` that has been stored or is intended
     * to be stored (also referred to as stored_credential or card-on-file).<br/>Parameter compatibility:
     * <br/><ul><li>`payment_type=ONE_TIME` is compatible only with `payment_initiator=CUSTOMER`.
     * </li><li>`usage=FIRST` is compatible only with `payment_initiator=CUSTOMER`.
     * </li><li>`previous_transaction_reference` or `previous_network_transaction_reference` is compatible
     * only with `payment_initiator=MERCHANT`.</li><li>Only one of the parameters -
     * `previous_transaction_reference` and `previous_network_transaction_reference` - can be present in
     * the request.</li></ul>
     *
     * @maps stored_credential
     */
    public function setStoredCredential(?CardStoredCredential $storedCredential): void
    {
        $this->storedCredential = $storedCredential;
    }

    /**
     * Returns Vault Id.
     * The PayPal-generated ID for the vaulted payment source. This ID should be stored on the merchant's
     * server so the saved payment source can be used for future transactions.
     */
    public function getVaultId(): ?string
    {
        return $this->vaultId;
    }

    /**
     * Sets Vault Id.
     * The PayPal-generated ID for the vaulted payment source. This ID should be stored on the merchant's
     * server so the saved payment source can be used for future transactions.
     *
     * @maps vault_id
     */
    public function setVaultId(?string $vaultId): void
    {
        $this->vaultId = $vaultId;
    }

    /**
     * Returns Attributes.
     * Additional attributes associated with apple pay.
     */
    public function getAttributes(): ?ApplePayAttributes
    {
        return $this->attributes;
    }

    /**
     * Sets Attributes.
     * Additional attributes associated with apple pay.
     *
     * @maps attributes
     */
    public function setAttributes(?ApplePayAttributes $attributes): void
    {
        $this->attributes = $attributes;
    }

    /**
     * Converts the ApplePayRequest object to a human-readable string representation.
     *
     * @return string The string representation of the ApplePayRequest object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'ApplePayRequest',
            [
                'id' => $this->id,
                'name' => $this->name,
                'emailAddress' => $this->emailAddress,
                'phoneNumber' => $this->phoneNumber,
                'decryptedToken' => $this->decryptedToken,
                'storedCredential' => $this->storedCredential,
                'vaultId' => $this->vaultId,
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
            $json['id']                = $this->id;
        }
        if (isset($this->name)) {
            $json['name']              = $this->name;
        }
        if (isset($this->emailAddress)) {
            $json['email_address']     = $this->emailAddress;
        }
        if (isset($this->phoneNumber)) {
            $json['phone_number']      = $this->phoneNumber;
        }
        if (isset($this->decryptedToken)) {
            $json['decrypted_token']   = $this->decryptedToken;
        }
        if (isset($this->storedCredential)) {
            $json['stored_credential'] = $this->storedCredential;
        }
        if (isset($this->vaultId)) {
            $json['vault_id']          = $this->vaultId;
        }
        if (isset($this->attributes)) {
            $json['attributes']        = $this->attributes;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
