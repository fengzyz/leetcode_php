<?php
/**
 * Created by PhpStorm.
 * User: shuyu
 * Date: 2019/8/29
 * Time: 10:42
 */

class Solution
{
    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer
     */
    function search($nums, $target) {
        $l=0;
        $r=count($nums)-1;
        while($l <= $r){
            $middle=$l+(($r-$l)>>1);
            if($nums[$middle]===$target) return $middle;
            else if($nums[$middle]<$nums[$r]){
                if($nums[$middle]<$target && $nums[$r]>=$target) $l=$middle+1;
                else $r=$middle-1;
            }else{
                if($nums[$l]<=$target && $nums[$middle]>$target) $r=$middle-1;
                else $l=$middle+1;
            }
        }
        return -1;
    }
}