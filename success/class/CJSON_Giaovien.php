<?php 

class CJSON_Giaovien{
	
	function __construct(){
		
	}
	
	public function converJsontoGiaovien($datajson){
		$datagiaovien=array();
		$i=0;
		for($i=0;$i<count($datajson);$i++){
			$row=$datajson[$i];
			$datagiaovien[$i]=new CM_Giaovien($row['MA_TOCM'],$row['MA_GV'],$row['HO_GV'],$row['TEN_GV'],$row['EMAIL_GV'],$row['MAT_KHAU_GV'],$row['DIA_CHI_GV'],$row['NGAY_SINH_GV'],$row['PHAI_GV'],$row['SDT_GV'],$row['NGAY_BD_LV'],$row['QUE_QUAN_GV'],$row['ten_thuong_goi_gv'],$row['bidanh_gv'],$row['tp_giadinh_gv'],$row['tp_banthan_gv'],$row['trinhdo_gv'],$row['hedaotao_gv'],$row['chuan_gv'],$row['tinhoc_gv'],$row['ngoaingu_gv'],$row['lyluan_gv'],$row['dantoc_gv'],$row['tongiao_gv'],$row['quoctich_gv'],$row['so_cmtnd'],$row['ngay_cmtnd'],$row['noi_cmtnd'],$row['trangthai_gv'],$row['diachi_hokhau_gv'],$row['huyen_hokhau_gv'],$row['tinh_hokhau_gv'],$row['xa_hokhau_gv'],$row['diachi_quequan_gv'],$row['tinh_quequan_gv'],$row['huyen_quequan_gv'],$row['xa_quequan_gv'],$row['diachi_noio_gv'],$row['tinh_noio_gv'],$row['huyen_noio_gv'],$row['xa_noio_gv'],$row['name_bo_gv'],$row['nghenghiep_bo_gv'],$row['diachi_bo_gv'],$row['tuoi_bo_gv'],$row['dang_bo_gv'],$row['mat_bo_gv'],$row['name_me_gv'],$row['nghenghiep_me_gv'],$row['diachi_me_gv'],$row['tuoi_me_gv'],$row['dang_me_gv'],$row['mat_me_gv'],$row['name_vc_gv'],$row['nghenghiep_vc_gv'],$row['diachi_vc_gv'],$row['tuoi_vc_gv'],$row['dang_vc_gv'],$row['mat_vc_gv'],$row['name_lienhe_gv'],$row['diachi_lienhe_gv'],$row['dt_lienhe_gv'],$row['mail_lienhe_gv'],$row['ngay_ttdoan_gv'],$row['noi_ttdoan_gv'],$row['ngay_ttdang_gv'],$row['noi_ttdang_gv'],$row['ngayct_ttdang_gv'],$row['sothe_ttdang_gv'],$row['chuc_vu']);
		}
		return $datagiaovien;
	}
	public function converGiaovientoJson($datagiaovien){
		$i=0;
		$datajson=array();
		for($i=0;$i<count($datagiaovien);$i++){
			$Giaovien=$datagiaovien[$i];
			$datajson[$i]= array(
				'MA_TOCM' => $Giaovien->GetMA_TOCM(),
				'MA_GV' => $Giaovien->GetMA_GV(),
				'HO_GV' => $Giaovien->GetHO_GV(),
				'TEN_GV' => $Giaovien->GetTEN_GV(),
				'EMAIL_GV' => $Giaovien->GetEMAIL_GV(),
				'MAT_KHAU_GV' => $Giaovien->GetMAT_KHAU_GV(),
				'DIA_CHI_GV' => $Giaovien->GetDIA_CHI_GV(),
				'NGAY_SINH_GV' => $Giaovien->GetNGAY_SINH_GV(),
				'PHAI_GV' => $Giaovien->GetPHAI_GV(),
				'SDT_GV' => $Giaovien->GetSDT_GV(),
				'NGAY_BD_LV' => $Giaovien->GetNGAY_BD_LV(),
				'QUE_QUAN_GV' => $Giaovien->GetQUE_QUAN_GV(),
				'ten_thuong_goi_gv' => $Giaovien->Getten_thuong_goi_gv(),
				'bidanh_gv' => $Giaovien->Getbidanh_gv(),
				'tp_giadinh_gv' => $Giaovien->Gettp_giadinh_gv(),
				'tp_banthan_gv' => $Giaovien->Gettp_banthan_gv(),
				'trinhdo_gv' => $Giaovien->Gettrinhdo_gv(),
				'hedaotao_gv' => $Giaovien->Gethedaotao_gv(),
				'chuan_gv' => $Giaovien->Getchuan_gv(),
				'tinhoc_gv' => $Giaovien->Gettinhoc_gv(),
				'ngoaingu_gv' => $Giaovien->Getngoaingu_gv(),
				'lyluan_gv' => $Giaovien->Getlyluan_gv(),
				'dantoc_gv' => $Giaovien->Getdantoc_gv(),
				'tongiao_gv' => $Giaovien->Gettongiao_gv(),
				'quoctich_gv' => $Giaovien->Getquoctich_gv(),
				'so_cmtnd' => $Giaovien->Getso_cmtnd(),
				'ngay_cmtnd' => $Giaovien->Getngay_cmtnd(),
				'noi_cmtnd' => $Giaovien->Getnoi_cmtnd(),
				'trangthai_gv' => $Giaovien->Gettrangthai_gv(),
				'diachi_hokhau_gv' => $Giaovien->Getdiachi_hokhau_gv(),
				'huyen_hokhau_gv' => $Giaovien->Gethuyen_hokhau_gv(),
				'tinh_hokhau_gv' => $Giaovien->Gettinh_hokhau_gv(),
				'xa_hokhau_gv' => $Giaovien->Getxa_hokhau_gv(),
				'diachi_quequan_gv' => $Giaovien->Getdiachi_quequan_gv(),
				'tinh_quequan_gv' => $Giaovien->Gettinh_quequan_gv(),
				'huyen_quequan_gv' => $Giaovien->Gethuyen_quequan_gv(),
				'xa_quequan_gv' => $Giaovien->Getxa_quequan_gv(),
				'diachi_noio_gv' => $Giaovien->Getdiachi_noio_gv(),
				'tinh_noio_gv' => $Giaovien->Gettinh_noio_gv(),
				'huyen_noio_gv' => $Giaovien->Gethuyen_noio_gv(),
				'xa_noio_gv' => $Giaovien->Getxa_noio_gv(),
				'name_bo_gv' => $Giaovien->Getname_bo_gv(),
				'nghenghiep_bo_gv' => $Giaovien->Getnghenghiep_bo_gv(),
				'diachi_bo_gv' => $Giaovien->Getdiachi_bo_gv(),
				'tuoi_bo_gv' => $Giaovien->Gettuoi_bo_gv(),
				'dang_bo_gv' => $Giaovien->Getdang_bo_gv(),
				'mat_bo_gv' => $Giaovien->Getmat_bo_gv(),
				'name_me_gv' => $Giaovien->Getname_me_gv(),
				'nghenghiep_me_gv' => $Giaovien->Getnghenghiep_me_gv(),
				'diachi_me_gv' => $Giaovien->Getdiachi_me_gv(),
				'tuoi_me_gv' => $Giaovien->Gettuoi_me_gv(),
				'dang_me_gv' => $Giaovien->Getdang_me_gv(),
				'mat_me_gv' => $Giaovien->Getmat_me_gv(),
				'name_vc_gv' => $Giaovien->Getname_vc_gv(),
				'nghenghiep_vc_gv' => $Giaovien->Getnghenghiep_vc_gv(),
				'diachi_vc_gv' => $Giaovien->Getdiachi_vc_gv(),
				'tuoi_vc_gv' => $Giaovien->Gettuoi_vc_gv(),
				'dang_vc_gv' => $Giaovien->Getdang_vc_gv(),
				'mat_vc_gv' => $Giaovien->Getmat_vc_gv(),
				'name_lienhe_gv' => $Giaovien->Getname_lienhe_gv(),
				'diachi_lienhe_gv' => $Giaovien->Getdiachi_lienhe_gv(),
				'dt_lienhe_gv' => $Giaovien->Getdt_lienhe_gv(),
				'mail_lienhe_gv' => $Giaovien->Getmail_lienhe_gv(),
				'ngay_ttdoan_gv' => $Giaovien->Getngay_ttdoan_gv(),
				'noi_ttdoan_gv' => $Giaovien->Getnoi_ttdoan_gv(),
				'ngay_ttdang_gv' => $Giaovien->Getngay_ttdang_gv(),
				'noi_ttdang_gv' => $Giaovien->Getnoi_ttdang_gv(),
				'ngayct_ttdang_gv' => $Giaovien->Getngayct_ttdang_gv(),
				'sothe_ttdang_gv' => $Giaovien->Getsothe_ttdang_gv(),
				'chuc_vu' => $Giaovien->Getchuc_vu()
			);
			
		}
		return $datajson;
	}


}
?>