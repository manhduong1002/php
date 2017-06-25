<?php
ob_start();
session_start();
require_once('../class/DAO.php');
require_once('../class/CM_Target.php');
require_once('../class/CDAO_Target.php');
require_once('../class/CM_MessageRespone.php');
require_once('../class/CJSON_MessageRespone.php');
$page_title="Quản lý mục tiêu bản thân";
include('includes/ql_header.php');
$DAO = new DAO();
$CDAO_Target = new CDAO_Target($DAO);
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
					$dataTarget = $CDAO_Target->getTarget(0);
					// Year							
					echo "<fieldset>";
					echo "<legend>Năm</legend>";
					echo "<a class='ladd' href='add_target.php' title='Thêm mục tiêu năm '>Add target year </a>";
					echo '<form id="multi-delete" name="multi-delete" action="';
					echo htmlentities($_SERVER['PHP_SELF']);
					echo '" method="post">';
					echo '<table border="0" cellpadding="0" cellspacing="0" class="list_sach">';
					echo '<tr class="trshow">';
					echo '<th>Trạng thái</th>';
					echo '<th>Tiêu đề</th>';
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

						 echo '<td>'.$dataTarget[$i]->GetTitle().'</td>';
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
					$dataTarget = $CDAO_Target->getTarget(1);
					// Year							
					echo "<fieldset>";
					echo "<legend>Quý </legend>";
					echo "<a class='ladd' href='add_target.php?level=1' title='Thêm mục tiêu quý '>Add target precious </a>";
					echo '<form id="multi-delete" name="multi-delete" action="';
					echo htmlentities($_SERVER['PHP_SELF']);
					echo '" method="post">';
					echo '<table border="0" cellpadding="0" cellspacing="0" class="list_sach">';
					echo '<tr class="trshow">';
					echo '<th>Trạng thái</th>';
					echo '<th>Tiêu đề</th>';
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

						 echo '<td>'.$dataTarget[$i]->GetTitle().'</td>';
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
					$dataTarget = $CDAO_Target->getTarget(2);
					// Year							
					echo "<fieldset>";
					echo "<legend>Tháng </legend>";
					echo "<a class='ladd' href='add_target.php?level=2' title='Thêm mục tiêu tháng '>Add target month </a>";
					echo '<form id="multi-delete" name="multi-delete" action="';
					echo htmlentities($_SERVER['PHP_SELF']);
					echo '" method="post">';
					echo '<table border="0" cellpadding="0" cellspacing="0" class="list_sach">';
					echo '<tr class="trshow">';
					echo '<th>Trạng thái</th>';
					echo '<th>Tiêu đề</th>';
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

						 echo '<td>'.$dataTarget[$i]->GetTitle().'</td>';
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
					$dataTarget = $CDAO_Target->getTarget(3);
					// Year							
					echo "<fieldset>";
					echo "<legend>Tuần </legend>";
					echo "<a class='ladd' href='add_target.php?level=3' title='Thêm mục tiêu tuần '>Add target week </a>";
					echo '<form id="multi-delete" name="multi-delete" action="';
					echo htmlentities($_SERVER['PHP_SELF']);
					echo '" method="post">';
					echo '<table border="0" cellpadding="0" cellspacing="0" class="list_sach">';
					echo '<tr class="trshow">';
					echo '<th>Trạng thái</th>';
					echo '<th>Tiêu đề</th>';
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

						 echo '<td>'.$dataTarget[$i]->GetTitle().'</td>';
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
					$dataTarget = $CDAO_Target->getTarget(4);
					// Year							
					echo "<fieldset>";
					echo "<legend>Thứ </legend>";
					echo "<a class='ladd' href='add_target.php?level=4' title='Thêm mục ngày '>Add target day </a>";
					echo '<form id="multi-delete" name="multi-delete" action="';
					echo htmlentities($_SERVER['PHP_SELF']);
					echo '" method="post">';
					echo '<table border="0" cellpadding="0" cellspacing="0" class="list_sach">';
					echo '<tr class="trshow">';
					echo '<th>Trạng thái</th>';
					echo '<th>Tiêu đề</th>';
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

						 echo '<td>'.$dataTarget[$i]->GetTitle().'</td>';
						 echo '<td>'.$dataTarget[$i]->GetName().'</td>'; 
						 echo '<td>'.$dataTarget[$i]->GetstartDateHours().'_'.$dataTarget[$i]->GetstartDateDay().'</td>';
						 echo '<td>'.$dataTarget[$i]->GetexpiryDateHours().'_'.$dataTarget[$i]->GetexpiryDateDay().'</td>'; 
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