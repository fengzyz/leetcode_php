<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/6/26
 * Time: 21:33
 */

/*******************************************************************
 * Class Solution
 * 给定一个字符串 s，找到 s 中最长的回文子串。你可以假设 s 的最大长度为 1000。
 * 示例 1：
 * 输入: "babad"
 * 输出: "bab"
 * 注意: "aba" 也是一个有效答案。
 *
 *******************************************************************/
class Solution
{
    /**
     * @param String $s
     * @return String
     */
    function longestPalindrome($s) {
        if(strlen($s)<2){
            return $s;
        }
        $max=$s[0];
        for($i=0;$i<strlen($s);$i++){
            for($j=$i+1;$j<strlen($s);++$j){
                $str=substr($s,$i,$j-$i+1);
                $strrev=strrev($str);
                if($str==$strrev && strlen($str)>strlen($max)){
                    $max=$str;
                }
            }
        }
        return $max;
    }
}

$solution = new Solution();
$s =  'babad';
$str = $solution->longestPalindrome($s);
echo $str;