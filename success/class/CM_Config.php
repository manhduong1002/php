<?php 
class CM_Config { 
private $Id; 
private $year; 
private $precious; 
private $month; 
private $week; 
private $day; 
private $thisday; 
function __construct($Id,$year,$precious,$month,$week,$day,$thisday){
$this->Id =$Id; 
$this->year =$year; 
$this->precious =$precious; 
$this->month =$month; 
$this->week =$week; 
$this->day =$day; 
$this->thisday =$thisday; 
}
public function GetId(){
return $this->Id;
} 
public function Getyear(){
return $this->year;
} 
public function Getprecious(){
return $this->precious;
} 
public function Getmonth(){
return $this->month;
} 
public function Getweek(){
return $this->week;
} 
public function Getday(){
return $this->day;
} 
public function Getthisday(){
return $this->thisday;
} 
public function SetId($Id){
$this->Id =$Id;
} 
public function Setyear($year){
$this->year =$year;
} 
public function Setprecious($precious){
$this->precious =$precious;
} 
public function Setmonth($month){
$this->month =$month;
} 
public function Setweek($week){
$this->week =$week;
} 
public function Setday($day){
$this->day =$day;
} 
public function Setthisday($thisday){
$this->thisday =$thisday;
} 
 }?>