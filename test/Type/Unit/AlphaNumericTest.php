<?php
/**
 * This file is property of crakmedia (http://crakmedia.com)
 *
 * PHP Version 5.4
 *
 * @author Brice Colucci <bcolucci@crakmedia.com>
 */

namespace Test\Type\Unit;

use Crak\Component\Type\AlphaNumeric;

/**
 * Class AlphaNumericTest
 *
 * @author Brice Colucci <bcolucci@crakmedia.com>
 */
class AlphaNumericTest extends TypeTest
{
    /**
     * @return string
     */
    protected function getClassToTest()
    {
        return AlphaNumeric::CLASS_NAME;
    }

    /**
     * @return array
     */
    public function provideValidTypeValues()
    {
        return array(
            "Could be an alpha-numeric"       => array("abc123", "abc123"),
            "Could be an AlphaNumeric object" => array(new AlphaNumeric("abc123"), "abc123"),
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
                "Should not be true"                                => array(true),
                "Should not be false"                               => array(false),
                "Should not be an empty string"                     => array(" \n"),
                "Should not be a string which is not alpha-numeric" => array("abc123_%"),
                "Should not be an integer"                          => array(42),
                "Should not be a float"                             => array(42.2),
            ));
    }
} 