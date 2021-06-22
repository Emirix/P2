<?php 

class DBX extends CI_Model{
    public function __construct(){
        parent::__construct();
    }

    public function resellerEkle($arr){
        $this->db->insert("reseller_hesap",$arr);
    }

    public function guncelleReseller($arr ){

    }

    public function tumHesaplarReseller(){
        return $this->db->get('reseller_hesap')->result_array();
    }
}