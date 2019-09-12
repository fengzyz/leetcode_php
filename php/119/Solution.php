<?php
/**
 * Created by PhpStorm.
 * User: shuyu
 * Date: 2019/9/12
 * Time: 18:00
 */

class Solution
{
    /**
     * @param Integer $rowIndex
     * @return Integer[]
     */
    function getRow($rowIndex) {
        $res[0] = 1;
        for ($i=1;$i<=$rowIndex;$i++){
            for ($j=$i;$j>=0;$j--){
                $res[$j] += $res[$j-1];
            }
        }
        return $res;
    }
}