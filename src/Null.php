<?php

/**
 * Created by IntelliJ IDEA.
 * User: trentonmaki
 * Date: 8/18/15
 * Time: 6:34 PM
 */
class Null extends Primitive
{


    /**
     * @return bool
     */
    protected function type($val)
    {
        return is_null($val);
    }
}