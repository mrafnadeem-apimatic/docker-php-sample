<?php

declare(strict_types=1);

/*
 * APIMATICCalculatorByClientLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace APIMATICCalculatorByClientLib;

use APIMATICCalculatorByClientLib\Authentication\CustomHeaderAuthenticationCredentialsBuilder;
use APIMATICCalculatorByClientLib\Authentication\CustomHeaderAuthenticationManager;
use APIMATICCalculatorByClientLib\Controllers\SimpleCalculatorController;
use APIMATICCalculatorByClientLib\Utils\CompatibilityConverter;
use Core\ClientBuilder;
use Core\Request\Parameters\TemplateParam;
use Core\Utils\CoreHelper;
use Unirest\Configuration;
use Unirest\HttpClient;

class APIMATICCalculatorByClientClient implements ConfigurationInterface
{
    private $simpleCalculator;

    private $customHeaderAuthenticationManager;

    private $config;

    private $client;

    /**
     * @see APIMATICCalculatorByClientClientBuilder::init()
     * @see APIMATICCalculatorByClientClientBuilder::build()
     *
     * @param array $config
     */
    public function __construct(array $config = [])
    {
        $this->config = array_merge(ConfigurationDefaults::_ALL, CoreHelper::clone($config));
        $this->customHeaderAuthenticationManager = new CustomHeaderAuthenticationManager($this->config);
        $this->client = ClientBuilder::init(new HttpClient(Configuration::init($this)))
            ->converter(new CompatibilityConverter())
            ->jsonHelper(ApiHelper::getJsonHelper())
            ->apiCallback($this->config['httpCallback'] ?? null)
            ->userAgent('APIMATIC 3.0')
            ->globalConfig($this->getGlobalConfiguration())
            ->serverUrls(self::ENVIRONMENT_MAP[$this->getEnvironment()], Server::CALCULATOR)
            ->authManagers(['httpHeader' => $this->customHeaderAuthenticationManager])
            ->build();
    }

    /**
     * Create a builder with the current client's configurations.
     *
     * @return APIMATICCalculatorByClientClientBuilder APIMATICCalculatorByClientClientBuilder instance
     */
    public function toBuilder(): APIMATICCalculatorByClientClientBuilder
    {
        $builder = APIMATICCalculatorByClientClientBuilder::init()
            ->timeout($this->getTimeout())
            ->enableRetries($this->shouldEnableRetries())
            ->numberOfRetries($this->getNumberOfRetries())
            ->retryInterval($this->getRetryInterval())
            ->backOffFactor($this->getBackOffFactor())
            ->maximumRetryWaitTime($this->getMaximumRetryWaitTime())
            ->retryOnTimeout($this->shouldRetryOnTimeout())
            ->httpStatusCodesToRetry($this->getHttpStatusCodesToRetry())
            ->httpMethodsToRetry($this->getHttpMethodsToRetry())
            ->environment($this->getEnvironment())
            ->environment3($this->getEnvironment3())
            ->httpCallback($this->config['httpCallback'] ?? null);

        $customHeaderAuthentication = $this->getCustomHeaderAuthenticationCredentialsBuilder();
        if ($customHeaderAuthentication != null) {
            $builder->customHeaderAuthenticationCredentials($customHeaderAuthentication);
        }
        return $builder;
    }

    public function getTimeout(): int
    {
        return $this->config['timeout'] ?? ConfigurationDefaults::TIMEOUT;
    }

    public function shouldEnableRetries(): bool
    {
        return $this->config['enableRetries'] ?? ConfigurationDefaults::ENABLE_RETRIES;
    }

    public function getNumberOfRetries(): int
    {
        return $this->config['numberOfRetries'] ?? ConfigurationDefaults::NUMBER_OF_RETRIES;
    }

    public function getRetryInterval(): float
    {
        return $this->config['retryInterval'] ?? ConfigurationDefaults::RETRY_INTERVAL;
    }

    public function getBackOffFactor(): float
    {
        return $this->config['backOffFactor'] ?? ConfigurationDefaults::BACK_OFF_FACTOR;
    }

    public function getMaximumRetryWaitTime(): int
    {
        return $this->config['maximumRetryWaitTime'] ?? ConfigurationDefaults::MAXIMUM_RETRY_WAIT_TIME;
    }

    public function shouldRetryOnTimeout(): bool
    {
        return $this->config['retryOnTimeout'] ?? ConfigurationDefaults::RETRY_ON_TIMEOUT;
    }

    public function getHttpStatusCodesToRetry(): array
    {
        return $this->config['httpStatusCodesToRetry'] ?? ConfigurationDefaults::HTTP_STATUS_CODES_TO_RETRY;
    }

    public function getHttpMethodsToRetry(): array
    {
        return $this->config['httpMethodsToRetry'] ?? ConfigurationDefaults::HTTP_METHODS_TO_RETRY;
    }

    public function getEnvironment(): string
    {
        return $this->config['environment'] ?? ConfigurationDefaults::ENVIRONMENT;
    }

    public function getEnvironment3(): string
    {
        return $this->config['environment3'] ?? ConfigurationDefaults::ENVIRONMENT_3;
    }

    public function getCustomHeaderAuthenticationCredentials(): CustomHeaderAuthenticationCredentials
    {
        return $this->customHeaderAuthenticationManager;
    }

    public function getCustomHeaderAuthenticationCredentialsBuilder(): ?CustomHeaderAuthenticationCredentialsBuilder
    {
        if (empty($this->customHeaderAuthenticationManager->getEnvironment())) {
            return null;
        }
        return CustomHeaderAuthenticationCredentialsBuilder::init(
            $this->customHeaderAuthenticationManager->getEnvironment()
        );
    }

    /**
     * Get the client configuration as an associative array
     *
     * @see APIMATICCalculatorByClientClientBuilder::getConfiguration()
     */
    public function getConfiguration(): array
    {
        return $this->toBuilder()->getConfiguration();
    }

    /**
     * Clone this client and override given configuration options
     *
     * @see APIMATICCalculatorByClientClientBuilder::build()
     */
    public function withConfiguration(array $config): self
    {
        return new self(array_merge($this->config, $config));
    }

    /**
     * Get the base uri for a given server in the current environment.
     *
     * @param string $server Server name
     *
     * @return string Base URI
     */
    public function getBaseUri(string $server = Server::CALCULATOR): string
    {
        return $this->client->getGlobalRequest($server)->getQueryUrl();
    }

    /**
     * Returns Simple Calculator Controller
     */
    public function getSimpleCalculatorController(): SimpleCalculatorController
    {
        if ($this->simpleCalculator == null) {
            $this->simpleCalculator = new SimpleCalculatorController($this->client);
        }
        return $this->simpleCalculator;
    }

    /**
     * Get the defined global configurations
     */
    private function getGlobalConfiguration(): array
    {
        return [TemplateParam::init('environment', $this->getEnvironment3())->dontEncode()];
    }

    /**
     * A map of all base urls used in different environments and servers
     *
     * @var array
     */
    private const ENVIRONMENT_MAP = [
        Environment::PRODUCTION => [
            Server::CALCULATOR => 'https://examples.apimatic.io/apps/calculator/{environment}'
        ]
    ];
}
