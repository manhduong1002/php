<?php
ob_start();
session_start();
require_once('../class/DAO.php');
require_once('../class/CM_Target.php');
require_once('../class/CM_Config.php');
require_once('../class/CDAO_Target.php');
require_once('../class/CDAO_Config.php');
$page_title="Mục tiêu bản thân";
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
                <?php
                    if(isset($_SESSION['mess'])){
                        echo $_SESSION['mess'];
                        unset($_SESSION['mess']);
                    }
                ?>
                <?php
					$dataTarget = $CDAO_Target->getTargetByLevel(0,$CM_Config->Getyear());
					// Year							
					echo "<fieldset>";
					echo "<legend>Năm ".$CM_Config->Getyear()."</legend>";
					echo '<form id="multi-delete" name="multi-delete" action="';
					echo htmlentities($_SERVER['PHP_SELF']);
					echo '" method="post">';
					echo '<table border="0" cellpadding="0" cellspacing="0" class="list_sach">';
					echo '<tr class="trshow">';
					echo '<th>Trạng thái</th>';
					echo '<th>Tên</th>';
					echo '<th>Ngày bắt đầu</th>';
					echo '<th>Ngày hết hạn</th>';                                
					echo '</tr>';
					for($i=0;$i<count($dataTarget);$i++){
						if($i%2==0){
							echo '<tr class="trshow2">';
						}
						else{
							echo '<tr>';
						}
						if($dataTarget[$i]->isNew()){
							echo '<td><img src="image/icon_new.png" title="New" /></td>';
						}
						if($dataTarget[$i]->isDoing()){
							echo '<td><img src="image/icon_doing.jpg" title="Doing" /></td>';
						}
						if($dataTarget[$i]->isPending()){
							echo '<td><img src="image/icon_pending.jpg" title="Pending"/></td>';
						}
						if($dataTarget[$i]->isFinish()){
							echo '<td><img src="image/icon_finish.jpg" title="Finish"/></td>';
						}
						 echo '<td>'.$dataTarget[$i]->GetName().'</td>'; 
						 echo '<td>'.$dataTarget[$i]->GetstartDateHours().'_'.$dataTarget[$i]->GetstartDateDay().'</td>';
						 echo '<td>'.$dataTarget[$i]->GetexpiryDateHours().'_'.$dataTarget[$i]->GetexpiryDateDay().'</td>'; 
						 echo '</tr>';
					}
					echo '</table>';
					echo '</form>';
					echo "</fieldset>";                          
                ?>
				
				<?php
					$dataTarget = $CDAO_Target->getTargetByLevel(1,$CM_Config->Getprecious());
					// Year							
					echo "<fieldset>";
					echo "<legend>Quý ".$CM_Config->Getprecious()."</legend>";
					echo '<form id="multi-delete" name="multi-delete" action="';
					echo htmlentities($_SERVER['PHP_SELF']);
					echo '" method="post">';
					echo '<table border="0" cellpadding="0" cellspacing="0" class="list_sach">';
					echo '<tr class="trshow">';
					echo '<th>Trạng thái</th>';
					echo '<th>Tên</th>';
					echo '<th>Ngày bắt đầu</th>';
					echo '<th>Ngày hết hạn</th>';                                
					echo '</tr>';
					for($i=0;$i<count($dataTarget);$i++){
						if($i%2==0){
							echo '<tr class="trshow2">';
						}
						else{
							echo '<tr>';
						}
						
						if($dataTarget[$i]->isNew()){
							echo '<td><img src="image/icon_new.png" title="New" /></td>';
						}
						if($dataTarget[$i]->isDoing()){
							echo '<td><img src="image/icon_doing.jpg" title="Doing" /></td>';
						}
						if($dataTarget[$i]->isPending()){
							echo '<td><img src="image/icon_pending.jpg" title="Pending"/></td>';
						}
						if($dataTarget[$i]->isFinish()){
							echo '<td><img src="image/icon_finish.jpg" title="Finish"/></td>';
						}
						 echo '<td>'.$dataTarget[$i]->GetName().'</td>'; 
						 echo '<td>'.$dataTarget[$i]->GetstartDateHours().'_'.$dataTarget[$i]->GetstartDateDay().'</td>';
						 echo '<td>'.$dataTarget[$i]->GetexpiryDateHours().'_'.$dataTarget[$i]->GetexpiryDateDay().'</td>'; 
						 echo '</tr>';
					}
					echo '</table>';
					echo '</form>';
					echo "</fieldset>";                          
                ?>
				
				<?php
					$dataTarget = $CDAO_Target->getTargetByLevel(2,$CM_Config->Getmonth());
					// Year							
					echo "<fieldset>";
					echo "<legend>Tháng ".$CM_Config->Getmonth()."</legend>";
					echo '<form id="multi-delete" name="multi-delete" action="';
					echo htmlentities($_SERVER['PHP_SELF']);
					echo '" method="post">';
					echo '<table border="0" cellpadding="0" cellspacing="0" class="list_sach">';
					echo '<tr class="trshow">';
					echo '<th>Trạng thái</th>';
					echo '<th>Tên</th>';
					echo '<th>Ngày bắt đầu</th>';
					echo '<th>Ngày hết hạn</th>';                                
					echo '</tr>';
					for($i=0;$i<count($dataTarget);$i++){
						if($i%2==0){
							echo '<tr class="trshow2">';
						}
						else{
							echo '<tr>';
						}
						if($dataTarget[$i]->isNew()){
							echo '<td><img src="image/icon_new.png" title="New" /></td>';
						}
						if($dataTarget[$i]->isDoing()){
							echo '<td><img src="image/icon_doing.jpg" title="Doing" /></td>';
						}
						if($dataTarget[$i]->isPending()){
							echo '<td><img src="image/icon_pending.jpg" title="Pending"/></td>';
						}
						if($dataTarget[$i]->isFinish()){
							echo '<td><img src="image/icon_finish.jpg" title="Finish"/></td>';
						}
						 echo '<td>'.$dataTarget[$i]->GetName().'</td>'; 
						 echo '<td>'.$dataTarget[$i]->GetstartDateHours().'_'.$dataTarget[$i]->GetstartDateDay().'</td>';
						 echo '<td>'.$dataTarget[$i]->GetexpiryDateHours().'_'.$dataTarget[$i]->GetexpiryDateDay().'</td>'; 
						 echo '</tr>';
					}
					echo '</table>';
					echo '</form>';
					echo "</fieldset>";                          
                ?>
				
				<?php
					$dataTarget = $CDAO_Target->getTargetByLevel(3,$CM_Config->Getweek());
					// Year							
					echo "<fieldset>";
					echo "<legend>Tuần ".$CM_Config->Getweek()."</legend>";
					echo '<form id="multi-delete" name="multi-delete" action="';
					echo htmlentities($_SERVER['PHP_SELF']);
					echo '" method="post">';
					echo '<table border="0" cellpadding="0" cellspacing="0" class="list_sach">';
					echo '<tr class="trshow">';
					echo '<th>Trạng thái</th>';
					echo '<th>Tên</th>';
					echo '<th>Ngày bắt đầu</th>';
					echo '<th>Ngày hết hạn</th>';                                
					echo '</tr>';
					for($i=0;$i<count($dataTarget);$i++){
						if($i%2==0){
							echo '<tr class="trshow2">';
						}
						else{
							echo '<tr>';
						}
						if($dataTarget[$i]->isNew()){
							echo '<td><img src="image/icon_new.png" title="New" /></td>';
						}
						if($dataTarget[$i]->isDoing()){
							echo '<td><img src="image/icon_doing.jpg" title="Doing" /></td>';
						}
						if($dataTarget[$i]->isPending()){
							echo '<td><img src="image/icon_pending.jpg" title="Pending"/></td>';
						}
						if($dataTarget[$i]->isFinish()){
							echo '<td><img src="image/icon_finish.jpg" title="Finish"/></td>';
						}
						 echo '<td>'.$dataTarget[$i]->GetName().'</td>'; 
						 echo '<td>'.$dataTarget[$i]->GetstartDateHours().'_'.$dataTarget[$i]->GetstartDateDay().'</td>';
						 echo '<td>'.$dataTarget[$i]->GetexpiryDateHours().'_'.$dataTarget[$i]->GetexpiryDateDay().'</td>'; 
						 echo '</tr>';
					}
					echo '</table>';
					echo '</form>';
					echo "</fieldset>";                          
                ?>
				
				<?php
					$dataTarget = $CDAO_Target->getTargetByLevel(4,$CM_Config->Getday());
					// Year							
					echo "<fieldset>";
					echo "<legend>".$viewDay."</legend>";
					echo "<a class='ladd' href='next_day.php' title='Đến ngày tiếp theo '>Next Day </a>";
					echo '<form id="multi-delete" name="multi-delete" action="';
					echo htmlentities($_SERVER['PHP_SELF']);
					echo '" method="post">';
					echo '<table border="0" cellpadding="0" cellspacing="0" class="list_sach">';
					echo '<tr class="trshow">';
					echo '<th>Trạng thái</th>';
					echo '<th>Tên</th>';
					echo '<th>Ngày bắt đầu</th>';
					echo '<th>Ngày hết hạn</th>';                                
					echo '<th>Chuyển đổi</th>';                                
					echo '</tr>';
					$demi = 0;
					for($i=0;$i<count($dataTarget);$i++){
						if($i%2==0){
							echo '<tr class="trshow2">';
						}
						else{
							echo '<tr>';
						}
						if($dataTarget[$i]->isNew()){
							echo '<td><img src="image/icon_new.png" title="New" /></td>';
						}
						if($dataTarget[$i]->isDoing()){
							echo '<td><img src="image/icon_doing.jpg" title="Doing" /></td>';
						}
						if($dataTarget[$i]->isPending()){
							echo '<td><img src="image/icon_pending.jpg" title="Pending"/></td>';
						}
						if($dataTarget[$i]->isFinish()){
							echo '<td><img src="image/icon_finish.jpg" title="Finish"/></td>';
						}
						 echo '<td>'.$dataTarget[$i]->GetName().'</td>'; 
						 echo '<td>'.$dataTarget[$i]->GetstartDateHours().'_'.$dataTarget[$i]->GetstartDateDay().'</td>';
						 echo '<td>'.$dataTarget[$i]->GetexpiryDateHours().'_'.$dataTarget[$i]->GetexpiryDateDay().'</td>';
						if($dataTarget[$i]->isNew() || $dataTarget[$i]->isPending()){
							echo '<td><a title="Doing" href="view_target.php?doing='.$dataTarget[$i]->GetId().'"><img src="image/icon_doing.jpg" /></a></td>'; 
						}
						if($dataTarget[$i]->isDoing()){
							echo '<td><a title="Pending" href="view_target.php?pending='.$dataTarget[$i]->GetId().'"><img src="image/icon_pending.jpg" alt="Pending" /></a>
							<a title="Finish" href="view_target.php?finish='.$dataTarget[$i]->GetId().'"><img src="image/icon_finish.jpg" /></a></td>'; 
						}
						if($dataTarget[$i]->isFinish()){
							echo '<td><img src="image/icon_finish.jpg" title="Finish"/></td>';
						}
						 echo '</tr>';
					}
					echo '</table>';
					echo '</form>';
					echo "</fieldset>";                          
                ?>
            </div><!-- end #right -->
        </div><!-- end #center -->
    </div><!--end #wrap-->
</body>
</html>
<?php ob_end_flush(); ?>