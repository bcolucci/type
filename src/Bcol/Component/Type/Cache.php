<?php

namespace Bcol\Component\Type;

/**
 * Interface Cache
 *
 * @author Brice Colucci <brice.colucci@gmail.com>
 */
interface Cache
{
    /**
     * @param string $key
     * @param mixed  $value
     *
     * @return mixed
     */
    public function add($key, $value);

    /**
     * @param $key
     *
     * @return mixed
     */
    public function get($key);
} 