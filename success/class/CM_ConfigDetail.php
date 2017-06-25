<?php 
class CM_ConfigDetail { 
private $id; 
private $level; 
private $thisconfig; 
private $name; 
function __construct($id,$level,$thisconfig,$name){
$this->id =$id; 
$this->level =$level; 
$this->thisconfig =$thisconfig; 
$this->name =$name; 
}
public function Getid(){
return $this->id;
} 
public function Getlevel(){
return $this->level;
} 
public function Getthisconfig(){
return $this->thisconfig;
} 
public function Getname(){
return $this->name;
} 
public function Setid($id){
$this->id =$id;
} 
public function Setlevel($level){
$this->level =$level;
} 
public function Setthisconfig($thisconfig){
$this->thisconfig =$thisconfig;
} 
public function Setname($name){
$this->name =$name;
} 
 }?>