<?php

namespace Test\Type\Unit;

use Bcol\Component\Type\Float;
use Bcol\Component\Type\Numeric;

/**
 * Class FloatTest
 *
 * @author Brice Colucci <brice.colucci@gmail.com>
 */
class FloatTest extends TypeTest
{
    /**
     * @return string
     */
    protected function getClassToTest()
    {
        return Float::CLASS_NAME;
    }

    /**
     * @return array
     */
    public function provideValidTypeValues()
    {
        return array(
            "Could be a float"        => array(42.2, 42.2),
            "Could be a Float object" => array(new Float(42.2), 42.2),
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
                "Should not be true"       => array(true),
                "Should not be false"      => array(false),
                "Should not be a string"   => array("a string"),
                "Should not be an integer" => array(42),
            ));
    }
} 