<?php

namespace Omneo\Apparel21\Parsers;

use SimpleXMLElement;
use Illuminate\Support\Collection;
use Omneo\Apparel21\Entities\RewardsAccount;
use Carbon\Carbon;

class RewardsAccountParser
{
    /**
     * Parse a collection of rewards accounts.
     *
     * @param  SimpleXMLElement $xml
     * @return Collection
     */
    public function parseCollection(SimpleXMLElement $xml)
    {
        $collection = collect();

        foreach ($xml->Account as $account) {
            $collection->push(
                $this->parse($account)
            );
        }

        return $collection;
    }

    /**
     * Parse the given loyalty XML.
     *
     * @param  SimpleXMLElement $xml
     * @return RewardsAccount
     */
    public function parse(SimpleXMLElement $xml)
    {
        return (new RewardsAccount)
            ->setId((string) $xml->Id)
            ->setProgramId((string) $xml->ProgramId)
            ->setProgramName((string) $xml->ProgramName)
            ->setTierId((string) $xml->TierId)
            ->setTierName((string) $xml->TierName);
    }
}