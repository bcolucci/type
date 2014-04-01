<?php

namespace Bcol\Component\Type\Collection;

use Bcol\Component\Type\StrictPositiveInteger;

/**
 * Class StrictPositiveIntegerCollection
 *
 * @author Brice Colucci <brice.colucci@gmail.com>
 */
class StrictPositiveIntegerCollection extends TypedCollection
{
    const CLASS_NAME = __CLASS__;

    /**
     * @return string
     */
    protected function getAllowedType()
    {
        return StrictPositiveInteger::CLASS_NAME;
    }
} 