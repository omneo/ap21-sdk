<?php

namespace Omneo\Apparel21\Serializers;

use Omneo\Apparel21\Entities;
use Illuminate\Support\Facades\Log;

class PersonSerializerClearLoyalties
{
    use Concerns\MapContacts,
        Concerns\MapAddresses,
        Concerns\MapAttributes,
        Concerns\MapReferences;

    /**
     * Serialize.
     *
     * @param  Entities\Person $person
     * @return string
     */
    public function serialize(Entities\Person $person)
    {
        $payload = new \SimpleXMLElement("<Person></Person>");

        (new XMLHelper)->appendXML(
            $this->buildXMLArray($person),
            $payload
        );

        $result = (new XMLHelper)->stripHeader($payload->asXML());

        $result = substr($result, 0, -10);
        $result .= '<Loyalties Type="Array"></Loyalties></Person>';

        Log::info('** AP21 ** Final XML payload.', ['payload' => $result]);

        return $result;
    }

    /**
     * Build an array of data to be converted to XML.
     *
     * @param  Entities\Person $person
     * @return array
     */
    protected function buildXMLArray(Entities\Person $person)
    {
        $payload = [
            'Firstname' => $person->getFirstName(),
            'Surname'   => $person->getLastName()
        ];

        // Add the ID & UpdateTimeStamp fields to payload, which are required when sending PUT request
        if ($person->getIdentifiers()->has('ap21_id')) {
            $payload['Id'] = $person->getIdentifiers()->get('ap21_id');
            $payload['UpdateTimeStamp'] = $person->getAttributes()->get('updated_at');
        }

        $payload = $this->mapAddresses($payload, $person->getAddresses());
        $payload = $this->mapContacts($payload, $person->getContacts());
        $payload = $this->mapAttributes($payload, $person->getAttributes());
        $payload = $this->mapReferences($payload, $person->getReferences());

        return $payload;
    }
}