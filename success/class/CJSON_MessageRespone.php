<?php 
class CJSON_MessageRespone{
	function __construct(){		
	}
	public function converMessageResponetoJson($respone){
		$datajson= array(
		'errorCode' => $respone->GeterrorCode(),
		'errorDescription' => $respone->GeterrorDescription(),
		'content' => $respone->Getcontent());
		return $datajson;
	}
}
?>