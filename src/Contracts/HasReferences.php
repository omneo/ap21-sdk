<?php

namespace Omneo\Apparel21\Contracts;

use Illuminate\Support\Collection;

interface HasReferences
{
    /**
     * Return collection of references.
     *
     * @return Collection
     */
    public function getReferences();

    /**
     * Set collection of references.
     *
     * @param  Collection $references
     * @return static
     */
    public function setReferences(Collection $references);
}