<?php

namespace Omneo\Apparel21\Actions;

use Omneo\Apparel21\V3Client;

abstract class BaseActionClear
{
    /**
     * SDK client.
     *
     * @var V3Client
     */
    protected $client;

    /**
     * Set SDK client.
     *
     * @param  V3Client $client
     * @return static
     */
    public function setClient(V3Client $client)
    {
        $this->client = $client;

        return $this;
    }

    /**
     * Return SDK client.
     *V3Client
     * @return V3Client
     */
    public function getClient()
    {
        return $this->client;
    }
}