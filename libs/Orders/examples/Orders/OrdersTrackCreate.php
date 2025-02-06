<?php

require_once "../../vendor/autoload.php";

use OrdersLib\OrdersClientBuilder;
use OrdersLib\Authentication\ClientCredentialsAuthCredentialsBuilder;
use OrdersLib\Models\Builders\OrderTrackerRequestBuilder;
use OrdersLib\Exceptions\ApiException;
use OrdersLib\Environment;

$id = 'id0';

$body = OrderTrackerRequestBuilder::init(
    'capture_id8'
)
    ->notifyPayer(false)
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
    $result = $client->getOrdersController()->ordersTrackCreate(
        $id,
        $body
    );
    echo $result;
} catch (ApiException $exp) {
    echo "Caught $exp";
}
