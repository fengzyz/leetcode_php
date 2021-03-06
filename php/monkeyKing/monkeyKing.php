<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/5/24
 * Time: 21:27
 */

/**********************************************************************************
 *
 * 约瑟夫环问题（猴子选大王）
 * 一群猴子排成一圈，按1,2,…,n依次编号。
 * 然后从第1只开始数，数到第m只,把它踢出圈，从它后面再开始数，再数到第m只，在把它踢出去…，
 * 如此不停的进行下去，直到最后只剩下一只猴子为止，那只猴子就叫做大王。
 * 要求编程模拟此过程，输入m、n, 输出最后那个大王的编号。
 *
 ***********************************************************************************/


function monkeyKing($n, $m)
{
    $arr = range(1, $n);       //构造一个数组
    $i = 1;                         //从第一个开始循环

    while (count($arr) > 1) {       //如果总数大于1
        if ($i % $m != 0) {
            $arr[] = $arr[$i - 1];  //不被踢出则压入数组尾部
        }
        unset($arr[$i - 1]);        //压入数组然后删除
        $i++;                       //继续循环
    }

    return $arr[$i - 1];            //直至最后剩下一个为大王
}

print_r(monkeyKing(5, 3));         //第4只为大王