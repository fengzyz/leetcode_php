<?php

//给定两个数组，返回其交集，在交集中返回他们在各自数组的下标之和最小。
class Solution
{
    /**
     * @param String[] $list1
     * @param String[] $list2
     * @return String[]
     */
    function findRestaurant($list1, $list2) {
        $list1 = array_flip($list1);
        $list2 = array_flip($list2);
        $min = 99999999999;
        $intersect = [];
        foreach($list1 as $name => $v){
            if(!isset($list2[$name])){
                continue;
            }
            if($v+$list2[$name] < $min){
                $min = $v + $list2[$name];
                $intersect = [$name];
            }
            else if($v+$list2[$name] == $min){
                $intersect[] = $name;
            }
        }
        return $intersect;
    }
}