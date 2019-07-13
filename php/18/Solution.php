<?php

/********************************
 * Class Solution
 * 给定一个包含 n 个整数的数组 nums 和一个目标值 target，判断 nums 中是否存在四个元素 a，b，c 和 d ，使得 a + b + c + d 的值与 target 相等？找出所有满足条件且不重复的四元组。
 * 注意：
 * 答案中不可以包含重复的四元组。
 * 示例：
 * 给定数组 nums = [1, 0, -1, 0, -2, 2]，和 target = 0。
 * 满足要求的四元组集合为：
 * [
 * [-1,  0, 0, 1],
 * [-2, -1, 1, 2],
 * [-2,  0, 0, 2]
 * ]
 */
class Solution
{
    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[][]
     */
    function fourSum($nums, $target) {
        $result=[];
        if(count($nums)<4) return $result;
        sort($nums);
        $count=count($nums);
        for($i=0;$i<$count-3;$i++){
            if($i==0 || $nums[$i] !== $nums[$i-1]){
                for($j=$i+1;$j<$count-2;$j++){
                    if($j==$i+1 || $nums[$j] !== $nums[$j-1]){
                        $newTarget=$target-$nums[$i]-$nums[$j];
                        $start=$j+1;
                        $end=$count-1;
                        while($start<$end){
                            if($nums[$start]+$nums[$end]==$newTarget){
                                $result[]=[$nums[$i],$nums[$j],$nums[$start],$nums[$end]];
                                while($start<$end && $nums[$start]==$nums[$start+1]) $start++;
                                $start++;
                                while($start<$end && $nums[$end]==$nums[$end-1]) $end--;
                                $end--;
                            }else if($nums[$start]+$nums[$end]>$newTarget){
                                $end--;
                            } else $start++;

                        }

                    }
                }
            }
        }
        return $result;
    }
}