<?php

namespace DataStructureAlgorithm\Stack;
require './CustomStack.php';

class CustomStack
{
    private $stack;
    public function __construct() 
    {
        $this->stack = new \DS\Stack();
    }

    public function push(object $object) 
    {
        $this->stack->push($object);
    }

    public function toArray() : array
    {
        return $this->stack->toArray();
    }
}
