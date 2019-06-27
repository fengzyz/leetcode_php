<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/6/27
 * Time: 21:51
 */

/***********************************
 * Class Solution
 * 编写一个函数来查找字符串数组中的最长公共前缀。
 * 如果不存在公共前缀，返回空字符串 ""。
 * 示例 1:
 * 输入: ["flower","flow","flight"]
 * 输出: "fl"。
 ***********************************/
class Solution
{
    /**
     * @param String[] $strs
     * @return String
     */
    function longestCommonPrefix($strs) {
        if(empty($strs)) return "";
        for($i=0;$i<strlen($strs[0]);$i++){
            $temp=$strs[0][$i];
            for($j=1;$j<count($strs);$j++){
                if($i==strlen($strs[$j]) || $strs[$j][$i] != $temp){
                    $strs[0]=substr($strs[0],0,$i);
                }
            }
        }
        return $strs[0];
    }
}
$strs = ["flower","flow","flight"];   //输出fl
//$strs = ["dog","racecar","car"];   //输出""
$solution = new Solution();
echo $solution->longestCommonPrefix($strs);

echo longestCommonPrefix($strs);

//优化算法
function longestCommonPrefix($strs){
    if(empty($strs)) return "";
    return longCommon($strs,0,count($strs)-1);
}

function longCommon($strs,$l,$r)
{
    if($l==$r) return $strs[$l];
    else{
        $mid = $l+(($r-$l)>>1) ;
        $left= longCommon($strs,$l,$mid);
        $right= longCommon($strs,$mid+1,$r);
        return  commonPrefix($left,$right);
    }
}

function commonPrefix($left,$right)
{
    $min=min(strlen($left),strlen($right));
    for($i=0;$i<$min;$i++){
        if($left[$i] != $right[$i]){
            return substr($left,0,$i);
        }
    }
    return substr($left,0,$min);
}