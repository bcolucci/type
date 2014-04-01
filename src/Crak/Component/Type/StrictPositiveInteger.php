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
 * Class StrictPositiveInteger
 *
 * @author Brice Colucci <bcolucci@crakmedia.com>
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