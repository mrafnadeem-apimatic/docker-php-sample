<?php

require_once "vendor/autoload.php";

use APIMATICCalculatorLib\APIMATICCalculatorClientBuilder;
use APIMATICCalculatorLib\Models\OperationTypeEnum;
use APIMATICCalculatorLib\Exceptions\ApiException;
use APIMATICCalculatorLib\Environment;

$collect = [
    'operation' => OperationTypeEnum::MULTIPLY,
    'x' => 222.14,
    'y' => 165.14
];

$client = APIMATICCalculatorClientBuilder::init()
    ->environment(Environment::PRODUCTION)
    ->build();

try {
    $result = $client->getSimpleCalculatorController()->getCalculate($collect);
    var_dump($result);
} catch (ApiException $exp) {
    echo "Caught $exp";
}