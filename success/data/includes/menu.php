<?php
$current_page = basename($_SERVER['SCRIPT_NAME']);
?>
<div id="left">
    <fieldset>
        <legend>Chức năng</legend>
		<ul id="menu">
                <li><a <?php if($current_page=="manager_target.php" ||$current_page=="manager_material.php" ||$current_page=="manager_food.php" ){echo "class='showid'";}else { ?> class="sub" tabindex="1" <?php }?>><img src="includes/images/t3.png" />Thiết lập</a><img src="includes/images/up.gif" alt="" />
                    <ul>
                        <li><a href="manager_target.php" <?php if($current_page=="manager_target.php") echo( "class='showactive'");?>><img src="includes/images/empty.gif" />Mục tiêu</a></li>
                        <li><a href="manager_material.php" <?php if($current_page=="manager_material.php") echo( "class='showactive'");?>><img src="includes/images/empty.gif" />Nguyên liệu</a></li>
                        <li><a href="manager_food.php" <?php if($current_page=="manager_food.php") echo( "class='showactive'");?> ><img src="includes/images/empty.gif" />Món ăn</a></li>
                    </ul>
                </li>
                <li><a <?php if($current_page=="view_target.php" || $current_page=="view_target_detail.php"){echo "class='showid'";}else { ?> class="sub" tabindex="1" <?php }?>><img src="includes/images/t1.png" />Hiển thị</a><img src="includes/images/up.gif" alt="" />
                    <ul>
						<li><a href="view_target.php" <?php if($current_page=="view_target.php") echo( "class='showactive'");?> ><img src="includes/images/empty.gif" />Mục tiêu</a></li>
						<li><a href="view_target_detail.php" <?php if($current_page=="view_target_detail.php") echo( "class='showactive'");?> ><img src="includes/images/empty.gif" />Chi tiết - Mục tiêu</a></li>
                    </ul>
                </li>
            </ul>
    </fieldset>
</div>