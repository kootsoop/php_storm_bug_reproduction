<?php
/**
 * Created by PhpStorm.
 * User: kootsookosp
 * Date: 2018-01-26
 * Time: 10:33 AM
 */

/**
 * As is, this code passes current inspections.
 *
 * If I delete all of class_one, it still passes inspections. :-(
 *
 */

/**
 * Class class_one
 */
class class_one
{
    /**
     * @return int
     */
    static function get_something()
    {
        return 1;
    }
}

/**
 * Class class_two
 */
class class_two
{
    /**
     * class_two constructor.
     */
    public function __construct()
    {
        class_one::get_something();
    }
}