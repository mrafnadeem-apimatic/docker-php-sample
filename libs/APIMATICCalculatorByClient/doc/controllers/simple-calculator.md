# Simple Calculator

```php
$simpleCalculatorController = $client->getSimpleCalculatorController();
```

## Class Name

`SimpleCalculatorController`


# Get Calculate by Client

Calculates the expression using the specified operation in client.

```php
function getCalculateByClient(array $options): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `x` | `float` | Query, Required | The LHS value |
| `y` | `float` | Query, Required | The RHS value |

## Response Type

This method returns an [`ApiResponse`](../../doc/api-response.md) instance. The `getResult()` method on this instance returns the response data which is of type `float`.

## Example Usage

```php
$collect = [
    'x' => 222.14,
    'y' => 165.14
];

$apiResponse = $simpleCalculatorController->getCalculateByClient($collect);
```

