<?php

namespace Bcol\Component\Type;

/**
 * Class Integer
 *
 * @author Brice Colucci <brice.colucci@gmail.com>
 */
class Integer extends Type
{
    const CLASS_NAME = __CLASS__;

    /**
     * @param mixed $value
     *
     * @return bool
     */
    public function isValid($value)
    {
        return is_integer($value) && $this->integerIsValid($value);
    }

    /**
     * @param mixed $value
     *
     * @return bool
     */
    protected function integerIsValid($value)
    {
        return true;
    }
} 