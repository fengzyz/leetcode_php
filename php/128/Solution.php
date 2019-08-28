<?php
/**
 * Created by PhpStorm.
 * User: shuyu
 * Date: 2019/8/28
 * Time: 15:18
 */

/**
 * 给定一个未排序的整数数组，找出最长连续序列的长度。
 * 要求算法的时间复杂度为 O(n)。
 * Class Solution
 */
class Solution
{
    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function longestConsecutive($nums) {
        if(empty($nums)){
            return 0;
        }
        sort($nums);
        $max = 1;
        $current = 1;
        for($i=1;$i<count($nums);$i++){
            if($nums[$i] != $nums[$i - 1]){
                if($nums[$i] == $nums[$i - 1] + 1){
                    $current += 1;
                }else{
                    $max = max($current,$max);
                    $current = 1;
                }
            }
        }
        return max($current, $max);
    }
}
$solution = new Solution();
$nums = [100, 4, 200, 1, 3, 2];
echo $solution->longestConsecutive($nums);