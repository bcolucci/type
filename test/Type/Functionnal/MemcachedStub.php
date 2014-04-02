<?php

namespace Test\Type\Functional;

use Bcol\Component\Type\Cache;

/**
 * Class MemcachedStub
 *
 * @author Brice Colucci <brice.colucci@gmail.com>
 */
class MemcachedStub implements Cache
{
    /**
     * @var \Memcache
     */
    private $cache;

    public function __construct()
    {
        if (!class_exists('\Memcache')) {
            throw new \PHPUnit_Framework_SkippedTestError('Test cannot be ran, you need Memcache');
        }

        $this->cache = new \Memcache();
        $this->cache->addserver("localhost");
    }

    /**
     * @param string $key
     * @param mixed  $value
     *
     * @return mixed
     */
    public function add($key, $value)
    {
        $this->cache->add($key, $value);
    }

    /**
     * @param $key
     *
     * @return mixed
     */
    public function get($key)
    {
        return $this->cache->get($key);
    }
}