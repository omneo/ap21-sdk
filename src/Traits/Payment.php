<?php

namespace Omneo\Apparel21\Traits;

trait Payment
{
    /**
     * Payment type.
     *
     * E.g. "credit card" or "cheque".
     *
     * @var string
     */
    protected $type;

    /**
     * Amount.
     *
     * @var integer
     */
    protected $amount;

    /**
     * Status.
     *
     * @var string
     */
    protected $status;

    /**
     * Get payment type.
     *
     * E.g. "credit card" or "cheque".
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Get payment type.
     *
     * E.g. "credit card" or "cheque".
     *
     * @param  string $type
     * @return static
     */
    public function setType($type = null)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Return amount as an integer of lowest denomination.
     *
     * Example 3.99 would be represented as 399.
     *
     * @return integer
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Set amount as an integer of lowest denomination.
     *
     * Example 3.99 would be represented as 399.
     *
     * @param  integer $amount
     * @return static
     */
    public function setAmount($amount = null)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * Return status.
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set status.
     *
     * @param  string $status
     * @return static
     */
    public function setStatus($status = null)
    {
        $this->status = $status;

        return $this;
    }
}