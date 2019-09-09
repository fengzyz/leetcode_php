<?php
/**
 * Created by PhpStorm.
 * User: shuyu
 * Date: 2019/9/9
 * Time: 10:09
 */

/**
 * 给定一个整数数组 nums ，找到一个具有最大和的连续子数组（子数组最少包含一个元素），返回其最大和。
 * Class Solution
 */
class Solution
{
    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function maxSubArray($nums) {
        $cur=$nums[0];
        $res=$nums[0];
        for($i=1;$i<count($nums);$i++){
            if($cur<0){
                $cur=$nums[$i];

            }else{
                $cur +=$nums[$i];
            }
            $res=max($res,$cur);
        }
        return $res;
    }
}