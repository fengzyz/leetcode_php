<?php

/**
 *
 * 让我们根据电话号码的数字，组合所有情况的字符串，题目给的是23，对应着九种组合
 * Class Solution
 */


class Solution
{
    /**
     * @param Integer $n
     * @return String[]
     */
    function generateParenthesis($n) {
        $res=[];
        $this->helper($res,"",$n,$n);
        return $res;
    }

    function helper(&$res,$cur,$open,$close){
        if($open == 0 && $close ==0) array_push($res,$cur);
        if($open>$close) return ;
        if($open>0) $this->helper($res,$cur.'(',$open-1,$close);
        if($close>0) $this->helper($res,$cur.')',$open,$close-1);
    }
}