<?php

declare(strict_types=1);

/*
 * OrdersLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace OrdersLib\Models;

use Core\Utils\CoreHelper;
use Exception;
use stdClass;

/**
 * Expected business/pricing model for the billing agreement.
 */
class PayPalPaymentTokenUsagePatternEnum
{
    public const IMMEDIATE = 'IMMEDIATE';

    public const DEFERRED = 'DEFERRED';

    public const RECURRING_PREPAID = 'RECURRING_PREPAID';

    public const RECURRING_POSTPAID = 'RECURRING_POSTPAID';

    public const THRESHOLD_PREPAID = 'THRESHOLD_PREPAID';

    public const THRESHOLD_POSTPAID = 'THRESHOLD_POSTPAID';

    private const _ALL_VALUES = [
        self::IMMEDIATE,
        self::DEFERRED,
        self::RECURRING_PREPAID,
        self::RECURRING_POSTPAID,
        self::THRESHOLD_PREPAID,
        self::THRESHOLD_POSTPAID
    ];

    /**
     * Ensures that all the given values are present in this Enum.
     *
     * @param array|stdClass|null|string $value Value or a list/map of values to be checked
     *
     * @return array|null|string Input value(s), if all are a part of this Enum
     *
     * @throws Exception Throws exception if any given value is not in this Enum
     */
    public static function checkValue($value)
    {
        $value = json_decode(json_encode($value), true); // converts stdClass into array
        if (CoreHelper::checkValueOrValuesInList($value, self::_ALL_VALUES)) {
            return $value;
        }
        throw new Exception("$value is invalid for PayPalPaymentTokenUsagePatternEnum.");
    }
}
