<?php
/**
 * This file is property of crakmedia (http://crakmedia.com)
 *
 * PHP Version 5.4
 *
 * @author Brice Colucci <bcolucci@crakmedia.com>
 */

namespace Test\Type\Functionnal;

use Crak\Component\Type\Integer;
use Crak\Component\Type\TypedCache;

/**
 * Class IntegerCache
 *
 * @author Brice Colucci <bcolucci@crakmedia.com>
 */
class IntegerCache extends TypedCache
{
    /**
     * @return string
     */
    protected function getAllowedType()
    {
        return Integer::CLASS_NAME;
    }

    /**
     * @return \Memcache
     */
    protected function getCachePool()
    {
        $cache = new \Memcache();
        $cache->addserver("localhost");

        return $cache;
    }
}