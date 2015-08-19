<?php

namespace Types;

/**
 * Created by IntelliJ IDEA.
 * User: trentonmaki
 * Date: 8/18/15
 * Time: 6:33 PM
 */
class Float extends Primitive
{


    /**
     * @return bool
     */
    protected function type($val)
    {
        return is_float($val);
    }
}