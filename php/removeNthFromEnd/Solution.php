<?php
/**
 * Created by PhpStorm.
 * User: shuyu
 * Date: 2019/6/28
 * Time: 10:51
 */


/*******************************
 * Class Solution
 * 给定一个链表，删除链表的倒数第 n 个节点，并且返回链表的头结点。
 * 示例：
 * 给定一个链表: 1->2->3->4->5, 和 n = 2.
 * 当删除了倒数第二个节点后，链表变为 1->2->3->5.
 * 说明：
 * 给定的 n 保证是有效的。
 *******************************/
/**
 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val) { $this->val = $val; }
 * }
 */

class Solution
{
    /**
     * @param ListNode $head
     * @param Integer $n
     * @return ListNode
     */
    function removeNthFromEnd($head, $n) {
        $temp->next = $head;
        $node = $head;
        $count=0;
        while($node !=null){
            $count++;
            $node=$node->next;
        }
        $count -=$n;
        $node=$temp;

        while($count>0){
            $count--;
            $node=$node->next;
        }
        $node->next = $node->next->next;
        return $temp->next;
    }
}