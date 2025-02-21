<?php

declare(strict_types=1);

/*
 * PaypalRestApisLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PaypalRestApisLib\Models;

use PaypalRestApisLib\ApiHelper;
use stdClass;

/**
 * The name of the party.
 */
class Name implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $givenName;

    /**
     * @var string|null
     */
    private $surname;

    /**
     * Returns Given Name.
     * When the party is a person, the party's given, or first, name.
     */
    public function getGivenName(): ?string
    {
        return $this->givenName;
    }

    /**
     * Sets Given Name.
     * When the party is a person, the party's given, or first, name.
     *
     * @maps given_name
     */
    public function setGivenName(?string $givenName): void
    {
        $this->givenName = $givenName;
    }

    /**
     * Returns Surname.
     * When the party is a person, the party's surname or family name. Also known as the last name.
     * Required when the party is a person. Use also to store multiple surnames including the matronymic,
     * or mother's, surname.
     */
    public function getSurname(): ?string
    {
        return $this->surname;
    }

    /**
     * Sets Surname.
     * When the party is a person, the party's surname or family name. Also known as the last name.
     * Required when the party is a person. Use also to store multiple surnames including the matronymic,
     * or mother's, surname.
     *
     * @maps surname
     */
    public function setSurname(?string $surname): void
    {
        $this->surname = $surname;
    }

    /**
     * Converts the Name object to a human-readable string representation.
     *
     * @return string The string representation of the Name object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify('Name', ['givenName' => $this->givenName, 'surname' => $this->surname]);
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
        if (isset($this->givenName)) {
            $json['given_name'] = $this->givenName;
        }
        if (isset($this->surname)) {
            $json['surname']    = $this->surname;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
