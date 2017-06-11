<?php
 
 if($_SERVER['REQUEST_METHOD']=='POST'){
	 if(isset($_FILES['myFile'])){
 $file_name = $_FILES['myFile']['name'];
 $file_size = $_FILES['myFile']['size'];
 $file_type = $_FILES['myFile']['type'];
 $temp_name = $_FILES['myFile']['tmp_name'];
 echo $temp_name;
 
 $location = "http://huuich.com.vn/developerapi/api/video/upload/";
 
 move_uploaded_file($temp_name, $location."hoangtutrongmo.mp4");
 echo "http://huuich.com.vn/developerapi/api/video/upload/".$file_name;
 }else{
 echo "Error";
 }
 }else echo "Exception";