<?php

namespace Bcol\Component\Type;

/**
 * Class NonEmptyString
 *
 * @author Brice Colucci <brice.colucci@gmail.com>
 */
class NonEmptyString extends String
{
    const CLASS_NAME = __CLASS__;

    /**
     * @param mixed $value
     *
     * @return bool
     */
    protected function stringIsValid($value)
    {
        return 0 < strlen(trim($value));
    }
} 