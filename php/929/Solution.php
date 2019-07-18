<?php
/**
 * Created by PhpStorm.
 * User: shuyu
 * Date: 2019/7/18
 * Time: 17:52
 */

class Solution
{
    /**
     * @param String[] $emails
     * @return Integer
     */
    function numUniqueEmails($emails) {
        $replacedEmails = [];
        foreach($emails as $email){
            $emailStruct = explode('@',$email);
            $username = str_replace('.','',$emailStruct[0]);
            $usernameStruct = explode('+',$username);
            $username = $usernameStruct[0];
            $replacedEmails[] = $username.$emailStruct[1];
        }
        return count(array_unique($replacedEmails));
    }
}