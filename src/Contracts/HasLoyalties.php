<?php

namespace Omneo\Apparel21\Contracts;

use Illuminate\Support\Collection;

interface HasLoyalties
{
    /**
     * Return collection of loyalties.
     *
     * @return Collection
     */
    public function getLoyalties();

    /**
     * Set collection of loyalties.
     *
     * @param  Collection $loyalties
     * @return static
     */
    public function setLoyalties(Collection $loyalties);
}