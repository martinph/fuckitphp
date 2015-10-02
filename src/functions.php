<?php

namespace FuckIt;

if (!function_exists("FuckIt\fuckit")) {
    /**
     * @param object $object
     * @return FuckIt
     */
    function fuckit($object)
    {
        return new FuckIt($object);
    }

}
