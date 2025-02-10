<?php

require_once "vendor/autoload.php";

use APIMATICCalculatorLib\APIMATICCalculatorClientBuilder;
use APIMATICCalculatorLib\Models\OperationTypeEnum;
use APIMATICCalculatorLib\Environment;

$collect = [
    'operation' => OperationTypeEnum::MULTIPLY,
    'x' => 222.14,
    'y' => 165.14
];

$client = APIMATICCalculatorClientBuilder::init()
    ->environment(Environment::PRODUCTION)
    ->build();

$apiResponse = $client->getSimpleCalculatorController()->getCalculate($collect);

if ($apiResponse->isSuccess()) {
    $data = $apiResponse->getResult();
    var_dump($data);
} else {
    $errors = $apiResponse->getResult();
    var_dump($errors);
}

// Getting more response information
var_dump($apiResponse->getStatusCode());
var_dump($apiResponse->getHeaders());
