<?php
/**
 * This file is property of crakmedia (http://crakmedia.com)
 *
 * PHP Version 5.4
 *
 * @author Brice Colucci <bcolucci@crakmedia.com>
 */

namespace Test\Type\Unit;

use Crak\Component\Type\String;

/**
 * Class StringTest
 *
 * @author Brice Colucci <bcolucci@crakmedia.com>
 */
class StringTest extends TypeTest
{
    /**
     * @return string
     */
    protected function getClassToTest()
    {
        return String::CLASS_NAME;
    }

    /**
     * @return array
     */
    public function provideValidTypeValues()
    {
        return array(
            "Could be a string"        => array("a string", "a string"),
            "Could be a String object" => array(new String("a string"), "a string"),
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
                "Should not be an integer" => array(42),
                "Should not be a float"    => array(42.2),
            ));
    }
}