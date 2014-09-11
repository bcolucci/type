<?php
/**
 * This file is property of crakmedia (http://crakmedia.com)
 * Copyright 2014 Crakmedia
 */
namespace Bcol\Component\Type;

/**
 * Class Closure
 *
 * @author  bcolucci <bcolucci@crakmedia.com>
 * @package Bcol\Component\Type
 */
class Closure
{
    /**
     * @var callable
     */
    private $callable;

    /**
     * @param callable $callable
     */
    public function __construct(callable $callable)
    {
        $this->callable = $callable;
    }

    /**
     * @return mixed
     */
    public function invoke()
    {
        return call_user_func_array(array($this->callable, '__invoke'), func_get_args());
    }
} 