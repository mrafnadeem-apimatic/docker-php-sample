<?php

declare(strict_types=1);

/*
 * OrdersLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace OrdersLib\Models\Builders;

use Core\Utils\CoreHelper;
use OrdersLib\Models\LinkDescription;
use OrdersLib\Models\OrderAuthorizeResponse;
use OrdersLib\Models\OrderAuthorizeResponsePaymentSource;
use OrdersLib\Models\Payer;
use OrdersLib\Models\PurchaseUnit;

/**
 * Builder for model OrderAuthorizeResponse
 *
 * @see OrderAuthorizeResponse
 */
class OrderAuthorizeResponseBuilder
{
    /**
     * @var OrderAuthorizeResponse
     */
    private $instance;

    private function __construct(OrderAuthorizeResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Order Authorize Response Builder object.
     */
    public static function init(): self
    {
        return new self(new OrderAuthorizeResponse());
    }

    /**
     * Sets create time field.
     *
     * @param string|null $value
     */
    public function createTime(?string $value): self
    {
        $this->instance->setCreateTime($value);
        return $this;
    }

    /**
     * Sets update time field.
     *
     * @param string|null $value
     */
    public function updateTime(?string $value): self
    {
        $this->instance->setUpdateTime($value);
        return $this;
    }

    /**
     * Sets id field.
     *
     * @param string|null $value
     */
    public function id(?string $value): self
    {
        $this->instance->setId($value);
        return $this;
    }

    /**
     * Sets payment source field.
     *
     * @param OrderAuthorizeResponsePaymentSource|null $value
     */
    public function paymentSource(?OrderAuthorizeResponsePaymentSource $value): self
    {
        $this->instance->setPaymentSource($value);
        return $this;
    }

    /**
     * Sets intent field.
     *
     * @param string|null $value
     */
    public function intent(?string $value): self
    {
        $this->instance->setIntent($value);
        return $this;
    }

    /**
     * Sets processing instruction field.
     *
     * @param string|null $value
     */
    public function processingInstruction(?string $value): self
    {
        $this->instance->setProcessingInstruction($value);
        return $this;
    }

    /**
     * Sets payer field.
     *
     * @param Payer|null $value
     */
    public function payer(?Payer $value): self
    {
        $this->instance->setPayer($value);
        return $this;
    }

    /**
     * Sets purchase units field.
     *
     * @param PurchaseUnit[]|null $value
     */
    public function purchaseUnits(?array $value): self
    {
        $this->instance->setPurchaseUnits($value);
        return $this;
    }

    /**
     * Sets status field.
     *
     * @param string|null $value
     */
    public function status(?string $value): self
    {
        $this->instance->setStatus($value);
        return $this;
    }

    /**
     * Sets links field.
     *
     * @param LinkDescription[]|null $value
     */
    public function links(?array $value): self
    {
        $this->instance->setLinks($value);
        return $this;
    }

    /**
     * Initializes a new Order Authorize Response object.
     */
    public function build(): OrderAuthorizeResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
