<?php

namespace Bcol\Component\Type\Collection;

use Bcol\Component\Type\Pattern;

/**
 * Class PatternCollection
 *
 * @author Brice Colucci <brice.colucci@gmail.com>
 */
class PatternCollection extends TypedCollection
{
    const CLASS_NAME = __CLASS__;

    /**
     * @return string
     */
    protected function getAllowedType()
    {
        return Pattern::CLASS_NAME;
    }
}