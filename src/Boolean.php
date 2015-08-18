<?php

/**
 * Created by IntelliJ IDEA.
 * User: trentonmaki
 * Date: 8/18/15
 * Time: 6:36 PM
 */
class Boolean extends Primitive
{

    /**
     * @return bool
     */
    protected function type($val)
    {
        return is_bool($val);
    }
}