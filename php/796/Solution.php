<?php
/**
 * Created by PhpStorm.
 * User: shuyu
 * Date: 2019/8/28
 * Time: 16:38
 */

class Solution
{
    /**
     * @param String $A
     * @param String $B
     * @return Boolean
     */
    function rotateString($A, $B) {
        $A = str_split($A);
        $B = str_split($B);
        $blen = count($B);
        $i = 0;
        while(($blen != $i) && ($A != $B)){
            array_unshift($B, array_pop($B));
            $i++;
        }
        return $A == $B;
    }
}