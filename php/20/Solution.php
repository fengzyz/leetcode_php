<?php


/*****************************************
 * Class Solution
 * 给定一个只包括 '('，')'，'{'，'}'，'['，']' 的字符串，判断字符串是否有效。
 * 有效字符串需满足：
 * 左括号必须用相同类型的右括号闭合。
 * 左括号必须以正确的顺序闭合。
 * 注意空字符串可被认为是有效字符串。
 * 示例 1:
 * 输入: "()"
 * 输出: true
 *
 */
class Solution
{
    function isValid($s) {
        $list=['{'=>'}','['=>']','('=>')'];
        $res=[];
        for($i=0;$i<strlen($s);$i++){
            $tmp=end($res);
            if($list["$tmp"] == $s[$i]){
                unset($res[key($res)]);
            }else{
                $res[]=$s[$i];
            }
        }
        return count($res)==0;
    }
}