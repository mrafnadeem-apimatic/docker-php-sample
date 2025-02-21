<?php

require_once "../../vendor/autoload.php";

use PaypalRestApisLib\PaypalRestApisClientBuilder;
use PaypalRestApisLib\Authentication\ClientCredentialsAuthCredentialsBuilder;
use PaypalRestApisLib\Logging\LoggingConfigurationBuilder;
use PaypalRestApisLib\Logging\RequestLoggingConfigurationBuilder;
use PaypalRestApisLib\Logging\ResponseLoggingConfigurationBuilder;
use Psr\Log\LogLevel;
use PaypalRestApisLib\Models\Builders\PaymentTokenRequestBuilder;
use PaypalRestApisLib\Models\Builders\PaymentTokenRequestPaymentSourceBuilder;
use PaypalRestApisLib\Models\Builders\VaultTokenRequestBuilder;
use PaypalRestApisLib\Models\TokenType;
use PaypalRestApisLib\Environment;

$collect = [
    'paypalRequestId' => '12345',
    'body' => PaymentTokenRequestBuilder::init(
        PaymentTokenRequestPaymentSourceBuilder::init()
            ->token(
                VaultTokenRequestBuilder::init(
                    '1234',
                    TokenType::SETUP_TOKEN
                )->build()
            )->build()
    )->build()
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

$apiResponse = $client->getVaultController()->paymentTokensCreate($collect);

if ($apiResponse->isSuccess()) {
    $paymentTokenResponse = $apiResponse->getResult();
    echo $paymentTokenResponse;
} else {
    $errors = $apiResponse->getResult();
    var_dump($errors);
}

// Getting more response information
var_dump($apiResponse->getStatusCode());
var_dump($apiResponse->getHeaders());
