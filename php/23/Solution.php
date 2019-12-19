<?php
/**
 * Created by PhpStorm.
 * User: shuyu
 * Date: 2019/12/19
 * Time: 13:57
 */

/**
 *
 *给定一个数组，数组中包含k个链表，按照从小到大的顺序合并这些链表
 * Class Solution
 */
class Solution
{
    /**
     * @param ListNode[] $lists
     * @return ListNode
     */
    function mergeKLists($lists) {
        $res=[];
        for($i=0;$i<count($lists);$i++){
            $node=$lists[$i];
            while($node){
                $res[]=$node->val;
                $node=$node->next;
            }
        }
        //省事的话直接使用php内置排序函数即可，这里使用了归并排序
        //  sort($res);
        $res=$this->merge_sort($res);
        $result=$newList=new listNode(-1);

        foreach($res as $item){
            $newList->next=new listNode($item);
            $newList=$newList->next;

        }
        return $result->next;
    }

    function merge_sort($nums){
        if(count($nums)<=1){
            return $nums;
        }
        $this-> merge_sort_a($nums,0,count($nums)-1);
        return $nums;
    }

    function merge_sort_a(&$nums,$p,$r)
    {
        if($p>=$r){
            return ;
        }
        $middle=$p+(($r-$p)>>1);
        $this->merge_sort_a($nums,$p,$middle);
        $this->merge_sort_a($nums,$middle+1,$r);
        $this->merge($nums,['start'=>$p,'end'=>$middle],['start'=>$middle+1,'end'=>$r]);
    }

    function merge(&$nums,$array_p,$array_r){
        $temp=[];
        $p=$array_p['start'];
        $r=$array_r['start'];
        $k=0;
        while($p<=$array_p['end'] && $r<=$array_r['end']){
            if($nums[$p]<$nums[$r]){
                $temp[$k++]=$nums[$p++];
            }else{
                $temp[$k++]=$nums[$r++];
            }
        }
        while($p<=$array_p['end']){
            $temp[$k++]=$nums[$p++];
        }
        while($r<=$array_r['end']){
            $temp[$k++]=$nums[$r++];
        }
        for($i=0;$i<$k;$i++){
            $nums[$i+$array_p['start']]=$temp[$i];
        }
    }
}