<?php

namespace Tmv\WhatsApi\Message\Action;

/**
 * Class Presence
 *
 * @package Tmv\WhatsApi\Message\Action
 */
class Presence extends AbstractAction
{

    const TYPE_ACTIVE = 'active';
    const TYPE_INACTIVE = 'inactive';
    const TYPE_UNAVAILABLE = 'unavailable';

    /**
     * @var string
     */
    protected $name;
    /**
     * @var string
     */
    protected $type;
    /**
     * @var string
     */
    protected $last;

    public function __construct($name = null)
    {
        $this->name = $name;
    }

    /**
     * @param  string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param  string $type
     * @return $this
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param  string $last
     * @return $this
     */
    public function setLast($last)
    {
        $this->last = $last;

        return $this;
    }

    /**
     * @return string
     */
    public function getLast()
    {
        return $this->last;
    }
}
