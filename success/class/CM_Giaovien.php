<?php 
class CM_Giaovien { 
	private $MA_TOCM; 
	private $MA_GV; 
	private $HO_GV; 
	private $TEN_GV; 
	private $EMAIL_GV; 
	private $MAT_KHAU_GV; 
	private $DIA_CHI_GV; 
	private $NGAY_SINH_GV; 
	private $PHAI_GV; 
	private $SDT_GV; 
	private $NGAY_BD_LV; 
	private $QUE_QUAN_GV; 
	private $ten_thuong_goi_gv; 
	private $bidanh_gv; 
	private $tp_giadinh_gv; 
	private $tp_banthan_gv; 
	private $trinhdo_gv; 
	private $hedaotao_gv; 
	private $chuan_gv; 
	private $tinhoc_gv; 
	private $ngoaingu_gv; 
	private $lyluan_gv; 
	private $dantoc_gv; 
	private $tongiao_gv; 
	private $quoctich_gv; 
	private $so_cmtnd; 
	private $ngay_cmtnd; 
	private $noi_cmtnd; 
	private $trangthai_gv; 
	private $diachi_hokhau_gv; 
	private $huyen_hokhau_gv; 
	private $tinh_hokhau_gv; 
	private $xa_hokhau_gv; 
	private $diachi_quequan_gv; 
	private $tinh_quequan_gv; 
	private $huyen_quequan_gv; 
	private $xa_quequan_gv; 
	private $diachi_noio_gv; 
	private $tinh_noio_gv; 
	private $huyen_noio_gv; 
	private $xa_noio_gv; 
	private $name_bo_gv; 
	private $nghenghiep_bo_gv; 
	private $diachi_bo_gv; 
	private $tuoi_bo_gv; 
	private $dang_bo_gv; 
	private $mat_bo_gv; 
	private $name_me_gv; 
	private $nghenghiep_me_gv; 
	private $diachi_me_gv; 
	private $tuoi_me_gv; 
	private $dang_me_gv; 
	private $mat_me_gv; 
	private $name_vc_gv; 
	private $nghenghiep_vc_gv; 
	private $diachi_vc_gv; 
	private $tuoi_vc_gv; 
	private $dang_vc_gv; 
	private $mat_vc_gv; 
	private $name_lienhe_gv; 
	private $diachi_lienhe_gv; 
	private $dt_lienhe_gv; 
	private $mail_lienhe_gv; 
	private $ngay_ttdoan_gv; 
	private $noi_ttdoan_gv; 
	private $ngay_ttdang_gv; 
	private $noi_ttdang_gv; 
	private $ngayct_ttdang_gv; 
	private $sothe_ttdang_gv; 
	private $chuc_vu; 
	function __construct($MA_TOCM,$MA_GV,$HO_GV,$TEN_GV,$EMAIL_GV,$MAT_KHAU_GV,$DIA_CHI_GV,$NGAY_SINH_GV,$PHAI_GV,$SDT_GV,$NGAY_BD_LV,$QUE_QUAN_GV,$ten_thuong_goi_gv,$bidanh_gv,$tp_giadinh_gv,$tp_banthan_gv,$trinhdo_gv,$hedaotao_gv,$chuan_gv,$tinhoc_gv,$ngoaingu_gv,$lyluan_gv,$dantoc_gv,$tongiao_gv,$quoctich_gv,$so_cmtnd,$ngay_cmtnd,$noi_cmtnd,$trangthai_gv,$diachi_hokhau_gv,$huyen_hokhau_gv,$tinh_hokhau_gv,$xa_hokhau_gv,$diachi_quequan_gv,$tinh_quequan_gv,$huyen_quequan_gv,$xa_quequan_gv,$diachi_noio_gv,$tinh_noio_gv,$huyen_noio_gv,$xa_noio_gv,$name_bo_gv,$nghenghiep_bo_gv,$diachi_bo_gv,$tuoi_bo_gv,$dang_bo_gv,$mat_bo_gv,$name_me_gv,$nghenghiep_me_gv,$diachi_me_gv,$tuoi_me_gv,$dang_me_gv,$mat_me_gv,$name_vc_gv,$nghenghiep_vc_gv,$diachi_vc_gv,$tuoi_vc_gv,$dang_vc_gv,$mat_vc_gv,$name_lienhe_gv,$diachi_lienhe_gv,$dt_lienhe_gv,$mail_lienhe_gv,$ngay_ttdoan_gv,$noi_ttdoan_gv,$ngay_ttdang_gv,$noi_ttdang_gv,$ngayct_ttdang_gv,$sothe_ttdang_gv,$chuc_vu){
	$this->MA_TOCM =$MA_TOCM; 
	$this->MA_GV =$MA_GV; 
	$this->HO_GV =$HO_GV; 
	$this->TEN_GV =$TEN_GV; 
	$this->EMAIL_GV =$EMAIL_GV; 
	$this->MAT_KHAU_GV =$MAT_KHAU_GV; 
	$this->DIA_CHI_GV =$DIA_CHI_GV; 
	$this->NGAY_SINH_GV =$NGAY_SINH_GV; 
	$this->PHAI_GV =$PHAI_GV; 
	$this->SDT_GV =$SDT_GV; 
	$this->NGAY_BD_LV =$NGAY_BD_LV; 
	$this->QUE_QUAN_GV =$QUE_QUAN_GV; 
	$this->ten_thuong_goi_gv =$ten_thuong_goi_gv; 
	$this->bidanh_gv =$bidanh_gv; 
	$this->tp_giadinh_gv =$tp_giadinh_gv; 
	$this->tp_banthan_gv =$tp_banthan_gv; 
	$this->trinhdo_gv =$trinhdo_gv; 
	$this->hedaotao_gv =$hedaotao_gv; 
	$this->chuan_gv =$chuan_gv; 
	$this->tinhoc_gv =$tinhoc_gv; 
	$this->ngoaingu_gv =$ngoaingu_gv; 
	$this->lyluan_gv =$lyluan_gv; 
	$this->dantoc_gv =$dantoc_gv; 
	$this->tongiao_gv =$tongiao_gv; 
	$this->quoctich_gv =$quoctich_gv; 
	$this->so_cmtnd =$so_cmtnd; 
	$this->ngay_cmtnd =$ngay_cmtnd; 
	$this->noi_cmtnd =$noi_cmtnd; 
	$this->trangthai_gv =$trangthai_gv; 
	$this->diachi_hokhau_gv =$diachi_hokhau_gv; 
	$this->huyen_hokhau_gv =$huyen_hokhau_gv; 
	$this->tinh_hokhau_gv =$tinh_hokhau_gv; 
	$this->xa_hokhau_gv =$xa_hokhau_gv; 
	$this->diachi_quequan_gv =$diachi_quequan_gv; 
	$this->tinh_quequan_gv =$tinh_quequan_gv; 
	$this->huyen_quequan_gv =$huyen_quequan_gv; 
	$this->xa_quequan_gv =$xa_quequan_gv; 
	$this->diachi_noio_gv =$diachi_noio_gv; 
	$this->tinh_noio_gv =$tinh_noio_gv; 
	$this->huyen_noio_gv =$huyen_noio_gv; 
	$this->xa_noio_gv =$xa_noio_gv; 
	$this->name_bo_gv =$name_bo_gv; 
	$this->nghenghiep_bo_gv =$nghenghiep_bo_gv; 
	$this->diachi_bo_gv =$diachi_bo_gv; 
	$this->tuoi_bo_gv =$tuoi_bo_gv; 
	$this->dang_bo_gv =$dang_bo_gv; 
	$this->mat_bo_gv =$mat_bo_gv; 
	$this->name_me_gv =$name_me_gv; 
	$this->nghenghiep_me_gv =$nghenghiep_me_gv; 
	$this->diachi_me_gv =$diachi_me_gv; 
	$this->tuoi_me_gv =$tuoi_me_gv; 
	$this->dang_me_gv =$dang_me_gv; 
	$this->mat_me_gv =$mat_me_gv; 
	$this->name_vc_gv =$name_vc_gv; 
	$this->nghenghiep_vc_gv =$nghenghiep_vc_gv; 
	$this->diachi_vc_gv =$diachi_vc_gv; 
	$this->tuoi_vc_gv =$tuoi_vc_gv; 
	$this->dang_vc_gv =$dang_vc_gv; 
	$this->mat_vc_gv =$mat_vc_gv; 
	$this->name_lienhe_gv =$name_lienhe_gv; 
	$this->diachi_lienhe_gv =$diachi_lienhe_gv; 
	$this->dt_lienhe_gv =$dt_lienhe_gv; 
	$this->mail_lienhe_gv =$mail_lienhe_gv; 
	$this->ngay_ttdoan_gv =$ngay_ttdoan_gv; 
	$this->noi_ttdoan_gv =$noi_ttdoan_gv; 
	$this->ngay_ttdang_gv =$ngay_ttdang_gv; 
	$this->noi_ttdang_gv =$noi_ttdang_gv; 
	$this->ngayct_ttdang_gv =$ngayct_ttdang_gv; 
	$this->sothe_ttdang_gv =$sothe_ttdang_gv; 
	$this->chuc_vu =$chuc_vu; 
	}
	public function GetMA_TOCM(){
	return $this->MA_TOCM;
	} 
	public function GetMA_GV(){
	return $this->MA_GV;
	} 
	public function GetHO_GV(){
	return $this->HO_GV;
	} 
	public function GetTEN_GV(){
	return $this->TEN_GV;
	} 
	public function GetEMAIL_GV(){
	return $this->EMAIL_GV;
	} 
	public function GetMAT_KHAU_GV(){
	return $this->MAT_KHAU_GV;
	} 
	public function GetDIA_CHI_GV(){
	return $this->DIA_CHI_GV;
	} 
	public function GetNGAY_SINH_GV(){
	return $this->NGAY_SINH_GV;
	} 
	public function GetPHAI_GV(){
	return $this->PHAI_GV;
	} 
	public function GetSDT_GV(){
	return $this->SDT_GV;
	} 
	public function GetNGAY_BD_LV(){
	return $this->NGAY_BD_LV;
	} 
	public function GetQUE_QUAN_GV(){
	return $this->QUE_QUAN_GV;
	} 
	public function Getten_thuong_goi_gv(){
	return $this->ten_thuong_goi_gv;
	} 
	public function Getbidanh_gv(){
	return $this->bidanh_gv;
	} 
	public function Gettp_giadinh_gv(){
	return $this->tp_giadinh_gv;
	} 
	public function Gettp_banthan_gv(){
	return $this->tp_banthan_gv;
	} 
	public function Gettrinhdo_gv(){
	return $this->trinhdo_gv;
	} 
	public function Gethedaotao_gv(){
	return $this->hedaotao_gv;
	} 
	public function Getchuan_gv(){
	return $this->chuan_gv;
	} 
	public function Gettinhoc_gv(){
	return $this->tinhoc_gv;
	} 
	public function Getngoaingu_gv(){
	return $this->ngoaingu_gv;
	} 
	public function Getlyluan_gv(){
	return $this->lyluan_gv;
	} 
	public function Getdantoc_gv(){
	return $this->dantoc_gv;
	} 
	public function Gettongiao_gv(){
	return $this->tongiao_gv;
	} 
	public function Getquoctich_gv(){
	return $this->quoctich_gv;
	} 
	public function Getso_cmtnd(){
	return $this->so_cmtnd;
	} 
	public function Getngay_cmtnd(){
	return $this->ngay_cmtnd;
	} 
	public function Getnoi_cmtnd(){
	return $this->noi_cmtnd;
	} 
	public function Gettrangthai_gv(){
	return $this->trangthai_gv;
	} 
	public function Getdiachi_hokhau_gv(){
	return $this->diachi_hokhau_gv;
	} 
	public function Gethuyen_hokhau_gv(){
	return $this->huyen_hokhau_gv;
	} 
	public function Gettinh_hokhau_gv(){
	return $this->tinh_hokhau_gv;
	} 
	public function Getxa_hokhau_gv(){
	return $this->xa_hokhau_gv;
	} 
	public function Getdiachi_quequan_gv(){
	return $this->diachi_quequan_gv;
	} 
	public function Gettinh_quequan_gv(){
	return $this->tinh_quequan_gv;
	} 
	public function Gethuyen_quequan_gv(){
	return $this->huyen_quequan_gv;
	} 
	public function Getxa_quequan_gv(){
	return $this->xa_quequan_gv;
	} 
	public function Getdiachi_noio_gv(){
	return $this->diachi_noio_gv;
	} 
	public function Gettinh_noio_gv(){
	return $this->tinh_noio_gv;
	} 
	public function Gethuyen_noio_gv(){
	return $this->huyen_noio_gv;
	} 
	public function Getxa_noio_gv(){
	return $this->xa_noio_gv;
	} 
	public function Getname_bo_gv(){
	return $this->name_bo_gv;
	} 
	public function Getnghenghiep_bo_gv(){
	return $this->nghenghiep_bo_gv;
	} 
	public function Getdiachi_bo_gv(){
	return $this->diachi_bo_gv;
	} 
	public function Gettuoi_bo_gv(){
	return $this->tuoi_bo_gv;
	} 
	public function Getdang_bo_gv(){
	return $this->dang_bo_gv;
	} 
	public function Getmat_bo_gv(){
	return $this->mat_bo_gv;
	} 
	public function Getname_me_gv(){
	return $this->name_me_gv;
	} 
	public function Getnghenghiep_me_gv(){
	return $this->nghenghiep_me_gv;
	} 
	public function Getdiachi_me_gv(){
	return $this->diachi_me_gv;
	} 
	public function Gettuoi_me_gv(){
	return $this->tuoi_me_gv;
	} 
	public function Getdang_me_gv(){
	return $this->dang_me_gv;
	} 
	public function Getmat_me_gv(){
	return $this->mat_me_gv;
	} 
	public function Getname_vc_gv(){
	return $this->name_vc_gv;
	} 
	public function Getnghenghiep_vc_gv(){
	return $this->nghenghiep_vc_gv;
	} 
	public function Getdiachi_vc_gv(){
	return $this->diachi_vc_gv;
	} 
	public function Gettuoi_vc_gv(){
	return $this->tuoi_vc_gv;
	} 
	public function Getdang_vc_gv(){
	return $this->dang_vc_gv;
	} 
	public function Getmat_vc_gv(){
	return $this->mat_vc_gv;
	} 
	public function Getname_lienhe_gv(){
	return $this->name_lienhe_gv;
	} 
	public function Getdiachi_lienhe_gv(){
	return $this->diachi_lienhe_gv;
	} 
	public function Getdt_lienhe_gv(){
	return $this->dt_lienhe_gv;
	} 
	public function Getmail_lienhe_gv(){
	return $this->mail_lienhe_gv;
	} 
	public function Getngay_ttdoan_gv(){
	return $this->ngay_ttdoan_gv;
	} 
	public function Getnoi_ttdoan_gv(){
	return $this->noi_ttdoan_gv;
	} 
	public function Getngay_ttdang_gv(){
	return $this->ngay_ttdang_gv;
	} 
	public function Getnoi_ttdang_gv(){
	return $this->noi_ttdang_gv;
	} 
	public function Getngayct_ttdang_gv(){
	return $this->ngayct_ttdang_gv;
	} 
	public function Getsothe_ttdang_gv(){
	return $this->sothe_ttdang_gv;
	} 
	public function Getchuc_vu(){
	return $this->chuc_vu;
	} 
	public function SetMA_TOCM($MA_TOCM){
	$this->MA_TOCM =$MA_TOCM;
	} 
	public function SetMA_GV($MA_GV){
	$this->MA_GV =$MA_GV;
	} 
	public function SetHO_GV($HO_GV){
	$this->HO_GV =$HO_GV;
	} 
	public function SetTEN_GV($TEN_GV){
	$this->TEN_GV =$TEN_GV;
	} 
	public function SetEMAIL_GV($EMAIL_GV){
	$this->EMAIL_GV =$EMAIL_GV;
	} 
	public function SetMAT_KHAU_GV($MAT_KHAU_GV){
	$this->MAT_KHAU_GV =$MAT_KHAU_GV;
	} 
	public function SetDIA_CHI_GV($DIA_CHI_GV){
	$this->DIA_CHI_GV =$DIA_CHI_GV;
	} 
	public function SetNGAY_SINH_GV($NGAY_SINH_GV){
	$this->NGAY_SINH_GV =$NGAY_SINH_GV;
	} 
	public function SetPHAI_GV($PHAI_GV){
	$this->PHAI_GV =$PHAI_GV;
	} 
	public function SetSDT_GV($SDT_GV){
	$this->SDT_GV =$SDT_GV;
	} 
	public function SetNGAY_BD_LV($NGAY_BD_LV){
	$this->NGAY_BD_LV =$NGAY_BD_LV;
	} 
	public function SetQUE_QUAN_GV($QUE_QUAN_GV){
	$this->QUE_QUAN_GV =$QUE_QUAN_GV;
	} 
	public function Setten_thuong_goi_gv($ten_thuong_goi_gv){
	$this->ten_thuong_goi_gv =$ten_thuong_goi_gv;
	} 
	public function Setbidanh_gv($bidanh_gv){
	$this->bidanh_gv =$bidanh_gv;
	} 
	public function Settp_giadinh_gv($tp_giadinh_gv){
	$this->tp_giadinh_gv =$tp_giadinh_gv;
	} 
	public function Settp_banthan_gv($tp_banthan_gv){
	$this->tp_banthan_gv =$tp_banthan_gv;
	} 
	public function Settrinhdo_gv($trinhdo_gv){
	$this->trinhdo_gv =$trinhdo_gv;
	} 
	public function Sethedaotao_gv($hedaotao_gv){
	$this->hedaotao_gv =$hedaotao_gv;
	} 
	public function Setchuan_gv($chuan_gv){
	$this->chuan_gv =$chuan_gv;
	} 
	public function Settinhoc_gv($tinhoc_gv){
	$this->tinhoc_gv =$tinhoc_gv;
	} 
	public function Setngoaingu_gv($ngoaingu_gv){
	$this->ngoaingu_gv =$ngoaingu_gv;
	} 
	public function Setlyluan_gv($lyluan_gv){
	$this->lyluan_gv =$lyluan_gv;
	} 
	public function Setdantoc_gv($dantoc_gv){
	$this->dantoc_gv =$dantoc_gv;
	} 
	public function Settongiao_gv($tongiao_gv){
	$this->tongiao_gv =$tongiao_gv;
	} 
	public function Setquoctich_gv($quoctich_gv){
	$this->quoctich_gv =$quoctich_gv;
	} 
	public function Setso_cmtnd($so_cmtnd){
	$this->so_cmtnd =$so_cmtnd;
	} 
	public function Setngay_cmtnd($ngay_cmtnd){
	$this->ngay_cmtnd =$ngay_cmtnd;
	} 
	public function Setnoi_cmtnd($noi_cmtnd){
	$this->noi_cmtnd =$noi_cmtnd;
	} 
	public function Settrangthai_gv($trangthai_gv){
	$this->trangthai_gv =$trangthai_gv;
	} 
	public function Setdiachi_hokhau_gv($diachi_hokhau_gv){
	$this->diachi_hokhau_gv =$diachi_hokhau_gv;
	} 
	public function Sethuyen_hokhau_gv($huyen_hokhau_gv){
	$this->huyen_hokhau_gv =$huyen_hokhau_gv;
	} 
	public function Settinh_hokhau_gv($tinh_hokhau_gv){
	$this->tinh_hokhau_gv =$tinh_hokhau_gv;
	} 
	public function Setxa_hokhau_gv($xa_hokhau_gv){
	$this->xa_hokhau_gv =$xa_hokhau_gv;
	} 
	public function Setdiachi_quequan_gv($diachi_quequan_gv){
	$this->diachi_quequan_gv =$diachi_quequan_gv;
	} 
	public function Settinh_quequan_gv($tinh_quequan_gv){
	$this->tinh_quequan_gv =$tinh_quequan_gv;
	} 
	public function Sethuyen_quequan_gv($huyen_quequan_gv){
	$this->huyen_quequan_gv =$huyen_quequan_gv;
	} 
	public function Setxa_quequan_gv($xa_quequan_gv){
	$this->xa_quequan_gv =$xa_quequan_gv;
	} 
	public function Setdiachi_noio_gv($diachi_noio_gv){
	$this->diachi_noio_gv =$diachi_noio_gv;
	} 
	public function Settinh_noio_gv($tinh_noio_gv){
	$this->tinh_noio_gv =$tinh_noio_gv;
	} 
	public function Sethuyen_noio_gv($huyen_noio_gv){
	$this->huyen_noio_gv =$huyen_noio_gv;
	} 
	public function Setxa_noio_gv($xa_noio_gv){
	$this->xa_noio_gv =$xa_noio_gv;
	} 
	public function Setname_bo_gv($name_bo_gv){
	$this->name_bo_gv =$name_bo_gv;
	} 
	public function Setnghenghiep_bo_gv($nghenghiep_bo_gv){
	$this->nghenghiep_bo_gv =$nghenghiep_bo_gv;
	} 
	public function Setdiachi_bo_gv($diachi_bo_gv){
	$this->diachi_bo_gv =$diachi_bo_gv;
	} 
	public function Settuoi_bo_gv($tuoi_bo_gv){
	$this->tuoi_bo_gv =$tuoi_bo_gv;
	} 
	public function Setdang_bo_gv($dang_bo_gv){
	$this->dang_bo_gv =$dang_bo_gv;
	} 
	public function Setmat_bo_gv($mat_bo_gv){
	$this->mat_bo_gv =$mat_bo_gv;
	} 
	public function Setname_me_gv($name_me_gv){
	$this->name_me_gv =$name_me_gv;
	} 
	public function Setnghenghiep_me_gv($nghenghiep_me_gv){
	$this->nghenghiep_me_gv =$nghenghiep_me_gv;
	} 
	public function Setdiachi_me_gv($diachi_me_gv){
	$this->diachi_me_gv =$diachi_me_gv;
	} 
	public function Settuoi_me_gv($tuoi_me_gv){
	$this->tuoi_me_gv =$tuoi_me_gv;
	} 
	public function Setdang_me_gv($dang_me_gv){
	$this->dang_me_gv =$dang_me_gv;
	} 
	public function Setmat_me_gv($mat_me_gv){
	$this->mat_me_gv =$mat_me_gv;
	} 
	public function Setname_vc_gv($name_vc_gv){
	$this->name_vc_gv =$name_vc_gv;
	} 
	public function Setnghenghiep_vc_gv($nghenghiep_vc_gv){
	$this->nghenghiep_vc_gv =$nghenghiep_vc_gv;
	} 
	public function Setdiachi_vc_gv($diachi_vc_gv){
	$this->diachi_vc_gv =$diachi_vc_gv;
	} 
	public function Settuoi_vc_gv($tuoi_vc_gv){
	$this->tuoi_vc_gv =$tuoi_vc_gv;
	} 
	public function Setdang_vc_gv($dang_vc_gv){
	$this->dang_vc_gv =$dang_vc_gv;
	} 
	public function Setmat_vc_gv($mat_vc_gv){
	$this->mat_vc_gv =$mat_vc_gv;
	} 
	public function Setname_lienhe_gv($name_lienhe_gv){
	$this->name_lienhe_gv =$name_lienhe_gv;
	} 
	public function Setdiachi_lienhe_gv($diachi_lienhe_gv){
	$this->diachi_lienhe_gv =$diachi_lienhe_gv;
	} 
	public function Setdt_lienhe_gv($dt_lienhe_gv){
	$this->dt_lienhe_gv =$dt_lienhe_gv;
	} 
	public function Setmail_lienhe_gv($mail_lienhe_gv){
	$this->mail_lienhe_gv =$mail_lienhe_gv;
	} 
	public function Setngay_ttdoan_gv($ngay_ttdoan_gv){
	$this->ngay_ttdoan_gv =$ngay_ttdoan_gv;
	} 
	public function Setnoi_ttdoan_gv($noi_ttdoan_gv){
	$this->noi_ttdoan_gv =$noi_ttdoan_gv;
	} 
	public function Setngay_ttdang_gv($ngay_ttdang_gv){
	$this->ngay_ttdang_gv =$ngay_ttdang_gv;
	} 
	public function Setnoi_ttdang_gv($noi_ttdang_gv){
	$this->noi_ttdang_gv =$noi_ttdang_gv;
	} 
	public function Setngayct_ttdang_gv($ngayct_ttdang_gv){
	$this->ngayct_ttdang_gv =$ngayct_ttdang_gv;
	} 
	public function Setsothe_ttdang_gv($sothe_ttdang_gv){
	$this->sothe_ttdang_gv =$sothe_ttdang_gv;
	} 
	public function Setchuc_vu($chuc_vu){
	$this->chuc_vu =$chuc_vu;
	} 
 }?>