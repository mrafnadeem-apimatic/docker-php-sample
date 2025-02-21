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
 * Information about the decrypted apple pay payment data for the token like cryptogram, eci indicator.
 */
class ApplePayPaymentData implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $cryptogram;

    /**
     * @var string|null
     */
    private $eciIndicator;

    /**
     * @var string|null
     */
    private $emvData;

    /**
     * @var string|null
     */
    private $pin;

    /**
     * Returns Cryptogram.
     * Online payment cryptogram, as defined by 3D Secure. The pattern is defined by an external party and
     * supports Unicode.
     */
    public function getCryptogram(): ?string
    {
        return $this->cryptogram;
    }

    /**
     * Sets Cryptogram.
     * Online payment cryptogram, as defined by 3D Secure. The pattern is defined by an external party and
     * supports Unicode.
     *
     * @maps cryptogram
     */
    public function setCryptogram(?string $cryptogram): void
    {
        $this->cryptogram = $cryptogram;
    }

    /**
     * Returns Eci Indicator.
     * ECI indicator, as defined by 3- Secure. The pattern is defined by an external party and supports
     * Unicode.
     */
    public function getEciIndicator(): ?string
    {
        return $this->eciIndicator;
    }

    /**
     * Sets Eci Indicator.
     * ECI indicator, as defined by 3- Secure. The pattern is defined by an external party and supports
     * Unicode.
     *
     * @maps eci_indicator
     */
    public function setEciIndicator(?string $eciIndicator): void
    {
        $this->eciIndicator = $eciIndicator;
    }

    /**
     * Returns Emv Data.
     * Encoded Apple Pay EMV Payment Structure used for payments in China. The pattern is defined by an
     * external party and supports Unicode.
     */
    public function getEmvData(): ?string
    {
        return $this->emvData;
    }

    /**
     * Sets Emv Data.
     * Encoded Apple Pay EMV Payment Structure used for payments in China. The pattern is defined by an
     * external party and supports Unicode.
     *
     * @maps emv_data
     */
    public function setEmvData(?string $emvData): void
    {
        $this->emvData = $emvData;
    }

    /**
     * Returns Pin.
     * Bank Key encrypted Apple Pay PIN. The pattern is defined by an external party and supports Unicode.
     */
    public function getPin(): ?string
    {
        return $this->pin;
    }

    /**
     * Sets Pin.
     * Bank Key encrypted Apple Pay PIN. The pattern is defined by an external party and supports Unicode.
     *
     * @maps pin
     */
    public function setPin(?string $pin): void
    {
        $this->pin = $pin;
    }

    /**
     * Converts the ApplePayPaymentData object to a human-readable string representation.
     *
     * @return string The string representation of the ApplePayPaymentData object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'ApplePayPaymentData',
            [
                'cryptogram' => $this->cryptogram,
                'eciIndicator' => $this->eciIndicator,
                'emvData' => $this->emvData,
                'pin' => $this->pin
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
        if (isset($this->cryptogram)) {
            $json['cryptogram']    = $this->cryptogram;
        }
        if (isset($this->eciIndicator)) {
            $json['eci_indicator'] = $this->eciIndicator;
        }
        if (isset($this->emvData)) {
            $json['emv_data']      = $this->emvData;
        }
        if (isset($this->pin)) {
            $json['pin']           = $this->pin;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
