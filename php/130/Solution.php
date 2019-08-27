<?php
/**
 * Created by PhpStorm.
 * User: shuyu
 * Date: 2019/8/27
 * Time: 10:06
 */

class Solution
{
    /**
     * @param String[][] $board
     * @return NULL
     */
    function solve(&$board) {
        for($i=0;$i<count($board);$i++){
            for($j=0;$j<count($board[$i]);$j++){
                //先过滤一遍边界
                if($i==0 || $j==0 || $i==count($board)-1 || $j==count($board[$i])-1){
                    //在判断当前边界的值是否是O,递归处理所有的边界
                    if($board[$i][$j]=='O'){
                        $this->helper($board,$i,$j);
                    }
                }
            }
        }
        //这次遍历是为了把剩下被包围的O转为成X，之前边界转换的中间值Y重新转换为O,证明他没被包围还活着
        for($i=0;$i<count($board);$i++){
            for($j=0;$j<count($board[$i]);$j++){

                if($board[$i][$j]=='O'){
                    $board[$i][$j]='X';
                }
                if($board[$i][$j]=='Y'){
                    $board[$i][$j]='O';
                }
            }
        }
        return $board;
    }

    function helper(&$board,$i,$j){
        if($board[$i][$j]=='O'){
            $board[$i][$j]='Y';
            if($i>0 && $board[$i-1][$j]=='O'){
                $this->helper($board,$i-1,$j);
            }
            if($j<count($board[$i])-1 && $board[$i][$j+1]=='O'){
                $this->helper($board,$i,$j+1);
            }
            if($i<count($board)-1 && $board[$i+1][$j]=='O'){
                $this->helper($board,$i+1,$j);
            }
            if($j>0 && $board[$i][$j-1]=='O'){
                $this->helper($board,$i,$j-1);
            }
        }
    }
}