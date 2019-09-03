<?php
/**
 * Created by PhpStorm.
 * User: shuyu
 * Date: 2019/9/3
 * Time: 17:34
 */

class Solution
{
    /**
     * @param Integer[] $ratings
     * @return Integer
     */
    function candy($ratings) {
        $sum=0;

        for($i=0;$i<count($ratings);$i++){
            $nums[$i]=1;
        }

        for($i=0;$i<count($ratings);$i++){
            if($ratings[$i+1]>$ratings[$i]){
                $nums[$i+1]=$nums[$i]+1;
            }
        }

        for($i=count($ratings)-1;$i>=0;$i--){
            if($ratings[$i-1]>$ratings[$i]){
                $nums[$i-1]=max($nums[$i-1],$nums[$i]+1);
            }
        }

        for($i=0;$i<count($nums);$i++){
            $sum +=$nums[$i];
        }
        return $sum;
    }
}