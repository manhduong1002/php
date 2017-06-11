<?php 
class CDAO_Lop { 
	private $db;
	function __construct($db){
		$this->db = $db;
	}
	public function addLop($Lop,$NIEN_KHOA){
		$sql_add="INSERT INTO `qlth_".$NIEN_KHOA."_lop` (`MA_LOP`,`TEN_LOP`,`MA_GV_CN`,`TONG_KET_HK1`,`TONG_KET_HK2`,`TONG_KET_CN`) VALUES ('".$Lop->GetMA_LOP()."','".$Lop->GetTEN_LOP()."','".$Lop->GetMA_GV_CN()."','".$Lop->GetTONG_KET_HK1()."','".$Lop->GetTONG_KET_HK2()."','".$Lop->GetTONG_KET_CN()."')";
		mysql_query($sql_add);
		return true;
	}
	public function updateLop($Lop,$NIEN_KHOA){
		$sql_update="UPDATE `qlth_".$NIEN_KHOA."_lop` SET `MA_LOP`='".$Lop->GetMA_LOP()."',`TEN_LOP`='".$Lop->GetTEN_LOP()."',`MA_GV_CN`='".$Lop->GetMA_GV_CN()."',`TONG_KET_HK1`='".$Lop->GetTONG_KET_HK1()."',`TONG_KET_HK2`='".$Lop->GetTONG_KET_HK2()."',`TONG_KET_CN`='".$Lop->GetTONG_KET_CN()."' WHERE ";
		mysql_query($sql_update);
		return true;
	}
	public function GetAllLop($NIEN_KHOA){
		$sql_getall="SELECT * FROM `qlth_".$NIEN_KHOA."_lop` WHERE 1";
		$datalop=array();
		$qurey=mysql_query($sql_getall);
		$i=0;
		while($row=mysql_fetch_array($qurey)){
			$datalop[$i]=new CM_Lop($row['MA_LOP'],$row['TEN_LOP'],$row['MA_GV_CN'],$row['TONG_KET_HK1'],$row['TONG_KET_HK2'],$row['TONG_KET_CN']);
			$i++;
		}
		return $datalop;
	}
 }?>