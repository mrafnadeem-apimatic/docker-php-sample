<?php

declare(strict_types=1);

/*
 * PaypalRestApisLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PaypalRestApisLib\Authentication;

use Core\Utils\CoreHelper;
use PaypalRestApisLib\Models\OAuthToken;

/**
 * Utility class for initializing ClientCredentialsAuth security credentials.
 */
class ClientCredentialsAuthCredentialsBuilder
{
    /**
     * @var array
     */
    private $config;

    private function __construct(array $config)
    {
        $this->config = $config;
    }

    /**
     * Initializer for ClientCredentialsAuthCredentialsBuilder
     *
     * @param string $oAuthClientId
     * @param string $oAuthClientSecret
     */
    public static function init(string $oAuthClientId, string $oAuthClientSecret): self
    {
        return new self(['oAuthClientId' => $oAuthClientId, 'oAuthClientSecret' => $oAuthClientSecret]);
    }

    /**
     * Setter for OAuthClientId.
     *
     * @param string $oAuthClientId
     *
     * @return $this
     */
    public function oAuthClientId(string $oAuthClientId): self
    {
        $this->config['oAuthClientId'] = $oAuthClientId;
        return $this;
    }

    /**
     * Setter for OAuthClientSecret.
     *
     * @param string $oAuthClientSecret
     *
     * @return $this
     */
    public function oAuthClientSecret(string $oAuthClientSecret): self
    {
        $this->config['oAuthClientSecret'] = $oAuthClientSecret;
        return $this;
    }

    /**
     * Setter for OAuthToken.
     *
     * @param OAuthToken|null $oAuthToken
     *
     * @return $this
     */
    public function oAuthToken(?OAuthToken $oAuthToken): self
    {
        $this->config['oAuthToken'] = $oAuthToken;
        return $this;
    }

    /**
     * Setter for clock skew time in seconds applied while checking the OAuth Token expiry.
     *
     * @param int $oAuthClockSkew
     *
     * @return $this
     */
    public function oAuthClockSkew(int $oAuthClockSkew): self
    {
        $this->config['Oauth2-ClockSkew'] = $oAuthClockSkew;
        return $this;
    }

    /**
     * Setter for the OAuthTokenProvider callable with 2 arguments. Arg1 will be the last OAuthToken
     * instance, while Arg2 will be an instance of ClientCredentialsAuthManager. The return type of
     * callable should be an instance of OAuthToken model.
     *
     * @param callable(OAuthToken, ClientCredentialsAuthManager): OAuthToken $oAuthTokenProvider
     *
     * @return $this
     */
    public function oAuthTokenProvider(callable $oAuthTokenProvider): self
    {
        $this->config['Oauth2-TokenProvider'] = $oAuthTokenProvider;
        return $this;
    }

    /**
     * Setter for the OAuthOnTokenUpdate callable with the updated OAuthToken instance as the only argument.
     * Here the return type of callable should be void
     *
     * @param callable(OAuthToken): void $oAuthOnTokenUpdate
     *
     * @return $this
     */
    public function oAuthOnTokenUpdate(callable $oAuthOnTokenUpdate): self
    {
        $this->config['Oauth2-OnTokenUpdate'] = $oAuthOnTokenUpdate;
        return $this;
    }

    public function getConfiguration(): array
    {
        return CoreHelper::clone($this->config);
    }
}
