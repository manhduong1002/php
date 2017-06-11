<?php
session_start();
require_once('../class/DAO.php');
require_once('../class/CM_food.php');
require_once('../class/CDAO_food.php');

if(isset($_POST['cancel'])){
    if(!headers_sent()){
        header("Location:manager_food.php");
    }
}

$page_title="Thêm nguyên món ăn";
$DAO = new DAO();
$CDAO_food = new CDAO_food($DAO);
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
							$CM_food = new CM_food(0,$_POST['name'],$_POST['nature'],$_POST['image'],$_POST['start'],$_POST['doing'],'');
                            $CDAO_food->addFood($CM_food);
							$mess = "<p class='mess-success'>Thêm mới món ăn thành công</p><a class='lmess' href='manager_food.php' title='trở lại trang quản lý món ăn'>Quay lại trang quản lý</a><a class='lmess' href='add_food.php' title='thêm mới thông tin món ăn'>Tiếp tục</a>";
						}
                        if(!isset($mess) || !empty($miss) || isset($mess_ip) || isset($messip)){
                    ?>
                    <h2>Thêm mới thông tin về món ăn :</h2>
                    <form id="suatl" action="" method="post">
                        <p>
                            <label for="name">Tên :</label>
                            <input type="text"  class="validip" id="name" name="name" />
                        </p> 
						
						<p>
                            <label for="nature">Tính chất :</label>
                            <input type="text"  class="validip" id="nature" name="nature" />
                        </p>   
						
						<p>
                            <label for="image">Ảnh :</label>
                            <input type="text"  class="validip" id="image" name="image" />
                        </p>
						
						<p>
                            <label for="start">Chuẩn bị :</label>
							<textarea rows="10" cols="69" id="start" name="start" >
                            </textarea>
                        </p>
						
						<p>
                            <label for="doing">Cách chế biến :</label>
							<textarea rows="10" cols="69" id="doing" name="doing" >
                            </textarea>
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