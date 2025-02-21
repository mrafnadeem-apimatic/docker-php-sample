<?php

require_once "../../vendor/autoload.php";

use APIMATICCalculatorByClientLib\APIMATICCalculatorByClientClientBuilder;
use APIMATICCalculatorByClientLib\Authentication\CustomHeaderAuthenticationCredentialsBuilder;
use APIMATICCalculatorByClientLib\Models\OperationTypeEnum;
use APIMATICCalculatorByClientLib\Environment;

$collect = [
    'x' => 222.14,
    'y' => 165.14
];

$client = APIMATICCalculatorByClientClientBuilder::init()
    ->customHeaderAuthenticationCredentials(
        CustomHeaderAuthenticationCredentialsBuilder::init(
            'environment'
        )
    )
    ->environment(Environment::PRODUCTION)
    ->environment3(OperationTypeEnum::SUM)
    ->build();

$apiResponse = $client->getSimpleCalculatorController()->getCalculateByClient($collect);

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
