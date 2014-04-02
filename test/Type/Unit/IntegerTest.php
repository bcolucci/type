<?php

namespace test\Type\Unit;

use Bcol\Component\Type\Integer;
use Bcol\Component\Type\Numeric;

/**
 * Class IntegerTest
 *
 * @author Brice Colucci <brice.colucci@gmail.com>
 */
class IntegerTest extends TypeTest
{
    /**
     * @return string
     */
    protected function getClassToTest()
    {
        return Integer::CLASS_NAME;
    }

    /**
     * @return array
     */
    public function provideValidTypeValues()
    {
        return array(
            "Could be an integer"        => array(42, 42),
            "Could be an Integer object" => array(new Integer(42), 42),
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
                "Should not be true"     => array(true),
                "Should not be false"    => array(false),
                "Should not be a string" => array("a string"),
                "Should not be a float"  => array(42.2),
            ));
    }
}