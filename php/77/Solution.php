<?php

/**
 * 给定两个整型数字n和k，返回1到n的k个数所有组合情况。
 * Class Solution
 */
class Solution
{
    /**
     * @param Integer $n
     * @param Integer $k
     * @return Integer[][]
     */
    function combine($n, $k) {
        $res=[];
        $out=[];
        $this->helper($n,$k,1,$out,$res);
        return $res;
    }

    function helper($n,$k,$level,&$out,&$res){

        if(count($out)==$k){
            array_push($res,$out);
            return ;
        }
        for($i=$level;$i<=$n;$i++){
            array_push($out,$i);
            $this->helper($n,$k,$i+1,$out,$res);
            array_pop($out);
        }
    }
}