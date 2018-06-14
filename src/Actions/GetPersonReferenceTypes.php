<?php

namespace Omneo\Apparel21\Actions;

use GuzzleHttp;
use Omneo\Apparel21\Parsers;
use Omneo\Apparel21\Contracts;
use Illuminate\Support\Collection;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

class GetPersonReferenceTypes extends BaseAction implements Contracts\Action
{
    /**
     * Build a PSR-7 request.
     *
     * @return RequestInterface
     */
    public function request()
    {
        return new GuzzleHttp\Psr7\Request('GET', 'PersonReferenceTypes');
    }

    /**
     * Transform a PSR-7 response.
     *
     * @param  ResponseInterface $response
     * @return Collection
     */
    public function response(ResponseInterface $response)
    {
        $data = (new Parsers\PayloadParser)->parse((string) $response->getBody());

        $collection = new Collection;

        foreach ($data->ReferenceTypes->Reference as $type) {
            $collection->push((new Parsers\PersonReferenceTypeParser)->parse($type));
        }

        return $collection;
    }
}