<?php
/**
 * Created by PhpStorm.
 * User: shuyu
 * Date: 2019/8/27
 * Time: 9:48
 */

/**
 * 给定一个包含大写字母和小写字母的字符串，找到通过这些字母构造成的最长的回文串。
 * 在构造过程中，请注意区分大小写。比如 "Aa" 不能当做一个回文字符串。
 * 注意:
 * 假设字符串的长度不会超过 1010。
 * 示例 1:
 * 输入:
 * "abccccdd"输出:7
 * 解释:
 * 我们可以构造的最长的回文串是"dccaccd", 它的长度是 7。
 * Class Solution
 */
class Solution
{
    /**
     * @param String $s
     * @return Integer
     */
    function longestPalindrome($s) {
        $s = str_split($s);
        $amounts = array_count_values($s);
        $odd = [];
        $even = [];
        array_walk($amounts, function($v, $k) use (&$odd, &$even){
            if($v%2 != 0){
                $odd[$k] = $v;
            }
            else{
                $even[$k] = $v;
            }
        });
        $odds = count($odd);
        if(!empty($odds)){
            $odds--;
        }
        $total = array_sum($even) + array_sum($odd) - $odds;
        return $total;
    }
}