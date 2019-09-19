<?php


class Solution
{
    function judgeSquareSum($c) {
        $i=0;$num=0;$j=intval(sqrt($c));
        while($i<=$j){
            $num=$i*$i+$j*$j;
            if($num==$c){
                return true;
            }elseif($num>$c){
                $j--;
            }else{
                $i++;
            }
        }
        return false;
    }
}