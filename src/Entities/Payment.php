<?php

namespace Omneo\Apparel21\Entities;

use Omneo\Apparel21\Traits;
use Omneo\Apparel21\Contracts;

class Payment implements Contracts\Payment, Contracts\Identifiable, Contracts\HasAttributes
{
    use Traits\Payment, Traits\Identifiable, Traits\HasAttributes;
}