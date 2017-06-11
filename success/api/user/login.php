<?php 
require_once('../../class/DAO.php');
require_once('../../class/CM_MessageRespone.php');
require_once('../../class/CM_User.php');
require_once('../../class/CDAO_User.php');
require_once('../../class/CJSON_MessageRespone.php');
$CJSON_MessageRespone=new CJSON_MessageRespone();
if(!isset($_POST['username_api'])){
	$CM_MessageRespone=new CM_MessageRespone("1","Lỗi tham số đầu vào","Thiếu trường username_api");
		echo json_encode($CJSON_MessageRespone->converMessageResponetoJson($CM_MessageRespone));
		return;
}
$username_api=$_POST['username_api'];
if(!isset($_POST['password_api'])){
	$CM_MessageRespone=new CM_MessageRespone("1","Lỗi tham số đầu vào","Thiếu trường password_api");
		echo json_encode($CJSON_MessageRespone->converMessageResponetoJson($CM_MessageRespone));
		return;
}
$password_api=$_POST['password_api'];
if($username_api==USERNAME_API && $password_api==PASSWORD_API){
	if(!isset($_POST['username'])){
		$CM_MessageRespone=new CM_MessageRespone("1","Lỗi tham số đầu vào","Thiếu trường username");
		echo json_encode($CJSON_MessageRespone->converMessageResponetoJson($CM_MessageRespone));
		return;
	}
	$username=$_POST['username'];
	if(!isset($_POST['password'])){
		$CM_MessageRespone=new CM_MessageRespone("1","Lỗi tham số đầu vào","Thiếu trường password");
		echo json_encode($CJSON_MessageRespone->converMessageResponetoJson($CM_MessageRespone));
		return;
	}
	$password=$_POST['password'];
	$DAO=new DAO();
	$CDAO_User=new CDAO_User($DAO);
	if($CDAO_User->loginUser($username,$password)){
		$CM_MessageRespone=new CM_MessageRespone("0","Đăng nhập thành công","Đăng nhập thành công");
		echo json_encode($CJSON_MessageRespone->converMessageResponetoJson($CM_MessageRespone));
		return;
	}else {
		$CM_MessageRespone=new CM_MessageRespone("2","Sai username password","username ".$username." password ".$password);
		echo json_encode($CJSON_MessageRespone->converMessageResponetoJson($CM_MessageRespone));
		return;
	}
	$CDAO_User->addUser($User);
}else {
	$CM_MessageRespone=new CM_MessageRespone("1","Sai username password hệ thống","Lỗi hệ thống");
	echo json_encode($CJSON_MessageRespone->converMessageResponetoJson($CM_MessageRespone));
}
?>