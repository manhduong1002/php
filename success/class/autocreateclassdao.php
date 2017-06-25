<?php 
include('DAO.php');
function updatefile($filename,$data)
{
	$fp = fopen($filename, "w+");
	fwrite($fp, $data);
	fclose($fp);
}
function creatclassdao($class,$filename,$filedatabase,$namecm,$idcm){
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
	//ham khoi tao
	$data.="private $"."db;\nfunction __construct($"."db){\n$"."this->db = $"."db;\n}\n";
	// ham add
	$data.="public function add".$namecm."($".$namecm."){\n$"."sql_add=".'"'."INSERT INTO `".$filedatabase."` (";
	for($i=0;$i<count($datashow)-1;$i++){
		$data.="`".$datashow[$i]."`,";
	}
	$data.="`".$datashow[count($datashow)-1]."`";
	$data.=") VALUES (";
	for($i=0;$i<count($datashow)-1;$i++){
		$data.="'".'".';
		$data.="$".$namecm."->Get".$datashow[$i]."()";
		$data.='."';
		$data.="',";
	}
	$data.="'".'".';
	$data.="$".$namecm."->Get".$datashow[count($datashow)-1]."()";
	$data.='."'."'";
	$data.=")".'"'.";\n";
	$data.="mysql_query($"."sql_add);\n";
	$data.="return true;\n";
	$data.="}\n";
	//ham update 
	$data.="public function update".$namecm."($".$namecm."){\n$"."sql_update=".'"'."UPDATE `".$filedatabase."` SET ";
	for($i=0;$i<count($datashow)-1;$i++){
		$data.="`".$datashow[$i]."`=";
		$data.="'".'".';
		$data.="$".$namecm."->Get".$datashow[$i]."()";
		$data.='."';
		$data.="',";
	}
	$data.="`".$datashow[count($datashow)-1]."`=";
	$data.="'".'".';
	$data.="$".$namecm."->Get".$datashow[$i]."()";
	$data.='."'."'";
	$data.=' WHERE '.'";'."\n";
	$data.="mysql_query($"."sql_update);\n";
	$data.="return true;\n";
	$data.="}\n";
	$data.=" }?>";
	echo $data;
	updatefile($filename,$data);
}
//creatclassdao("CDAO_ConfigDetail","CDAO_ConfigDetail.php","tbl_config_detail","ConfigDetail","id_Giaovien");
?>