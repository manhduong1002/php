<?php 
class CM_Food { 
private $id; 
private $name; 
private $nature; 
private $image; 
private $start; 
private $doing; 
private $materials; 
function __construct($id,$name,$nature,$image,$start,$doing,$materials){
$this->id =$id; 
$this->name =$name; 
$this->nature =$nature; 
$this->image =$image; 
$this->start =$start; 
$this->doing =$doing; 
$this->materials =$materials; 
}
public function Getid(){
return $this->id;
} 
public function Getname(){
return $this->name;
} 
public function Getnature(){
return $this->nature;
} 
public function Getimage(){
return $this->image;
} 
public function Getstart(){
return $this->start;
} 
public function Getdoing(){
return $this->doing;
} 
public function Getmaterials(){
return $this->materials;
} 
public function Setid($id){
$this->id =$id;
} 
public function Setname($name){
$this->name =$name;
} 
public function Setnature($nature){
$this->nature =$nature;
} 
public function Setimage($image){
$this->image =$image;
} 
public function Setstart($start){
$this->start =$start;
} 
public function Setdoing($doing){
$this->doing =$doing;
} 
public function Setmaterials($materials){
$this->materials =$materials;
} 
 }?>