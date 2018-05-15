<?php

namespace Omneo\Apparel21\Contracts;

use Illuminate\Support\Collection;

interface Person
{
    /**
     * Return first name.
     *
     * @return string
     */
    public function getFirstName();

    /**
     * Set first name.
     *
     * @param  string $firstName
     * @return static
     */
    public function setFirstName($firstName = null);

    /**
     * Return last name.
     *
     * @return string
     */
    public function getLastName();

    /**
     * Set last name.
     *
     * @param  string $lastName
     * @return static
     */
    public function setLastName($lastName = null);

    /**
     * Return contacts collection.
     *
     * @return Collection
     */
    public function getContacts();

    /**
     * Set contacts collection.
     *
     * @param  Collection $contacts
     * @return static
     */
    public function setContacts(Collection $contacts);

    /**
     * Return address collection.
     *
     * @return Collection
     */
    public function getAddresses();

    /**
     * Set address collection.
     *
     * @param  Collection $addresses
     * @return static
     */
    public function setAddresses(Collection $addresses);
}