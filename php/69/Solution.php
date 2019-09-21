<?php


class Solution
{
    /**
     * @param Integer $x
     * @return Integer
     */
    function mySqrt($x) {
        $l=0;
        $r=$x;
        while($l<=$r){
            $middle=$l+(($r-$l)>>1);
            $res=$middle*$middle;
            if($x==$res) return $middle;
            else if($res<$x) $l=$middle+1;
            else $r=$middle-1;
        }
        return $r;
    }
}