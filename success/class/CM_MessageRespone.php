<?php 
class CM_MessageRespone { 
	private $errorCode; 
	private $errorDescription; 
	private $content; 
	function __construct($errorCode,$errorDescription,$content){
	$this->errorCode =$errorCode; 
	$this->errorDescription =$errorDescription; 
	$this->content =$content; 
	}
	public function GeterrorCode(){
	return $this->errorCode;
	} 
	public function GeterrorDescription(){
	return $this->errorDescription;
	} 
	public function Getcontent(){
	return $this->content;
	} 
	public function SeterrorCode($errorCode){
	$this->errorCode =$errorCode;
	}
	public function SeterrorDescription($errorDescription){
	$this->errorDescription =$errorDescription;
	} 
	public function Setcontent($content){
	$this->content =$content;
	} 
}
?>