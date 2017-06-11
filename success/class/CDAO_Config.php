<?php 
class CDAO_Config { 
	private $db;
	function __construct($db){
		$this->db = $db;
	}
	
	public function updateConfig($Config){
		$sql_update="UPDATE `tbl_config` SET `year`='".$Config->Getyear()."',`precious`='".$Config->Getprecious()."',`month`='".$Config->Getmonth()."',`week`='".$Config->Getweek()."',`day`='".$Config->Getday()."',`thisday`='".$Config->Getthisday()."' WHERE `Id`='".$Config->GetId()."'";
		mysql_query($sql_update);
		return true;
	}
	public function getConfig(){
		$sql_getall="SELECT * FROM `tbl_config` WHERE id = 1";
		$qurey=mysql_query($sql_getall);
		while($row=mysql_fetch_array($qurey)){
			$dataConfig=new CM_Config($row['Id'],$row['year'],$row['precious'],$row['month'],$row['week'],$row['day'],$row['thisday']);
		}
		return $dataConfig;
	}
	
	public function nextYear(){
		$CM_Config = $this->getConfig();
		$year = $CM_Config->Getyear();
		$year++;
		$CM_Config->Setyear($year);
		$CM_Config->Setprecious(1);
		$CM_Config->Setmonth(1);
		$CM_Config->Setweek(1);
		$CM_Config->Setday(2);
		$this->updateConfig($CM_Config);
	}
	public function nextPrecious(){
		$CM_Config = $this->getConfig();
		$precious = $CM_Config->Getprecious();
		$precious++;
		$CM_Config->Setprecious($precious);
		$this->updateConfig($CM_Config);
	}
	
	public function nextWeek(){
		$CM_Config = $this->getConfig();
		$week = $CM_Config->Getweek();
		$week++;
		$CM_Config->Setweek($week);
		$CM_Config->Setday(2);
		$this->updateConfig($CM_Config);
	}
	
	public function nextDay(){
		$CM_Config = $this->getConfig();
		$day = $CM_Config->Getday();
		$day++;
		$CM_Config->Setday($day);
		$this->updateConfig($CM_Config);
	}
 }?>