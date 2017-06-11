<?php
ob_start();
session_start();
require_once('../class/DAO.php');
require_once('../class/CM_Food.php');
require_once('../class/CDAO_Food.php');
$page_title="Quản lý món ăn";
include('includes/ql_header.php');
$DAO = new DAO();
$CDAO_Food = new CDAO_Food($DAO);
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
					$dataFood = $CDAO_Food->getAllFood();
					// Year							
					echo "<fieldset>";
					echo "<legend>Danh sách món ăn</legend>";
					echo "<a class='ladd' href='add_food.php' title='Thêm món ăn '>Add Food </a>";
					echo '<form id="multi-delete" name="multi-delete" action="';
					echo htmlentities($_SERVER['PHP_SELF']);
					echo '" method="post">';
					echo '<table border="0" cellpadding="0" cellspacing="0" class="list_sach">';
					echo '<tr class="trshow">';
					echo '<th>STT</th>';
					echo '<th>Tên</th>';
					echo '<th>Tính chất</th>';
					echo '<th>Nguyên vật liệu</th>';
					echo '</tr>';
					for($i=0;$i<count($dataFood);$i++){
						if($i%2==0){
							echo '<tr class="trshow2">';
						}
						else{
							echo '<tr>';
						}
						 echo '<td>'.($i+1).'</td>';
						 echo '<td>'.$dataFood[$i]->GetName().'</td>';
						 echo '<td>'.$dataFood[$i]->GetNature().'</td>';
						 echo '<td>'.$dataFood[$i]->GetMaterials().'</td>';
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