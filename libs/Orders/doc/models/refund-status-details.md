
# Refund Status Details

The details of the refund status.

## Structure

`RefundStatusDetails`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `reason` | [`?string(RefundIncompleteReasonEnum)`](../../doc/models/refund-incomplete-reason-enum.md) | Optional | The reason why the refund has the `PENDING` or `FAILED` status. | getReason(): ?string | setReason(?string reason): void |

## Example (as JSON)

```json
{
  "reason": "ECHECK"
}
```

