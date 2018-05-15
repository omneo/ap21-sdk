<?php

namespace Omneo\Apparel21\Traits;

trait Address
{
    /**
     * Contact name.
     *
     * @var string
     */
    protected $contactName;

    /**
     * Company name.
     *
     * @var string
     */
    protected $companyName;

    /**
     * Type.
     *
     * @var string
     */
    protected $type;

    /**
     * Line 1.
     *
     * @var string
     */
    protected $line1;

    /**
     * Line 2.
     *
     * @var string
     */
    protected $line2;

    /**
     * City.
     *
     * @var string
     */
    protected $city;

    /**
     * State.
     *
     * @var string
     */
    protected $state;

    /**
     * Postcode.
     *
     * @var string
     */
    protected $postcode;

    /**
     * Country.
     *
     * @var string
     */
    protected $country;

    /**
     * Get contact name.
     *
     * @return string
     */
    public function getContactName()
    {
        return $this->contactName;
    }

    /**
     * Set contact name.
     *
     * @param  string $contactName
     * @return static
     */
    public function setContactName($contactName = null)
    {
        $this->contactName = $contactName;

        return $this;
    }

    /**
     * Get company name.
     *
     * @return string
     */
    public function getCompanyName()
    {
        return $this->companyName;
    }

    /**
     * Set company name.
     *
     * @param  string $companyName
     * @return static
     */
    public function setCompanyName($companyName = null)
    {
        $this->companyName = $companyName;

        return $this;
    }

    /**
     * Get type.
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set type.
     *
     * @param  string $type
     * @return static
     */
    public function setType($type = null)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get line 1.
     *
     * @return string
     */
    public function getLine1()
    {
        return $this->line1;
    }

    /**
     * Set line 1.
     *
     * @param  string $line1
     * @return static
     */
    public function setLine1($line1 = null)
    {
        $this->line1 = $line1;

        return $this;
    }

    /**
     * Get line 2.
     *
     * @return string
     */
    public function getLine2()
    {
        return $this->line2;
    }

    /**
     * Set line 2.
     *
     * @param  string $line2
     * @return static
     */
    public function setLine2($line2 = null)
    {
        $this->line2 = $line2;

        return $this;
    }

    /**
     * Get city.
     *
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set city.
     *
     * @param  string $city
     * @return static
     */
    public function setCity($city = null)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get state.
     *
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Set state.
     *
     * @param  string $state
     * @return static
     */
    public function setState($state = null)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * Get postcode.
     *
     * @return string
     */
    public function getPostcode()
    {
        return $this->postcode;
    }

    /**
     * Set postcode.
     *
     * @param  string $postcode
     * @return mixed
     */
    public function setPostcode($postcode = null)
    {
        $this->postcode = $postcode;

        return $this;
    }

    /**
     * Get country.
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set country.
     *
     * @param  string $country
     * @return static
     */
    public function setCountry($country = null)
    {
        $this->country = $country;

        return $this;
    }
}