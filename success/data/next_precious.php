<?php
session_start();
require_once('../class/DAO.php');
require_once('../class/CM_Config.php');
require_once('../class/CM_Target.php');
require_once('../class/CDAO_Config.php');
require_once('../class/CDAO_Target.php');
$page_title="Chọn quý tiếp theo";
$DAO = new DAO();
$CDAO_Config = new CDAO_Config($DAO);
$CDAO_Target = new CDAO_Target($DAO);

if(isset($_POST['no'])){
	$CDAO_Config->nextPrecious();
    if(!headers_sent()){
        header("Location:view_target.php");
    }
}

if(isset($_POST['yes'])){
	$CDAO_Config->nextPrecious();
    if(!headers_sent()){
        header("Location:view_target.php");
    }
}
include('includes/ql_header.php');
?>      
        <div id="center">
            <?php 
            include("includes/menu.php");
            ?>
            <div id="right">
                <div id="sua_tt">
                    <h2>Có chọn đến năm tiếp theo không ?</h2>
                    <form id="suatl" action="" method="post">						
                        <p class="button">
                            <input type="submit" class="btn btn-primary" name="yes" id="yes" value="Đồng ý" />
                            <input class="btn but" type="submit" name="no" id="no" value="Không" />
                        </p>
                    </form>
                    <?php if(isset($mess)){echo $mess;} ?>
                </div>
            </div><!-- end #right -->
        </div><!-- end #center -->
    </div><!--end #wrap-->
</body>
</html>