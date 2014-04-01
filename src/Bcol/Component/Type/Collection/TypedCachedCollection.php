<?php

namespace Bcol\Component\Type\Collection;

use Bcol\Component\Type\Cache;
use Bcol\Component\Type\NonEmptyString;
use Closure;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Criteria;
use Star\Component\Collection\TypedCollection;

/**
 * Class TypedCachedCollection
 *
 * @author Brice Colucci <brice.colucci@gmail.com>
 */
abstract class TypedCachedCollection extends TypedCollection
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var Cache
     */
    private $cache;

    /**
     * @return string
     */
    abstract protected function getAllowedType();

    /**
     * @param string $name
     */
    public function __construct($name, Cache $cache, array $elements = null)
    {
        $this->name = new NonEmptyString($name);
        $this->name = $this->name->getValue();

        $this->cache = $cache;

        if (!is_array($elements)) {
            $elements = $this->cache->get($this->name);
        }
        if (!is_array($elements)) {
            $elements = array();
        }

        parent::__construct($this->getAllowedType(), $elements);
    }

    public function persist()
    {
        $this->cache->add($this->name, $this->toArray());
    }

    /**
     * @return Cache
     */
    public function getCache()
    {
        return $this->cache;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return ArrayCollection
     */
    private function getCollection()
    {
        return new ArrayCollection($this->getValues());
    }

    /**
     * @param callable $p
     *
     * @return \Doctrine\Common\Collections\Collection|static
     */
    public function filter(Closure $p)
    {
        $elements = $this->getCollection()->filter($p)->toArray();

        return new static($this->name, $this->cache, $elements);
    }

    /**
     * @param callable $p
     *
     * @return array
     */
    public function partition(Closure $p)
    {
        $partition = $this->getCollection()->partition($p);

        return array(
            new static($this->name, $this->cache, $partition[0]->toArray()),
            new static($this->name, $this->cache, $partition[1]->toArray()),
        );
    }

    /**
     * @param Criteria $criteria
     *
     * @return \Doctrine\Common\Collections\Collection|static
     */
    function matching(Criteria $criteria)
    {
        $elements = $this->getCollection()->matching($criteria)->toArray();

        return new static($this->name, $this->cache, $elements);
    }
}