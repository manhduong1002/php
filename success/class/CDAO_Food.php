<?php 
class CDAO_Food { 
	private $db;
	function __construct($db){
		$this->db = $db;
	}
	
	public function addFood($Food){
		$sql_add="INSERT INTO `tbl_food` (`name`,`nature`,`image`,`start`,`doing`,`materials`) VALUES ('".$Food->Getname()."','".$Food->Getnature()."','".$Food->Getimage()."','".$Food->Getstart()."','".$Food->Getdoing()."','".$Food->Getmaterials()."')";
		mysql_query($sql_add);
		return true;
	}
	
	public function updateFood($Food){
		$sql_update="UPDATE `tbl_food` SET `id`='".$Food->Getid()."',`name`='".$Food->Getname()."',`nature`='".$Food->Getnature()."',`image`='".$Food->Getimage()."',`start`='".$Food->Getstart()."',`doing`='".$Food->Getdoing()."',`materials`='".$Food->Getmaterials()."' WHERE ";
		mysql_query($sql_update);
		return true;
	}
	public function getAllFood(){
		$sql_getall="SELECT * FROM `tbl_food`";
		$qurey=mysql_query($sql_getall);
		$dataFood = array();
		$i = 0;
		while($row=mysql_fetch_array($qurey)){
			$dataFood[$i] = new CM_Food($row['id'],$row['name'],$row['nature'],$row['image'],$row['start'],$row['doing'],$row['materials']);
			$i++;
		}
		return $dataFood;
	}
 }?>