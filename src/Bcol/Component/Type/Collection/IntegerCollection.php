<?php

namespace Bcol\Component\Type\Collection;

use Bcol\Component\Type\Integer;

/**
 * Class IntegerCollection
 *
 * @author Brice Colucci <brice.colucci@gmail.com>
 */
class IntegerCollection extends TypedCollection
{
    const CLASS_NAME = __CLASS__;

    /**
     * @return string
     */
    protected function getAllowedType()
    {
        return Integer::CLASS_NAME;
    }
}