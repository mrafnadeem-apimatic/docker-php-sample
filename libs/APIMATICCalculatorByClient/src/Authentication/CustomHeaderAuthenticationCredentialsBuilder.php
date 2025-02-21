<?php

declare(strict_types=1);

/*
 * APIMATICCalculatorByClientLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace APIMATICCalculatorByClientLib\Authentication;

use Core\Utils\CoreHelper;

/**
 * Utility class for initializing CustomHeaderAuthentication security credentials.
 */
class CustomHeaderAuthenticationCredentialsBuilder
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
     * Initializer for CustomHeaderAuthenticationCredentialsBuilder
     *
     * @param string $environment
     */
    public static function init(string $environment): self
    {
        return new self(['environment2' => $environment]);
    }

    /**
     * Setter for Environment.
     *
     * @param string $environment
     *
     * @return $this
     */
    public function environment(string $environment): self
    {
        $this->config['environment2'] = $environment;
        return $this;
    }

    public function getConfiguration(): array
    {
        return CoreHelper::clone($this->config);
    }
}
