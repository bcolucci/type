<?php
/**
 * This file is property of crakmedia (http://crakmedia.com)
 *
 * PHP Version 5.4
 *
 * @author Brice Colucci <bcolucci@crakmedia.com>
 */

namespace Crak\Component\Type\Collection;

use Crak\Component\Type\AlphaNumeric;

/**
 * Class AlphaNumericCollection
 *
 * @author Brice Colucci <bcolucci@crakmedia.com>
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