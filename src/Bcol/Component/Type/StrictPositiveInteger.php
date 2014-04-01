<?php

namespace Bcol\Component\Type;

/**
 * Class StrictPositiveInteger
 *
 * @author Brice Colucci <brice.colucci@gmail.com>
 */
class StrictPositiveInteger extends PositiveInteger
{
    const CLASS_NAME = __CLASS__;

    /**
     * @param mixed $value
     *
     * @return bool
     */
    protected function positiveIntegerIsValid($value)
    {
        return 0 !== $value;
    }
} 