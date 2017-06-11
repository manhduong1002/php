<?php 
class CDAO_Target { 
	private $db;
	function __construct($db){
		$this->db = $db;
	}
	public function addTarget($Target){
		$sql_add="INSERT INTO `tbl_target` (`level`,`expiryDateHours`,`expiryDateDay`,`startDateHours`,`startDateDay`,`title`,`name`,`parentId`,`status`,`thisconfig`) VALUES ('".$Target->Getlevel()."','".$Target->GetexpiryDateHours()."','".$Target->GetexpiryDateDay()."','".$Target->GetstartDateHours()."','".$Target->GetstartDateDay()."','".$Target->Gettitle()."','".$Target->Getname()."','".$Target->GetparentId()."','".$Target->Getstatus()."','".$Target->Getthisconfig()."')";
		mysql_query($sql_add);
		return true;
	}
	public function updateTarget($Target){
		$sql_update="UPDATE `tbl_target` SET `level`='".$Target->Getlevel()."',`expiryDateHours`='".$Target->GetexpiryDateHours()."',`expiryDateDay`='".$Target->GetexpiryDateDay()."',`startDateHours`='".$Target->GetstartDateHours()."',`startDateDay`='".$Target->GetstartDateDay()."',`title`='".$Target->Gettitle()."',`name`='".$Target->Getname()."',`parentId`='".$Target->GetparentId()."',`status`='".$Target->Getstatus()."' WHERE `id`='".$Target->Getid()."'";
		mysql_query($sql_update);
		return true;
	}
	public function getTargetByLevel($level,$thisconfig){
		$sql_getall="SELECT * FROM `tbl_target` WHERE level = $level AND thisconfig = $thisconfig AND status != 3";
		$dataTarget=array();
		$qurey=mysql_query($sql_getall);
		$i=0;
		while($row=mysql_fetch_array($qurey)){
			$dataTarget[$i]=new CM_Target($row['id'],$row['level'],$row['expiryDateHours'],$row['expiryDateDay'],$row['startDateHours'],$row['startDateDay'],$row['title'],$row['name'],$row['parentId'],$row['status'],$row['thisconfig']);
			$i++;
		}
		return $dataTarget;
	}
	
	public function getTarget($level){
		$sql_getall="SELECT * FROM `tbl_target` WHERE level = $level AND status != 3 order by thisconfig asc";
		$dataTarget=array();
		$qurey=mysql_query($sql_getall);
		$i=0;
		while($row=mysql_fetch_array($qurey)){
			$dataTarget[$i]=new CM_Target($row['id'],$row['level'],$row['expiryDateHours'],$row['expiryDateDay'],$row['startDateHours'],$row['startDateDay'],$row['title'],$row['name'],$row['parentId'],$row['status'],$row['thisconfig']);
			$i++;
		}
		return $dataTarget;
	}
	
	public function getTargetById($id){
		$sql_getall="SELECT * FROM `tbl_target` WHERE id = $id";
		$qurey=mysql_query($sql_getall);
		while($row=mysql_fetch_array($qurey)){
			$dataTarget=new CM_Target($row['id'],$row['level'],$row['expiryDateHours'],$row['expiryDateDay'],$row['startDateHours'],$row['startDateDay'],$row['title'],$row['name'],$row['parentId'],$row['status'],$row['thisconfig']);
		}
		return $dataTarget;
	}
	public function getTargetByParentId($parentId){
		$sql_getall="SELECT * FROM `tbl_target` WHERE parentId = $parentId AND status != 3";
		$dataTarget=array();
		$i = 0;
		$qurey=mysql_query($sql_getall);
		while($row=mysql_fetch_array($qurey)){
			$dataTarget[$i]=new CM_Target($row['id'],$row['level'],$row['expiryDateHours'],$row['expiryDateDay'],$row['startDateHours'],$row['startDateDay'],$row['title'],$row['name'],$row['parentId'],$row['status'],$row['thisconfig']);
			$i++;
		}
		return $dataTarget;
	}
	public function toDoing($id){
		$CM_Target = $this->getTargetById($id);
		$CM_Target->toDoing();
		$this->updateTarget($CM_Target);
	}
	
	public function toNew($id){
		$CM_Target = $this->getTargetById($id);
		$CM_Target->toNew();
		$this->updateTarget($CM_Target);
	}
	
	public function toPending($id){
		$CM_Target = $this->getTargetById($id);
		$CM_Target->toPending();
		$this->updateTarget($CM_Target);
	}
	public function toFinish($id){
		$CM_Target = $this->getTargetById($id);
		$CM_Target->toFinish();
		$this->updateTarget($CM_Target);
	}
	
	public function nextWeek($week){
		$dataTarget = $this->getTargetByLevel(3,$week);
		for($i=0;$i<count($dataTarget);$i++){
			$dataTargetParent = $this->getTargetByParentId($dataTarget[$i]->GetId());
			if(count($dataTargetParent) == 0){
				$this->toFinish($dataTarget[$i]->GetId());
			}
			else {
				for($j = 0; $j < count($dataTargetParent); $j++){
					$this->toNew($dataTargetParent[$j]->GetId());
				}
				$dataTarget[$i]->SetThisconfig($week+1);
				$this->updateTarget($dataTarget[$i]);
			}
		}
	}
 }?>