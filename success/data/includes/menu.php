<?php
$current_page = basename($_SERVER['SCRIPT_NAME']);
?>
<div id="left">
    <fieldset>
        <legend>Chức năng</legend>
		<ul id="menu">
                <li><a <?php if($current_page=="manager_target.php" ||$current_page=="manager_material.php" ||$current_page=="manager_food.php" ||$current_page=="ql_nxb.php" || $current_page=="ql_hinh_anh.php" || $current_page=="ql_doi_tuong.php" || $current_page=="ql_ngon_ngu.php"){echo "class='showid'";}else { ?> class="sub" tabindex="1" <?php }?>><img src="includes/images/t3.png" />Thiết lập</a><img src="includes/images/up.gif" alt="" />
                    <ul>
                        <li><a href="manager_target.php" <?php if($current_page=="manager_target.php") echo( "class='showactive'");?>><img src="includes/images/empty.gif" />Mục tiêu</a></li>
                        <li><a href="manager_material.php" <?php if($current_page=="manager_material.php") echo( "class='showactive'");?>><img src="includes/images/empty.gif" />Nguyên liệu</a></li>
                        <li><a href="manager_food.php" <?php if($current_page=="manager_food.php") echo( "class='showactive'");?> ><img src="includes/images/empty.gif" />Món ăn</a></li>
                        <li><a href="ql_nxb.php"<?php if($current_page=="ql_nxb.php") echo( "class='showactive'");?> ><img src="includes/images/empty.gif" />Nhà xuất bản</a></li>
                        <li><a href="ql_hinh_anh.php" <?php if($current_page=="ql_hinh_anh.php") echo( "class='showactive'");?> ><img src="includes/images/empty.gif" />Hình ảnh hiển thị</a></li>
						<li><a href="ql_doi_tuong.php" <?php if($current_page=="ql_doi_tuong.php") echo( "class='showactive'");?> ><img src="includes/images/empty.gif" />Đối tượng</a></li>
						<li><a href="ql_ngon_ngu.php" <?php if($current_page=="ql_ngon_ngu.php") echo( "class='showactive'");?> ><img src="includes/images/empty.gif" />Ngôn ngữ</a></li>
                    </ul>
                </li>
                <li><a <?php if($current_page=="view_target.php" ||$current_page=="tk_theloai.php" ||$current_page=="tk_tacgia.php" ||$current_page=="tk_nxb.php" || $current_page=="tk_hinh_anh.php" || $current_page=="tk_doi_tuong.php" || $current_page=="tk_nn.php"){echo "class='showid'";}else { ?> class="sub" tabindex="1" <?php }?>><img src="includes/images/t1.png" />Hiển thị</a><img src="includes/images/up.gif" alt="" />
                    <ul>
					<li><a href="view_target.php" <?php if($current_page=="view_target.php") echo( "class='showactive'");?> ><img src="includes/images/empty.gif" />Mục tiêu</a></li>
                    <li><a href="tk_theloai.php" <?php if($current_page=="tk_theloai.php") echo( "class='showactive'");?> ><img src="includes/images/empty.gif" />Thể loại</a></li>
                    <li><a href="tk_tacgia.php" <?php if($current_page=="tk_tacgia.php") echo( "class='showactive'");?>><img src="includes/images/empty.gif" />Tác giả</a></li>
                    <li><a href="tk_nxb.php" <?php if($current_page=="tk_nxb.php") echo( "class='showactive'");?>><img src="includes/images/empty.gif" />Nhà xuất bản</a></li> 
					<li><a href="tk_hinh_anh.php" <?php if($current_page=="tk_hinh_anh.php") echo( "class='showactive'");?>><img src="includes/images/empty.gif" />Hình ảnh hiển thị</a></li>
					<li><a href="tk_doi_tuong.php" <?php if($current_page=="tk_doi_tuong.php") echo( "class='showactive'");?>><img src="includes/images/empty.gif" />Đối tượng</a></li>
					<li><a href="tk_nn.php" <?php if($current_page=="tk_nn.php") echo( "class='showactive'");?>><img src="includes/images/empty.gif" />Ngôn ngữ</a></li>
                    </ul>
                </li>
                <li>
					<a  <?php if($current_page=="thong_ke_doanh_thu.php" ||$current_page=="thong_ke_da_muon.php" ||$current_page=="thong_ke_sach.php" ){echo "class='showid'";}else { ?> class="sub" tabindex="1" <?php }?>><img src="includes/images/t2.png" />Thống kê</a><img src="includes/images/up.gif" alt="" />
					<ul>
						<li><a href="thong_ke_doanh_thu.php" <?php if($current_page=="thong_ke_doanh_thu.php") echo( "class='showactive'");?>><img src="includes/images/empty.gif" />Doanh thu</a></li>
						<li><a href="thong_ke_da_muon.php" <?php if($current_page=="thong_ke_da_muon.php") echo( "class='showactive'");?>><img src="includes/images/empty.gif" />Sách đã mượn</a></li>
						<li><a href="thong_ke_sach.php" <?php if($current_page=="thong_ke_sach.php") echo( "class='showactive'");?>><img src="includes/images/empty.gif" />Sách</a></li>
					</ul>
				</li>
				<li>
					<a <?php if($current_page=="tr_sach.php" ||$current_page=="tr_theloai.php" ||$current_page=="tr_tacgia.php" ||$current_page=="tr_nxb.php" || $current_page=="tr_hinh_anh.php" || $current_page=="tr_doi_tuong.php" || $current_page=="tr_nn.php"){echo "class='showid'";}else { ?> class="sub" tabindex="1" <?php }?>><img src="includes/images/t2.png" />Thùng rác</a><img src="includes/images/up.gif" alt="" />
					<ul>
						<li><a href="tr_sach.php" <?php if($current_page=="tr_sach.php") echo( "class='showactive'");?> ><img src="includes/images/empty.gif" />Sách</a></li>
						<li><a href="tr_theloai.php" <?php if($current_page=="tr_theloai.php") echo( "class='showactive'");?>><img src="includes/images/empty.gif" />Thể loại</a></li>
						<li><a href="tr_tacgia.php" <?php if($current_page=="tr_tacgia.php") echo( "class='showactive'");?>><img src="includes/images/empty.gif" />Tác giả</a></li>
						<li><a href="tr_nxb.php" <?php if($current_page=="tr_nxb.php") echo( "class='showactive'");?>><img src="includes/images/empty.gif" />Nhà xuất bản</a></li> 
						<li><a href="tr_doi_tuong.php" <?php if($current_page=="tr_doi_tuong.php") echo( "class='showactive'");?>><img src="includes/images/empty.gif" />Đối tượng</a></li> 
						<li><a href="tr_nn.php" <?php if($current_page=="tr_nn.php") echo( "class='showactive'");?>><img src="includes/images/empty.gif" />Ngôn ngữ</a></li> 
					</ul>
				</li>
				<li>
					<a <?php if($current_page=="thue_muon_sach.php" ||$current_page=="tk_thue_muon_sach.php" ){echo "class='showid'";}else { ?> class="sub" tabindex="1" <?php }?>><img src="includes/images/t3.png" />Chon mượn sách</a><img src="includes/images/up.gif" alt="" />
					<ul>
						<li><a href="thue_muon_sach.php" <?php if($current_page=="thue_muon_sach.php") echo( "class='showactive'");?>><img src="includes/images/empty.gif" />Theo độc giả</a></li>
						<li><a href="tk_thue_muon_sach.php" <?php if($current_page=="tk_thue_muon_sach.php") echo( "class='showactive'");?>><img src="includes/images/empty.gif" />Theo sách</a></li>
					</ul>
				</li>
				<li><a href="tra_sach.php"><img src="includes/images/t1.png" />Trả sách</a></li>
				<li><a href="cho_muon_sach.php"><img src="includes/images/t2.png" />Chấp nhận đặt mượn</a></li>
				<li><a href="ql_the_tv.php"><img src="includes/images/t3.png" />Quản lý thẻ thư viện</a></li>
				<li><a href="tk_the_tv.php"><img src="includes/images/t1.png" />Tìm kiếm thẻ thư viện</a></li>
            </ul>
    </fieldset>
</div>