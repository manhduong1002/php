<?php 
class CDAO_Material { 

	private $db;
	
	function __construct($db){
		$this->db = $db;
	}
	// function add material 
	public function addMaterial($Material){
		$sql_add="INSERT INTO `tbl_material` (`name`,`selection`,`color`,`nutrients`) VALUES ('".$Material->Getname()."','".$Material->Getselection()."','".$Material->Getcolor()."','".$Material->Getnutrients()."')";
		mysql_query($sql_add);
		return true;
	}
	//funcion update material
	public function updateMaterial($Material){
		$sql_update="UPDATE `tbl_material` SET `id`='".$Material->Getid()."',`name`='".$Material->Getname()."',`selection`='".$Material->Getselection()."',`color`='".$Material->Getcolor()."',`nutrients`='".$Material->Getnutrients()."' WHERE ";
		mysql_query($sql_update);
		return true;
	}
	// function get list all material
	public function getAllMaterial(){
		$sql_getall="SELECT * FROM `tbl_material`";
		$qurey=mysql_query($sql_getall);
		$dataMaterial = array();
		$i = 0;
		while($row=mysql_fetch_array($qurey)){
			$dataMaterial[$i] = new CM_Material($row['id'],$row['name'],$row['selection'],$row['color'],$row['nutrients']);
			$i++;
		}
		return $dataMaterial;
	}
	
 }?>