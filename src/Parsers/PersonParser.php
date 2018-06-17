<?php

namespace Omneo\Apparel21\Parsers;

use SimpleXMLElement;
use Omneo\Apparel21\Entities;
use Omneo\Apparel21\Contracts;
use Illuminate\Support\Collection;

class PersonParser
{
    /**
     * Reference resolver.
     *
     * @var Contracts\ReferenceResolver
     */
    protected $referenceResolver;

    /**
     * Set reference resolver.
     *
     * @param  Contracts\ReferenceResolver|null $referenceResolver
     * @return static
     */
    public function setReferenceResolver(Contracts\ReferenceResolver $referenceResolver = null)
    {
        $this->referenceResolver = $referenceResolver;

        return $this;
    }

    /**
     * Parse the given SimpleXmlElement to a Person entity.
     *
     * @param  SimpleXMLElement $payload
     * @return Entities\Person
     */
    public function parse(SimpleXMLElement $payload)
    {
        $person = (new Entities\Person)
            ->setIdentifiers(new Collection([
                'ap21_id'   => (string) $payload->Id,
                'ap21_code' => (string) $payload->Code
            ]))
            ->setFirstName((string) $payload->Firstname)
            ->setLastName((string) $payload->Surname)
            ->setAttributes(
                (new Collection([
                    'title'         => (string) $payload->Title,
                    'initials'      => (string) $payload->Initials,
                    'date_of_birth' => (string) $payload->DateOfBirth,
                    'job_title'     => (string) $payload->JobTitle,
                    'start_date'    => (string) $payload->StartDate,
                    'privacy'       => (string) $payload->Privacy,
                    'updated_at'    => (string) $payload->UpdateTimeStamp,
                    'is_agent'      => (string) $payload->IsAgent
                ]))->filter()
            );

        $person->setContacts(
            (new ContactParser)->parseCollection($payload->Contacts)
        );

        $person->setAddresses(
            (new AddressParser)->parseCollection($payload->Addresses)
        );

        if($payload->Loyalties) {
            $person->setLoyalties(
                (new LoyaltyParser)->parseCollection($payload->Loyalties)
            );
        }

        $this->parseReferences($person, $payload->References);

        return $person;
    }

    /**
     * Parse references to attributes on product.
     *
     * @param Entities\Person $product
     * @param SimpleXMLElement $payload
     */
    protected function parseReferences(Entities\Person $person, SimpleXMLElement $payload)
    {
        if (! $this->referenceResolver) return;

        foreach ($payload->Reference as $r) {

            $reference = $this->referenceResolver->resolve(
                (integer) $r->Id,
                (integer) $r->ReferenceTypeId
            );

            if ($reference) {
                $person->getReferences()->offsetSet(
                    strtolower($reference->getType()->getCode()),
                    $reference->getCode()
                );
            }

        }
    }
}