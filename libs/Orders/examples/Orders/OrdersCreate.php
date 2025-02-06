<?php

require_once "../../vendor/autoload.php";

use OrdersLib\OrdersClientBuilder;
use OrdersLib\Authentication\ClientCredentialsAuthCredentialsBuilder;
use OrdersLib\Models\Builders\OAuthTokenBuilder;
use OrdersLib\Models\Builders\OrderRequestBuilder;
use OrdersLib\Models\CheckoutPaymentIntentEnum;
use OrdersLib\Models\Builders\PurchaseUnitRequestBuilder;
use OrdersLib\Models\Builders\AmountWithBreakdownBuilder;
use OrdersLib\Models\Builders\PaypalMockResponseSchemaBuilder;
use OrdersLib\Exceptions\ApiException;
use OrdersLib\Environment;

$body = OrderRequestBuilder::init(
    CheckoutPaymentIntentEnum::CAPTURE,
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
)->build();

$payPalRequestId = 'PayPal-Request-Id';

$payPalClientMetadataId = 'PayPal-Client-Metadata-Id';

$prefer = 'return=minimal';

$payPalMockResponse = PaypalMockResponseSchemaBuilder::init(
    'DUPLICATE_INVOICE_ID'
)->build();

$client = OrdersClientBuilder::init()
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
    ->environment(Environment::PRODUCTION)
    ->build();

try {
    $result = $client->getOrdersController()->ordersCreate(
        $body,
        $payPalRequestId,
        null,
        $payPalClientMetadataId,
        $prefer,
        $payPalMockResponse
    );
    echo $result;
} catch (ApiException $exp) {
    echo "Caught $exp";
}
