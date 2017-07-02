<?php
ob_start();
session_start();
require_once('../class/DAO.php');
require_once('../class/CM_Target.php');
require_once('../class/CDAO_Target.php');
$page_title="Chi tiết mục tiêu bản thân";
include('includes/ql_header.php');
$DAO = new DAO();
$CDAO_Target = new CDAO_Target($DAO);
function getNameTile($data){
	$resStatus = '(New) ';
	if($data->isNew()){
		$resStatus = '(New) ';
	}
	if($data->isDoing()){
		$resStatus = '(Doing) ';
	}
	if($data->isPending()){
		$resStatus = '(Pending) ';
	}
	if($data->isFinish()){
		$resStatus = '(Finish) ';
	}
	return $resStatus.$data->GetTitle().' '.$data->GetName();
}
?>      
        <div id="center"> 
			<?php 
				include("includes/menu.php");
			?>
            <div id="right">
				<ul class="tree">
					<?php 
						$dataTarget = $CDAO_Target->getAllTargetByLevel(0);
						for($i = 0 ; $i < count($dataTarget); $i++){
							echo '<li>'.getNameTile($dataTarget[$i]);
							$dataTargetLevel1 = $CDAO_Target->getAllTargetByParentId($dataTarget[$i]->GetId());
							echo '<ul>';
							for($i1 = 0; $i1 < count($dataTargetLevel1); $i1++){
								echo '<li>'.getNameTile($dataTargetLevel1[$i1]);
								echo '<ul>';
								$dataTargetLevel2 = $CDAO_Target->getAllTargetByParentId($dataTargetLevel1[$i1]->GetId());
								for($i2 = 0; $i2 < count($dataTargetLevel2); $i2++){
									echo '<li>'.getNameTile($dataTargetLevel2[$i2]);
									echo '<ul>';
									$dataTargetLevel3 = $CDAO_Target->getAllTargetByParentId($dataTargetLevel2[$i2]->GetId());
									for($i3 = 0 ;$i3 < count($dataTargetLevel3); $i3++){
										echo '<li>'.getNameTile($dataTargetLevel3[$i3]);
										$dataTargetLevel4 = $CDAO_Target->getAllTargetByParentId($dataTargetLevel3[$i3]->GetId());
										echo '<ul>';
										for($i4 = 0; $i4 < count($dataTargetLevel4); $i4++){
											echo '<li>'.$dataTargetLevel4[$i4]->GetstartDateDay().' - '.getNameTile($dataTargetLevel4[$i4]);
											echo '</li>';
										}
										echo '</ul>';
										echo '</li>';
									}	
									echo '</ul>';
									echo '</li>';
								}
								echo '</ul>';
								echo '</li>';
							}
							echo '</ul>';
							echo '</li>';
						}
					?>
				</ul>
            </div><!-- end #right -->
        </div><!-- end #center -->
    </div><!--end #wrap-->
</body>
</html>
<?php ob_end_flush(); ?>