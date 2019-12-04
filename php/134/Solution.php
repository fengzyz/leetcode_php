<?php

/**
 * Class Solution
 * 一个环形路上有n个加油站，gas[i]表示每个加油站上你能加的油，
 * cost[i]表示你从i站到i+1站所需要的油，让我们求是否存在从一个起点出发，
 * 能返回到原点加油站的开始起点站，
 * 注意想要走完一圈加油站，那么前提条件是gas整体肯定要大于cost。
 */
class Solution
{
    /**
     * @param Integer[] $gas
     * @param Integer[] $cost
     * @return Integer
     */
    function canCompleteCircuit($gas, $cost) {
        $sum=$total=0;$start=0;

        for($i=0;$i<count($gas);$i++){
            $sum +=$gas[$i]-$cost[$i];
            $total +=$gas[$i]-$cost[$i];

            if($sum <0) {
                $start=$i+1;
                $sum=0;
            }
        }
        return  $total<0?-1:$start;
    }
}