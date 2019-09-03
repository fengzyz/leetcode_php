<?php
/**
 * Created by PhpStorm.
 * User: shuyu
 * Date: 2019/9/3
 * Time: 17:17
 */

class Solution
{

    /**
     * 方法一简单粗暴
     * @param Integer[] $nums
     * @return Integer
     */
    function singleNumber($nums) {
        return array_search(1,array_count_values($nums));
    }

    /**
     * 方法二
    * @param Integer[] $nums
    * @return Integer
    */
    function singleNumber1($nums) {
        $ones=0;$twos=0;$threes=0;
        for($i=0;$i<count($nums);$i++){
            $twos |=$ones & $nums[$i];
            $ones ^=$nums[$i];
            $threes =$ones & $twos;
            $ones &= ~$threes;
            $twos &= ~$threes;
        }
        return $ones;
    }
}