<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/6/27
 * Time: 21:43
 */


/***************************************************
 * Class Solution
 *
 * 给出一个 32 位的有符号整数，你需要将这个整数中每位上的数字进行反转。
 *   示例 1:
 *   输入: 123
 *   输出: 321
 ******************************************************/
class Solution
{
    function reverse($x) {
        $true=1;
        if($x<0) $true= -1;
        $x *= $true;
        $x=strrev($x);
        $x = intval($x) * $true;
        if ($x >= pow(2, 31) - 1) return 0;
        if ($x <= pow(2, 31) * -1) return 0;
        return $x;
    }
}