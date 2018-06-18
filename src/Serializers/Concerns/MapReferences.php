<?php

namespace Omneo\Apparel21\Serializers\Concerns;

use Omneo\Apparel21\Entities;
use Illuminate\Support\Collection;

trait MapReferences
{
    /**
     * Map references to given payload array.
     *
     * @param array $payload
     * @param Collection $references
     *
     * @return array
     */
    protected function mapReferences(array $payload, Collection $references)
    {
        if($references->count() == 0) return $payload;

        array_set($payload, 'References', [
            '@attributes' => ['Type' => 'Array'],
        ]);

        $references->each(function (Entities\Reference $reference) use (&$payload) {
            array_push($payload['References'], $this->serializeReference($reference));
        });

        return $payload;
    }

    /**
     * Serialize given references.
     *
     * @param Entities\Reference $reference
     *
     * @return array
     */
    protected function serializeReference(Entities\Reference $reference)
    {
        return array_filter([
            '@node'           => 'Reference',
            'Id'              => $reference->getId(),
            'ReferenceTypeId' => $reference->getType()->getId(),
        ]);
    }

}