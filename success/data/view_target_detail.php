<?php
ob_start();
session_start();
require_once('../class/DAO.php');
require_once('../class/CM_Target.php');
require_once('../class/CM_Config.php');
require_once('../class/CDAO_Target.php');
require_once('../class/CDAO_Config.php');
require_once('../class/CM_MessageRespone.php');
require_once('../class/CJSON_MessageRespone.php');
$page_title="Chi tiết mục tiêu bản thân";
include('includes/ql_header.php');
$DAO = new DAO();
$CDAO_Target = new CDAO_Target($DAO);
$CDAO_Config = new CDAO_Config($DAO);
$CM_Config = $CDAO_Config->getConfig();
$viewDay = "Thứ ".$CM_Config->Getday();

if($CM_Config->Getday() == 8){
	$viewDay = "Chủ nhật";
}

if(isset($_GET['doing']) && $_GET['doing'] !=''){
	$CM_Target = $CDAO_Target->getTargetById($_GET['doing']);
	while($CM_Target->GetParentId()!=0){
		$CDAO_Target->toDoing($CM_Target->getParentId());
		$parentId = $CM_Target->getParentId();
		$CM_Target = $CDAO_Target->getTargetById($parentId);
	}
	$CDAO_Target->toDoing($_GET['doing']);
	if(!headers_sent()){
        header("Location:view_target.php");
    }
}
if(isset($_GET['pending']) && $_GET['pending'] !=''){
	$CDAO_Target->toPending($_GET['pending']);
	if(!headers_sent()){
        header("Location:view_target.php");
    }
}

if(isset($_GET['finish']) && $_GET['finish'] !=''){
	$CDAO_Target->toFinish($_GET['finish']);
	if(!headers_sent()){
        header("Location:view_target.php");
    }
}
?>      
        <div id="center"> 
			<?php 
				include("includes/menu.php");
			?>
            <div id="right">
				<ul class="tree">
					<li>Animals
						<ul>
							<li>Birds</li>
							<li>Mammals
								<ul>
									<li>Elephant</li>
									<li>Mouse</li>
								</ul>
							</li>
							<li>Reptiles</li>
						</ul>
					</li>
					<li>Plants
						<ul>
							<li>Flowers
								<ul>
									<li>Rose</li>
									<li>Tulip</li>
								</ul>
							</li>
							<li>Trees</li>
						</ul>
					</li>
				</ul>
            </div><!-- end #right -->
        </div><!-- end #center -->
    </div><!--end #wrap-->
</body>
</html>
<?php ob_end_flush(); ?>