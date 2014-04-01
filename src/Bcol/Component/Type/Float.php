<?php

namespace Bcol\Component\Type;

/**
 * Class Float
 *
 * @author Brice Colucci <brice.colucci@gmail.com>
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