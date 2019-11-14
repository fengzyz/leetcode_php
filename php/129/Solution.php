<?php
/**
 * Created by PhpStorm.
 * User: shuyu
 * Date: 2019/11/14
 * Time: 16:44
 */

/**
 * Definition for a binary tree node.
 * class TreeNode {
 *     public $val = null;
 *     public $left = null;
 *     public $right = null;
 *     function __construct($value) { $this->val = $value; }
 * }
 */
class Solution {

    /**
     * @param TreeNode $root
     * @return Integer
     */
    function sumNumbers($root) {
        return  $this->helper($root,0);
    }

    function helper($root,$num)
    {
        if(!$root) return 0;
        $num=$num*10+$root->val;
        if(!$root->left && !$root->right){
            return $num;
        }

        return  $this->helper($root->left,$num)+$this->helper($root->right,$num);

    }
}