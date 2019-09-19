<?php


class Solution
{
    function validPalindrome($s) {
        $i=-1;$j=strlen($s);
        while(++$i < --$j){
            if($s[$i] !==$s[$j]){
                return ($this->is_valid($s,$i,$j-1) || $this->is_valid($s,$i+1,$j));
            }
        }
        return true;

    }
    function is_valid($s,$i,$j){
        while($i<$j){
            if($s[$i++] !== $s[$j--]){
                return false;
            }
        }
        return true;
    }
}