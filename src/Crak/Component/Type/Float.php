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
 * Class Float
 *
 * @author Brice Colucci <bcolucci@crakmedia.com>
 */
class Float extends Type
{
    const CLASS_NAME = __CLASS__;

    /**
     * @param mixed $value
     *
     * @return bool
     */
    public function isValid($value)
    {
        return is_float($value);
    }
} 