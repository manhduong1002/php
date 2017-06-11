<?php 
class CM_Phong { 
	private $id; 
	private $url; 
	private $fullname; 
	private $address; 
	private $type; 
	function __construct($id,$url,$fullname,$address,$type){
		$this->id =$id; 
		$this->url =$url; 
		$this->fullname =$fullname; 
		$this->address =$address; 
		$this->type =$type; 
	}
	public function Getid(){
		return $this->id;
	} 
	public function Geturl(){
		return $this->url;
	} 
	public function Getfullname(){
		return $this->fullname;
	} 
	public function Getaddress(){
		return $this->address;
	} 
	public function Gettype(){
		return $this->type;
	} 
	public function Setid($id){
		$this->id =$id;
	} 
	public function Seturl($url){
		$this->url =$url;
	} 
	public function Setfullname($fullname){
		$this->fullname =$fullname;
	} 
	public function Setaddress($address){
		$this->address =$address;
	} 
	public function Settype($type){
		$this->type =$type;
	} 
 }?>