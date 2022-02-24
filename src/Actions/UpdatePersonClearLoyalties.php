<?php

namespace Omneo\Apparel21\Actions;

use GuzzleHttp;
use Omneo\Apparel21;
use Omneo\Apparel21\Contracts;
use Omneo\Apparel21\Entities;
use Omneo\Apparel21\Serializers;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

class UpdatePersonClearLoyalties extends BaseAction implements Contracts\Action
{
    /**
     * Apparel21 person ID.
     *
     * @var string
     */
    public $id;

    /**
     * Person.
     *
     * @var Entities\Person
     */
    public $person;

    /**
     * CreatePerson constructor.
     *
     * @param Contracts\Person $person
     * @throws \Omneo\Apparel21\Exceptions\NotFoundException
     */
    public function __construct($id, Contracts\Person $person)
    {
        // Throw exception if $id blank/ NULL to prevent full search timeout
        if (empty($id)) {
            throw new Apparel21\Exceptions\NotFoundException;
        }

        $this->id = $id;
        $this->person = $person;
    }

    /**
     * Build a PSR-7 request.
     *
     * @return RequestInterface
     */
    public function request()
    {
        return new GuzzleHttp\Psr7\Request(
            'PUT',
            'Persons/'.$this->id,
            [],
            (new Serializers\PersonSerializerClearLoyalties)->serialize($this->person)
        );
    }

    /**
     * Transform a PSR-7 response.
     *
     * @param  ResponseInterface $response
     * @return Contracts\Person
     */
    public function response(ResponseInterface $response)
    {
        // Populate ID from Location header if possible
        if ($this->person instanceof Contracts\Identifiable) {
            $this->person->getIdentifiers()->put(
                'ap21_id',
                $this->parseLocationHeader($response)
            );
        }

        return $this->person;
    }

    /**
     * Get person ID from Location header.
     *
     * @param  ResponseInterface $response
     * @return string
     */
    protected function parseLocationHeader(ResponseInterface $response)
    {
        return array_last(
            explode(
                '/',
                parse_url(
                    $response->getHeaderLine('Location'),
                    PHP_URL_PATH
                )
            )
        );
    }
}