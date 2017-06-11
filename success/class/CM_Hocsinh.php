<?php 
class CM_Hocsinh { 
private $MA_HS; 
private $HO_TEN_HS; 
private $TEN_THUONG_GOI; 
private $BI_DANH; 
private $NGAY_SINH; 
private $DAN_TOC; 
private $TON_GIAO; 
private $SUC_KHOE; 
private $GIOI_TINH; 
private $EMAIL; 
private $MA_BCS; 
private $DIEN_THOAI; 
private $QUOC_TICH; 
private $NGAY_VAO_TRUONG; 
private $CON_THUONG_BINH_LOAI; 
private $HOC_TRAI_TUYEN; 
private $CON_LIET_SY; 
private $GIA_DINH_CCVCM; 
private $GIA_DINH_KK; 
private $DIA_CHI_THUONG_TRU_DIA_CHI; 
private $DIA_CHI_THUONG_TRU_TINH; 
private $DIA_CHI_THUONG_TRU_HUYEN; 
private $DIA_CHI_THUONG_TRU_XA; 
private $QUE_QUAN_DIA_CHI; 
private $QUE_QUAN_TINH; 
private $QUE_QUAN_HUYEN; 
private $QUE_QUAN_XA; 
private $NOI_SINH_DIA_CHI; 
private $NOI_SINH_TINH; 
private $NOI_SINH_HUYEN; 
private $NOI_SINH_XA; 
private $CHA_TEN; 
private $CHA_NGHE_NGHIEP; 
private $CHA_DIA_CHI; 
private $CHA_NGAY_SINH; 
private $CHA_DANG_VIEN; 
private $CHA_MAT; 
private $ME_TEN; 
private $ME_NGHE_NGHIEP; 
private $ME_DIA_CHI; 
private $ME_NGAY_SINH; 
private $ME_DANG_VIEN; 
private $ME_MAT; 
private $LIEN_HE_TEN; 
private $LIEN_HE_DIA_CHI; 
private $LIEN_HE_SDT; 
private $LIEN_HE_MAIL; 
private $MA_LOP; 
private $DTBHK1; 
private $DTBHK2; 
private $DTBCN; 
private $HOC_LUC; 
private $HANH_KIEM; 
private $SO_NGAY_NGHI; 
private $DANH_HIEU_HS; 
private $DA_KET_CHUYEN; 
function __construct($MA_HS,$HO_TEN_HS,$TEN_THUONG_GOI,$BI_DANH,$NGAY_SINH,$DAN_TOC,$TON_GIAO,$SUC_KHOE,$GIOI_TINH,$EMAIL,$MA_BCS,$DIEN_THOAI,$QUOC_TICH,$NGAY_VAO_TRUONG,$CON_THUONG_BINH_LOAI,$HOC_TRAI_TUYEN,$CON_LIET_SY,$GIA_DINH_CCVCM,$GIA_DINH_KK,$DIA_CHI_THUONG_TRU_DIA_CHI,$DIA_CHI_THUONG_TRU_TINH,$DIA_CHI_THUONG_TRU_HUYEN,$DIA_CHI_THUONG_TRU_XA,$QUE_QUAN_DIA_CHI,$QUE_QUAN_TINH,$QUE_QUAN_HUYEN,$QUE_QUAN_XA,$NOI_SINH_DIA_CHI,$NOI_SINH_TINH,$NOI_SINH_HUYEN,$NOI_SINH_XA,$CHA_TEN,$CHA_NGHE_NGHIEP,$CHA_DIA_CHI,$CHA_NGAY_SINH,$CHA_DANG_VIEN,$CHA_MAT,$ME_TEN,$ME_NGHE_NGHIEP,$ME_DIA_CHI,$ME_NGAY_SINH,$ME_DANG_VIEN,$ME_MAT,$LIEN_HE_TEN,$LIEN_HE_DIA_CHI,$LIEN_HE_SDT,$LIEN_HE_MAIL,$MA_LOP,$DTBHK1,$DTBHK2,$DTBCN,$HOC_LUC,$HANH_KIEM,$SO_NGAY_NGHI,$DANH_HIEU_HS,$DA_KET_CHUYEN){
$this->MA_HS =$MA_HS; 
$this->HO_TEN_HS =$HO_TEN_HS; 
$this->TEN_THUONG_GOI =$TEN_THUONG_GOI; 
$this->BI_DANH =$BI_DANH; 
$this->NGAY_SINH =$NGAY_SINH; 
$this->DAN_TOC =$DAN_TOC; 
$this->TON_GIAO =$TON_GIAO; 
$this->SUC_KHOE =$SUC_KHOE; 
$this->GIOI_TINH =$GIOI_TINH; 
$this->EMAIL =$EMAIL; 
$this->MA_BCS =$MA_BCS; 
$this->DIEN_THOAI =$DIEN_THOAI; 
$this->QUOC_TICH =$QUOC_TICH; 
$this->NGAY_VAO_TRUONG =$NGAY_VAO_TRUONG; 
$this->CON_THUONG_BINH_LOAI =$CON_THUONG_BINH_LOAI; 
$this->HOC_TRAI_TUYEN =$HOC_TRAI_TUYEN; 
$this->CON_LIET_SY =$CON_LIET_SY; 
$this->GIA_DINH_CCVCM =$GIA_DINH_CCVCM; 
$this->GIA_DINH_KK =$GIA_DINH_KK; 
$this->DIA_CHI_THUONG_TRU_DIA_CHI =$DIA_CHI_THUONG_TRU_DIA_CHI; 
$this->DIA_CHI_THUONG_TRU_TINH =$DIA_CHI_THUONG_TRU_TINH; 
$this->DIA_CHI_THUONG_TRU_HUYEN =$DIA_CHI_THUONG_TRU_HUYEN; 
$this->DIA_CHI_THUONG_TRU_XA =$DIA_CHI_THUONG_TRU_XA; 
$this->QUE_QUAN_DIA_CHI =$QUE_QUAN_DIA_CHI; 
$this->QUE_QUAN_TINH =$QUE_QUAN_TINH; 
$this->QUE_QUAN_HUYEN =$QUE_QUAN_HUYEN; 
$this->QUE_QUAN_XA =$QUE_QUAN_XA; 
$this->NOI_SINH_DIA_CHI =$NOI_SINH_DIA_CHI; 
$this->NOI_SINH_TINH =$NOI_SINH_TINH; 
$this->NOI_SINH_HUYEN =$NOI_SINH_HUYEN; 
$this->NOI_SINH_XA =$NOI_SINH_XA; 
$this->CHA_TEN =$CHA_TEN; 
$this->CHA_NGHE_NGHIEP =$CHA_NGHE_NGHIEP; 
$this->CHA_DIA_CHI =$CHA_DIA_CHI; 
$this->CHA_NGAY_SINH =$CHA_NGAY_SINH; 
$this->CHA_DANG_VIEN =$CHA_DANG_VIEN; 
$this->CHA_MAT =$CHA_MAT; 
$this->ME_TEN =$ME_TEN; 
$this->ME_NGHE_NGHIEP =$ME_NGHE_NGHIEP; 
$this->ME_DIA_CHI =$ME_DIA_CHI; 
$this->ME_NGAY_SINH =$ME_NGAY_SINH; 
$this->ME_DANG_VIEN =$ME_DANG_VIEN; 
$this->ME_MAT =$ME_MAT; 
$this->LIEN_HE_TEN =$LIEN_HE_TEN; 
$this->LIEN_HE_DIA_CHI =$LIEN_HE_DIA_CHI; 
$this->LIEN_HE_SDT =$LIEN_HE_SDT; 
$this->LIEN_HE_MAIL =$LIEN_HE_MAIL; 
$this->MA_LOP =$MA_LOP; 
$this->DTBHK1 =$DTBHK1; 
$this->DTBHK2 =$DTBHK2; 
$this->DTBCN =$DTBCN; 
$this->HOC_LUC =$HOC_LUC; 
$this->HANH_KIEM =$HANH_KIEM; 
$this->SO_NGAY_NGHI =$SO_NGAY_NGHI; 
$this->DANH_HIEU_HS =$DANH_HIEU_HS; 
$this->DA_KET_CHUYEN =$DA_KET_CHUYEN; 
}
public function GetMA_HS(){
return $this->MA_HS;
} 
public function GetHO_TEN_HS(){
return $this->HO_TEN_HS;
} 
public function GetTEN_THUONG_GOI(){
return $this->TEN_THUONG_GOI;
} 
public function GetBI_DANH(){
return $this->BI_DANH;
} 
public function GetNGAY_SINH(){
return $this->NGAY_SINH;
} 
public function GetDAN_TOC(){
return $this->DAN_TOC;
} 
public function GetTON_GIAO(){
return $this->TON_GIAO;
} 
public function GetSUC_KHOE(){
return $this->SUC_KHOE;
} 
public function GetGIOI_TINH(){
return $this->GIOI_TINH;
} 
public function GetEMAIL(){
return $this->EMAIL;
} 
public function GetMA_BCS(){
return $this->MA_BCS;
} 
public function GetDIEN_THOAI(){
return $this->DIEN_THOAI;
} 
public function GetQUOC_TICH(){
return $this->QUOC_TICH;
} 
public function GetNGAY_VAO_TRUONG(){
return $this->NGAY_VAO_TRUONG;
} 
public function GetCON_THUONG_BINH_LOAI(){
return $this->CON_THUONG_BINH_LOAI;
} 
public function GetHOC_TRAI_TUYEN(){
return $this->HOC_TRAI_TUYEN;
} 
public function GetCON_LIET_SY(){
return $this->CON_LIET_SY;
} 
public function GetGIA_DINH_CCVCM(){
return $this->GIA_DINH_CCVCM;
} 
public function GetGIA_DINH_KK(){
return $this->GIA_DINH_KK;
} 
public function GetDIA_CHI_THUONG_TRU_DIA_CHI(){
return $this->DIA_CHI_THUONG_TRU_DIA_CHI;
} 
public function GetDIA_CHI_THUONG_TRU_TINH(){
return $this->DIA_CHI_THUONG_TRU_TINH;
} 
public function GetDIA_CHI_THUONG_TRU_HUYEN(){
return $this->DIA_CHI_THUONG_TRU_HUYEN;
} 
public function GetDIA_CHI_THUONG_TRU_XA(){
return $this->DIA_CHI_THUONG_TRU_XA;
} 
public function GetQUE_QUAN_DIA_CHI(){
return $this->QUE_QUAN_DIA_CHI;
} 
public function GetQUE_QUAN_TINH(){
return $this->QUE_QUAN_TINH;
} 
public function GetQUE_QUAN_HUYEN(){
return $this->QUE_QUAN_HUYEN;
} 
public function GetQUE_QUAN_XA(){
return $this->QUE_QUAN_XA;
} 
public function GetNOI_SINH_DIA_CHI(){
return $this->NOI_SINH_DIA_CHI;
} 
public function GetNOI_SINH_TINH(){
return $this->NOI_SINH_TINH;
} 
public function GetNOI_SINH_HUYEN(){
return $this->NOI_SINH_HUYEN;
} 
public function GetNOI_SINH_XA(){
return $this->NOI_SINH_XA;
} 
public function GetCHA_TEN(){
return $this->CHA_TEN;
} 
public function GetCHA_NGHE_NGHIEP(){
return $this->CHA_NGHE_NGHIEP;
} 
public function GetCHA_DIA_CHI(){
return $this->CHA_DIA_CHI;
} 
public function GetCHA_NGAY_SINH(){
return $this->CHA_NGAY_SINH;
} 
public function GetCHA_DANG_VIEN(){
return $this->CHA_DANG_VIEN;
} 
public function GetCHA_MAT(){
return $this->CHA_MAT;
} 
public function GetME_TEN(){
return $this->ME_TEN;
} 
public function GetME_NGHE_NGHIEP(){
return $this->ME_NGHE_NGHIEP;
} 
public function GetME_DIA_CHI(){
return $this->ME_DIA_CHI;
} 
public function GetME_NGAY_SINH(){
return $this->ME_NGAY_SINH;
} 
public function GetME_DANG_VIEN(){
return $this->ME_DANG_VIEN;
} 
public function GetME_MAT(){
return $this->ME_MAT;
} 
public function GetLIEN_HE_TEN(){
return $this->LIEN_HE_TEN;
} 
public function GetLIEN_HE_DIA_CHI(){
return $this->LIEN_HE_DIA_CHI;
} 
public function GetLIEN_HE_SDT(){
return $this->LIEN_HE_SDT;
} 
public function GetLIEN_HE_MAIL(){
return $this->LIEN_HE_MAIL;
} 
public function GetMA_LOP(){
return $this->MA_LOP;
} 
public function GetDTBHK1(){
return $this->DTBHK1;
} 
public function GetDTBHK2(){
return $this->DTBHK2;
} 
public function GetDTBCN(){
return $this->DTBCN;
} 
public function GetHOC_LUC(){
return $this->HOC_LUC;
} 
public function GetHANH_KIEM(){
return $this->HANH_KIEM;
} 
public function GetSO_NGAY_NGHI(){
return $this->SO_NGAY_NGHI;
} 
public function GetDANH_HIEU_HS(){
return $this->DANH_HIEU_HS;
} 
public function GetDA_KET_CHUYEN(){
return $this->DA_KET_CHUYEN;
} 
public function SetMA_HS($MA_HS){
$this->MA_HS =$MA_HS;
} 
public function SetHO_TEN_HS($HO_TEN_HS){
$this->HO_TEN_HS =$HO_TEN_HS;
} 
public function SetTEN_THUONG_GOI($TEN_THUONG_GOI){
$this->TEN_THUONG_GOI =$TEN_THUONG_GOI;
} 
public function SetBI_DANH($BI_DANH){
$this->BI_DANH =$BI_DANH;
} 
public function SetNGAY_SINH($NGAY_SINH){
$this->NGAY_SINH =$NGAY_SINH;
} 
public function SetDAN_TOC($DAN_TOC){
$this->DAN_TOC =$DAN_TOC;
} 
public function SetTON_GIAO($TON_GIAO){
$this->TON_GIAO =$TON_GIAO;
} 
public function SetSUC_KHOE($SUC_KHOE){
$this->SUC_KHOE =$SUC_KHOE;
} 
public function SetGIOI_TINH($GIOI_TINH){
$this->GIOI_TINH =$GIOI_TINH;
} 
public function SetEMAIL($EMAIL){
$this->EMAIL =$EMAIL;
} 
public function SetMA_BCS($MA_BCS){
$this->MA_BCS =$MA_BCS;
} 
public function SetDIEN_THOAI($DIEN_THOAI){
$this->DIEN_THOAI =$DIEN_THOAI;
} 
public function SetQUOC_TICH($QUOC_TICH){
$this->QUOC_TICH =$QUOC_TICH;
} 
public function SetNGAY_VAO_TRUONG($NGAY_VAO_TRUONG){
$this->NGAY_VAO_TRUONG =$NGAY_VAO_TRUONG;
} 
public function SetCON_THUONG_BINH_LOAI($CON_THUONG_BINH_LOAI){
$this->CON_THUONG_BINH_LOAI =$CON_THUONG_BINH_LOAI;
} 
public function SetHOC_TRAI_TUYEN($HOC_TRAI_TUYEN){
$this->HOC_TRAI_TUYEN =$HOC_TRAI_TUYEN;
} 
public function SetCON_LIET_SY($CON_LIET_SY){
$this->CON_LIET_SY =$CON_LIET_SY;
} 
public function SetGIA_DINH_CCVCM($GIA_DINH_CCVCM){
$this->GIA_DINH_CCVCM =$GIA_DINH_CCVCM;
} 
public function SetGIA_DINH_KK($GIA_DINH_KK){
$this->GIA_DINH_KK =$GIA_DINH_KK;
} 
public function SetDIA_CHI_THUONG_TRU_DIA_CHI($DIA_CHI_THUONG_TRU_DIA_CHI){
$this->DIA_CHI_THUONG_TRU_DIA_CHI =$DIA_CHI_THUONG_TRU_DIA_CHI;
} 
public function SetDIA_CHI_THUONG_TRU_TINH($DIA_CHI_THUONG_TRU_TINH){
$this->DIA_CHI_THUONG_TRU_TINH =$DIA_CHI_THUONG_TRU_TINH;
} 
public function SetDIA_CHI_THUONG_TRU_HUYEN($DIA_CHI_THUONG_TRU_HUYEN){
$this->DIA_CHI_THUONG_TRU_HUYEN =$DIA_CHI_THUONG_TRU_HUYEN;
} 
public function SetDIA_CHI_THUONG_TRU_XA($DIA_CHI_THUONG_TRU_XA){
$this->DIA_CHI_THUONG_TRU_XA =$DIA_CHI_THUONG_TRU_XA;
} 
public function SetQUE_QUAN_DIA_CHI($QUE_QUAN_DIA_CHI){
$this->QUE_QUAN_DIA_CHI =$QUE_QUAN_DIA_CHI;
} 
public function SetQUE_QUAN_TINH($QUE_QUAN_TINH){
$this->QUE_QUAN_TINH =$QUE_QUAN_TINH;
} 
public function SetQUE_QUAN_HUYEN($QUE_QUAN_HUYEN){
$this->QUE_QUAN_HUYEN =$QUE_QUAN_HUYEN;
} 
public function SetQUE_QUAN_XA($QUE_QUAN_XA){
$this->QUE_QUAN_XA =$QUE_QUAN_XA;
} 
public function SetNOI_SINH_DIA_CHI($NOI_SINH_DIA_CHI){
$this->NOI_SINH_DIA_CHI =$NOI_SINH_DIA_CHI;
} 
public function SetNOI_SINH_TINH($NOI_SINH_TINH){
$this->NOI_SINH_TINH =$NOI_SINH_TINH;
} 
public function SetNOI_SINH_HUYEN($NOI_SINH_HUYEN){
$this->NOI_SINH_HUYEN =$NOI_SINH_HUYEN;
} 
public function SetNOI_SINH_XA($NOI_SINH_XA){
$this->NOI_SINH_XA =$NOI_SINH_XA;
} 
public function SetCHA_TEN($CHA_TEN){
$this->CHA_TEN =$CHA_TEN;
} 
public function SetCHA_NGHE_NGHIEP($CHA_NGHE_NGHIEP){
$this->CHA_NGHE_NGHIEP =$CHA_NGHE_NGHIEP;
} 
public function SetCHA_DIA_CHI($CHA_DIA_CHI){
$this->CHA_DIA_CHI =$CHA_DIA_CHI;
} 
public function SetCHA_NGAY_SINH($CHA_NGAY_SINH){
$this->CHA_NGAY_SINH =$CHA_NGAY_SINH;
} 
public function SetCHA_DANG_VIEN($CHA_DANG_VIEN){
$this->CHA_DANG_VIEN =$CHA_DANG_VIEN;
} 
public function SetCHA_MAT($CHA_MAT){
$this->CHA_MAT =$CHA_MAT;
} 
public function SetME_TEN($ME_TEN){
$this->ME_TEN =$ME_TEN;
} 
public function SetME_NGHE_NGHIEP($ME_NGHE_NGHIEP){
$this->ME_NGHE_NGHIEP =$ME_NGHE_NGHIEP;
} 
public function SetME_DIA_CHI($ME_DIA_CHI){
$this->ME_DIA_CHI =$ME_DIA_CHI;
} 
public function SetME_NGAY_SINH($ME_NGAY_SINH){
$this->ME_NGAY_SINH =$ME_NGAY_SINH;
} 
public function SetME_DANG_VIEN($ME_DANG_VIEN){
$this->ME_DANG_VIEN =$ME_DANG_VIEN;
} 
public function SetME_MAT($ME_MAT){
$this->ME_MAT =$ME_MAT;
} 
public function SetLIEN_HE_TEN($LIEN_HE_TEN){
$this->LIEN_HE_TEN =$LIEN_HE_TEN;
} 
public function SetLIEN_HE_DIA_CHI($LIEN_HE_DIA_CHI){
$this->LIEN_HE_DIA_CHI =$LIEN_HE_DIA_CHI;
} 
public function SetLIEN_HE_SDT($LIEN_HE_SDT){
$this->LIEN_HE_SDT =$LIEN_HE_SDT;
} 
public function SetLIEN_HE_MAIL($LIEN_HE_MAIL){
$this->LIEN_HE_MAIL =$LIEN_HE_MAIL;
} 
public function SetMA_LOP($MA_LOP){
$this->MA_LOP =$MA_LOP;
} 
public function SetDTBHK1($DTBHK1){
$this->DTBHK1 =$DTBHK1;
} 
public function SetDTBHK2($DTBHK2){
$this->DTBHK2 =$DTBHK2;
} 
public function SetDTBCN($DTBCN){
$this->DTBCN =$DTBCN;
} 
public function SetHOC_LUC($HOC_LUC){
$this->HOC_LUC =$HOC_LUC;
} 
public function SetHANH_KIEM($HANH_KIEM){
$this->HANH_KIEM =$HANH_KIEM;
} 
public function SetSO_NGAY_NGHI($SO_NGAY_NGHI){
$this->SO_NGAY_NGHI =$SO_NGAY_NGHI;
} 
public function SetDANH_HIEU_HS($DANH_HIEU_HS){
$this->DANH_HIEU_HS =$DANH_HIEU_HS;
} 
public function SetDA_KET_CHUYEN($DA_KET_CHUYEN){
$this->DA_KET_CHUYEN =$DA_KET_CHUYEN;
} 
 }?>