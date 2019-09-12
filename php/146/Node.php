<?php
/**
 * Created by PhpStorm.
 * User: shuyu
 * Date: 2019/9/12
 * Time: 16:24
 */

class Node
{
    public $key;
    public $val;
    public $next;
    public $pre;
    public function __construct($val)
    {
        $this->val=$val;
    }
}