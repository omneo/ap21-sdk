<?php

namespace Omneo\Apparel21\Traits;

use Illuminate\Support\Collection;

trait HasAttributes
{
    /**
     * Collection of attributes.
     *
     * @var Collection
     */
    protected $attributes;

    /**
     * Return collection of attributes.
     *
     * @return Collection
     */
    public function getAttributes()
    {
        return $this->attributes ?: $this->attributes = new Collection;
    }

    /**
     * Set collection of attributes.
     *
     * @param  Collection $attributes
     * @return static
     */
    public function setAttributes(Collection $attributes)
    {
        $this->attributes = $attributes;

        return $this;
    }
}