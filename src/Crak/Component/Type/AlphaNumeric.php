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
 * Class AlphaNumeric
 *
 * @author Brice Colucci <bcolucci@crakmedia.com>
 */
class AlphaNumeric extends String
{
    const CLASS_NAME = __CLASS__;

    /**
     * @param mixed $value
     *
     * @return bool
     */
    protected function stringIsValid($value)
    {
        return 1 === preg_match("/^[a-z0-9]+$/i", $value);
    }
} 