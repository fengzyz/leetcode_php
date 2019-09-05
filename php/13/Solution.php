<?php
/**
 * Created by PhpStorm.
 * User: shuyu
 * Date: 2019/9/5
 * Time: 9:16
 */

class Solution
{
    /**
     * @param String $s
     * @return Integer
     */
    function romanToInt($s) {
        if(is_numeric($s)) return false;
        $roman = array(
            'M' => 1000,
            'D' => 500,
            'C' => 100,
            'L' => 50,
            'X' => 10,
            'V' => 5,
            'I' => 1
        );
        for($i = 0; $i < strlen($s); $i++){
            if(isset($roman[strtoupper($s[$i])]))
                $values[] = $roman[strtoupper($s[$i])];
        }
        $sum = 0;
        while($current = current($values))
        {
            $next = next($values);
            $next > $current ? $sum += $next - $current + 0 * next($values) : $sum += $current;
        }
        return $sum;
    }
}