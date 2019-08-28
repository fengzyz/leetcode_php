<?php
/**
 * Created by PhpStorm.
 * User: shuyu
 * Date: 2019/8/28
 * Time: 15:57
 */

/**
 *
 * Class Solution
 */
class Solution
{
    /**
     * @param Integer $m
     * @param Integer $n
     * @param Integer[][] $ops
     * @return Integer
     */
    function maxCount($m, $n, $ops) {
        if(empty($ops)){
            return $m * $n;
        }
        $allIs = array_column($ops, 0);
        $allJs = array_column($ops, 1);

        return min($allIs) * min($allJs);
    }
}