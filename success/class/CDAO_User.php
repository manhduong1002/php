<?php 
class CDAO_User { 
	private $db;
	function __construct($db){
		$this->db = $db;
	}
	public function addUser($User){
		$sql_add="INSERT INTO `lession_user` (`username`,`hashpassword`,`fullname`,`email`,`phonenumber`) VALUES ('".$User->Getusername()."',MD5(MD5('".$User->Gethashpassword()."')),'".$User->Getfullname()."','".$User->Getemail()."','".$User->Getphonenumber()."')";
		mysql_query($sql_add);
		return true;
	}
	public function updateUser($User){
		$sql_update="UPDATE `lession_user` SET `id`='".$User->Getid()."',`username`='".$User->Getusername()."',`hashpassword`='".$User->Gethashpassword()."',`fullname`='".$User->Getfullname()."',`email`='".$User->Getemail()."',`phonenumber`='".$User->Getphonenumber()."' WHERE ";
		mysql_query($sql_update);
		return true;
	}
	public function checkExistUser($username){
		$sql_check="SELECT * FROM `lession_user` WHERE username = '".$username."'";
		$qurey=mysql_query($sql_check);
		$number=mysql_num_rows($qurey);
		if($number>0)return false;
		return true;
	}
	public function loginUser($username,$password){
		$sql_check="SELECT * FROM `lession_user` WHERE username = '".$username."' and hashpassword = MD5(MD5('".$password."'))";
		$qurey=mysql_query($sql_check);
		$number=mysql_num_rows($qurey);
		if($number>0)return true;
		return false;
	}
 }?>