<?php

namespace Bcol\Component\Type\Collection;

use Bcol\Component\Type\Url;

/**
 * Class UrlCollection
 *
 * @author Brice Colucci <brice.colucci@gmail.com>
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