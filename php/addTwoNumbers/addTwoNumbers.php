<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/4/13
 * Time: 10:36
 */

/*******************************************************
 *
 * 给出两个 非空 的链表用来表示两个非负的整数。其中，它们各自的位数是按照 逆序 的方式存储的，并且它们的每个节点只能存储 一位 数字。
 * 如果，我们将这两个数相加起来，则会返回一个新的链表来表示它们的和。
 * 您可以假设除了数字 0 之外，这两个数都不会以 0 开头。
 * 示例：
 * 输入：(2 -> 4 -> 3) + (5 -> 6 -> 4)
 * 输出：7 -> 0 -> 8
 * 原因：342 + 465 = 807
 *
 ******************************************************/

class Solution {
    /**
     * @param ListNode $l1
     * @param ListNode $l2
     * @return ListNode
     */
    function addTwoNumbers($l1, $l2) {
        $add = 0;
        $list = new ListNode(0);
        $current  = $list;
        while($l1 || $l2){
            $l1v = $l1->val != null ? $l1->val : 0;
            $l2v = $l2->val != null ? $l2->val : 0;
            $val = ($l1v + $l2v + $add) % 10;
            $add = intval(($l1v + $l2v + $add) / 10);
            $current->next = new ListNode($val);   //将当前数插入链表尾部
            $current = $current->next;             //修改当前指向的节点
            if($l1 != null){
                $l1 = $l1->next;
            }
            if($l2 != null){
                $l2 = $l2->next;
            }
        }
        if($add > 0){
            $current->next = new ListNode($add);    //add大于0及最后两数相加大于等于10向前进一位
        }
        return $list->next;    //初始化链表时传入了一个0注意去掉
    }
}

/*Definition for a singly-linked list.*/
class ListNode {
     public $val = 0;
     public $next = null;
     function __construct($val) { $this->val = $val; }
}