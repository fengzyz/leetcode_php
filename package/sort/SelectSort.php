<?php
/**
 *  选择排序
 *
 * @author   fengzyz
 * @date     2019/4/27
 * @license  MIT
 * -------------------------------------------------------------
 * 思路分析：选择排序是不稳定的排序方法
 * 大O表示： O(n 2)
 * -------------------------------------------------------------
 * 它的工作原理是每一次从待排序的数据元素中选出最小（或最大）的一个元素，存放在序列的起始位置，直到全部待排序的数据元素排完。
 * 选择排序是不稳定的排序方法（比如序列[5， 5， 3]第一次就将第一个[5]与[3]交换，导致第一个5挪动到第二个5后面）。
 */

function SelectSort(array $arr)
{
    $count = count($arr);
    for ($i = 0; $i < $count; $i++){
        $k = $i;
        for ($j = $i + 1; $j < $count; $j++){
            if($arr[$j] < $arr[$k]){
                $k = $j;
            }
        }
        if($k != $i){
            $temp          = $arr[$i];
            $arr[$i] = $arr[$k];
            $arr[$k] = $temp;
        }
    }
    return $arr;
}
var_dump(SelectSort([10,8,20,70,15,45,98,200,120]));