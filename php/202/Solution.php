<?php
/**
 * Created by PhpStorm.
 * User: shuyu
 * Date: 2019/7/2
 * Time: 10:15
 */


/*******************************************
 * Class Solution
 *  编写一个算法来判断一个数是不是“快乐数”。
 *  一个“快乐数”定义为：对于一个正整数，每一次将该数替换为它每个位置上的数字的平方和，然后重复这个过程直到这个数变为 1，也可能是无限循环但始终变不到 1。如果可以变为 1，那么这个数就是快乐数。
 * 示例: 
 * 输入: 19
 * 输出: true
 * 解释:
 * 12 + 92 = 82
 * 82 + 22 = 68
 * 62 + 82 = 100
 * 12 + 02 + 02 = 1
 */
class Solution
{
    function isHappy($n) {
        $temp = $n;
        while(true){
            $temp = $this->getNext($temp);
            if ($temp > 243) {
                continue;
            } else if ($temp == 4 || $temp == 16 || $temp == 37 || $temp == 58 ||
                $temp == 89 || $temp == 145 || $temp == 42 || $temp == 20) {
                return false;
            } else if ($temp == 1) {
                return true;
            }
        }
    }
    //获取下一个快乐数
    function getNext($num){
        $result = 0;
        while ($num  > 0){
            $result += ($num % 10) * ($num % 10);
            $num = $num / 10;
        }
        return $result;
    }
}

$solution = new Solution();
var_dump($solution->isHappy(19));