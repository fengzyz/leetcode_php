<?php
/**
 * Created by PhpStorm.
 * User: shuyu
 * Date: 2019/9/9
 * Time: 9:46
 */

/**
 * 假设你正在爬楼梯。需要 n 阶你才能到达楼顶。
 * 每次你可以爬 1 或 2 个台阶。你有多少种不同的方法可以爬到楼顶呢？
 * Class Solution
 */
class Solution
{
    /**
     * @param Integer $n
     * @return Integer
     */
    function climbStairs($n) {
        if($n <= 2 ){
            return $n;
        }
        $twoBack=1;$oneBack=2;
        $currt=0;
        for($i=3;$i<=$n;$i++){
            $currt=$twoBack+$oneBack;
            $twoBack=$oneBack;
            $oneBack=$currt;
        }
        return $currt;
    }
}