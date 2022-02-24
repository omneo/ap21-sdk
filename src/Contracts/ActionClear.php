<?php

namespace Omneo\Apparel21\Contracts;

use Omneo\Apparel21\V3Client;
use Omneo\Apparel21\Contracts;
use Illuminate\Support\Collection;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

interface ActionClear
{
    /**
     * Set SDK client.
     *
     * @param  V3Client $client
     * @return static
     */
    public function setClient(V3Client $client);

    /**
     * Return SDK client.
     *
     * @return V3Client
     */
    public function getClient();

    /**
     * Build a PSR-7 request.
     *
     * @return RequestInterface
     */
    public function request();

    /**
     * Transform a PSR-7 response.
     *
     * @param  ResponseInterface $response
     * @return Contracts\Identifiable|Collection
     */
    public function response(ResponseInterface $response);
}