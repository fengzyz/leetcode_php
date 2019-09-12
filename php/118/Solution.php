<?php
/**
 * Created by PhpStorm.
 * User: shuyu
 * Date: 2019/9/12
 * Time: 17:39
 */

/**
 * 给定一个非负整数 numRows，生成杨辉三角的前 numRows 行。
 * Class Solution
 */
class Solution
{
    /**
     * @param Integer $numRows
     * @return Integer[][]
     */
    function generate($numRows) {
        $res=[];
        for($i=0;$i<$numRows;$i++){
            for($j=0;$j<=$i;++$j){
                if($i==0 && $j==0) $res[0][0]=1;
                else $res[$i][$j]=$res[$i-1][$j-1]+$res[$i-1][$j];
            }
        }
        return $res;
    }
}