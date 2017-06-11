<?php 
class CM_Lop { 
private $MA_LOP; 
private $TEN_LOP; 
private $MA_GV_CN; 
private $TONG_KET_HK1; 
private $TONG_KET_HK2; 
private $TONG_KET_CN; 
function __construct($MA_LOP,$TEN_LOP,$MA_GV_CN,$TONG_KET_HK1,$TONG_KET_HK2,$TONG_KET_CN){
$this->MA_LOP =$MA_LOP; 
$this->TEN_LOP =$TEN_LOP; 
$this->MA_GV_CN =$MA_GV_CN; 
$this->TONG_KET_HK1 =$TONG_KET_HK1; 
$this->TONG_KET_HK2 =$TONG_KET_HK2; 
$this->TONG_KET_CN =$TONG_KET_CN; 
}
public function GetMA_LOP(){
return $this->MA_LOP;
} 
public function GetTEN_LOP(){
return $this->TEN_LOP;
} 
public function GetMA_GV_CN(){
return $this->MA_GV_CN;
} 
public function GetTONG_KET_HK1(){
return $this->TONG_KET_HK1;
} 
public function GetTONG_KET_HK2(){
return $this->TONG_KET_HK2;
} 
public function GetTONG_KET_CN(){
return $this->TONG_KET_CN;
} 
public function SetMA_LOP($MA_LOP){
$this->MA_LOP =$MA_LOP;
} 
public function SetTEN_LOP($TEN_LOP){
$this->TEN_LOP =$TEN_LOP;
} 
public function SetMA_GV_CN($MA_GV_CN){
$this->MA_GV_CN =$MA_GV_CN;
} 
public function SetTONG_KET_HK1($TONG_KET_HK1){
$this->TONG_KET_HK1 =$TONG_KET_HK1;
} 
public function SetTONG_KET_HK2($TONG_KET_HK2){
$this->TONG_KET_HK2 =$TONG_KET_HK2;
} 
public function SetTONG_KET_CN($TONG_KET_CN){
$this->TONG_KET_CN =$TONG_KET_CN;
} 
 }?>