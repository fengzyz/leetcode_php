<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/6/30
 * Time: 22:29
 */


/***********************************
 * Class Solution
 * 给定一个包含 n 个整数的数组 nums，判断 nums 中是否存在三个元素 a，b，c ，使得 a + b + c = 0 ？找出所有满足条件且不重复的三元组。
 * 注意：答案中不可以包含重复的三元组。
 * 例如, 给定数组 nums = [-1, 0, 1, 2, -1, -4]，
 *满足要求的三元组集合为：
 * [
 * [-1, 0, 1],
 * [-1, -1, 2]
 * ]
 */
class Solution
{
    /**
     * @param Integer[] $nums
     * @return Integer[][]
     */
    function threeSum($nums) {
        $count=count($nums);
        $result=[];
        sort($nums);
        for($i=0;$i<$count-2;$i++){
            if($nums[$i]+$nums[$i+1]+$nums[$i+2]>0) break;
            if($nums[$i]+$nums[$count-2]+$nums[$count-1]<0) continue;
            if($i>0 && $nums[$i]==$nums[$i-1]) continue;
            $l=$i+1;
            $r=$count-1;

            while($l<$r){
                $temp=$nums[$i]+$nums[$l]+$nums[$r];

                if($temp==0){
                    $result[]=[$nums[$i],$nums[$l],$nums[$r]];

                    while($l+1<$r && $nums[$l]==$nums[$l+1]){
                        $l +=1;
                    }
                    $l +=1;
                    while($r-1>$l && $nums[$r]==$nums[$r-1]){
                        $r -=1;
                    }
                    $r -=1;
                }elseif($temp>0){
                    $r -=1;
                }else $l +=1;
            }

        }
        return $result;
    }
}
$solution = new Solution();

$arr = array(-1,0,1,2,-1,4);

echo $solution->threeSum();

