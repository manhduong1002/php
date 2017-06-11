<?php 

class CJSON_Target{
	
	function __construct(){
		
	}
	
	public function converJsontoTarget($datajson){
		$dataTarget=array();
		$i=0;
		for($i=0;$i<count($datajson);$i++){
			$row=$datajson[$i];
			$dataTarget[$i]=new CM_Target($row['id'],$row['level'],$row['expiryDate'],$row['title'],$row['name'],$row['parentId'],$row['status']);
		}
		return $dataTarget;
	}
	public function converTargettoJson($dataTarget){
		$i=0;
		$datajson=array();
		for($i=0;$i<count($dataTarget);$i++){
			$Target=$dataTarget[$i];
			$datajson[$i]= array(
							'id' => $Target->Getid(),
							'level' => $Target->Getlevel(),
							'expiryDate' => $Target->GetexpiryDate(),
							'title' => $Target->Gettitle(),
							'name' => $Target->Getname(),
							'parentId' => $Target->GetparentId(),
							'status' => $Target->Getstatus()
						);
			
		}
		return $datajson;
	}


}
?>