<?php

namespace Types\Mutable;

/**
 * Created by IntelliJ IDEA.
 * User: trentonmaki
 * Date: 8/18/15
 * Time: 6:25 PM
 */
class Integer extends MutablePrimitive
{

    /**
     * @return bool
     */
    protected function type($val)
    {
        return is_int($val);
    }
}