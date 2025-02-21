<?php

require_once "../../vendor/autoload.php";

use PaypalRestApisLib\PaypalRestApisClientBuilder;
use PaypalRestApisLib\Authentication\ClientCredentialsAuthCredentialsBuilder;
use PaypalRestApisLib\Logging\LoggingConfigurationBuilder;
use PaypalRestApisLib\Logging\RequestLoggingConfigurationBuilder;
use PaypalRestApisLib\Logging\ResponseLoggingConfigurationBuilder;
use Psr\Log\LogLevel;
use PaypalRestApisLib\Models\Builders\ConfirmOrderRequestBuilder;
use PaypalRestApisLib\Models\Builders\PaymentSourceBuilder;
use PaypalRestApisLib\Models\ProcessingInstruction;
use PaypalRestApisLib\Environment;

$collect = [
    'id' => 'id0',
    'prefer' => 'return=minimal',
    'body' => ConfirmOrderRequestBuilder::init(
        PaymentSourceBuilder::init()->build()
    )
        ->processingInstruction(ProcessingInstruction::NO_INSTRUCTION)
        ->build()
];

$client = PaypalRestApisClientBuilder::init()
    ->clientCredentialsAuthCredentials(
        ClientCredentialsAuthCredentialsBuilder::init(
            'OAuthClientId',
            'OAuthClientSecret'
        )
    )
    ->environment(Environment::SANDBOX)
    ->loggingConfiguration(
        LoggingConfigurationBuilder::init()
            ->level(LogLevel::INFO)
            ->requestConfiguration(RequestLoggingConfigurationBuilder::init()->body(true))
            ->responseConfiguration(ResponseLoggingConfigurationBuilder::init()->headers(true))
    )
    ->build();

$apiResponse = $client->getOrdersController()->ordersConfirm($collect);

if ($apiResponse->isSuccess()) {
    $order = $apiResponse->getResult();
    echo $order;
} else {
    $errors = $apiResponse->getResult();
    var_dump($errors);
}

// Getting more response information
var_dump($apiResponse->getStatusCode());
var_dump($apiResponse->getHeaders());
