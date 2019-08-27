<?php
/**
 * Created by PhpStorm.
 * User: shuyu
 * Date: 2019/8/15
 * Time: 16:40
 */

class Solution
{
    /**
     * @param ListNode $head
     * @return TreeNode
     */
    function sortedListToBST(ListNode $head) {
        $nums=[];
        if(!$head) {
            return;
        }
        while($head !==null) {
            array_push($nums,$head->val);
            $head=$head->next;
        }
        return  $this->sortedArray($nums);
    }
    function sortedArray($nums) {
        if(!$nums) {
            return;
        }
        $mid=floor(count($nums) / 2);
        $root=new TreeNode($nums[$mid]);
        $root->left=$this->sortedArray(array_slice($nums,0,$mid));
        $root->right=$this->sortedArray(array_slice($nums,$mid+1));
        return $root;
    }
}
$head = [-10,-3,0,5,9];
print_r($this->sortedListToBST($head));