<?php
ob_start();
session_start();
require_once('../class/DAO.php');
require_once('../class/CM_Material.php');
require_once('../class/CDAO_Material.php');
$page_title="Quản lý nguyên vật liệu nấu ăn";
include('includes/ql_header.php');
$DAO = new DAO();
$CDAO_Material = new CDAO_Material($DAO);
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
					$dataMaterial = $CDAO_Material->getAllMaterial();
					// Year							
					echo "<fieldset>";
					echo "<legend>Danh sách nguyên vật liệu nấu ăn</legend>";
					echo "<a class='ladd' href='add_material.php' title='Thêm nguyên vật liệu nấu ăn '>Add material </a>";
					echo '<form id="multi-delete" name="multi-delete" action="';
					echo htmlentities($_SERVER['PHP_SELF']);
					echo '" method="post">';
					echo '<table border="0" cellpadding="0" cellspacing="0" class="list_sach">';
					echo '<tr class="trshow">';
					echo '<th>STT</th>';
					echo '<th>Tên</th>';
					echo '<th>Cách chọn</th>';
					echo '<th>Màu sắc</th>';
					echo '<th>Chất dinh dưỡng</th>';
					echo '</tr>';
					for($i=0;$i<count($dataMaterial);$i++){
						if($i%2==0){
							echo '<tr class="trshow2">';
						}
						else{
							echo '<tr>';
						}
						 echo '<td>'.($i+1).'</td>';
						 echo '<td>'.$dataMaterial[$i]->GetName().'</td>';
						 echo '<td>'.$dataMaterial[$i]->GetSelection().'</td>';
						 echo '<td>'.$dataMaterial[$i]->GetColor().'</td>';
						 echo '<td>'.$dataMaterial[$i]->GetNutrients().'</td>';
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