<?php
/**
 * Created by PhpStorm.
 * User: shuyu
 * Date: 2019/12/19
 * Time: 14:07
 */

/**
 * 给定一个已排序的数组，给一个指定值，返回值在数组中的下标，如果不存在，返回把值插入到数组之后的下标。
 * Class Solution
 */
class Solution
{
    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer
     */
    function searchInsert($nums, $target) {
        $l=0;
        $r=count($nums)-1;
        while($l<=$r){
            $middle=$l+(($r-$l)>>1);
            if($nums[$middle]==$target) return $middle;
            if($nums[$middle]<$target){
                $l=$middle+1;
            }else{
                $r=$middle-1;
            }
        }
        return $l;
    }
}