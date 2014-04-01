<?php
/**
 * This file is property of crakmedia (http://crakmedia.com)
 *
 * PHP Version 5.4
 *
 * @author Brice Colucci <bcolucci@crakmedia.com>
 */

namespace Test\Type\Functionnal;

require_once __DIR__ . "/IntegerCache.php";

use Crak\Component\Type\Integer;
use Crak\Component\Type\TypedCache;

/**
 * Class TypedCacheTest
 *
 * @author Brice Colucci <bcolucci@crakmedia.com>
 */
class TypedCacheTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var TypedCache
     */
    private $cache;

    public function setUp()
    {
        $this->cache = new IntegerCache("an_integer_cache_");
    }

    public function testShouldBeACollectionAndBePersitent()
    {
        $this->cache->clear();
        $this->cache->add(new Integer(1));
        $this->cache->add(new Integer(2));
        $this->cache->add(new Integer(3));
        $this->cache->persist();

        $i1 = $this->cache->get(0);
        $i2 = $this->cache->get(1);
        $i3 = $this->cache->get(2);

        $this->assertSame("123", $i1->getValue() . $i2->getValue() . $i3->getValue());
    }

    /**
     * @depends testShouldBeACollectionAndBePersitent
     */
    public function testShouldGetBackItsPersistentValues()
    {
        $this->assertSame(3, $this->cache->count());

        $values = $this->cache->toArray();
        $this->assertInstanceOf(Integer::CLASS_NAME, $values[0]);

        $this->assertSame(1, $values[0]->getValue());
        $this->assertSame(2, $values[1]->getValue());
        $this->assertSame(3, $values[2]->getValue());
    }

    public function testShouldBeFilterable()
    {
        $cacheWithoutOneAndThree = $this->cache->filter(function (Integer $i) {
            return 2 === $i->getValue();
        });

        $this->assertSame(1, $cacheWithoutOneAndThree->count());
        $this->assertSame(2, $cacheWithoutOneAndThree->first()->getValue());
    }
} 