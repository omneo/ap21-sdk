<?php

namespace Omneo\Apparel21\Traits;

use Carbon\Carbon;
use Illuminate\Support\Collection;
use Omneo\Apparel21\Contracts\Person;

trait Order
{
    /**
     * Customer.
     *
     * @var Person
     */
    protected $customer;

    /**
     * Datetime.
     *
     * @var Carbon
     */
    protected $dateTime;

    /**
     * Total.
     *
     * @var integer
     */
    protected $total;

    /**
     * Total tax.
     *
     * @var integer
     */
    protected $totalTax;

    /**
     * Contacts collection.
     *
     * @var Collection
     */
    protected $contacts;

    /**
     * Addresses collection.
     *
     * @var Collection
     */
    protected $addresses;

    /**
     * Payments collection.
     *
     * @var Collection
     */
    protected $payments;

    /**
     * Line items collection.
     *
     * @var Collection
     */
    protected $lineItems;

    /**
     * Status.
     *
     * @var string
     */
    protected $status;

    /**
     * Return customer.
     *
     * @return Person
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * Set customer.
     *
     * @param  Person $customer
     * @return static
     */
    public function setCustomer(Person $customer = null)
    {
        $this->customer = $customer;

        return $this;
    }

    /**
     * Return datetime.
     *
     * @return Carbon
     */
    public function getDateTime()
    {
        return $this->dateTime;
    }

    /**
     * Set datetime.
     *
     * @param  Carbon $dateTime
     * @return static
     */
    public function setDateTime(Carbon $dateTime = null)
    {
        $this->dateTime = $dateTime;

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
     * Example 3.99 would be represented as 399.
     *
     * @param  integer $total
     * @return static
     */
    public function setTotal($total = null)
    {
        $this->total = $total;

        return $this;
    }

    /**
     * Return total tax as an integer of lowest denomination.
     *
     * Example 3.99 would be represented as 399.
     *
     * @return integer
     */
    public function getTotalTax()
    {
        return $this->totalTax;
    }

    /**
     * Set total tax as an integer of lowest denomination.
     *
     * Example 3.99 would be represented as 399.
     *
     * @param  integer $totalTax
     * @return static
     */
    public function setTotalTax($totalTax = null)
    {
        $this->totalTax = $totalTax;

        return $this;
    }

    /**
     * Return contacts collection.
     *
     * @return Collection
     */
    public function getContacts()
    {
        return $this->contacts ?: $this->contacts = new Collection;
    }

    /**
     * Set contacts collection.
     *
     * @param  Collection $contacts
     * @return static
     */
    public function setContacts(Collection $contacts)
    {
        $this->contacts = $contacts;

        return $this;
    }

    /**
     * Return addresses collection.
     *
     * @return Collection
     */
    public function getAddresses()
    {
        return $this->addresses ?: $this->addresses = new Collection;
    }

    /**
     * Set addresses collection.
     *
     * @param  Collection $addresses
     * @return static
     */
    public function setAddresses(Collection $addresses)
    {
        $this->addresses = $addresses;

        return $this;
    }

    /**
     * Return payments collection.
     *
     * @return Collection
     */
    public function getPayments()
    {
        return $this->payments ?: $this->payments = new Collection;
    }

    /**
     * Set payments collection.
     *
     * @param  Collection $payments
     * @return static
     */
    public function setPayments(Collection $payments)
    {
        $this->payments = $payments;

        return $this;
    }

    /**
     * Return line items collection.
     *
     * @return Collection
     */
    public function getLineItems()
    {
        return $this->lineItems ?: $this->lineItems = new Collection;
    }

    /**
     * Set line items collection.
     *
     * @param  Collection $lineItems
     * @return static
     */
    public function setLineItems(Collection $lineItems)
    {
        $this->lineItems = $lineItems;

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
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }
}