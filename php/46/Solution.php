<?php

/**
 * 给定一组数字，求出所有的排列情况
 * Class Solution
 */
class Solution
{
    /**
     * @param Integer[] $nums
     * @return Integer[][]
     */
    function permute($nums) {
        $out=[];
        $res=[];
        $visited=[];
        $this->helper($nums,0,$visited,$out,$res);
        return $res;
    }

    function helper($nums,$index,&$visited,&$out,&$res)
    {
        if($index==count($nums)){
            array_push($res,$out);
            return;
        }

        for($j=0;$j<count($nums);$j++){
            if($visited[$j]==1) continue;
            $visited[$j]=1;
            array_push($out,$nums[$j]);
            $this->helper($nums,$index+1,$visited,$out,$res);
            array_pop($out);
            $visited[$j]=0;
        }

    }
}