<?php
/**
 * Created by PhpStorm.
 * User: shuyu
 * Date: 2019/12/17
 * Time: 17:18
 */

/**
 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val) { $this->val = $val; }
 * }
 */
class Solution{
    private $vals = [];
    function mergeTwoLists($l1, $l2) {
        $this->iterate($l1, $l2);
        $root = $node = NULL;
        if($this->vals){
            $root = $node = new ListNode(array_pop($this->vals));
        }
        while(!empty($this->vals)){
            $node->next = new ListNode(array_pop($this->vals));
            $node = $node->next;
        }
        return $root;
    }

    function iterate($l1, $l2){
        if(!is_null($l1) && !is_null($l2)){
            if($l1->val<=$l2->val){
                array_unshift($this->vals, $l1->val);
                $l1 = $l1->next;
            }
            else{
                array_unshift($this->vals, $l2->val);
                $l2 = $l2->next;
            }
        }
        else if(!is_null($l1)){
            array_unshift($this->vals,$l1->val);
            $l1 = $l1->next;
        }
        else if(!is_null($l2)){
            array_unshift($this->vals,$l2->val);
            $l2 = $l2->next;
        }
        else if (is_null($l1) && is_null($l2)){
            return;
        }
        $this->iterate($l1, $l2);
    }
}