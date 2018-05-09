<?php

namespace Omneo\Apparel21\Contracts;

interface Payment
{
    /**
     * Get payment type.
     *
     * E.g. "credit card" or "cheque".
     *
     * @return string
     */
    public function getType();

    /**
     * Get payment type.
     *
     * E.g. "credit card" or "cheque".
     *
     * @param  string $type
     * @return static
     */
    public function setType($type = null);

    /**
     * Return total as an integer of lowest denomination.
     *
     * Example 3.99 would be represented as 399.
     *
     * @return integer
     */
    public function getAmount();

    /**
     * Set total as an integer of lowest denomination.
     *
     * Example 3.99 would be represented as 399.
     *
     * @param  integer $amount
     * @return static
     */
    public function setAmount($amount = null);

    /**
     * Return status.
     *
     * @return string
     */
    public function getStatus();

    /**
     * Set status.
     *
     * @param  string $status
     * @return static
     */
    public function setStatus($status = null);
}