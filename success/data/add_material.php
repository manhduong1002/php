<?php
session_start();
require_once('../class/DAO.php');
require_once('../class/CM_Material.php');
require_once('../class/CDAO_Material.php');

if(isset($_POST['cancel'])){
    if(!headers_sent()){
        header("Location:manager_material.php");
    }
}

$page_title="Thêm nguyên vật liệu nấu ăn";
$DAO = new DAO();
$CDAO_Material = new CDAO_Material($DAO);
include('includes/ql_header.php');
?>      
        <div id="center">
            <?php 
            include("includes/menu.php");
            ?>
            <div id="right">
                <div id="sua_tt">
                    <?php
                        if(isset($_POST['add'])){
							$CM_Material = new CM_Material(0,$_POST['name'],$_POST['selection'],$_POST['color'],$_POST['nutrients']);
                            $CDAO_Material->addMaterial($CM_Material);
							$mess = "<p class='mess-success'>Thêm mới nguyên vật liệu nấu ăn thành công</p><a class='lmess' href='manager_material.php' title='trở lại trang quản lý nguyên vật liệu'>Quay lại trang quản lý</a><a class='lmess' href='add_material.php' title='thêm mới thông tin nguyên vật liệu nấu ăn'>Tiếp tục</a>";
						}
                        if(!isset($mess) || !empty($miss) || isset($mess_ip) || isset($messip)){
                    ?>
                    <h2>Thêm mới thông tin về nguyên vật liệu nấu ăn :</h2>
                    <form id="suatl" action="" method="post">
                        <p>
                            <label for="name">Tên :</label>
                            <input type="text"  class="validip" id="name" name="name" />
                        </p> 
						
						<p>
                            <label for="selection">Cách chọn :</label>
                            <input type="text"  class="validip" id="selection" name="selection" />
                        </p>   
						
						<p>
                            <label for="color">Màu sắc :</label>
                            <input type="text"  class="validip" id="color" name="color" />
                        </p>
						
						<p>
                            <label for="nutrients">Chất dinh dưỡng :</label>
                            <input type="text"  class="validip" id="nutrients" name="nutrients" />
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