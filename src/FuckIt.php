<?php

namespace FuckIt;

/**
 * Class FuckIt
 * @package FuckIt
 */
class FuckIt
{

    /**
     * @var object
     */
    protected $fuckedObject;

    /**
     * @var \ReflectionObject
     */
    protected $fuckedObjectReflection;

    /**
     * @param object $object
     */
    public function __construct($object)
    {
        if(!is_object($object)) {
            $object = new \stdClass();
        }
        $this->fuckedObject = $object;
        $this->fuckedObjectReflection = new \ReflectionObject($object);
    }

    /**
     * @param callable $callable
     * @param array $arguments
     */
    public static function callableFuckit ($callable, $arguments = [])
    {
        try {
            call_user_func_array($callable, $arguments);
        } catch(\Exception $e) {
            // Ha, fuck it
        }
    }

    /**
     * @param string $method
     * @param array $arguments
     * @return $this
     */
    public function __call($method, $arguments)
    {
        try {
            if($this->hasMethod($method)) {
                $result = call_user_func_array([$this->fuckedObject, $method], $arguments);
                $class = get_class($this->fuckedObject);
                if($result instanceof $class) {
                    return $this;
                }
                return $result;
            }
        } catch(\Exception $e) {
            // Fuck it
        }
    }

    /**
     * @param string $property
     * @return mixed
     */
    public function __get($property)
    {
        try {
            if($this->hasProperty($property)) {
                return $this->fuckedObject->$property;
            }
        } catch(\Exception $e) {
            // Fuck this too
        }
    }

    /**
     * @param string $property
     * @param mixed $value
     */
    public function __set($property, $value)
    {
        try {
            if($this->hasProperty($property)) {
                $this->fuckedObject->$property = $value;
            } // @codeCoverageIgnore
        } catch(\Exception $e) {
            // This can get fucked as well
        }
    }

    /**
     * @param string $property
     * @return bool
     */
    public function __isset($property)
    {
        try {
            if($this->hasProperty($property)) {
                return isset($this->fuckedObject->$property);
            }
        } catch(\Exception $e) {
            // You want some? Well fuck off
        }
        return false; // Fuck it
    }

    /**
     * @param string $property
     */
    public function __unset($property)
    {
        try {
            if($this->hasProperty($property)) {
                unset($this->fuckedObject->$property);
            } // @codeCoverageIgnore
        } catch(\Exception $e) {
            // Not this time, fucker
        }
    }

    /**
     * @param string $property
     * @return bool
     */
    protected function hasProperty($property)
    {
        return $this->fuckedObjectReflection->hasProperty($property);
    }

    /**
     * @param string $method
     * @return bool
     */
    protected function hasMethod($method)
    {
        return $this->fuckedObjectReflection->hasMethod($method);
    }

    /**
     * @param \Exception $e
     * @return void Fuck it
     */
    public static function exceptionHandler(\Exception $e)
    {
        // Fuck it
    } // @codeCoverageIgnore

    /**
     * @return void Fuck it
     */
    public static function errorHandler()
    {
        // Fuck this too
    }
}
