<?php
/**
 * This file is property of crakmedia (http://crakmedia.com)
 *
 * PHP Version 5.4
 *
 * @author Brice Colucci <bcolucci@crakmedia.com>
 */

namespace Crak\Component\Type;

use Closure;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Criteria;
use Star\Component\Collection\TypedCollection;

/**
 * Class TypedCache
 *
 * @author Brice Colucci <bcolucci@crakmedia.com>
 */
abstract class TypedCache extends TypedCollection
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var \Memcache
     */
    private $cache;

    /**
     * @return string
     */
    abstract protected function getAllowedType();

    /**
     * @return \Memcache
     */
    abstract protected function getCachePool();

    /**
     * @param string $name
     */
    public function __construct($name /*, array $elements*/)
    {
        $this->name = new NonEmptyString($name);
        $this->name = $this->name->getValue();

        $this->cache = $this->getCachePool();

        $elements = array();
        if (func_num_args() === 2) {
            $elements = func_get_arg(1);
        } else {
            $elements = $this->cache->get($this->name);
        }

        if (!is_array($elements)) {
            $elements = array();
        }

        parent::__construct($this->getAllowedType(), $elements);
    }

    public function persist()
    {
        $this->cache->set($this->name, $this->toArray());
    }

    private function getCollection()
    {
        return new ArrayCollection($this->getValues());
    }

    public function filter(Closure $p)
    {
        $elements = $this->getCollection()->filter($p)->toArray();

        return new static($this->name, $elements);
    }

    public function partition(Closure $p)
    {
        $partition = $this->getCollection()->partition($p);

        return array(
            new static($this->name, $partition[0]->toArray()),
            new static($this->name, $partition[1]->toArray()),
        );
    }

    function matching(Criteria $criteria)
    {
        $elements = $this->getCollection()->matching($criteria)->toArray();

        return new static($this->name, $elements);
    }
}