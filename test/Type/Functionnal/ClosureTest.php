<?php
/**
 * This file is property of crakmedia (http://crakmedia.com)
 * Copyright 2014 Crakmedia
 */
namespace Test\Type\Functional;

use Bcol\Component\Type\Closure;

/**
 * Class ClosureTest
 *
 * @author  bcolucci <bcolucci@crakmedia.com>
 * @package Test\Type\Functional
 */
class ClosureTest extends \PHPUnit_Framework_TestCase
{
    public function testShouldInvokeACallbable()
    {
        $closure = new Closure(function ($a) {
            return $a + 1;
        });
        $this->assertSame(2, $closure->invoke(1));
    }
} 