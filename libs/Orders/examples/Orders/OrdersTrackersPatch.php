<?php

require_once "../../vendor/autoload.php";

use OrdersLib\OrdersClientBuilder;
use OrdersLib\Authentication\ClientCredentialsAuthCredentialsBuilder;
use OrdersLib\Models\Builders\PatchBuilder;
use OrdersLib\Models\PatchOpEnum;
use OrdersLib\Exceptions\ApiException;
use OrdersLib\Environment;

$id = 'id0';

$trackerId = 'tracker_id2';

$body = [
    PatchBuilder::init(
        PatchOpEnum::ADD
    )->build()
];

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
    $client->getOrdersController()->ordersTrackersPatch(
        $id,
        $trackerId,
        $body
    );
} catch (ApiException $exp) {
    echo "Caught $exp";
}
