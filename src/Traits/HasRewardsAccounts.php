<?php

namespace Omneo\Apparel21\Traits;

use Illuminate\Support\Collection;

trait HasRewardsAccounts
{
    /**
     * Collection of rewards accounts.
     *
     * @var Collection
     */
    protected $rewardsAccounts;

    /**
     * Return collection of rewards accounts.
     *
     * @return Collection
     */
    public function getRewardsAccounts()
    {
        return $this->rewardsAccounts ?: $this->rewardsAccounts = new Collection;
    }

    /**
     * Set collection of rewards accounts.
     *
     * @param  Collection $loyalties
     * @return static
     */
    public function setRewardsAccounts(Collection $rewardsAccounts)
    {
        $this->rewardsAccounts = $rewardsAccounts;

        return $this;
    }
}