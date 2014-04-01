<?php
/**
 * This file is property of crakmedia (http://crakmedia.com)
 *
 * PHP Version 5.4
 *
 * @author Brice Colucci <bcolucci@crakmedia.com>
 */

namespace Test\Type\Unit;

use Crak\Component\Type\Email;

/**
 * Class EmailTest
 *
 * @author Brice Colucci <bcolucci@crakmedia.com>
 */
class EmailTest extends TypeTest
{
    const VALID_EMAIL = "bcolucci@crakmedia.com";

    /**
     * @return string
     */
    protected function getClassToTest()
    {
        return Email::CLASS_NAME;
    }

    /**
     * @return array
     */
    public function provideValidTypeValues()
    {
        return array(
            "Could be an email"        => array(self::VALID_EMAIL, self::VALID_EMAIL),
            "Could be an Email object" => array(new Email(self::VALID_EMAIL), self::VALID_EMAIL),
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
                "Should not be a string which is not a valid email" => array("invalid@Email"),
                "Should not be an integer"                          => array(42),
                "Should not be a float"                             => array(42.2),
            ));
    }
} 