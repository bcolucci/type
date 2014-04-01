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
 * Class String
 *
 * @author Brice Colucci <bcolucci@crakmedia.com>
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