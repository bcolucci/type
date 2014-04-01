<?php
/**
 * This file is property of crakmedia (http://crakmedia.com)
 *
 * PHP Version 5.4
 *
 * @author Brice Colucci <bcolucci@crakmedia.com>
 */

namespace Crak\Component\Type\Collection;

use Crak\Component\Type\PositiveInteger;

/**
 * Class PositiveIntegerCollection
 *
 * @author Brice Colucci <bcolucci@crakmedia.com>
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