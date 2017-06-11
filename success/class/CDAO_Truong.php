<?php 
class CDAO_Truong { 
	private $db;
	function __construct($db){
	$this->db = $db;
	}
	public function addTruong($Truong){
		if(checkaddTruong($Truong)==true){
			$sql_add="INSERT INTO `qlth_userschool` (`url`,`fullname`,`address`,`type`) VALUES ('".$Truong->Geturl()."','".$Truong->Getfullname()."','".$Truong->Getaddress()."','".$Truong->Gettype()."')";
			mysql_query($sql_add);
			return true;
		}
		return false;
	}
	public function updateTruong($Truong){
		$sql_update="UPDATE `qlth_userschool` SET `id`='".$Truong->Getid()."',`url`='".$Truong->Geturl()."',`fullname`='".$Truong->Getfullname()."',`address`='".$Truong->Getaddress()."',`type`='".$Truong->Gettype()."' WHERE ";
		mysql_query($sql_update);
		return true;
	}
	public function checkaddTruong($Truong){
		$sql_check="SELECT * FROM `qlth_userschool` WHERE url = '".$Truong->Geturl()."'";
		$qurey=mysql_query($sql_check);
		$number=mysql_num_rows($qurey);
		if($number>0)return false;
		return true;
	}
	public function GetTruongByid($id){
		$sql_check="SELECT * FROM `qlth_userschool` WHERE id = '".$id."'";
		$qurey=mysql_query($sql_check);
		$row=mysql_fetch_array($qurey);
		$datatruong=new CM_Truong($row['id'],$row['url'],$row['fullname'],$row['address'],$row['type']);
		return $datatruong;
	}
 }
 
 ?>