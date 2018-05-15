<?php

namespace Omneo\Apparel21\Traits;

use Omneo\Apparel21\Contracts\Sellable;

trait LineItem
{
    /**
     * Sellable.
     *
     * @var Sellable
     */
    protected $sellable;

    /**
     * Quantity.
     *
     * @var integer
     */
    protected $quantity;

    /**
     * Total.
     *
     * @var integer
     */
    protected $total;

    /**
     * Return sellable.
     *
     * @return Sellable
     */
    public function getSellable()
    {
        return $this->sellable;
    }

    /**
     * Set sellable.
     *
     * @param  Sellable $sellable
     * @return static
     */
    public function setSellable(Sellable $sellable = null)
    {
        $this->sellable = $sellable;

        return $this;
    }

    /**
     * Return quantity.
     *
     * @return integer
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Set quantity.
     *
     * @param  integer $quantity
     * @return static
     */
    public function setQuantity($quantity = null)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Return total as an integer of lowest denomination.
     *
     * Example 3.99 would be represented as 399.
     *
     * @return integer
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * Set total as an integer of lowest denomination.
     *
     * @param  integer $total
     * @return static
     */
    public function setTotal($total = null)
    {
        $this->total = $total;

        return $this;
    }
}