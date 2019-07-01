<?php
/**
 * Created by PhpStorm.
 * User: shuyu
 * Date: 2019/7/1
 * Time: 16:27
 */

/**************************************
 * Class Solution
 * 编写一个程序，找出第 n 个丑数。
 * 丑数就是只包含质因数 2, 3, 5 的正整数。
 * 示例:
 * 输入: n = 10
 * 输出: 12
 * 解释: 1, 2, 3, 4, 5, 6, 8, 9, 10, 12 是前 10 个丑数。
 * 说明:  
 * 1 是丑数。
 * n 不超过1690。
 */
class Solution
{
    /**
     * @param Integer $n
     * @return Integer
     */
    function nthUglyNumber($n) {
        $index2 = $index3 = $index5 = 0;
        $num = $res = array_fill(0, 1690, 0);
        $num[0] = 1;
        $res[0] = 1;

        $begin = 1;
        while ($begin < $n) {
            $res[$begin] = min($res[$index2] * 2, min($res[$index3] *3, $res[$index5] * 5));

            if ($res[$begin] == $res[$index2] * 2) $index2++;
            if ($res[$begin] == $res[$index3] * 3) $index3++;
            if ($res[$begin] == $res[$index5] * 5) $index5++;
            $begin++;
        }
        return $res[--$begin];
    }
}

