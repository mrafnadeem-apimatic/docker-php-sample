<?php

require_once "../../vendor/autoload.php";

use OrdersLib\OrdersClientBuilder;
use OrdersLib\Authentication\ClientCredentialsAuthCredentialsBuilder;
use OrdersLib\Exceptions\ApiException;
use OrdersLib\Environment;

$id = 'id0';

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
    $result = $client->getOrdersController()->ordersGet($id);
    echo $result;
} catch (ApiException $exp) {
    echo "Caught $exp";
}
