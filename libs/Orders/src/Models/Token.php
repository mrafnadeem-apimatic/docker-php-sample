<?php

declare(strict_types=1);

/*
 * OrdersLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace OrdersLib\Models;

use OrdersLib\ApiHelper;
use stdClass;

/**
 * The tokenized payment source to fund a payment.
 */
class Token implements \JsonSerializable
{
    /**
     * @var string
     */
    private $id;

    /**
     * @var string
     */
    private $type;

    /**
     * @param string $id
     * @param string $type
     */
    public function __construct(string $id, string $type)
    {
        $this->id = $id;
        $this->type = $type;
    }

    /**
     * Returns Id.
     * The PayPal-generated ID for the token.
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * Sets Id.
     * The PayPal-generated ID for the token.
     *
     * @required
     * @maps id
     */
    public function setId(string $id): void
    {
        $this->id = $id;
    }

    /**
     * Returns Type.
     * The tokenization method that generated the ID.
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * Sets Type.
     * The tokenization method that generated the ID.
     *
     * @required
     * @maps type
     * @factory \OrdersLib\Models\TokenTypeEnum::checkValue
     */
    public function setType(string $type): void
    {
        $this->type = $type;
    }

    /**
     * Converts the Token object to a human-readable string representation.
     *
     * @return string The string representation of the Token object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify('Token', ['id' => $this->id, 'type' => $this->type]);
    }

    /**
     * Encode this object to JSON
     *
     * @param bool $asArrayWhenEmpty Whether to serialize this model as an array whenever no fields
     *        are set. (default: false)
     *
     * @return array|stdClass
     */
    #[\ReturnTypeWillChange] // @phan-suppress-current-line PhanUndeclaredClassAttribute for (php < 8.1)
    public function jsonSerialize(bool $asArrayWhenEmpty = false)
    {
        $json = [];
        $json['id']   = $this->id;
        $json['type'] = TokenTypeEnum::checkValue($this->type);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
