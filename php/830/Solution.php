<?php
/**
 * Created by PhpStorm.
 * User: shuyu
 * Date: 2019/12/17
 * Time: 17:30
 */

class Solution
{
    /**
     * @param String $S
     * @return Integer[][]
     */
    function largeGroupPositions($S) {
        $largeGroup = [[0,0]];
        $S = str_split($S);
        $prev = "";
        $index = 0;
        foreach($S as $k => $v){
            $cur = $largeGroup[$index];
            if($v == $prev){
                $cur[1]++;
                $largeGroup[$index] = $cur;
            }
            else{
                if($cur[1]-$cur[0]<2){
                    $largeGroup[$index] = [$k,$k];
                }
                else{
                    $index++;
                    $largeGroup[] = [$k, $k];
                }
            }
            $prev = $v;
        }
        if($largeGroup[$index][1]-$largeGroup[$index][0]<2){
            unset($largeGroup[$index]);
        }
        return $largeGroup;
    }
}