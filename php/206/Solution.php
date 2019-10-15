<?php
/**
 * Created by PhpStorm.
 * User: shuyu
 * Date: 2019/10/15
 * Time: 17:31
 */

class Solution
{
    /**
     * @param ListNode $head
     * @return ListNode
     */
    function reverseList($head) {
        $prev=null;
        $curr=$head;
        while($curr !==null){
            $nextcode=$curr->next;
            $curr->next=$prev;
            $prev=$curr;
            $curr=$nextcode;
        }
        return $prev;
    }
}