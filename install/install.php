<?php
	/**                   BY:xue8
 *   
 *                           ,.  
 *                         (_|,.  
 *                        ,' /, )_______   _  
 *                     __j o``-'        `.'-)'  
 *                    (")                 \'  
 *                     `-j                |  
 *                       `-._(           /  
 *                   xry    |_\  |--^.  /  
 *                         /_]'|_| /_)_/  
 *                            /_]'  /_]'  
 *  
 */ 
	//if($_POST){
		include("config.php");
		$conn->query("SET NAMES utf8");
		$conn->query("CREATE TABLE IF NOT EXISTS member(uid INT, studentnumber INT, password VARCHAR(999), name VARCHAR(999),email VARCHAR(999), phone VARCHAR(999), qq VARCHAR(999), major VARCHAR(999), hometown VARCHAR(999))"); //用户信息表
		$conn->query("CREATE TABLE IF NOT EXISTS member_form(profile VARCHAR(999), profile1 VARCHAR(999), profile2 VARCHAR(999), profile3 VARCHAR(999))");  //报名表信息表
		$conn->query("CREATE TABLE IF NOT EXISTS admin_user(user VARCHAR(999), password VARCHAR(999))");  //管理员信息表
		echo json_encode(["code" => 200, "msg" => '安装完成！']);	 
//} 
?>