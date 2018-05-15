<?php

namespace Omneo\Apparel21\Traits;

trait Product
{
    /**
     * Human readable title for product.
     *
     * @var string
     */
    protected $title;

    /**
     * Human readable description for product.
     *
     * @var string
     */
    protected $description;

    /**
     * Return human readable name for product.
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set human readable title for product.
     *
     * @param  string $title
     * @return static
     */
    public function setTitle($title = null)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Return human readable description for sellable.
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set human readable description for sellable.
     *
     * @param  string $description
     * @return static
     */
    public function setDescription($description = null)
    {
        $this->description = $description;

        return $this;
    }
}