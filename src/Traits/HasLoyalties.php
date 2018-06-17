<?php

namespace Omneo\Apparel21\Traits;

use Illuminate\Support\Collection;

trait HasLoyalties
{
    /**
     * Collection of loyalties.
     *
     * @var Collection
     */
    protected $loyalties;

    /**
     * Return collection of loyalties.
     *
     * @return Collection
     */
    public function getLoyalties()
    {
        return $this->loyalties ?: $this->loyalties = new Collection;
    }

    /**
     * Set collection of loyalties.
     *
     * @param  Collection $loyalties
     * @return static
     */
    public function setLoyalties(Collection $loyalties)
    {
        $this->loyalties = $loyalties;

        return $this;
    }
}