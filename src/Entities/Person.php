<?php

namespace Omneo\Apparel21\Entities;

use Omneo\Apparel21\Traits;
use Omneo\Apparel21\Contracts;
use Illuminate\Support\Collection;

class Person implements Contracts\Person, Contracts\Identifiable, Contracts\HasAttributes
{
    use Traits\Person,
        Traits\Identifiable,
        Traits\HasAttributes;

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