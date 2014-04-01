<?php

namespace Bcol\Component\Type;

/**
 * Class PositiveInteger
 *
 * @author Brice Colucci <brice.colucci@gmail.com>
 */
class PositiveInteger extends Integer
{
    const CLASS_NAME = __CLASS__;

    /**
     * @param mixed $value
     *
     * @return bool
     */
    protected function integerIsValid($value)
    {
        return 0 <= $value && $this->positiveIntegerIsValid($value);
    }

    /**
     * @param mixed $value
     *
     * @return bool
     */
    protected function positiveIntegerIsValid($value)
    {
        return true;
    }
}