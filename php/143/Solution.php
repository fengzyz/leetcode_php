<?php


class Solution
{
    /**
     * @param ListNode $head
     * @return NULL
     */
    function reorderList($head) {
        if(!$head || !$head->next || !$head->next->next) return ;
        $fast=$head;
        $slow=$head;
        while($fast !=null && $fast->next !=null){ //找出中间点
            $fast=$fast->next->next;
            $slow=$slow->next;
        }
        $middle=$slow->next;
        $slow->next=null;
        $last=$middle;
        $pre=null;
        while($last){ //翻转右半部分链表
            $node=$last->next;
            $last->next=$pre;
            $pre=$last;
            $last=$node;
        }

        while($head && $pre){ //间隔插入
            $next=$head->next;
            $head->next=$pre;
            $pre=$pre->next;
            $head->next->next=$next;
            $head=$next;
        }

    }
}