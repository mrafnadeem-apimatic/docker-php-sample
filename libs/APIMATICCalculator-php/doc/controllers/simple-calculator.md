# Simple Calculator

```php
$simpleCalculatorController = $client->getSimpleCalculatorController();
```

## Class Name

`SimpleCalculatorController`


# Get Calculate

Calculates the expression using the specified operation.

```php
function getCalculate(array $options): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `operation` | [`string(OperationTypeEnum)`](../../doc/models/operation-type-enum.md) | Template, Required | The operator to apply on the variables. [Example link](../../doc/models/operation-type-enum.md) |
| `x` | `float` | Query, Required | The LHS value |
| `y` | `float` | Query, Required | The RHS value |

## Response Type

This method returns a `APIMATICCalculatorLib\Utils\ApiResponse` instance. The `getResult()` method on this instance returns the response data which is of type `float`.

## Example Usage

```php
$collect = [
    'operation' => OperationTypeEnum::MULTIPLY,
    'x' => 222.14,
    'y' => 165.14
];

$apiResponse = $simpleCalculatorController->getCalculate($collect);
```

