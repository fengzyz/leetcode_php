<?php


/*****************************************************
 * Class Solution
 *
 * 给定平面上 n 对不同的点，“回旋镖” 是由点表示的元组 (i, j, k) ，其中 i 和 j 之间的距离和 i 和 k 之间的距离相等（需要考虑元组的顺序）。
 * 找到所有回旋镖的数量。你可以假设 n 最大为 500，所有点的坐标在闭区间 [-10000, 10000] 中。
 * 示例:
 * 输入:
 * [[0,0],[1,0],[2,0]]
 * 输出:
 * 2
 * 解释:
 * 两个回旋镖为 [[1,0],[0,0],[2,0]] 和 [[1,0],[2,0],[0,0]]
 * 
 */
class Solution
{
    /**
     * @param Integer[][] $points
     * @return Integer
     */
    function numberOfBoomerangs($points) {
        $c = 0;
        $totalPoints = count($points);
        for($i = 0; $i<$totalPoints; $i++){
            $distances = [];
            $iv = $points[$i];
            for($j = 0; $j<$totalPoints; $j++){
                if($i == $j){
                    continue;
                }
                $jv = $points[$j];
                $ij = pow($iv[0]-$jv[0],2) + pow($iv[1]-$jv[1],2);
                if(!isset($distances[$ij])){
                    $distances[$ij] = 0;
                }
                $distances[$ij]++;
            }
            foreach($distances as $v){
                $c += $v*$v-$v;
            }
        }
        return $c;
    }
}