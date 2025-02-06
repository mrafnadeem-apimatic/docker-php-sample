
# Vault Instruction

Base vaulting specification. The object can be extended for specific use cases within each payment_source that supports vaulting.

## Structure

`VaultInstruction`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `storeInVault` | `string` | Required, Constant | Defines how and when the payment source gets vaulted.<br>**Value**: `'ON_SUCCESS'` | getStoreInVault(): string | setStoreInVault(string storeInVault): void |

## Example (as JSON)

```json
{
  "store_in_vault": "ON_SUCCESS"
}
```

