<?php

namespace Omneo\Apparel21\Actions;

use Omneo\Apparel21;
use GuzzleHttp;
use Omneo\Apparel21\Parsers;
use Omneo\Apparel21\Entities;
use Omneo\Apparel21\Contracts;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

class GetPerson extends BaseAction implements Contracts\Action
{
    /**
     * Apparel21 person ID.
     *
     * @var string
     */
    public $id;

    /**
     * Implicitly fetch references for the person.
     *
     * @var bool
     */
    public $withReferences = true;

    /**
     * GetPerson constructor.
     *
     * @param string $id
     *
     * @throws Apparel21\Exceptions\NotFoundException
     */
    public function  __construct($id)
    {
        // Throw exception if $id blank/ NULL to prevent full search timeout
        if (empty($id)) {
            throw new Apparel21\Exceptions\NotFoundException;
        }

        $this->id = $id;
    }

    /**
     * Implicitly fetch references for the person.
     *
     * @return static
     */
    public function withReferences()
    {
        $this->withReferences = true;

        return $this;
    }

    /**
     * Do not implicitly fetch references for the person.
     *
     * @return static
     */
    public function withoutReferences()
    {
        $this->withReferences = false;

        return $this;
    }

    /**
     * Build a PSR-7 request.
     *
     * @return RequestInterface
     */
    public function request()
    {
        return new GuzzleHttp\Psr7\Request('GET', 'Persons/'.$this->id);
    }

    /**
     * Transform a PSR-7 response.
     *
     * @param  ResponseInterface $response
     * @return Entities\Person
     */
    public function response(ResponseInterface $response)
    {
        $parser = new Parsers\PersonParser;

        // Implicitly fetch references
        if ($this->client && $this->withReferences) {
            $parser->setReferenceResolver(
                $this->client->getReferenceResolver()
            );
        }

        return $parser->parse(
            (new Parsers\PayloadParser)->parse((string) $response->getBody())
        );
    }
}