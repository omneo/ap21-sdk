<?php

namespace Omneo\Apparel21\Contracts;

interface Address
{
    /**
     * Get contact name.
     *
     * @return string
     */
    public function getContactName();

    /**
     * Set contact name.
     *
     * @param  string $contactName
     * @return static
     */
    public function setContactName($contactName = null);

    /**
     * Get company name.
     *
     * @return string
     */
    public function getCompanyName();

    /**
     * Set company name.
     *
     * @param  string $companyName
     * @return static
     */
    public function setCompanyName($companyName = null);

    /**
     * Get type.
     *
     * @return string
     */
    public function getType();

    /**
     * Set type.
     *
     * @param  string $type
     * @return static
     */
    public function setType($type = null);

    /**
     * Get line 1.
     *
     * @return string
     */
    public function getLine1();

    /**
     * Set line 1.
     *
     * @param  string $line1
     * @return static
     */
    public function setLine1($line1 = null);

    /**
     * Get line 2.
     *
     * @return string
     */
    public function getLine2();

    /**
     * Set line 2.
     *
     * @param  string $line2
     * @return static
     */
    public function setLine2($line2 = null);

    /**
     * Get city.
     *
     * @return string
     */
    public function getCity();

    /**
     * Set city.
     *
     * @param  string $city
     * @return static
     */
    public function setCity($city = null);

    /**
     * Get state.
     *
     * @return string
     */
    public function getState();

    /**
     * Set state.
     *
     * @param  string $state
     * @return static
     */
    public function setState($state = null);

    /**
     * Get postcode.
     *
     * @return string
     */
    public function getPostcode();

    /**
     * Set postcode.
     *
     * @param  string $postcode
     * @return mixed
     */
    public function setPostcode($postcode = null);

    /**
     * Get country.
     *
     * @return string
     */
    public function getCountry();

    /**
     * Set country.
     *
     * @param  string $country
     * @return static
     */
    public function setCountry($country = null);
}