<?php

require_once "../../vendor/autoload.php";

use PaypalRestApisLib\PaypalRestApisClientBuilder;
use PaypalRestApisLib\Authentication\ClientCredentialsAuthCredentialsBuilder;
use PaypalRestApisLib\Models\Builders\OAuthTokenBuilder;
use PaypalRestApisLib\Logging\LoggingConfigurationBuilder;
use PaypalRestApisLib\Logging\RequestLoggingConfigurationBuilder;
use PaypalRestApisLib\Logging\ResponseLoggingConfigurationBuilder;
use Psr\Log\LogLevel;
use PaypalRestApisLib\Models\Builders\OrderRequestBuilder;
use PaypalRestApisLib\Models\CheckoutPaymentIntent;
use PaypalRestApisLib\Models\Builders\PurchaseUnitRequestBuilder;
use PaypalRestApisLib\Models\Builders\AmountWithBreakdownBuilder;
use PaypalRestApisLib\Environment;

$collect = [
    'body' => OrderRequestBuilder::init(
        CheckoutPaymentIntent::CAPTURE,
        [
            PurchaseUnitRequestBuilder::init(
                AmountWithBreakdownBuilder::init(
                    'USD',
                    '100.00'
                )->build()
            )
                ->referenceId('d9f80740-38f0-11e8-b467-0ed5f89f718b')
                ->build()
        ]
    )->build(),
    'paypalRequestId' => 'PayPal-Request-Id',
    'paypalClientMetadataId' => 'PayPal-Client-Metadata-Id',
    'prefer' => 'return=minimal'
];

$client = PaypalRestApisClientBuilder::init()
    ->clientCredentialsAuthCredentials(
        ClientCredentialsAuthCredentialsBuilder::init(
            'OAuthClientId',
            'OAuthClientSecret'
        )
            ->oAuthToken(
                OAuthTokenBuilder::init(
                    'AccessToken',
                    'SandboxToken'
                )
                    ->expiresIn(3600)
                    ->refreshToken('RefreshToken')
                    ->build()
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

$apiResponse = $client->getOrdersController()->ordersCreate($collect);

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
