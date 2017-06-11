<?php 
class CJSON_Lop {
	function __construct(){
		
	}
	public function converJsontoLop($datajson){
		$datalop=array();
		$i=0;
		for($i=0;$i<count($datajson);$i++){
			$row=$datajson[$i];
			$datalop[$i]=new CM_Lop($row['MA_LOP'],$row['TEN_LOP'],$row['MA_GV_CN'],$row['TONG_KET_HK1'],$row['TONG_KET_HK2'],$row['TONG_KET_CN']);
		}
		return $datalop;
	}
	public function converLoptoJson($datalop){
		$datajson=array();
		$i=0;
		for($i=0;$i<count($datalop);$i++){
			$Lop=$datalop[$i];
			$datajson[$i]=array(
				'MA_LOP' => $Lop->GetMA_LOP(),
				'TEN_LOP' => $Lop->GetTEN_LOP(),
				'MA_GV_CN' => $Lop->GetMA_GV_CN(),
				'TONG_KET_HK1' => $Lop->GetTONG_KET_HK1(),
				'TONG_KET_HK2' => $Lop->GetTONG_KET_HK2(),
				'TONG_KET_CN' => $Lop->GetTONG_KET_CN()
				);
			}
		return $datajson;
	}
}

?>