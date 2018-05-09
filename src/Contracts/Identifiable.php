<?php

namespace Omneo\Apparel21\Contracts;

use Illuminate\Support\Collection;

interface Identifiable
{
    /**
     * Return collection of identifiers.
     *
     * @return Collection
     */
    public function getIdentifiers();

    /**
     * Set collection of identifiers.
     *
     * @param  Collection $identifiers
     * @return static
     */
    public function setIdentifiers(Collection $identifiers);
}