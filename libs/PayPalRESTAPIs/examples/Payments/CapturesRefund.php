<?php

require_once "../../vendor/autoload.php";

use PaypalRestApisLib\PaypalRestApisClientBuilder;
use PaypalRestApisLib\Authentication\ClientCredentialsAuthCredentialsBuilder;
use PaypalRestApisLib\Logging\LoggingConfigurationBuilder;
use PaypalRestApisLib\Logging\RequestLoggingConfigurationBuilder;
use PaypalRestApisLib\Logging\ResponseLoggingConfigurationBuilder;
use Psr\Log\LogLevel;
use PaypalRestApisLib\Models\Builders\RefundRequestBuilder;
use PaypalRestApisLib\Models\Builders\MoneyBuilder;
use PaypalRestApisLib\Environment;

$collect = [
    'captureId' => '1234',
    'paypalRequestId' => '1234',
    'prefer' => 'return=minimal',
    'paypalAuthAssertion' => 'PayPal-Auth-Assertion',
    'body' => RefundRequestBuilder::init()
        ->amount(
            MoneyBuilder::init(
                'USD',
                '1.44'
            )->build()
        )
        ->noteToPayer('Defective product')
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

$apiResponse = $client->getPaymentsController()->capturesRefund($collect);

if ($apiResponse->isSuccess()) {
    $refund = $apiResponse->getResult();
    echo $refund;
} else {
    $errors = $apiResponse->getResult();
    var_dump($errors);
}

// Getting more response information
var_dump($apiResponse->getStatusCode());
var_dump($apiResponse->getHeaders());
