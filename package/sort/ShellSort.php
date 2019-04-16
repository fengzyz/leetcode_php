<?php
/**
 * 希尔排序
 *
 * @author   fengzyz
 * @date     2019/4/16
 * @license  MIT
 * -------------------------------------------------------------
 * 思路分析：希尔排序是基于插入排序的，区别在于插入排序是相邻的一个个比较（类似于希尔中h=1的情形），而希尔排序是距离h的比较和替换。
 * -------------------------------------------------------------
 * 希尔排序中一个常数因子n，原数组被分成各个小组，每个小组由h个元素组成，很可能会有多余的元素。
 * 当然每次循环的时候，h也是递减的（h=h/n）。第一次循环就是从下标为h开始。希尔排序的一个思想就是，分成小组去排序。
 */

/**
 * ShellSort
 *
 * @param array $arr
 * @return array
 */
function ShellSort(array $arr)
{
    $count = count($arr);
    for ($increment = intval($count / 2); $increment > 0; $increment = intval($increment / 2)) {
        for ($i = $increment; $i < $count; $i++) {
            $temp = $arr[$i];
            for ($j = $i; $j >= $increment; $j -= $increment) {
                if ($temp < $arr[$j - $increment]) {
                    $arr[$j] = $arr[$j - $increment];
                } else {
                    break;
                }
            }
            $arr[$j] = $temp;
        }
    }
    return $arr;
}

var_dump(ShellSort([10,8,20,70,15,45,98,200,120]));
