<?php

namespace Bcol\Component\Type\Collection;

use Bcol\Component\Type\Email;

/**
 * Class EmailCollection
 *
 * @author Brice Colucci <brice.colucci@gmail.com>
 */
class EmailCollection extends TypedCollection
{
    const CLASS_NAME = __CLASS__;

    /**
     * @return string
     */
    protected function getAllowedType()
    {
        return Email::CLASS_NAME;
    }
} 