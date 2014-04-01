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
 * Class Boolean
 *
 * @author Brice Colucci <bcolucci@crakmedia.com>
 */
class Boolean extends Type
{
    const CLASS_NAME = __CLASS__;

    /**
     * @param mixed $value
     *
     * @return bool
     */
    public function isValid($value)
    {
        return is_bool($value);
    }
} 