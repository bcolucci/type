<?php

namespace Bcol\Component\Type;

/**
 * Class Boolean
 *
 * @author Brice Colucci <brice.colucci@gmail.com>
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