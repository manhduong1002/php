<?php 
class CM_Target { 
private $id; 
private $level; 
private $expiryDateHours; 
private $expiryDateDay; 
private $startDateHours; 
private $startDateDay; 
private $title; 
private $name; 
private $parentId; 
private $status; 
private $thisconfig; 
function __construct($id,$level,$expiryDateHours,$expiryDateDay,$startDateHours,$startDateDay,$title,$name,$parentId,$status,$thisconfig){
$this->id =$id; 
$this->level =$level; 
$this->expiryDateHours =$expiryDateHours; 
$this->expiryDateDay =$expiryDateDay; 
$this->startDateHours =$startDateHours; 
$this->startDateDay =$startDateDay; 
$this->title =$title; 
$this->name =$name; 
$this->parentId =$parentId; 
$this->status =$status; 
$this->thisconfig =$thisconfig; 
}
public function Getid(){
return $this->id;
} 
public function Getlevel(){
return $this->level;
} 
public function GetexpiryDateHours(){
return $this->expiryDateHours;
} 
public function GetexpiryDateDay(){
return $this->expiryDateDay;
} 
public function GetstartDateHours(){
return $this->startDateHours;
} 
public function GetstartDateDay(){
return $this->startDateDay;
} 
public function Gettitle(){
return $this->title;
} 
public function Getname(){
return $this->name;
} 
public function GetparentId(){
return $this->parentId;
} 
public function Getstatus(){
return $this->status;
} 
public function Getthisconfig(){
return $this->thisconfig;
} 
public function Setid($id){
$this->id =$id;
} 
public function Setlevel($level){
$this->level =$level;
} 
public function SetexpiryDateHours($expiryDateHours){
$this->expiryDateHours =$expiryDateHours;
} 
public function SetexpiryDateDay($expiryDateDay){
$this->expiryDateDay =$expiryDateDay;
} 
public function SetstartDateHours($startDateHours){
$this->startDateHours =$startDateHours;
} 
public function SetstartDateDay($startDateDay){
$this->startDateDay =$startDateDay;
} 
public function Settitle($title){
$this->title =$title;
} 
public function Setname($name){
$this->name =$name;
} 
public function SetparentId($parentId){
$this->parentId =$parentId;
} 
public function Setstatus($status){
$this->status =$status;
} 
public function Setthisconfig($thisconfig){
$this->thisconfig =$thisconfig;
} 
public function isNew(){
	return ($this->status == 0);
}
public function isDoing(){
	return ($this->status == 1);
}
public function isPending(){
	return ($this->status == 2);
}
public function isFinish(){
	return ($this->status == 3);
}
public function toDoing(){
	if($this->isNew() || $this->isPending()){
		$this->status = 1;
	}
}
public function toPending(){
	if($this->isDoing()){
		$this->status = 2;
	}
}
public function toNew(){
	if($this->isPending() || $this->isDoing()){
		$this->status = 0;
	}
}
public function toFinish(){
	if($this->isDoing()){
		$this->status = 3;
	}
}
 }?>