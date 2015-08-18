<?php

/**
 * Created by IntelliJ IDEA.
 * User: trentonmaki
 * Date: 8/18/15
 * Time: 6:32 PM
 */
class String extends Primitive
{

    /**
     * @return bool
     */
    protected function type($val)
    {
        return is_string($val);
    }
}