<?php

//将一个按照升序排列的有序数组，转换为一棵高度平衡二叉搜索树。
class Solution
{
    /**
     * @param Integer[] $nums
     * @return TreeNode
     */
    function sortedArrayToBST($nums) {
        $len = count($nums);
        $mid = floor($len/2);
        $leftPart = array_slice($nums, 0, $mid);
        $root = new TreeNode($nums[$mid]);
        $rightPart = array_slice($nums, $mid+1);

        if(count($leftPart)){
            $root->left  = $this->sortedArrayToBST($leftPart);
        }
        if(count($rightPart)){
            $root->right  = $this->sortedArrayToBST($rightPart);
        }
        return $root;
    }
}