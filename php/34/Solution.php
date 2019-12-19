<?php
/**
 * Created by PhpStorm.
 * User: shuyu
 * Date: 2019/12/19
 * Time: 14:04
 */

/**
 *
 * 给定一个有序数组，在这个有序数组中找出给定值初始位置和最后出现的位置索引。如果没有，返回[-1,-1]
 * Class Solution
 *
 */
class Solution
{
    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function searchRange($nums, $target)
    {
        $data = [-1, -1];

        if (count($nums) == 0) {
            return $data;
        }
        $left  = 0;
        $right = count($nums) - 1;

        while ($left < $right) {
            $middle = ($left + $right) >> 1;
            if ($nums[$middle] < $target) {
                $left = $middle + 1;
            } else {
                $right = $middle;
            }
        }
        if ($nums[$left] == $target) {
            $data[0] = $left;
            if ($nums[++$left] != $target) {
                $data[1] = $data[0];
            } else {
                $r = count($nums) - 1;
                $l = $left;
                while ($l < $r) {
                    $middle = ($l + $r + 1) >> 1;
                    if ($nums[$middle] > $target) {
                        $r = $middle - 1;
                    } else {
                        $l = $middle;
                    }
                }
                $data[1] = $r;

            }
        }
        return $data;
    }
}