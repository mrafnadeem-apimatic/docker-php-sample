<?php

declare(strict_types=1);

/*
 * OrdersLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace OrdersLib\Models\Builders;

use Core\Utils\CoreHelper;
use OrdersLib\Models\ActivityTimestamps;

/**
 * Builder for model ActivityTimestamps
 *
 * @see ActivityTimestamps
 */
class ActivityTimestampsBuilder
{
    /**
     * @var ActivityTimestamps
     */
    private $instance;

    private function __construct(ActivityTimestamps $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Activity Timestamps Builder object.
     */
    public static function init(): self
    {
        return new self(new ActivityTimestamps());
    }

    /**
     * Sets create time field.
     *
     * @param string|null $value
     */
    public function createTime(?string $value): self
    {
        $this->instance->setCreateTime($value);
        return $this;
    }

    /**
     * Sets update time field.
     *
     * @param string|null $value
     */
    public function updateTime(?string $value): self
    {
        $this->instance->setUpdateTime($value);
        return $this;
    }

    /**
     * Initializes a new Activity Timestamps object.
     */
    public function build(): ActivityTimestamps
    {
        return CoreHelper::clone($this->instance);
    }
}
