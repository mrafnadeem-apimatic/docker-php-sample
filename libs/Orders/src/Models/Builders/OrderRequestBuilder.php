<?php

declare(strict_types=1);

/*
 * OrdersLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace OrdersLib\Models\Builders;

use Core\Utils\CoreHelper;
use OrdersLib\Models\OrderApplicationContext;
use OrdersLib\Models\OrderRequest;
use OrdersLib\Models\Payer;
use OrdersLib\Models\PaymentSource;
use OrdersLib\Models\PurchaseUnitRequest;

/**
 * Builder for model OrderRequest
 *
 * @see OrderRequest
 */
class OrderRequestBuilder
{
    /**
     * @var OrderRequest
     */
    private $instance;

    private function __construct(OrderRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Order Request Builder object.
     *
     * @param string $intent
     * @param PurchaseUnitRequest[] $purchaseUnits
     */
    public static function init(string $intent, array $purchaseUnits): self
    {
        return new self(new OrderRequest($intent, $purchaseUnits));
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
     * Sets payment source field.
     *
     * @param PaymentSource|null $value
     */
    public function paymentSource(?PaymentSource $value): self
    {
        $this->instance->setPaymentSource($value);
        return $this;
    }

    /**
     * Sets application context field.
     *
     * @param OrderApplicationContext|null $value
     */
    public function applicationContext(?OrderApplicationContext $value): self
    {
        $this->instance->setApplicationContext($value);
        return $this;
    }

    /**
     * Initializes a new Order Request object.
     */
    public function build(): OrderRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
