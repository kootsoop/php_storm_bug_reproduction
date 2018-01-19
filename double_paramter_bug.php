<?php
/**
 * Created by PhpStorm.
 * User: kootsookosp
 * Date: 2018-01-19
 * Time: 9:15 AM
 */

/**
 * Class php_double_parameter_bug
 */
class php_double_parameter_bug
{
    /**
     * @param double $latitude
     * @param double $longitude
     * @return float
     */
    public function some_function_generating_wrong_argument_type_does_not_match_warning($latitude = 53.344417000000000, $longitude = -6.238174000000000)
    {
        return $latitude + $longitude;
    }

    /**
     * @param double $latitude
     * @param int $longitude
     * @return float
     */
    public function some_function_that_is_clearly_wrong($latitude = 53.344417000000000, $longitude = -6.238174000000000)
    {
        return $latitude + $longitude;
    }
}

