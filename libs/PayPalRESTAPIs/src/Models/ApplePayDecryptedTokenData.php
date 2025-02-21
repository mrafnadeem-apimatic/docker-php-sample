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
 * Information about the Payment data obtained by decrypting Apple Pay token.
 */
class ApplePayDecryptedTokenData implements \JsonSerializable
{
    /**
     * @var Money|null
     */
    private $transactionAmount;

    /**
     * @var ApplePayTokenizedCard
     */
    private $tokenizedCard;

    /**
     * @var string|null
     */
    private $deviceManufacturerId;

    /**
     * @var string|null
     */
    private $paymentDataType;

    /**
     * @var ApplePayPaymentData|null
     */
    private $paymentData;

    /**
     * @param ApplePayTokenizedCard $tokenizedCard
     */
    public function __construct(ApplePayTokenizedCard $tokenizedCard)
    {
        $this->tokenizedCard = $tokenizedCard;
    }

    /**
     * Returns Transaction Amount.
     * The currency and amount for a financial transaction, such as a balance or payment due.
     */
    public function getTransactionAmount(): ?Money
    {
        return $this->transactionAmount;
    }

    /**
     * Sets Transaction Amount.
     * The currency and amount for a financial transaction, such as a balance or payment due.
     *
     * @maps transaction_amount
     */
    public function setTransactionAmount(?Money $transactionAmount): void
    {
        $this->transactionAmount = $transactionAmount;
    }

    /**
     * Returns Tokenized Card.
     * The payment card to use to fund a payment. Can be a credit or debit card.
     */
    public function getTokenizedCard(): ApplePayTokenizedCard
    {
        return $this->tokenizedCard;
    }

    /**
     * Sets Tokenized Card.
     * The payment card to use to fund a payment. Can be a credit or debit card.
     *
     * @required
     * @maps tokenized_card
     */
    public function setTokenizedCard(ApplePayTokenizedCard $tokenizedCard): void
    {
        $this->tokenizedCard = $tokenizedCard;
    }

    /**
     * Returns Device Manufacturer Id.
     * Apple Pay Hex-encoded device manufacturer identifier. The pattern is defined by an external party
     * and supports Unicode.
     */
    public function getDeviceManufacturerId(): ?string
    {
        return $this->deviceManufacturerId;
    }

    /**
     * Sets Device Manufacturer Id.
     * Apple Pay Hex-encoded device manufacturer identifier. The pattern is defined by an external party
     * and supports Unicode.
     *
     * @maps device_manufacturer_id
     */
    public function setDeviceManufacturerId(?string $deviceManufacturerId): void
    {
        $this->deviceManufacturerId = $deviceManufacturerId;
    }

    /**
     * Returns Payment Data Type.
     * Indicates the type of payment data passed, in case of Non China the payment data is 3DSECURE and for
     * China it is EMV.
     */
    public function getPaymentDataType(): ?string
    {
        return $this->paymentDataType;
    }

    /**
     * Sets Payment Data Type.
     * Indicates the type of payment data passed, in case of Non China the payment data is 3DSECURE and for
     * China it is EMV.
     *
     * @maps payment_data_type
     */
    public function setPaymentDataType(?string $paymentDataType): void
    {
        $this->paymentDataType = $paymentDataType;
    }

    /**
     * Returns Payment Data.
     * Information about the decrypted apple pay payment data for the token like cryptogram, eci indicator.
     */
    public function getPaymentData(): ?ApplePayPaymentData
    {
        return $this->paymentData;
    }

    /**
     * Sets Payment Data.
     * Information about the decrypted apple pay payment data for the token like cryptogram, eci indicator.
     *
     * @maps payment_data
     */
    public function setPaymentData(?ApplePayPaymentData $paymentData): void
    {
        $this->paymentData = $paymentData;
    }

    /**
     * Converts the ApplePayDecryptedTokenData object to a human-readable string representation.
     *
     * @return string The string representation of the ApplePayDecryptedTokenData object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'ApplePayDecryptedTokenData',
            [
                'transactionAmount' => $this->transactionAmount,
                'tokenizedCard' => $this->tokenizedCard,
                'deviceManufacturerId' => $this->deviceManufacturerId,
                'paymentDataType' => $this->paymentDataType,
                'paymentData' => $this->paymentData
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
        if (isset($this->transactionAmount)) {
            $json['transaction_amount']     = $this->transactionAmount;
        }
        $json['tokenized_card']             = $this->tokenizedCard;
        if (isset($this->deviceManufacturerId)) {
            $json['device_manufacturer_id'] = $this->deviceManufacturerId;
        }
        if (isset($this->paymentDataType)) {
            $json['payment_data_type']      = $this->paymentDataType;
        }
        if (isset($this->paymentData)) {
            $json['payment_data']           = $this->paymentData;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
