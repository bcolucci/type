<?php

namespace test\Type\Unit;

use Bcol\Component\Type\StrictPositiveInteger;

/**
 * Class StrictPositiveIntegerTest
 *
 * @author Brice Colucci <brice.colucci@gmail.com>
 */
class StrictPositiveIntegerTest extends TypeTest
{
    /**
     * @return string
     */
    protected function getClassToTest()
    {
        return StrictPositiveInteger::CLASS_NAME;
    }

    /**
     * @return array
     */
    public function provideValidTypeValues()
    {
        return array(
            "Could be a strict positive integer"      => array(42, 42),
            "Could be a StrictPositiveInteger object" => array(new StrictPositiveInteger(42), 42),
        );
    }

    /**
     * @return array
     */
    public function provideInvalidTypeValues()
    {
        return array_merge(
            $this->provideCommonsInvalidTypeValues(),
            array(
                "Should not be true"               => array(true),
                "Should not be false"              => array(false),
                "Should not be a string"           => array("a string"),
                "Should not be 0"                  => array(0),
                "Should not be a negative integer" => array(-42),
                "Should not be a float"            => array(42.2),
            ));
    }
} 