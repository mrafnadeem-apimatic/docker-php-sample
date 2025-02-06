<?php

require_once "../../vendor/autoload.php";

use OrdersLib\OrdersClientBuilder;
use OrdersLib\Authentication\ClientCredentialsAuthCredentialsBuilder;
use OrdersLib\Exceptions\ApiException;
use OrdersLib\Environment;

$id = 'id0';

$prefer = 'return=minimal';

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
    $result = $client->getOrdersController()->ordersCapture(
        $id,
        null,
        $prefer
    );
    echo $result;
} catch (ApiException $exp) {
    echo "Caught $exp";
}
