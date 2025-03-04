<?php

declare(strict_types=1);

/*
 * APIMATICCalculatorLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace APIMATICCalculatorLib\Tests\Controllers;

use APIMATICCalculatorLib\Controllers\SimpleCalculatorController;
use APIMATICCalculatorLib\Exceptions;
use APIMATICCalculatorLib\Models;
use Core\TestCase\BodyMatchers\NativeBodyMatcher;

class SimpleCalculatorControllerTest extends BaseTestController
{
    /**
     * @var SimpleCalculatorController SimpleCalculatorController instance
     */
    protected static $controller;

    /**
     * Setup test class
     */
    public static function setUpBeforeClass(): void
    {
        self::$controller = parent::getClient()->getSimpleCalculatorController();
    }

    public function testMultiply()
    {
        // Parameters for the API call
        $input = [];
        $input['operation'] =
            Models\OperationTypeEnum::MULTIPLY;
        $input['x'] = 4;
        $input['y'] = 5;

        // Perform API call
        $result = null;
        try {
            $result = self::$controller->getCalculate($input)->getResult();
        } catch (Exceptions\ApiException $e) {
        }

        // Assert result with expected response
        $this->newTestCase($result)->expectStatus(200)->bodyMatcher(NativeBodyMatcher::init((float) 20.0))->assert();
    }
}
