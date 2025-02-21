<?php

declare(strict_types=1);

/*
 * PaypalRestApisLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PaypalRestApisLib\Models\Builders;

use Core\Utils\CoreHelper;
use PaypalRestApisLib\Models\BlikLevel0PaymentObject;

/**
 * Builder for model BlikLevel0PaymentObject
 *
 * @see BlikLevel0PaymentObject
 */
class BlikLevel0PaymentObjectBuilder
{
    /**
     * @var BlikLevel0PaymentObject
     */
    private $instance;

    private function __construct(BlikLevel0PaymentObject $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Blik Level 0 Payment Object Builder object.
     *
     * @param string $authCode
     */
    public static function init(string $authCode): self
    {
        return new self(new BlikLevel0PaymentObject($authCode));
    }

    /**
     * Initializes a new Blik Level 0 Payment Object object.
     */
    public function build(): BlikLevel0PaymentObject
    {
        return CoreHelper::clone($this->instance);
    }
}
