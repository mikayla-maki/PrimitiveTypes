<?php

namespace Types\Mutable;
use InvalidArgumentException;

/**
 * Created by IntelliJ IDEA.
 * User: trentonmaki
 * Date: 8/18/15
 * Time: 6:27 PM
 */
abstract class MutablePrimitive
{

    private $val;

    public function __construct($val)
    {
        if(!$this->type($val)) {
            throw new InvalidArgumentException("Incorrect type passed");
        }
        $this->val = $val;
    }

    public function get()
    {
        return $this->val;
    }

    public function set($val)
    {
        if(!$this->type($val)) {
            throw new InvalidArgumentException("Incorrect type passed");
        }
        $this->val = $val;
    }

    /**
     * @return bool
     */
    protected abstract function type($val);

}