<?php

namespace Bcol\Component\Type\Collection;

use Bcol\Component\Type\Float;

/**
 * Class FloatCollection
 *
 * @author Brice Colucci <brice.colucci@gmail.com>
 */
class FloatCollection extends TypedCollection
{
    const CLASS_NAME = __CLASS__;

    /**
     * @return string
     */
    protected function getAllowedType()
    {
        return Float::CLASS_NAME;
    }
} 