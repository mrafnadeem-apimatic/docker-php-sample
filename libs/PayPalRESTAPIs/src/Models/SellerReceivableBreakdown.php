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
 * The detailed breakdown of the capture activity. This is not available for transactions that are in
 * pending state.
 */
class SellerReceivableBreakdown implements \JsonSerializable
{
    /**
     * @var Money
     */
    private $grossAmount;

    /**
     * @var Money|null
     */
    private $paypalFee;

    /**
     * @var Money|null
     */
    private $paypalFeeInReceivableCurrency;

    /**
     * @var Money|null
     */
    private $netAmount;

    /**
     * @var Money|null
     */
    private $receivableAmount;

    /**
     * @var ExchangeRate|null
     */
    private $exchangeRate;

    /**
     * @var PlatformFee[]|null
     */
    private $platformFees;

    /**
     * @param Money $grossAmount
     */
    public function __construct(Money $grossAmount)
    {
        $this->grossAmount = $grossAmount;
    }

    /**
     * Returns Gross Amount.
     * The currency and amount for a financial transaction, such as a balance or payment due.
     */
    public function getGrossAmount(): Money
    {
        return $this->grossAmount;
    }

    /**
     * Sets Gross Amount.
     * The currency and amount for a financial transaction, such as a balance or payment due.
     *
     * @required
     * @maps gross_amount
     */
    public function setGrossAmount(Money $grossAmount): void
    {
        $this->grossAmount = $grossAmount;
    }

    /**
     * Returns Paypal Fee.
     * The currency and amount for a financial transaction, such as a balance or payment due.
     */
    public function getPaypalFee(): ?Money
    {
        return $this->paypalFee;
    }

    /**
     * Sets Paypal Fee.
     * The currency and amount for a financial transaction, such as a balance or payment due.
     *
     * @maps paypal_fee
     */
    public function setPaypalFee(?Money $paypalFee): void
    {
        $this->paypalFee = $paypalFee;
    }

    /**
     * Returns Paypal Fee in Receivable Currency.
     * The currency and amount for a financial transaction, such as a balance or payment due.
     */
    public function getPaypalFeeInReceivableCurrency(): ?Money
    {
        return $this->paypalFeeInReceivableCurrency;
    }

    /**
     * Sets Paypal Fee in Receivable Currency.
     * The currency and amount for a financial transaction, such as a balance or payment due.
     *
     * @maps paypal_fee_in_receivable_currency
     */
    public function setPaypalFeeInReceivableCurrency(?Money $paypalFeeInReceivableCurrency): void
    {
        $this->paypalFeeInReceivableCurrency = $paypalFeeInReceivableCurrency;
    }

    /**
     * Returns Net Amount.
     * The currency and amount for a financial transaction, such as a balance or payment due.
     */
    public function getNetAmount(): ?Money
    {
        return $this->netAmount;
    }

    /**
     * Sets Net Amount.
     * The currency and amount for a financial transaction, such as a balance or payment due.
     *
     * @maps net_amount
     */
    public function setNetAmount(?Money $netAmount): void
    {
        $this->netAmount = $netAmount;
    }

    /**
     * Returns Receivable Amount.
     * The currency and amount for a financial transaction, such as a balance or payment due.
     */
    public function getReceivableAmount(): ?Money
    {
        return $this->receivableAmount;
    }

    /**
     * Sets Receivable Amount.
     * The currency and amount for a financial transaction, such as a balance or payment due.
     *
     * @maps receivable_amount
     */
    public function setReceivableAmount(?Money $receivableAmount): void
    {
        $this->receivableAmount = $receivableAmount;
    }

    /**
     * Returns Exchange Rate.
     * The exchange rate that determines the amount to convert from one currency to another currency.
     */
    public function getExchangeRate(): ?ExchangeRate
    {
        return $this->exchangeRate;
    }

    /**
     * Sets Exchange Rate.
     * The exchange rate that determines the amount to convert from one currency to another currency.
     *
     * @maps exchange_rate
     */
    public function setExchangeRate(?ExchangeRate $exchangeRate): void
    {
        $this->exchangeRate = $exchangeRate;
    }

    /**
     * Returns Platform Fees.
     * An array of platform or partner fees, commissions, or brokerage fees that associated with the
     * captured payment.
     *
     * @return PlatformFee[]|null
     */
    public function getPlatformFees(): ?array
    {
        return $this->platformFees;
    }

    /**
     * Sets Platform Fees.
     * An array of platform or partner fees, commissions, or brokerage fees that associated with the
     * captured payment.
     *
     * @maps platform_fees
     *
     * @param PlatformFee[]|null $platformFees
     */
    public function setPlatformFees(?array $platformFees): void
    {
        $this->platformFees = $platformFees;
    }

    /**
     * Converts the SellerReceivableBreakdown object to a human-readable string representation.
     *
     * @return string The string representation of the SellerReceivableBreakdown object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'SellerReceivableBreakdown',
            [
                'grossAmount' => $this->grossAmount,
                'paypalFee' => $this->paypalFee,
                'paypalFeeInReceivableCurrency' => $this->paypalFeeInReceivableCurrency,
                'netAmount' => $this->netAmount,
                'receivableAmount' => $this->receivableAmount,
                'exchangeRate' => $this->exchangeRate,
                'platformFees' => $this->platformFees
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
        $json['gross_amount']                          = $this->grossAmount;
        if (isset($this->paypalFee)) {
            $json['paypal_fee']                        = $this->paypalFee;
        }
        if (isset($this->paypalFeeInReceivableCurrency)) {
            $json['paypal_fee_in_receivable_currency'] = $this->paypalFeeInReceivableCurrency;
        }
        if (isset($this->netAmount)) {
            $json['net_amount']                        = $this->netAmount;
        }
        if (isset($this->receivableAmount)) {
            $json['receivable_amount']                 = $this->receivableAmount;
        }
        if (isset($this->exchangeRate)) {
            $json['exchange_rate']                     = $this->exchangeRate;
        }
        if (isset($this->platformFees)) {
            $json['platform_fees']                     = $this->platformFees;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
