<?php 
class CDAO_Hocsinh { 
	private $db;
	function __construct($db){
		$this->db = $db;
	}
	public function addHocsinh($NIEN_KHOA,$Hocsinh){
		if($this->checkAddHocsinh($NIEN_KHOA,$Hocsinh)==true){
			$sql_add="INSERT INTO `qlth_".$NIEN_KHOA."_hoc_sinh` (`MA_HS`,`HO_TEN_HS`,`TEN_THUONG_GOI`,`BI_DANH`,`NGAY_SINH`,`DAN_TOC`,`TON_GIAO`,`SUC_KHOE`,`GIOI_TINH`,`EMAIL`,`MA_BCS`,`DIEN_THOAI`,`QUOC_TICH`,`NGAY_VAO_TRUONG`,`CON_THUONG_BINH_LOAI`,`HOC_TRAI_TUYEN`,`CON_LIET_SY`,`GIA_DINH_CCVCM`,`GIA_DINH_KK`,`DIA_CHI_THUONG_TRU_DIA_CHI`,`DIA_CHI_THUONG_TRU_TINH`,`DIA_CHI_THUONG_TRU_HUYEN`,`DIA_CHI_THUONG_TRU_XA`,`QUE_QUAN_DIA_CHI`,`QUE_QUAN_TINH`,`QUE_QUAN_HUYEN`,`QUE_QUAN_XA`,`NOI_SINH_DIA_CHI`,`NOI_SINH_TINH`,`NOI_SINH_HUYEN`,`NOI_SINH_XA`,`CHA_TEN`,`CHA_NGHE_NGHIEP`,`CHA_DIA_CHI`,`CHA_NGAY_SINH`,`CHA_DANG_VIEN`,`CHA_MAT`,`ME_TEN`,`ME_NGHE_NGHIEP`,`ME_DIA_CHI`,`ME_NGAY_SINH`,`ME_DANG_VIEN`,`ME_MAT`,`LIEN_HE_TEN`,`LIEN_HE_DIA_CHI`,`LIEN_HE_SDT`,`LIEN_HE_MAIL`,`MA_LOP`,`DTBHK1`,`DTBHK2`,`DTBCN`,`HOC_LUC`,`HANH_KIEM`,`SO_NGAY_NGHI`,`DANH_HIEU_HS`,`DA_KET_CHUYEN`) VALUES ('".$Hocsinh->GetMA_HS()."','".$Hocsinh->GetHO_TEN_HS()."','".$Hocsinh->GetTEN_THUONG_GOI()."','".$Hocsinh->GetBI_DANH()."','".$Hocsinh->GetNGAY_SINH()."','".$Hocsinh->GetDAN_TOC()."','".$Hocsinh->GetTON_GIAO()."','".$Hocsinh->GetSUC_KHOE()."','".$Hocsinh->GetGIOI_TINH()."','".$Hocsinh->GetEMAIL()."','".$Hocsinh->GetMA_BCS()."','".$Hocsinh->GetDIEN_THOAI()."','".$Hocsinh->GetQUOC_TICH()."','".$Hocsinh->GetNGAY_VAO_TRUONG()."','".$Hocsinh->GetCON_THUONG_BINH_LOAI()."','".$Hocsinh->GetHOC_TRAI_TUYEN()."','".$Hocsinh->GetCON_LIET_SY()."','".$Hocsinh->GetGIA_DINH_CCVCM()."','".$Hocsinh->GetGIA_DINH_KK()."','".$Hocsinh->GetDIA_CHI_THUONG_TRU_DIA_CHI()."','".$Hocsinh->GetDIA_CHI_THUONG_TRU_TINH()."','".$Hocsinh->GetDIA_CHI_THUONG_TRU_HUYEN()."','".$Hocsinh->GetDIA_CHI_THUONG_TRU_XA()."','".$Hocsinh->GetQUE_QUAN_DIA_CHI()."','".$Hocsinh->GetQUE_QUAN_TINH()."','".$Hocsinh->GetQUE_QUAN_HUYEN()."','".$Hocsinh->GetQUE_QUAN_XA()."','".$Hocsinh->GetNOI_SINH_DIA_CHI()."','".$Hocsinh->GetNOI_SINH_TINH()."','".$Hocsinh->GetNOI_SINH_HUYEN()."','".$Hocsinh->GetNOI_SINH_XA()."','".$Hocsinh->GetCHA_TEN()."','".$Hocsinh->GetCHA_NGHE_NGHIEP()."','".$Hocsinh->GetCHA_DIA_CHI()."','".$Hocsinh->GetCHA_NGAY_SINH()."','".$Hocsinh->GetCHA_DANG_VIEN()."','".$Hocsinh->GetCHA_MAT()."','".$Hocsinh->GetME_TEN()."','".$Hocsinh->GetME_NGHE_NGHIEP()."','".$Hocsinh->GetME_DIA_CHI()."','".$Hocsinh->GetME_NGAY_SINH()."','".$Hocsinh->GetME_DANG_VIEN()."','".$Hocsinh->GetME_MAT()."','".$Hocsinh->GetLIEN_HE_TEN()."','".$Hocsinh->GetLIEN_HE_DIA_CHI()."','".$Hocsinh->GetLIEN_HE_SDT()."','".$Hocsinh->GetLIEN_HE_MAIL()."','".$Hocsinh->GetMA_LOP()."','".$Hocsinh->GetDTBHK1()."','".$Hocsinh->GetDTBHK2()."','".$Hocsinh->GetDTBCN()."','".$Hocsinh->GetHOC_LUC()."','".$Hocsinh->GetHANH_KIEM()."','".$Hocsinh->GetSO_NGAY_NGHI()."','".$Hocsinh->GetDANH_HIEU_HS()."','".$Hocsinh->GetDA_KET_CHUYEN()."')";
			mysql_query($sql_add);
		}
		return true;
	}
	public function updateHocsinh($NIEN_KHOA,$Hocsinh){
		$sql_update="UPDATE `qlth_".$NIEN_KHOA."_hoc_sinh` SET `MA_HS`='".$Hocsinh->GetMA_HS()."',`HO_TEN_HS`='".$Hocsinh->GetHO_TEN_HS()."',`TEN_THUONG_GOI`='".$Hocsinh->GetTEN_THUONG_GOI()."',`BI_DANH`='".$Hocsinh->GetBI_DANH()."',`NGAY_SINH`='".$Hocsinh->GetNGAY_SINH()."',`DAN_TOC`='".$Hocsinh->GetDAN_TOC()."',`TON_GIAO`='".$Hocsinh->GetTON_GIAO()."',`SUC_KHOE`='".$Hocsinh->GetSUC_KHOE()."',`GIOI_TINH`='".$Hocsinh->GetGIOI_TINH()."',`EMAIL`='".$Hocsinh->GetEMAIL()."',`MA_BCS`='".$Hocsinh->GetMA_BCS()."',`DIEN_THOAI`='".$Hocsinh->GetDIEN_THOAI()."',`QUOC_TICH`='".$Hocsinh->GetQUOC_TICH()."',`NGAY_VAO_TRUONG`='".$Hocsinh->GetNGAY_VAO_TRUONG()."',`CON_THUONG_BINH_LOAI`='".$Hocsinh->GetCON_THUONG_BINH_LOAI()."',`HOC_TRAI_TUYEN`='".$Hocsinh->GetHOC_TRAI_TUYEN()."',`CON_LIET_SY`='".$Hocsinh->GetCON_LIET_SY()."',`GIA_DINH_CCVCM`='".$Hocsinh->GetGIA_DINH_CCVCM()."',`GIA_DINH_KK`='".$Hocsinh->GetGIA_DINH_KK()."',`DIA_CHI_THUONG_TRU_DIA_CHI`='".$Hocsinh->GetDIA_CHI_THUONG_TRU_DIA_CHI()."',`DIA_CHI_THUONG_TRU_TINH`='".$Hocsinh->GetDIA_CHI_THUONG_TRU_TINH()."',`DIA_CHI_THUONG_TRU_HUYEN`='".$Hocsinh->GetDIA_CHI_THUONG_TRU_HUYEN()."',`DIA_CHI_THUONG_TRU_XA`='".$Hocsinh->GetDIA_CHI_THUONG_TRU_XA()."',`QUE_QUAN_DIA_CHI`='".$Hocsinh->GetQUE_QUAN_DIA_CHI()."',`QUE_QUAN_TINH`='".$Hocsinh->GetQUE_QUAN_TINH()."',`QUE_QUAN_HUYEN`='".$Hocsinh->GetQUE_QUAN_HUYEN()."',`QUE_QUAN_XA`='".$Hocsinh->GetQUE_QUAN_XA()."',`NOI_SINH_DIA_CHI`='".$Hocsinh->GetNOI_SINH_DIA_CHI()."',`NOI_SINH_TINH`='".$Hocsinh->GetNOI_SINH_TINH()."',`NOI_SINH_HUYEN`='".$Hocsinh->GetNOI_SINH_HUYEN()."',`NOI_SINH_XA`='".$Hocsinh->GetNOI_SINH_XA()."',`CHA_TEN`='".$Hocsinh->GetCHA_TEN()."',`CHA_NGHE_NGHIEP`='".$Hocsinh->GetCHA_NGHE_NGHIEP()."',`CHA_DIA_CHI`='".$Hocsinh->GetCHA_DIA_CHI()."',`CHA_NGAY_SINH`='".$Hocsinh->GetCHA_NGAY_SINH()."',`CHA_DANG_VIEN`='".$Hocsinh->GetCHA_DANG_VIEN()."',`CHA_MAT`='".$Hocsinh->GetCHA_MAT()."',`ME_TEN`='".$Hocsinh->GetME_TEN()."',`ME_NGHE_NGHIEP`='".$Hocsinh->GetME_NGHE_NGHIEP()."',`ME_DIA_CHI`='".$Hocsinh->GetME_DIA_CHI()."',`ME_NGAY_SINH`='".$Hocsinh->GetME_NGAY_SINH()."',`ME_DANG_VIEN`='".$Hocsinh->GetME_DANG_VIEN()."',`ME_MAT`='".$Hocsinh->GetME_MAT()."',`LIEN_HE_TEN`='".$Hocsinh->GetLIEN_HE_TEN()."',`LIEN_HE_DIA_CHI`='".$Hocsinh->GetLIEN_HE_DIA_CHI()."',`LIEN_HE_SDT`='".$Hocsinh->GetLIEN_HE_SDT()."',`LIEN_HE_MAIL`='".$Hocsinh->GetLIEN_HE_MAIL()."',`MA_LOP`='".$Hocsinh->GetMA_LOP()."',`DTBHK1`='".$Hocsinh->GetDTBHK1()."',`DTBHK2`='".$Hocsinh->GetDTBHK2()."',`DTBCN`='".$Hocsinh->GetDTBCN()."',`HOC_LUC`='".$Hocsinh->GetHOC_LUC()."',`HANH_KIEM`='".$Hocsinh->GetHANH_KIEM()."',`SO_NGAY_NGHI`='".$Hocsinh->GetSO_NGAY_NGHI()."',`DANH_HIEU_HS`='".$Hocsinh->GetDANH_HIEU_HS()."',`DA_KET_CHUYEN`='".$Hocsinh->GetDA_KET_CHUYEN()."' WHERE ";
		mysql_query($sql_update);
		return true;
	}
	public function checkAddHocsinh($NIEN_KHOA,$Hocsinh){
		$sql_check="SELECT * FROM `qlth_".$NIEN_KHOA."_hoc_sinh` WHERE MA_HS='".$Hocsinh->GetMA_HS()."'";
		$query=msql_query($sql_check);
		$number=mysql_num_rows($qurey);
		if($number>0)return false;
		return true;
	}
	public function getAllHocsinh($NIEN_KHOA,$LIMIT,$goitinh,$lop,$dantoc){
		$sql_selectall="SELECT * FROM `qlth_".$NIEN_KHOA."_hoc_sinh` WHERE 1 ";
		if($goitinh!="")$sql_selectall.="AND GIOI_TINH='$goitinh' ";
		if($lop!="") $sql_selectall.=" AND MA_LOP='$lop' ";
		if($dantoc!="")$sql_selectall.=" AND DAN_TOC='$dantoc' ";
		$sql_selectall.= " LIMIT 0,".$LIMIT;
		$qurey=mysql_query($sql_selectall);
		$i=0;
		$datahocsinh=array();
		while($row=mysql_fetch_array($qurey)){
			$datahocsinh[$i]=new CM_Hocsinh($row['MA_HS'],$row['HO_TEN_HS'],$row['TEN_THUONG_GOI'],$row['BI_DANH'],$row['NGAY_SINH'],$row['DAN_TOC'],$row['TON_GIAO'],$row['SUC_KHOE'],$row['GIOI_TINH'],$row['EMAIL'],$row['MA_BCS'],$row['DIEN_THOAI'],$row['QUOC_TICH'],$row['NGAY_VAO_TRUONG'],$row['CON_THUONG_BINH_LOAI'],$row['HOC_TRAI_TUYEN'],$row['CON_LIET_SY'],$row['GIA_DINH_CCVCM'],$row['GIA_DINH_KK'],$row['DIA_CHI_THUONG_TRU_DIA_CHI'],$row['DIA_CHI_THUONG_TRU_TINH'],$row['DIA_CHI_THUONG_TRU_HUYEN'],$row['DIA_CHI_THUONG_TRU_XA'],$row['QUE_QUAN_DIA_CHI'],$row['QUE_QUAN_TINH'],$row['QUE_QUAN_HUYEN'],$row['QUE_QUAN_XA'],$row['NOI_SINH_DIA_CHI'],$row['NOI_SINH_TINH'],$row['NOI_SINH_HUYEN'],$row['NOI_SINH_XA'],$row['CHA_TEN'],$row['CHA_NGHE_NGHIEP'],$row['CHA_DIA_CHI'],$row['CHA_NGAY_SINH'],$row['CHA_DANG_VIEN'],$row['CHA_MAT'],$row['ME_TEN'],$row['ME_NGHE_NGHIEP'],$row['ME_DIA_CHI'],$row['ME_NGAY_SINH'],$row['ME_DANG_VIEN'],$row['ME_MAT'],$row['LIEN_HE_TEN'],$row['LIEN_HE_DIA_CHI'],$row['LIEN_HE_SDT'],$row['LIEN_HE_MAIL'],$row['MA_LOP'],$row['DTBHK1'],$row['DTBHK2'],$row['DTBCN'],$row['HOC_LUC'],$row['HANH_KIEM'],$row['SO_NGAY_NGHI'],$row['DANH_HIEU_HS'],$row['DA_KET_CHUYEN']);
			$i++;
		}
		return $datahocsinh;
	}
 }?>