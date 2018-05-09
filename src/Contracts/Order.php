<?php

namespace Omneo\Apparel21\Contracts;

use Carbon\Carbon;
use Illuminate\Support\Collection;

interface Order
{
    /**
     * Return customer.
     *
     * @return Person
     */
    public function getCustomer();

    /**
     * Set customer.
     *
     * @param  Person $customer
     * @return static
     */
    public function setCustomer(Person $customer = null);

    /**
     * Return datetime.
     *
     * @return Carbon
     */
    public function getDateTime();

    /**
     * Set datetime.
     *
     * @param  Carbon $dateTime
     * @return static
     */
    public function setDateTime(Carbon $dateTime = null);

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
     * Example 3.99 would be represented as 399.
     *
     * @param  integer $total
     * @return static
     */
    public function setTotal($total = null);

    /**
     * Return total tax as an integer of lowest denomination.
     *
     * Example 3.99 would be represented as 399.
     *
     * @return integer
     */
    public function getTotalTax();

    /**
     * Set total tax as an integer of lowest denomination.
     *
     * Example 3.99 would be represented as 399.
     *
     * @param  integer $totalTax
     * @return static
     */
    public function setTotalTax($totalTax = null);

    /**
     * Return contacts collection.
     *
     * @return Collection
     */
    public function getContacts();

    /**
     * Set contacts collection.
     *
     * @param  Collection $contacts
     * @return static
     */
    public function setContacts(Collection $contacts);

    /**
     * Return addresses collection.
     *
     * @return Collection
     */
    public function getAddresses();

    /**
     * Set addresses collection.
     *
     * @param  Collection $addresses
     * @return static
     */
    public function setAddresses(Collection $addresses);

    /**
     * Return payments collection.
     *
     * @return Collection
     */
    public function getPayments();

    /**
     * Set payments collection.
     *
     * @param  Collection $payments
     * @return static
     */
    public function setPayments(Collection $payments);

    /**
     * Return line items collection.
     *
     * @return Collection
     */
    public function getLineItems();

    /**
     * Set line items collection.
     *
     * @param  Collection $lineItems
     * @return static
     */
    public function setLineItems(Collection $lineItems);

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
    public function setStatus($status);
}