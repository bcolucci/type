<?php

namespace Bcol\Component\Type\Collection;

use Bcol\Component\Type\AlphaNumeric;

/**
 * Class AlphaNumericCollection
 *
 * @author Brice Colucci <brice.colucci@gmail.com>
 */
class AlphaNumericCollection extends TypedCollection
{
    const CLASS_NAME = __CLASS__;

    /**
     * @return string
     */
    protected function getAllowedType()
    {
        return AlphaNumeric::CLASS_NAME;
    }
} 