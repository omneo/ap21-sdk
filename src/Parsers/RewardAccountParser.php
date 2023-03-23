<?php

namespace Omneo\Apparel21\Parsers;

use SimpleXMLElement;
use Omneo\Apparel21\Entities;
use Omneo\Apparel21\Contracts;
use Illuminate\Support\Collection;

class RewardAccountParser
{
    /**
     * Parse the given SimpleXmlElement to a RewardAccount entity.
     *
     * @param  SimpleXMLElement $payload
     * @return Entities\RewardAccount
     */
    public function parse(SimpleXMLElement $payload)
    {
        $rewardAccount = (new Entities\RewardAccount)
            ->setData(json_decode(json_encode($payload)));

        return $rewardAccount;
    }
}