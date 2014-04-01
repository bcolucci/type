<?php

namespace Bcol\Component\Type\Collection;

use Bcol\Component\Type\String;

/**
 * Class StringCollection
 *
 * @author Brice Colucci <brice.colucci@gmail.com>
 */
class StringCollection extends TypedCollection
{
    const CLASS_NAME = __CLASS__;

    /**
     * @return string
     */
    protected function getAllowedType()
    {
        return String::CLASS_NAME;
    }
} 