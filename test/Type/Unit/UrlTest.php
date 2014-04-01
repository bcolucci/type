<?php
/**
 * This file is property of crakmedia (http://crakmedia.com)
 *
 * PHP Version 5.4
 *
 * @author Brice Colucci <bcolucci@crakmedia.com>
 */

namespace Test\Type\Unit;

use Crak\Component\Type\Url;

/**
 * Class UrlTest
 *
 * @author Brice Colucci <bcolucci@crakmedia.com>
 */
class UrlTest extends TypeTest
{
    const VALID_URL = "http://ex.com?test=1&mode=phpunit";

    /**
     * @return string
     */
    protected function getClassToTest()
    {
        return Url::CLASS_NAME;
    }

    /**
     * @return array
     */
    public function provideValidTypeValues()
    {
        return array(
            "Could be an URL"        => array(self::VALID_URL, self::VALID_URL),
            "Could be an URL object" => array(new Url(self::VALID_URL), self::VALID_URL),
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
                "Should not be true"                              => array(true),
                "Should not be false"                             => array(false),
                "Should not be a string which is not a valid URL" => array("http//invalidUrl.fr"),
                "Should not be an integer"                        => array(42),
                "Should not be a float"                           => array(42.2),
            ));
    }
} 