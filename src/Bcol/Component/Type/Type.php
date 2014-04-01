<?php

namespace Bcol\Component\Type;

/**
 * Class BaseType
 *
 * @author Brice Colucci <brice.colucci@gmail.com>
 */
abstract class Type
{
    const CLASS_NAME = __CLASS__;

    /**
     * @var mixed
     */
    private $value;

    /**
     * @param mixed $value
     *
     * @return bool
     */
    protected abstract function isValid($value);

    /**
     * @param $value
     *
     * @throws \InvalidArgumentException
     */
    public function __construct($value)
    {
        $calledClass = get_called_class();
        if ($value instanceof $calledClass) {
            $this->value = $value->getValue();
        } else {

            if (false === $this->isValid($value)) {
                throw new \InvalidArgumentException("Invalid type {$calledClass}");
            }

            $this->value = $value;
        }
    }

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }
}