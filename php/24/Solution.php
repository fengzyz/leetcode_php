<?php
/**
 * Created by PhpStorm.
 * User: shuyu
 * Date: 2019/12/19
 * Time: 14:00
 */

/**
 * 给定一个链表，两两交换两个结点的位置，然后返回交换后的链表，注意是交换结点本身，而不是修改其值
 * Class Solution
 *
 */
class Solution
{
    /**
     * @param ListNode $head
     * @return ListNode
     */
    function swapPairs($head) {
        $pre=new ListNode(-1);
        $pre->next=$head;
        $tmp=$pre;
        while($tmp->next !=null && $tmp->next->next !=null){
            $start=$tmp->next;
            $end=$tmp->next->next;
            $tmp->next=$end;
            $start->next=$end->next;
            $end->next=$start;
            $tmp=$start;
        }
        return $pre->next;
    }
}