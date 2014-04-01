<?php
/**
 * This file is property of crakmedia (http://crakmedia.com)
 *
 * PHP Version 5.4
 *
 * @author    Brice Colucci <bcolucci@crakmedia.com>
 */

namespace Crak\Component\Type;

/**
 * Class PositiveInteger
 *
 * @author Brice Colucci <bcolucci@crakmedia.com>
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