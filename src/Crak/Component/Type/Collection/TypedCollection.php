<?php
/**
 * This file is property of crakmedia (http://crakmedia.com)
 *
 * PHP Version 5.4
 *
 * @author Brice Colucci <bcolucci@crakmedia.com>
 */

namespace Crak\Component\Type\Collection;

/**
 * Class BaseTypeCollection
 *
 * @author Brice Colucci <bcolucci@crakmedia.com>
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