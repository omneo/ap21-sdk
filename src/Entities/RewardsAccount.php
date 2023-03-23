<?php

namespace Omneo\Apparel21\Entities;

use Carbon\Carbon;

class RewardsAccount
{
    /**
     * Id
     *
     * @var string
     */
    protected $id;

    /**
     * Program Id
     *
     * @var string
     */
    protected $programId;

    /**
     * Program Name
     *
     * @var string
     */
    protected $programName;

    /**
     * Tier Id
     *
     * @var string
     */
    protected $tierId;

    /**
     * Tier Name
     *
     * @var string
     */
    protected $tierName;

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $id
     * @return RewardsAccount
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getProgramId()
    {
        return $this->programId;
    }

    /**
     * @param string $programId
     * @return RewardsAccount
     */
    public function setProgramId($programId)
    {
        $this->programId = $programId;
        return $this;
    }

    /**
     * @return string
     */
    public function getProgramName()
    {
        return $this->programName;
    }

    /**
     * @param string $programName
     * @return RewardsAccount
     */
    public function setProgramName($programName)
    {
        $this->programName = $programName;
        return $this;
    }

    /**
     * @return string
     */
    public function getTierId()
    {
        return $this->tierId;
    }

    /**
     * @param string $TierId
     * @return RewardsAccount
     */
    public function setTierId($tierId)
    {
        $this->tierId = $tierId;
        return $this;
    }

    /**
     * @return string
     */
    public function getTierName()
    {
        return $this->tierName;
    }

    /**
     * @param string $tierName
     * @return RewardsAccount
     */
    public function setTierName($tierName)
    {
        $this->tierName = $tierName;
        return $this;
    }

}