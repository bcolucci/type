<?php
/**
 * This file is property of crakmedia (http://crakmedia.com)
 *
 * PHP Version 5.4
 *
 * @author Brice Colucci <bcolucci@crakmedia.com>
 */

namespace Crak\Component\Type\Collection;

use Crak\Component\Type\Url;

/**
 * Class UrlCollection
 *
 * @author Brice Colucci <bcolucci@crakmedia.com>
 */
class UrlCollection extends TypedCollection
{
    const CLASS_NAME = __CLASS__;

    /**
     * @return string
     */
    protected function getAllowedType()
    {
        return Url::CLASS_NAME;
    }
}