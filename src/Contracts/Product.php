<?php

namespace Omneo\Apparel21\Contracts;

interface Product
{
    /**
     * Return human readable title for product.
     *
     * @return string
     */
    public function getTitle();

    /**
     * Set human readable title for product.
     *
     * @param  string $title
     * @return static
     */
    public function setTitle($title = null);

    /**
     * Return human readable description for product.
     *
     * @return string
     */
    public function getDescription();

    /**
     * Set human readable description for product.
     *
     * @param  string $description
     * @return static
     */
    public function setDescription($description = null);
}