<?php 
include('DAO.php');
function updatefile($filename,$data)
{
	$fp = fopen($filename, "w+");
	fwrite($fp, $data);
	fclose($fp);
}
function creatclass($class,$filename,$filedatabase){
	$DAO=new DAO();
	$result = mysql_query("SHOW COLUMNS FROM $filedatabase");
	$i=0;
	$datashow=array();
	if (mysql_num_rows($result) > 0) {
		while ($row = mysql_fetch_array($result)) {
			$datashow[$i]=$row[0];
			$i++;
		}
	}
	$data="<?php \nclass $class { \n" ;
	echo $data;
	//bien
	for($i=0;$i<count($datashow);$i++){
		$data.="private $".$datashow[$i]."; \n";
	}
	//ham khoi tao
	$data.="function __construct(";
	for($i=0;$i<count($datashow)-1;$i++){
		$data.="$".$datashow[$i].",";
	}
	$data.="$".$datashow[count($datashow)-1]."){\n";
	for($i=0;$i<count($datashow);$i++){
		$data.="$"."this->".$datashow[$i]." =$".$datashow[$i]."; \n";
	}
	$data.="}\n";
	//ham get 
	for($i=0;$i<count($datashow);$i++){
		$data.="public function Get".$datashow[$i]."(){\nreturn $"."this->".$datashow[$i].";\n} \n";
	}
	// ham set
	for($i=0;$i<count($datashow);$i++){
		$data.="public function Set".$datashow[$i]."($".$datashow[$i]."){\n$"."this->".$datashow[$i]." =$".$datashow[$i].";\n} \n";
	}
	$data.=" }?>";
	echo $data;
	updatefile($filename,$data);
}
function getalldata($filenamedb,$fileclass,$filename){
	$DAO=new DAO();
	$result = mysql_query("SHOW COLUMNS FROM $filenamedb");
	$i=0;
	$datashow=array();
	if (mysql_num_rows($result) > 0) {
		while ($row = mysql_fetch_array($result)) {
			$datashow[$i]=$row[0];
			$i++;
		}
	}
	$data="new ".$fileclass."(";
	for($i=0;$i<count($datashow)-1;$i++){
		$data.="$"."row['".$datashow[$i]."'],";
	}
	$data.="$"."row['".$datashow[count($datashow)-1]."']";
	$data.=");\n";
	echo $data;
	updatefile($filename,$data);
}
function creatjsonclass($filenamedb,$filename,$find){
	$DAO=new DAO();
	$result = mysql_query("SHOW COLUMNS FROM $filenamedb");
	$i=0;
	$datashow=array();
	if (mysql_num_rows($result) > 0) {
		while ($row = mysql_fetch_array($result)) {
			$datashow[$i]=$row[0];
			$i++;
		}
	}
	$data="(\n";
	for($i=0;$i<count($datashow)-1;$i++){
		$data.="'".$datashow[$i]."' => $".$find."->Get".$datashow[$i]."(),\n";
	}
	$data.="'".$datashow[count($datashow)-1]."' => $".$find."->Get".$datashow[count($datashow)-1]."()\n";
	$data.=")";
	echo $data;
	updatefile($filename,$data);
}
//getalldata("tbl_config_detail","CM_ConfigDetail","demo.php");
//creatclass("CM_ConfigDetail","CM_ConfigDetail.php","tbl_config_detail");
//creatjsonclass("","json.php","Target");
?>