<?php

namespace Test\Type\Unit;

use Bcol\Component\Type\PositiveInteger;

/**
 * Class PositiveIntegerTest
 *
 * @author Brice Colucci <brice.colucci@gmail.com>
 */
class PositiveIntegerTest extends TypeTest
{
    /**
     * @return string
     */
    protected function getClassToTest()
    {
        return PositiveInteger::CLASS_NAME;
    }

    /**
     * @return array
     */
    public function provideValidTypeValues()
    {
        return array(
            "Could be 0"                        => array(0, 0),
            "Could be a positive integer"       => array(42, 42),
            "Could be a PositiveInteger object" => array(new PositiveInteger(42), 42),
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
                "Should not be a negative integer" => array(-42),
                "Should not be a float"            => array(42.2),
            ));
    }
} 