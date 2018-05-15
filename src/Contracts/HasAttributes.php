<?php

namespace Omneo\Apparel21\Contracts;

use Illuminate\Support\Collection;

interface HasAttributes
{
    /**
     * Return collection of attributes.
     *
     * @return Collection
     */
    public function getAttributes();

    /**
     * Set collection of attributes.
     *
     * @param  Collection $attributes
     * @return static
     */
    public function setAttributes(Collection $attributes);
}