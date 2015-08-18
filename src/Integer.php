<?php

/**
 * Created by IntelliJ IDEA.
 * User: trentonmaki
 * Date: 8/18/15
 * Time: 6:25 PM
 */
class Int extends Primitive
{

    /**
     * @return bool
     */
    protected function type($val)
    {
        return is_int($val);
    }
}