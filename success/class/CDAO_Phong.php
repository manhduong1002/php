<?php 
class CDAO_Phong { 
	private $db;
	function __construct($db){
	$this->db = $db;
	}
	public function addCM_Phong($CM_Phong){
		if($this->checkaddPhong()==true){
			$sql_add="INSERT INTO `qlth_usereducationdepartment` (`url`,`fullname`,`address`,`type`) VALUES ('".$CM_Phong->Geturl()."','".$CM_Phong->Getfullname()."','".$CM_Phong->Getaddress()."','".$CM_Phong->Gettype()."')";
			mysql_query($sql_add);
			return true;
		}
		return false;
	}
	public function updateCM_Phong($CM_Phong){
		$sql_update="UPDATE `qlth_usereducationdepartment` SET `id`='".$CM_Phong->Getid()."',`url`='".$CM_Phong->Geturl()."',`fullname`='".$CM_Phong->Getfullname()."',`address`='".$CM_Phong->Getaddress()."',`type`='".$CM_Phong->Gettype()."' WHERE ";
		mysql_query($sql_update);
		return true;
	}
	public function checkaddPhong(){
		$sql_check="SELECT * FROM `qlth_usereducationdepartment`";
		$qurey=mysql_query($sql_check);
		$number=mysql_num_rows($qurey);
		if($number>0)return false;
		return true;
	}
	public function GetPhongByid($id){
		$sql_check="SELECT * FROM `qlth_usereducationdepartment` WHERE id = '".$id."'";
		$qurey=mysql_query($sql_check);
		$row=mysql_fetch_array($qurey);
		$datatruong=new CM_Phong($row['id'],$row['url'],$row['fullname'],$row['address'],$row['type']);
		return $datatruong;
	}
 }?>