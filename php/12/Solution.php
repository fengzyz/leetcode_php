<?php
/**
 * Created by PhpStorm.
 * User: shuyu
 * Date: 2019/9/5
 * Time: 9:14
 */

class Solution
{
    /**
     * @param Integer $num
     * @return String
     */
    function intToRoman($num) {
        if(!is_numeric($num) || $num > 3999 || $num <= 0) return false;
        $roman = array(
            'M' => 1000,
            'D' => 500,
            'C' => 100,
            'L' => 50,
            'X' => 10,
            'V' => 5,
            'I' => 1
        );
        foreach($roman as $k => $v){
            if(($amount[$k] = floor($num / $v)) > 0)
                $num -= $amount[$k] * $v;
        }
        $return = '';
        $old_k = '';
        foreach($amount as $k => $v)
        {
            $return .= $v <= 3 ? str_repeat($k, $v) : $k . $old_k;
            $old_k = $k;
        }
        return str_replace(array('VIV','LXL','DCD'),array('IX','XC','CM'),$return);
    }
}