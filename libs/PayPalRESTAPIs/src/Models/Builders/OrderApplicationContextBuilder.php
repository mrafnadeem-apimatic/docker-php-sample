<?php

declare(strict_types=1);

/*
 * PaypalRestApisLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PaypalRestApisLib\Models\Builders;

use Core\Utils\CoreHelper;
use PaypalRestApisLib\Models\OrderApplicationContext;
use PaypalRestApisLib\Models\PaymentMethodPreference;
use PaypalRestApisLib\Models\StoredPaymentSource;

/**
 * Builder for model OrderApplicationContext
 *
 * @see OrderApplicationContext
 */
class OrderApplicationContextBuilder
{
    /**
     * @var OrderApplicationContext
     */
    private $instance;

    private function __construct(OrderApplicationContext $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Order Application Context Builder object.
     */
    public static function init(): self
    {
        return new self(new OrderApplicationContext());
    }

    /**
     * Sets brand name field.
     *
     * @param string|null $value
     */
    public function brandName(?string $value): self
    {
        $this->instance->setBrandName($value);
        return $this;
    }

    /**
     * Sets locale field.
     *
     * @param string|null $value
     */
    public function locale(?string $value): self
    {
        $this->instance->setLocale($value);
        return $this;
    }

    /**
     * Sets landing page field.
     *
     * @param string|null $value
     */
    public function landingPage(?string $value): self
    {
        $this->instance->setLandingPage($value);
        return $this;
    }

    /**
     * Sets shipping preference field.
     *
     * @param string|null $value
     */
    public function shippingPreference(?string $value): self
    {
        $this->instance->setShippingPreference($value);
        return $this;
    }

    /**
     * Sets user action field.
     *
     * @param string|null $value
     */
    public function userAction(?string $value): self
    {
        $this->instance->setUserAction($value);
        return $this;
    }

    /**
     * Sets payment method field.
     *
     * @param PaymentMethodPreference|null $value
     */
    public function paymentMethod(?PaymentMethodPreference $value): self
    {
        $this->instance->setPaymentMethod($value);
        return $this;
    }

    /**
     * Sets return url field.
     *
     * @param string|null $value
     */
    public function returnUrl(?string $value): self
    {
        $this->instance->setReturnUrl($value);
        return $this;
    }

    /**
     * Sets cancel url field.
     *
     * @param string|null $value
     */
    public function cancelUrl(?string $value): self
    {
        $this->instance->setCancelUrl($value);
        return $this;
    }

    /**
     * Sets stored payment source field.
     *
     * @param StoredPaymentSource|null $value
     */
    public function storedPaymentSource(?StoredPaymentSource $value): self
    {
        $this->instance->setStoredPaymentSource($value);
        return $this;
    }

    /**
     * Initializes a new Order Application Context object.
     */
    public function build(): OrderApplicationContext
    {
        return CoreHelper::clone($this->instance);
    }
}
