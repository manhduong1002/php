<?php 
class CM_User { 
private $id; 
private $username; 
private $hashpassword; 
private $fullname; 
private $email; 
private $phonenumber; 
function __construct($id,$username,$hashpassword,$fullname,$email,$phonenumber){
$this->id =$id; 
$this->username =$username; 
$this->hashpassword =$hashpassword; 
$this->fullname =$fullname; 
$this->email =$email; 
$this->phonenumber =$phonenumber; 
}
public function Getid(){
return $this->id;
} 
public function Getusername(){
return $this->username;
} 
public function Gethashpassword(){
return $this->hashpassword;
} 
public function Getfullname(){
return $this->fullname;
} 
public function Getemail(){
return $this->email;
} 
public function Getphonenumber(){
return $this->phonenumber;
} 
public function Setid($id){
$this->id =$id;
} 
public function Setusername($username){
$this->username =$username;
} 
public function Sethashpassword($hashpassword){
$this->hashpassword =$hashpassword;
} 
public function Setfullname($fullname){
$this->fullname =$fullname;
} 
public function Setemail($email){
$this->email =$email;
} 
public function Setphonenumber($phonenumber){
$this->phonenumber =$phonenumber;
} 
 }?>