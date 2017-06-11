<?php
session_start();
require_once('../class/DAO.php');
require_once('../class/CM_Target.php');
require_once('../class/CM_Config.php');
require_once('../class/CDAO_Target.php');
require_once('../class/CDAO_Config.php');
require_once('../class/CM_MessageRespone.php');
require_once('../class/CJSON_MessageRespone.php');
if(isset($_POST['cancel'])){
    if(!headers_sent()){
        header("Location:manager_target.php");
    }
}

$page_title="Thêm mục tiêu";
$DAO = new DAO();
$CDAO_Target = new CDAO_Target($DAO);
$CDAO_Config = new CDAO_Config($DAO);
$CM_Config = $CDAO_Config->getConfig();
include('includes/ql_header.php');
$level = 0;

if(isset($_GET['level'])){
	$level = $_GET['level'];
}

$startThisconfig="Năm";
$thisconfig = 0;
if($level-1 == 0){
	$thisconfig = $CM_Config->Getyear();
	$startThisconfig = "Quý";
}

if($level-1 == 1){
	$thisconfig = $CM_Config->Getprecious();
	$startThisconfig = "Tháng";
}

if($level-1 == 2){
	$thisconfig = $CM_Config->Getmonth();
	$startThisconfig = "Tuần";
}

if($level-1 == 3){
	$thisconfig = $CM_Config->Getweek();
	$startThisconfig = "Thứ";
}

if($level > 0){
	$dataTarget = $CDAO_Target->getTarget($level-1);
}
?>      
        <div id="center">
            <?php 
            include("includes/menu.php");
            ?>
            <div id="right">
                <div id="sua_tt">
                    <?php
                        if(isset($_POST['add'])){
							$parentId = 0;
							if(isset($_POST['parentId'])){
								$parentId = $_POST['parentId'];
							}
							$CM_Target = new CM_Target(0,$level,$_POST['expiryDateHours'],$_POST['expiryDateDay'],$_POST['startDateHours'],$_POST['startDateDay'],$_POST['title'],$_POST['name'],$parentId,0,$_POST['thisconfig']);
                            $CDAO_Target->addTarget($CM_Target);
							$mess = "<p class='mess-success'>Thêm mới mục tiêu thành công</p><a class='lmess' href='manager_target.php' title='trở lại trang quản lý mục tiêu'>Quay lại trang quản lý</a><a class='lmess' href='add_target.php' title='thêm mới thông tin mục tiêu'>Tiếp tục</a>";
						}
                        if(!isset($mess) || !empty($miss) || isset($mess_ip) || isset($messip)){
                    ?>
                    <h2>Thêm mới thông tin về mục tiêu :</h2>
                    <form id="suatl" action="" method="post">
                        <p>
                            <label for="expiryDateDay">Ngày hết hạn (17/05/2017) :</label>
                            <input type="text"  class="validip" id="expiryDateDay" name="expiryDateDay" />
                        </p> 
						
						<p>
                            <label for="expiryDateHours">Giờ hết hạn (18:30:00) :</label>
                            <input type="text"  class="validip" id="expiryDateHours" name="expiryDateHours" />
                        </p>   
						
						<p>
                            <label for="startDateDay">Ngày bắt đầu (17/05/2017) :</label>
                            <input type="text"  class="validip" id="startDateDay" name="startDateDay" />
                        </p>
						
						<p>
                            <label for="startDateHours">Giờ bắt đầu (18:30:00) :</label>
                            <input type="text"  class="validip" id="startDateHours" name="startDateHours" />
                        </p>
                        <?php if($level>0){?>
						<p>

                            <label for="parentId">Tên mục tiêu cha: </label>

                            <select id="parentId" class="valid" name="parentId">

                                <?php
									for($i=0;$i<count($dataTarget);$i++){
										 echo "<option value='".$dataTarget[$i]->GetId()."' >".$dataTarget[$i]->GetTitle()." - ".$dataTarget[$i]->GetName()."</option>";
									}
                                ?>

                            </select>
						</p>
						<?php }?>
						<p>
                            <label for="thisconfig"><?php echo $startThisconfig;?> :</label>
                            <input type="text"  class="validip" id="thisconfig" name="thisconfig" />
                        </p>
						
						<p>
                            <label for="title">Tiêu đề mục tiêu (Năm 2017 Quý II) :</label>
                            <input type="text"  class="validip" id="title" name="title" />
                        </p>
                        
						<p>
                            <label for="name">Tên mục tiêu :</label>
                            <input type="text"  class="validip" id="name" name="name" />
                        </p>
                        
                        <p class="button">
                            <input type="submit" class="btn btn-primary" name="add" id="add" value="Thêm mới" />
                            <input class="btn but" type="submit" name="cancel" id="cancel" value="Hủy" />
                        </p>
                    </form>
                    <?php }if(isset($mess)){echo $mess;} ?>
                </div>
            </div><!-- end #right -->
        </div><!-- end #center -->
    </div><!--end #wrap-->
</body>
</html>