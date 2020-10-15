<?php

abstract class Collection implements CollectionInterface
{
    protected $repo, $entity;
    public $collection;
    
    public function __construct(RepositoryInterface $repo, $id = null, $field = 'id') {
        $this->repo = $repo;
        $this->setEntity();
        if (!empty($id)) {
            $this->collection = $this->repo->find($this->entity, $id, $field);
        } else {
            $this->collection = $this->repo->all($this->entity);
        }
    }
    
    public function shortDescription()
    {
        if (strlen($this->current()->details) < 510) {
            return strip_tags($this->current()->details);
        }
        
        return strip_tags(
            substr(
                $this->current()->details,
                0,
                strpos($this->current()->details, ' ', 500)
            )
        ) . '...';
    }
    
    public function current()
    {
        //var_dump(_METHOD_);
        return current($this->collection);
    }
    
    public function key()
    {
        //var_dump(_METHOD_);
        return key($this->collection);
    }
    
    public function next()
    {
        //var_dump(_METHOD_);
        return next($this->collection);
    }
    
    public function rewind()
    {
        //var_dump(_METHOD_);
        return reset($this->collection);
    }
    
    public function valid()
    {
        //var_dump(_METHOD_);
        return key($this->collection)!==null;
    }
    
    public function count()
    {
        return count($this->collection);
    }

    abstract protected function setEntity();
}