<?php

namespace Omneo\Apparel21\Parsers;

use SimpleXMLElement;
use Omneo\Apparel21\Entities;

class PersonReferenceTypeParser
{
    /**
     * Parse the given SimpleXmlElement to a ReferenceType entity.
     *
     * @param  SimpleXMLElement $payload
     * @return Entities\ReferenceType
     */
    public function parse(SimpleXMLElement $payload)
    {
        return (new Entities\ReferenceType)
            ->setId((integer) $payload->ReferenceTypeId)
            ->setCode((string) $payload->Code)
            ->setName((string) $payload->Name);
    }
}