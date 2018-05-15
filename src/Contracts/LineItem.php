<?php

namespace Omneo\Apparel21\Contracts;

interface LineItem
{
    /**
     * Return sellable.
     *
     * @return Sellable
     */
    public function getSellable();

    /**
     * Set sellable.
     *
     * @param  Sellable $sellable
     * @return static
     */
    public function setSellable(Sellable $sellable = null);

    /**
     * Return quantity.
     *
     * @return integer
     */
    public function getQuantity();

    /**
     * Set quantity.
     *
     * @param  integer $quantity
     * @return static
     */
    public function setQuantity($quantity = null);

    /**
     * Return total as an integer of lowest denomination.
     *
     * Example 3.99 would be represented as 399.
     *
     * @return integer
     */
    public function getTotal();

    /**
     * Set total as an integer of lowest denomination.
     *
     * @param  integer $total
     * @return static
     */
    public function setTotal($total = null);
}