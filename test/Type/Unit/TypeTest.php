<?php
/**
 * This file is property of crakmedia (http://crakmedia.com)
 *
 * PHP Version 5.4
 *
 * @author Brice Colucci <bcolucci@crakmedia.com>
 */

namespace Test\Type\Unit;

use Crak\Component\Type\Type;

/**
 * Class TypeTest
 *
 * @author Brice Colucci <bcolucci@crakmedia.com>
 */
abstract class TypeTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @return string
     */
    protected abstract function getClassToTest();

    /**
     * @return array
     */
    protected abstract function provideInvalidTypeValues();

    /**
     * @return array
     */
    protected abstract function provideValidTypeValues();

    public function testShouldHaveAConstantClassNameWhichIsNotTypeClassNameItSelf()
    {
        $this->assertNotSame(Type::CLASS_NAME, $this->getClassToTest());
    }

    /**
     * @depends      testShouldHaveAConstantClassNameWhichIsNotTypeClassNameItSelf
     *
     * @param mixed $value
     * @param mixed $expectedValue
     *
     * @dataProvider provideValidTypeValues
     */
    public function testShouldBeAbleToConstructWith($value, $expectedValue)
    {
        $class = $this->getClassToTest();

        /** @var Type $instance */
        $instance = new $class($value);

        $this->assertInstanceOf(Type::CLASS_NAME, $instance);
        $this->assertSame($expectedValue, $instance->getValue());
    }

    /**
     * @depends      testShouldHaveAConstantClassNameWhichIsNotTypeClassNameItSelf
     *
     * @param mixed $value
     *
     * @dataProvider provideInvalidTypeValues
     *
     * @expectedException \InvalidArgumentException
     */
    public function testShouldNotBeAbleToConstructWith($value)
    {
        $class = $this->getClassToTest();
        new $class($value);
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testShouldNotBeAbleToConstructWithATypeDifferentOfItsOwnType()
    {
        $class = $this->getClassToTest();
        new $class($this->getMock(Type::CLASS_NAME, array("getValue", "isValid"), array(), "", false));
    }

    /**
     * @return array
     */
    protected function provideCommonsInvalidTypeValues()
    {
        return array(
            "Should not be null"       => array(null),
            "Should not be an array"   => array(array()),
            "Should not be an object"  => array(new \stdClass),
            "Should not be a resource" => array(fopen("/tmp/test", "a")),
        );
    }
}
