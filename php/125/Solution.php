<?php
/**
 * Created by PhpStorm.
 * User: shuyu
 * Date: 2019/8/28
 * Time: 15:36
 */

/**
 * 给定一个字符串，验证它是否是回文串，只考虑字母和数字字符，可以忽略字母的大小写。
 * 说明：本题中，我们将空字符串定义为有效的回文串。
 * Class Solution
 */
class Solution
{
    /**
     * @param String $s
     * @return Boolean
     */
    function isPalindrome($s) {
        $s = preg_replace('/[^a-z0-9]+/', '', strtolower($s));
        return $s === strrev($s);
    }
}
$solution = new Solution();
$str = "A man, a plan, a canal: Panama";
$solution->isPalindrome($str);