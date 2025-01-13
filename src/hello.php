<?php
require_once "vendor/autoload.php";

use APIMATICCalculatorLib\APIMATICCalculatorClientBuilder;
use APIMATICCalculatorLib\Http\HttpCallBack;
use APIMATICCalculatorLib\Models\OperationTypeEnum;
use APIMATICCalculatorLib\Exceptions\ApiException;
use APIMATICCalculatorLib\Environment;
use Core\Types\Sdk\CoreContext;
use Core\Types\Sdk\CoreRequest;

// Log function to display timestamp
// Log function to display timestamp with microseconds
function log_timestamp($message) {
  $microTime = microtime(true);
  $dateTime = DateTime::createFromFormat('U.u', $microTime);
  echo $message . ': ' . $dateTime->format('Y-m-d H:i:s.u') . '<br>';
}

// Create HttpCallback object
$httpCallback = new HttpCallBack(
    function (CoreRequest $request) {
        // Log the time of the request
        log_timestamp('Request sent at');
    },
    function (CoreContext $httpContext) {
        // Log the time of the response
        log_timestamp('Response received at');
    }
);

$collect = [
    'operation' => OperationTypeEnum::DIVIDE,
    'x' => 4,
    'y' => 2
];

$client = APIMATICCalculatorClientBuilder::init()
    ->environment(Environment::PRODUCTION)
    ->httpCallback($httpCallback)
    ->build();

try {
    $result = $client->getSimpleCalculatorController()->getCalculate($collect);
} catch (ApiException $exp) {
    echo "Caught $exp";
}
?>
