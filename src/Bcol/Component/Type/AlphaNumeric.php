<?php

namespace Bcol\Component\Type;

/**
 * Class AlphaNumeric
 *
 * @author Brice Colucci <brice.colucci@gmail.com>
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