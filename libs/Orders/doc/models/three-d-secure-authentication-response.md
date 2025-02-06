
# Three D Secure Authentication Response

Results of 3D Secure Authentication.

## Structure

`ThreeDSecureAuthenticationResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `authenticationStatus` | [`?string(PAResStatusEnum)`](../../doc/models/pa-res-status-enum.md) | Optional | Transactions status result identifier. The outcome of the issuer's authentication.<br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `255`, *Pattern*: `^[0-9A-Z_]+$` | getAuthenticationStatus(): ?string | setAuthenticationStatus(?string authenticationStatus): void |
| `enrollmentStatus` | [`?string(EnrollmentStatusEnum)`](../../doc/models/enrollment-status-enum.md) | Optional | Status of Authentication eligibility.<br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `255`, *Pattern*: `^[0-9A-Z_]+$` | getEnrollmentStatus(): ?string | setEnrollmentStatus(?string enrollmentStatus): void |

## Example (as JSON)

```json
{
  "authentication_status": "C",
  "enrollment_status": "Y"
}
```

