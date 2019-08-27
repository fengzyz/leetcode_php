<?php
/**
 * Created by PhpStorm.
 * User: shuyu
 * Date: 2019/8/15
 * Time: 16:42
 */

class ListNode
{
    public $val = 0;
    public $next = null;
    function __construct($val) { $this->val = $val; }
}

class TreeNode{
    public $val = null;
    public $left = null;
    public $right = null;
    function __construct($value) { $this->val = $value; }
}