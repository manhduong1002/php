<?php 
require_once('../../class/DAO.php');
require_once('../../class/CM_Target.php');
require_once('../../class/CM_Config.php');
require_once('../../class/CDAO_Target.php');
require_once('../../class/CDAO_Config.php');
require_once('../../class/CM_MessageRespone.php');
require_once('../../class/CJSON_MessageRespone.php');

$dao = new DAO();
$CDAO_Target = new CDAO_Target($dao);
$CDAO_Config = new CDAO_Config($dao);
$CJSON_MessageRespone=new CJSON_MessageRespone();
$id=$_POST['id'];
if(!isset($_POST['id'])){
	$CM_MessageRespone=new CM_MessageRespone("1","Lỗi tham số đầu vào","Thiếu trường id");
		echo json_encode($CJSON_MessageRespone->converMessageResponetoJson($CM_MessageRespone));
		return;
}
$level=$_POST['level'];
if(!isset($_POST['level'])){
	$CM_MessageRespone=new CM_MessageRespone("1","Lỗi tham số đầu vào","Thiếu trường level");
		echo json_encode($CJSON_MessageRespone->converMessageResponetoJson($CM_MessageRespone));
		return;
}

$expiryDate=$_POST['expiryDate'];
if(!isset($_POST['expiryDate'])){
	$CM_MessageRespone=new CM_MessageRespone("1","Lỗi tham số đầu vào","Thiếu trường expiryDate");
		echo json_encode($CJSON_MessageRespone->converMessageResponetoJson($CM_MessageRespone));
		return;
}

$title=$_POST['title'];
if(!isset($_POST['title'])){
	$CM_MessageRespone=new CM_MessageRespone("1","Lỗi tham số đầu vào","Thiếu trường title");
		echo json_encode($CJSON_MessageRespone->converMessageResponetoJson($CM_MessageRespone));
		return;
}
$name=$_POST['name'];
if(!isset($_POST['name'])){
	$CM_MessageRespone=new CM_MessageRespone("1","Lỗi tham số đầu vào","Thiếu trường name");
		echo json_encode($CJSON_MessageRespone->converMessageResponetoJson($CM_MessageRespone));
		return;
}
$parentId=$_POST['parentId'];
if(!isset($_POST['parentId'])){
	$CM_MessageRespone=new CM_MessageRespone("1","Lỗi tham số đầu vào","Thiếu trường parentId");
		echo json_encode($CJSON_MessageRespone->converMessageResponetoJson($CM_MessageRespone));
		return;
}

$status=0;

$CM_Target = new CM_Target($id,$level,$expiryDate,$title,$name,$parentId,$status);
$CDAO_Target->addTarget($CM_Target);
$CM_MessageRespone=new CM_MessageRespone("0","Thêm thành công","");
echo json_encode($CJSON_MessageRespone->converMessageResponetoJson($CM_MessageRespone));
?>