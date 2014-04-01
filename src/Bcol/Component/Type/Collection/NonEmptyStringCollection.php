<?php

namespace Bcol\Component\Type\Collection;

use Bcol\Component\Type\NonEmptyString;

/**
 * Class NonEmptyStringCollection
 *
 * @author Brice Colucci <brice.colucci@gmail.com>
 */
class NonEmptyStringCollection extends TypedCollection
{
    const CLASS_NAME = __CLASS__;

    /**
     * @return string
     */
    protected function getAllowedType()
    {
        return NonEmptyString::CLASS_NAME;
    }
} 