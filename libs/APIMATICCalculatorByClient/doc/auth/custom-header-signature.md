
# Custom Header Signature



Documentation for accessing and setting credentials for httpHeader.

## Auth Credentials

| Name | Type | Description | Setter | Getter |
|  --- | --- | --- | --- | --- |
| environment | `string` | api-token environment custom header auth | `environment` | `getEnvironment()` |



**Note:** Auth credentials can be set using `CustomHeaderAuthenticationCredentialsBuilder::init()` in `customHeaderAuthenticationCredentials` method in the client builder and accessed through `getCustomHeaderAuthenticationCredentials` method in the client instance.

## Usage Example

### Client Initialization

You must provide credentials in the client as shown in the following code snippet.

```php
$client = APIMATICCalculatorByClientClientBuilder::init()
    ->customHeaderAuthenticationCredentials(
        CustomHeaderAuthenticationCredentialsBuilder::init(
            'environment'
        )
    )
    ->build();
```


