<?php
/**
 * Created by PhpStorm.
 * User: shuyu
 * Date: 2019/11/14
 * Time: 16:54
 */

class Solution
{
    /**
     * @param TreeNode $root
     * @return Integer
     */
    function minDepth($root) {
        if(!$root) {
            return 0;
        }

        $left=$this->minDepth($root->left);
        $right=$this->minDepth($root->right);

        if(!$left) {
            return $right+1;
        }
        if(!$right) {
            return  $left+1;
        }
        return $left<$right?$left+1:$right+1;
    }
}