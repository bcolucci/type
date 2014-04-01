<?php
/**
 * This file is property of crakmedia (http://crakmedia.com)
 *
 * PHP Version 5.4
 *
 * @author Brice Colucci <bcolucci@crakmedia.com>
 */

namespace Test\Type\Unit;

use Crak\Component\Type\Boolean;

/**
 * Class BooleanTest
 *
 * @author Brice Colucci <bcolucci@crakmedia.com>
 */
class BooleanTest extends TypeTest
{
    /**
     * @return string
     */
    protected function getClassToTest()
    {
        return Boolean::CLASS_NAME;
    }

    /**
     * @return array
     */
    public function provideValidTypeValues()
    {
        return array(
            "Could be the boolean true"         => array(true, true),
            "Could be the boolean false"        => array(false, false),
            "Could be the Boolean object true"  => array(new Boolean(true), true),
            "Could be the Boolean object false" => array(new Boolean(false), false),
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
                "Should not be a string"   => array("a string"),
                "Should not be an integer" => array(42),
                "Should not be a float"    => array(42.2),
            ));
    }
} 