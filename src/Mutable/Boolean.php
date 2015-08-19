<?php

namespace Types\Mutable;

/**
 * Created by IntelliJ IDEA.
 * User: trentonmaki
 * Date: 8/18/15
 * Time: 6:36 PM
 */
class Boolean extends MutablePrimitive
{

    /**
     * @return bool
     */
    protected function type($val)
    {
        return is_bool($val);
    }
}