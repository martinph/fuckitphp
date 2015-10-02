<?php

namespace FuckIt;

use function FuckIt\fuckit as fuckit;
use FuckIt\Stub\FuckedObject;

/**
 * Class FuckItTest
 * @package FuckIt
 */
class FuckItTest extends \PHPUnit_Framework_TestCase
{

    /**
     *
     */
    public function testAllTheThings()
    {

        /** @var FuckedObject $object */
        $object = fuckit(new FuckedObject());

        $arg1 = "fuck";
        $arg2 = "it";
        fuckit::callableFuckit(function () use ($arg1, $arg2) {
            throw new \Exception("fucked");
        }, ["some argument"]);

        $object->fuckedMethod("fuck");
        $this->assertEquals("fuck", $object->notSoFuckedMethod("fuck"));
        $object->fluent()->fuckedMethod("fuck!");
        $object->fuck = "it";
        $object->fuck;
        isset($object->fuck);
        unset($object->fuck);

        $object = fuckit("fuck");
        $object->doesntExistButFuckIt();

        set_error_handler(['\FuckIt\FuckIt', "errorHandler"]);
        trigger_error("oh noes");

    }
}
