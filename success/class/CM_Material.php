<?php 
class CM_Material { 
private $id; 
private $name; 
private $selection; 
private $color; 
private $nutrients; 
function __construct($id,$name,$selection,$color,$nutrients){
$this->id =$id; 
$this->name =$name; 
$this->selection =$selection; 
$this->color =$color; 
$this->nutrients =$nutrients; 
}
public function Getid(){
return $this->id;
} 
public function Getname(){
return $this->name;
} 
public function Getselection(){
return $this->selection;
} 
public function Getcolor(){
return $this->color;
} 
public function Getnutrients(){
return $this->nutrients;
} 
public function Setid($id){
$this->id =$id;
} 
public function Setname($name){
$this->name =$name;
} 
public function Setselection($selection){
$this->selection =$selection;
} 
public function Setcolor($color){
$this->color =$color;
} 
public function Setnutrients($nutrients){
$this->nutrients =$nutrients;
} 
 }?>