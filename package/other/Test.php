<?php

//多进程同时写入同一个文件
public function forkWrite(){
	
	$fp  = fopen("logs.log","a+");
	if(flock($fp,LOCK_EX)){        //排它锁锁定
		fwrite($fp,"Write \n");    
		fflush($fp);
		flock($fp,LOCK_UN);      //释放锁
	}else{
		echo "文件正在被其他程序占用";
	}
	fclose($fp);
}
//获取数组深度
public function array_depth($array){
	$max_deep = 1;
	foreach($array as $value){
		if(is_array($value)){
			$deep = array_depth($value) + 1;
			if($deep >$max_deep){
				$max_deep = $deep;
			}
		}
	}
	return $max_deep;
}
// 每天凌晨执行一次

0 0 0 * * reboot

//验证手机号
$reg  = '/^139\d{8}$/';
$phone = '1395222145';

