<?php
/**
 * Created by PhpStorm.
 * User: shuyu
 * Date: 2019/6/28
 * Time: 11:21
 */

/**
 * Class Manager
 * 链表管理类
 */
class Manager
{
    protected  $head;
    public function install($index = 0, $data){
        // 头结点的插入, 当头部不存在，或者索引为0
        if (is_null($this->head) || $index === 0) {
            return $this->insertHead($data);
        }
        // 遍历整个链表，如果当前节点是 null，则代表到了尾部的下一个，退出循环
        $currNode = $this->head;    $startIndex = 1;

        for ($currIndex = $startIndex; !is_null($currNode); ++ $currIndex) {
            if ($currIndex === $index) {
                $newNode = new Node($data);
                $newNode->next = $currNode->next;
                $currNode->next = $newNode;
                return true;
            }
            // 移动到下一个节点
            $currNode = $currNode->next;
        }
        return false;
    }
    public function insertHead($data){
        $newNode = new ListNode($data);
        $newNode->next = $this->head;
        $this->head = $newNode;
        return true;
    }
}