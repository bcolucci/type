<?php

namespace Bcol\Component\Type\Collection;

/**
 * Class BaseTypeCollection
 *
 * @author Brice Colucci <brice.colucci@gmail.com>
 */
abstract class TypedCollection extends \Star\Component\Collection\TypedCollection
{
    const CLASS_NAME = __CLASS__;

    /**
     * @return string
     */
    abstract protected function getAllowedType();

    /**
     * @param array $elements
     */
    public function __construct($elements = array())
    {
        if (!is_array($elements)) {
            $elements = func_get_arg(1);
        }

        parent::__construct($this->getAllowedType(), $elements);
    }
} 