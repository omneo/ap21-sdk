<?php

namespace Omneo\Apparel21\Serializers\Concerns;

use Omneo\Apparel21\Entities;
use Illuminate\Support\Collection;

trait MapLoyaltiesClear
{
    /**
     * Map loyalties to given payload array.
     *
     * @param  array      $payload
     * @param  Collection $payments
     * @return array
     */
    protected function mapLoyalties(array $payload, Collection $loyalties)
    {
        array_set($payload, 'Loyalties', [
            '@attributes' => ['Type' => 'Array'],
        ]);

        $loyalties->each(function (Entities\Loyalty $loyalty) use (&$payload) {
            array_push($payload['Loyalties'], $this->serializeLoyalty($loyalty));
        });

        return $payload;
    }

    /**
     * Serialize given loyalty.
     *
     * @param  Entities\Loyalty $payment
     * @return array
     */
    protected function serializeLoyalty(Entities\Loyalty $loyalty)
    {
        return array_filter([
            '@node'         => 'Loyalty',
            'Id'            => $loyalty->getId(),
            'LoyaltyTypeId' => $loyalty->getTypeId(),
            'LoyaltyType'   => $loyalty->getTypeName(),
            'CardNo'        => $loyalty->getCardNumber(),
            'Expiry'        => $loyalty->getExpiry() ? $loyalty->getExpiry()->toDateString() : null,
            'JoinDate'      => $loyalty->getJoinDate()->toDateString(),
        ]);
    }
}