<?php

namespace FuckIt\Stub;

/**
 * Class FuckedObject
 * @package FuckIt\Stub
 */
class FuckedObject
{

    /**
     * @var mixed
     */
    protected $fuck;

    /**
     * @param mixed $argument
     * @throws \Exception
     */
    public function fuckedMethod($argument)
    {
        throw new \Exception("Fucked");
    }

    /**
     * @param string $argument
     * @return string
     */
    public function notSoFuckedMethod($argument)
    {
        return $argument;
    }

    /**
     * @return $this
     */
    public function fluent()
    {
        return $this;
    }

    /**
     * @param string $property
     * @throws \Exception
     */
    public function __get($property)
    {
        throw new \Exception("Fucked");
    }

    /**
     * @param string $property
     * @param mixed $value
     * @throws \Exception
     */
    public function __set($property, $value)
    {
        throw new \Exception("Fucked");
    }

    /**
     * @param string $property
     * @throws \Exception
     */
    public function __isset($property)
    {
        throw new \Exception("Fucked");
    }

    /**
     * @param string $property
     * @throws \Exception
     */
    public function __unset($property)
    {
        throw new \Exception("Fucked");
    }
}
