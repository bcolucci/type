<?php
/**
 * This file is property of crakmedia (http://crakmedia.com)
 *
 * PHP Version 5.4
 *
 * @author Brice Colucci <bcolucci@crakmedia.com>
 */

namespace Crak\Component\Type\Collection;

use Crak\Component\Type\Integer;

/**
 * Class IntegerCollection
 *
 * @author Brice Colucci <bcolucci@crakmedia.com>
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