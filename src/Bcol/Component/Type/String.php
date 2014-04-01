<?php

namespace Bcol\Component\Type;

/**
 * Class String
 *
 * @author Brice Colucci <brice.colucci@gmail.com>
 */
class String extends Type
{
    const CLASS_NAME = __CLASS__;

    /**
     * @param mixed $value
     *
     * @return bool
     */
    protected function isValid($value)
    {
        return is_string($value) && $this->stringIsValid($value);
    }

    /**
     * @param mixed $value
     *
     * @return bool
     */
    protected function stringIsValid($value)
    {
        return true;
    }
}