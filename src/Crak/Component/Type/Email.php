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
 * Class Email
 *
 * @author Brice Colucci <bcolucci@crakmedia.com>
 */
class Email extends String
{
    const CLASS_NAME = __CLASS__;

    /**
     * @param mixed $value
     *
     * @return bool
     */
    protected function stringIsValid($value)
    {
        return false !== filter_var($value, FILTER_VALIDATE_EMAIL);
    }
}