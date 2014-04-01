<?php

namespace Bcol\Component\Type;

/**
 * Class Url
 *
 * @author Brice Colucci <brice.colucci@gmail.com>
 */
class Url extends String
{
    const CLASS_NAME = __CLASS__;

    /**
     * @param mixed $value
     *
     * @return bool
     */
    protected function stringIsValid($value)
    {
        return false !== filter_var($value, FILTER_VALIDATE_URL);
    }
}