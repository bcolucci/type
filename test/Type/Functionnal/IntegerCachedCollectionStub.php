<?php

namespace Test\Type\Functional;

use Bcol\Component\Type\Collection\TypedCachedCollection;
use Bcol\Component\Type\Integer;

/**
 * Class IntegerCachedCollectionStub
 *
 * @author Brice Colucci <brice.colucci@gmail.com>
 */
class IntegerCachedCollectionStub extends TypedCachedCollection
{
    /**
     * @return string
     */
    protected function getAllowedType()
    {
        return Integer::CLASS_NAME;
    }
}