<?php

namespace Omneo\Apparel21\Entities;

use Carbon\Carbon;

class RewardAccount
{
    /**
     * Id
     *
     * @var string
     */
    protected $data;

    /**
     * @return string
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param mixed $data
     * @return RewardsAccount
     */
    public function setData($data)
    {
        $this->data = $data;
        return $this;
    }
}