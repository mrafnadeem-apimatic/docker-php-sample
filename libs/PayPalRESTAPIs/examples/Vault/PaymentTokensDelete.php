<?php

require_once "../../vendor/autoload.php";

use PaypalRestApisLib\PaypalRestApisClientBuilder;
use PaypalRestApisLib\Authentication\ClientCredentialsAuthCredentialsBuilder;
use PaypalRestApisLib\Logging\LoggingConfigurationBuilder;
use PaypalRestApisLib\Logging\RequestLoggingConfigurationBuilder;
use PaypalRestApisLib\Logging\ResponseLoggingConfigurationBuilder;
use Psr\Log\LogLevel;
use PaypalRestApisLib\Environment;

$id = 'id0';

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

$apiResponse = $client->getVaultController()->paymentTokensDelete($id);

if ($apiResponse->isError()) {
    $errors = $apiResponse->getResult();
    var_dump($errors);
}

// Getting more response information
var_dump($apiResponse->getStatusCode());
var_dump($apiResponse->getHeaders());
