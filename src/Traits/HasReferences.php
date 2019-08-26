<?php

namespace Omneo\Apparel21\Traits;

use Illuminate\Support\Collection;

trait HasReferences
{
    /**
     * Collection of references.
     *
     * @var Collection
     */
    protected $references;

    /**
     * Return collection of references.
     *
     * @return Collection
     */
    public function getReferences()
    {
        return $this->references ?: $this->references = new Collection;
    }

    /**
     * Set collection of references.
     *
     * @param  Collection $references
     * @return static
     */
    public function setReferences(Collection $references)
    {
        $this->references = $references;

        return $this;
    }
}