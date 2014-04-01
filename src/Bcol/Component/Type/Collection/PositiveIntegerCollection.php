<?php

namespace Bcol\Component\Type\Collection;

use Bcol\Component\Type\PositiveInteger;

/**
 * Class PositiveIntegerCollection
 *
 * @author Brice Colucci <brice.colucci@gmail.com>
 */
class PositiveIntegerCollection extends TypedCollection
{
    const CLASS_NAME = __CLASS__;

    /**
     * @return string
     */
    protected function getAllowedType()
    {
        return PositiveInteger::CLASS_NAME;
    }
} 