<?php

require_once "../../vendor/autoload.php";

use OrdersLib\OrdersClientBuilder;
use OrdersLib\Authentication\ClientCredentialsAuthCredentialsBuilder;
use OrdersLib\Models\Builders\ConfirmOrderRequestBuilder;
use OrdersLib\Models\Builders\PaymentSourceBuilder;
use OrdersLib\Models\ProcessingInstructionEnum;
use OrdersLib\Exceptions\ApiException;
use OrdersLib\Environment;

$id = 'id0';

$prefer = 'return=minimal';

$body = ConfirmOrderRequestBuilder::init(
    PaymentSourceBuilder::init()->build()
)
    ->processingInstruction(ProcessingInstructionEnum::NO_INSTRUCTION)
    ->build();

$client = OrdersClientBuilder::init()
    ->clientCredentialsAuthCredentials(
        ClientCredentialsAuthCredentialsBuilder::init(
            'OAuthClientId',
            'OAuthClientSecret'
        )
    )
    ->environment(Environment::PRODUCTION)
    ->build();

try {
    $result = $client->getOrdersController()->ordersConfirm(
        $id,
        null,
        $prefer,
        $body
    );
    echo $result;
} catch (ApiException $exp) {
    echo "Caught $exp";
}
