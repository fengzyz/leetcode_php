<?php
/**
 * Created by PhpStorm.
 * User: shuyu
 * Date: 2019/8/28
 * Time: 16:19
 */

/**
 * 给定一个整数 n，求以 1 ... n 为节点组成的二叉搜索树有多少种
 * Class Solution
 */
class Solution
{
    /**
     * @param Integer $n
     * @return Integer
     */
    function numTrees($n) {
        $dp[0]=$dp[1]=1;
        for($i=2;$i<=$n;$i++){
            for($j=0;$j<$i;$j++){
                $dp[$i]+=$dp[$j]*$dp[$i-$j-1];
            }
        }
        return $dp[$n];
    }
}