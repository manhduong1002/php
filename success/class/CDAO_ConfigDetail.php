<?php 
class CDAO_ConfigDetail { 
	private $db;
	function __construct($db){
		$this->db = $db;
	}
	public function addConfigDetail($ConfigDetail){
		$sql_add="INSERT INTO `tbl_config_detail` (`id`,`level`,`thisconfig`,`name`) VALUES ('".$ConfigDetail->Getid()."','".$ConfigDetail->Getlevel()."','".$ConfigDetail->Getthisconfig()."','".$ConfigDetail->Getname()."')";
		mysql_query($sql_add);
		return true;
	}
	public function updateConfigDetail($ConfigDetail){
		$sql_update="UPDATE `tbl_config_detail` SET `id`='".$ConfigDetail->Getid()."',`level`='".$ConfigDetail->Getlevel()."',`thisconfig`='".$ConfigDetail->Getthisconfig()."',`name`='".$ConfigDetail->Getname()."' WHERE ";
		mysql_query($sql_update);
		return true;
	}
	
	public function getConfigDetailByLevel($level){
		$sql_getall="SELECT * FROM `tbl_config_detail` WHERE level = $level";
		$qurey=mysql_query($sql_getall);
		$dataConfigDetail = array();
		$i=0;
		while($row=mysql_fetch_array($qurey)){
			$dataConfigDetail[$i]=new CM_ConfigDetail($row['id'],$row['level'],$row['thisconfig'],$row['name']);
			$i++;
		}
		return $dataConfigDetail;
	}
	
	public function getConfigDetailById($id){
		$sql_getall="SELECT * FROM `tbl_config_detail` WHERE id = $id";
		$qurey=mysql_query($sql_getall);
		$dataConfigDetail;
		$i=0;
		$i=0;
		while($row=mysql_fetch_array($qurey)){
			$dataConfigDetail=new CM_ConfigDetail($row['id'],$row['level'],$row['thisconfig'],$row['name']);
		}
		return $dataConfigDetail;
	}
 }?>