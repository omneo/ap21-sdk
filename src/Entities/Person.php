<?php

namespace Omneo\Apparel21\Entities;

use Omneo\Apparel21\Traits;
use Omneo\Apparel21\Contracts;
use Illuminate\Support\Collection;

class Person implements
    Contracts\Person,
    Contracts\Identifiable,
    Contracts\HasAttributes,
    Contracts\HasReferences,
    Contracts\HasLoyalties,
    Contracts\HasRewardsAccounts
{
    use Traits\Person,
        Traits\Identifiable,
        Traits\HasAttributes,
        Traits\HasReferences,
        Traits\HasLoyalties,
        Traits\HasRewardsAccounts;

}