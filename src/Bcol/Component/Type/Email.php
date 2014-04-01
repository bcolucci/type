<?php

namespace Bcol\Component\Type;

/**
 * Class Email
 *
 * @author Brice Colucci <brice.colucci@gmail.com>
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