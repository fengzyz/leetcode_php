<?php
/**
 * Created by PhpStorm.
 * User: shuyu
 * Date: 2019/9/9
 * Time: 9:22
 */

class Solution
{
    /**
     * @param String $s
     * @param String[] $wordDict
     * @return Boolean
     */
    function wordBreak($s, $wordDict) {

        $dp=[0=>true]+array_fill(1,strlen($s),false);
        for($i=0;$i<strlen($s);++$i){
            for($j=$i+1;$j<=strlen($s);++$j){
                if($dp[$i] && in_array(substr($s,$i,$j-$i),$wordDict)){
                    $dp[$j]=true;
                }
            }
        }
        return end($dp);
    }
}