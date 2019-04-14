<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/4/14
 * Time: 10:20
 */

/**********************************************************************************
 *
 * 给定一个字符串，请你找出其中不含有重复字符的 最长子串 的长度。
 * 示例 1:
 * 输入: "abcabcbb"
 * 输出: 3
 * 解释: 因为无重复字符的最长子串是 "abc"，所以其长度为 3。
 *
 ***********************************************************************************/
class Solution {
    function lengthOfLongestSubstring($s) {
        $length = 0;
        $substring = '';

        for ($i = 0; $i < strlen($s); $i++)
        {
            $pos = strpos($substring, $s[$i]);
            if ($pos !== FALSE)
            {
                $count = strlen($substring);
                $length = $count > $length ? $count : $length;
                $substring = substr($substring, $pos + 1).$s[$i];
            }
            else
            {
                $substring .= $s[$i];

                if ($i == strlen($s) - 1)
                {
                    $count = strlen($substring);
                    $length = $count > $length ? $count : $length;
                }
            }
        }

        return $length;
    }
}
$solution = new Solution();
$s =  'abcabcbbsccdbbccd';
$length = $solution->lengthOfLongestSubstring($s);
echo $length;