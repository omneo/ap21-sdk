<?php

namespace Omneo\Apparel21\Entities;

use Omneo\Apparel21\Traits;
use Omneo\Apparel21\Contracts;

class Variant implements Contracts\Variant, Contracts\Sellable, Contracts\Identifiable, Contracts\HasDates
{
    use Traits\Variant, Traits\Sellable, Traits\Identifiable, Traits\HasDates;
}