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

class PaypalWalletVaultInstruction implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $storeInVault;

    /**
     * @var string|null
     */
    private $description;

    /**
     * @var string|null
     */
    private $usagePattern;

    /**
     * @var string
     */
    private $usageType;

    /**
     * @var string|null
     */
    private $customerType = PaypalPaymentTokenCustomerType::CONSUMER;

    /**
     * @var bool|null
     */
    private $permitMultiplePaymentTokens = false;

    /**
     * @param string $usageType
     */
    public function __construct(string $usageType)
    {
        $this->usageType = $usageType;
    }

    /**
     * Returns Store in Vault.
     * Defines how and when the payment source gets vaulted.
     */
    public function getStoreInVault(): ?string
    {
        return $this->storeInVault;
    }

    /**
     * Sets Store in Vault.
     * Defines how and when the payment source gets vaulted.
     *
     * @maps store_in_vault
     */
    public function setStoreInVault(?string $storeInVault): void
    {
        $this->storeInVault = $storeInVault;
    }

    /**
     * Returns Description.
     * The description displayed to PayPal consumer on the approval flow for PayPal, as well as on the
     * PayPal payment token management experience on PayPal.com.
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * Sets Description.
     * The description displayed to PayPal consumer on the approval flow for PayPal, as well as on the
     * PayPal payment token management experience on PayPal.com.
     *
     * @maps description
     */
    public function setDescription(?string $description): void
    {
        $this->description = $description;
    }

    /**
     * Returns Usage Pattern.
     * Expected business/pricing model for the billing agreement.
     */
    public function getUsagePattern(): ?string
    {
        return $this->usagePattern;
    }

    /**
     * Sets Usage Pattern.
     * Expected business/pricing model for the billing agreement.
     *
     * @maps usage_pattern
     */
    public function setUsagePattern(?string $usagePattern): void
    {
        $this->usagePattern = $usagePattern;
    }

    /**
     * Returns Usage Type.
     * The usage type associated with the PayPal payment token.
     */
    public function getUsageType(): string
    {
        return $this->usageType;
    }

    /**
     * Sets Usage Type.
     * The usage type associated with the PayPal payment token.
     *
     * @required
     * @maps usage_type
     */
    public function setUsageType(string $usageType): void
    {
        $this->usageType = $usageType;
    }

    /**
     * Returns Customer Type.
     * The customer type associated with the PayPal payment token. This is to indicate whether the customer
     * acting on the merchant / platform is either a business or a consumer.
     */
    public function getCustomerType(): ?string
    {
        return $this->customerType;
    }

    /**
     * Sets Customer Type.
     * The customer type associated with the PayPal payment token. This is to indicate whether the customer
     * acting on the merchant / platform is either a business or a consumer.
     *
     * @maps customer_type
     */
    public function setCustomerType(?string $customerType): void
    {
        $this->customerType = $customerType;
    }

    /**
     * Returns Permit Multiple Payment Tokens.
     * Create multiple payment tokens for the same payer, merchant/platform combination. Use this when the
     * customer has not logged in at merchant/platform. The payment token thus generated, can then also be
     * used to create the customer account at merchant/platform. Use this also when multiple payment tokens
     * are required for the same payer, different customer at merchant/platform. This helps to identify
     * customers distinctly even though they may share the same PayPal account. This only applies to PayPal
     * payment source.
     */
    public function getPermitMultiplePaymentTokens(): ?bool
    {
        return $this->permitMultiplePaymentTokens;
    }

    /**
     * Sets Permit Multiple Payment Tokens.
     * Create multiple payment tokens for the same payer, merchant/platform combination. Use this when the
     * customer has not logged in at merchant/platform. The payment token thus generated, can then also be
     * used to create the customer account at merchant/platform. Use this also when multiple payment tokens
     * are required for the same payer, different customer at merchant/platform. This helps to identify
     * customers distinctly even though they may share the same PayPal account. This only applies to PayPal
     * payment source.
     *
     * @maps permit_multiple_payment_tokens
     */
    public function setPermitMultiplePaymentTokens(?bool $permitMultiplePaymentTokens): void
    {
        $this->permitMultiplePaymentTokens = $permitMultiplePaymentTokens;
    }

    /**
     * Converts the PaypalWalletVaultInstruction object to a human-readable string representation.
     *
     * @return string The string representation of the PaypalWalletVaultInstruction object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'PaypalWalletVaultInstruction',
            [
                'storeInVault' => $this->storeInVault,
                'description' => $this->description,
                'usagePattern' => $this->usagePattern,
                'usageType' => $this->usageType,
                'customerType' => $this->customerType,
                'permitMultiplePaymentTokens' => $this->permitMultiplePaymentTokens
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
        if (isset($this->storeInVault)) {
            $json['store_in_vault']                 = $this->storeInVault;
        }
        if (isset($this->description)) {
            $json['description']                    = $this->description;
        }
        if (isset($this->usagePattern)) {
            $json['usage_pattern']                  = $this->usagePattern;
        }
        $json['usage_type']                         = $this->usageType;
        if (isset($this->customerType)) {
            $json['customer_type']                  = $this->customerType;
        }
        if (isset($this->permitMultiplePaymentTokens)) {
            $json['permit_multiple_payment_tokens'] = $this->permitMultiplePaymentTokens;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
