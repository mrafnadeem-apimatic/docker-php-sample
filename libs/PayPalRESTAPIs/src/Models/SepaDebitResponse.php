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

class SepaDebitResponse implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $ibanLastChars;

    /**
     * @var mixed
     */
    private $accountHolderName;

    /**
     * @var Address|null
     */
    private $billingAddress;

    /**
     * @var SepaDebitAuthorizationDetails|null
     */
    private $authorizationDetails;

    /**
     * Returns Iban Last Chars.
     * The last characters of the IBAN used to pay.
     */
    public function getIbanLastChars(): ?string
    {
        return $this->ibanLastChars;
    }

    /**
     * Sets Iban Last Chars.
     * The last characters of the IBAN used to pay.
     *
     * @maps iban_last_chars
     */
    public function setIbanLastChars(?string $ibanLastChars): void
    {
        $this->ibanLastChars = $ibanLastChars;
    }

    /**
     * Returns Account Holder Name.
     *
     * @return mixed
     */
    public function getAccountHolderName()
    {
        return $this->accountHolderName;
    }

    /**
     * Sets Account Holder Name.
     *
     * @maps account_holder_name
     *
     * @param mixed $accountHolderName
     */
    public function setAccountHolderName($accountHolderName): void
    {
        $this->accountHolderName = $accountHolderName;
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
     * Returns Authorization Details.
     * Authorization details.
     */
    public function getAuthorizationDetails(): ?SepaDebitAuthorizationDetails
    {
        return $this->authorizationDetails;
    }

    /**
     * Sets Authorization Details.
     * Authorization details.
     *
     * @maps authorization_details
     */
    public function setAuthorizationDetails(?SepaDebitAuthorizationDetails $authorizationDetails): void
    {
        $this->authorizationDetails = $authorizationDetails;
    }

    /**
     * Converts the SepaDebitResponse object to a human-readable string representation.
     *
     * @return string The string representation of the SepaDebitResponse object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'SepaDebitResponse',
            [
                'ibanLastChars' => $this->ibanLastChars,
                'accountHolderName' => $this->accountHolderName,
                'billingAddress' => $this->billingAddress,
                'authorizationDetails' => $this->authorizationDetails
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
        if (isset($this->ibanLastChars)) {
            $json['iban_last_chars']       = $this->ibanLastChars;
        }
        if (isset($this->accountHolderName)) {
            $json['account_holder_name']   = $this->accountHolderName;
        }
        if (isset($this->billingAddress)) {
            $json['billing_address']       = $this->billingAddress;
        }
        if (isset($this->authorizationDetails)) {
            $json['authorization_details'] = $this->authorizationDetails;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
