<?php

namespace Bcol\Component\Type;

/**
 * Class Pattern
 *
 * @author Brice Colucci <brice.colucci@gmail.com>
 */
class Pattern extends NonEmptyString
{
    const CLASS_NAME = __CLASS__;

    /**
     * @param string|String $subject
     * @param array         $matched = null
     * @param int           $flags   = 0
     * @param int           $offset  = 0
     *
     * @return int
     */
    public function match($subject, array &$matched = null, $flags = 0, $offset = 0)
    {
        $subject = new String($subject);

        return preg_match($this->getValue(), $subject->getValue(), $matched, $flags, $offset);
    }

    /**
     * @param string|String $subject
     * @param array         $matches = null
     * @param int           $flags   = PREG_PATTERN_ORDER
     * @param int           $offset  = 0
     *
     * @return int
     */
    public function matchAll($subject, array &$matches = null, $flags = PREG_PATTERN_ORDER, $offset = 0)
    {
        $subject = new String($subject);

        return preg_match_all($this->getValue(), $subject->getValue(), $matches, $flags, $offset);
    }
} 