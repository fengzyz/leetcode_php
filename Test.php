<?php
/**
 * Created by PhpStorm.
 * User: shuyu
 * Date: 2019/10/12
 * Time: 10:00
 */

//echo mb_internal_encoding();
$str = "你好123";
echo strlen($str).PHP_EOL;
echo mb_strlen($str,"utf-8").PHP_EOL;
echo mb_strlen($str,"gbk").PHP_EOL;