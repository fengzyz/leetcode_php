<?php
/**
 * @author   fengzyz
 * @date     2019/5/13
 * @license  MIT
 */

//斐波那契数列
function Fib1($n){
    if($n == 1 || $n ==2){
        return 1;
    }else{
        return Fib1($n-2) + Fib1($n-1);
    }
}

//递归优化
function Fibonacci($n, $a,$b){
    //echo  '</br>内存使用-------->'.memory_get_usage().'</br>';
    if ($n == 1) return $a;
    if ($n == 2) return $b;
    return Fibonacci($n - 1, $b, $a + $b);
}
//使用循环实现，避免内存溢出
function fib2($n) {
    echo  '</br>内存使用-------->'.memory_get_usage().'</br>';
    if ($n <= 2) return 1;
    $arr = [0,1,1];
    for ($i = 3; $i <= $n; $i++) {
        $arr[$i] = $arr[$i - 1] + $arr[$i - 2];
    }
    return $arr[$n];
}
$a = 1;
$b = 1;
print_r(Fibonacci(10,$a,$b));
echo  '</br>';
//print_r(fib2(10));
//  '</br>';
//print_r(fib1(10));

