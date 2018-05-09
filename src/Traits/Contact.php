<?php

namespace Omneo\Apparel21\Traits;

trait Contact
{
    /**
     * Type.
     *
     * @var string
     */
    protected $type;

    /**
     * Value.
     *
     * @var string
     */
    protected $value;

    /**
     * Get type.
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set type.
     *
     * @param  string $type
     * @return static
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get value.
     *
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Set value.
     *
     * @param  string $value
     * @return static
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }
}