<?php

namespace Omneo\Apparel21\Actions;

use Omneo\Apparel21;
use GuzzleHttp;
use Omneo\Apparel21\Parsers;
use Omneo\Apparel21\Entities;
use Omneo\Apparel21\Contracts;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

class GetRewardAccount extends BaseAction implements Contracts\Action
{
    /**
     * Apparel21 reward account ID.
     *
     * @var string
     */
    public $id;

    /**
     * GetRewardAccount constructor.
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
     * Build a PSR-7 request.
     *
     * @return RequestInterface
     */
    public function request()
    {
        return new GuzzleHttp\Psr7\Request('GET', 'rewards/accounts/'.$this->id);
    }

    /**
     * Transform a PSR-7 response.
     *
     * @param  ResponseInterface $response
     * @return Entities\Person
     */
    public function response(ResponseInterface $response)
    {
        $parser = new Parsers\RewardAccountParser;

        return $parser->parse(
            (new Parsers\PayloadParser)->parse((string) $response->getBody())
        );
    }
}