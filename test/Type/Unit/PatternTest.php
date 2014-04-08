<?php

namespace test\Type\Unit;

use Bcol\Component\Type\Pattern;

/**
 * Class PatternTest
 *
 * @author Brice Colucci <brice.colucci@gmail.com>
 */
class PatternTest extends TypeTest
{
    /**
     * @return string
     */
    protected function getClassToTest()
    {
        return Pattern::CLASS_NAME;
    }

    /**
     * @return array
     */
    public function provideValidTypeValues()
    {
        return array(
            "Could be a non-empty string" => array("a string", "a string"),
            "Could be a Pattern object"   => array(new Pattern("/.*/"), "/.*/"),
        );
    }

    public function testShouldProvideMatchFunctions()
    {
        //TODO
        $this->markTestSkipped("TODO");
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
                "Should not be empty"      => array(""),
                "Should not be spaces"     => array("  "),
                "Should not be \\n"        => array("\n"),
                "Should not be \\t"        => array("\t"),
                "Should not be \\r"        => array("\r"),
                "Should not be an integer" => array(42),
                "Should not be a float"    => array(42.2),
            ));
    }
} 