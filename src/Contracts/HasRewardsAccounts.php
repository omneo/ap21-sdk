<?php

namespace Omneo\Apparel21\Contracts;

use Illuminate\Support\Collection;

interface HasRewardsAccounts
{
    /**
     * Return collection of rewards accounts.
     *
     * @return Collection
     */
    public function getRewardsAccounts();

    /**
     * Set collection of rewards accounts.
     *
     * @param  Collection $rewardsAccounts
     * @return static
     */
    public function setRewardsAccounts(Collection $rewardsAccounts);
}