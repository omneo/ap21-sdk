<?php

namespace Omneo\Apparel21\Contracts;

use Omneo\Apparel21\Entities;

interface ReferenceResolver
{
    /**
     * Resolve reference by ID.
     *
     * @param  integer $referenceId
     * @param  integer $referenceTypeId
     * @return Entities\Reference|null
     */
    public function resolve($referenceId, $referenceTypeId);
}