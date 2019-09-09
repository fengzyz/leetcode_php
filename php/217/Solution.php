<?php
/**
 * Created by PhpStorm.
 * User: shuyu
 * Date: 2019/9/9
 * Time: 9:36
 */

/**
 * 给定一个整数数组，判断是否存在重复元素。
 * 如果任何值在数组中出现至少两次，函数返回 true。如果数组中每个元素都不相同，则返回 false。
 * Class Solution
 */
class Solution
{
    /**
     * @param Integer[] $nums
     * @return Boolean
     */
    function containsDuplicate($nums) {
        sort($nums);
        for($i = 0;$i<count($nums)-1; $i++){
            if($nums[$i] == $nums[$i+1]){
                return true;
            }
        }
        return false;
    }
}