<?php
/**
 * Created by PhpStorm.
 * User: kootsookosp
 * Date: 2018-01-15
 * Time: 10:48 AM
 */

abstract class abstract_functions_with_returns
{
    /**
     * @return int
     */
    public function return_something()
    {
        return 1;
    }
}

/**
 * Class concrete_functions_with_returns
 */
class concrete_functions_with_returns extends abstract_functions_with_returns
{
    public function return_something()
    {
        parent::return_something();
    }
}