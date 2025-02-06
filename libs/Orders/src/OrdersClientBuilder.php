<?php

declare(strict_types=1);

/*
 * OrdersLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace OrdersLib;

use Core\Types\Sdk\CoreCallback;
use Core\Utils\CoreHelper;
use OrdersLib\Authentication\ClientCredentialsAuthCredentialsBuilder;
use OrdersLib\Models\OAuthToken;

class OrdersClientBuilder
{
    /**
     * @var array
     */
    private $config = [];

    /**
     * @phan-suppress PhanEmptyPrivateMethod
     */
    private function __construct()
    {
    }

    public static function init(): self
    {
        return new self();
    }

    public function getConfiguration(): array
    {
        return CoreHelper::clone($this->config);
    }

    public function timeout(int $timeout): self
    {
        $this->config['timeout'] = $timeout;
        return $this;
    }

    public function enableRetries(bool $enableRetries): self
    {
        $this->config['enableRetries'] = $enableRetries;
        return $this;
    }

    public function numberOfRetries(int $numberOfRetries): self
    {
        $this->config['numberOfRetries'] = $numberOfRetries;
        return $this;
    }

    public function retryInterval(float $retryInterval): self
    {
        $this->config['retryInterval'] = $retryInterval;
        return $this;
    }

    public function backOffFactor(float $backOffFactor): self
    {
        $this->config['backOffFactor'] = $backOffFactor;
        return $this;
    }

    public function maximumRetryWaitTime(int $maximumRetryWaitTime): self
    {
        $this->config['maximumRetryWaitTime'] = $maximumRetryWaitTime;
        return $this;
    }

    public function retryOnTimeout(bool $retryOnTimeout): self
    {
        $this->config['retryOnTimeout'] = $retryOnTimeout;
        return $this;
    }

    /**
     * @param int[] $httpStatusCodesToRetry
     *
     * @return $this
     */
    public function httpStatusCodesToRetry(array $httpStatusCodesToRetry): self
    {
        $this->config['httpStatusCodesToRetry'] = $httpStatusCodesToRetry;
        return $this;
    }

    /**
     * @param string[] $httpMethodsToRetry
     *
     * @return $this
     */
    public function httpMethodsToRetry(array $httpMethodsToRetry): self
    {
        $this->config['httpMethodsToRetry'] = $httpMethodsToRetry;
        return $this;
    }

    public function environment(string $environment): self
    {
        $this->config['environment'] = $environment;
        return $this;
    }

    /**
     * @see OrdersClientBuilder::clientCredentialsAuthCredentials
     *
     * @deprecated This builder setter is deprecated. Checkout the see also section for its
     *             alternate.
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
     * @see OrdersClientBuilder::clientCredentialsAuthCredentials
     *
     * @deprecated This builder setter is deprecated. Checkout the see also section for its
     *             alternate.
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
     * @see OrdersClientBuilder::clientCredentialsAuthCredentials
     *
     * @deprecated This builder setter is deprecated. Checkout the see also section for its
     *             alternate.
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

    public function clientCredentialsAuthCredentials(
        ClientCredentialsAuthCredentialsBuilder $clientCredentialsAuth
    ): self {
        $this->config = array_merge($this->config, $clientCredentialsAuth->getConfiguration());
        return $this;
    }

    public function httpCallback($httpCallback): self
    {
        if (!$httpCallback instanceof CoreCallback) {
            return $this;
        }
        $this->config['httpCallback'] = $httpCallback;
        return $this;
    }

    public function build(): OrdersClient
    {
        return new OrdersClient($this->config);
    }
}
