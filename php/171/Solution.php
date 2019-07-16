<?php


class Solution
{
    /**
     * @param String $s
     * @return Integer
     */
    function titleToNumber($s) {
        $len = strlen($s);
        $s = str_split($s);
        $number = 0;
        while($len){
            $number += (ord(array_shift($s))-ord('A')+1)*pow(26,--$len);
        }
        return $number;
    }
}