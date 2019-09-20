<?php


class Solution
{
    /**
     * @param Integer[] $nums
     * @return Boolean
     */
    function canJump($nums) {
        $dp[0]=true;
        for($i=1;$i<count($nums);$i++){
            for($j=$i-1;$j>-1;$j--){
                if($dp[$j] && $nums[$j]>=($i-$j)){
                    $dp[$i]=true;
                    break;
                }
            }
        }
        return $dp[count($nums)-1];
    }
}